<?php get_header();?>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="text-center">News And Events</h1>
            <hr>
        </div>
    </div>
</div>


<?php if(have_posts()) :
        while(have_posts()) : the_post(); ?>
<div class="container" style="padding-bottom: 20px;">
    <div class="col-md-8">
        <div class="blog-main" style="box-shadow: 0 8px 16px -6px black;border-radius: 25px; color: #fff;background-color: #0f006f; opacity:0.8;padding:20px;">
          
          <div class="blog-post">
            <h2 class=" text-center" style="margin-bottom:40px;"><?php echo the_title(); ?></h2><hr>
            
            <div style="margin-left: 40px;"><p> <?php echo the_content(); ?></p></div>
            <br><br><br>
            <strong><small><?php echo the_author();?></small></strong><br>
            <strong><small><?php echo the_date();?></small></strong>
          </div> 
    </div> 
    </div>
</div>
        <?php endwhile;
    else:
        echo '<p>Sorry, No content found. Please check back later :) </p>';
    endif;?>

<?php get_Sidebar(); ?>



<?php get_footer('right');?>
