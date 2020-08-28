<?php
/*
Template Names: Menu */

?>
<?php get_header(); ?>

<div class="menu">

	<div class="title">
		<h1 class="subtitle"> <?php the_field('subtitle'); ?></h1>

		<br />
		<h1 class="subtitle"><?php the_field('title'); ?></h1>
	</div>

	<br /><br />
	<div class="card-menu">

		<?php if (have_rows('repeater')) : ?>

			<!-- <?php echo print_r(get_field('repeater')) ?> -->

			<?php while (have_rows('repeater')) : the_row() ?>

				<h2 class="title_service">
					<?= get_sub_field('title_head') ?>
				</h2>
				<?php while (have_rows('repeater_title')) : the_row() ?>


					<h3 class="title_menu_price">
						<?= get_sub_field('title_menu') ?>
						........................................................
						<?= get_sub_field('price') ?> €
					</h3>

					<h4 class="text">

						<?= get_sub_field('text') ?>
					</h4>

					<br />
				<?php endwhile ?>
				<br />
			<?php endwhile ?>

		<?php endif ?>
	</div>
</div>


<?php the_content(); ?>
<?php get_footer(); ?>