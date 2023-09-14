<?php $banner = get_field('banner');
$bannerOption = $bannerOption ?? '';
$showBanner = $showBanner ?? false;
if(!empty($banner) && ($banner['banner_topo_show'] || $showBanner)) {
    if( $banner['banner_image']) { ?>
        <div class="banner-header <?= $bannerOption ?>" style="background-image: url('<?= esc_url($banner['banner_image']['url'] ); ?>');">
    <?php } else { ?>
        <div class="banner-header <?= $bannerOption ?>" style="background-image: url('<?= get_template_directory_uri(); ?>/img/placeholders/placeholder-header.png');">
    <?php }
    if( strstr($bannerOption,'--ramos' ) ) { ?>
        <h1 class="banner-header__title"><?= get_the_title(); ?></h1>
        <?php if(isset($banner['banner_legenda'])): ?>
        <p class="banner-header__text"><?= esc_html( $banner['banner_legenda'] ); ?></p>
        <?php endif; ?>
    <?php } ?>
    </div>

    <?php if(!strstr($bannerOption,'--event')){
        if(isset($banner['banner_legeda'])){ ?>
            <p class="banner-header__label"><?php echo esc_html( $banner['banner_legenda'] ); ?></p>
        <?php }
    }
} ?>
