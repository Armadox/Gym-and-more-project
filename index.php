<?php get_header(); ?>
<div id="ttr_main" class="row marginFix">
<div id="ttr_content" class="col-12">
<div class="row ">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="col-12" style="padding-left: 40px; margin-top:100px; margin-bottom:120px;">
<h1><?php the_title(); ?></h1>
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<p><?php the_content(__('(more...)')); ?></p>
</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
</div>
</div>
<?php get_footer(); ?>