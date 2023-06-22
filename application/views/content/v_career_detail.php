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


<section class="detail-career py-5">
    <div class="container">
        <div class="header-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h2>KARIR</h2>
        </div>

        <?php
        if (isset($msg)) {
            header("refresh:3;" . base_url('career'));
        }
        ?>

        <div class="mt-2 wow fadeInUp" data-wow-delay="0.1s">
            <strong><?= @$msg; ?></strong>
        </div>

        <div class="position">
            <div class="card-title wow fadeInUp" data-wow-delay="0.1s">
                <?= $career_detail->posisi; ?>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="location wow fadeInUp" data-wow-delay="0.1s">
                        <?php if ($career_detail->lokasi == 'Office') { ?>
                            <p class="fw-800">Office</p>
                            <?= $website->address_office; ?>
                        <?php } else { ?>
                            <p class="fw-800">Operational</p>
                            <?= $website->address_operational; ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="job-description py-3 wow fadeInUp" data-wow-delay="0.1s">
            <div class="header-title">
                <h2>Job Description</h2>
            </div>
            <div class="mt-4">
                <?= $career_detail->job_deskripsi; ?>
            </div>
        </div>
        <div class="kualifikasi py-3 wow fadeInUp" data-wow-delay="0.1s">
            <h3>Minimun Qualifications</h3>
            <div class="mt-4">
                <?= $career_detail->kualifikasi; ?>
            </div>
        </div>

        <div class="tunjangan py-3 wow fadeInUp" data-wow-delay="0.1s">
            <h3>Tunjangan</h3>
            <div class="mt-4">
                <?= $career_detail->tunjangan; ?>
            </div>
        </div>

        <div class="more-btn text-center mt-5 wow zoomIn" data-wow-delay="0.1s">
            <a href="javascript(void)" class="px-5 fw-bold" data-bs-toggle="modal" data-bs-target="#modalResume">Apply
                Now</a>
        </div>

        <div class="more-btn mt-5">
            <a href="<?= base_url("career"); ?>" class="bg-danger py-2"><i class="fas fa-angle-double-left me-2"></i>
                Back</a>
        </div>
    </div>
</section>

<!-- Modal Login -->
<div class="modal modal-resume animated zoomIn" id="modalResume">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header border-0">
                <!-- <h4 class="modal-title text-dark">
                    Unggah Formulir Registrasi Vendor                </h4> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body px-3 px-md-5">
                <div class="modal-header d-block p-0">
                    <h2 class="text-center mb-4 fw-900">FORM APPLY JOB</h2>
                    <h6>Kamu akan melamar ke PT. Partindo Mitra Utama sebagai <br> (<span class="fw-bold"><?= $career_detail->posisi; ?></span>)</h6>
                </div>


                <div class="form-box py-5">
                    <form method="post" action="<?= base_url(); ?>career/resume" class="form-prevent" enctype="multipart/form-data">
                        <input type="hidden" name="posisi" value="<?= $career_detail->posisi; ?>">

                        <div class="mb-0">
                            <div class="label d-flex align-items-center">
                                <h4 class="ms-3">Resume</h4><span class="text-danger">*</span>
                            </div>
                            <div class="box-file">
                                <input type="file" id="image_file" name="file" class="ms-4 image_file" required>
                                <span>Upload File <i class="fas fa-chevron-right ms-4"></i></span>
                            </div>
                        </div>

                        <div class="py-4 upld">
                            <p>*Upload file dalam format PDF max 5MB, upload sekali saja dan kamu dapat menggunakannya
                                untuk lamaran berikutnya. </p>
                        </div>

                        <div class="mb-3">
                            <div class="label d-flex align-items-center">
                                <h4 class="ms-3">No. Telp</h4><span class="text-danger">*</span>
                            </div>
                            <div class="phone">
                                <input type="text" name="telp" id="telp" class="border-0" placeholder="No. WhatsApp" required>
                            </div>
                            <div class="note pt-3">
                                <p>*Harap gunakan nomor telepon yg valid</p>
                                <p>perusahaan memerlukan informasi ini untuk menghubungimu lebih cepat</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h4>Write your cover letter<span class="text-danger">*</span></h4>
                            <textarea name="surat_lamaran" class="form-control mt-4" rows="7" required></textarea>
                        </div>
                        <div class="text-center mt-5">
                            <input type="submit" id="submit" class="btn bg-orange py-3 px-5 rounded-10 border-0" value="LAMAR SEKARANG">
                        </div>
                    </form>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
            </div>

        </div>
    </div>
</div>


<script>
    (function() {
        $('.form-prevent').on('submit', function() {
            $('#submit').attr('disabled', 'true');
        })
    })();

    $('input#telp').bind("change keyup", function(event) {
        // skip for arrow keys
        if (event.which >= 37 && event.which <= 40) {
            event.preventDefault();
        }

        $(this).val(function(index, value) {
            return value
                .replace(/\D/g, "")
                .replace(/([0-9])$/, '$1')
                /*.replace(/([0-9])([0-9]{3})$/, '$1.$2') //pakai sen dibelakangnya  */
                .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, "");
        });

    });
</script>