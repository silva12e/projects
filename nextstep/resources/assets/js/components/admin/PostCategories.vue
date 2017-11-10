<template>
    <div class="container">
            <div class="row" style="padding-bottom:40px;">
            <div class="col-md-8 col-lg-8 col-sm-8">
                <h1><i class="glyphicon glyphicon-book"></i> Post Categories</h1>
            </div>
        </div>
        <modal name="new-category" height="auto">
            <div class="panel-body msg_container_base">
            <form @submit.prevent="submit">
               <div class="form-group">
                  <input placeholder="Post Category" type="text" v-validate="'required'" name="category" data-vv-as="Post category" class="form-control" id="title">
                  <span style="color:red" v-show="errors.has('category')">{{ errors.first('category') }}</span>
                </div> 
                 <div class="form-group" style="padding-top:20px;padding-bottom:20px;" >
                  <button style="padding:20px;" class="btn btn-default">Save</button>
                </div>  
            </form>
        </div>
        </modal>
       <div class="user-dashboard" style="color:black; background-color:white;padding-left:20px;"  >
            <div class="row">
            </div>
                <div class="row" style="padding-top:40px;margin-top:40px; background-color:#white;" >
                </div>
                 <div class="row">
                    <div class="col-md-10 col-sm-10 col-xs-12 gutter">
                   <div class="col-md-12">
                        <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Category</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr v-for="i in categories" >
                            <td>{{ i.category }}</td>
                            <td style="padding-right:40px;">
                                <i @click="remove(i.id)" class="glyphicon glyphicon-trash"></i>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                     </div>
                      <div class="media-left">
                       <div class="media-body" style="padding:20px;">
                              <h4 @click="show('newCategory')" class="media-heading">
                                 <i  class="glyphicon glyphicon-plus"></i>Add New Category
                              </h4>
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
                categories:[]
            }
            },
            mounted()
            {
                this.init();
            },
            methods:
            {
                submit: function()
                {

                    let formData = new FormData(event.target);

                    axios.post('/admin/events/create-post-category', formData).then(response=>{
                      console.log('form submited');
                      swal({
                        title: "Post category added",
                        text: "Post category has been created",
                        icon: "success",
                        button: "Okay",
                      });
                      this.init();
                      this.hide();
                    });
                },
                show () 
                {
                    this.$modal.show('new-category');
                },
                hide()
                {
                    this.$modal.hide('new-category');
                },
                init()
                {
                    axios.post('/admin/blog/post/category')
                    .then( response => {
                      this.categories = response.data.categories;
                    })
                    .catch(error =>  {
                    })
                },
                 remove: function(id)
                  {
                    axios.delete('/admin/post-category/remove/'+ id).then(response=>{
                      swal({
                        title: "Post category Removed",
                        text: "Post category has been removed",
                        icon: "success",
                        button: "Okay",
                      });
                      this.init();   
                    })
                  },
            }
        }
</script>