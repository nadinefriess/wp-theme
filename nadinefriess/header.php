<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Nadine Friess"/>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo("name"); ?></title>

        <!-- RSS-Feed -->
        <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss2_url'); ?>">

        <!-- Bootstrap -->
        <!--<link rel="stylesheet" href="wp-content/themes/nadinefriess/bootstrap/css/bootstrap.min.css" type="text/css" media="screen" />
        <!-- Latest compiled and minified JavaScript -->
        <!-- Eigenes Stylesheet -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Sintony:400,700|Seaweed+Script' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Buenard:400,700' rel='stylesheet' type='text/css'>

        <!-- HTML5 -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- [if lt IE 9]>
              <script src="../../assets/js/html5shiv.js"></script>
              <script src="../../assets/js/respond.min.js"></script>
             [endif] -->

        <?php wp_head(); ?>
    </head>
    <body>
        <div id="wrapper" class="container">
            <div id="kopfbereich" class="row">

                <!-- Logo-->
                <div id="logo" class="hidden-xs col-xs-12 col-sm-6 col-md-7 col-lg-8">
                    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                </div>

                <!-- Navigationsbereich für Geräte ab 767px Breite-->
                <div id="navibereich" class="hidden-xs col-xs-12 col-sm-6 col-md-5 col-lg-4">
                    <ul id="navi">
                        <li class="navi-punkte"><a href="<?php bloginfo('url'); ?>">Startseite</a></li>
                        <li class="navi-punkte">
                            <a class="sub-navi hastooltip" href="#" rel="tooltip-2" data-placement="bottom" data-toggle="tooltip"
                               data-trigger="click" data-html="true" title="<?php wp_get_archives(array('type' => 'monthly', 'limit' => 6)); ?>">
                                Archiv
                            </a>
                        </li>
                        <li class="navi-punkte">
                            <a href="<?php
                            $id = 2;
                            echo get_page_link($id);
                            ?>">
                                &Uuml;ber
                            </a>
                        </li>
                        <li class="navi-punkte counter">
                            <?php
                            //Plugin: count per day
                            global $count_per_day;
                            if (method_exists($count_per_day, "show"))
                                echo "\n" . $count_per_day->getUserAll($return) . " Besucher";
                            ?>
                        </li>
                    </ul>
                </div>

                <!-- Navigationsbereich für Geräte unter 767px Breite -->
                <div id="navibereich" class="visible-xs col-xs-12 col-sm-6 col-md-5 col-lg-4">
                    <!-- Verlinkungen zu Seiten -->
                    <ul id="navi">
                        <li class="navi-punkte"><a href="<?php bloginfo('url'); ?>">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                        <li class="navi-punkte"><a href="
                            <?php
                            $id = 2;
                            echo get_page_link($id);
                            ?>">
                                <span class="glyphicon glyphicon-user"></span>
                            </a>
                        </li>
                    </ul>
                    <!-- Funktionen -->
                    <ul id="navi-rechts">
                        <li id="suchicon" class="navi-punkte">
                            <span class="glyphicon glyphicon-search"></span>
                        </li>
                        <li id="kategorienicon" class="navi-punkte">
                            <span class="glyphicon glyphicon-th"</span>
                        </li>
                        <!-- Archiv -->
                        <li id="archivicon" class="navi-punkte">
                            <span class="glyphicon glyphicon-th-large"></span>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="visible-xs"><!-- Versteckte Elemente-->
                <div class="linie iconline"></div>
                <div id="suche">
                    <form id="suchfeld" class=" form-signin" method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="search-input-group">
                            <input type="text" class="form-control" placeholder="Suchbegriff" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
                        </div>
                    </form>
                </div>
                <div id="kategorien">
                    <h3 id="kategorien-titel">Kategorien</h3>
                    <?php wp_list_categories('orderby=name&order=ASC&title_li'); ?>
                </div>
                <div id="archiv">
                    <h3 id="archiv-titel">Archiv</h3>
                    <?php wp_get_archives(array('type' => 'monthly', 'limit' => 6)); ?>
                </div>
            </div>



