<section class="hero-header">
    <div class="container">
        <div class="row align-items-center gy-4 gy-md-0">
            <div class="col-md-8 col-lg-6">
                <div class="caption my-4 wow fadeInRight" data-wow-delay="0.1s">
                    <h1 class="display-5 text-white"><?= $dc1->title; ?></h1>
                </div>
                <div class="business-unit accordion-body wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="text-white">
                        <?php foreach ($our_bisnis as $ob) { ?>
                        <li><?= $ob->title; ?></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="more-btn mt-5 pt-3 wow zoomInUp" data-wow-delay="0.1s">
                    <a href="<?= $chatInfo; ?>" target="_blank" title="Chat Wa" class="fw-900">More Information <i
                            class="fas fa-chevron-circle-right ms-3"></i></a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="top-feature">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="slider-container h-100 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="swiper-container top-feature-slider py-5 h-100">
                        <div class="swiper-wrapper h-100">
                            <?php foreach ($divisi as $divisi) { ?>
                            <div class="swiper-slide h-100">
                                <div class="widget">
                                    <div class="icon">
                                        <img src="https://admin103.partindomitrautama.co.id/upload/master_division/<?= $divisi->icon; ?>"
                                            class="img-fluid" alt="">
                                    </div>
                                    <div class="card-title">
                                        <?= $divisi->title; ?>
                                    </div>
                                    <div class="card-text mb-4">
                                        <?= $divisi->deskripsi_slider; ?>
                                    </div>
                                    <?php
                                        if ($divisi->id_bisnis == 1) {
                                            $link = "part_division";
                                            $title = "Part Division";
                                        } elseif ($divisi->id_bisnis == 2) {
                                            $link = "genset_electrical";
                                            $title = "Genset Electrical";
                                        } else {
                                            $link = "engine_hydraulic";
                                            $title = "Engine Hydraulic";
                                        }
                                        ?>
                                    <a href="<?= base_url("$link"); ?>" title="<?= $title; ?>"><i
                                            class="fas fa-chevron-circle-right text-white"></i></a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-us py-5">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-5 col-lg-4">
                <div class="header-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="display-5"><?= $profile->title; ?></h2>
                </div>
            </div>
        </div>
        <div class="content mt-4">
            <div class="row gy-5 gy-md-0">
                <div class="col-md-6">
                    <div class="logo mb-3 wow fadeInUp" data-wow-delay="0.1s">
                        <img src="https://admin103.partindomitrautama.co.id/upload/<?= $website->image; ?>"
                            class="img-fluid" alt="">
                    </div>
                    <div class="card-text text-justify pe-0 pe-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                        <?= $profile->deskripsi_singkat; ?>
                    </div>
                    <div class="more-btn mt-5 wow zoomInUp" data-wow-delay="0.1s">
                        <a href="<?= base_url('profile'); ?>" class="fw-900">More Information <i
                                class="fas fa-chevron-circle-right ms-3"></i></a>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="img-1 me-4 wow fadeInUp" data-wow-delay="0.1s">
                        <a href="https://admin103.partindomitrautama.co.id/upload/perusahaan/<?= $profile->image1; ?>"
                            data-fancybox="<?= $profile->title; ?>" data-filter="#content_A" data-caption="">
                            <img src="https://admin103.partindomitrautama.co.id/upload/perusahaan/<?= $profile->image1; ?>"
                                class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="img-2 wow fadeInUp" data-wow-delay="0.1s">
                        <a href="https://admin103.partindomitrautama.co.id/upload/perusahaan/<?= $profile->image2; ?>"
                            data-fancybox="<?= $profile->title; ?>" data-filter="#content_A" data-caption="">
                            <img src="https://admin103.partindomitrautama.co.id/upload/perusahaan/<?= $profile->image2; ?>"
                                class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-service py-5 bg-grey">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-7 col-lg-5">
                <div class="header-title d-grid justify-content-center">
                    <div class="d-flex justify-content-center">
                        <div class="card-title wow fadeInUp" data-wow-delay="0.1s">
                            <h2><?= $dc2->title; ?></h2>
                        </div>
                    </div>
                    <div class="card-text fs-14 mt-4 wow fadeInUp" data-wow-delay="0.1s">
                        <?= $dc2->deskripsi; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-4 gy-md-0 justify-content-center mt-5">
            <?php foreach ($our_bisnis as $ob) { ?>
            <div class="col-sm-6 col-md-4 px-md-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="widget-animation">
                    <a href="https://admin103.partindomitrautama.co.id/upload/bisnis/<?= $ob->image; ?>"
                        data-fancybox="<?= $ob->title; ?>" data-filter="#content_C" data-caption="">
                        <div class="img">
                            <img src="https://admin103.partindomitrautama.co.id/upload/bisnis/<?= $ob->image; ?>"
                                class="img-fluid" alt="">
                        </div>
                    </a>
                    <div class="main-title d-flex align-items-center justify-content-between">
                        <?= $ob->title; ?>
                        <a
                            href="<?= $ob->id == 1 ? base_url('part_division') : ($ob->id == 2 ? base_url('engine_hydraulic') : base_url('genset_electrical')); ?>"><i
                                class="fas fa-chevron-circle-right ms-5"></i></a>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</section>

<section class="part py-5">
    <div class="container">
        <div class="row justify-content-start justify-content-sm-center mb-5">
            <div class="col-1 text-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="number">
                    <h2 class="fw-900 text-orange">01</h2>
                </div>
            </div>
            <div class="col-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="header-title">
                            <h2 class="display-6"><?= $our_bisnis1->title; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card-text text-justify ps-0 ps-sm-4">
                    <?= $our_bisnis1->deskripsi; ?>
                </div>
            </div>
        </div>
        <?php foreach ($divisi1 as $d1) { ?>
        <div class="part-content mb-5 mb-sm-0">
            <div class="row justify-content-center">
                <div class="col-md-1">

                </div>
                <div class="col-sm-4 col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="widget">
                        <div class="icon">
                            <img src="https://admin103.partindomitrautama.co.id/upload/master_division/<?= $d1->icon; ?>"
                                class="img-fluid" alt="">
                        </div>
                        <div class="card-title">
                            <?= $d1->title; ?>
                        </div>

                    </div>
                </div>
                <div class="col-sm-8 col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="content ps-0 ps-md-4 mt-1 mt-sm-4">
                        <div class="cart-title fw-900 mb-2 text-uppercase">
                            <?= $d1->title; ?>
                        </div>
                        <div class="card-text text-justify">
                            <?= $d1->deskripsi; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>
</section>

<section class="electical py-5">
    <div class="container">
        <div class="row justify-content-center position-relative z-1">
            <div class="col-lg-10">
                <div class="col-lg-6">
                    <div class="d-flex wow fadeInUp" data-wow-delay="0.1s">
                        <div class="number me-4">
                            <h2 class="fw-900 text-orange">02</h2>
                        </div>
                        <div class="header-title">
                            <h2 class="text-white"><?= $our_bisnis2->title; ?></h2>
                        </div>
                    </div>
                    <div class="card-text text-justify text-white mt-5 wow fadeInUp" data-wow-delay="0.1s">
                        <?= $our_bisnis2->deskripsi; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end position-relative z-1 mt-5">
            <div class="col-md-9">
                <div class="list wow fadeInUp" data-wow-delay="0.1s">
                    <ul>
                        <?php foreach ($divisi2 as $d2) { ?>
                        <li><span><?= $d2->title; ?></span></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="engine py-5">
    <div class="container">
        <div class="row gy-5 gy-lg-0">
            <div class="col-lg-6">
                <div class="img wow fadeInUp" data-wow-delay="0.1s">
                    <img src="https://admin103.partindomitrautama.co.id/upload/bisnis/<?= $our_bisnis3->image; ?>"
                        class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content text-end">
                    <div class="d-flex wow fadeInUp" data-wow-delay="0.1s">
                        <div class="header-title">
                            <h2 class="fw-900"><?= $our_bisnis3->title; ?></h2>
                        </div>
                        <div class="number ms-4">
                            <h2 class="fw-900 text-orange">03</h2>
                        </div>
                    </div>
                    <div class="card-text me-5 pe-3 mt-3">
                        <?= $our_bisnis3->deskripsi; ?>
                    </div>
                    <div class="list wow fadeInUp" data-wow-delay="0.1s">
                        <ul>
                            <?php foreach ($divisi3 as $d3) { ?>
                            <li><?= $d3->title; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="latest-news pb-5">
    <div class="container">
        <div class="header-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h2>News</h2>
        </div>
        <div class="row gy-5 gy-md-0">
            <?php
            function tanggal_indo($tanggal)
            {
                $bulan = array(
                    1 =>   'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                );
                $split = explode('-', $tanggal);
                return $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];
            }

            $noUrut = 1;
            foreach ($news as $news) {
                $tgl = date('Y-m-d', strtotime($news->created_date));
            ?>
            <?php if ($noUrut == 1) { ?>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="fist-news position-relative wow fadeInUp" data-wow-delay="0.1s">
                    <a href="<?= base_url("news/detail/$news->slug"); ?>" title="<?= $news->title; ?>">
                        <div class="entry-img position-relative">
                            <img src="https://admin103.partindomitrautama.co.id/upload/posts/<?= $news->image; ?>"
                                class="img-fluid" alt="">
                        </div>
                    </a>
                    <div class="content">
                        <div class="entry-date my-2">
                            <small>Post <?= tanggal_indo($tgl); ?></small>
                        </div>
                        <a href="<?= base_url("news/detail/$news->slug"); ?>" title="<?= $news->title; ?>">
                            <div class="entry-title">
                                <h4><?= $news->title; ?></h4>
                            </div>
                        </a>
                        <div class="entry-desc">
                            <p><?= strip_tags(substr($news->content, 0, 200)); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php } else if ($noUrut == 2) { ?>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="side-news">
                    <div class="row gy-4">
                        <div class="col-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="widget-scale">
                                <a href="<?= base_url("news/detail/$news->slug"); ?>" title="<?= $news->title; ?>">
                                    <div class="img">
                                        <img src="https://admin103.partindomitrautama.co.id/upload/posts/thumbnail/<?= $news->image; ?>"
                                            class="img-fluid" alt="">
                                    </div>
                                </a>
                                <div class="p-2">
                                    <div class="card-date d-flex align-items-center">
                                        Post <?= tanggal_indo($tgl); ?>
                                    </div>
                                    <a href="<?= base_url("news/detail/$news->slug"); ?>" title="<?= $news->title; ?>">
                                        <div class="card-title fw-800">
                                            <?= $news->title; ?>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php } else if ($noUrut == 5) { ?>
                        <div class="col-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="widget-scale">
                                <a href="<?= base_url("news/detail/$news->slug"); ?>" title="<?= $news->title; ?>">
                                    <div class="img">
                                        <img src="https://admin103.partindomitrautama.co.id/upload/posts/thumbnail/<?= $news->image; ?>"
                                            class="img-fluid" alt="">
                                    </div>
                                </a>
                                <div class="p-2">
                                    <div class="card-date d-flex align-items-center">
                                        Post <?= tanggal_indo($tgl); ?>
                                    </div>
                                    <a href="<?= base_url("news/detail/$news->slug"); ?>" title="<?= $news->title; ?>">
                                        <div class="card-title fw-800">
                                            <?= $news->title; ?>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php } else { ?>
            <div class="col-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="widget-scale">
                    <a href="<?= base_url("news/detail/$news->slug"); ?>" title="<?= $news->title; ?>">
                        <div class="img">
                            <img src="https://admin103.partindomitrautama.co.id/upload/posts/thumbnail/<?= $news->image; ?>"
                                class="img-fluid" alt="">
                        </div>
                    </a>
                    <div class="p-2">
                        <div class="card-date d-flex align-items-center">
                            Post <?= tanggal_indo($tgl); ?>
                        </div>
                        <a href="<?= base_url("news/detail/$news->slug"); ?>" title="<?= $news->title; ?>">
                            <div class="card-title fw-800">
                                <?= $news->title; ?>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php $noUrut++; ?>
            <?php } ?>
        </div>
    </div>
</section>