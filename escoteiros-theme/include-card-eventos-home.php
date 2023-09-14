<?php $option = $option ?? '';
if (!$option == 'sidebar') : ?>
	<div class="col-md-4 col-sm-12 mt-md-5 mb-mobile-5">
<?php endif; ?>

	<a href="<?php the_permalink(); ?>" class="card-event-link <?php echo $option == 'sidebar' ? 'mb-5' : 'adasda' ?>">
		<div class="card card--event card-event-home">
			<!-- <p class="card-date-top">

                <?php
				$date_string = get_field('data_evento');
				$name = str_replace(' ', '-', $date_string);
				$name = str_replace('janeiro', 'january', $name);
				$name = str_replace('fevereiro', 'february', $name);
				$name = str_replace('março', 'march', $name);
				$name = str_replace('abril', 'april', $name);
				$name = str_replace('maio', 'may', $name);
				$name = str_replace('junho', 'june', $name);
				$name = str_replace('julho', 'july', $name);
				$name = str_replace('agosto', 'august', $name);
				$name = str_replace('setembro', 'september', $name);
				$name = str_replace('outubro', 'october', $name);
				$name = str_replace('novembro', 'november', $name);
				$name = str_replace('dezembro', 'december', $name);
				echo strftime("%d/%m/%y", strtotime($name));
				?>
            </p> -->
			<?php if (has_post_thumbnail($post->ID)):
				$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
			?>
				<img src="<?= $image[0]; ?>" alt="" class="card-img-top">
			<?php else: ?>
				<img src="<?= get_template_directory_uri(); ?>/img/placeholders/placeholder-card.png" alt="" class="card-img-top">
			<?php endif; ?>

			<div class="card-body">
				<h5 class="card-title"><?= get_the_title(); ?></h5>
				<p class="card-date">
					<!--------------------- AJUSTE NAS INFORMAÇOES DO EVENTO ---------------------------->
					<?php the_field('data_evento'); ?>
					<?php if (get_field('data_evento') != get_field('data_fim_evento')) { ?>
						<?php
						$dataInicio = explode(" ", get_field('data_evento'));
						$dataFim = explode(" ", get_field('data_fim_evento'));
						$arrayMeses = ['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'];
						$mesInicio = 0;
						$mesFim = 0;
						if ($dataFim[0] != "") {
							if ($dataInicio[2] < $dataFim[2]) {
								echo " - " . get_field('data_fim_evento');
							}
							if ($dataInicio[2] == $dataFim[2]) {
								for ($i = 0; $i < count($arrayMeses); $i++) {
									if ($dataInicio[1] == $arrayMeses[$i]) {
										$mesInicio = $i;
									}
									if ($dataFim[1] == $arrayMeses[$i]) {
										$mesFim = $i;
									}
								}
								if ($mesInicio < $mesFim) {
									//Mes inicio menor
									echo ' - ' . get_field('data_fim_evento');
								}
								if ($mesInicio == $mesFim) {
									//Mes inicio igual
									if ($dataInicio[0] <= $dataFim[0]) {
										echo ' - ' . get_field('data_fim_evento');
									}
								}
							}
						}
						?>
					<?php } ?>
				</p>
				<div class="text-center">
					<p class="card-location">
						<img src="<?= get_template_directory_uri(); ?>/img/icons/location.svg" alt="">
						<?php if (get_field('evento_nacional')) {
							// É um evento nacional
						} else {
							// Não é um evento nacional
							the_field('pais_evento'); ?> -
						<?php }
						if (get_field('evento_descentralizado')) {
							// Evento descentralizado
							the_field('tipo_do_evento');
						} else {
							// Evento com localidade específica
							the_field('cidade_do_evento');
							if (get_field('evento_nacional')) { ?>
								<!-- Possui Estado -->
								- <?php the_field('uf_cidade');
							}
						} ?>
					</p>
				</div>
			</div>
		</div>
	</a>
<?php if (!$option == 'sidebar') { ?>
	</div>
<?php } ?>
