<template>
	<div >
		<div class="row" v-for="t in types"> 
			<div class="title" style="padding:20px;">
			<h3 style="font-family: 'Kanit', sans-serif; color:black">{{ t.type }} Vehicle Services</h3>
			</div>
			<service-list :type="t.id" :services="services"></service-list>
		</div>
	</div>
</template>
<script type="text/javascript">
	export default {
    data() 
    {
        return {
            types:[],
            services:[]
        }

    },
    methods:
    {
    	init: function()
		{
			axios.post('/vehicle-types/types').then(response =>{
				this.types = response.data.types;
			});
		}
    },
    mounted()
    {
    	this.init();
    }
}
</script>