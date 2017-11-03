<article id="post-<?php the_ID(); ?>">

    <div class="row">
        <div class="medium-offset-1 medium-10 columns">
            <h1 class="post--title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <h2 class="post--author">Contributed by <?= get_field('author'); ?></h2>

            <?php the_content(); ?>
        </div>
    </div>

</article>