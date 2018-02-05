<?php
	/*
		Template Name: Lease Template
	*/
get_header(); ?>

<div class="leasePageMain pageCenter">
        <?php while(have_posts()) { the_post(); ?>
            <div class="titleArea">
                <div class="title1"><h2><?php the_title(); ?></h2></div>
            </div>
            <hr>
            <p><?php the_content(); ?></p>
        <?php } ?>
</div>

<?php include(locate_template('template_part/map.php')); ?>

<?php get_footer(); ?>