<?php if(current_user_can('administrator') ) {  ?>
	<div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">SINGLE diretoria-conselho | single-diretoria-conselho.php</div>
<?php }
get_header();
$pageTitle = get_the_title();
$iconHeader = 'Fazemos';
include('include-header-title.php');
?>
<div class="container">
	<!-- CONTEUDO -->
    <div class="content-wrapper content-wrapper--no-dash">
		<div class="row">
			<div class="col-11 offset-md-1 content__text">
				<?php while(have_posts()){
					the_post();
                    the_content()
                ?>
            </div>

            <!-- GRUPO ESCOTEIROS -->
            <div class="col-11 offset-md-1">
                <div class="row">
                    <?php if( have_rows('grupo_escoteiros') ){ ?>
                        <?php while( have_rows('grupo_escoteiros') ){ the_row(); ?>
                            <div class="col-12">
                                <h4 class="mt-3"><?php the_sub_field('titulo_grupo'); ?></h4>
                                <hr>
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
                                                        $image = get_sub_field('foto_escoteiro');
                                                        if($image):
                                                    ?>
                                                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt']; ?>" class="card-img-top" />
                                                    <?php else: ?>
                                                        <img src="<?= get_template_directory_uri(); ?>/img/placeholders/scout.svg" class="card-img-top" />
                                                    <?php endif ?>

                                                    <div class="card-body">
                                                        <h5 class="card-title text-uppercase"><?php the_sub_field('nome_escoteiro'); ?></h5>
                                                        <div>
                                                            <p class="card-job"><?php the_sub_field('cargo_escoteiro'); ?></p>
                                                            <p class="card-email"><?php the_sub_field('email_escoteiro'); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
            <!-- FIM DE GRUPO ESCOTEIROS -->
			<?php } ?>
		</div>
	</div>
</div>
<?php get_footer() ?>
