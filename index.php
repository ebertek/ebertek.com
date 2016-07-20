<?php
  $useragent = $_SERVER['HTTP_USER_AGENT'];
  $os        = array("default", "Macintosh", "iPhone", "iPad", "iPod", "Android");
  $chosen    = 0;
  $tombcount = count($os);
  for ($i = 0; $i < $tombcount; $i++) {
    if (preg_match("/$os[$i]/", $useragent)) {
      $chosen = $i;
      break;
    }
  }
  if (2 <= $chosen && $chosen <=4) {
    $chosen = 2;
  }
  /**
  /* 0: default;
  /* 1: Macintosh;
  /* 2: iOS: iPhone, iPad, iPod;
  /* 3: Android;
   */
  $message = array("mailto", "imessage", "sms", "mailto");
  $call = array("callto", "tel", "tel", "tel");
  $fsq = array("https://foursquare.com/ebertek", "https://foursquare.com/ebertek", "foursquare://users/200263", "https://foursquare.com/ebertek");
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ebertek.com</title>
    <meta name="Description" content="David Ebert is an introverted college dropout with Apple certifications and a Netflix addiction." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />

    <base href="https://ebertek.com/" />
    <meta name="url" content="https://ebertek.com/" />

    <link href="humans.txt" rel="author" type="text/plain" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <div id="wrapper">

      <header>ebertek.com</header>

      <div id="main">
        <h2>
          contact
        </h2>
        <p>
          <a href="twitter:@ebertek" title="Twitter">Twitter</a><br />
          <a href="fb://profile/1151623436" title="Facebook">Facebook</a><br />
          <a href="<?php echo $message[$chosen]; ?>:ebertek@mac.com" title="Message">ebertek@mac.com</a><br />
          <a href="<?php echo $call[$chosen]; ?>:+36302750065" title="Call">+36 (30) 275 0065</a><br />
        </p>
        <p>
          <a href="https://www.linkedin.com/in/ebertdavid" title="LinkedIn">LinkedIn</a><br />
          <a href="https://github.com/ebertek" title="GitHub">GitHub</a><br />
          <a href="http://www.last.fm/user/ebertek" title="Last.fm">Last.fm</a><br />
          <a href="https://trakt.tv/users/ebertek" title="trakt.tv">trakt.tv</a><br />
          <a href="<?php echo $fsq[$chosen]; ?>" title="foursquare">foursquare</a><br />
          <a href="https://www.flickr.com/photos/ebertek" title="flickr">flickr</a><br />
        </p>
        <p>
          <?php if ($chosen==1 || $chosen==2) echo '<a href="facetime:ebertek@mac.com" title="FaceTime">FaceTime</a><br />'; ?>
          <?php if ($chosen==1 || $chosen==2) echo '<a href="findmyfriends:ebertek@mac.com" title="Find My Friends">Find My Friends</a><br />'; ?>
        </p>
      </div>

    </div>
  </body>

</html>
