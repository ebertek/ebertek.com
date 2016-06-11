<?php
    header("Content-Type: application/rss+xml; charset=UTF-8");

    if (!isset($_GET["w"]) || empty($_GET["w"])) {
	    $w	= "804365";
    } else {
	 	$w	= $_GET["w"];
    }
    $feed   = "http://weather.yahooapis.com/forecastrss?w=$w&u=c";
    $x      = simplexml_load_file($feed);
    $ho     = array(5,7,13,14,15,16,18,41,42,43,46);
    $jeg    = array(6,17,35);
    $hob    = in_array($x->channel->item->children('yweather', TRUE)->condition->attributes()->code,$ho);
    $valasz	= $hob ? "IGEN" : "NEM";
    $szoveg = $x->channel->item->children('yweather', TRUE)->condition->attributes()->text;
    $link   = $x->channel->item->link;


    $rssfeed = '<?xml version="1.0" encoding="UTF-8"?>';
    $rssfeed .= '<rss version="2.0">';
    $rssfeed .= '<channel>';
    $rssfeed .= '<title>Esik-e a hó?</title>';
    $rssfeed .= "<link>http://www.ebertek.com/esikeaho.php?w=$w</link>";
    $rssfeed .= '<description>Esik-e a hó?</description>';
    $rssfeed .= '<language>hu-hu</language>';
    $rssfeed .= '<copyright>Copyright (C) 2012 ebertek.com</copyright>';

    $rssfeed .= '<item>';
    $rssfeed .= '<title>' . $valasz . '</title>';
    $rssfeed .= '<description>' . $szoveg . '</description>';
    $rssfeed .= '<link>' . $link . '</link>';
    $rssfeed .= '<pubDate>' . date("D, d M Y H:i:s O", time()) . '</pubDate>';
    $rssfeed .= '</item>';

    $rssfeed .= '</channel>';
    $rssfeed .= '</rss>';

    echo $rssfeed;
?>
