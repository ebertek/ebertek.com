<?php
  if (!isset($_GET["w"]) || empty($_GET["w"])) {
    $w = "804365";
  } else {
    $w = $_GET["w"];
  }
  $feed   = "http://weather.yahooapis.com/forecastrss?w=$w&u=c";
  $x      = simplexml_load_file($feed);
  $ho     = array(5,7,13,14,15,16,18,41,42,43,46);
  $jeg    = array(6,17,35);
  $hob    = in_array($x->channel->item->children('yweather', TRUE)->condition->attributes()->code,$ho);
  $szoveg = $x->channel->item->children('yweather', TRUE)->condition->attributes()->text;
  $link   = $x->channel->item->link;
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hu-HU" lang="hu-HU">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Esik-e a hó?</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="css/esikeaho.css" rel="stylesheet" type="text/css" />
  </head>

  <body>

    <h1><?php echo($hob ? "IGEN" : "NEM");?></h1>
    <p><a href="<?php echo($link);?>" title="Yahoo! Weather"><?php echo($szoveg);?></a></p>
    <p><a href="?w=12595843">Pécs/Pogány</a>, <a href="?w=813653">Pécs/Szabolcs</a>, <a href="?w=804365">Budapest</a>, <a href="?w=805328">Debrecen</a>, <a href="?w=815498">Szeged</a>, <a href="?w=812036">Miskolc</a>, <a href="?w=807392">Győr</a></p>
    <p><a href="https://ebertek.com/feed.php?w=<?php echo($_GET["w"]);?>" title="RSS">RSS</a></p>

  </body>

</html>
