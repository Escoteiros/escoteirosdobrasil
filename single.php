<?php if (current_user_can('administrator')) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">SINGLE PAGE | single.php</div>
<?php }

get_header();

$pageTitle = get_the_title();
$iconHeader = get_field('icone_header');
include('include-header-title.php');
?>

<div class="container">
    <!-- CONTEUDO -->
    <div class="content-wrapper content-wrapper--no-margin">
        <?php
        while (have_posts()) {
            the_post();
            the_title('<h3>', '</h3>');
            the_content();
        }
        ?>
    </div>
</div>

<!-- FOOTER -->
<?php get_footer() ?>
