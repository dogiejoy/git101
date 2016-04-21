<!DOCTYPE html>

<html>

    <head>

        <!--title>Directory listing of <?php //echo $lister->getListedPath();  ?></title-->
        <title>PCM - Team</title>
        <link rel="shortcut icon" href="<?php echo APP_THEMEPATH; ?>/img/folder.png">

        <!-- STYLES -->
        <link rel="stylesheet" href="<?php echo APP_THEMEPATH; ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo APP_THEMEPATH; ?>/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo APP_THEMEPATH; ?>/css/style.css">

        <!-- SCRIPTS -->
        <script type="text/javascript" src="<?php echo APP_THEMEPATH; ?>/js/jquery.min.js"></script>
        <script src="<?php echo APP_THEMEPATH; ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo APP_THEMEPATH; ?>/js/directorylister.js"></script>

        <!-- FONTS -->
        <link rel="stylesheet" type="text/css"  href="<?php echo APP_THEMEPATH; ?>/css/font.css">

        <!-- META -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

        <?php file_exists('analytics.inc') ? include('analytics.inc') : false; ?>

    </head>

    <body>
        <div id="page-navbar" class="navbar navbar-default navbar-fixed-top">
            <div class="container">

                <div class="navbar-left">
                    <ul id="" class="nav navbar-nav">
                        <li>
                            <a href="/pcm" id="">
                                <i class="fa fa-home fa-lg"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <p class="navbar-text">
                    <a href="/pcm/ebook">eBook</a>
                    <span class="divider"> | </span>
                    <a target="_blank" href="http://scrumblr.ca/PCM%20Team">Scrum</a>
                </p>

                <div class="navbar-right">

                    <ul id="page-top-nav" class="nav navbar-nav">
                        <li>
                            <a href="javascript:void(0)" id="page-top-link">
                                <i class="fa fa-arrow-circle-up fa-lg"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div id="page-content" class="container">

            <?php file_exists('header.php') ? include('header.php') : ""; ?>
            <div id="directory-list-header">
                <div class="row">
                    <div class="col-md-7 col-sm-6 col-xs-10">Title</div>
                    <!--
                    <div class="col-md-2 col-sm-2 col-xs-2 text-right">Size</div>
                    <div class="col-md-3 col-sm-4 hidden-xs text-right">Last Modified</div>
                    -->
                </div>
            </div>

            <ul id="directory-listing" class="nav nav-pills nav-stacked">
            </ul>
        </div>

        <?php file_exists('footer.php') ? include('footer.php') : ""; ?>



    </body>

</html>
