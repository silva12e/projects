<template>
	<div>
    <div class="row" style="padding-bottom:40px;">
      <div class="col-md-8 col-lg-8 col-sm-8">
        <h1><i class="glyphicon glyphicon-calendar"></i> Nextstep Blog</h1>
      </div>
    </div>    
   <div class="user-dashboard" >
    <modal name="new-post" height="auto">
      <div class="panel panel-default"  >
            <div class="panel-heading top-bar ">
                <div class="col-md-10 col-xs-10" style="padding-top:20px;padding-bottom:20px;">
                    <h4 style="color:#cd5360;" class="panel-title"><span class="glyphicon glyphicon-plus"></span> New Post</h4>
                </div>
                <div class="col-md-2 col-xs-2" style="text-align: right;">
                    <a href="#"><span class="glyphicon glyphicon-minus icon_minim"></span></a>
                </div>
            </div>
            <div class="panel-body msg_container_base">
              <br />
              <form @submit.prevent="submit" style="padding-bottom:20px;">
                <div class="form-group">
                  <input name='title' type="text" class="form-control" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                  <input name="author" type="text" class="form-control" id="author" placeholder="Author">
                </div>
                <div class="form-group">
                 <select v-model="categories.id" id="category" name="category" class="form-control">
                      <option v-for="i in categories">{{i.category}}</option>
                  </select>
                </div>
                <div class="form-group">
                  <textarea name="body" style="height:300px;" type="text" class="form-control" id="body" placeholder="Post body"></textarea>
                </div>
                <div class="form-group" style="padding-top:20px;padding-bottom:20px;" >
                  <button  style="padding:20px;" class="btn btn-default">Save</button>
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
    <div class="panel panel-default"  >
              <div class="panel-heading top-bar ">
                  <div class="col-md-10 col-xs-10" style="padding-top:20px;padding-bottom:20px;">
                      <h4 style="color:#cd5360;" class="panel-title"><span class="glyphicon glyphicon-pencil"></span> Edit Post</h4>
                  </div>
                  <div class="col-md-2 col-xs-2" style="text-align: right;">
                      <a href="#"><span class="glyphicon glyphicon-minus icon_minim"></span></a>
                  </div>
              </div>
              <div class="panel-body msg_container_base">
                <br />
                <form @submit.prevent="edit(post.id)" style="padding-bottom:20px;">
                  <div class="form-group">
                    <input v-model="post.title" name='title' type="text" class="form-control" id="title" placeholder="Title">
                  </div>
                  <div class="form-group">
                    <input v-model="post.author"  name="author" type="text" class="form-control" id="author" placeholder="Author">
                  </div>
                  <div class="form-group">
                    <input v-model="post.category"  name="category" type="text" class="form-control" id="category" placeholder="Category">
                  </div>
                  <div class="form-group">
                    <textarea v-model="post.body"  name="body" style="height:300px;" type="text" class="form-control" id="body" placeholder="Post body"></textarea>
                  </div>
                  <div class="form-group" style="padding-top:20px;padding-bottom:20px;" >
                    <button  style="padding:20px;" class="btn btn-default">Save</button>
                    <button  style="padding:20px;" class="btn btn-default"><i class="glyphicon glyphicon-glyphicon glyphicon-refresh"></i></button>
                  </div>
                </form>
            </div>
          </div>
    </modal>
    <div class="row" style="padding-bottom:40px;">
      <div class="col-md-5" style="padding:40x">
      </div>
    </div>
    <div v-for="post in posts" class="row">
      <div class="col-md-10 col-sm-10 col-xs-12 gutter">
          <div class="col-md-12">
              <h3>{{ post.title }} <small><i @click="showEdit(post.id)" class="glyphicon glyphicon-pencil"></i> <i @click="remove(post.id)" class="glyphicon glyphicon-trash"></i></small></h3>
              <p>{{ post.body }}</p>
              <div>
          <span class="badge">Category: {{ post.category }}</span><span class="badge">Posted on {{ post.created_at }} </span><span @click="show('author')" class="badge"> By: {{ post.author }}</span><div class="pull-right"></div>       
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
  </div>
</template>
<script type="text/javascript">
     export default {
        data: function() {
            return{
              posts:[],
              post:[],
              categories:[],
            }

            },
            mounted()
            {
             this.init();
            },
            methods:
            {
              submit(event) {

                let formData = new FormData(event.target);
                axios.post('/admin/blog/create-post', formData).then(response=>{
                  console.log('form submited');
                  swal({
                    title: "New Post!",
                    icon: "success",
                    button: "Okay",
                  });
                  this.init();
                  this.hide('new');
                });
              },
              showEdit (id) {
                this.$modal.show('edit-post');
                axios.get('/admin/blog/'+ id).then( response => {
                  this.post = response.data.post;
                  this.categories = response.data.categories;
                })
                .catch(error =>  {
                })
              },
                show (action) {
                    if(action=="newPost")
                        this.$modal.show('new-post');
                    if(action=="edit")
                        this.$modal.show('edit-post');
                    if(action=="author")
                        this.$modal.show('show-author');

                  },
                  hide () {
                    if(action=="new")
                        this.$modal.hide('new-post');
                    if(action=="edit")
                      this.$modal.hide('edit-post');
                  },
                  init()
                  {
                     axios.post('/admin/blog')
                      .then( response => {
                        this.posts = response.data.posts;
                        this.categories = response.data.categories;
                      })
                      .catch(error =>  {
                      })
                  },
                  edit(id)
                  {
                    let formData = new FormData(event.target);
                    axios.post('/admin/blog/update/'+ id, formData).then(response=>{
                      console.log('form submited');
                      swal({
                        title: "Post updated",
                        icon: "success",
                        button: "Okay",
                      });
                      this.init();
                      this.hide('editPost');
                    });
                  },
                  remove: function(id)
                  {
                    axios.delete('/admin/blog/remove/'+ id).then(response=>{
                      swal({
                        title: "Post Removed",
                        icon: "success",
                        button: "Okay",
                      });
                      this.init();   
                    })
                  },
                  updateResource(data){
                    this.posts = data
                  }
                }
        }
</script>