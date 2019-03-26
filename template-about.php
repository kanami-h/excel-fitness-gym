<?php
/**
 * Template Name: about
 * Description: about page
 */

get_header(); ?>
    <?php 
        if(have_posts()):
        while(have_posts()):the_post();
    ?>

<?php
                endwhile;
              endif;
              ?> 
    
    <!-- <div id="pageTop" onclick="jumpBtn">TOP</div> -->
<?php get_footer(); ?>
