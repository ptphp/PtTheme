<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title>PtPHP - PHP framework</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <?php Html::link_statics("theme/neat",array(
        "css/bootstrap.css",
        "css/bootstrap-responsive.css",
        "css/jquery.fancybox.css",
        "css/style.css",
    ))?>
</head>
<body class="wood">
<?php include View("block/front/topbar");?>
<?php include View("block/front/breadcrumbs");?>

<div class="main">
<div class="container-fluid">
<div class="navi">
    <?php include View("block/front/main_nav");?>
</div>
<div class="content">
    <div class="row-fluid">
        <div class="span12">
            <div class="box">
                <div class="box-head">
                    <h3>文章</h3>
                </div>
                <div class="box-content">
                    <div style="height:600px"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php include View("block/front/footer");?>
<?php Html::script_statics("theme/neat",array(
    "js/jquery.js",
    "js/bootstrap.min.js",
    "js/jquery.peity.js",
    "js/jquery.fancybox.js",
    "js/jquery.flot.js",
    "js/jquery.color.js",
    "js/jquery.flot.resize.js",
    "js/jquery.cookie.js",
    "js/custom.js",
    "js/demo.js",
))?>
</body>
</html>