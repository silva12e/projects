<template>
	<div class="container" >
		<modal name="show-message" height="auto">
			<div class="panel panel-default"  >
            <div class="panel-heading top-bar ">
                <div class="col-md-10 col-xs-10" style="padding-top:20px;padding-bottom:20px;">
                    <h4 style="color:#cd5360;" class="panel-title"><span class="glyphicon glyphicon-comment"></span>View message</h4>
                </div>
                <div class="col-md-2 col-xs-2" style="text-align: right;">
                    <a href="#"><span class="glyphicon glyphicon-minus icon_minim"></span></a>
                </div>
            </div>
            <div class="panel-body msg_container_base">
              <br />
              <form action="#" style="padding-bottom:20px;">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <textarea style="height:300px;" type="text" class="form-control" id="message" placeholder="Message..."></textarea>
                </div>
                <div class="form-group" style="padding-top:20px;padding-bottom:20px;" >
                	<button class="btn btn-default"><i class="glyphicon glyphicon-check"></i> Reply</button>
                	<button class="btn btn-default"><i class="glyphicon glyphicon-trash"></i></button>
                </div>
              </form>
          </div>
    		</div>
		</modal>
		<modal name="new-message" height="auto">
			<div class="panel panel-default"  >
        <!-- Message box title	-->    
            <div class="panel-heading top-bar ">
                <div class="col-md-10 col-xs-10" style="padding-top:20px;padding-bottom:20px;">
                    <h4 style="color:#cd5360;" class="panel-title"><span class="glyphicon glyphicon-comment"></span> New message</h4>
                </div>
                <div class="col-md-2 col-xs-2" style="text-align: right;">
                    <a href="#"><span class="glyphicon glyphicon-minus icon_minim"></span></a>
                </div>
            </div>
     <!-- Message body	--> 
            <div class="panel-body msg_container_base">
              <br />
              <form action="#" style="padding-bottom:20px;">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <textarea style="height:300px;" type="text" class="form-control" id="message" placeholder="Message..."></textarea>
                </div>
                <div class="form-group" style="padding-top:20px;padding-bottom:20px;" >
                	<button  style="padding:20px;" class="btn btn-default">Send</button>
                	<button  style="padding:20px;" class="btn btn-default"><i class="glyphicon glyphicon-glyphicon glyphicon-refresh"></i></button>
                </div>
              </form>
          </div>
    		</div>
		</modal>	
		<div class="row" style="padding-bottom:40px;">
			<div class="col-md-8 col-lg-8 col-sm-8">
				<h1><i class="glyphicon glyphicon-envelope"></i> Requests/Messages</h1>
			</div>
		</div>
		<div style="box-shadow: 0px 0px 5px #888888;">
			<div class="row">
			  <div class="col-lg-6">
			   <div style="padding-left:20px;" class="input-group">
			      <input type="text" class="form-control" aria-label="..." placeholder="Search here...">
			      <span style="padding-left:20px;" class="input-group-btn">
			        <h4><i class="glyphicon glyphicon-search"></i></h4>
			    </span>
			</div>
		</div>
	</div>
			<div class="row" style="padding-left:60px;padding-top:20px;">
				<div class="col-md-10 col-lg-10 col-sm-8">
					<button @click="show('newMessage')" class="btn btn-default"><i class="glyphicon glyphicon-plus"></i> New message</button>
				</div>
			</div>
			<div class="row" style="padding-left:60px;padding-top:20px;">
				<div class="col-md-10 col-lg-10 col-sm-8">
					<table class="table table-condensed table-hover">
					  <thead>
					    <tr>
					      <th class="span1"><input type="checkbox"></th>
					      <th class="span2">Sent By</th>
					      <th class="span9">Subject</th>
					      <th class="span2">Date</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td><input type="checkbox"> <a href="#"><i class="icon-star-empty"></i></a></td>
					      <td><strong>John Doe</strong></td>
					      <td><strong>Message body goes here</strong></td>
					      <td><strong>Sept 4 11:23 PM</strong></td>
					      
					      <td><strong><i @click="show('showMessage')" class="glyphicon glyphicon-eye-open"></i></strong></td>
					      <td><strong><i class="glyphicon glyphicon-trash"></i></strong></td>
					      <td><strong><i class="glyphicon glyphicon-ok-circle"></i></strong></td>
					    </tr>
					    <tr>
					      <td><input type="checkbox"> <a href="#"><i class="icon-star-empty"></i></a></td>
					      <td>Tom Hanks</td>
					      <td>Message body goes here</td>
					      <td>June 23 1:23 AM</td>
					      <td><strong><i @click="show('showMessage')" class="glyphicon glyphicon-eye-open"></i></strong></td>
					      <td><strong><i class="glyphicon glyphicon-trash"></i></strong></td>
					      <td><strong><i class=" glyphicon glyphicon-ok-sign"></i></strong></td>
					    </tr>
					      <tr>
					      <td><input type="checkbox"> <a href="#"><i class="icon-star-empty"></i></a></td>
					      <td>Liones Messi</td>
					      <td>Message body goes here</td>
					      <td>Dec 24 23 1:23 AM</td>
					      <td><strong><i @click="show('showMessage')" class="glyphicon glyphicon-eye-open"></i></strong></td>
					      <td><strong><i class="glyphicon glyphicon-trash"></i></strong></td>
					      <td><strong><i class=" glyphicon glyphicon-ok-sign"></i></strong></td>
					    </tr>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</template>
<script type="text/javascript">
     export default {
        data: function() {
            return{

            }

            },
            methods:
            {
                show (action) {
                    if(action=="newMessage")
                        this.$modal.show('new-message');
                    if(action=="showMessage")
                        this.$modal.show('show-message');
                    if(action=="author")
                        this.$modal.show('show-author');
                  },
                  hide () {
                    if(action=="edit")
                        this.$modal.hide('edit-post');
                    if(action=="showMessage")
                        this.$modal.show('show-message');
                    if(action=="author")
                        this.$modal.hide('show-author');
                  }
            }
        }
        $(document).on('click', '.panel-heading span.icon_minim', function (e) {
		    var $this = $(this);
		    if (!$this.hasClass('panel-collapse')) {
		        $this.parents('.panel').find('.panel-body').slideUp();
		        $this.addClass('panel-collapse');
		        $this.removeClass('glyphicon-minus').addClass('glyphicon-plus');
		    } else {
		        $this.parents('.panel').find('.panel-body').slideDown();
		        $this.removeClass('panel-collapse');
		        $this.removeClass('glyphicon-plus').addClass('glyphicon-minus');
		    }
		})
</script>


