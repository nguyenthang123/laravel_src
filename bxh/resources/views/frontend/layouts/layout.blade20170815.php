
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @section('title') @show()</title>
    <meta name="keywords" content="@section('keywords')@show()">
    <meta name="description" content="@section('description')@show()">
    <base target="_blank">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo domain.'/public/frontend/';?>bootstrap-3.3.4/css/bootstrap.min.css">
    <link href="<?php echo domain.'/public/frontend/';?>css/style.css" rel="stylesheet">
    <link href="<?php echo domain.'/public/frontend/';?>css/dangky.css" rel="stylesheet">
    <link href="http://phongkhambenhxahoi.vn/public/frontend/css/menu.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://phongkhambenhxahoi.vn/public/frontend/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="http://phongkhambenhxahoi.vn/public/frontend/slick/slick-theme.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js"></script>-->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="<?php echo domain.'/public/frontend/';?>bootstrap-3.3.4/js/bootstrap.min.js"></script>
    <script src="<?php echo domain;?>/public/frontend/js/ltMove.js"></script>
    <script src="<?php echo domain.'/public/frontend/js/custorm.js';?>"></script>
    <?= ico_shortcut;?>
    <!--home moi-->
    <link rel="stylesheet" type="text/css" href="http://trihanoi.com/public/frontend/home/css/global.css">
    <link rel="stylesheet" type="text/css" href="<?= domain;?>/public/frontend/home/css/header.css">
    <!--end home moi-->
</head>
<body>
<?= Addtop();?>
<?= popup();?>
<?= Addleft();?>
    <div class="container-fluid ">
        @include('frontend.layouts.header')

    @yield('content')
        <!--<div id="footer">-->
            @include('frontend.layouts.footer')
        <!--</div>-->
    </div>
<!--    link line chat-->
    <?= dangkysdt();?>
<script src="http://phongkhamgiaiphong.com/bxh/public/frontend/js/rewrite_domain_tags.js"></script>
    <?= line_chat();?>
</body>
</html>
