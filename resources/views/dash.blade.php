<!doctype html>
{{-- // @codingStandardsIgnoreFile --}}
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Material Design Lite</title>

        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Material Design Lite">
        <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">

        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
        <meta name="msapplication-TileColor" content="#3372DF">

        <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="/build/dash.css" rel="stylesheet" />
        <script type="text/javascript" src="/build/dash-vendor.js"></script>
    </head>
    <body>
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row header">
                </div>
            </header>
            <div class="mdl-layout__drawer navigation">
                <nav class="mdl-navigation navigation">
                    <div class="auth-links" style="display:none">
                        <a class="mdl-navigation__link" href="#login">Login</a>
                        <a class="mdl-navigation__link" href="#create">Create Account</a>
                        <a class="mdl-navigation__link" href="#forgot">Reset Password</a>
                    </div>
                    <div class="content-links" style="display:none">
                        <a class="mdl-navigation__link" href="#">Home</a>
                        <a class="mdl-navigation__link" href="#info">Info</a>
                        <a class="mdl-navigation__link" href="#about">About</a>
                        <a class="mdl-navigation__link" href="#menu">Menu</a>
                        <a class="mdl-navigation__link" href="#pictures">Pictures</a>
                        <a class="mdl-navigation__link" href="#hours">Hours</a>
                    </div>
                </nav>
            </div>
            <main class="mdl-layout__content">
                <div class="mdl-grid page-content content"></div>
            </main>
            <div class="loading-overlay" style="display:none">
                <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
            </div>
        </div>
        <script type="text/javascript" src="/build/dash.js"></script>
    </body>
</html>
