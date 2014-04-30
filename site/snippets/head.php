<!DOCTYPE html>
<html lang="en">
<head>
  <script type="text/javascript" src="//use.typekit.net/snh4lbu.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <script src="<?php echo url('assets/js/jquery-2.1.0.js') ?>" type="text/javascript"></script>
  <script src="<?php echo url('assets/js/unwrap.js') ?>" type="text/javascript"></script>
  <script src="<?php echo url('assets/js/jquery.fitvids.js') ?>" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
      $(".video-container").fitVids();
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".containerMast").height($(window).height());
    });
  </script>

  <!-- Start Open Web Analytics Tracker -->
  <script type="text/javascript">
  //<![CDATA[
  var owa_baseUrl = 'http://aaroncalzado.com/owa/';
  var owa_cmds = owa_cmds || [];
  owa_cmds.push(['setSiteId', '5957baa3da25af0c4d4d287698069c82']);
  owa_cmds.push(['trackPageView']);
  owa_cmds.push(['trackClicks']);
  owa_cmds.push(['trackDomStream']);

  (function() {
    var _owa = document.createElement('script'); _owa.type = 'text/javascript'; _owa.async = true;
    owa_baseUrl = ('https:' == document.location.protocol ? window.owa_baseSecUrl || owa_baseUrl.replace(/http:/, 'https:') : owa_baseUrl );
    _owa.src = owa_baseUrl + 'modules/base/js/owa.tracker-combined-min.js';
    var _owa_s = document.getElementsByTagName('script')[0]; _owa_s.parentNode.insertBefore(_owa, _owa_s);
  }());
  //]]>
  </script>
  <!-- End Open Web Analytics Code -->

  <title>
    <?php echo html($site->title()) ?> - <?php echo html($page->title()) ?>
  </title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php echo css('assets/styles/styles.css') ?>
  <?php echo css('assets/styles/animate.css') ?>
</head>