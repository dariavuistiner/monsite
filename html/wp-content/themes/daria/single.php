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
<section id="portfolioTitle">
    <div class="row collapse">
      <div class="small-8 small-offset-4 large-7 large-offset-5 columns">
         <h2 class="uppercase"><?php the_field('stylised_title') ?></h2>
         <p class="tags"><?php the_field('skills') ?></p>
      </div>
   </div>
</section>
<section id="portfolioItem">
    <div class="row fullWidth">
        <div class="small-12 columns">
            <?php the_content() ?>
        </div>
    </div>
</section>
<?php get_footer() ?>
