<?php
get_header();?>
<div class="container" id="info-container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-info"  style=" color: black">Contact Us</h2><hr></div>
        <div class="col-md-6 col-sm-6 col-xs-12" id="contact-box">
            <p>
                We would love to help in any way we can. Send a message and a customer service representative will assist you. Please, fill in all required fields and try to include all details in your message.
                <br><br>
            </p>
            <form id="my-form">
                <div class="form-group has-feedback">
                    <label for="firstname" class="control-label sr-only">First Name</label>
                    <input type="text" name="firstname" placeholder="First Name" autofocus class="form-control" id="firstname" /><i aria-hidden="true" class="form-control-feedback fa fa-user"></i></div>
                <div class="form-group has-feedback">
                    <label for="lastname" class="control-label sr-only">Last Name</label>
                    <input type="text" name="lastname" placeholder="Last Name" class="form-control" id="lastname" /><i aria-hidden="true" class="form-control-feedback fa fa-user"></i></div>
                <div class="form-group has-feedback">
                    <label for="phonenumber" class="control-label sr-only">Phone Number</label>
                    <input type="tel" name="phonenumber" required placeholder="Phone" class="form-control" id="phonenumber" /><i aria-hidden="true" class="form-control-feedback fa fa-phone"></i></div>
                <div class="form-group has-feedback">
                    <label for="email" class="control-label sr-only">Email Address</label>
                    <input type="text" name="email" required placeholder="Email" class="form-control" id="email" /><i aria-hidden="true" class="form-control-feedback fa fa-envelope"></i></div>
                <div class="form-group has-feedback">
                    <label for="messages" class="control-label sr-only">Message</label>
                    <textarea rows="8" style="resize: none;" name="messages" required placeholder="Message" class="form-control"></textarea><i aria-hidden="true" class="form-control-feedback fa fa-pencil"></i></div>
                <button class="btn btn-default btn-lg" type="submit" id="form-btn">SEND </button>
                <button class="btn btn-default btn-lg" type="submit" id="form-btn">RESET </button>     
            </form>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 site-form">
          <div class="info-box"><i class="glyphicon glyphicon-map-marker my-info-icons"></i><span class="text-uppercase text-info">Address: </span><span>nextste, nextstep str v1v 1vv, NextLand</span></div>
            <div class="info-box"><i class="glyphicon glyphicon-envelope my-info-icons"></i><span class="text-uppercase text-info">Email: </span><span>contact-us@nextstep.com </span></div>
            <div class="info-box"><i class="glyphicon glyphicon-phone-alt my-info-icons"></i><span class="text-uppercase text-info">Phone: </span><span>250-000-0000 </span></div>
            <iframe allowfullscreen frameborder="0" width="100%" height="400" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBw755P1wnRVgc6EZr3MN7oi3KHCRIuB40&amp;q=Kelowna%2C+BC&amp;zoom=11"></iframe>
        </div>
    </div>
</div>
<?php get_footer();?>