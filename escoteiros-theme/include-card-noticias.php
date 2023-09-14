<div class="col-md-12 col-sm-12 mt-md-5 mb-mobile-5 alturaCard">
    <div class="card card--news row alturaCard" style="width: 100%; max-width: 100%;">
        <a href="<?= get_the_permalink(); ?>" class="card-news-link alturaCard" style="width: 100%;">
            <div class="card-body col-md-12 infoNoticia">
                <h5 class="card-title alignLeft m-0"><?= get_the_title(); ?></h5>
                <p class="card-date alignLeft"><?= get_the_date(); ?></p>
                <p class="card-text alignLeft"><?= wp_trim_words(get_the_content(), 18); ?></p>
            </div>
        </a>
    </div>
</div>
