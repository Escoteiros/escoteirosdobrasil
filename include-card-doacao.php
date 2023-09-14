<?php if (have_rows('categorias_lista')):
    while (have_rows('categorias_lista')):
    the_row();
    ?>
        <section class="row oflCategorias">
            <?php while (have_rows('linha_categoria')): the_row(); ?>
                <div class="col-md mb-5">
                    <div class="card shadow-sm h-100">
                        <div class="card-header text-white p-4">
                            <h4 class="card-title m-0"><?php the_sub_field('categoria_titulo'); ?></h4>
                        </div>
                        <div class="card-body">
                            <p class="card-subtitle"><?php the_sub_field('categoria_preco'); ?></p>
                            <p class="card-text"><?php the_sub_field('categoria_descricao'); ?></p>
                        </div>
                        <div class="card-footer text-center">
                            <a target="_blank" class="btn btn-primary btn-sm" rel="noreferrer noopener" href="<?php the_sub_field('categoria_link'); ?>">Doar</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </section>
<?php endwhile;
endif; ?>
