<?php /* Template Name: Conteúdo - Full | Downloads */ ?>

<?php if (current_user_can('administrator')) { ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE FULL DOWNLOADS | page-content-full-downloads.php</div>
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
<!-- CONTEUDO -->
<div class="container">
    <div class="content-wrapper content-wrapper--no-dash">
        <div class="row">
            <div class="col-12 content__text">
                <?php
                while (have_posts()) {
                    the_post();
                ?>
                    <?php the_content() ?>
                <?php } ?>
            </div>
        </div>

        <!-- DOWNLOADS -->
        <?php include_once('include-card-download-medio.php') ?>
        <!-- FIM DE DOWNLOADS -->
    </div>
</div>
<?php include('include-procure-grupo.php');

get_footer() ?>
