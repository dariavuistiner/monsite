<?php get_header() ?>
<nav role="navigation">
    <div class="row">
        <div class="small-12 large-6 columns nav">
            <a href="#home" class="cmn-t-underline-lr">home</a>
            <a href="#work" class="cmn-t-underline-lr">work</a>
            <a href="#contact" class="cmn-t-underline-lr">contact</a>
        </div>
    </div>
</nav>
<header id="home" class="slide">
    <div class="row fullWith">
        <div class="small-12 columns">
            <?php the_field('intro_text') ?>
        </div>
    </div>
</header>
<section id="work" class="slide">
    <div class="row fullWidth">
        <?php $work = new wp_query('category_name=work&posts_per_page=6') ?>
        <?php while ($work->have_posts()) : $work->the_post() ?>
            <div class="small-6 medium-4 columns portfolioThumb">
                <a href="<?php the_permalink() ?>" style="background-image: url('img/portfolioThumb1.png')">
                    <div class="portfolioInfo">
                        <h3><?php the_title() ?></h3>
                        <p><?php the_field('skills') ?></p>
                    </div>
                </a>
            </div>
        <?php endwhile; the_post() ?>
    </div>
</section>
<footer id="contact">
    <div class="row fullWidth">
        <div class="small-12 medium-6 large-4 columns">
            <div class="portrait"></div>
        </div>
        <div id="descCol" class="small-12 medium-6 large-4 columns">
        <h2 class="uppercase"><?php the_field('bio_heading') ?></h2>
            <span></span>
            <?php the_field('bio_body') ?>
        </div>
        <div id="cvCol" class="small-12 large-4 columns">
            <?php $positions = new wp_query('category_name=cv-entry') ?>
            <?php while ($positions->have_posts()) : $positions->the_post() ?>
                <p>
                    <strong class="cvPosition"><?php the_title() ?></strong><br>
                    <?php the_field('skills') ?><br>
                    <?php the_field('location') ?>
                </p>
            <?php endwhile ?>
        </div>
    </div>
</footer>
<?php get_footer() ?>
