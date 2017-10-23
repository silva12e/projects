<template>

            <div class="container">
                <modal name="show-author" height="auto">
                        <div class="row">
                    <div class="profile-header-container" style="background-color:#94618e; color:white">   
                        <div class="profile-header-img">
                            <img class="img-circle" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" />
                            <!-- badge -->
                            <div class="rank-label-container">
                                <span style="color:white" class="label label-default rank-label">Author name</span>
                                  <div class="info" style="padding-top:20px;">
                                    <div class="desc">Passionate designer</div>
                                    <div class="desc">Curious developer</div>
                                    <div class="desc">Tech geek</div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                </modal>
                 <modal name="edit-post" height="auto" >
                       <div style="padding:40px;">
                        <div class="row">
                            <div class="col-md-8" style="padding-bottom:40px;"><br>
                                <h4><i class="glyphicon glyphicon-envelope"></i> Edit Post</h4>
                            </div>
                             <div class="col-md-4" style="padding-bottom:40px;"><br>
                            </div>
                        </div>
                        <form>
                          <div class="form-group">
                            <label for="title"></label>
                            <input type="text" class="form-control" placeholder="post title" id="title" aria-describedby="emailHelp">
                          </div>
                            <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" placeholder="Category" id="type" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="tile">Body</label>
                            <textarea style="height:200px;" class="form-control">post body here</textarea>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <button @click="hide('edit')" class="btn btn-danger">Cancel</button>
                        </form>
                    </div>
                </modal>
                 <modal name="message-view" height="auto">
                    <div style="padding:40px;">
                        <div class="row">
                            <div class="col-md-6" style="padding-bottom:40px;"><br>
                                <h4><i class="glyphicon glyphicon-envelope"></i> View message</h4>
                            </div>
                        </div>
                        <form>
                          <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" placeholder="admin@localhost.com" id="email" aria-describedby="emailHelp">
                          </div>
                            <div class="form-group">
                            <label for="tile">Titlte</label>
                            <input type="text" class="form-control" placeholder="Application" id="title" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="tile">Message</label>
                            <textarea style="height:200px;" class="form-control">Message here</textarea>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </modal>
                <div class="row">
                  <div class="col-md-10 col-lg-10 col-sm-10">
                  </div>
                  <div class="col-md-2 col-lg-2 col-sm-2">
                   <h4> <i class="glyphicon glyphicon-home"></i><a style="text-decoration:none; color:black" href="/"> <small> Back home</small></a></h4>
                  </div>
                </div>

            
                <div class="row" style="padding-bottom:40px;">
                  <div class="col-md-6 col-lg-6 col-sm-6">
                   <h1 ><i class="glyphicon glyphicon-th"></i> Nextstep Dashboard</h1>
                  </div>
                </div>
                <div class="user-dashboard" style="color:black; background-color:white;padding-left:20px;"  >

                    <div class="row">                      
                    <div class="col-md-10 col-sm-10 col-xs-12 gutter">
                        <h4 >Recently posted</h4>
                        <div class="col-md-12">
                            <h3>POST TITLE <small><i @click="show('edit')" class="glyphicon glyphicon-pencil"></i></small></h3>
                            <p>'You ought to be ashamed of yourself for asking such a simple question,' added the Gryphon; and then they both sat silent and looked at poor Alice, who felt ready to sink into the earth. At last the Gryphon said to the Mock Turtle, 'Drive on, old fellow! Don't be all day about it!' and he went on in these words:
                            'Yes, we went to school in the sea, though you mayn't believe it—'
                            'I never said I didn't!' interrupted Alice.
                            'You did,' said the Mock Turtle.</p>
                            <div>
                        <span class="badge">Posted 2012-08-02 20:47:04 </span><span @click="show('author')" class="badge"> By: Author</span><div class="pull-right"></div>       
                             </div>
                            <hr>
                        </div>     
                            <hr>
                        </div>
                    </div>
                      <div class="row">
                    </div>
                    <div class="row">
                    </div>
                        <div class="row" style="padding-top:40px;margin-top:40px; background-color:#white;" >
                        </div>
                         <div class="row">
                            <div class="col-md-10 col-sm-10 col-xs-12 gutter">
                            <h4>Recent messages</h4>
                           <div class="col-md-12">
                                <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>Email</th>
                                    <th>Subject</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>admin@localhost.com</td>
                                    <td>Application</td>
                                    <td style="padding-right:40px;">
                                        <i @click="show('message')" class="glyphicon glyphicon-eye-open"></i>
                                        <i class="glyphicon glyphicon-remove"></i>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>
                        </div>
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
                    if(action=="edit")
                        this.$modal.show('edit-post');
                    if(action=="message")
                        this.$modal.show('message-view');
                    if(action=="author")
                        this.$modal.show('show-author');
                  },
                  hide () {
                    if(action=="edit")
                        this.$modal.hide('edit-post');
                    if(action=="message")
                        this.$modal.hide('message-view');
                    if(action=="author")
                        this.$modal.hide('show-author');
                  }
            }
        }
	$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });
    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
</script>