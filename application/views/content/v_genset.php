<section class="other-hero-header hero-business genset">
    <style>
        .other-hero-header.hero-business.genset {
            background-image: url("https://admin103.partindomitrautama.co.id/upload/deskripsi_content/<?= $dc8->image ?>");
        }
    </style>
    <div class="container">
        <div class="row align-items-center gy-4 gy-md-0 position-relative z-1">
            <div class="col-md-7 col-lg-6">
                <div class="caption mb-3 wow fadeInRight" data-wow-delay="0.1s">
                    <span><?= $dc8->title; ?></span>
                </div>
                <h2 class="text-white wow fadeInLeft" data-wow-delay="0.1s"><?= $our_bisnis2->title; ?></h2>
                <div class="more-btn mt-5 pt-3 wow zoomInUp" data-wow-delay="0.1s">
                    <a href="<?= $chatInfo; ?>" target="_blank" title="Chat Wa" class="fw-900">Get a Quote <i class="fas fa-chevron-circle-right ms-3"></i></a>
                </div>

            </div>

        </div>
        <div class="features row mt-5">
            <?php foreach ($divisi2 as $d2) { ?>
                <div class="col-sm-6 col-md-3 col-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="content position-relative">
                        <p><?= $d2->title; ?></p>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>


<section class="genset-division py-5">
    <div class="container">
        <div class="header-title text-center wow fadeInUp" data-wow-delay="0.1s">
            <h2><?= $our_bisnis2->title; ?></h2>
        </div>
        <div class="row gy-4 mt-3">
            <div class="col-md-5 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="img">
                    <a href="https://admin103.partindomitrautama.co.id/upload/master_division/<?= $over->image; ?>" data-fancybox="<?= $over->title; ?>" data-filter="#content_C" data-caption="">
                        <img src="https://admin103.partindomitrautama.co.id/upload/master_division/<?= $over->image; ?>" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-7 col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                <div class="content ps-md-5">
                    <div class="number">
                        <h2 class="text-orange fw-normal">01</h2>
                    </div>
                    <div class="header-title">
                        <h2><?= $over->title; ?></h2>
                    </div>
                    <div class="card-text text-justify">
                        <?= $over->deskripsi; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="genset-division-project py-5 bg-grey our-business">
    <div class="container">
        <div class="text-center mb-5">
            <div class="header-title wow fadeInUp" data-wow-delay="0.1s">
                <h2><?= $our_bisnis2->title; ?></h2>
            </div>
            <div class="header-second-title wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="fw-normal">Latest Projects Of <?= $our_bisnis2->title; ?></h2>
            </div>
        </div>
        <?php if (isset($kO->id_divisi)) { ?>
            <div class="slider-container wow fadeInUp" data-wow-delay="0.1s">
                <div class="swiper-container genset-division-slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($over_gallery as $og) { ?>
                            <div class="swiper-slide">
                                <div class="widget-scale">
                                    <div class="img">
                                        <a href="https://admin103.partindomitrautama.co.id/upload/portofolio/<?= $og->image; ?>" data-fancybox="<?= $og->title; ?>" data-filter="#content_C" data-caption="">
                                            <img src="https://admin103.partindomitrautama.co.id/upload/portofolio/thumbnail/<?= $og->image; ?>" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title fw-800">
                                            <?= $og->title; ?>
                                        </div>
                                        <div class="card-text">
                                            <?= substr($og->deskripsi, 0, 50); ?>
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
        <?php } ?>

        <div class="row align-items-center position-relative z-1 mt-5">
            <div class="col-lg-6">
                <div class="header-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2><?= $dc6->title; ?></h2>
                </div>
                <div class="card-text mt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <?= $dc6->deskripsi; ?>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-block d-sm-flex">
                    <div class="more-btn">
                        <a href="<?= base_url("media"); ?>">View All Projects</a>
                    </div>
                    <div class="more-btn ps-sm-3 mt-4 mt-sm-0">
                        <a href="<?= $chatInfo; ?>" target="_blank" title="Chat Wa" style="background: #726E6B;">Get a
                            Quote <i class="fas fa-chevron-circle-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="trouble-shooting py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="img">
                    <a href="https://admin103.partindomitrautama.co.id/upload/master_division/<?= $trouble->image; ?>" data-fancybox="<?= $trouble->title; ?>" data-filter="#content_C" data-caption="">
                        <img src="https://admin103.partindomitrautama.co.id/upload/master_division/<?= $trouble->image; ?>" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-7 col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                <div class="content ps-md-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="number">
                        <h2 class="text-orange fw-normal">02</h2>
                    </div>
                    <div class="header-title">
                        <h2><?= $trouble->title; ?></h2>
                    </div>
                    <div class="card-text text-justify">
                        <?= $trouble->deskripsi; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="genset-division-project py-5 bg-grey our-business">
    <div class="container">
        <?php if (isset($kT->id_divisi)) { ?>
            <div class="text-center mb-5">
                <div class="header-second-title text-center text-md-end wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="fw-normal">Latest Projects Of <?= $trouble->title; ?></h2>
                </div>
            </div>
            <div class="slider-container wow fadeInUp" data-wow-delay="0.1s">
                <div class="swiper-container genset-division-slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($trouble_gallery as $tg) { ?>
                            <div class="swiper-slide">
                                <div class="widget-scale">
                                    <div class="img">
                                        <a href="https://admin103.partindomitrautama.co.id/upload/portofolio/<?= $tg->image; ?>" data-fancybox="<?= $tg->title; ?>" data-filter="#content_C" data-caption="">
                                            <img src="https://admin103.partindomitrautama.co.id/upload/portofolio/thumbnail/<?= $tg->image; ?>" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title fw-800">
                                            <?= $tg->title; ?>
                                        </div>
                                        <div class="card-text">
                                            <?= substr($tg->deskripsi, 0, 50); ?>
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
        <?php } ?>
        <div class="row align-items-center position-relative z-1 mt-5">
            <div class="col-lg-6">
                <div class="header-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2><?= $dc6->title; ?></h2>
                </div>
                <div class="card-text mt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <?= $dc6->deskripsi; ?>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-block d-sm-flex">
                    <div class="more-btn">
                        <a href="<?= base_url("media"); ?>">View All Project</a>
                    </div>
                    <div class="more-btn ps-sm-3 mt-4 mt-sm-0">
                        <a href="<?= $chatInfo; ?>" target="_blank" title="Chat Wa" style="background: #726E6B;">Get a
                            Quote <i class="fas fa-chevron-circle-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slider-portofolio our-business position-relative z-1">
    <div class="container">
        <div class="row position-relative z-1 ">
            <div class="col-md-5 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="img">
                    <a href="https://admin103.partindomitrautama.co.id/upload/master_division/<?= $maintenance->image; ?>" data-fancybox="<?= $maintenance->title; ?>" data-filter="#content_C" data-caption="">
                        <img src="https://admin103.partindomitrautama.co.id/upload/master_division/<?= $maintenance->image; ?>" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-7 col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                <div class="heading-caption ps-md-5wow fadeInUp" data-wow-delay="0.1s">
                    <div class="number">
                        <h2 class="text-white fw-normal">03</h2>
                    </div>
                    <div class="heading">
                        <h3 class="text-white fw-900"><?= $maintenance->title; ?></h3>
                    </div>
                    <div class="card-text">
                        <?= $maintenance->deskripsi; ?>
                    </div>
                    <div class="more-btn mt-5">
                        <a href="<?= $chatInfo; ?>" target="_blank" title="Chat Wa">Get a Quote <i class="fas fa-chevron-circle-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <?php if (isset($kM->id_divisi)) { ?>
            <div class="slider-container pt-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="swiper-container portofolio-slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($maintenance_gallery as $mg) { ?>
                            <div class="swiper-slide">
                                <div class="widget-scale">
                                    <div class="img">
                                        <a href="https://admin103.partindomitrautama.co.id/upload/portofolio/<?= $mg->image; ?>" data-fancybox="<?= $mg->title; ?>" data-filter="#content_C" data-caption="">
                                            <img src="https://admin103.partindomitrautama.co.id/upload/portofolio/thumbnail/<?= $mg->image; ?>" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title fw-800">
                                            <?= $mg->title; ?>
                                        </div>
                                        <div class="card-text">
                                            <?= substr($mg->deskripsi, 0, 50); ?>
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
        <?php } ?>

        <div class="row align-items-center position-relative z-1 mt-5">
            <div class="col-lg-6">
                <div class="header-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-white"><?= $dc6->title; ?></h2>
                </div>
                <div class="card-text mt-4 text-white wow fadeInUp" data-wow-delay="0.1s">
                    <?= $dc6->deskripsi; ?>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-block d-sm-flex">
                    <div class="more-btn">
                        <a href="<?= base_url("media"); ?>">View All Project</a>
                    </div>
                    <div class="more-btn ps-sm-3 mt-4 mt-sm-0">
                        <a href="<?= $chatInfo; ?>" target="_blank" title="Chat Wa" style="background: #726E6B;">Get a
                            Quote <i class="fas fa-chevron-circle-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="panel-instalation position-relative our-business">
    <div class="container">
        <div class="row gy-4 mt-3">
            <div class="col-md-5 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="img">
                    <a href="https://admin103.partindomitrautama.co.id/upload/master_division/<?= $panel->image; ?>" data-fancybox="<?= $panel->title; ?>" data-filter="#content_C" data-caption="">
                        <img src="https://admin103.partindomitrautama.co.id/upload/master_division/<?= $panel->image; ?>" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-7 col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                <div class="content ps-md-5">
                    <div class="number">
                        <h2 class="text-orange fw-normal">04</h2>
                    </div>
                    <div class="header-title mb-4">
                        <h2><?= $panel->title; ?></h2>
                    </div>
                    <div class="card-text text-justify">
                        <?= $panel->deskripsi; ?>
                    </div>
                </div>
            </div>
        </div>

        <?php if (isset($kP->id_divisi)) { ?>

            <div class="slider-container wow fadeInUp mt-5 pt-5" data-wow-delay="0.1s">
                <div class="swiper-container panel-instalation-slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($panel_gallery_slider as $pgSlider) { ?>
                            <div class="swiper-slide">
                                <div class="widget-scale">
                                    <div class="img">
                                        <a href="https://admin103.partindomitrautama.co.id/upload/portofolio/<?= $pgSlider->image; ?>" data-fancybox="<?= $pgSlider->title; ?>" data-filter="#content_C" data-caption="">
                                            <img src="https://admin103.partindomitrautama.co.id/upload/portofolio/thumbnail/<?= $pgSlider->image; ?>" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title fw-800 fs-14">
                                            <?= $pgSlider->title; ?>
                                        </div>
                                        <div class="card-text">
                                            <?= substr($pgSlider->deskripsi, 0, 50); ?>
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


        <?php } ?>
    </div>
</section>