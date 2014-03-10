<?php snippet('head') ?>
	<?php snippet('mastNoTitle') ?>
		<section class="content">
			<div class="containerInfo">
				<div class="copyBody">
					<?php echo kirbytext($page->text()) ?>
				</div>
			</div>
			<?php snippet('footer') ?>
		</section>
</body>
</html>