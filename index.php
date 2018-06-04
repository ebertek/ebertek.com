<?php
  $useragent = $_SERVER['HTTP_USER_AGENT'];
  $os        = array("default", "Macintosh", "iPhone", "iPad", "iPod", "Android");
  $device    = 0;
  $tombcount = count($os);
  for ($i = 0; $i < $tombcount; $i++) {
    if (preg_match("/$os[$i]/", $useragent)) {
      $device = $i;
      break;
    }
  }
  if (2 <= $device && $device <=4) {
    $device = 2;
  }
  /**
   * 0: default
   * 1: macOS
   * 2: iOS: iPhone, iPad, iPod
   * 3: Android
   */
  $message = array("mailto", "imessage", "sms", "mailto");
  $call    = array("callto", "tel", "tel", "tel");
  $fsq     = array("https://foursquare.com/ebertek", "https://foursquare.com/ebertek", "foursquare://users/200263", "https://foursquare.com/ebertek");

  $country_code = $_SERVER["HTTP_CF_IPCOUNTRY"]; // https://support.cloudflare.com/hc/en-us/articles/200168236-What-does-Cloudflare-IP-Geolocation-do-
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ebertek.com</title>
    <meta name="Description" content="David Ebert is a taciturn ISTJ; a perpetual engineering student; a sysadmin with some Apple certifications; a Netflix addict." />
    <meta name="viewport"    content="width=device-width, initial-scale=1" />

    <meta name="robots"      content="index, follow" />
    <meta name="googlebot"   content="index, follow" />

    <base href="https://ebertek.com/" />
    <meta name="url" content="https://ebertek.com/" />

    <link href="humans.txt"   rel="author"     type="text/plain" />
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
          <a href="<?php echo $message[$device]; ?>:ebertek@mac.com" title="Message">ebertek@mac.com</a><br />
          <a href="<?php echo $call[$device]; ?>:+36302750065" title="Call">+36 (30) 275 0065</a><br />
        </p>
        <p>
          <a href="cv-en.pdf" title="Curriculum Vitæ">CV / Résumé</a><br />
<?php if ($country_code == "HU") echo '          <a href="cv.pdf" title="Hungarian Curriculum Vitæ">CV / Résumé (🇭🇺)</a><br />' . PHP_EOL; ?>
          <a href="https://www.linkedin.com/in/ebertdavid" title="LinkedIn">LinkedIn</a><br />
          <a href="https://github.com/ebertek" title="GitHub">GitHub</a><br />
          <a href="http://www.last.fm/user/ebertek" title="Last.fm">Last.fm</a><br />
          <a href="https://trakt.tv/users/ebertek" title="trakt.tv">trakt.tv</a><br />
          <a href="<?php echo $fsq[$device]; ?>" title="foursquare">foursquare</a><br />
          <a href="https://www.flickr.com/photos/ebertek" title="flickr">flickr</a><br />
        </p>
        <p>
<?php if ($device == 1 || $device == 2) echo '          <a href="facetime:ebertek@mac.com" title="FaceTime">FaceTime</a><br />' . PHP_EOL; ?>
        </p>
      </div>

    </div>
  </body>

</html>
