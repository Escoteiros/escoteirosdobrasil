<div id="accordion" class="mb-4">
	<?php if( have_rows('lista_downloads') ){ ?>
		<?php while( have_rows('lista_downloads') ){ the_row(); ?>
				<div class="card">
					<div class="card-header">
						<h5 class="mb-0">
							<button class="btn btn-link" data-toggle="collapse" data-target="#card-<?php echo get_row_index(); ?>" aria-expanded="true" aria-controls="collapseOne">
								<?php the_sub_field('area_download_titulo'); ?>
							</button>
						</h5>
					</div>

					<div id="card-<?php echo get_row_index(); ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body text-center">
							<div class="row">
							<?php if( have_rows('downloads_repetidor') ){ ?>
								<?php while( have_rows('downloads_repetidor') ){ the_row(); ?>
									<div class="col-4">
									<div class="mb-4">
										<h5><?php the_sub_field('titulo_arquivo'); ?></h5>
										<p><?php the_sub_field('descricao_arquivo'); ?></p>

										<div>
											<?php $image = get_sub_field('imagem_arquivo'); ?>
											<?php if($image) { ?>
												<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
											<?php }else{ ?>
												<img src="<?php echo get_template_directory_uri(); ?>/img/icons/pdf-color.svg" alt="Ícone PDF">
											<?php } ?>
										</div>

										<div class="mt-2">
											<?php $file = get_sub_field('arquivo_download'); //var_dump($file); ?>
											<a href="<?php echo $file['url'] ?>" class="btn btn-outline-primary" target="_blank">Download</a>
										</div>
									</div>
									</div>
								<?php } ?>
							<?php } ?>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
	<?php } ?>
</div>