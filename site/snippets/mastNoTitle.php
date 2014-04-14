<body>

  <header>
    <div class="mastTitle">
      <a href="<?php echo url() ?>">Aaron Calzado • Designer</a>
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
          <div class="copyMastInfo">
            <p><img src="<?php echo url('/') ?><?php echo $page->diruri ?>/01.jpg" class="profile"/></p>
            <p></p>
            <p style="text-align: center;"><img src="<?php echo url('assets/images/chevron.svg') ?>" style="width: 32px; height: 32px;"/></p>
          </div>
        </div>
        <p class="photoCred"><?php echo html($page->credit()) ?></p>
      </section>