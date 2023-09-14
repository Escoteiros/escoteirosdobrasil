<?php /* Template Name: Home */
if (isset($_POST['width'])) {
    $largura = $_POST['width'];
    echo json_encode(array('outcome' => 'success'));
    var_dump($largura);
}
if (current_user_can('administrator')) { ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">FRONT PAGE | front-page.php</div>
<?php } ?>

<!-- HEADER -->
<?php get_header() ?>
<!-- ./HEADER -->
<!-- VIDEO -->
<div class="home-banner-wrapper">
    <div class="container--video-home">
        <div class="home-wrapper align-items-center">
            <h2 class="home-banner-wrapper__title">Escotismo,<span> educação para a vida.</span></h2>
            <p class="home-banner-wrapper__subtitle">Venha fazer parte deste Movimento que já conta com mais de 57 milhões de pessoas em todo o mundo.</p>
        </div>
    </div>
    <video poster="" id="bgvid" playsinline="" autoplay="" muted="" loop="">
        <source src="<?= get_template_directory_uri(); ?>/video/video-home.mp4" type="video/mp4">
    </video>
</div>
<!-- FIM DE VÍDEO -->

<!-- <a href="<?= site_url('seja-escoteiro') ?>">
    <div id="barraSejaEscoteiroHome">
        <img id="logoSejaEscoteiro" src="https://escoteiros.org.br/wp-content/uploads/2021/11/sejaEscoteiroLogoBotao.png" alt="Logo do projeto Seja Escoterio" />
    </div>
</a> -->

<!-- DESTAQUES -->
<?php if (get_field('item_do_destaque')) : ?>
    <section class="container my-5">
        <?php $retVal = (preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"])) ? "display-4" : "display-3" ; ?>
        <h2 class="<?= $retVal?> text-center">Destaques</h2>
        <div class="row justify-content-around mt-5">
            <?php
                $destaques = get_field('item_do_destaque');
                for ($i = 1; $i <= 2; $i++) :
                        $destaque = $destaques[0]['sub_item_grupo_' . $i];
                        if (empty($destaque['img_destaque'])) {
                            continue;
                        }
            ?>
                <div class="col-lg-6">
                    <a href="<?= $destaque['link_destaque'] ?>" class="w-100">
                        <img src="<?= $destaque['img_destaque']['url'] ?>" class="w-100 my-3 my-md-0" alt="" />
                    </a>
                </div>
            <?php endfor; ?>
        </div>
    </section>
<?php endif;?>


<!-- FIM DOS DESTAQUES -->
<!-- PROXIMOS EVENTOS --> 
<div class="home-events-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="home-events__titles-wrapper">
                    <img src="<?= get_template_directory_uri(); ?>/img/ilustras/home-eventos.png" alt="Ilustração" class="home-events__image">

                    <div>

                        <h2 class="home-events__title">Próximos Eventos</h2>

                        <p class="home-events__subtitle">Venha saber um pouco mais sobre o que está acontecendo por aí</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- EVENTOS RELACIONADOS -->
        <?php include('include-eventos-relacionados-home.php'); ?>
        <!-- FIM DE EVENTOS RELACIONADOS -->
    </div>
</div>
<!-- FIM DE PROXIMOS EVENTOS -->
<!-- CARROSSEL -->
<?php if (have_rows('carrossel_item')) {
    $index1 = [];
    $subItem1 = [];
    $subItem21 = [];
    while (have_rows('carrossel_item')) {
        the_row();
        array_push($index1, get_row_index());
        array_push($subItem1, get_sub_field('sub-item_carrossel'));
        array_push($subItem21, get_sub_field('sub-item_carrossel_2'));
    }
?>
    <div class="carousel-wrapper carouselDesktop">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner">
                    <?php while (have_rows('carrossel_item')) {
                        the_row();
                    }

                    for ($i = 0; $i < count($index1); $i++) {
                    ?>
                        <div class="carousel-item <?php echo $index1[$i] == 1 ? 'active' : '' ?>">
                            <div class="carousel-item__wrapper">
                                <?php if ($subItem1[$i]['item_autor']) { ?>
                                    <div>
                                        <img src="<?php echo $subItem1[$i]['item_imagem']['url']; ?>" alt="<?= $subItem1[$i]['item_imagem']['alt']; ?>" />
                                        <div class="carousel-item__text-wrapper flex-grow-1">
                                            <p class="carousel-item__author"><?= $subItem1[$i]['item_autor']; ?></p>
                                            <p class="carousel-item__author-origin"><?= $subItem1[$i]['item_autor_origem']; ?></p>
                                            <p class="carousel-item__testmonial"><?= $subItem1[$i]['item_frase']; ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if ($subItem21[$i]['item_autor']) { ?>
                                    <div>
                                        <img src="<?= $subItem21[$i]['item_imagem']['url']; ?>" alt="<?= $subItem21[$i]['item_imagem']['alt']; ?>" />
                                        <div class="carousel-item__text-wrapper flex-grow-1">
                                            <p class="carousel-item__author"><?= $subItem21[$i]['item_autor']; ?></p>

                                            <p class="carousel-item__author-origin"><?= $subItem21[$i]['item_autor_origem']; ?></p>

                                            <p class="carousel-item__testmonial"><?= $subItem21[$i]['item_frase']; ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <script>
                    jQuery(document).ready(function($) {
                        $('.carousel').carousel({
                            interval: 5000
                        });
                    })
                </script>
                <ol class="carousel-indicators">
                    <?php while (have_rows('carrossel_item')) {
                        the_row();
                        $index = get_row_index();
                    ?>
                        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $index - 1 ?>" class="<?php echo $index == 1 ? 'active' : '' ?>"></li>
                    <?php } ?>
                </ol>
            </div>
        </div>
    </div>
    <div class="carousel-wrapper carouselMobile" style="display: none">
        <div class="container">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner">
                    <?php
                    $arrayTudo = [];
                    foreach ($subItem1 as $item) {
                        array_push($arrayTudo, $item);
                    }

                    foreach ($subItem21 as $item) {
                        array_push($arrayTudo, $item);
                    }
                    for ($i = 0; $i < count($arrayTudo); $i++) {
                        the_row();
                    ?>

                        <div class="carousel-item <?php echo $i == 1 ? 'active' : '' ?>">
                            <div class="carousel-item__wrapper">
                                <?php if ($arrayTudo[$i]['item_autor']) { ?>
                                    <div>
                                        <img src="<?php echo $arrayTudo[$i]['item_imagem']['url']; ?>" alt="<?php echo $arrayTudo[$i]['item_imagem']['alt']; ?>" />
                                        <div class="carousel-item__text-wrapper flex-grow-1">
                                            <p class="carousel-item__author"><?= $arrayTudo[$i]['item_autor']; ?></p>
                                            <p class="carousel-item__author-origin"><?= $arrayTudo[$i]['item_autor_origem']; ?></p>
                                            <p class="carousel-item__testmonial"><?= $arrayTudo[$i]['item_frase']; ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <ol class="carousel-indicators">
                    <?php for ($i = 0; $i < count($arrayTudo); $i++) {
                        the_row(); ?>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="<?php echo $i ?>" class="<?php echo $i == 1 ? 'active' : '' ?>"></li>
                    <?php } ?>
                </ol>
            </div>
        </div>
    </div>
<?php } ?>
<!-- FIM DE CARROSSEL -->
<!-- ILUSTRA -->
<div class="bg-ilustra bg-ilustra--home"></div>
<!-- FIM DE ILUSTRA -->

<div class="menu-mobile-footer">
    <ul>
        <?php $linkDoe = get_field('link_doe', 'option');
        if ($linkDoe) {
            $link_url = $linkDoe['url'];
            $link_title = $linkDoe['title'];
            $link_target = $linkDoe['target'] ? $linkDoe['target'] : '_self';
        ?>
            <li>
                <a class="nav-mobile__link nav-mobile-js" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>">
                    <img src="<?= get_template_directory_uri(); ?>/img/icons/doe.svg" alt="">
                    <p><?= esc_html($link_title); ?></p>
                </a>
            </li>
        <?php }
        $linkLoja = get_field('link_loja', 'option');
        if ($linkLoja) {
            $link_url = $linkLoja['url'];
            $link_title = $linkLoja['title'];
            $link_target = $linkLoja['target'] ? $linkLoja['target'] : '_self';
        ?>
            <li>
                <a class="nav-mobile__link nav-mobile-js" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>">
                    <img src="<?= get_template_directory_uri(); ?>/img/icons/sacola.svg" alt="">
                    <p><?= esc_html($link_title); ?></p>
                </a>
            </li>
        <?php }
        $linkLogin = get_field('link_login', 'option');
        if ($linkLogin) {
            $link_url = $linkLogin['url'];
            $link_title = $linkLogin['title'];
            $link_target = $linkLogin['target'] ? $linkLogin['target'] : '_self';
        ?>
            <li>
                <a class="nav-mobile__link nav-mobile-js" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>">
                    <img src="<?= get_template_directory_uri(); ?>/img/icons/login.svg" alt="">
                    <p><?= esc_html($link_title); ?></p>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>

<?php get_footer(); ?>
