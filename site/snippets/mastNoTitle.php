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
          <div class="copyMastInfo">
            <p><img src="<?php echo url('/') ?><?php echo $page->diruri ?>/01.jpg" id="profile"/></p>
            <p style="text-align: center;"><img src="<?php echo url('assets/images/chevron.svg') ?>" style="width: 32px; height: 32px;"/></p>
            <p class="photoCred"><?php echo html($page->credit()) ?></p>
          </div>
        </div>
      </section>
<!--      <div class="heroImage" style="background-image: url(<?php echo url('/') ?><?php echo $page->diruri ?>/heroImage.jpg);"/>
        <div class="containerMastNoTitle">
        </div>
      </div> -->