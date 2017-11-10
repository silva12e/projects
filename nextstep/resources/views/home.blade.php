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
                 <li>
                    <router-link to="/admin/event-types"><i class="glyphicon glyphicon-question-sign"></i> Event Types</router-link>
                </li>
                 <li>
                    <router-link to="/admin/post-categories"><i class="glyphicon glyphicon-book"></i> Post Categories</router-link>
                </li>
            </ul>
        </nav>
    </div >
        <router-view></router-view>
    </div>
</div>  
    
</div>
@endsection
