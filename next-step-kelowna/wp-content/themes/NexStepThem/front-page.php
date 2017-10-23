<?php get_header();?>

<div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Item 1 -->
            <div class="item active slide1">
                <div class="row"><div class="container">
                    <div class="col-md-3 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/pfmmo6qj1/window_domain.png">
                    </div>
                    <div class="col-md-9 text-left">
                        <h3 data-animation="animated bounceInDown">Add images, or even your logo!</h3>
                        <h4 data-animation="animated bounceInUp">Easily use stunning effects</h4>             
                     </div>
                </div></div>
             </div> 
            <!-- Item 2 -->
            <div class="item slide2">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown"> 50 animation options A beautiful</h3>
                        <h4 data-animation="animated bounceInUp">Create beautiful slideshows </h4>
                     </div>
                    <div class="col-md-5 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/sp11uneml/rack_server_unlock.png">
                    </div>
                </div></div>
            </div>
            <!-- Item 3 -->
            <div class="item slide3">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">Simple Bootstrap Carousel</h3>
                        <h4 data-animation="animated bounceInUp">Bootstrap Image Carousel Slider with Animate.css</h4>
                     </div>
                    <div class="col-md-5 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/eq8xvxeq5/globe_network.png">
                    </div>     
                </div></div>
            </div>
            <!-- Item 4 -->
            <div class="item slide4">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">We are creative</h3>
                        <h4 data-animation="animated bounceInUp">Get start your next awesome project</h4>
                     </div>
                    <div class="col-md-5 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/9vf8xngel/internet_speed.png">
                    </div>  
                </div></div>
            </div>
            <!-- End Item 4 -->
    
        </div>
        <!-- End Wrapper for slides-->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container">
	<div id="home-body" class="page-body">
          <div class="jumbotron">
            <div id="mission-statement-container" class="container mission-statement">
              <h1 id="mission-statement-title" class="text-center">Our Mission</h1>
              <br><br><p id="mission-statement-body" class="jumbotron-body">
              Our goal at Next Step is to offer a program to help young adults diagnosed with an Autism Spectrum Disorder transition from living at home to living independently within our community.

              <br><br>Next Step Transitional Housing is a Kelowna residential property rental firm built on the philosophy of providing young adults living with an Autism Spectrum Disorder (ASD) affordable and high-quality housing and ASD transitional program services. In addition to safe, comfortable and convenient housing, programs designed to teach the residents basic life and social skills are also delivered on-site by accredited professionals.

              <br><br>We strive every day to create a fun, friendly atmosphere where young adults can grow and learn together while taking their Next Step to a bright future.
              </p>
            </div>  
        </div>
    </div>
</div>

<div class="container main-jumbotron">
<div class="jumbotron apply-now-jumbotron" style="background-color:#f95b5b;">
    <h1 class="text-center" style="color:rgb(249,248,248);">Apply online </h1>
    <p class="text-center" style="color:rgb(249,248,248);">Submit an application an join our amazing community today!</p>
    <p class="text-center">
      <button class=" button button-apply"><span style="padding-left: auto"><a href="<?php echo get_page_link(12); ?>">Apply now</span></a></button>
    </p>
</div>
</div>

<?php get_footer();?>

