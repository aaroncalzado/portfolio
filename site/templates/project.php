<?php snippet('head') ?>
	<?php snippet('mast') ?>
		<section class="content">
			<div class="containerProject">
				<div class="copyBody">
					<?php echo kirbytext($page->text()) ?>
					<?php echo kirbytext($page->breakdown()) ?>
					<?php echo kirbytext($page->guts()) ?>
				</div>
			</div>
			<?php snippet('footer') ?>
		</section>
</body>
</html>