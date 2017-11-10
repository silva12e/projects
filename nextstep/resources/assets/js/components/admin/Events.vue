<template>
	<div class="container">
    <modal name="edit-event" height="auto">
      <div class="panel-heading top-bar ">
            <div class="col-md-10 col-xs-10" style="padding-top:20px;padding-bottom:20px;">
                <h4 style="color:#cd5360;" class="panel-title"><span class="glyphicon glyphicon-calendar"></span> New Event</h4>
            </div>
            <div class="col-md-2 col-xs-2" style="text-align: right;">
                <a href="#"><span class="glyphicon glyphicon-minus icon_minim"></span></a>
            </div>
            </div>
            <div class="panel-body msg_container_base">
              <br />
              <form  @submit.prevent="edit(event.id)" style="padding-bottom:20px;">
                <div class="form-group">
                  <input type="text" v-model="event.title" v-validate="'required'" name="title" data-vv-as="Event Title" class="form-control" id="title">
                  <span style="color:red" v-show="errors.has('title')">{{ errors.first('title') }}</span>
                </div>
                <div class="form-group">
                  <date-picker name="date"  v-validate="'required'" data-vv-as="Event Date" v-model="event.date" :config="config"></date-picker>
                  <span style="color:red" v-show="errors.has('date')">{{ errors.first('date') }}</span>
                </div>
                <div class="form-group">
                  
                  <select v-model="event.type" id="eventType" name="type" class="form-control">
                      <option v-for="type in eventTypes">{{type.type}}</option>
                  </select>

                </div>
                <div class="form-group">
                  <textarea v-model="event.body" v-validate="'required'" data-vv-as="Event Body" style="height:300px;" name="body" type="text" class="form-control" id="body"></textarea>
                  <span style="color:red" v-show="errors.has('body')">{{ errors.first('body') }}</span>
                </div>
                <div class="form-group">
                  <input v-model="event.venue" name="venue" v-validate="'required'" data-vv-as="Event Venue" type="text" class="form-control" id="venue" placeholder="venue">
                  <span style="color:red" v-show="errors.has('venue')">{{ errors.first('venue') }}</span>
                </div>
                <div class="form-group" style="padding-top:20px;padding-bottom:20px;" >
                  <button style="padding:20px;" class="btn btn-default">Edit</button>
                </div>
              </form>
          </div>
    </modal>
    <modal name="new-event" height="auto">
    <div class="panel panel-default"  >   
            <div class="panel-heading top-bar ">
                <div class="col-md-10 col-xs-10" style="padding-top:20px;padding-bottom:20px;">
                    <h4 style="color:#cd5360;" class="panel-title"><span class="glyphicon glyphicon-calendar"></span> New Event</h4>
                </div>
                <div class="col-md-2 col-xs-2" style="text-align: right;">
                    <a href="#"><span class="glyphicon glyphicon-minus icon_minim"></span></a>
                </div>
            </div>
            <div class="panel-body msg_container_base">
              <br />
              <form id="newEventForm" @submit.prevent="submit" style="padding-bottom:20px;">
                <div class="form-group">
                  <input placeholder="Event title" type="text" v-validate="'required'" name="title" data-vv-as="Event Title" class="form-control" id="title">
                  <span style="color:red" v-show="errors.has('title')">{{ errors.first('title') }}</span>
                </div>
                <div class="form-group">
                  <date-picker name="date"  v-validate="'required'" data-vv-as="Event Date" v-model="date" :config="config"></date-picker>
                  <span style="color:red" v-show="errors.has('date')">{{ errors.first('date') }}</span>
                </div>
                <div class="form-group">
                  <select v-model="event.type" id="eventType" name="type" class="form-control">

                      <option v-for="type in eventTypes">{{type.type}}</option>
                  </select>
                </div>
                <div class="form-group">
                  <textarea placeholder="Event description" v-validate="'required'" data-vv-as="Event Body" style="height:300px;" name="body" type="text" class="form-control" id="body"></textarea>
                  <span style="color:red" v-show="errors.has('body')">{{ errors.first('body') }}</span>
                </div>
                <div class="form-group">
                  <input  name="venue" v-validate="'required'" data-vv-as="Event Venue" type="text" class="form-control" id="venue" placeholder="venue">
                  <span style="color:red" v-show="errors.has('venue')">{{ errors.first('venue') }}</span>
                </div>
                <div class="form-group" style="padding-top:20px;padding-bottom:20px;" >
                  <button  style="padding:20px;" class="btn btn-default">Send</button>
                </div>
              </form>
          </div>
        </div>
    </modal>

		<div class="row" style="padding-bottom:40px;">
			<div class="col-md-8 col-lg-8 col-sm-8">
				<h1><i class="glyphicon glyphicon-calendar"></i> Events</h1>
			</div>
		</div>        
      <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-calendar"></span> 
                    Nextstep Calendar Events
                </h3>
            </div>
            <div class="panel-body">
                <ul    class="media-list">
                    <li v-for="event in events" class="media">
                        <div class="media-left">
                            <div class="panel panel-danger text-center date">
                                <div class="panel-heading month">
                                    <span class="panel-title strong">
                                        {{ event.date | momentMonth }}
                                    </span>
                                </div>
                                <div class="panel-body day text-danger">
                                    {{ event.date | momentDay }}
                                </div>
                            </div>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">
                                {{ event.title }}
                            </h4>
                            <p>
                                DESCRIPTION: {{ event.body }}
                            </p>
                            <p>
                                VENUE: {{ event.venue }}
                            </p>
                            <p>
                            	<i @click="showEdit('editEvent', event.id)" class="glyphicon glyphicon-pencil"></i>
                              <i @click="remove(event.id)" class="glyphicon glyphicon-trash"></i>
                            </p>
                        </div>
                    </li>
                  		<li class="media">
                      <div class="media-left">
                       <div class="media-body">
                              <h4 @click="show('newEvent')" class="media-heading">
                                 <i  class="glyphicon glyphicon-plus"></i>Add New Event
                              </h4>
                          </div>
                      </div>
                    </li>
                </ul>
            </div>
        </div>
	</div>
</template>
<script>
import datePicker from 'vue-bootstrap-datetimepicker';
     export default {
        data: function() {
            return{
                date: null,
                events:[],
                event:[],
                eventTypes:[],
                config: {
                  format: 'YYYY/MM/DD',
                  useCurrent: true,
                  showClear: true,
                  showClose: true,
                }
              }
            },
            filters:
            {
              momentMonth: function(date)
              {
                  if(date==null)return '';
                  return moment(date).format('MMM YY');
              },
              momentDay: function(date)
              {
                  if(date==null)return '';
                  return moment(date).format('DD');
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

                axios.post('/admin/events/create-event', formData).then(response=>{
                  console.log('form submited');
                  swal({
                    title: "Event added",
                    text: "Event has been created",
                    icon: "success",
                    button: "Okay",
                  });
                  this.init();
                  this.hide('newEvent');
                });
              },
              edit(id)
              {

                let formData = new FormData(event.target);

                axios.post('/admin/events/update/'+ id, formData).then(response=>{
                  console.log('form submited');
                  swal({
                    title: "Event updated",
                    text: "Event has been updated",
                    icon: "success",
                    button: "Okay",
                  });
                  this.init();
                  this.hide('editEvent');
                });
              },
              show (action) {
                if(action=="newEvent")
                    this.$modal.show('new-event');
              },
              showEdit (action, id) {
                this.$modal.show('edit-event');
                axios.get('/admin/events/'+ id).then( response => {
                  this.event = response.data.event;
                })
                .catch(error =>  {
                })
              },
              hide (action) {
                if(action=="edit")
                    this.$modal.hide('edit-event');
                if(action=="newEvent")
                    this.$modal.hide('new-event');
            },
            init: function()
            {
              axios.post('/admin/events')
                .then( response => {
                  this.events = response.data.events;
                  this.eventTypes = response.data.eventTypes;
                })
                .catch(error =>  {
                })
            },
           remove: function(id)
          {

            axios.delete('/admin/events/remove/'+ id).then(response=>{
              swal({
                title: "Event Removed",
                text: "Event has been removed",
                icon: "success",
                button: "Okay",
              });
              this.init();   
            })
          },
          resetForm: function()
          {
            $('#newEventForm').click(function(){
            $('#newEventForm')[0].reset();
            });
          }
        }
      }
</script>