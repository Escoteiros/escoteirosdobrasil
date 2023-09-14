<?php $subheaderOption = $subheaderOption ?? '';
$headerOption = $headerOption ?? '';
?>
<div class="container container--header">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
		<?php if(function_exists('bcn_display'))
			{bcn_display();}
		?>
	  </ol>
	</nav>
	<?php if($headerOption !== 'hide-title'){ ?>
		<div class="row">
			<div class="col-12 remove-padding-mobile">
				<div class="header-wrapper">
					<?php if(!isset($iconHeader)){
                        $iconHeader = 'Movimento';
                    }
                    if($iconHeader == 'Movimento'){ ?>
						<img src="<?= get_template_directory_uri(); ?>/img/icons/header/movimento.svg" alt="">
					<?php }
                    if($iconHeader == 'Fazemos'){ ?>
						<img src="<?= get_template_directory_uri(); ?>/img/icons/header/fazemos.svg" alt="">
					<?php }
                    if($iconHeader == 'Informacoes'){ ?>
						<img src="<?= get_template_directory_uri(); ?>/img/icons/header/informacoes.svg" alt="">
					<?php }
                    if($iconHeader == 'Fale'){ ?>
						<img src="<?= get_template_directory_uri(); ?>/img/icons/header/fale.svg" alt="">
					<?php } ?>
					<h1 class="header-title <?= sanitize_title($pageTitle); ?>"><?= $pageTitle; ?></h1>

					<?php if($subheaderOption == 'show-subtitle'){ ?>
						<div class="header-subtitle"><?= get_the_date('j F Y', get_the_ID()) ?></div>
					<?php }else if($subheaderOption == 'show-subtitle-events'){ ?>
						<div class="header-subtitle">

						<!-------------------------- AJUSTE NO CABEÇALHO DOS EVENTOS ---------------------->
						<?php if(get_field('evento_nacional')){ ?>
							<!-- É um evento nacional -->
						<?php } else{ ?>
							<!-- Não é um evento nacional -->
							<?php the_field('pais_evento'); ?> -
						<?php } ?>
						<?php if(get_field('evento_descentralizado')){ ?>
							<!-- Evento descentralizado -->
							<?php the_field('tipo_do_evento') ?>
						<?php }else{?>
							<!-- Evento com localidade específica -->
							<?php the_field('cidade_do_evento') ?>
							<?php if(get_field('evento_nacional')){ ?>
								<!-- Possui Estado -->
								- <?php the_field('uf_cidade'); ?>
							<?php } ?>
						<?php } ?>
						| <?php the_field('data_evento'); ?>
						<?php if(get_field('data_evento') != get_field('data_fim_evento')){ ?>
							<?php
								$dataInicio = explode(" ", get_field('data_evento'));
								$dataFim = explode(" ", get_field('data_fim_evento'));
								$arrayMeses = ['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'];
								$mesInicio = 0;
								$mesFim = 0;
								if($dataFim[0] != ""){
									if($dataInicio[2] < $dataFim[2]){
										echo " - " . get_field('data_fim_evento');
									}
									if($dataInicio[2] == $dataFim[2]){
										for($i = 0; $i < count($arrayMeses); $i++){
											if($dataInicio[1] == $arrayMeses[$i]){
												$mesInicio = $i;
											}
											if($dataFim[1] == $arrayMeses[$i]){
												$mesFim = $i;
											}
										}
										if($mesInicio < $mesFim){
											//Mes inicio menor
											echo ' - ' . get_field('data_fim_evento');
										}
										if($mesInicio == $mesFim){
											//Mes inicio igual
											if($dataInicio[0] <= $dataFim[0]){
												echo ' - ' . get_field('data_fim_evento');
											}
										}
									}
								}
							} ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	<?php } ?>
</div>
