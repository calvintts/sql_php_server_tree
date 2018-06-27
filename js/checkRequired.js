function isValidEmail(inString) {
	return (inString.indexOf(".")!=-1 && inString.indexOf("@")!=-1 ) ? true : false;
}

function checkRequired()
{
/* version .03 */
/* rorobinson */
/* last updated: 2013-07-05 15:36:00.000 */

	// get the element of the form that contains the required fields...:
	var reqFields = document.getElementById('required');
	// split the values of the required fields into an array...:
	var theFormElements = reqFields.value.split(",");
	// doSubmit works as boolean and tells the function if it is ok to continue to the submit:
	var doSubmit = 1;

	// loop over each item in the array of required fields:
	// this pass is for clearing each debug div...
	for (i = 0; i < theFormElements.length; i += 1) {
		// there should be a div beneath each form input that is named debug_ + 'input id'
		// represented here as the value of the items in the required array

		// check to see if the div exists, 
		// if it does, great, if it does not, create it and attach it to:
		// document.getElementById(theFormElements[i]).parent.appendChild();
		var tempDoc = document.getElementById('debug_' + theFormElements[i]);

		if ( tempDoc !== null) {		
			tempDoc.innerHTML = "" ;
		} else {
			var newSpan = document.createElement("span");
			newSpan.style.color = "#E00"; 
			newSpan.id = 'debug_' + theFormElements[i];
			newSpan.innerHTML = "";

			//console.log("Attempt : " + theFormElements[i] + " / " + theFormElements[i].parentNode);

			document.getElementById(theFormElements[i]).parentNode.appendChild(newSpan);
		}
	}

	// second pass -- should these be combined?
	for (i = 0; i < theFormElements.length; i+=1) {
		// if element exists in the form:
		if(document.getElementById(theFormElements[i]) !== null) {
			// if the value of any required form item is blank, undefined or set to default:
			if( document.getElementById(theFormElements[i]).value === "" 
				|| document.getElementById(theFormElements[i]).value === undefined 
				|| document.getElementById(theFormElements[i]).value === "Please Select:") {
				// tell the debug div to display a red *required message...
				var tempDoc = document.getElementById('debug_' + theFormElements[i]);
				tempDoc.innerHTML = "(* required)";
				// and set doSubmit flag to false... do not go on...
				doSubmit=0;
			}
			// also check for email formatting...
			if( theFormElements[i].indexOf("email") != -1)
			{
				if(!isValidEmail(document.getElementById(theFormElements[i]).value))
				{
					var tempDoc = document.getElementById('debug_' + theFormElements[i]);
					//tempDoc.innerHTML = "";
					tempDoc.innerHTML = "(* email address not valid)";
					doSubmit=0;
				}
			}
		}
	}
	// if doSubmit still set to true, submit...
	if(doSubmit == 1) {
		document.getElementById(theFormElements[0]).form.submit();
	}
}