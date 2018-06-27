<?php

$xml = simplexml_load_file('http://25livepub.collegenet.com/calendars/all-non-academic.rss?search=University%20Student%20Union&mixin=-1');

//print_r($xml->channel);

print "<h2>Events:</h3>";

foreach( $xml->channel->item as $item) {
	print "<h3>" . $item->title . "</h3>";
	print "<h4>" . $item->pubDate . " do:date:math...</h4>";
	print "<p>" . $item->description . " ... <a href='" . $item->link . "'>More info...</a></p>";
}
?>