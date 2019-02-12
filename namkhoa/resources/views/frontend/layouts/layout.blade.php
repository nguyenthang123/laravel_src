
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @section('title') @show()</title>
    <meta name="keywords" content="@section('keywords')@show()">
    <meta name="description" content="@section('description')@show()">
    <?= ico_shortcut;?>
    <meta name="RATING" content="GENERAL" />
    <meta property="og:url" itemprop="url" content="<?= 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" />
    <base target="_blank">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo domain.'/public/frontend/';?>bootstrap-3.3.4/css/bootstrap.min.css">
    <link href="<?php echo domain.'/public/frontend/';?>css/style.css" rel="stylesheet">
    <link href="<?php echo domain.'/public/frontend/';?>css/dangky.css" rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="<?php echo domain.'/public/frontend/';?>bootstrap-3.3.4/js/bootstrap.min.js"></script>
    <script src="<?php echo domain;?>/public/frontend/js/ltMove.js"></script>
    <script src="<?php echo domain.'/public/frontend/js/custorm.js';?>"></script>
    <link type="text/css" rel="stylesheet" href="http://static.graddit.com/css/graddit.css"/>
    <!--dmeo phần ratting-->
    <!--<link href="<?php /*echo domain;*/?>/rating/css/rating.css" rel="stylesheet">-->
    <!--end demo phần ratting-->
    <!--home moi-->
    <link rel="stylesheet" type="text/css" href="http://trihanoi.com/public/frontend/home/css/global.css">
    <link rel="stylesheet" type="text/css" href="<?= domain;?>/public/frontend/home/css/header.css">
    <!--end home moi-->
</head>
<body>
<?= cdtop();?>
<?= dangkysdt();?>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-85974214-1', 'auto');
    ga('send', 'pageview');
</script>
    <div class="container-fluid " style="padding-left: 0;padding-right: 0;">
    @include('frontend.layouts.header')
    @yield('content')
        <!--<div id="footer">-->
            @include('frontend.layouts.footer')
        <!--</div>-->
    </div>
<!--    link line chat-->

<?= popup();?>
<?= Addtop();?>
<?= Addleft();?>
<?= line_chat();?>
</body>
</html>
<script src="<?= domain;?>/public/frontend/js/rewrite_domain_tags.js"></script>