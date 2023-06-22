<section class="hero-career hero-business">
    <style>
        .hero-career {
            background-image: url("https://admin103.partindomitrautama.co.id/upload/deskripsi_content/<?= $dc10->image ?>");
        }
    </style>
    <div class="container">
        <div class="row align-items-center gy-4 gy-md-0 position-relative z-1">
            <div class="col-md-6">
                <div class="caption mb-3 wow fadeInRight" data-wow-delay="0.1s">
                    <span><?= $dc10->title; ?></span>
                </div>
                <h2 class="text-white wow fadeInLeft" data-wow-delay="0.1s"><?= $dc10->deskripsi; ?></h2>
                <div class="more-btn mt-5 pt-3 wow zoomInUp" data-wow-delay="0.1s">
                    <?php
                    $numberAPI = $this->data['website']->phone_operational;
                    $n1API = substr($numberAPI, 1);
                    $apiWa = $n1API;

                    $waCareer = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20PT.Partindo%20Mitra%20Utama...%21%0ASaya%20tertarik%20untuk%20bergabung%20dengan%20perusahaan.%20%0AMohon%20informasi%20lebih%20lanjut%20perihal%20ketersediaan%20posisi%20pekerjaan%20Terimakasih";
                    ?>
                    <a href="<?= $waCareer; ?>" target="_blank" class="fw-900">Join Us <i class="fas fa-chevron-circle-right ms-3"></i></a>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="career py-5">
    <div class="container">
        <div class="header-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h2>KARIR</h2>
        </div>
        <div class="row gy-4">
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

            foreach ($karir as $k) {
                $tgl = date('Y-m-d', strtotime($k->create_date));
            ?>
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="widget-animation widget-scale">
                        <div class="img">
                            <img src="https://admin103.partindomitrautama.co.id/upload/karir/<?= $k->image; ?>" class="img-fluid" alt="">
                            <div class="main-title">
                                <div class="card-title">
                                    LOWONGAN
                                </div>
                                <div class="card-position">
                                    <?= $k->posisi; ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-date">
                                Posted, <strong><?= tanggal_indo($tgl); ?></strong>
                            </div>
                            <div class="card-title fw-800">
                                <?= $k->posisi; ?>
                            </div>
                            <div class="more-btn text-end">
                                <a href="<?= base_url("career/detail_posisi/$k->slug"); ?>">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>