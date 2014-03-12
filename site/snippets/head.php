<!DOCTYPE html>
<html lang="en">
<head>
  <script type="text/javascript" src="//use.typekit.net/snh4lbu.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <script src="<?php echo url('assets/js/jquery-2.1.0.js') ?>" type="text/javascript"></script>
  <script src="<?php echo url('assets/js/unwrap.js') ?>" type="text/javascript"></script>
  <script src="path/to/jquery.fitvids.js"></script>
  <script>
    $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
      $("#thing-with-videos").fitVids();
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".containerMast").height($(window).height());
    });
  </script>

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
  <?php echo css('assets/styles/skeleton.css') ?>
  <?php echo css('assets/styles/layout.css') ?>
</head>