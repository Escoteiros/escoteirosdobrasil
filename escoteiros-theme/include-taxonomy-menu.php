<?php
$taxonomy = $setTaxonomy;
$class = $setClassModifier ?? '';
$top_level_terms = get_terms(array(
    'taxonomy'      => $taxonomy,
    'parent'        => '0',
    'hide_empty'    => true,
));
?>
<select class="filter-mobile filter-mobile-js" data-taxonomy="<?php echo $taxonomy ?>">
    <option value="">Todas as categorias</a>
        <?php array_multisort(array_column($top_level_terms, "name"), SORT_ASC, $top_level_terms);
        if ($top_level_terms) {
            foreach ($top_level_terms as $top_level_term) {
                $top_term_id = $top_level_term->term_id;
                $top_term_name = $top_level_term->name;
                $top_term_tax = $top_level_term->taxonomy;
        ?>
    <option value="<?= $top_level_term->slug; ?>"><?= $top_term_name; ?></option>
    <?php
        $second_level_terms = get_terms(array(
            'taxonomy' => $top_term_tax,
            'child_of' => $top_term_id,
            'parent' => $top_term_id,
            'hide_empty' => true,
        ));
    ?>
    <?php if ($second_level_terms) {
        array_multisort(array_column($second_level_terms, "name"), SORT_ASC, $second_level_terms);

        foreach ($second_level_terms as $second_level_term) {
            $second_term_name = $second_level_term->name;

    ?>
            <option style="font-weight: initial;" value="<?php echo $second_level_term->slug; ?>">&emsp;<?php echo $second_term_name ?></option>
        <?php }
            }
        }
    } ?>
</select>
<ul class="taxonomy-list filter-desktop">
    <?php if ($top_level_terms) {
        $top_term_tax = "";
        array_multisort(array_column($top_level_terms, "name"), SORT_ASC, $top_level_terms);
        foreach ($top_level_terms as $top_level_term) {
            $top_term_id = $top_level_term->term_id;
            $top_term_name = $top_level_term->name;
            $top_term_tax = $top_level_term->taxonomy;
    ?>
            <li class="taxonomy-list__item taxonomy-list__item--<?= $class ?>">
                <a href="<?= esc_url(get_term_link($top_level_term)) ?>" class="js-filter taxonomy-list__item__link" data-category="<?= $top_level_term->slug; ?>" data-taxonomy="<?= $taxonomy ?>">
                    <?= $top_term_name; ?>
                </a>
                <?php
                $second_level_terms = get_terms(array(
                    'taxonomy' => $top_term_tax,
                    'child_of' => $top_term_id,
                    'parent' => $top_term_id,
                    'hide_empty' => true,
                ));
                if ($second_level_terms) {
                    array_multisort(array_column($second_level_terms, "name"), SORT_ASC, $second_level_terms); ?>
                    <ul class="taxonomy-list__sublist">
                        <?php
                        foreach ($second_level_terms as $second_level_term) {
                            $second_term_name = $second_level_term->name;
                        ?>
                            <li class="taxonomy-list__sublist__item">
                                <a href="<?= esc_url(get_term_link($second_level_term)) ?>" class="js-filter taxonomy-list__sublist__item__link" data-category="<?= $second_level_term->slug; ?>" data-taxonomy="<?= $taxonomy ?>">
                                    <?= $second_term_name ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>
    <?php }
    } ?>
</ul>
