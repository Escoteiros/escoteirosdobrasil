<?php /* Template Name: Seja escoteiro */ ?>
<?php if (current_user_can('administrator')) : ?>
    <div style="background-color: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">page-sejaescoteiro.php</div>
<?php endif;
get_header();
?>
<main>
    <section class="home-banner-wrapper">
        <div class="container--video-home">
            <div class="home-wrapper align-items-center">
                <h1 class="d-none"><?php the_title(); ?></h1>
                <img id="logoSejaEscoteiro" src="https://escoteiros.org.br/wp-content/uploads/2021/10/logoSejaEscoteiro.png" alt="Logo do projeto Seja Escoterio" />
                <p class="home-banner-wrapper__subtitle">Junte-se aos Escoteiros do Brasil e faça parte do maior movimento juvenil de educação não-formal no mundo!</p>
            </div>
        </div>
        <video poster="" id="bgvid" playsinline="" autoplay="" muted="" loop="">
            <source src="https://escoteiros.org.br/wp-content/themes/escoteiros-theme/video/vinhetaSejaEscoteiro.webm" type="video/mp4">
        </video>
    </section>
    <?php if (have_rows('oqSerEscoteiro')) : ?>
        <section id="oQueSerEhEscoteiro">
            <div class="container">
                <div class="col-12 text-center my-5">
                    <h2 class="text-white">O que é ser escoteiro?</h2>
                </div>
                <div class="row px-5">
                    <?php
                    while (have_rows('oqSerEscoteiro')) :
                        the_row();
                        $imagem = get_sub_field('oqSerEscoteiro_img');
                    ?>
                        <div class="col-md-4 p-2">
                            <div class="card h-100">
                                <?php if ($imagem) { ?>
                                    <img src="<?= $imagem['url'] ?>" alt="<?= $imagem['alt'] ?>" class="card-img-top" loading="lazy">
                                <?php } ?>
                                <div class="card-body">
                                    <p class="text-center"><?php the_sub_field('oqSerEscoteiro_txt'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <img id="trianguloPqSer" src="https://escoteiros.org.br/wp-content/uploads/2021/10/tringulo.png" alt="" loading="lazy">
        </section>
    <?php endif; ?>
    <section id="pqSerEscoteiro">
        <div class="container">
            <h2>Por que ser escoteiro?</h2>
            <img src="https://escoteiros.org.br/wp-content/uploads/2021/10/pqSerEscoteiro.png" class="w-100 d-none d-md-block"
            alt="" loading="lazy">
            <img src="https://escoteiros.org.br/wp-content/uploads/2021/10/pqSerEscoteiroMobile.png" class="w-100 d-md-none" alt="" loading="lazy">
        </div>
    </section>
    <section id="quemPodeSerEscoteiro" class="text-center">
        <div class="container pt-5">
            <h2>Quem pode ser escoteiro?</h2>
            <p class="text-uppercase py-5 h4" style="color: var(--nos-roxo);"><strong>Todo mundo!</strong></p>
            <div class="d-flex flex-column flex-md-row">
                <p class="px-3 text-justify">O Escotismo é um movimento feito por jovens e para jovens, mas a presença dos adultos nos ajuda a garantir um ambiente mais seguro para todos. Sendo assim, o Escotismo não tem idade e, a partir dos 6,5 anos, qualquer pessoa é bem-vinda, não importando a cor, etnia, orientação sexual ou credo.</p>
                <p class="px-3 text-justify">Os adultos voluntários possuem um papel fundamental no nosso projeto educativo e é por isso que oferecemos também um programa de formação continuada para os voluntários, com o objetivo de garantirmos a qualidade na entrega dos resultados esperados pelo Movimento.</p>
            </div>
        </div>
    </section>
    <?php if (have_rows('ja_conhece_os_ramos')) : ?>
        <section id="conheceRamos">
            <div class="container px-5">
                <h2>Já conhece os ramos?</h2>
                <div class="row justify-content-center px-md-5">
                    <?php while (have_rows('ja_conhece_os_ramos')) {
                        the_row();
                        $imagem = get_sub_field('imagem_ramo');
                    ?>
                        <div class="col-md-6 p-2">
                            <div class="card h-100">
                                <?php if ($imagem) { ?>
                                    <img src="<?= $imagem['url'] ?>" alt="<?= $imagem['alt'] ?>" class="card-img-top" loading="lazy" />
                                <?php } ?>
                                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                    <h3 class="corRoxo"><?= get_sub_field('titulo_ramos'); ?></h3>
                                    <p><?php the_sub_field('descricao_ramos'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php endif;
    if (have_rows('entao_vamos')) : ?>
        <section id="entaoVamos">
            <div class="container px-5">
                <div class="col-12">
                    <h2 class="text-white">Então, vamos?</h2>
                </div>
                <div class="row">
                    <?php while(have_rows('entao_vamos')):
                        the_row();
                        $imagem = get_sub_field('imagem_entao_vamos');
                        $pagina = get_sub_field('pagina_entao_vamos');
                        $paginaTarget = empty($pagina['target']) ? '_self' : $pagina['target'];
                    ?>
                        <div class="col-md-4 p-2">
                            <a href="<?= $pagina['url'] ?>" title="<?= $pagina['title']; ?>" target="<?= $paginaTarget ?>">
                                <div class="card h-100">
                                    <?php if ($imagem) { ?>
                                        <img src="<?= $imagem['url'] ?>" alt="<?= $imagem['alt'] ?>" class="card-img-top" loading="lazy" />
                                    <?php } ?>
                                    <div class="card-body">
                                        <p class="text-dark text-uppercase"><?php the_sub_field('texto_entao_vamos'); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <section id="conhecaVantagens" class="w-100 my-5">
        <div class="container">
            <h2>Conheça as vantagens de ser associado aos Escoteiros do Brasil</h2>
        </div>
        <?php $banner = get_field('banner_rodape');
        $imagemBanner = $banner['imagem_banner_rodape'];
        $linkBanner = $banner['link_banner'];
        if(!empty($linkBanner['url'])):
        ?>
        <a href="<?= $linkBanner['url']; ?>" title="<?= $linkBanner['title']; ?>">
            <img src="<?= $imagemBanner['sizes']['pw-banner'] ?>" alt="<?= $imagemBanner['alt'] ?>" class="w-100" />
        </a>
        <?php endif; ?>
    </section>
    <section class="container">
        <div class="container text-center">
            <h2 class="sejaEscoteiroTituloRoxo">Material de Divulgação</h2>
        </div>
        <div class="row">
            <?php for ($i = 1; $i <= 3; $i++):
                $material = get_field('material_de_divulgacao_'.$i);

            ?>
                <div class="col-md-4">
                    <div class="card h-100">
                        <?php if (!empty($material['imagem'])) { ?>
                            <img src="<?= $material['imagem'] ?>" alt="" class="card-img-top w-50 align-self-center" loading="lazy">
                        <?php } ?>
                        <div class="card-body text-center d-flex flex-column justify-content-end">
                            <p class="card-title"><?= $material['titulo']; ?></p>
                            <?php $linkArquivo = empty($material['arquivo']) ? $material['link_externo'] : $material['arquivo']; ?>
                            <a href="<?= $linkArquivo ?>" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-primary mx-auto">Baixar</a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </section>
    <section id="sejaEscoteiroContato" class="text-center">
        <div class="container p-5">
            <h2 class="sejaEscoteiroTituloRoxo">Cadastre-se</h2>
            <?php
            if(have_posts()){
                the_post();
                the_content();
            }
            ?>
        </div>
    </section>
</main>
<style>footer { margin-top: 0; }</style>
<script>
    $(document).ready(() => {
        document.getElementById('egoi_name').setAttribute('placeholder', 'Nome');
        document.getElementById('egoi_email').setAttribute('placeholder', 'E-mail');
    })
</script>
<?php get_footer(); ?>
