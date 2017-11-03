<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <div class="row">
        <div class="medium-offset-1 medium-10 columns category--description">

            <h1 class="page--title">OE Global Blog</h1>

            <?= category_description(); ?>
        </div>
    </div>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'partials/content', get_post_type() ); ?>
	<?php endwhile; ?>
<?php else : ?>
    404 page
<?php endif; ?>

<?php get_footer(); ?>