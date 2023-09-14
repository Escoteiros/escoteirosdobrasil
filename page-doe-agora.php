<?php /* Template Name: Página doe agora  */ ?>
<?php if (current_user_can('administrator')) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE Doe agora | page-doe-agora.php</div>
<?php } ?>

<!-- HEADER -->
<?php get_header() ?>
<!-- ./HEADER -->

<?php
$pageTitle = get_the_title();
$iconHeader = get_field('icone_header');
$headerOption = 'hide-subtitle';
include('include-header-title.php');
?>
<section class="container">
    <!-- BANNER -->
    <div class="row">
        <div class="col-12 remove-padding-mobile">
            <?php
            $bannerOption = '';
            include('include-banner.php');
            ?>
        </div>
    </div>
    <!-- FIM DE BANNER -->
</section>
<div class="container">
    <section class="content__text">
    </section>
    <?php
        include('include-card-horizontal.php');
        include('include-card-doacao.php');
        while (have_posts()) {
            the_post();
            the_content();
        }
    ?>
</div>

<?php get_footer() ?>
