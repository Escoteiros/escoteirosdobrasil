<?php if (current_user_can('administrator')) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE TAXONOMY Downloads | taxonomy-Downloads.php</div>
<?php }

get_header();

$pageTitle = get_the_archive_title();
$iconHeader = 'Informacoes';
include('include-header-title.php');
?>

<div class="container">
    <div class="content-wrapper content-wrapper--no-dash">
                <div class="row">
            <?php while (have_posts()) {
                the_post();
                include('include-card-download.php');
            } ?>
        </div>

        <!-- PAGINACAO -->
        <div class="pagination-wrapper">
            <nav aria-label="Page navigation example">
                <?php
                $args = array(
                    'prev_text' => '<<',
                    'next_text' => '>>'
                );
                echo paginate_links($args);
                ?>
            </nav>
        </div>
        <!-- FIM DE PAGINACAO -->
    </div>
</div>

<!-- FOOTER -->
<?php get_footer() ?>
