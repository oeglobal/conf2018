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
            <?php wp_nav_menu(array(
                    'container' => false,
                    'theme_location' => 'primary',
                    'menu_class' => 'vertical menu',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
                    'fallback_cb' => false,
                    'walker' => new F6_TOPBAR_MENU_WALKER(),
                  )); 
            ?>
        </div>

        <div class="menu-desktop">
            <div class="row header header--social show-for-large text-right">
                <div class="medium-12 columns">
                    Follow us for updates:
                    <a href="https://twitter.com/oeconsortium" target="_blank">
                        <img class="social-icon" src="<?= get_template_directory_uri() . '/images/icon-twitter.svg' ?>"/>
                    </a>
                    <a href="https://www.facebook.com/OEConsortium/" target="_blank">
                        <img class="social-icon" src="<?= get_template_directory_uri() . '/images/icon-facebook.svg' ?>"/>
                    </a>
                    <a href="https://www.youtube.com/channel/UC-jcvZ6z94387QDu52g9VNA" target="_blank">
                        <img class="social-icon" src="<?= get_template_directory_uri() . '/images/icon-youtube.svg' ?>"/>
                    </a>
                </div>
            </div>
            <div class="row header show-for-large align-middle">
                <div class="medium-3 columns">
                    <a class="clearfix" href="<?= home_url(); ?>">
                        <?php if ( is_home() ) : ?>
                            <img class="logo" src="<?= get_template_directory_uri() . '/images/logo-white.svg' ?>"/>
                        <?php else : ?>
                            <img class="logo" src="<?= get_template_directory_uri() . '/images/logo.svg' ?>"/>
                        <?php endif; ?>
                    </a>
                </div>
                <div class="medium-9 columns">
                    <?php wp_nav_menu(array(
                                        'container' => false,
                                        'theme_location' => 'primary',
                                        'menu_class' => 'dropdown header--dropdown menu',
                                        'items_wrap'      => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
                                        'fallback_cb' => false,
                                        'walker' => new F6_TOPBAR_MENU_WALKER(),
                                      )); 
                    ?>
                </div>
            </div>
        </div>

        <div class="off-canvas-content" data-off-canvas-content>
        