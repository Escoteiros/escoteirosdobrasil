<?php /* Template Name: Diretoria / Conselho / Equipe  */ ?>
<?php if (current_user_can('administrator')) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE DIRETORIA/EQUIPE | page-diretoria-equipe.php</div>
<?php }
get_header();
$pageTitle = get_the_title();
$iconHeader = get_field('icone_header');
include('include-header-title.php');
?>

<div class="container">
    <div class="content-wrapper content-wrapper--no-dash">

        <?php while (have_posts()) {
            the_post();
            $the_content = apply_filters('the_content', get_the_content());
            if (!empty($the_content)) {
            ?>
                <div class="row">
                    <div class="col-11 offset-1 mt-3 mb-5">
                        <?= $the_content; ?>
                    </div>
                </div>
            <?php }
        } ?>

        <div class="row mb-5">
            <!-- MENU LINKS DOWNLOAD -->
            <div class="col-md-5 col-sm-12">
                <?php if (have_rows('lista_escoteiros')) { ?>
                    <?php while (have_rows('lista_escoteiros')) {
                        the_row(); ?>
                        <a href="#content<?= get_row_index(); ?>" class="btn btn--content-institutional btn-block mb-1 btn-content-js" data-target="#content<?= get_row_index(); ?>">
                            <?php
                            $post_object = get_sub_field('diretorias_e_equipes');
                            $nivel = get_sub_field('nivel');

                            if ($post_object) {
                                $post = $post_object;
                                setup_postdata($post);
                            ?>
                            <?php }
                            the_title(); ?>
                        </a>
                        <?php wp_reset_postdata();
                    }
                } ?>
            </div>
            <!-- FIM DE MENU LINKS DOWNLOAD -->
            <!-- CONTEUDO GRUPO -->
            <div class="col-md-6 offset-md-1 col-sm-12 mt-4">
                <?php
                if (have_rows('lista_escoteiros')) {
                    while (have_rows('lista_escoteiros')) {
                        the_row();
                        $post_object = get_sub_field('diretorias_e_equipes');
                        $nivel = get_sub_field('nivel');

                        if ($post_object) {
                            $post = $post_object;
                            setup_postdata($post);
                        ?>

                            <div class="d-none content-button-js col-12" id="content<?php echo get_row_index(); ?>">
                                <p><?php the_content(); ?></p>
                            </div>

                            <?php wp_reset_postdata();
                        }
                    }
                } ?>
            </div>
            <!-- FIM DE CONTEUDO GRUPO -->
        </div>
        <!-- ESCOTEIROS -->
        <div class="row">
            <?php
            if (have_rows('lista_escoteiros')) {
                while (have_rows('lista_escoteiros')) {
                    the_row();

                    $post_object = get_sub_field('diretorias_e_equipes');
                    $nivel = get_sub_field('nivel');

                    if ($post_object) {
                        $post = $post_object;
                        setup_postdata($post);
                    ?>

                        <!-- GRUPO ESCOTEIROS -->
                        <div class="d-none content-button-js col-12" id="content<?= get_row_index(); ?>o">
                            <?php if (have_rows('grupo_escoteiros')) { ?>
                                <div class="row">
                                    <?php while (have_rows('grupo_escoteiros')) {
                                        the_row(); ?>
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
                                                <?php if (have_rows('escoteiros')) { ?>
                                                    <?php while (have_rows('escoteiros')) {
                                                        the_row(); ?>
                                                        <div class="col-md-3 col-sm-12 mb-4">
                                                            <div class="card card--scout">
                                                                <?php
                                                                $image = get_sub_field('foto_escoteiro');
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
                                                    <?php }
                                                } ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                        <!-- FIM DE GRUPO ESCOTEIROS -->

                        <?php wp_reset_postdata();
                    }
                }
            } ?>
        </div>
    </div>
</div>

<?php get_footer() ?>
