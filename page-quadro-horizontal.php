<?php /* Template Name: Quadro horizontal  */ ?>
<?php if (current_user_can('administrator')) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE QUADRO HORIZONTAL | page-quadro-horizontal.php</div>
<?php }

get_header();
$pageTitle = get_the_title();
$iconHeader = get_field('icone_header');
$headerOption = 'hide-subtitle';
include('include-header-title.php');
?>
<section class="container">
    <!-- BANNER -->
    <div class="row">
        <div class="col-12 remove-padding-mobile">
            <?php
            $bannerOption = '';
            include('include-banner.php');
            ?>
        </div>
    </div>
    <!-- FIM DE BANNER -->
</section>
<div class="container">
    <section class="content__text">
        <?php while (have_posts()) {
            the_post();
            the_content();
        } ?>
    </section>
    <?php if (have_rows('card')): ?>
        <section class="col-12">
            <?php while (have_rows('card')): the_row(); ?>
                <div class="card mb-3 shadow-sm">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <?php $imgCard = get_sub_field('card_image');
                            if ($imgCard == '') { ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/placeholders/convenio.svg" class="card-img-top" alt="">
                            <?php } else { ?>
                                <img src="<?php echo esc_url($imgCard['url']); ?>" alt="<?php echo $imgCard['alt']; ?>" class="card-img-top">
                            <?php } ?>
                        </div>
                        <div class="col-md-8 bg-light">
                            <div class="card-body h-100 d-flex flex-column justify-content-center">
                                <h4 class="card-title"><?php the_sub_field('card_title'); ?></h4>
                                <p class="card-text"><?php the_sub_field('card_description'); ?></p>
                                <?php if (get_sub_field('card_has_btn')): ?>
                                    <p class="text-center mt-1"><a href="<?php echo the_sub_field('card_btn_url') ?>" class="btn btn-primary btn-sm"><?php echo the_sub_field('card_btn_text') ?></a></p>
                                <?php endif ?>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>
        </section>
    <?php endif ?>
</div>

<?php get_footer() ?>
