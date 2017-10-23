<template>
	<div class="container">
			<div class="row" style="padding-bottom:40px;">
			<div class="col-md-8 col-lg-8 col-sm-8">
				<h1><i class="glyphicon glyphicon-user"></i> Users/Staff</h1>
			</div>
		</div>
		<modal name="show-user" height="auto">
   
                <div class="col-md-10 col-xs-10" style="padding-top:20px;padding-bottom:20px;">
                    <h4 style="color:#cd5360;" class="panel-title"><span class="glyphicon glyphicon-user"></span>View User/Staff</h4>
                </div>
                <div class="col-md-2 col-xs-2" style="text-align: right;">
                    <a href="#"><span class="glyphicon glyphicon-minus icon_minim"></span></a>
                </div>
 
            <div class="panel-body msg_container_base">
              <br />
              <form action="#" style="padding-bottom:20px;">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="email">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="role" placeholder="Role">
                </div>
              </form>
          </div>
		</modal>
		<modal name="edit-user" height="auto">

                <div class="col-md-10 col-xs-10" style="padding-top:20px;padding-bottom:20px;">
                    <h4 style="color:#cd5360;" class="panel-title"><span class="glyphicon glyphicon-user"></span>Edit User/Staff</h4>
                </div>
                <div class="col-md-2 col-xs-2" style="text-align: right;">
                    <a href="#"><span class="glyphicon glyphicon-minus icon_minim"></span></a>
                </div>

            <div class="panel-body msg_container_base">
              <br />
              <form action="#" style="padding-bottom:20px;">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="email">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="role" placeholder="Role">
                </div>

                <div class="form-group" style="padding-top:20px;padding-bottom:20px;" >
                  <button  style="padding:20px;" class="btn btn-default">Save</button>
                  <button  style="padding:20px;" class="btn btn-default"><i class="glyphicon glyphicon-glyphicon glyphicon-refresh"></i></button>
                </div>
              </form>
          </div>
		</modal>
		<modal name="new-user" height="auto">

                <div class="col-md-10 col-xs-10" style="padding-top:20px;padding-bottom:20px;">
                    <h4 style="color:#cd5360;" class="panel-title"><span class="glyphicon glyphicon-user"></span> New User/Staff</h4>
                </div>
                <div class="col-md-2 col-xs-2" style="text-align: right;">
                    <a href="#"><span class="glyphicon glyphicon-minus icon_minim"></span></a>
                </div>

            <div class="panel-body msg_container_base">
              <br />
              <form @submit.prevent="submit" style="padding-bottom:20px;">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" name="email" placeholder="email">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="role" name="role"  placeholder="Role">
                </div>

                <div class="form-group" style="padding-top:20px;padding-bottom:20px;" >
                  <button  style="padding:20px;" class="btn btn-default">Save</button>
                  <button  style="padding:20px;" class="btn btn-default"><i class="glyphicon glyphicon-glyphicon glyphicon-refresh"></i></button>
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Ernesto Silva</td>
                            <td>admin@localhost.com</td>
                            <td>Admin</td>
                            <td style="padding-right:40px;">
                                <i @click="show('showUser')" class="glyphicon glyphicon-eye-open"></i>
                                <i @click="show('editUser')" class="glyphicon glyphicon-pencil"></i>
                                <i class="glyphicon glyphicon-trash"></i>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                     <div class="row">
					       <div class="col-md-10 col-lg-10" style=" padding:40px">
					        <h4 @click="show('newUser')" class="media-heading">
					           <i  class="glyphicon glyphicon-plus"></i>Add New User/Staff
					        </h4>
					       </div>
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
               submit(event) {
                console.log('submitting…');

                let formData = new FormData(event.target);

                axios.post('/user/register', formData).then(response=>{
                  console.log('form submited');
                });

              },
              show (action) {
                  if(action=="newUser")
                      this.$modal.show('new-user');
                  if(action=="showUser")
                      this.$modal.show('show-user');
                  if(action=="editUser")
                      this.$modal.show('edit-user');
                },
                hide () {
                  if(action=="newUser")
                      this.$modal.hide('new-user');
                  if(action=="showUser")
                      this.$modal.hide('show-user');
                  if(action=="editUser")
                      this.$modal.hide('edit-user');
                }
            }
        }
</script>