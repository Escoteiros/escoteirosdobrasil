<?php /* Template Name: Escoteiros Notáveis e Famosos  */ ?>
<?php if(current_user_can('administrator') ) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE ENF | page-escoteiros-n-f.php</div>
<?php }
get_header();
$iconHeader = get_field('icone_header');
$pageTitle = get_the_title();
include('include-header-title.php');
?>

<!-- BANNER -->
<div class="container">
    <div class="row">
        <section class="col-12 remove-padding-mobile">
            <!-- INCLUDE BANNER -->
            <?php include('include-banner.php'); ?>
            <!-- INCLUDE BANNER -->
        </section>
    </div>
</div>
<!-- FIM DE BANNER -->
<div class="container">
     <?php
        while (have_posts()) {
            the_post();
        ?>
            <?php the_content() ?>
    <?php } ?>
    <section id="selecaoNotaveisFamosos">
        <div class="row">
            <div class="col text-center">
            <a type="button" class="btn col-md-5" href="https://escoteiros.org.br/escoteiros-notaveis/">
                <img src="<?= get_template_directory_uri(); ?>/img/esc_notaveis.png" alt="Ver Escoteiros notáveis">
            </a>
            <a type="button" class="btn col-md-5" href="https://escoteiros.org.br/escoteiros-famosos/">
                <img src="<?= get_template_directory_uri(); ?>/img/esc_famosos.png" alt="Ver Escoteiros famosos">
            </a>
            </div>
        </div>
    </section>
</div>


<?php get_footer() ?>
