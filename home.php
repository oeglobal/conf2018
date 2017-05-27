<?php get_header(); ?>

<div class="header--home">
    <div class="row hide-for-large logo-small-container">
        <div class="small-12 column text-center">
            <a class="clearfix" href="/"><img class="logo-small" src="<?= get_template_directory_uri() . '/images/logo-white.svg' ?>"/></a>
        </div>
    </div>

    <div class="row contents-container">
        <div class="large-8 xlarge-9 medium-offset-4 column contents">
            <h1>Transforming Education through Open</h1>
            <h2>24-26 April 2018</h2>
            <h2>Delft, Netherlands</h2>

            <a href="<?= home_url() . '/register/' ?>" class="button white hollow header--home--cta">Register</a>
        </div>
        <div class="small-12 columns header--home--notice">
             <span>
                <img src="<?= get_template_directory_uri() . '/images/down.svg' ?>"/>
                Scroll down for more info
            </span>
        </div>
        <div class="small-12 columns header--home--license hide-for-small-only">
            <span>
                <img src="<?= get_template_directory_uri() . '/images/cc-white.svg' ?>"/>

                <?php get_template_part('images/cc-white.svg'); ?> WILLEM VAN VALKENBURG
            </span>
        </div>
    </div>
</div>

<div style="background-color: #3cb3db;">
    <div class="row align-middle home--boxes">
        <div class="small-3 column u-background-orange">
            <a href="#">
                <img src="<?= get_template_directory_uri() . '/images/icon-location.svg' ?>"/>
                Venue
            </a>
        </div>
        <div class="small-3 column u-background-blue">
            <a href="#">
                <img src="<?= get_template_directory_uri() . '/images/icon-calendar.svg' ?>"/>
                Schedule
            </a>
        </div>
        <div class="small-3 column u-background-red">
            <a href="#">
                <img src="<?= get_template_directory_uri() . '/images/icon-speaker.svg' ?>"/>
                Speakers
            </a>
        </div>
        <div class="small-3 column u-background-purple">
            <a href="#">
                <img src="<?= get_template_directory_uri() . '/images/icon-award.svg' ?>"/>
                Awards
            </a>
        </div>
    </div>
</div>

<div class="row home--intro">
    <div class="small-10 small-offset-1 medium-5 large-5 medium-offset-1 column">
        <a href="<?= home_url() ?>"><img src="<?= get_template_directory_uri() . '/images/logo.svg' ?>"/></a>
    </div>
    <div class="small-10 small-offset-1 medium-5 medium-offset-0 large-5 column">
        <p class="home--intro--text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>
        <p class="home--intro--buttons">
            <a href="#" class="button orange hollow text-uppercase">About the Event</a>
            <a href="http://conference.oeconsortium.org/2017/" target="_blank"
               class="button orange hollow text-uppercase">View 2017 Conference</a>
        </p>
    </div>
</div>

<?php get_footer(); ?>