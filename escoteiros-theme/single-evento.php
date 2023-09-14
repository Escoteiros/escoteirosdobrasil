<?php if (current_user_can('administrator')) {  ?>

	<div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE EVENTOS SINGLE | single-evento.php</div>

<?php }
get_header();
$pageTitle = get_the_title();
$subheaderOption = 'show-subtitle-events';
$iconHeader = 'Fazemos';
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
		<div class="col-md-11 col-sm-12 mb-3 remove-padding-mobile">
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
	<div class="content-wrapper content-wrapper--no-dash">
		<div class="row">
			<div class="col-md-6 offset-md-1 col-sm-12 content__text">
				<?php
				while (have_posts()) {
					the_post();
				?>
					<?php the_content() ?>
				<?php } ?>
				<?php wp_reset_postdata(); ?>
			</div>
			<section class="col-md-5 col-sm-12">
				<!-- DOWNLOADS -->
				<?php if (have_rows('lista_downloads')) {
					$titulo = get_sub_field('area_download_titulo') ?? 'Arquivos Relacionados';
					?>
					<h3><?= $titulo; ?></h3>
					<?php while (have_rows('lista_downloads')) {
						the_row();
						if (have_rows('downloads_repetidor')):
							while (have_rows('downloads_repetidor')):
								the_row();
								$file = get_sub_field('arquivo_download')['url'] ?? get_sub_field('link'); ?>
								<a href="<?= $file ?>" class="btn btn--content-institutional btn-block mb-1" target="_blank"><?php the_sub_field('titulo_arquivo'); ?></a>
							<?php endwhile;
						endif;
					}
				} ?>
				<!-- FIM DE DOWNLOADS -->
			</section>
		</div>

		<!-- COMPARTILHAR -->
		<div class="row">
			<div class="col-md-6 offset-md-1 col-sm-12">
				<p class="social-media-text">Compartilhe esta história</p>
				<?php
				$socialMediaModifier = 'social-media--horizontal';
				include('include-social-media.php');
				?>
			</div>
		</div>
		<!-- FIM DE COMPARTILHAR -->

		<!-- <div class="col-12 text-center">
			<h3 class="title-events-relation">Eventos Relacionados</h3>
		</div>

		 EVENTOS RELACIONADOS
		<?php include('include-eventos-relacionados.php'); ?> -->
		<!-- FIM DE EVENTOS RELACIONADOS -->
	</div>
</div>

<!-- FOOTER -->
<?php get_footer() ?>
