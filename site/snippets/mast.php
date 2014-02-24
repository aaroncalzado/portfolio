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
  <!-- <?php $hsl = rand(0, 240) . ',' . rand(50, 80) . '%,60%'; ?>

  <style type="text/css">
    footer {
      background-color: hsl(<?php echo $hsl ?>);
    }
    .containerWork h6
    a:hover {
      color: hsl(<?php echo $hsl ?>);
    }
    a:hover.viewProjects {
      background-color: hsl(<?php echo $hsl ?>);
    }
    p
    a:hover,
    a:active,
    a:visited {
      border-bottom: 1px solid hsl(<?php echo $hsl ?>);
    }
  </style> -->

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
      <section id="heroImage" class="heroImage" style="background-image: url(<?php echo url('/') ?><?php echo $page->diruri ?>/heroImage.jpg);"/>
        <div class="containerMast">
          <div class="copyMast">
            <h1><?php echo html($page->title()) ?></h1>
            <h5><?php echo html($page->subtitle()) ?></h5>
            <p class="caption"><?php echo html($page->caption()) ?></p>
            <p style="text-align: center;"><img src="<?php echo url('assets/images/chevron.svg') ?>" style="width: 32px; height: 32px;"/></p>
          </div>
        </div>
      </section>