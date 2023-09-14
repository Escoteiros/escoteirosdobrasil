<?php if (current_user_can('administrator')) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">404 | 404.php</div>
<?php } ?>
<title>Página não encontrada - Escoteiros do Brasil</title>
<?php get_header() ?>

<?php
$iconHeader = 'Informacoes';
$pageTitle = '404 - Página não encontrada.';
include('include-header-title.php');
?>

<div class="container">
    <div class="content-wrapper content-wrapper--no-margin">
        <?php while (have_posts()) {
            the_post();
            the_title('<h3>', '</h3>');
            the_content();
        }
        ?>Ops, a página que você tentou acessar não existe. Tente utilizar a ferramenta para encontrar o que necessita:
        <div class="search-form-wrapper search-form-wrapper--active">
            <form action="https://escoteiros.org.br" method="get" accept-charset="utf-8" id="searchform" role="search" _lpchecked="1">
                <input type="text" name="s" id="s" value="" placeholder="Buscar por notícias, eventos, equipes, etc">
                <input type="submit" id="searchsubmit" class="btn btn-primary btn-sm" value="Buscar">
            </form>
        </div>
        <br><br><br>
        <div class="text-center">
            <img src="https://escoteiros.org.br/wp-content/themes/escoteiros-theme/img/ilustras/bg-home.png" alt="" />
        </div>
    </div>
</div>
<?php get_footer() ?>
