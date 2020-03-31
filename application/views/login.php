<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url("tpl_admin")?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url("tpl_admin")?>/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url("tpl_admin")?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?= base_url("tpl_admin")?>/css/style.css" rel="stylesheet">
    <link href="<?= base_url("tpl_admin")?>/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

    <div class="container">

        <form class="form-signin" method="post" action="<?= base_url("login/do_login")?>">
            <h2 class="form-signin-heading">Silahkan Masuk</h2>
            <div class="login-wrap">
                <a href="http://localhost/agsatu_jennaty/login" class="btn btn-lg btn-success btn-block" style="color:white">klik di sini untuk login</a>
                <a class="btn btn-lg btn-danger btn-block" href="<?php echo base_url();?>" style="color:white">Home</a>
            </div>

        </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url("tpl_admin")?>/js/jquery.js"></script>
    <script src="<?= base_url("tpl_admin")?>/js/bootstrap.min.js"></script>


</body>

</html>