<?php
$content = $args['content'];
$subtext = isset ($args['subtext']) ? $args['subtext'] : false;
?>

<h1 class="lg:text-5xl text-4xl font-display lg:leading-tight">
	<?php echo $content; ?>
</h1>
<?php if (! empty ($subtext)) : ?>
	<h2 class="lg:text-xl text-xl leading-none">
		<?php echo $subtext; ?>
	</h2>
<?php endif; ?>

