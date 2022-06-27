<!DOCTYPE html>
<!--[if IE]><![endif]-->
<?php
if ($lang == 'uk') {
    $lang_attr = ' lang="uk"';
}
elseif ($lang == 'en') {
    $lang_attr = ' lang="en_US"';
}
else {
    $lang_attr = ' lang="ru_RU"';
}
?>

<html<?php echo $lang_attr; ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="title" content="<?php echo $title; ?>">
    <meta name="generator" content="docfx 2.56.4.0">

    <?php
    if ($url_uk) {
        echo '<link rel="alternate" hreflang="uk" href="'. $url_uk .'">';
    } else {
        echo '<link rel="alternate" hreflang="en_US" href="'. $url_en .'">';
    }
    ?>

    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="/styles/docfx.vendor.css">
    <link rel="stylesheet" href="/styles/docfx.css">
    <link rel="stylesheet" href="/styles/main.css?v.0.0.6">
    <link href="//cdn.rawgit.com/noelboss/featherlight/1.7.6/release/featherlight.min.css" type="text/css" rel="stylesheet">
    <meta property="docfx:navrel" content="toc.html">
    <meta property="docfx:tocrel" content="toc.html">
 

</head>
<body data-spy="scroll" data-target="#affix" data-offset="120">
<div id="wrapper">

    <header>
        <nav id="autocollapse" class="navbar navbar-inverse ng-scope" role="navigation">
            <div class="container">
                <div class="navbar-header">
                   
			 
                    
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<a class="navbar-brand" href="
                        <?php

                        if ($lang == 'uk') {
                            echo '/uk';
                        } else {
                            echo '/';
                        }
                        ?>
                    ">
                        <img id="logo" class="svg" src="https://mef.dev/logo.svg" alt="">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="navbar">
                    <form class="navbar-form navbar-right" role="search" id="search">
                        <div class="form-group">
                            <input type="text" class="form-control" id="search-query" placeholder="Search"
                                   autocomplete="off">
                        </div>
                    </form>


                    <?php if ($lang == 'uk') { ?>
					<div class="mob-search">
								<img src="/search.png">
								<input id="docsearch-mob" type="text" placeholder="Пошук">
							</div>
                    <ul class="nav level1 navbar-nav">
					
                        <li>
                            <!-- <a href="api/index.html" name="api/toc.html" title="Api Documentation">Api Documentation</a> -->
                            <a id="developers_menu" href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                Developer's Guide
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="developers_menu">
                                <div class="inner-menu">
                                    <div>
                                        <li class="dropdown-header">Plugin basics</li>
                                        <li><a href="https://mef.dev/uk/plugin_basics/introduction.php">Вступ</a></li>
                                        <li><a href="https://mef.dev/uk/plugin_basics/platform_architecture.php">Архітектрура платформи</a></li>
                                    </div>
                                    <div>
                                        <li class="dropdown-header">Plugin guides</li>
                                        <li><a href="https://mef.dev/uk/dev_guides/first_ui_plugin.md">Перший UI плагін</a></li>
										<li><a href="https://mef.dev/uk/dev_guides/upload_ui_plugin.md">Регістрація плагіну</a></li>
										<li><a href="https://mef.dev/uk/dev_guides/first_backend_plugin.md">Перший Backend плагін</a></li>
                                        <li><a href="https://mef.dev/uk/dev_guides/portal_plugin.md">Portal плагін</a></li>
                                    </div>
                                    <div>
                                        <li class="dropdown-header">REST API</li>
                                        <li><a href="https://mef.dev/uk/rest_api/using_rest_api.php">Використання REST API</a></li>
                                        <li><a href="https://mef.dev/uk/rest_api/api_caching.php">Кешування API</a></li>
                                        <li><a href="https://mef.dev/uk/rest_api/http_method_request_formats.php">Формати запитів для HTTP-методів</a></li>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li>
                            <!-- <a href="api/index.html" name="api/toc.html" title="Api Documentation">Api Documentation</a> -->
                            <a id="drop2" href="/api/index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                Documentation
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="drop2">
                                <li><a href="/bss/index.html">Telecom BSS</a></li>
                                <!-- <li><a href="/api/Natec.Entities.html">Natec.Entities</a></li>
                                <li><a href="/api/Natec.Entities.html">Natec.Widecoup</a></li> -->
                            </ul>
                        </li>
						<li><a href="http://blog.natec.tech/ru/">Blog</a></li>
                        <li><a href="https://community.mef.dev/">Community</a></li>
                        <li>
                            <a id="drop4" href="/api/index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                UA
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="drop4">
                                <?php if($url_en) echo '<li><a href="'. $url_en .'">EN</a></li>'; ?>
                            </ul>
                        </li>
						<li class="search">
								<img src="/search.png">
								<input id="docsearch" type="text" placeholder="Пошук">
							</li>
                    </ul>
                    <?php }  else { ?>
                        <div class="mob-search">
								<img src="/search.png">
								<input id="docsearch-mob" type="text" placeholder="Search">
							</div>
                        <ul class="nav level1 navbar-nav">
						
                            <li>
                                <!-- <a href="api/index.html" name="api/toc.html" title="Api Documentation">Api Documentation</a> -->
                                <a id="developers_menu" href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Developer's Guide
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="developers_menu">
                                    <div class="inner-menu">
                                        <div>
                                            <li class="dropdown-header">Plugin basics</li>
                                            <li><a href="https://mef.dev/plugin_basics/introduction.php">Introduction</a></li>
                                            <li><a href="https://mef.dev/plugin_basics/platform_architecture.php">Platform architecture</a></li>
                                        </div>
                                        <div>
                                        <li class="dropdown-header">Plugin guides</li>
                                            <li><a href="https://mef.dev/dev_guides/first_ui_plugin.md">First UI package</a></li>
                                            <li><a href="https://mef.dev/dev_guides/upload_ui_plugin.md">Package registration</a></li>
                                            <li><a href="https://mef.dev/dev_guides/first_backend_plugin.md">Fisrt Backend package</a></li>
                                            <li><a href="https://mef.dev/dev_guides/portal_plugin.md">Portal package creation</a></li>
                                        </div>
                                        <div>
                                            <li class="dropdown-header">REST API</li>
                                            <li><a href="https://mef.dev/rest_api/using_rest_api.php">REST API using</a></li>
                                            <li><a href="https://mef.dev/rest_api/api_caching.php">API caching</a></li>
                                            <li><a href="https://mef.dev/rest_api/http_method_request_formats.php">Request Formats for HTTP Methods</a></li>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li>
                                <!-- <a href="api/index.html" name="api/toc.html" title="Api Documentation">Api Documentation</a> -->
                                <a id="drop2" href="/api/index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Documentation
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="drop2">
                                    <li><a href="/bss/index.html">Telecom BSS</a></li>
                                    <!-- <li><a href="/api/Natec.Entities.html">Natec.Entities</a></li>
                                    <li><a href="/api/Natec.Entities.html">Natec.Widecoup</a></li> -->
                                </ul>
                            </li>
							<li><a href="http://blog.natec.tech/">Blog</a></li>
                            <li><a href="https://community.mef.dev/">Community</a></li>
                            <li>
                                <a id="drop4" href="/api/index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    EN
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="drop4">
                                    <?php if($url_uk) echo '<li><a href="'. $url_uk .'">UA</a></li>'; ?>
                                </ul>
                            </li>
							<li class="search">
								<img src="/search.png">
								<input id="docsearch" type="text" placeholder="Search">
							</li>
                        </ul>
                    <?php } ?>

                </div>
            </div>
        </nav>
		
    </header>
    <div>