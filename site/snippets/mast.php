<body>

  <header>
    <div class="mastTitle">
      <a href="<?php echo url() ?>"><strong>Aaron Calzado</strong> • Designer</a>
    </div>
    <div class="mastNav">
      <ul>
        <?php foreach($pages->visible() AS $p): ?>
          <li><a <?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
        <?php endforeach ?>
      </ul>
    </div>
    </header>
      <section class="heroImage" class="heroImage" style="background-image: url(<?php echo url('/') ?><?php echo $page->diruri ?>/hero-image.jpg);"/>
        <div class="containerMast">
          <div class="copyMast">
            <h1><?php echo html($page->title()) ?></h1>
            <hr>
            <h3><?php echo html($page->subtitle()) ?></h3>
            <p style="text-align: center;"><img src="<?php echo url('assets/images/chevron.svg') ?>" style="width: 32px; height: 32px;"/></p>
          </div>
        </div>
      </section>