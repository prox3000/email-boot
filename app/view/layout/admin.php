<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="product" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Oleg Abramov">

    <link href="/css/metro-bootstrap.css" rel="stylesheet">
    <link href="/css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="/css/iconFont.css" rel="stylesheet">
    <link href="/css/docs.css" rel="stylesheet">
    <link href="/js/prettify/prettify.css" rel="stylesheet">


    <!-- Load JavaScript Libraries -->
    <script src="/js/jquery/jquery.min.js"></script>
    <script src="/js/jquery/jquery.widget.min.js"></script>
    <script src="/js/jquery/jquery.mousewheel.js"></script>
    <script src="/js/prettify/prettify.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="/js/load-metro.js"></script>

    <!-- Local JavaScript -->
    <script src="/js/docs.js"></script>
 
    <title></title>
</head>
<body class="metro">
    <?php 
    if(config::g()->no_topmenu != true ){
        include('_admin_top_menu.php');
    }
    ?>
    <div class="container">
      <?php echo $outTempl; ?>
    </div>
</body>
</html>
