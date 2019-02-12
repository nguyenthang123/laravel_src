<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{!!  asset('public/css/bootstrap.min.css'); !!}">
	<link rel="stylesheet" href="{!!  asset('public/admin/css/style.css'); !!}">
	<link rel="stylesheet" href="{!!  asset('public/admin/css/simple-sidebar.css'); !!}">
<!--
<script src="http://cdn.ckeditor.com/4.5.7/full/ckeditor.js1"></script> 
-->	
	<script src="{!!  asset('public/admin/fckeditor/ckeditor/ckeditor.js'); !!}"></script>
	<script src="{!!  asset('public/js-s/jquery-1.11.3.min.js'); !!}"></script>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{!!  asset('public/admin/fckeditor/ckfinder/ckfinder.js'); !!}"></script>	
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top navbar-fixed-top-son">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
          <a style="padding-top: 8px;margin-left: 12px;" class="navbar-brand" target="_blank" href="{!!  asset('/admin'); !!}">Home Admin</a>
		  
        </div>

		<div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class=""><a target="_blank" href="{!!  asset('/'); !!}">Home index</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Hello:					<?php
				if(isset($_SESSION['admin'])==true) { 
					echo $_SESSION['admin'];
					?>
					
				<?php 	} ?>  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
					<li role="separator" class="divider"></li>
                    <li><a href='{{ asset('admin/logout') }}'> Logout </a> </li>
                    <li role="separator" class="divider"></li>

                  </ul>
                </li>
              </ul>
            </div>
      </div>
    </nav>
