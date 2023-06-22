<section class="other-hero-header hero-business media">
    <style>
    .other-hero-header.hero-business.media {
        background-image: url("https://admin103.partindomitrautama.co.id/upload/deskripsi_content/<?= $dc9->image ?>");
    }
    </style>
    <div class="container">
        <div class="row align-items-center gy-4 gy-md-0 position-relative z-1">
            <div class="col-md-7 col-lg-6">
                <div class="caption mb-3 wow fadeInRight" data-wow-delay="0.1s">
                    <span><?= $dc9->title; ?></span>
                </div>
                <h2 class="text-white wow fadeInLeft" data-wow-delay="0.1s"><?= $dc9->deskripsi; ?></h2>
                <div class="more-btn mt-5 pt-3 wow zoomInUp" data-wow-delay="0.1s">
                    <a href="<?= $chatInfo; ?>" target="_blank" title="Chat Wa" class="fw-900">Get a Quote <i
                            class="fas fa-chevron-circle-right ms-3"></i></a>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="single-video py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="embed-responsive embed-responsive-16by9 wow zoomIn" data-wow-delay="0.1s">
                    <?= $video->link_video; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="shorts-video our-business py-5">
    <div class="container">
        <div class="slider-container wow fadeInUp" data-wow-delay="0.1s">
            <div class="swiper-container shorts-video-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($short as $short) { ?>
                    <div class="swiper-slide">
                        <div class="widget-scale">
                            <div class="embed-responsive embed-responsive-16by9">
                                <?= $short->link_short; ?>
                            </div>
                            <div class="card-body">
                                <div class="card-title fw-800">
                                    <?= $short->title; ?>
                                </div>
                                <div class="card-text">
                                    <?= $short->deskripsi; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>


<section class="all-gallery py-5">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="header-title">
                    <h2 class="display-5 fw-900">All Gallery Portofolio</h2>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.1s">
                <ul class="list-inline rounded mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">ALL</li>
                    <?php foreach ($tab_bisnis as $tb) { ?>
                    <li class="mx-2" data-filter=".tab-<?= $tb->id ?>"><?= $tb->title; ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <div class="row g-4 portfolio-container">
            <?php foreach ($daataPort as $p) { ?>
            <?php $slug = $this->db->query("SELECT * FROM tbl_bisnis WHERE id = '" . $p->id_bisnis . "'")->row(); ?>
            <div class="col-lg-4 col-md-6 portfolio-item tab-<?= $slug->id ?>">
                <div class="widget-animation">
                    <a href="https://admin103.partindomitrautama.co.id/upload/portofolio/<?= $p->image; ?>"
                        data-fancybox="2" data-filter="#content_C" data-caption="">
                        <div class="img">
                            <img src="https://admin103.partindomitrautama.co.id/upload/portofolio/thumbnail/<?= $p->image; ?>"
                                class="img-fluid" alt="">
                        </div>
                    </a>
                    <div class="main-title">
                        <div class="card-title">
                            <?= $p->title; ?>
                        </div>
                        <div class="card-fitur">
                            <?= $p->titleDivisi; ?>
                        </div>
                        <div class="card-text">
                            <?= substr($p->deskripsi, 0, 50); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>