<?php

session_start();

if (isset($_SESSION['auth'])) {
    header("location:http://localhost/IzzProperti/Admin/index.php");
}

?>
<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" viewport-fit="cover">

    <title>Home | IzzProperty</title>

    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <script type="text/javascript" data-cfasync="false">
        (window.gaDevIds = window.gaDevIds || []).push("dZGIzZG");
        var mi_version = '7.14.0';
        var mi_track_user = true;
        var mi_no_track_reason = '';

        var disableStr = 'ga-disable-UA-114277487-1';

        /* Function to detect opted out users */
        function __gaTrackerIsOptedOut() {
            return document.cookie.indexOf(disableStr + '=true') > -1;
        }

        /* Disable tracking if the opt-out cookie exists. */
        if (__gaTrackerIsOptedOut()) {
            window[disableStr] = true;
        }

        /* Opt-out function */
        function __gaTrackerOptout() {
            document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
            window[disableStr] = true;
        }

        if ('undefined' === typeof gaOptout) {
            function gaOptout() {
                __gaTrackerOptout();
            }
        }

        if (mi_track_user) {
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', '__gaTracker');

            __gaTracker('create', 'UA-114277487-1', 'auto');
            __gaTracker('set', 'forceSSL', true);
            __gaTracker('require', 'displayfeatures');
            __gaTracker('send', 'pageview');
        } else {
            console.log("");
            (function() {
                /* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
                var noopfn = function() {
                    return null;
                };
                var noopnullfn = function() {
                    return null;
                };
                var Tracker = function() {
                    return null;
                };
                var p = Tracker.prototype;
                p.get = noopfn;
                p.set = noopfn;
                p.send = noopfn;
                var __gaTracker = function() {
                    var len = arguments.length;
                    if (len === 0) {
                        return;
                    }
                    var f = arguments[len - 1];
                    if (typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function') {
                        console.log('Not running function __gaTracker(' + arguments[0] + " ....) because you are not being tracked. " + mi_no_track_reason);
                        return;
                    }
                    try {
                        f.hitCallback();
                    } catch (ex) {

                    }
                };
                __gaTracker.create = function() {
                    return new Tracker();
                };
                __gaTracker.getByName = noopnullfn;
                __gaTracker.getAll = function() {
                    return [];
                };
                __gaTracker.remove = noopfn;
                window['__gaTracker'] = __gaTracker;
            })();
        }
    </script>
    <!-- / Google Analytics by MonsterInsights -->
    <link rel='stylesheet' id='wp-block-library-css' href='css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='monsterinsights-popular-posts-style-css' href='css/frontend.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-css' href='//fonts.googleapis.com/css?family=Roboto%3A400%2C400i%2C700' type='text/css' media='all' />
    <link rel='stylesheet' id='rji-css' href='css/style2.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rji-toolbar-css' href='css/admin-toolbar.css' type='text/css' media='all' />
    <script type='text/javascript' id='monsterinsights-frontend-script-js-extra'>
        /* <![CDATA[ */
        var monsterinsights_frontend = {
            "js_events_tracking": "true",
            "download_extensions": "doc,pdf,ppt,zip,xls,docx,pptx,xlsx",
            "inbound_paths": "[]",
            "home_url": "https:\/\/www.rj-investments.co.uk",
            "hash_tracking": "false"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://xn24qj9x5r-flywheel.netdna-ssl.com/wp-content/plugins/google-analytics-for-wordpress/assets/js/frontend.min.js?ver=7.14.0' id='monsterinsights-frontend-script-js'></script>
    <script type='text/javascript' src='https://xn24qj9x5r-flywheel.netdna-ssl.com/wp-content/themes/rj-investments/assets/js/min/jquery.min.js?ver=2.2.4' id='jquery-js'></script>

    <!-- Typekit Fonts -->
    <script async onload="try{Typekit.load();}catch(e){}" src="https://use.typekit.com/pju5icp.js"></script>
</head>

<body class="home page-template page-template-templates page-template-home page-template-templateshome-php page page-id-59 no-touch no-js site-scroll--inactive logo-dark">

    <header class="site-header">
        <a class="site-logo" href="#">
            <h2>IzzProperty</h2>
        </a>

        <a class="menu-icon js-toggle-menu" href="#">
            <div class="menu-icon__txt">Menu</div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 40">
                <g id="c168789e-c71a-4fea-b400-00b0095a9611">
                    <g id="209718f4-8400-401d-a616-9240ede2e9de">
                        <rect width="4" height="26" x="18" y="14" class="d2c5edd1-531d-4bb4-994b-aa20d1475918" />
                        <rect width="4" height="40" x="9" class="d2c5edd1-531d-4bb4-994b-aa20d1475918" />
                        <rect width="4" height="26" y="14" class="d2c5edd1-531d-4bb4-994b-aa20d1475918" />
                    </g>
                </g>
            </svg>
        </a>
    </header>


    <navigation class="site-menu">
        <div class="site-menu__inner">
            <div class="site-menu__left" style="background-image: url(img/menu-bg.jpg);"></div>

            <div class="site-menu__right">
                <ul class="site-menu__links">
                    <li id="menu-item-227" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-227">
                        <a href="Login.php">Ke Halaman Admin</a>
                    </li>
                </ul>

                <ul class="social social--menu">
                    <li class="social__item social__item--facebook">
                        <a href="#" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <defs>
                                    <style>
                                        .bd041025-02cb-4aec-963d-e6f62703122a {
                                            fill: #373f48;
                                        }
                                    </style>
                                </defs>
                                <g id="387305c9-efa5-4458-8e02-0698d0860250">
                                    <g id="f7f8c747-3e46-4d9f-903a-ec28fc57d0c6">
                                        <path id="89cd50c3-d61b-439a-969c-646477b1360e" d="M22.68 0H1.32A1.32 1.32 0 0 0 0 1.32v21.36A1.32 1.32 0 0 0 1.32 24h11.5v-9.29H9.69v-3.63h3.13V8.41c0-3.1 1.89-4.79 4.66-4.79a23.5 23.5 0 0 1 2.79.15V7h-1.92c-1.5 0-1.79.71-1.79 1.76v2.31h3.59l-.47 3.63h-3.12V24h6.12A1.32 1.32 0 0 0 24 22.68V1.32A1.32 1.32 0 0 0 22.68 0z" class="bd041025-02cb-4aec-963d-e6f62703122a" data-name="White" />
                                    </g>
                                </g>
                            </svg> </a>
                    </li>
                    <li class="social__item social__item--twitter">
                        <a href="#" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.95 24.34">
                                <path d="M26.88 6.06v.79c.02 8.13-6.16 17.49-17.43 17.49a17.39 17.39 0 0 1-9.42-2.76 12.46 12.46 0 0 0 1.47.09 12.33 12.33 0 0 0 7.63-2.63 6.15 6.15 0 0 1-5.74-4.27 6.16 6.16 0 0 0 2.77-.11 6.15 6.15 0 0 1-4.93-6v-.08a6.12 6.12 0 0 0 2.78.77 6.15 6.15 0 0 1-1.9-8.2 17.44 17.44 0 0 0 12.66 6.42 6.15 6.15 0 0 1 10.47-5.6 12.3 12.3 0 0 0 3.9-1.49 6.16 6.16 0 0 1-2.7 3.4 12.28 12.28 0 0 0 3.53-1 12.48 12.48 0 0 1-3.09 3.18z" />
                            </svg> </a>
                    </li>
                    <li class="social__item social__item--instagram">
                        <a href="#" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                <path d="M21 3a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V7a4 4 0 0 1 4-4h14m0-3H7a7 7 0 0 0-7 7v14a7 7 0 0 0 7 7h14a7 7 0 0 0 7-7V7a7 7 0 0 0-7-7z" />
                                <path d="M14 9.91A4.09 4.09 0 1 1 9.91 14 4.09 4.09 0 0 1 14 9.91m0-3A7.09 7.09 0 1 0 21.09 14 7.1 7.1 0 0 0 14 6.91z" />
                                <circle cx="21.5" cy="6.5" r="1.5" />
                            </svg> </a>
                    </li>
                    <li class="social__item social__item--linkedin">
                        <a href="#" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <defs>
                                    <style>
                                        .\33 30c906a-1036-4d45-9954-2c1ea2c3add8 {
                                            fill: #373f48;
                                        }
                                    </style>
                                </defs>
                                <g id="0d8fe7e1-e83b-4062-887e-c707ce7fb554">
                                    <path id="96e86f8e-d1b6-40e6-80e7-bdc64d19ac90" d="M22.22 0H1.77A1.75 1.75 0 0 0 0 1.73v20.54A1.75 1.75 0 0 0 1.77 24h20.45A1.76 1.76 0 0 0 24 22.27V1.73A1.75 1.75 0 0 0 22.22 0zM7.12 20.45H3.56V9h3.56zm-1.78-13A2.07 2.07 0 1 1 7.4 5.37a2.07 2.07 0 0 1-2.06 2.06zm15.11 13h-3.56v-5.57c0-1.33 0-3-1.85-3s-2.13 1.45-2.13 2.95v5.66H9.35V9h3.41v1.56h.05a3.75 3.75 0 0 1 3.37-1.85c3.6 0 4.27 2.37 4.27 5.46z" class="330c906a-1036-4d45-9954-2c1ea2c3add8" />
                                </g>
                            </svg> </a>
                    </li>
                </ul>
            </div>
        </div>
    </navigation>

    <section class="site-banner site-banner--home">
        <div class="site-banner__inner">

            <div class="site-banner__img" style="background-image:url(img/Home-Featured.jpg);"></div>

            <div class="site-banner__txt-outer section section--large grid">
                <div class="site-banner__txt grid__col grid__col--6">
                    <h1 class="site-banner__title">INFO PENJUALAN RUMAH</h1>
                    <h2 class="site-banner__subtitle">Kehidupan Kontemporer yang Luar Biasa</h2>
                </div>
            </div>

        </div>
    </section>
    <section class="content-dark bg-dark spacing-large spacing-lt-medium">
        <div class="section section--large grid grid--spaced">
            <div class="content-dark__txt grid__col grid__col--11 grid__col--m-9 txt-large post-styles">
                <h4>KEAHLIAN KAMI</h4>
                <p>IzzProperty menawarkan berbagai info penjualan rumah di berbagai daerah seperti jakarta, bogor dan depok.</p>
            </div>
        </div>
    </section>

    <section class="page-links-outer spacing-medium">
        <ul class="page-links section section--large">



            <li class="page-link">

                <a class="page-link__link grid" href="#" onclick="InfoRumahBogor(event)">

                    <div class="page-link__txt post-styles">
                        <div>
                            <h3>Daerah Bogor</h3>
                            <p>Berada Di Provinsi Jawa Barat</p>
                        </div>
                    </div>

                    <div class="page-link__img">
                        <div class="page-link__img-inner">
                            <img src="img/Home-The-Portfolio-970x445.jpg" srcset="https://xn24qj9x5r-flywheel.netdna-ssl.com/wp-content/uploads/2018/02/Home-The-Portfolio-970x445.jpg 1x, https://xn24qj9x5r-flywheel.netdna-ssl.com/wp-content/uploads/2018/02/Home-The-Portfolio-1940x890.jpg 2x" alt="RJ Investments The Portfolio">
                        </div>
                    </div>

                </a>
            </li>



            <li class="page-link">

                <a class="page-link__link grid" href="#" onclick="InfoRumahJakarta(event)">

                    <div class="page-link__txt post-styles">
                        <div>
                            <h3>Daerah Jakarta</h3>
                            <p>Berada Di Provinsi DKI Jakarta</p>
                        </div>
                    </div>

                    <div class="page-link__img">
                        <div class="page-link__img-inner">
                            <img src="img/Home-The-Projects-970x445.jpg" srcset="https://xn24qj9x5r-flywheel.netdna-ssl.com/wp-content/uploads/2018/02/Home-The-Projects-970x445.jpg 1x, https://xn24qj9x5r-flywheel.netdna-ssl.com/wp-content/uploads/2018/02/Home-The-Projects-1940x890.jpg 2x" alt="RJ Investments">
                        </div>
                    </div>

                </a>
            </li>



            <li class="page-link">

                <a class="page-link__link grid" href="#" onclick="InfoRumahDepok(event)">

                    <div class="page-link__txt post-styles">
                        <div>
                            <h3>Daerah Depok</h3>
                            <p>Berada Di Provinsi Jawa Barat</p>
                        </div>
                    </div>

                    <div class="page-link__img">
                        <div class="page-link__img-inner">
                            <img src="img/Home-The-Property-Avatar-970x445.jpg" srcset="https://xn24qj9x5r-flywheel.netdna-ssl.com/wp-content/uploads/2018/02/Home-The-Property-Avatar-970x445.jpg 1x, https://xn24qj9x5r-flywheel.netdna-ssl.com/wp-content/uploads/2018/02/Home-The-Property-Avatar-1940x890.jpg 2x" alt="RJ Investments The Property Avatar">
                        </div>
                    </div>

                </a>
            </li>


        </ul>
    </section>

    <section class="spacing-small bg-dark">
        <ul class="usp-list section section--large grid">



            <li class="usp-list__item grid__col grid__col--4 grid__col--tb2-12 grid__col--m-12 txt-center">


                <a class="usp-list__link" href="/investors">
                    <div class="usp-list__icon-outer">
                        <img class="usp-list__icon" src="img/package.svg" alt="RJ Investments Packages">
                    </div>

                    <h6>Opsi Investasi</h6>
                    <p class="usp-list__desc">Lebih Banyak</p>
                </a>
            </li>



            <li class="usp-list__item grid__col grid__col--4 grid__col--tb2-12 grid__col--m-12 txt-center">


                <a class="usp-list__link" href="/property-type/accomodation">
                    <div class="usp-list__icon-outer">
                        <img class="usp-list__icon" src="img/accommodation.svg" alt="RJ Investments Accommodation">
                    </div>

                    <h6>Akomodasi</h6>
                    <p class="usp-list__desc">Penjual Masa Depan</p>
                </a>
            </li>



            <li class="usp-list__item grid__col grid__col--4 grid__col--tb2-12 grid__col--m-12 txt-center">


                <a class="usp-list__link" href="/pandora-homes/">
                    <div class="usp-list__icon-outer">
                        <img class="usp-list__icon" src="img/development.svg" alt="RJ Investments Land Development">
                    </div>

                    <h6>Pengembangan Lahan</h6>
                    <p class="usp-list__desc">Temui IzzProperty</p>
                </a>
            </li>


        </ul>
    </section>


    <footer class="site-footer bg-dark">
        <div class="site-footer__inner">
            <div class="site-footer__top">
                <div class="section section--large grid grid--spaced">
                    <div class="site-footer__links grid__col grid__col--6 grid__col--tb2-12 grid__col--m-12">

                        <a href="tel:07734067485">07734 067 485</a>

                        <a href="mailto:info@rj-investments.co.uk">info@IzzProperty.com</a>
                    </div>

                    <div class="site-footer__social grid__col grid__col--6 grid__col--tb2-12 grid__col--m-12">
                        <ul class="social social--footer">
                            <li class="social__item social__item--facebook">
                                <a href="https://www.facebook.com/" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <defs>
                                            <style>
                                                .bd041025-02cb-4aec-963d-e6f62703122a {
                                                    fill: #373f48;
                                                }
                                            </style>
                                        </defs>
                                        <g id="387305c9-efa5-4458-8e02-0698d0860250">
                                            <g id="f7f8c747-3e46-4d9f-903a-ec28fc57d0c6">
                                                <path id="89cd50c3-d61b-439a-969c-646477b1360e" d="M22.68 0H1.32A1.32 1.32 0 0 0 0 1.32v21.36A1.32 1.32 0 0 0 1.32 24h11.5v-9.29H9.69v-3.63h3.13V8.41c0-3.1 1.89-4.79 4.66-4.79a23.5 23.5 0 0 1 2.79.15V7h-1.92c-1.5 0-1.79.71-1.79 1.76v2.31h3.59l-.47 3.63h-3.12V24h6.12A1.32 1.32 0 0 0 24 22.68V1.32A1.32 1.32 0 0 0 22.68 0z" class="bd041025-02cb-4aec-963d-e6f62703122a" data-name="White" />
                                            </g>
                                        </g>
                                    </svg> </a>
                            </li>
                            <li class="social__item social__item--twitter">
                                <a href="https://twitter.com/" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.95 24.34">
                                        <path d="M26.88 6.06v.79c.02 8.13-6.16 17.49-17.43 17.49a17.39 17.39 0 0 1-9.42-2.76 12.46 12.46 0 0 0 1.47.09 12.33 12.33 0 0 0 7.63-2.63 6.15 6.15 0 0 1-5.74-4.27 6.16 6.16 0 0 0 2.77-.11 6.15 6.15 0 0 1-4.93-6v-.08a6.12 6.12 0 0 0 2.78.77 6.15 6.15 0 0 1-1.9-8.2 17.44 17.44 0 0 0 12.66 6.42 6.15 6.15 0 0 1 10.47-5.6 12.3 12.3 0 0 0 3.9-1.49 6.16 6.16 0 0 1-2.7 3.4 12.28 12.28 0 0 0 3.53-1 12.48 12.48 0 0 1-3.09 3.18z" />
                                    </svg> </a>
                            </li>
                            <li class="social__item social__item--instagram">
                                <a href="https://www.instagram.com/" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28">
                                        <path d="M21 3a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V7a4 4 0 0 1 4-4h14m0-3H7a7 7 0 0 0-7 7v14a7 7 0 0 0 7 7h14a7 7 0 0 0 7-7V7a7 7 0 0 0-7-7z" />
                                        <path d="M14 9.91A4.09 4.09 0 1 1 9.91 14 4.09 4.09 0 0 1 14 9.91m0-3A7.09 7.09 0 1 0 21.09 14 7.1 7.1 0 0 0 14 6.91z" />
                                        <circle cx="21.5" cy="6.5" r="1.5" />
                                    </svg> </a>
                            </li>
                            <li class="social__item social__item--linkedin">
                                <a href="https://uk.linkedin.com/" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <defs>
                                            <style>
                                                .\33 30c906a-1036-4d45-9954-2c1ea2c3add8 {
                                                    fill: #373f48;
                                                }
                                            </style>
                                        </defs>
                                        <g id="0d8fe7e1-e83b-4062-887e-c707ce7fb554">
                                            <path id="96e86f8e-d1b6-40e6-80e7-bdc64d19ac90" d="M22.22 0H1.77A1.75 1.75 0 0 0 0 1.73v20.54A1.75 1.75 0 0 0 1.77 24h20.45A1.76 1.76 0 0 0 24 22.27V1.73A1.75 1.75 0 0 0 22.22 0zM7.12 20.45H3.56V9h3.56zm-1.78-13A2.07 2.07 0 1 1 7.4 5.37a2.07 2.07 0 0 1-2.06 2.06zm15.11 13h-3.56v-5.57c0-1.33 0-3-1.85-3s-2.13 1.45-2.13 2.95v5.66H9.35V9h3.41v1.56h.05a3.75 3.75 0 0 1 3.37-1.85c3.6 0 4.27 2.37 4.27 5.46z" class="330c906a-1036-4d45-9954-2c1ea2c3add8" />
                                        </g>
                                    </svg> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="site-footer__bottom txt-small">
                <div class="section section--large grid grid--spaced">
                    <div class="grid__col grid__col--5 grid__col--m-12">
                        <p class="txt-small">&copy; 2021 IzzProperty</p>
                    </div>

                    <div class="grid__col grid__col--2 grid__col--m-0"></div>

                    <div class="grid__col grid__col--5 grid__col--m-12 txt-right">
                        <p class="txt-small"><a href="#" target="_blank">CopyRight by Raqwan</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-footer__disclaimer section section--medium txt-center txt-small">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
        </div>
    </footer>

    <script type='text/javascript' src='https://xn24qj9x5r-flywheel.netdna-ssl.com/wp-content/themes/rj-investments/assets/js/min/all.min.js?ver=1533632804' id='rji-js'></script>
    <script type='text/javascript' id='rji-ajax-js-extra'>
        /* <![CDATA[ */
        var ajax_data = {
            "ajax_admin": "https:\/\/www.rj-investments.co.uk\/wp-admin\/admin-ajax.php",
            "security": "7902910e7b"
        };
        /* ]]> */
    </script>
    <script src="JS/jquery.min.js"></script>
    <script src="JS/sweetalert2.all.min.js"></script>
    <script type='text/javascript' src='https://xn24qj9x5r-flywheel.netdna-ssl.com/wp-content/themes/rj-investments/assets/js/min/ajax.min.js?ver=1533632804' id='rji-ajax-js'></script>
    <script type='text/javascript' src='https://xn24qj9x5r-flywheel.netdna-ssl.com/wp-includes/js/wp-embed.min.js' id='wp-embed-js'></script>
    <script src="JS/main.js"></script>
</body>

</html>