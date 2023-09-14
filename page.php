<?php if(current_user_can('administrator')): ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE | page.php</div>
<?php endif;

get_header();
$pageTitle = get_the_title();
$iconHeader = get_field('icone_header');
include('include-header-title.php');
?>
<div class="container">
    <div class="content-wrapper content-wrapper--no-margin">
        <?php while (have_posts()) {
            include('include-btns.php');
            the_post();
            the_content();
        } ?>
    </div>
</div>
<div class="box-search-group-wrapper" style="margin-bottom: -120px; margin-top: 120px">
    <div class="box-search-group">
        <div class="search-scout-group">
            <p>Procure um Grupo Escoteiro</p>
            <form class="form-inline" action="/cep" method="GET">
                <input type="text" class="form-control" name="cep" id="inlineFormInputName" placeholder="CEP ou localização" aria-label="CEP ou localização">
                <button type="submit" class="btn">Procurar</button>
            </form>
        </div>
    </div>
</div>
<?php get_footer() ?>
