/*
Map version 2 : Fresno State 2013
*/
// begin global declarations for use anywhere in this document

// set window.map for global manipulation
var map;
// set single info box for global manipulation
var infoWindow;
// master object container
var markers = {};

markers.deciduousTrees = [];
markers.evergreenTrees = [];
markers.semiEvergreenTrees = [];
markers.deciduousConiferTrees = [];
markers.searchTrees = [];
markers.trees = [];

// list of booleans for show or don't show

var showAllTrees = false;
var showDeciduousTrees = false;
var showEvergreenTrees = false;
var showSemiEvergreenTrees = false;
var showDeciduousConiferTrees = false;

// end global declarations


// begin utility functions:

// this function sets all items in an array to visible or invisible
function setAllTrueOrFalse(baseElement,thevalue)
{
	map.setCenter(new google.maps.LatLng(36.812946,-119.746953));
	map.setZoom(16);

	if(thevalue==false){
		infoWindow.close();
	}
	if(baseElement) {
		for (var i=0; i < baseElement.length; i++){
			baseElement[i].setVisible(thevalue);
			infoWindow.close();
		}
	}
}

// begin toggle functions...
function toggleTrees(){
	showAllTrees = !showAllTrees;
	setAllTrueOrFalse(markers.trees,showAllTrees);
}

function toggleDeciduousTrees(){
	showDeciduousTrees = !showDeciduousTrees;
	setAllTrueOrFalse(markers.deciduousTrees,showDeciduousTrees);
}

function toggleEvergreenTrees(){
	showEvergreenTrees = !showEvergreenTrees;
	setAllTrueOrFalse(markers.evergreenTrees,showEvergreenTrees);
}

function toggleSemiEvergreenTrees(){
	showSemiEvergreenTrees = !showSemiEvergreenTrees;
	setAllTrueOrFalse(markers.semiEvergreenTrees,showSemiEvergreenTrees);
}

function toggleDeciduousConiferTrees(){
	showDeciduousConiferTrees = !showDeciduousConiferTrees;
	setAllTrueOrFalse(markers.deciduousConiferTrees,showDeciduousConiferTrees);
}

function toggleTree(treeTitle){
	setTreeVisibilityByTitle(treeTitle);
}

//ASM function used so that you can select each tree marker individually in the #tree_list (located in index.php)
function setTreeVisibilityByTitle(treeName){
	var howManyTrees = 0;	//ASM initialize counter so that you can target multiple trees with the same name

	var allSearch = markers.searchTrees;

	for(var i=0;i<allSearch.length;i+=1) { //ASM loops through the entire building array to find trees that contain the same name as the one's being checked off

		if(
			(allSearch[i].title === treeName))
		 { // if tree title in list is equal to title parameter:
			howManyTrees++;
			allSearch[i].setVisible(!allSearch[i].getVisible()); // toggle visibility

			if(allSearch[i].getVisible() === true){ // if it is now visible:
				// close info window
				infoWindow.close();

				// set position and zoom if there is only one occurence of a specific tree
				if(howManyTrees == 1){
					map.setCenter(allSearch[i].getPosition());
					map.setZoom(17);
				} else { //ASM if there are multiple occurences of a specific tree
					map.setCenter(new google.maps.LatLng(36.812946,-119.746953));
					map.setZoom(15);
				}
			} else {

				// set center to default and zoom
				map.setCenter(new google.maps.LatLng(36.812946,-119.746953));
				map.setZoom(15);
			}
		}
	}
}


// end toggle functions


// only fire when document is ready:
$(document).ready(function(){

	// create map options
	var mapOptions = {
		center: new google.maps.LatLng(36.812946,-119.746953),
		zoom: 16,
		tilt: 0,
		mapTypeId: google.maps.MapTypeId.HYBRID
	};

	// initialize map with map div, and mapOptions
	map = new google.maps.Map(document.getElementById("map"), mapOptions);

	// ASM Initialize one infoWindow so that there isn't any future problems
	infoWindow = new google.maps.InfoWindow();

	// internal function to add marker data from the webservice, to the marker array...
	function makeMarkerArray(dataElementRoot,markerElementRoot,icon) {
		for(var index=0; index<dataElementRoot.length;index++){
			var data = dataElementRoot[index];
			var backup = false;

			/* ASM Not sure what this part does
			if (data.title.indexOf('PHIL') > -1) {
				backup = icon;
				icon = '/map/images/website/darkgreen_Marker.png';
			} else if (false !== backup) {
				icon = backup;
				backup = false;
			}*/

			// ASM Makes individual markers for each object in the array
			var marker = new google.maps.Marker({
				visible: false,
				position: new google.maps.LatLng(data.lat, data.lng),
				map: map,
				icon: icon,
				title: data.title,
				dist: data.dist,
				html: data.description
			});

			// ASM Closes infoWindow if the map is clicked anywhere that isn't the infoWindow
			google.maps.event.addListener(map, "click", function(event) {
				infoWindow.close();
			});

			// ASM Opens infoWindow if the marker is clicked
			google.maps.event.addListener(marker, 'click', function(){
				var i = 1;
				infoWindow.setContent(this.html);
				infoWindow.open(map, this);
				map.setCenter(this.getPosition());

			});

			markerElementRoot.push(marker);
		}
	}

	// ASM Makes markers from each specified array
	// makeMarkerArray(all_markers.deciduousTrees,markers.deciduousTrees, '/map/images/website/brown_marker.png');
	// makeMarkerArray(all_markers.evergreenTrees,markers.evergreenTrees, '/map/images/website/green.png');
	// makeMarkerArray(all_markers.semiEvergreenTrees,markers.semiEvergreenTrees, '/map/images/website/green.png');
	// makeMarkerArray(all_markers.deciduousConiferTrees,markers.deciduousConiferTrees, '/map/images/website/blue_marker.png');
	makeMarkerArray(all_markers.trees,markers.trees,'/map/images/website/darkgreen_Marker.png');
	makeMarkerArray(all_markers.searchTrees,markers.searchTrees,'/map/images/website/gold.png');

	// add listeners for toggling:
	$('#deciduous-trees-cb').on('click', toggleDeciduousTrees);
	$('#evergreen-trees-cb').on('click', toggleEvergreenTrees);
	$('#semi-evergreen-trees-cb').on('click', toggleSemiEvergreenTrees);
	$('#deciduous-conifer-trees-cb').on('click', toggleDeciduousConiferTrees);
	$("#trees-cb").on("click", toggleTrees);

	//ASM Function to get the text within the input tags found in the #tree_list (located in index.php)
	$("#search_list input[type='checkbox']").on("click",function(evt){
			var cb = $(this).val();
			var treeName = $('label[for="'+cb+'"]').text();
				toggleTree(treeName); //ASM redirects to the toggleTree function found near the beginning of the file
	});


	// ASM Function to search for trees within the #search_list
	$("#search-tree input[type=search]").on("keyup",function(evt){
		var searchList = $("#search_list").children("span"); // ASM the list of all the elements in the #search_list in index.php
		var queryTree = ($(this).val().toLowerCase());
			$(searchList).each(function(index, element){	// ASM uses jquery to transverse through each element in the searchList variable and compares it with the user input in the search bar
				if($(this).text().toLowerCase().includes(queryTree))
				{
					$(element).css("display", "block");
				} else
				{
					$(element).css("display", "none"); // This is to exclude results that don't fit the search
				}
			});
			$("#search_list").css("display", "block");
});

});
