<template>
    <div id="wrapper">
        <div class="overlay"></div>
        <div id="page-content-wrapper" style="padding:40px;margin-top:40px;">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container" >
            	<div class="row" style="padding-bottom:40px;">
            		<div class="col-md-5" style="padding:40x">
            			<h1  class="text-center"><i class="glyphicon glyphicon-home"></i> Nextstep Dashboard</h1>
            		</div>
            	</div>
                <div class="user-dashboard" style="color:black; background-color:white; padding-top:20px;padding-left:20px;"  >
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
