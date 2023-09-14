<?php /* Template Name: Diretoria / Conselho / Equipe | Menu */ ?>
<?php if(current_user_can('administrator') ) {  ?>
	<div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE DIRETORIA/EQUIPE | page-diretoria-equipe-three-columns.php</div>
<?php } ?>
<!-- HEADER -->
<?php get_header() ?>
<!-- ./HEADER -->

<?php
	$pageTitle = get_the_title();
	$iconHeader = get_field('icone_header');
    include('include-header-title.php');
?>

<div class="container">
<div class="content-wrapper content-wrapper--no-dash">

	<?php while(have_posts()){ ?>
		<?php the_post(); ?>
		<?php $the_content = apply_filters('the_content', get_the_content());
		if ( !empty($the_content) ) {
			?>
			<div class="row">
				<div class="col-11 offset-1 mt-3 mb-5">
					<?php echo $the_content; ?>
				</div>
			</div>
		<?php } ?>
	<?php } ?>

	 <div class="row">
		 <!-- MENU LINKS DOWNLOAD -->
            <div class="col-12">
				<div class="download-menu-wrapper download-menu-wrapper--three-columns">
			<?php if( have_rows('lista_escoteiros') ){ ?>
				<?php while( have_rows('lista_escoteiros') ){ the_row(); ?>
					<a href="#content<?php echo get_row_index(); ?>" class="btn btn--content-institutional btn-block mb-3 btn-content-js" data-target="#content<?php echo get_row_index(); ?>">
						<?php
						$post_object = get_sub_field('diretorias_e_equipes');
						$nivel = get_sub_field('nivel');

						if( $post_object ){
							$post = $post_object;
							setup_postdata( $post );
						?>
						<?php } ?>
						<?php the_title(); ?>
					</a>
					<?php wp_reset_postdata(); ?>
				<?php } ?>
			<?php } ?>
				</div>
		</div>
		<!-- FIM DE MENU LINKS DOWNLOAD -->
	</div>
	<div class="row">
	<!-- CONTEUDO GRUPO -->
		<?php
		if( have_rows('lista_escoteiros') ){
			while ( have_rows('lista_escoteiros') ) { the_row(); ?>
				<?php

				$post_object = get_sub_field('diretorias_e_equipes');
				$nivel = get_sub_field('nivel');

				if( $post_object ){
					$post = $post_object;
					setup_postdata( $post );
					?>

					<div class="d-none content-button-js col-12" id="content<?php echo get_row_index(); ?>">
						<!-- <h3><?php the_title(); ?></h3> -->
						<div class="team-description">
							<?php the_content(); ?>
						</div>
					</div>

					<?php wp_reset_postdata(); ?>
				<?php } ?>
			<?php } ?>
		<?php }?>
		<!-- FIM DE CONTEUDO GRUPO -->
	</div>
	<!-- ESCOTEIROS -->
	<div class="row">
		<?php
		if( have_rows('lista_escoteiros') ){
			while ( have_rows('lista_escoteiros') ) { the_row(); ?>
				<?php
				$post_object = get_sub_field('diretorias_e_equipes');
				$nivel = get_sub_field('nivel');

				if( $post_object ){
					$post = $post_object;
					setup_postdata( $post );
				?>

				<!-- GRUPO ESCOTEIROS -->
					<div class="d-none content-button-js col-12" id="content<?php echo get_row_index(); ?>o">
						<?php if( have_rows('grupo_escoteiros') ){ ?>
							<div class="row">
							<?php while( have_rows('grupo_escoteiros') ){ the_row(); ?>
								<div class="col-12">
									<h4 class="mt-3"><?php the_sub_field('titulo_grupo'); ?></h4>
									<hr>
									<div class="group-description">
										<?php the_sub_field('descricao_grupo'); ?>
									</div>
									 <?php 
                                    for ($i=1; $i < 4; $i++) { 
                                    if (have_rows('resp_escoteiros_'.$i)) { ?>
                                    <div class="row">
                                        <?php while (have_rows('resp_escoteiros_'.$i)) {
                                            the_row(); ?>
                                            <div class="col-md-3 col-sm-12 mb-4">
                                                <div class="card card--scout">
                                                    <?php
                                                    $image = [];
                                                    $image = get_sub_field('foto_escoteiro_'.$i);
                                                    if ($image) {
                                                    ?>
                                                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt']; ?>" class="card-img-top" />
                                                    <?php } else { ?>
                                                        <img src="<?= get_template_directory_uri(); ?>/img/placeholders/scout.svg" class="card-img-top" />
                                                    <?php } ?>

                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php the_sub_field('nome_escoteiro'); ?></h5>
                                                        <div>
                                                            <p class="card-job"><?php the_sub_field('cargo_escoteiro'); ?></p>
                                                            <p class="card-email"><?php the_sub_field('email_escoteiro'); ?></p>
                                                            <!-- <a href="">CV</a> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                <?php  }} ?>
									<div class="row">
										<?php if( have_rows('escoteiros') ){ ?>
											<?php while( have_rows('escoteiros') ){ the_row(); ?>
												<div class="col-md-3 col-sm-12 mb-4">
													<div class="card card--scout">
														<?php
															$image = get_sub_field('foto_escoteiro'); //var_dump($image['icon']);
															$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
															if($image && $image["icon"] != $link . "/wp-includes/images/media/document.png") {
														?>
															<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']; ?>" class="card-img-top" />
														<?php } else { ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/placeholders/scout.svg" class="card-img-top" />
														<?php } ?>

														<div class="card-body">
															<h5 class="card-title"><?php the_sub_field('nome_escoteiro'); ?></h5>
															<div>
																<p class="card-job"><?php the_sub_field('cargo_escoteiro'); ?></p>
																<center><p class="card-email"><?php the_sub_field('email_escoteiro'); ?></p></center>
																<!-- <a href="">CV</a> -->
															</div>
														</div>
													</div>
												</div>
											<?php } ?>
										<?php } ?>
									</div>
								</div>
							<?php } ?>
							</div>
						<?php } ?>
					</div>
				<!-- FIM DE GRUPO ESCOTEIROS -->

					<?php wp_reset_postdata(); ?>
				<?php } ?>
			<?php } ?>
		<?php }?>
	</div>

</div>
</div>




<?php get_footer() ?>
