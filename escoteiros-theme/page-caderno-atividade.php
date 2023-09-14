<?php /* Template Name: Caderno de Atividades  */ ?>
<?php if (current_user_can('administrator')) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE EVENTO/Caderno de Atividades | page-caderno-atividade.php</div>
<?php }
get_header();
$iconHeader = get_field('icone_header');
$pageTitle = get_the_title();
include('include-header-title.php');
?>
<!-- ./HEADER -->
<style type="text/css">
    @media (max-width: 780px){
        .banner-header {
            height: 100px !important;
            background-position: center;
        }
    }

    .banner-header{
        height: 188px !important;
    }

</style>
<section class="container">
    <!-- BANNER -->
    <div class="row">
        <div class="col-12 remove-padding-mobile">
            <?php
            $showBanner = true;
            //$bannerOption = '';
            include('include-banner.php');
            ?>
        </div>
    </div>
    <!-- FIM DE BANNER -->
</section>
<style type="text/css">
    @media (max-width: 780px){
        .limit_card{
            padding-right: 0px !important;
            padding-left: 0px !important;
        }
    }

    .limit_card{
        padding-right: 50px;
        padding-left: 50px;
    }
</style>
<div class="container">
    <div class="content-wrapper content-wrapper--no-dash ">
        <div class="content__text">
            <?php
            while (have_posts()) {
                the_post();
                the_content();
            } ?>
        </div>
        <div>
            <div class="col-2"></div>
            <?php if (have_rows('evento')) : ?>
                <div class="row d-flex justify-content-center mr-1 limit_card">
                    <?php while (have_rows('evento')): the_row(); ?>
                            <div id="card<?= get_row_index() ?>" class="card mr-1" style="margin-bottom: 0.25rem !important;">
                                <?php 
                                $logoEvento = get_sub_field('imagem_evento');
                                $logoHover = get_sub_field('imagem_hover');
                                $linkBtn = get_sub_field('link_do_evento'); ?>

                                <a  rel="nofollow noreferrer" target="_blank" href="<?= $linkBtn; ?>">
                                    <img style="width: auto !important;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;" src="<?= esc_url($logoEvento['url']); ?>" onmouseover="this.src='<?= esc_url($logoHover['url']); ?>';" onmouseout="this.src='<?= esc_url($logoEvento['url']); ?>';"  alt="<?= $logoEvento['alt']; ?>">
                                </a>     
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <div class="col-2"></div>
        </div>
    </div>
</div>
<script>
    function showText(cardId) {
        const cards = document.getElementsByClassName('card');

        for (let index = 0; index < cards.length; index++) {
            cards[index].classList.remove('ativo');
        }

        document.getElementById(cardId).classList.add('ativo');
    }
</script>

<!-- FOOTER -->
<?php get_footer() ?>
