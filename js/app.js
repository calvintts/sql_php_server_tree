(function() {
	
	var mouseIsDown = false, clickX, clickY, releaseX, releaseY, req = null;

	function makeMenuVisible() {
		var hidden = $('.center');
		if (!hidden.hasClass('visible')) {
			hidden.animate({
				"left" : "160px"
			}, "200").addClass('visible');
		} else {
			hidden.animate({
				"left" : "0px"
			}, "200").removeClass('visible');
		}
	}

	function makeSettingsVisible() {
		var hidden = $('.center');
		if (!hidden.hasClass('visible')) {
			hidden.animate({
				"left" : "-160px"
			}, "200").addClass('visible');
		} else {
			hidden.animate({
				"left" : "0px"
			}, "200").removeClass('visible');
		}
	}

	// action event methods:

	function onMouseStart(e) {
		// basically setting globals clickY and clickX to where click or touch event started...:
		if (e.changedTouches && e.changedTouches.length > 0) {
			clickX = e.changedTouches[0].pageX;
			clickY = e.changedTouches[0].pageY;
		} else {
			clickX = e.pageX;
			clickY = e.pageY;
		}

		// and set global indicator that mouse is being dragged
		mouseIsDown = true;
	}

	function onMouseEnd(e) {
		// basically setting globals clickY and clickX to where click or touch event ended...:
		var newKey, mouseIsDown = false;

		if (e.changedTouches && e.changedTouches.length > 0) {
			releaseX = e.changedTouches[0].pageX;
			releaseY = e.changedTouches[0].pageY;

			// determine greatest swipe directional velocity:
			var xOry = (Math.abs(releaseX - clickX) > Math.abs(releaseY - clickY)) ? "x" : "y";

			switch (xOry) {

				case 'x':
					if (Math.abs(releaseX - clickX) > 80) {
						if (releaseX - clickX > 0) {// moved x in a positive way
							// show menu...
							makeMenuVisible();
						} else {// moved x in a nagative way
							// show settings
							makeSettingsVisible();
						}
					}
					break;
			} // end case 'x'
		} else {
			releaseX = e.pageX;
			releaseY = e.pageY;
		}
	}


	window.addEventListener("load", function() {
		
		window.scrollTo(0, 1);

		// check for hash..
		if (window.location.hash) {
			//console.log("loaded with a hash of: " + window.location.hash);
			//performHashChangeOperation();
		} else {
			//sendRequest("/html5/ws/?comd=home");
		}
		
		//$('.centerIsle').html( window.innerHeight + ", " + window.innerWidth);
		
		$('.container').css('height',(window.innerHeight)+"px");
		$('.center').css('height',(window.innerHeight-10)+"px");
		
		$('#map').css('height',(window.innerHeight-70)+"px");
		
	});



	document.getElementById("showMenu").addEventListener("click", makeMenuVisible);
	document.getElementById("showSettings").addEventListener("click", makeSettingsVisible);

	document.getElementsByTagName("header")[0].addEventListener('mousedown', onMouseStart, false);
	document.getElementsByTagName("header")[0].addEventListener('mouseup', onMouseEnd, false);

	document.getElementsByTagName("header")[0].addEventListener('touchstart', onMouseStart, false);
	document.getElementsByTagName("header")[0].addEventListener('touchend', onMouseEnd, false);

}());
