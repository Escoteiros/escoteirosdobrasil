<?php if(current_user_can('administrator') ) {  ?>
	<div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE MATERIA SINGLE | single-materia.php</div>
<?php } ?>
<!-- HEADER -->
<?php get_header() ?>
<!-- ./HEADER -->

<?php
	$pageTitle = get_the_title();
	$subheaderOption = 'show-subtitle';
	$iconHeader = '';
    include('include-header-title.php');
?>

<div class="container">
	<div class="row">
		<div class="col-md-1 col-sm-12">
			<div class="d-none d-sm-block">
				<?php
					include('include-social-media.php');
				?>
			</div>
		</div>
		<div class="col-md-11 col-sm-12 remove-padding-mobile">
			<!-- INCLUDE BANNER -->
			<?php
				$showBanner = true;
				include('include-banner.php');
			?>
			<!-- INCLUDE BANNER -->
		</div>
	</div>
</div>

<div class="container">
	<!-- CONTEUDO -->
	<div class="content-wrapper">
		
		<div class="row">
			<div class="col-md-11 offset-md-1 col-sm-12 content__text">
				<?php
				while(have_posts()){
					the_post();
				?>
					<?php the_content() ?>
				<?php } ?>
			</div>
		</div>

		<!-- COMPARTILHAR -->
		<div class="row">
			<div class="col-md-11 offset-md-1 col-sm-12">
				<p class="social-media-text">Compartilhe esta história</p>
				<?php
					$socialMediaModifier = 'social-media--horizontal';
					include('include-social-media.php');
				?>
			</div>
		</div>
		<!-- FIM DE COMPARTILHAR -->
		
	</div>
</div>

<!-- FOOTER -->
<?php get_footer() ?>