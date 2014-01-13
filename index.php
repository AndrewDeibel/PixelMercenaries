<?php get_header(); ?>
<!--index.php-->
<div id="body">
	<?php get_sidebar(); ?>
	<span class="title"><?php the_title(); ?></span>
	<span class="body">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</span>
</div>
<?php get_footer(); ?>