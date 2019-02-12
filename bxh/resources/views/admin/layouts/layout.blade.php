<?php
use Illuminate\Support\Facades\DB;
$count = DB::table('news')->count();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Điều trị nam khoa</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="<?php echo domain;?>/public/admin/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo domain;?>/public/admin/stylesheets/theme.css">
    <link rel="stylesheet" href="<?php echo domain;?>/public/admin/lib/font-awesome/css/font-awesome.css">
    <script src="<?php echo domain;?>/public/admin/lib/jquery-1.7.2.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo domain;?>/public/admin/css/custom.css">
    <!-- Demo page code -->
    <style type="text/css">
        #line-chart {
            height: 300px;
            width: 800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand {
            font-family: georgia, serif;
        }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="<?php echo domain;?>/public/admin/lib/html5.js"></script>
    <![endif]-->
    <!-- Le fav and touch icons -->
</head>
<!--[if lt IE 7 ]>
<body class="ie ie6"> <![endif]-->
<!--[if IE 7 ]>
<body class="ie ie7 "> <![endif]-->
<!--[if IE 8 ]>
<body class="ie ie8 "> <![endif]-->
<!--[if IE 9 ]>
<body class="ie ie9 "> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<body class="">
<!--<![endif]-->
<div class="navbar">
    <div class="navbar-inner">
        <ul class="nav pull-right">
            <li id="fat-menu" class="dropdown">
                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-user"></i> <?php if(!empty($_SESSION['adm_name'])){ echo $_SESSION['adm_name'];}?>
                    <i class="icon-caret-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="<?php echo domain.'/admin/admin/myaccount'?>">My Account</a></li>
                    <li class="divider"></li>
                    <li><a tabindex="-1" class="visible-phone" href="#">Settings</a></li>
                    <li class="divider visible-phone"></li>
                    <li><a tabindex="-1" href="<?php echo domain.'/admin/admin/logout';?>">Logout</a></li>
                </ul>
            </li>
        </ul>
        <a class="brand" href="<?php echo domain;?>"><span class="first">Your</span> <span class="second">Company</span></a>
    </div>
</div>
<!--siteber-->
<?php if(!empty($_SESSION['adm_id'])){?>
<div class="sidebar-nav">
    <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>Dashboard</a>
    <ul id="dashboard-menu" class="nav nav-list collapse in">
        <li><a href="<?php echo domain.'/admin';?>">Home</a></li>
    </ul>
    <?php if($_SESSION['adm_level']=="1"){?>
    <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-briefcase"></i>Thành viên<span class="label label-info">+</span></a>
    <ul id="accounts-menu" class="nav nav-list collapse">
        <li ><a href="<?php echo domain.'/admin/admin/index';?>">Danh sách</a></li>
        <li ><a href="<?php echo domain.'/admin/admin/add';?>">Thêm mới</a></li>
    </ul>
    <?php }?>
    <?php if($_SESSION['adm_level']=="1"){?>
    <a href="#error-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>Danh mục <i class="icon-chevron-up"></i></a>
    <ul id="error-menu" class="nav nav-list collapse">
        <li ><a href="<?php echo domain.'/admin/categories/index';?>">Danh sách</a></li>
        <li ><a href="<?php echo domain.'/admin/categories/add';?>">Thêm danh mục</a></li>
    </ul>
    <?php }?>
    <a href="#banners" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>banners <i class="icon-chevron-up"></i></a>
    <ul id="banners" class="nav nav-list collapse">
        <li ><a href="<?php echo domain.'/admin/banners/index';?>">Danh sách</a></li>
        <li ><a href="<?php echo domain.'/admin/banners/add';?>">Thêm banner</a></li>
    </ul>
    <a href="#data" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>News<i class="icon-chevron-up"></i></a>
    <ul id="data" class="nav nav-list collapse">
        <li ><a href="<?php echo domain.'/admin/news/index';?>">Danh sách</a></li>
        <li ><a href="<?php echo domain.'/admin/news/add';?>">Thêm news</a></li>
    </ul>
    <!--<a href="#vosinh" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>Trường hợp khỏi bệnh<i class="icon-chevron-up"></i></a>
    <ul id="vosinh" class="nav nav-list collapse">
        <li ><a href="<?php /*echo domain.'/admin/news/dieutrithanhcong';*/?>">Danh sách</a></li>
        <li ><a href="<?php /*echo domain.'/admin/news/add/dieu-tri-thanh-cong';*/?>">Thêm mới</a></li>
    </ul>-->
    <!--<a href="#about" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>About<i class="icon-chevron-up"></i></a>
    <ul id="about" class="nav nav-list collapse">
        <li ><a href="<?php /*echo domain.'/admin/about/index';*/?>">Danh sách About</a></li>
        <li ><a href="<?php /*echo domain.'/admin/about/add';*/?>">Thêm About</a></li>
    </ul>-->
    <a href="#binhluan" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>Bình Luận<i class="icon-chevron-up"></i></a>
    <ul id="binhluan" class="nav nav-list collapse">
        <li ><a href="<?php echo domain.'/admin/binhluan/index';?>">Danh sách Bình luận</a></li>
        <li ><a href="<?php echo domain.'/admin/binhluan/add';?>">Thêm Bình luận</a></li>
    </ul>
    <a href="#dangky" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>Bệnh nhân<i class="icon-chevron-up"></i></a>
    <ul id="dangky" class="nav nav-list collapse">
        <li ><a href="<?php echo domain.'/admin/dangky/index';?>">Danh sách Bệnh nhân</a></li>
        <li ><a href="<?php echo domain.'/admin/dangky/add';?>">Thêm Bệnh nhân</a></li>
    </ul>
    <a href="<?php echo domain.'/admin/configs/index'?>" class="nav-header" ><i class="icon-question-sign"></i>Configs</a>
</div>
<?php }?>
<!--end sitebar-->
<!--div contetn-->
@yield('content')
<!--end div content-->
<footer>
    <hr>
    <p class="pull-right"><?= $count;?> <a href="" target="_blank">Free Bootstrap Theme</a> by <a href="" target="_blank">Portnine</a></p>
    <p>&copy; 2012 <a href="" target="_blank">Portnine</a></p>
</footer>
<script src="<?php echo domain;?>/public/admin/lib/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
    $("[rel=tooltip]").tooltip();
    $(function () {
        $('.demo-cancel-click').click(function () {
            return false;
        });
    });
</script>
</body>
</html>