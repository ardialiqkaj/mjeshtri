<?php get_header(); ?>
<h1 class="text-2xl">Mjeshtri</h1>
<div class="flex">
	<?php

	if (have_posts()) :

		while (have_posts()) : the_post(); ?>
			<article class="basis-1/4 bg-[#9e2a2b] text-white m-2 p-4">
				<h3 class="text-xl"><?php the_title(); ?></h3>
				<div class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?></div>
				<small class="text-base">Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
				<p class="text-sm"><?php the_content(); ?></p>
			</article>
	<?php endwhile;

	endif;

	?>
</div>
<?php get_footer(); ?>