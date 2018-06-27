<!DOCTYPE html>
<html lang="en">
<head>
<!-- Published on Jan 6 10:10 AM by ASM-->
<!-- on Jan 6 10:30, AM Adriana added new footer -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Campus Map : Fresno State</title>
<meta name="keywords" content="Fresno State Map, Map of Fresno State, CSUF Map" />
<meta name="description" content="Campus map for California State University, Fresno. This is the interactive map for Fresno State." />

<link rel="stylesheet" href="//www.fresnostate.edu/webfontkit/font-styles.css" type="text/css" />
<link href="//www.fresnostate.edu/home/css/quick_main_styles_new_footer_010617.css" rel="stylesheet" type="text/css" />
<link href="//www.fresnostate.edu/home/css/secondary_body.css" rel="stylesheet" type="text/css" />
<link href="css/map.css" rel="stylesheet" type="text/css" />

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLEWJz-bfK6rFBvlanDLil1QcrH92qgRI&callback=initMap"
  type="text/javascript"></script>

<script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36302138-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>


<body>

<div id="container">

	<div id="skipnav">
		<a href="#menu" tabindex="1">Skip to menu</a>
		<a href="#content" tabindex="2">Skip to page content</a>
	</div>

	<div id="header">
    <div id="logo">
<a href="http://www.fresnostate.edu">
<img alt="Fresno State Logo" src="http://www.fresnostate.edu/omniresources/images/fresno-state-retina-logo.gif">
</a>
<h1>Fresno State</h1>
</div>
<div id="donate-bt"><a href="https://www.fresnostate.edu/advancement/giving/givenow.html"><img src="http://www.fresnostate.edu/omniresources/images/donate-button-top.gif" alt="Give now button" /></a></div>
		<div id="search"><?php readfile('/var/www/src/user/htdocs/omniresources/search_form.ssi'); ?></div>

		<!-- Quick links -->
		<ul id="primaryNav">
			<li class="quicklinknav"><span class="navBorder"><a id="quickLink" href="#"><span class="qlText"></span></a></span>
					<div id="subLinksContainer">
						<div id="subLinks"><?php readfile('./include/quicklinks.ssi'); ?></div>
					</div>
			</li>
		</ul>
	</div>

	<div id="nav">
		<a name="menu"> </a>
		<ul>
			<li id="about" class="about"><a href="http://www.fresnostate.edu/home/about/index.html">ABOUT US</a></li>
			<li id="admissions"><a href="http://www.fresnostate.edu/home/admissions/index.html">ADMISSIONS</a></li>
			<li id="academics"><a href="http://www.fresnostate.edu/home/academics/index.html">ACADEMICS</a></li>
			<li id="studentlife"><a href="http://www.fresnostate.edu/home/student_life/index.html">STUDENT LIFE</a></li>
			<li id="research"><a href="http://www.fresnostate.edu/home/research/index.html">RESEARCH</a></li>
			<li id="athletics" class="athletics"><a href="http://www.fresnostate.edu/home/athletics/index.html">ATHLETICS</a></li>
	   </ul>
		<div class="clearit"> </div>

		<div id="emergency"><?php include "http://www.fresnostate.edu/fresnostateemergency/index.html" ?></div>
	</div>

	<div id="wrapper" class="clearfix">

		<div id="banner">
			<h1>Tree Map</h1> <br /></span>
		</div>

	<div id="content" class="clearfix">
      <div id="col1">

  			<div id="map"> </div> <!-- Google maps api-->

        <p>Map Locations will be verified every semester <span class="rightfloat">Verified: 8/1/13, Updated: 8/16/13 | <a href="https://docs.google.com/spreadsheet/viewform?formkey=dDlaelZvaTcxRXNGeERyYVhXUThLdXc6MQ">Feedback</a></span></p>
      </div>
<div id="col3"><a id="content"> </a>
	<div id="buttons"><!-- Start of Buttons -->
		<p><img src="images/google-marker.jpg" width="20" height="30" alt="Google marker" /> Click on a map icon for more details.</p>

<!-- ASM Section where the category checkbox buttons are -->
		<div id="tree">
			<h4>Tree Selection:</h4><!-- Start of Buttons -->
			 <span><input type="checkbox" value="trees-cb" id="trees-cb" name="trees-cb" class="checkbox" title="Displays markers on map of all the trees on the map"><label for="trees-cb">All Trees</label> <br /></span>

			 <span><input type="checkbox" value="deciduous-trees-cb" id="deciduous-trees-cb" name="deciduous-trees-cb" class="checkbox" title="Displays markers on map of all the deciduous trees"><label for="deciduous-trees-cb">Deciduous Trees</label> <br /></span>

       <span><input type="checkbox" value="evergreen-trees-cb" id="evergreen-trees-cb" name="evergreen-trees-cb" class="checkbox" title="Displays markers on map of all the evergreen trees"><label for="evergreen-trees-cb">Evergreen Trees</label> <br /></span>

       <span><input type="checkbox" value="semi-evergreen-trees-cb" id="semi-evergreen-trees-cb" name="semi-evergreen-trees-cb" class="checkbox" title="Displays markers on map of all the semi-evergreen trees"><label for="semi-evergreen-trees-cb">Semi-Evergreen Trees</label> <br /></span>

       <span><input type="checkbox" value="deciduous-conifer-trees-cb" id="deciduous-conifer-trees-cb" name="deciduous-conifer-trees-cb" class="checkbox" title="Displays markers on map of all the deciduous conifer trees"><label for="deciduous-conifer-trees-cb">Deciduous Conifer Trees</label> <br /></span>
		</div>



      <!-- ASM Search for a Tree -->
      <div id="search-tree">
      <h4>Select a Tree:</h4> <span><input type="search" placeholder="Tree Name" id="search-box" name="search-box" title="Displays the Trees that fit in the search" /><label for="search-box"></label> <br /></span>

      <!-- ASM span tag is used to wrap inputs so that it can be selected as one node in jquery -->
      <div id="search_list">
         <span><input type="checkbox" value="red_oak" id="red_oak" name="red_oak" title="Displays red oak on campus" /><label for="red_oak">Red Oak</label><br /></span>

               <span><input type="checkbox" value="fern_pine" id="fern_pine" name="fern_pine" title="Displays fern pine on campus" /><label for="fern_pine">Fern Pine</label> <br /></span>

               <span><input type="checkbox" value="willow_pittosporum" id="willow_pittosporum" name="willow_pittosporum" title="Displays willowpittosporum on campus" /><label for="willow_pittosporum">Willow Pittosporum</label> <br /></span>

               <span><input type="checkbox" value="Colorado_blue_spruce" id="Colorado_blue_spruce" name="Colorado_blue_spruce" title="Displays Colorado blue spruce on campus" /><label for="Colorado_blue_spruce">Colorado Blue Spruce</label> <br /></span>

               <span><input type="checkbox" value="camphor_tree" id="camphor_tree" name="camphor_tree" title="Displays camphor tree on campus" /><label for="camphor_tree">Camphor Tree</label> <br /></span>

               <span><input type="checkbox" value="Carolina_cherry_laurel" id="Carolina_cherry_laurel" name="Carolina_cherry_laurel" title="Displays Carolina cherry laurel on campus" /><label for="Carolina_cherry_laurel">Carolina Cherry Laurel</label> <br /></span>

               <span><input type="checkbox" value="Modesto_Ash" id="Modesto_Ash" name="Modesto_Ash" title="Displays Modesto Ash on campus" /><label for="Modesto_Ash">Modesto Ash</label> <br /></span>

               <span><input type="checkbox" value="Red_Maple" id="Red_Maple" name="Red_Maple" title="Displays Red Maple on campus" /><label for="Red_Maple">Red Maple</label> <br /></span>

               <span><input type="checkbox" value="Colorado_Spruce" id="Colorado_Spruce" name="Colorado_Spruce" title="Displays Colorado Spruce on campus" /><label for="Colorado_Spruce">Colorado Spruce</label> <br /></span>

               <span><input type="checkbox" value="Afghan_Pine" id="Afghan_Pine" name="Afghan_Pine" title="Displays Afghan Pine on campus" /><label for="Afghan_Pine">Afghan Pine</label> <br /></span>

               <span><input type="checkbox" value="Canary_Island_Pine" id="Canary_Island_Pine" name="Canary_Island_Pine" title="Displays Canary Island Pine on campus" /><label for="Canary_Island_Pine">Canary Island Pine</label> <br /></span>

               <span><input type="checkbox" value="Peppermint_Gum" id="Peppermint_Gum" name="Peppermint_Gum" title="Displays Peppermint Gum on campus" /><label for="Peppermint_Gum">Peppermint Gum</label> <br /></span>

               <span><input type="checkbox" value="Shiny_Xylosma" id="Shiny_Xylosma" name="Shiny_Xylosma" title="Displays Shiny Xylosma on campus" /><label for="Shiny_Xylosma">Shiny Xylosma</label> <br /></span>

               <span><input type="checkbox" value="Silk_Tree" id="Silk_Tree" name="Silk_Tree" title="Displays Silk Tree on campus" /><label for="Silk_Tree">Silk Tree</label> <br /></span>

               <span><input type="checkbox" value="Babylon_Weeping_Willow" id="Babylon_Weeping_Willow" name="Babylon_Weeping_Willow" title="Displays Babylon Weeping Willow on campus" /><label for="Babylon_Weeping_Willow">Babylon Weeping Willow</label> <br /></span>

               <span><input type="checkbox" value="Kurrajong_Bottle_Tree" id="Kurrajong_Bottle_Tree" name="Kurrajong_Bottle_Tree" title="Displays Kurrajong Bottle Tree on campus" /><label for="Kurrajong_Bottle_Tree">Kurrajong Bottle Tree</label> <br /></span>

               <span><input type="checkbox" value="Aristocrat_Pear" id="Aristocrat_Pear" name="Aristocrat_Pear" title="Displays Aristocrat Pear on campus" /><label for="Aristocrat_Pear">Aristocrat Pear</label> <br /></span>

               <span><input type="checkbox" value="Cork_Oak" id="Cork_Oak" name="Cork_Oak" title="Displays Cork Oak on campus" /><label for="Cork_Oak">Cork Oak</label> <br /></span>

               <span><input type="checkbox" value="London_Plane_Tree" id="London_Plane_Tree" name="London_Plane_Tree" title="Displays London Plane Tree on campus" /><label for="London_Plane_Tree">London Plane Tree</label> <br /></span>

               <span><input type="checkbox" value="American_Sweet_Gum" id="American_Sweet_Gum" name="American_Sweet_Gum" title="Displays American Sweet Gum on campus" /><label for="American_Sweet_Gum">American Sweet Gum</label> <br /></span>

               <span><input type="checkbox" value="Olive" id="Olive" name="Olive" title="Displays Olive on campus" /><label for="Olive">Olive</label> <br /></span>

               <span><input type="checkbox" value="Chinese_Pistache" id="Chinese_Pistache" name="Chinese_Pistache" title="Displays Chinese Pistache on campus" /><label for="Chinese_Pistache">Chinese Pistache</label> <br /></span>

               <span><input type="checkbox" value="Japanese_Maple" id="Japanese_Maple" name="Japanese_Maple" title="Displays Japanese Maple on campus" /><label for="Japanese_Maple">Japanese Maple</label> <br /></span>

               <span><input type="checkbox" value="Southern_Magnolia" id="Southern_Magnolia" name="Southern_Magnolia" title="Displays Southern Magnolia on campus" /><label for="Southern_Magnolia">Southern Magnolia</label> <br /></span>

               <span><input type="checkbox" value="Japanese_Black_Pine" id="Japanese_Black_Pine" name="Japanese_Black_Pine" title="Displays Japanese Black Pine on campus" /><label for="Japanese_Black_Pine">Japanese Black Pine</label> <br /></span>

               <span><input type="checkbox" value="Popcorn_Tree" id="Popcorn_Tree" name="Popcorn_Tree" title="Displays Chinese Tallow Tree, Popcorn Tree on campus" /><label for="Popcorn_Tree">Chinese Tallow Tree, Popcorn Tree</label> <br /></span>

               <span><input type="checkbox" value="Valley Oak" id="Valley Oak" name="Valley Oak" title="Displays Valley Oak, California White Oak on campus" /><label for="Valley Oak">Valley Oak, California White Oak</label> <br /></span>

               <span><input type="checkbox" value="Crape_Myrtle" id="Crape_Myrtle" name="Crape_Myrtle" title="Displays Crape Myrtle on campus" /><label for="Crape_Myrtle">Crape Myrtle</label> <br /></span>

               <span><input type="checkbox" value="California_Live_Oak" id="California_Live_Oak" name="California_Live_Oak" title="Displays Coast Live Oak, California Live Oak on campus" /><label for="California_Live_Oak">Coast Live Oak, California Live Oak</label> <br /></span>

               <span><input type="checkbox" value="Foothill_Pine" id="Foothill_Pine" name="Foothill_Pine" title="Displays Foothill Pine, Gray Pine on campus" /><label for="Foothill_Pine">Foothill Pine, Gray Pine</label> <br /></span>

               <span><input type="checkbox" value="Basket_Oak" id="Basket_Oak" name="Basket_Oak" title="Displays Basket Oak, Chestnut Oak on campus" /><label for="Basket_Oak">Basket Oak, Chestnut Oak</label> <br /></span>

               <span><input type="checkbox" value="Japanese_Red_Pine" id="Japanese_Red_Pine" name="Japanese_Red_Pine" title="Displays Japanese Red Pine on campus" /><label for="Japanese_Red_Pine">Japanese Red Pine</label> <br /></span>

               <span><input type="checkbox" value="California_sycamore" id="California_sycamore" name="California_sycamore" title="Displays California sycamore on campus" /><label for="California_sycamore">California sycamore</label> <br /></span>

               <span><input type="checkbox" value="Pecan" id="Pecan" name="Pecan" title="Displays Pecan on campus" /><label for="Pecan">Pecan</label> <br /></span>

               <span><input type="checkbox" value="Cherry_Plum" id="Cherry_Plum" name="Cherry_Plum" title="Displays Purple Leaf Plum, Cherry Plum on campus" /><label for="Cherry_Plum">Purple Leaf Plum, Cherry Plum</label> <br /></span>

               <span><input type="checkbox" value="Umbrella_Pine" id="Umbrella_Pine" name="Umbrella_Pine" title="Displays Italian Stone Pine, Umbrella Pine on campus" /><label for="Umbrella_Pine">Italian Stone Pine, Umbrella Pine</label> <br /></span>

               <span><input type="checkbox" value="Bunya_Bunya" id="Bunya_Bunya" name="Bunya_Bunya" title="Displays Bunya Bunya on campus" /><label for="Bunya_Bunya">Bunya Bunya</label> <br /></span>

               <span><input type="checkbox" value="Bay_Laurel" id="Bay_Laurel" name="Bay_Laurel" title="Displays Bay Laurel, Grecian Laurel, Sweet Bay on campus" /><label for="Bay_Laurel">Bay Laurel, Grecian Laurel, Sweet Bay</label> <br /></span>

               <span><input type="checkbox" value="Lombardy_Poplar" id="Lombardy_Poplar" name="Lombardy_Poplar" title="Displays Lombardy Poplar on campus" /><label for="Lombardy_Poplar">Lombardy Poplar</label> <br /></span>

               <span><input type="checkbox" value="Austrian_Black_Pine" id="Austrian_Black_Pine" name="Austrian_Black_Pine" title="Displays Austrian Black Pine on campus" /><label for="Austrian_Black_Pine">Austrian Black Pine</label> <br /></span>

               <span><input type="checkbox" value="Eastern_Redbud" id="Eastern_Redbud" name="Eastern_Redbud" title="Displays Eastern Redbud on campus" /><label for="Eastern_Redbud">Eastern Redbud</label> <br /></span>

               <span><input type="checkbox" value="Dawn_Redwood" id="Dawn_Redwood" name="Dawn_Redwood" title="Displays Dawn Redwood on campus" /><label for="Dawn_Redwood">Dawn Redwood</label> <br /></span>

               <span><input type="checkbox" value="Eley_Crabapple" id="Eley_Crabapple" name="Eley_Crabapple" title="Displays Eley Crabapple on campus" /><label for="Eley_Crabapple">Eley Crabapple</label> <br /></span>

               <span><input type="checkbox" value="Big_leaf_Linden" id="Big_leaf_Linden" name="Big_leaf_Linden" title="Displays Big-leaf Linden on campus" /><label for="Big_leaf_Linden">Big-leaf Linden</label> <br /></span>

               <span><input type="checkbox" value="Yoshino_flowering_cherry" id="Yoshino_flowering_cherry" name="Yoshino_flowering_cherry" title="Displays Yoshino flowering cherry on campus" /><label for="Yoshino_flowering_cherry">Yoshino flowering cherry</label> <br /></span>

               <span><input type="checkbox" value="Mexican_Fan_Palm" id="Mexican_Fan_Palm" name="Mexican_Fan_Palm" title="Displays Mexican Fan Palm, Thread Palm on campus" /><label for="Mexican_Fan_Palm">Mexican Fan Palm, Thread Palm</label> <br /></span>

               <span><input type="checkbox" value="Deodar_Cedar" id="Deodar_Cedar" name="Deodar_Cedar" title="Displays Deodar Cedar on campus" /><label for="Deodar_Cedar">Deodar Cedar</label> <br /></span>

               <span><input type="checkbox" value="Chinese_Hackberry" id="Chinese_Hackberry" name="Chinese_Hackberry" title="Displays Chinese Hackberry on campus" /><label for="Chinese_Hackberry">Chinese Hackberry</label> <br /></span>

               <span><input type="checkbox" value="Maidenhair Tree" id="Maidenhair Tree" name="Maidenhair Tree" title="Displays Maidenhair Tree on campus" /><label for="Maidenhair Tree">Maidenhair Tree</label> <br /></span>

               <span><input type="checkbox" value="Beef_Wood" id="Beef_Wood" name="Beef_Wood" title="Displays Beef Wood, She-oak, Horsetail Tree on campus" /><label for="Beef_Wood">Beef Wood, She-oak, Horsetail Tree</label> <br /></span>

               <span><input type="checkbox" value="Pistachio" id="Pistachio" name="Pistachio" title="Displays Pistachio on campus" /><label for="Pistachio">Pistachio</label> <br /></span>

               <span><input type="checkbox" value="Jelecote_Pine" id="Jelecote_Pine" name="Jelecote_Pine" title="Displays Jelecote Pine, Mexican Weeping Pine on campus" /><label for="Jelecote_Pine">Jelecote Pine, Mexican Weeping Pine</label> <br /></span>

               <span><input type="checkbox" value="Common_Fig" id="Common_Fig" name="Common_Fig" title="Displays Common Fig on campus" /><label for="Common_Fig">Common Fig</label> <br /></span>

               <span><input type="checkbox" value="Purple_Robe_Locust" id="Purple_Robe_Locust" name="Purple_Robe_Locust" title="Displays Purple Robe Locust on campus" /><label for="Purple_Robe_Locust">Purple Robe Locust</label> <br /></span>

               <span><input type="checkbox" value="Saucer_Magnolia" id="Saucer_Magnolia" name="Saucer_Magnolia" title="Displays Saucer Magnolia on campus" /><label for="Saucer_Magnolia">Saucer Magnolia</label> <br /></span>

               <span><input type="checkbox" value="Mediterranean_Fan_Palm" id="Mediterranean_Fan_Palm" name="Mediterranean_Fan_Palm" title="Displays Mediterranean Fan Palm, European Fan Palm on campus" /><label for="Mediterranean_Fan_Palm">Mediterranean Fan Palm, European Fan Palm</label> <br /></span>

               <span><input type="checkbox" value="Cabbage_Palm" id="Cabbage_Palm" name="Cabbage_Palm" title="Displays Cabbage Palm, Palmetto Palm on campus" /><label for="Cabbage_Palm">Cabbage Palm, Palmetto Palm</label> <br /></span>

               <span><input type="checkbox" value="Evergreen_Pear" id="Evergreen_Pear" name="Evergreen_Pear" title="Displays Evergreen Pear on campus" /><label for="Evergreen_Pear">Evergreen Pear</label> <br /></span>

               <span><input type="checkbox" value="Blue_Atlas_Cedar" id="Blue_Atlas_Cedar" name="Blue_Atlas_Cedar" title="Displays Blue Atlas Cedar on campus" /><label for="Blue_Atlas_Cedar">Blue Atlas Cedar</label> <br /></span>

               <span><input type="checkbox" value="Pindo_palm" id="Pindo_palm" name="Pindo_palm" title="Displays Pindo palm, jelly palm on campus" /><label for="Pindo_palm">Pindo palm, jelly palm</label> <br /></span>

               <span><input type="checkbox" value="Chaste_Tree" id="Chaste_Tree" name="Chaste_Tree" title="Displays Chaste Tree, Hemp Tree on campus" /><label for="Chaste_Tree">Chaste Tree, Hemp Tree</label> <br /></span>

               <span><input type="checkbox" value="Jacaranda" id="Jacaranda" name="Jacaranda" title="Displays Jacaranda on campus" /><label for="Jacaranda">Jacaranda</label> <br /></span>

               <span><input type="checkbox" value="Sawleaf_Zelkova" id="Sawleaf_Zelkova" name="Sawleaf_Zelkova" title="Displays Sawleaf Zelkova, Japanese Zelkova on campus" /><label for="Sawleaf_Zelkova">Sawleaf Zelkova, Japanese Zelkova</label> <br /></span>

               <span><input type="checkbox" value="Bald_Cypress" id="Bald_Cypress" name="Bald_Cypress" title="Displays Bald Cypress on campus" /><label for="Bald_Cypress">Bald Cypress</label> <br /></span>

               <span><input type="checkbox" value="Strawberry_Tree" id="Strawberry_Tree" name="Strawberry_Tree" title="Displays Strawberry Tree on campus" /><label for="Strawberry_Tree">Strawberry Tree</label> <br /></span>

               <span><input type="checkbox" value="Bradford_Pear" id="Bradford_Pear" name="Bradford_Pear" title="Displays Bradford Pear on campus" /><label for="Bradford_Pear">Bradford Pear</label> <br /></span>

               <span><input type="checkbox" value="White_Mulberry" id="White_Mulberry" name="White_Mulberry" title="Displays White Mulberry on campus" /><label for="White_Mulberry">White Mulberry</label> <br /></span>

               <span><input type="checkbox" value="Giant_Sequoia" id="Giant_Sequoia" name="Giant_Sequoia" title="Displays Giant Sequoia on campus" /><label for="Giant_Sequoia">Giant Sequoia</label> <br /></span>

               <span><input type="checkbox" value="Queen_Palm" id="Queen_Palm" name="Queen_Palm" title="Displays Queen Palm on campus" /><label for="Queen_Palm">Queen Palm</label> <br /></span>

               <span><input type="checkbox" value="Cinnamon_Camphor" id="Cinnamon_Camphor" name="Cinnamon_Camphor" title="Displays Cinnamon Camphor on campus" /><label for="Cinnamon_Camphor">Cinnamon Camphor</label> <br /></span>

               <span><input type="checkbox" value="Star_Magnolia" id="Star_Magnolia" name="Star_Magnolia" title="Displays Star Magnolia on campus" /><label for="Star_Magnolia">Star Magnolia</label> <br /></span>

               <span><input type="checkbox" value="Chinese_Sweet_Gum" id="Chinese_Sweet_Gum" name="Chinese_Sweet_Gum" title="Displays Chinese Sweet Gum, Formosan Sweet Gum on campus" /><label for="Chinese_Sweet_Gum">Chinese Sweet Gum, Formosan Sweet Gum</label> <br /></span>

               <span><input type="checkbox" value="Weeping_Bottlebrush" id="Weeping_Bottlebrush" name="Weeping_Bottlebrush" title="Displays Weeping Bottlebrush on campus" /><label for="Weeping_Bottlebrush">Weeping Bottlebrush</label> <br /></span>

               <span><input type="checkbox" value="Western_Redbud" id="Western_Redbud" name="Western_Redbud" title="Displays Western Redbud, California Redbud on campus" /><label for="Western_Redbud">Western Redbud, California Redbud</label> <br /></span>

               <span><input type="checkbox" value="California_Black_oak" id="California_Black_oak" name="California_Black_oak" title="Displays California Black oak on campus" /><label for="California_Black_oak">California Black oak</label> <br /></span>

               <span><input type="checkbox" value="Evergreen_Maple" id="Evergreen_Maple" name="Evergreen_Maple" title="Displays Evergreen Maple on campus" /><label for="Evergreen_Maple">Evergreen Maple</label> <br /></span>

               <span><input type="checkbox" value="Honey_Locust" id="Honey_Locust" name="Honey_Locust" title="Displays Honey Locust on campus" /><label for="Honey_Locust">Honey Locust</label> <br /></span>

               <span><input type="checkbox" value="Japanese_Flowering_Crabapple" id="Japanese_Flowering_Crabapple" name="Japanese_Flowering_Crabapple" title="Displays Japanese Flowering Crabapple on campus" /><label for="Japanese_Flowering_Crabapple">Japanese Flowering Crabapple</label> <br /></span>

               <span><input type="checkbox" value="Raywood_Ash" id="Raywood_Ash" name="Raywood_Ash" title="Displays Raywood Ash on campus" /><label for="Raywood_Ash">Raywood Ash</label> <br /></span>

               <span><input type="checkbox" value="Italian_Cypress" id="Italian_Cypress" name="Italian_Cypress" title="Displays Italian Cypress on campus" /><label for="Italian_Cypress">Italian Cypress</label> <br /></span>

               <span><input type="checkbox" value="Red_Ironbark" id="Red_Ironbark" name="Red_Ironbark" title="Displays Red Ironbark on campus" /><label for="Red_Ironbark">Red Ironbark</label> <br /></span>

               <span><input type="checkbox" value="Aleppo_Pine" id="Aleppo_Pine" name="Aleppo_Pine" title="Displays Aleppo Pine on campus" /><label for="Aleppo_Pine">Aleppo Pine</label> <br /></span>

               <span><input type="checkbox" value="White_Alder" id="White_Alder" name="White_Alder" title="Displays White Alder on campus" /><label for="White_Alder">White Alder</label> <br /></span>

               <span><input type="checkbox" value="Coast_Redwood" id="Coast_Redwood" name="Coast_Redwood" title="Displays Coast Redwood, California Redwood on campus" /><label for="Coast_Redwood">Coast Redwood, California Redwood</label> <br /></span>

               <span><input type="checkbox" value="Silk_Oak" id="Silk_Oak" name="Silk_Oak" title="Displays Silk Oak on campus" /><label for="Silk_Oak">Silk Oak</label> <br /></span>

               <span><input type="checkbox" value="Chinese_Elm" id="Chinese_Elm" name="Chinese_Elm" title="Displays Chinese Elm, Lacebark Elm on campus" /><label for="Chinese_Elm">Chinese Elm, Lacebark Elm</label> <br /></span>

      </div>
    </div>
	</div><!-- end buttons -->

	<h4>Download a Printable Map:<br /> (including accessible parking)</h4>

	<ul>
	  <li><a href="https://www.fresnostate.edu/map/documents/CampusMap-LTR_BW_05-18.pdf" target="_blank">B &amp; W  8.5x11 (PDF)</a>&nbsp;<a href="http://get.adobe.com/reader/"><img src="images/website/pdf_icon.png" width="16" height="16" alt="Click here for Acrobat Reader" title="Get Acrobat Reader"></a></li>
	  <li><a href="https://www.fresnostate.edu/map/documents/CampusMap-LTR_2color-05-18.pdf" target="_blank">Two Color  8.5 x 11 (PDF)</a>&nbsp;<a href="http://get.adobe.com/reader/"><img src="images/website/pdf_icon.png" width="16" height="16" alt="Click here for Acrobat Reader" title="Get Acrobat Reader"></a></li>
	  <li><a href="https://www.fresnostate.edu/map/documents/CampusMap-LTR_05-18.pdf" target="_blank">Color  8.5 x 11 (PDF)</a>&nbsp;<a href="http://get.adobe.com/reader/"><img src="images/website/pdf_icon.png" width="16" height="16" alt="Click here for Acrobat Reader" title="Get Acrobat Reader"></a></li>
	  <li><a href="https://www.fresnostate.edu/map/documents/CampusMap-TAB_05-18.pdf" target="_blank">Color  11 x 17 (PDF)</a>&nbsp;<a href="http://get.adobe.com/reader/"><img src="images/website/pdf_icon.png" width="16" height="16" alt="Click here for Acrobat Reader" title="Get Acrobat Reader"></a></li>
	</ul>
<p style="color: #333; font-size: 0.7em;">This page links to PDF files. Use this link to <a href="http://get.adobe.com/reader/">download Adobe Reader</a> if needed.</p>
</div><!--end col3-->

</div><!-- end content -->
</div><!-- end wrapper -->

<div class="clearit"> </div>

<div id="footer">
    <div id="footercol1">
    <img class="footer-seal" src="https://www.fresnostate.edu/home/images/fs-seal.gif" alt="Fresno State Seal">
      <ul>
        <li><img class="footer-name" src="https://www.fresnostate.edu/home/images/fs-name.gif" alt="California State University, Fresno" title="California State University, Fresno"></li>
        <li style="padding-top:5px;">5241 N. Maple Ave.</li>
        <li>Fresno,CA 93740</li>
        <li><strong>P</strong> 559.278.4240</li>
        <li style="padding-top:5px;"> &copy;<?php echo date('Y')?> </li>
        <li><strong>Calvin Tey</strong></li>
        <li>&nbsp;</li>
      </ul>
      <!-- end footercol1 --></div>
    <div id="footercol3">
      <ul>
        <li><a onClick="_gaq.push(['_trackEvent', 'Footer Links', 'Click', 'Facebook']);" href="http://www.facebook.com/fresnostate" title="Facebook"><img src="http://icons.iconarchive.com/icons/yootheme/social-bookmark/256/social-facebook-box-blue-icon.png" alt="Facebook" width="16"/></a></li>
        <li><a onClick="_gaq.push(['_trackEvent', 'Footer Links', 'Click', 'Twitter']);" href="http://twitter.com/Fresno_State" title="Twitter"><img src="http://icons.iconarchive.com/icons/graphics-vibe/simple-rounded-social/128/twitter-icon.png" alt="Twitter" width="16"/></a></li>
        <li><a onClick="_gaq.push(['_trackEvent', 'Footer Links', 'Click', 'Instagram']);" href="http://instagram.com/fresno_state#" title="Instagram"><img src="https://instagram-brand.com/wp-content/themes/ig-branding/assets/images/ig-logo-email.png" alt="Instagram" width="16"/></a></li>
        <li><a onClick="_gaq.push(['_trackEvent', 'Footer Links', 'Click', 'YouTube']);" href="http://www.youtube.com/fresnostate" title="YouTube"><img src="http://www.iconarchive.com/download/i80506/uiconstock/socialmedia/YouTube.ico" alt="YouTube" width="16"/> </a></li>
        <li><a onClick="_gaq.push(['_trackEvent', 'Footer Links', 'Click', 'LinkedIn']);" href="http://www.linkedin.com/company/california-state-university-fresno" title="LinkedIn"><img src="http://files.softicons.com/download/social-media-icons/simple-icons-by-dan-leech/png/512x512/linkedin.png" alt="LinkedIn" width="16"/> </a></li>
      </ul>
      <!-- end footercol3 --></div>
    <div id="footercol2">
   <?php include 'include/footer-links.ssi'; ?>
    <!-- end footercol2 --></div>
    <div>
      <ul>
        <li>
          <p>&nbsp;</p>
        </li>
      </ul>
      <!-- end footercol3 --></div>
    <div id="footercol4">
        <?php include '/user/htdocs/omniresources/footer_col_extra.ssi'; ?>
      <!-- end footercol4 --></div>
    <div id="footercol6">
     <?php include '/user/htdocs/omniresources/footer_col4.ssi'; ?>
      <!-- end footercol6 --></div>
        <div id="footercol5">
<?php include '/user/htdocs/omniresources/footer_col3.ssi'; ?>
      <!-- end footercol5 --></div>
    <!-- end footer --></div>
</div><!-- container -->

<script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
<script>
// set global all_markers object
var all_markers={};
</script>

<script>
var x = (<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "map";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

$sql_cmd = "SELECT * FROM MAP";

$result = mysqli_query($conn,$sql_cmd);

//echo gettype($result);
$json_arr = array();
while($data = mysqli_fetch_assoc($result)){
  $json_arr[] = $data;
}
$json_objects = json_encode($json_arr);
echo ($json_objects);?>);

for (let element of x)
{
  // element['description']= escape(element['description']);
  element['dist']= Number(element['dist']);
}

console.log(x);
all_markers.trees = x;
all_markers.searchTrees = x;
</script>

<script src="./js/markerdata_new.js"></script>
<script>
  // control special case where a direct link is needed to preactivate a set of map items
  $(document).ready( function() {
    if(window.location.hash) {
      var theHash = window.location.hash;
      var selectedElement;
      var convertedHash;
      var writeToConsole = 1;

      theHash = theHash.replace("#","");

      selectedElement = document.getElementById(theHash+"-cb");

      // Set the checkbox in the Tree List.
      if(selectedElement != null && selectedElement.type == 'checkbox') {
        selectedElement.checked = true;
        convertedHash = $('label[for="' + theHash + '-cb"]').html();
      }

    }
  });

  $("[id$=-cb]").each(
  function(){
    $(this).change(
      function(){
        var sFormattedMessage = $(this).attr('id') + " " + $(this).is(':checked');
        _gaq.push(['_trackEvent', 'CheckBox', 'Use', sFormattedMessage, null, true]);
      });
  });
</script>
<script src="//www.fresnostate.edu/omniresources/js/emergency.jq.js"></script>
</body>
</html>
