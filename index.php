<?php if(current_user_can('administrator')){  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">INDEX | index.php</div>
<?php } ?>
<?php get_header(); ?>
<!-- ./HEADER -->

<!-- Inicio área de conteúdo -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php
            $pageTitle = get_the_title();
            $iconHeader = get_field('icone_header');
            include('include-header-title.php');
            ?>
        </div>
    </div>
</div>

<div class="container">
    <!-- CONTEUDO -->
    <div class="content-wrapper">
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
