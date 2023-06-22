<section class="other-hero-header hero-profile">
    <style>
        .other-hero-header.hero-profile {
            background-image: url("https://admin103.partindomitrautama.co.id/upload/deskripsi_content/<?= $dc4->image ?>");
        }
    </style>
</section>


<section class="profile py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <div class="widget">
                    <div class="img wow fadeInUp" data-wow-delay="0.1s">
                        <img src="https://admin103.partindomitrautama.co.id/upload/<?= $website->image; ?>" class="img-fluid" alt="">
                    </div>
                    <div class="header-title py-5 wow fadeInUp" data-wow-delay="0.1s">
                        <h2><?= $profile->title; ?></h2>
                    </div>
                    <div class="card-text text-justify wow fadeInUp" data-wow-delay="0.1s">
                        <?= $profile->deskripsi; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="visi-misi py-5 bg-grey">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-3">
                <div class="header-title text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h2>VISI - MISI</h2>
                </div>
            </div>
        </div>
        <div class="visi mt-5">
            <div class="row gy-4 gy-md-0">
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="widget-animation">
                        <a href="https://admin103.partindomitrautama.co.id/upload/visi_misi/<?= $visi->image ?>" data-fancybox="<?= $visi->nama; ?>" data-filter="#content_C" data-caption="">
                            <div class="img">
                                <img src="https://admin103.partindomitrautama.co.id/upload/visi_misi/<?= $visi->image ?>" class="img-fluid" alt="">
                            </div>
                        </a>
                        <div class="main-title">
                            <h3 class="text-white mb-0"><?= $visi->nama; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="content ps-4">
                        <div class="heading">
                            <h2 class="text-blue fw-900"><?= $visi->nama; ?></h2>
                        </div>
                        <?= $visi->deskripsi; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="misi mt-5">
            <div class="row gy-4 gy-md-0 justify-content-end">
                <div class="col-md-4 d-block d-md-none wow fadeInUp" data-wow-delay="0.1s">
                    <div class="widget-animation">
                        <a href="https://admin103.partindomitrautama.co.id/upload/visi_misi/<?= $misi->image ?>" data-fancybox="<?= $misi->nama; ?>" data-filter="#content_C" data-caption="">
                            <div class="img">
                                <img src="https://admin103.partindomitrautama.co.id/upload/visi_misi/<?= $misi->image ?>" class="img-fluid" alt="">
                            </div>
                        </a>
                        <div class="main-title">
                            <h3 class="text-white mb-0"><?= $misi->nama; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="content pe-4">
                        <div class="heading">
                            <h2 class="text-blue fw-900"><?= $misi->nama; ?></h2>
                        </div>
                        <?= $misi->deskripsi; ?>
                    </div>
                </div>
                <div class="col-md-4 d-none d-md-block wow fadeInUp" data-wow-delay="0.1s">
                    <div class="widget-animation">
                        <a href="https://admin103.partindomitrautama.co.id/upload/visi_misi/<?= $misi->image ?>" data-fancybox="<?= $misi->nama; ?>" data-filter="#content_C" data-caption="">
                            <div class="img">
                                <img src="https://admin103.partindomitrautama.co.id/upload/visi_misi/<?= $misi->image ?>" class="img-fluid" alt="">
                            </div>
                        </a>
                        <div class="main-title">
                            <h3 class="text-white mb-0"><?= $misi->nama; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>