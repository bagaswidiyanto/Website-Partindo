<section class="single-news position-relative py-5">
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

    $tgl = date('Y-m-d', strtotime($news_detail->created_date));
    ?>
    <div class="container">
        <div class="news-area text-center">
            <div class="card-title">
                <?= $news_detail->title; ?>
            </div>
            <div class="card-date mt-4">
                <?= tanggal_indo($tgl); ?>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="card-image mt-4 mb-5">
                        <img src="https://admin103.partindomitrautama.co.id/upload/posts/<?= $news_detail->image; ?>" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
            <div class="card-text text-justify">
                <?= $news_detail->content; ?>
            </div>
        </div>
    </div>
</section>

<section class="popular-news py-5">
    <div class="container">
        <div class="header-title">
            <h2>Berita Populer</h2>
        </div>
        <div class="news-area pt-5">
            <div class="row gy-4">
                <?php
                function tanggal_indo_full($tanggal, $cetak_hari = false)
                {
                    $hari = array(
                        1 =>    'Senin',
                        'Selasa',
                        'Rabu',
                        'Kamis',
                        'Jumat',
                        'Sabtu',
                        'Minggu'
                    );

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
                    $split       = explode('-', $tanggal);
                    $tgl_indo = $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];

                    if ($cetak_hari) {
                        $num = date('N', strtotime($tanggal));
                        return $hari[$num] . ', ' . $tgl_indo;
                    }
                    return $tgl_indo;
                }

                foreach ($recent_news as $rn) {
                    $tglLates = date('Y-m-d', strtotime($rn->created_date));
                ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="widget-scale">
                            <div class="img">
                                <a href="<?= base_url("news/detail/$rn->slug"); ?>">
                                    <img src="https://admin103.partindomitrautama.co.id/upload/posts/thumbnail/<?= $rn->image; ?>" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <a href="<?= base_url("news/detail/$rn->slug"); ?>" title="<?= $rn->title; ?>">
                                        <div class="card-title fw-800">
                                            <?= $rn->title; ?>
                                        </div>
                                    </a>
                                    <div class="card-date d-flex align-items-center">
                                        <i class="fas fa-clock me-2"></i>
                                        <?= tanggal_indo_full($tglLates); ?>
                                    </div>
                                    <div class="card-text">
                                        <?= strip_tags(substr($rn->content, 0, 100)); ?>... <a href="<?= base_url("news/detail/$rn->slug"); ?>" title="<?= $rn->title; ?>" class="text-blue fw-bold">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>