<template>
	<div class="col-md-3">
		<div class="pricing hover-effect">
			<div class="pricing-head">
				<h3>Service Title <span>
				Service Subtitle </span>
				</h3>
			</div>
			<div class="pricing-footer">
				<p>
					 Service Description
				</p>
				<a href="javascript:;" class="btn yellow-crusta">
				Schedule Service
				</a>
			</div>
		</div>
	</div>
</template>
<script type="text/javascript">
	export default{
		props:['type', 'services'],
		data(){
			return{
				services:[]
			}
		},
		mounted()
		{
			
		},
		methods:
		{

		}
	}
</script>