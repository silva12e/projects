@extends('layouts.app')
@section('content')
	 <div id="wrapper">
        <div class="overlay"></div>
        <div id="page-content-wrapper">
               <div id="page-content-wrapper" style="padding:40px">
        <div class="row">
        <div class="col-lg-2">
        <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button>
    </div>
        </div>
	<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">

            <ul class="nav sidebar-nav">
                <li>

                <div class="media">
                    <a class="pull-left" href="/admin/profile">
                        <img class="img-circle" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" />
                    </a>

                    <div class="media-body">
                        <h4 class=" text-center media-heading">Admin</h4>
                        <p style="color:white" class="text-center">Log out</p>
                        <p style="color:white" class="text-center"></p>
                    </div>

            </div>
                </li>
                <li>
                    <router-link to="/home" active><i class="glyphicon glyphicon-th"></i> Dashboard</router-link>
                </li>
                <li>
                    <router-link to="/admin/Requests"><i class="glyphicon glyphicon-envelope"></i> Requests</router-link>
                </li>
                <li>
					<router-link to="/admin/events"><i class="glyphicon glyphicon-calendar"></i> Events</router-link>
                </li>
                <li>
                    <router-link to="/admin/blog"><i class="glyphicon glyphicon-bold"></i> Blog</router-link>
                </li>
                <li>
                    <router-link to="/admin/users"><i class="glyphicon glyphicon-user"></i> Users</router-link>
                </li>
                <li>
                    <router-link to="/admin/applications"><i class="glyphicon glyphicon-inbox"></i> Applications</router-link>
                </li>
            </ul>
        </nav>
    </div>
        <router-view></router-view>
    </div>
</div>  
    
</div>
@endsection
