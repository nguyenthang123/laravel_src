<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @section('title') @show()</title>
    <meta name="keywords" content="@section('keywords')@show()">
    <meta name="description" content="@section('description')@show()">
    <meta property="og:url" itemprop="url" content="<?= 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" />
    <link rel="stylesheet" href="<?= domain;?>/public/frontend/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= domain;?>/public/frontend/css/style.css">
    <link rel="stylesheet" href="<?= domain;?>/public/frontend/css/custorm.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?= domain;?>/public/frontend/bootstrap/js/bootstrap.min.js"></script>
    <?= ico_shortcut;?>
</head>
<body>
<?= m_popup();?>
    <div class="container">
    @include('frontend.layouts.header')
    <div class="clear" style="float: left"></div>
        @yield('content')
    <div class="clear2"></div>
        @include('frontend.layouts.footer')
    </div>
</body>
</html>