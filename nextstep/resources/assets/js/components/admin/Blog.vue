<template>
	<div class="user-dashboard" >
		<modal name="new-post" height="auto">
			<div class="panel panel-default"  >
        <!-- Message box title	-->    
            <div class="panel-heading top-bar ">
                <div class="col-md-10 col-xs-10" style="padding-top:20px;padding-bottom:20px;">
                    <h4 style="color:#cd5360;" class="panel-title"><span class="glyphicon glyphicon-comment"></span> New Post</h4>
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
    </modal>
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
                <div class="row" style="padding-bottom:40px;">
            		<div class="col-md-5" style="padding:40x">
            			<h1  class="text-center"><i class="glyphicon glyphicon-home"></i> Nextstep Blog</h1>
            		</div>
            	</div>
    <div class="row">
        <div class="col-md-10 col-sm-10 col-xs-12 gutter">
            <div class="col-md-12">
                <h3>POST TITLE <small><i @click="show('edit')" class="glyphicon glyphicon-pencil"></i> <i @click="show('edit')" class="glyphicon glyphicon-trash"></i></small></h3>
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
       <div class="col-md-10 col-lg-10" style=" padding:40px">

        <h4 @click="show('newPost')" class="media-heading">
           <i  class="glyphicon glyphicon-plus"></i>Add New Post
        </h4>

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
                    if(action=="newPost")
                        this.$modal.show('new-post');
                    if(action=="edit")
                        this.$modal.show('edit-post');
                    if(action=="author")
                        this.$modal.show('show-author');

                  },
                  hide () {
                    if(action=="edit")
                        this.$modal.hide('new-post');
                  }
            }
        }
</script>