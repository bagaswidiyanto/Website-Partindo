<section class="other-hero-header hero-business part">
    <style>
    .other-hero-header.hero-business.part {
        background-image: url("https://admin103.partindomitrautama.co.id/upload/deskripsi_content/<?= $dc5->image ?>");
    }
    </style>
    <div class="container">
        <div class="row align-items-center gy-4 gy-md-0 position-relative z-1">
            <div class="col-md-7 col-lg-6">
                <div class="caption mb-3 wow fadeInRight" data-wow-delay="0.1s">
                    <span><?= $dc5->title; ?></span>
                </div>
                <h2 class="text-white wow fadeInLeft" data-wow-delay="0.1s"><?= $our_bisnis1->title; ?></h2>
                <div class="more-btn mt-5 pt-3 wow zoomInUp" data-wow-delay="0.1s">
                    <a href="<?= $chatInfo; ?>" target="_blank" title="Chat Wa" class="fw-900">Get a Quote <i
                            class="fas fa-chevron-circle-right ms-3"></i></a>
                </div>
                <div class="features d-flex mt-5">
                    <?php foreach ($divisi1 as $d1) { ?>
                    <div class="content position-relative wow fadeInUp" data-wow-delay="0.1s">
                        <p><?= $d1->title; ?></p>
                    </div>
                    <?php } ?>

                </div>
            </div>

        </div>
    </div>
</section>


<section class="part-division py-5">
    <div class="container">
        <div class="header-title text-center wow fadeInUp" data-wow-delay="0.1s">
            <h2><?= $our_bisnis1->title; ?></h2>
        </div>
        <div class="row gy-4 mt-3">
            <div class="col-md-5 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="img">
                    <a href="https://admin103.partindomitrautama.co.id/upload/master_division/<?= $new_parts->image; ?>"
                        data-fancybox="<?= $new_parts->title; ?>" data-filter="#content_C" data-caption="">
                        <img src="https://admin103.partindomitrautama.co.id/upload/master_division/<?= $new_parts->image; ?>"
                            class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-7 col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                <div class="content ps-md-5">
                    <div class="number">
                        <h2 class="text-orange fw-normal">01</h2>
                    </div>
                    <div class="header-title">
                        <h2><?= $new_parts->title; ?></h2>
                    </div>
                    <div class="card-text text-justify">
                        <?= $new_parts->deskripsi; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if (isset($kondisiPart->id_divisi)) { ?>
<section class="our-parts pb-5">
    <div class="container">
        <div class="header-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h2>Our Parts</h2>
        </div>
        <div class="row gy-4">
            <?php foreach ($part_gallery as $pg) { ?>
            <div class="col-sm-6 col-md-4 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="widget-scale">
                    <div class="img">
                        <a href="https://admin103.partindomitrautama.co.id/upload/portofolio/<?= $pg->image; ?>"
                            data-fancybox="<?= $pg->title; ?>" data-filter="#content_C" data-caption="">
                            <img src="https://admin103.partindomitrautama.co.id/upload/portofolio/thumbnail/<?= $pg->image; ?>"
                                class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="card-title fw-800">
                            <?= $pg->title; ?>
                        </div>
                        <div class="card-text">
                            <?= substr($pg->deskripsi, 0, 50); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>

<section class="history-portofolio pb-5">
    <div class="container">
        <div class="row align-items-center">
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


<section class="slider-portofolio our-business">
    <div class="container">
        <div class="row position-relative z-1 pb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-md-5 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="img">
                    <a href="https://admin103.partindomitrautama.co.id/upload/master_division/<?= $good_used->image; ?>"
                        data-fancybox="<?= $good_used->title; ?>" data-filter="#content_C" data-caption="">
                        <img src="https://admin103.partindomitrautama.co.id/upload/master_division/<?= $good_used->image; ?>"
                            class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-7 col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                <div class="heading-caption ps-md-5">
                    <div class="number">
                        <h2 class="text-white fw-normal">02</h2>
                    </div>
                    <div class="heading">
                        <h3 class="text-white fw-900"><?= $good_used->title; ?></h3>
                    </div>
                    <div class="card-text">
                        <?= $good_used->deskripsi; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if (isset($kondisiGU->id_divisi)) { ?>
        <div class="slider-container mt-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="swiper-container portofolio-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($good_used_gallery as $gu) { ?>
                    <div class="swiper-slide">
                        <div class="widget-scale">
                            <div class="img">
                                <a href="https://admin103.partindomitrautama.co.id/upload/portofolio/<?= $gu->image; ?>"
                                    data-fancybox="<?= $gu->title; ?>" data-filter="#content_C" data-caption="">
                                    <img src="https://admin103.partindomitrautama.co.id/upload/portofolio/thumbnail/<?= $gu->image; ?>"
                                        class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="card-title fw-800">
                                    <?= $gu->title; ?>
                                </div>
                                <div class="card-text">
                                    <?= substr($gu->deskripsi, 0, 50); ?>
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
                <div class="header-title text-white wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="text-white"><?= $dc6->title; ?></h2>
                </div>
                <div class="card-text mt-4 text-white wow fadeInUp" data-wow-delay="0.1s">
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