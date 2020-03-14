<?php get_header();?>
<!--
<div id="birds-div">
    <div class="container">
        <h1>birds test</h1>
    </div>
</div>
-->
<div class="container pt-5 pb-5">
   <h1><?php the_title();?></h1>
    <?php if(have_posts()) : while(have_posts()) : the_post();?>
        <?php the_content();?>
    <?php endwhile; endif;?>
</div>

<?php get_footer();?>