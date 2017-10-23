<?php get_header(); ?>
<div class="container">

    <div class="row">
        <h1 class="text-center">News and Events</h1>
        <hr>
    </div>
</div>
    <div class="container">
        <div class="row" style="margin-top: -70px;">
                    <div class="col-sm-8" >
                <div class="row" style="box-shadow: 0 8px 16px 1px black;border-radius: 25px;  opacity:0.8;padding:20px; margin-bottom: 40px; min-height: 200px; margin-top: 40px;color: #fff;background-color: #0f006f;">
                <?php 
                    
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    $custom_args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 2,
                        'paged' => $paged
                      );
                     $custom_query = new WP_Query( $custom_args ); 
                     if ( $custom_query->have_posts() ) :
                     while ( $custom_query->have_posts() ) : $custom_query->the_post(); 
                ?> 
                        
                            <div align="center">
                             <h2 class=" text-center" style="margin-bottom:40px;"><?php echo the_title(); ?></h2>
                             <hr>
                             
                                <p> <?php echo the_content();?></p>
                                </div>
                                <br><br><br><br>
                           
                      

                     <?php 
                     endwhile;
                      
      if (function_exists(custom_pagination)) {
        ?> <div style="margin-top: 50px;">
                              
                            </div><?php 
        custom_pagination($custom_query->max_num_pages,"",$paged);
      }
    // 
                     endif;?>
                     <div>
                         
                     </div>

                </div>
            </div>
            <div class="col-sm-4" style="padding: 40px; ">
                <div class="jumbotron" style="box-shadow: 0 8px 16px -6px black;border-radius: 25px; color: #fff;background-color:#f95b5b; opacity:0.8;padding:20px; margin-bottom: 40px; line-height: 30px;">
                    <?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
                <?php dynamic_sidebar( 'custom-side-bar' ); ?>
                </div>

                <div class="jumbotron" style="box-shadow: 0 8px 16px -6px black;border-radius: 25px; color: #fff;background-color:#f95b5b; opacity:0.8;padding:20px; margin-bottom: 40px; line-height: 30px;">
                   <h3 class="text-center">Join our news feed</h3>
                   <form>
                       <label>E-mail:</label>
                       <input class="form-control" type="text" name="email">
                       <button class="btn btn-success">Subscribe</button>
                   </form>

                </div>     
<?php endif; ?>
            </div>
     
        </div>
    </div>
<?php get_footer('right'); ?>