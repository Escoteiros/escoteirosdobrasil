<?php /* Template Name: Cards/Quadro horizontal  */ ?>
<?php if(current_user_can('administrator') ) {  ?>
	<div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">
    PAGE CARDS HORIZONTAL | page-cards-horizontal.php
    </div>
<?php } ?>

<!-- HEADER -->
<?php get_header() ?>
<!-- ./HEADER -->

<?php
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
        <?php while(have_posts()){
            the_post();
            the_content();
        } ?>
    </section>
    <?php include('include-card-horizontal.php'); ?>
</div>

<?php get_footer() ?>
