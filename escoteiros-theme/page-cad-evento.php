<?php /* Template Name: Evento | Caderno */
if (current_user_can('administrator')) {  ?>
	<div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE EVENTOS - CADERNO | page-cad_evento.php</div>

<?php }
get_header();
$pageTitle = get_the_title();
$headerOption = 'hide-title';
get_field('icone_header');
include('include-header-title.php');
?>

<style type="text/css">
	@media (max-width: 780px){
		.banner-header {
		    height: 100px !important;
   			background-position: center;
		}

		.lgo_pdf{
			padding-left: 0px !important;
		}

		h3{
			text-align: center;
		}
		.row {
		    text-align: center;
		}
		.img_sm {
	        position: relative;
		    width: 100%;
		    padding-right: 15px;
		    padding-left: 15px;
		}

		.parc_h3{
			padding-top: 20px;
		}

		.d-flex{
			justify-content: center;
		}
	}

	.banner-header{
		height: 188px !important;
	}

	.lgo_pdf{
		padding-left: 40px;
	}
</style>
<!-- BANNER -->
<div class="container">
    <div class="row">
        <div class="col-12 remove-padding-mobile">
            <!-- INCLUDE BANNER -->
            <?php
            $showBanner = true;
            //$bannerOption = 'banner-header--ramos';
            include('include-banner.php');
            ?>
            <!-- INCLUDE BANNER -->
        </div>
    </div>
</div>
<!-- FIM DE BANNER -->

<div class="container">
	<!-- DADOS -->
	<!-- FIM DE DADOS -->

	<!-- CONTEUDO -->
	<div class="content-wrapper content-wrapper--no-dash">
		<div class="row">
	        <div class="col-md-5 offset-md-1 col-sm-12 content__text">
	            <h3><strong><?= $pageTitle ?></strong></h3>
	            <?php 
	            	
	            	if (get_field('data_1')) {
	            		echo "<p>Data  ".get_field('data_1');
		            	if (get_field('data_2')) {
		            		echo "  a  ".get_field('data_2');
		            	}
	            		echo "</p>";
	            	}
	            	
	            ?>
	           
	            <?php
				while (have_posts()) {
					the_post();
				?>
					<?php the_content() ?>
				<?php } ?>
				<?php wp_reset_postdata(); ?>

				
	        </div>

	        <div class="col-md-5 offset-md-1 content__text">
	        	<!-- ODS -->
					<div  style="padding-left: 15px;padding-bottom: 25px;">
	        			<div class="row d-flex">
	            			<?php 
	            				//echo "1";
	            				for ($i=1; $i <= 4; $i++) { 
	            					$logoEvento = get_field('ods_'.$i); //var_dump($logoEvento);
	            					if ($logoEvento) { ?>
	                   			 		<div id="card<?= $i ?>" class="mr-2">
	                                    	<img style="width: 100px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;" src="<?= ($logoEvento['url']); ?>">
	                					</div>
	            			<?php } } ?>
	        			</div>
					</div>
				<!-- FIM DE ODS -->
	        	<?php if (get_field('parceiro_1')) { ?> 
		        	<div>
			        	<!-- PARCEIROS -->
						<h3 class="parc_h3"><strong>Parceiros</strong></h3>
						<div  style="padding-left: 15px;">
		        			<div class="row img_sm">
		            			<?php 
			            				//echo "1";
			            				for ($i=1; $i <= 3; $i++) { 
			            					$logoParceiro = get_field('parceiro_'.$i); //var_dump($logoParceiro); ?>

			                   			 <div id="card_parceiro<?= $i ?>" class="col">
			                   			 	<?php if ($logoParceiro) { ?>
			                                    <img style="width: auto !important;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;" src="<?= ($logoParceiro['url']); ?>">
			                				<?php } ?>
			                				</div>
			            			<?php } ?>
		        			</div>
						</div>
						
						<!-- FIM DE PARCEIROS -->
					</div>
				<?php } ?>
					<div>
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
					</div>
					
	        </div>
	    </div>

		<!-- EVENTOS RELACIONADOS
		<?php include('include-eventos-relacionados.php'); ?> -->
		<!-- FIM DE EVENTOS RELACIONADOS -->
	</div>
</div>

<!-- FOOTER -->
<?php get_footer() ?>
