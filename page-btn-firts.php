<?php /* Template Name: Botões no início  */ ?>
<?php if (current_user_can('administrator')) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE Botões | page-btn-first.php</div>
<?php }

get_header() ?>

<!-- Inicio área de conteúdo -->

<?php
$pageTitle = get_the_title();
$iconHeader = get_field('icone_header');
include('include-header-title.php');
?>
<div class="container">
    <div class="content-wrapper content-wrapper--no-margin">
        <div class="text-center">
            <?php include('include-btns.php'); ?>
        </div>
        <?php
        while (have_posts()) {
            the_post();
            the_content();
        }
        ?>
    </div>
</div>

<!-- FOOTER -->
<?php get_footer() ?>
