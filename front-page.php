<?php
get_template_part('part/structure/head');
get_template_part('part/structure/header');
?>
<div class="content-main">
    <div class="row expanded">
        <div class="columns large-12">
            <?php get_template_part('part/front-page/top-fold'); ?>
       </div>
    </div>
    <div class="row">

        <div class="columns small-12 large-6">
            <div class="row">
                <div class="columns">
                    <?php get_template_part('part/general/sections/download-now'); ?>
                    <?php get_template_part('part/front-page/sections/features'); ?>
                    <?php get_template_part('part/general/sections/crypto-list'); ?>
                </div>
            </div>
       </div>
        <div class="columns small-12 large-6 column-space-evenly">
            <?php get_template_part('part/front-page/sections/why-us'); ?>
            <?php get_template_part('part/front-page/sections/testimonials'); ?>
        </div>
    </div>
    <a target="_blank" class="button-gradient" href="https://downloads.wordpress.org/plugin/nomiddleman-crypto-payments-for-woocommerce.zip">
        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="file-archive" class="svg-inline--fa fa-file-archive fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M128.3 160v32h32v-32zm64-96h-32v32h32zm-64 32v32h32V96zm64 32h-32v32h32zm177.6-30.1L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM256 51.9l76.1 76.1H256zM336 464H48V48h79.7v16h32V48H208v104c0 13.3 10.7 24 24 24h104zM194.2 265.7c-1.1-5.6-6-9.7-11.8-9.7h-22.1v-32h-32v32l-19.7 97.1C102 385.6 126.8 416 160 416c33.1 0 57.9-30.2 51.5-62.6zm-33.9 124.4c-17.9 0-32.4-12.1-32.4-27s14.5-27 32.4-27 32.4 12.1 32.4 27-14.5 27-32.4 27zm32-198.1h-32v32h32z"></path></svg>
        <p>Download</p>
    </a>
    <?php get_template_part('part/structure/footer'); ?>
</div>

