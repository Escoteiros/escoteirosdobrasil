<?php if(current_user_can('administrator')){  ?>
<div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">SINGLE DOWNLOAD | single-download.php</div>

<?php }
get_header();
$pageTitle = get_the_title();
$iconHeader = 'Informacoes';
include('include-header-title.php');
?>
<section class="container mb-5">
    <?php
    while (have_posts()) {
        the_post();
        the_content();
    } ?>
</section>
<section class="container">
    <?php
    $arquivo = get_field('arquivo_download');
    if(empty($arquivo)){
        $arquivo = get_field('link');
    }
    ?>
    <div class="text-center my-5">
        <a href="<?= $arquivo['url'] ?>" title="Baixar arquivo" target="_blank" class="btn btn-primary" download="">Baixar arquivo</a>
    </div>
    <?php if(isset($arquivo['type'])):
    if($arquivo['type'] === 'image'):?>
        <div class="row justify-content-center">
            <img src="<?= $arquivo['url'] ?>" alt="<?= $arquivo['alt'] ?>" class="w-50">
        </div>
    <?php elseif ($arquivo['subtype'] === 'pdf'): ?>
        <object data="<?= $arquivo['url'] ?>" type="<?= $arquivo['mime_type'] ?>" class="w-100 h-100 d-none d-md-block"></object>
    <?php endif;
    endif;?>
</section>

<?php get_footer() ?>
