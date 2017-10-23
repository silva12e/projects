<template>
	<div class="container">
    <modal name="edit-event" height="auto">
      <form class="form-horizontal">
            <fieldset>
                <div class="panel-heading ">
                     <div class="row">
                      <div class="col-md-4 col-lg-4">
                        <h4><i class="glyphicon glyphicon-calendar"></i>Edit Event</h4>
                      </div>
                     </div>
                   </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Name</label>
                    <div class="col-md-6">
                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="eventType">Type</label>
                    <div class="col-md-6">
                        <select id="eventType" name="eventType" class="form-control">
                            <option value="TOURNAMENT">Tournament</option>
                            <option value="PRACTICE">Practice Round</option>
                        </select>
                    </div>
                </div>

                <!-- Appended Input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="eventDate">Date</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <input id="eventDate" name="eventDate" class="form-control" placeholder="DD/MM/YYYY" type="text" required="">
                            <span class="input-group-addon">Calendar</span>
                        </div>

                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="venueName">Venue</label>
                    <div class="col-md-6">
                        <input id="venueName" name="venueName" type="text" placeholder="" class="form-control input-md">
                        <button class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i></button>
                    </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="submitButton"></label>
                    <div class="col-md-8">
                        <button id="submitButton" name="submitButton" class="btn btn-default">Schedule Event</button>
                        <button id="cancelButton" name="cancelButton" class="btn btn-default">Cancel</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </modal>
    <modal name="new-event" height="auto">
        <form class="form-horizontal">
            <fieldset>

                <div class="panel-heading ">
                     <div class="row">
                      <div class="col-md-4 col-lg-4">
                        <h4><i class="glyphicon glyphicon-calendar"></i>New Event</h4>
                      </div>
                     </div>
                   </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Name</label>
                    <div class="col-md-6">
                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="eventType">Type</label>
                    <div class="col-md-6">
                        <select id="eventType" name="eventType" class="form-control">
                            <option value="TOURNAMENT">Tournament</option>
                            <option value="PRACTICE">Practice Round</option>
                        </select>
                    </div>
                </div>

                <!-- Appended Input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="eventDate">Date</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <input id="eventDate" name="eventDate" class="form-control" placeholder="DD/MM/YYYY" type="text" required="">
                            <span class="input-group-addon">Calendar</span>
                        </div>

                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="venueName">Venue</label>
                    <div class="col-md-6">
                        <input id="venueName" name="venueName" type="text" placeholder="" class="form-control input-md">
                        <button class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i></button>
                    </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="submitButton"></label>
                    <div class="col-md-8">
                        <button id="submitButton" name="submitButton" class="btn btn-default">Schedule Event</button>
                        <button id="cancelButton" name="cancelButton" class="btn btn-default">Cancel</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </modal>

		<div class="row" style="padding-bottom:40px;">
			<div class="col-md-8 col-lg-8 col-sm-8">
				<h1><i class="glyphicon glyphicon-calendar"></i> Events</h1>
			</div>
		</div>
              <!-- Fluid width widget -->        
        <div class="panel panel-danger">
              <div class="panel-heading">
                  <h3 class="panel-title">
                      <span class="glyphicon glyphicon-calendar"></span> 
                      Nextstep Calendar Events
                  </h3>
              </div>
              <div class="panel-body">
                  <ul class="media-list">
                      <li class="media">
                          <div class="media-left">
                              <div class="panel panel-danger text-center date">
                                  <div class="panel-heading month">
                                      <span class="panel-title strong">
                                          Mar
                                      </span>
                                  </div>
                                  <div class="panel-body day text-danger">
                                      23
                                  </div>
                              </div>
                          </div>
                          <div class="media-body">
                              <h4 class="media-heading">
                                  Pulvinar Mauris Eu
                              </h4>
                              <p>
                                  Vivamus pulvinar mauris eu placerat blandit. In euismod tellus vel ex vestibulum congue.
                              </p>
                              <p>
                              	<i @click="show('editEvent')" class="glyphicon glyphicon-pencil"></i>
                                  <i class="glyphicon glyphicon-trash"></i>

                              </p>
                          </div>
                      </li>
                      <li class="media">
                          <div class="media-left">
                              <div class="panel panel-danger text-center date">
                                  <div class="panel-heading month">
                                      <span class="panel-title strong">
                                          Jan
                                      </span>
                                  </div>
                                  <div class="panel-body text-danger day">
                                      16
                                  </div>
                              </div>
                          </div>
                          <div class="media-body">
                              <h4 class="media-heading">
                                  Aenean Consectetur Ultricies
                              </h4>
                              <p>
                                  Curabitur vel malesuada tortor, sit amet ultricies mauris. Aenean consectetur ultricies luctus.
                              </p>
                              <p>
                              	<i @click="show('editEvent')" class="glyphicon glyphicon-pencil"></i>
                                  <i class="glyphicon glyphicon-trash"></i>

                              </p>
                          </div>
                      </li>
			
                      <li class="media">
                          <div class="media-left">
                              <div class="panel panel-danger text-center date">
                                  <div class="panel-heading month">
                                      <span class="panel-title strong all-caps">
                                          Dec
                                      </span>
                                  </div>
                                  <div class="panel-body text-danger day">
                                      8
                                  </div>
                              </div>
                          </div>
                          <div class="media-body">
                              <h4 class="media-heading">
                                  Praesent Tincidunt
                              </h4>
                              <p>
                                  Sed convallis dignissim magna et dignissim. Praesent tincidunt sapien eu gravida dignissim.
                              </p>
                              <p>
                              	<i @click="show('editEvent')" class="glyphicon glyphicon-pencil"></i>
                                  <i class="glyphicon glyphicon-trash"></i>
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
<script type="text/javascript">
     export default {
        data: function() {
            return{

            }

            },
            methods:
            {
                show (action) {
                    if(action=="newEvent")
                        this.$modal.show('new-event');
                    if(action=="editEvent")
                      this.$modal.show('edit-event');

                  },
                  hide () {
                    if(action=="edit")
                        this.$modal.hide('edit-event');
                    if(action=="editEvent")
                        this.$modal.hide('edit-event');
            }

        }
      }
</script>