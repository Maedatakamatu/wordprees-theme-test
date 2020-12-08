<?php /* 
Template Name: 日報
Template Post Type: post, page, event
*/
?>


<?php 
get_header(); 
the_post();
?>


<div class="main-content">  
<div class="daily">
<p><img class="daily__img" src="<?php the_field('img') ?>" alt=""></p>
<h2>これは日報用phpです。</h2>
<p><?php the_field('day') ?></p>
<p><?php the_field('content') ?></p>
</div>
</div>

<?php get_footer();?>
 

