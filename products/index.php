<?php
  require_once('includes/template.php'); 

$pagestyle = '#section2 .wrapper { overflow-x: inherit }';
  
  // Required
  head([
    'title' =>'Keyman Support | Type to the world in your language',
    'css' => ['template.css','index.css'],
    'showMenu' => true,
    'index' => false
  ]);
?>
<h2 class="center">Keyman Products Help Index</h2>
<div class="product" id="product-desktop">
    <a href="desktop">
        <img src="<?php echo cdn("img/icon-desktop.png"); ?>" />
        <h3>Keyman Desktop</h3>
        <p>
            Type in your language in all your favourite software applications for Windows.  Keyman Desktop will automatically configure your system for your language.
        </p>
    </a>
</div>
<div class="product" id="product-macosx">
    <a href="mac">
        <img src="<?php echo cdn("img/icon-mac.png"); ?>" />
        <h3>Keyman for macOS</h3>
        <p>
            Type in your language in all your favourite software applications for macOS.
        </p>
    </a>
</div>
<div class="product" id="product-web">
    <a href="web">
        <img src="<?php echo cdn("img/icon-web.png"); ?>" />
        <h3>keymanweb.com</h3>
        <p>
            Type instantly in your web browser and post to Facebook, Google and more, or copy and paste to use the text anywhere!  No download or configuration is required.
        </p>
    </a>
</div>
<div class="product" id="product-iphone">
    <a href="iphone-and-ipad">
        <img src="<?php echo cdn("img/icon-iphone.png"); ?>" />
        <h3>Keyman for iPhone and iPad</h3>
        <p>
            Type in your language on your iPhone.  Keyman brings the iPhone language experience to life, adding support for many languages and scripts that Apple do not support!
        </p>
    </a>
</div>
<div class="product" id="product-android">
    <a href="android">
        <img src="<?php echo cdn("img/icon-android2.png"); ?>" />
        <h3>Keyman for Android</h3>
        <p>
            Type in over 600 languages on your Android device. Touch enabled keyboards for phone, 7-inch and 10-inch tablets ensure a seamless typing solution across any Android device.
        </p>
    </a>
</div>
<div class="product" id="product-bookmarklet">
    <a href="bookmarklet">
        <img src="<?php echo cdn("img/icon-bookmarklet.png"); ?>" />
        <h3>Keyman Bookmarklet</h3>
        <p>
            Add the Keyman Bookmarklet to your web browser to type in your language on every website you visit.
        </p>
    </a>
</div>
