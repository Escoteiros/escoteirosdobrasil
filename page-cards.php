<?php /* Template Name: Cards/Quadros Vertical  */ ?>
<?php if(current_user_can('administrator') ) {  ?>
	<div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE CARDS | page-cards.php</div>
<?php } ?>
<!-- HEADER -->
<?php get_header() ?>
<!-- ./HEADER -->

<?php
	$pageTitle = get_the_title();
	$iconHeader = get_field('icone_header');
	$headerOption = 'hide-title';
    include('include-header-title.php');
?>
<section class="container">
	<!-- BANNER -->
	<div class="row">
		<div class="col-12 remove-padding-mobile">
			<?php
				$bannerOption = 'banner-header--block';
				include('include-banner.php');
			?>
		</div>
	</div>
	<!-- FIM DE BANNER -->
</section>

<div class="container">
	<div class="content-wrapper content-wrapper--no-dash">
        <div class="content__text">
            <?php while(have_posts()){
                the_post();
                the_content();
            } ?>
        </div>

        <div class="row">
            <?php if( have_rows('card')): ?>
                <?php while( have_rows('card')): the_row(); ?>
                    <div class="col-lg-3 col-md-4 mb-5">
                        <div class="card shadow h-100">
                            <?php $imgCard = get_sub_field('card_image'); ?>
                            <?php if ($imgCard == ''){ ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/placeholders/convenio.svg" class="card-img-top" alt="">
                            <?php } else { ?>
                                <img src="<?php echo esc_url($imgCard['url']); ?>" alt="<?php echo $imgCard['alt'] ?>" class="card-img-top">
                            <?php } ?>
                            <div class="card-body text-center">
                                <h3 class="card-title"><?php the_sub_field('card_title'); ?></h3>
                                <?php the_sub_field('card_description'); ?>
                            </div>
                            <?php if (get_sub_field('card_has_btn')): ?>
                            <div class="card-footer text-center">
                                <a href="<?php echo the_sub_field('card_btn_url') ?>" class="btn btn-primary btn-sm"><?php echo the_sub_field('card_btn_text') ?></a>
                            </div>
                            <?php endif ?>
                        </div>
                    </div>
                <?php endwhile ?>
            <?php endif ?>
		</div>
    </div>
</div>


<!-- FOOTER -->
<?php get_footer() ?>
