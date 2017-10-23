<template>
    <div id="page-content-wrapper" style="padding:40px;margin-top:40px;">
        <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button>

	<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       NEXTSTEP
                    </a>
                </li>
                <li>
                    <router-link to="/"><i class="glyphicon glyphicon-home"></i> Home</router-link>
                </li>
                <li>
                    <router-link to="/Requests"><i class="glyphicon glyphicon-envelope"></i> Requests</router-link>
                </li>
                <li>
					<router-link to="/events"><i class="glyphicon glyphicon-calendar"></i> Events</router-link>
                </li>
                <li>
                    <router-link to="/blog"><i class="glyphicon glyphicon-bold"></i> Blog</router-link>
                </li>
            </ul>
        </nav>
    </div>
</template>