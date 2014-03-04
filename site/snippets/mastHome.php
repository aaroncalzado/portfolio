<!DOCTYPE html>
<html lang="en">
<head>

  <script type="text/javascript" src="//use.typekit.net/snh4lbu.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>  

  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <?php echo css('assets/styles/styles.css') ?>
  <?php echo css('assets/styles/animate.css') ?>

</head>

<body>

  <header>
    <div class="mastTitle">
      <a href="<?php echo url() ?>">Aaron Calzado, Designer</a>
    </div>
    <div id="mastNav">
      <ul>
        <?php foreach($pages->visible() AS $p): ?>
          <li><a <?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
        <?php endforeach ?>
      </ul>
    </div>
    </header>
      <section id="heroImageHome" class="heroImageHome" style="background-image: url(<?php echo url('/') ?><?php echo $page->diruri ?>/heroImage.jpg);"/>
        <div class="containerMastHome">
          <div class="copyMastHome">
            <?php echo kirbytext($page->text()) ?>
            <?php snippet('footerHome') ?>
          </div>
        </div>
      </section>




<!--    <div class="homeCover" style="background-image: url(<?php echo url('/') ?><?php echo $page->diruri ?>/heroImage.jpg);" id="bg"/>
    </div> -->