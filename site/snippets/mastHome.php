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
        <p class="photoCred"><?php echo html($page->credit()) ?></p>
      </section>