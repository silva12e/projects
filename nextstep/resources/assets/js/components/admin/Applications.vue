<template>
	<div class="container">
			<div class="row" style="padding-bottom:40px;">
			<div class="col-md-8 col-lg-8 col-sm-8">
				<h1><i class="glyphicon glyphicon-user"></i> Applications</h1>
			</div>
		</div>
		<modal name="show-user" height="auto">
			show user
		</modal>
		<modal name="edit-user" height="auto">
			edit user
		</modal>
		<modal name="new-user" height="auto">
			new user
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
                            <th>Application Status</th>
                            <th>Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Ernesto Silva</td>
                            <td>admin@localhost.com</td>
                            <td>Pending</td>
                            <td>Dec 24th 2016 2:30pm</td>
                            <td style="padding-right:40px;">
                            	<i class="glyphicon glyphicon-file"></i>
                                <i @click="show('showUser')" class="glyphicon glyphicon-eye-open"></i>
                                <i class="glyphicon glyphicon-trash"></i>
                            </td>
                          </tr>
                        </tbody>
                      </table>
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