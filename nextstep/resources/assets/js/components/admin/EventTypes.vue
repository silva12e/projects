<template>
	<div class="container">
			<div class="row" style="padding-bottom:40px;">
			<div class="col-md-8 col-lg-8 col-sm-8">
				<h1><i class="glyphicon glyphicon-question-sign"></i> Event types</h1>
			</div>
		</div>
		<modal name="new-type" height="auto">
			<div class="panel-body msg_container_base">
            <form @submit.prevent="submit">
               <div class="form-group">
                  <input placeholder="Event type" type="text" v-validate="'required'" name="type" data-vv-as="Event type" class="form-control" id="title">
                  <span style="color:red" v-show="errors.has('type')">{{ errors.first('type') }}</span>
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
                            <th>Type</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr v-for="type in eventTypes" >
                            <td>{{ type.type }}</td>
                            <td style="padding-right:40px;">
                                <i @click="remove(type.id)" class="glyphicon glyphicon-trash"></i>
                            </td>
                          </tr>
                        </tbody>
                      </table>
					 </div>
                      <div class="media-left">
                       <div class="media-body" style="padding:20px;">
                              <h4 @click="show('newEvent')" class="media-heading">
                                 <i  class="glyphicon glyphicon-plus"></i>Add New Type
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
                eventTypes:[]
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

                    axios.post('/admin/events/create-event-type', formData).then(response=>{
                      console.log('form submited');
                      swal({
                        title: "Event type added",
                        text: "Event type has been created",
                        icon: "success",
                        button: "Okay",
                      });
                      this.init();
                      this.hide();
                    });
                },
                show (action) 
                {
                    this.$modal.show('new-type');
                },
                hide()
                {
                    this.$modal.hide('new-type');
                },
                init()
                {
                    axios.post('/admin/events/types')
                    .then( response => {
                      this.eventTypes = response.data.eventType;
                    })
                    .catch(error =>  {
                    })
                },
                 remove: function(id)
                  {
                    axios.delete('/admin/event-type/remove/'+ id).then(response=>{
                      swal({
                        title: "Event type Removed",
                        text: "Event type has been removed",
                        icon: "success",
                        button: "Okay",
                      });
                      this.init();   
                    })
                  },
            }
        }
</script>