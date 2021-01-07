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
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>David Ebert</title>
    <meta name="viewport"     content="width=device-width, initial-scale=1.0" />
    <meta name="author"       content="David Ebert" />
    <meta name="description"  content="David Ebert is a taciturn ISTJ; a perpetual engineering student; a sysadmin with some Apple certifications; a Netflix addict." />

    <meta name="robots"       content="index, follow" />
    <meta name="googlebot"    content="index, follow" />

    <base                     href="https://ebertek.com/" />

    <link href="humans.txt"   rel="author"     type="text/plain" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <div id="wrapper">

      <header>David Ebert</header>

      <main>
        <h1>contact</h1>
        <ul>
          <li><a href="twitter:@ebertek" title="Twitter">Twitter</a></li>
          <li><a href="fb://profile/1151623436" title="Facebook">Facebook</a></li>
          <li><a href="<?php echo $message[$device]; ?>:ebertek@mac.com" title="Message">ebertek@mac.com</a></li>
          <li><a href="<?php echo $call[$device]; ?>:+36302750065" title="Call">+36 (30) 275 0065</a></li>
<?php if ($device == 1 || $device == 2) echo '          <li><a href="facetime:ebertek@mac.com" title="FaceTime">FaceTime</a></li>' . PHP_EOL; ?>
        </ul>
        <ul>
          <li><a href="cv-david_ebert.pdf" title="Curriculum Vitæ" type="application/pdf">CV / Résumé</a></li>
          <li><a href="https://www.linkedin.com/in/ebertdavid/" title="LinkedIn">LinkedIn</a></li>
          <li><a href="https://github.com/ebertek" title="GitHub">GitHub</a></li>
          <li><a href="https://www.instagram.com/ebertek/" title="Instagram">Instagram</a></li>
          <li><a href="http://www.last.fm/user/ebertek" title="Last.fm">Last.fm</a></li>
          <li><a href="https://trakt.tv/users/ebertek" title="trakt.tv">trakt.tv</a></li>
          <li><a href="<?php echo $fsq[$device]; ?>" title="foursquare">foursquare</a></li>
          <li><a href="https://www.flickr.com/photos/ebertek" title="flickr">flickr</a></li>
        </ul>
        <ul>
          <li><a href="https://trips-n-tricks.co.uk" title="Trips’n’Tricks">Trips’n’Tricks</a></li>
        </ul>
      </main>

    </div>
  </body>

</html>
