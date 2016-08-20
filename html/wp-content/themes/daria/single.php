<?php get_header() ?>
<?php setup_postdata($post) ?>
<nav role="navigation">
    <div class="row">
        <div class="small-6 columns nav">
            <a href="/" class="backlink cmn-t-underline-rl">back</a>
        </div>
        <div class="small-6 columns text-right pagination">
            <?php next_post_link('%link', '&#8592;', true) ?>
            <?php previous_post_link('%link', '&#8594;', true) ?>
        </div>
    </div>
</nav>
<section id="portfolioItem">
    <div class="row fullWidth">
        <div class="small-12 columns">
            <?php the_content() ?>
        </div>
    </div>
</section>
<?php get_footer() ?>
