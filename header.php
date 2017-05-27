<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="off-canvas-wrapper">
        <div class="title-bar hide-for-large mobile-header">
            <div class="row collapse">
                <div class="small-12 column text-left mobile-header--menu">
                    <button type="button" data-open="offCanvas">
                        <span class="menu-icon"></span>
                        <span class="menu-label">MENU</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="off-canvas position-left" id="offCanvas" data-off-canvas>
            <ul class="vertical menu" data-drilldown>
                <li>
                    <a href="#Item-1">Item 1</a>
                    <ul class="vertical menu">
                        <li><a href="#Item-1A">Item 1A</a></li>
                        <li><a href="#Item-1A">Item 1A</a></li>
                        <li><a href="#Item-1A">Item 1A</a></li>
                        <li><a href="#Item-1A">Item 1A</a></li>
                    </ul>
                </li>
                <li><a href="#Item-2">Item 2</a></li>
            </ul>
        </div>

        <div class="menu-desktop">
            <div class="row header header--social show-for-large text-right">
                <div class="medium-12 columns">
                    Follow us for updates:
                    <a href="#"><img class="social-icon" src="/images/icon-facebook.svg"/></a>
                    <a href="#"><img class="social-icon" src="/images/icon-twitter.svg"/></a>
                    <a href="#"><img class="social-icon" src="/images/icon-youtube.svg"/></a>
                </div>
            </div>
            <div class="row header show-for-large align-middle">
                <div class="medium-3 columns">
                    <a class="clearfix" href="/"><img class="logo" src="/images/logo-white.svg"/></a>
                </div>
                <div class="medium-9 columns">
                    <ul class="dropdown header--dropdown menu" data-dropdown-menu>
                        <li>
                            <a href="#">About</a>
                            <ul class="menu">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Plan Your Journey</a></li>
                                <li><a href="#">Program</a></li>
                                <li><a href="#">Keynotes</a></li>
                                <li><a href="#">Registration</a></li>
                                <li><a href="#">Sponsors</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Plan Your Journey</a></li>
                        <li><a href="#">Program</a></li>
                        <li><a href="#">Keynotes</a></li>
                        <li><a href="#">Registration</a></li>
                        <li><a href="#">Sponsors</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="off-canvas-content" data-off-canvas-content>
        