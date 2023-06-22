<section class="hero-news hero-business">
    <style>
    .hero-news {
        background-image: url("https://admin103.partindomitrautama.co.id/upload/deskripsi_content/<?= $dc11->image ?>");
    }
    </style>
</section>

<?php
function tanggal_indo($tanggal, $cetak_hari = false)
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
?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="headline wow fadeInUp" data-wow-delay="0.1s">
                    <div class="widget-scale">
                        <div class="img">
                            <a href="<?= base_url("news/detail/$headline->slug"); ?>" title="<?= $headline->title; ?>">
                                <img src="https://admin103.partindomitrautama.co.id/upload/posts/thumbnail/<?= $headline->image; ?>"
                                    class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="<?= base_url("news/detail/$headline->slug"); ?>" title="<?= $headline->title; ?>">
                                <div class="card-title fw-800">
                                    <?= $headline->title; ?>
                                </div>
                            </a>
                            <div class="card-date d-flex align-items-center">
                                <i class="fas fa-clock me-2"></i>
                                <?php $tglheadline = date('Y-m-d', strtotime($headline->created_date)) ?>
                                <?= tanggal_indo($tglheadline); ?>
                            </div>
                            <div class="card-text">
                                <?= strip_tags(substr($headline->content, 0, 200)); ?>... <a
                                    href="<?= base_url("news/detail/$headline->slug"); ?>"
                                    title="<?= $headline->title; ?>" class="text-blue fw-bold">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mt-5 mt-md-0">
                <div class="side-latest-news ps-0 ps-md-5">
                    <div class="header-title">
                        <h4>Berita Terbaru</h4>
                    </div>
                    <ul>
                        <?php foreach ($latest_news as $ln) { ?>
                        <li class="wow fadeInUp" data-wow-delay="0.1s"><a
                                href="<?= base_url("news/detail/$ln->slug"); ?>"
                                title="<?= $ln->title; ?>"><?= $ln->title; ?></a></li>
                        <?php } ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="news pb-5">
    <div class="container">
        <div class="row gy-4">
            <?php


            if (($news->num_rows()) > 0) {
                foreach ($news->result() as $news) {
                    $tgl = date('Y-m-d', strtotime($news->created_date));
            ?>
            <div class="col-lg-6  wow fadeInUp" data-wow-delay="0.1s">
                <div class="widget-scale">
                    <div class="row">
                        <div class="col-4">
                            <div class="img">
                                <a href="<?= base_url("news/detail/$news->slug"); ?>" title="<?= $news->title; ?>">
                                    <img src="https://admin103.partindomitrautama.co.id/upload/posts/thumbnail/<?= $news->image; ?>"
                                        class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <a href="<?= base_url("news/detail/$news->slug"); ?>" title="<?= $news->title; ?>">
                                    <div class="card-title fw-800">
                                        <?= $news->title; ?>
                                    </div>
                                </a>
                                <div class="card-date d-flex align-items-center">
                                    <i class="fas fa-clock me-2"></i>
                                    <?= tanggal_indo($tgl); ?>
                                </div>
                                <div class="card-text">
                                    <?= strip_tags(substr($news->content, 0, 100)); ?>... <a
                                        href="<?= base_url("news/detail/$news->slug"); ?>" title="<?= $news->title; ?>"
                                        class="text-blue fw-bold">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }
            }
            ?>
        </div>
        <nav class="news-pagination justify-content-center d-flex">
            <?= $pagination; ?>
        </nav>
    </div>
</section>