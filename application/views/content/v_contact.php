<section class="hero-contact">
    <style>
        .hero-contact {
            background-image: url("https://admin103.partindomitrautama.co.id/upload/deskripsi_content/<?= $dc12->image ?>");
        }
    </style>
    <div class="container">
        <div class="position-relative z-1">
            <div class="heading position-relative ps-3 wow zoomInLeft" data-wow-delay="0.1s">
                <h2 class="text-white"><?= $dc12->title; ?></h2>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 col-lg-5">
                    <div class="address wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="heading mb-3">
                            <span class="fs-5 text-orange fw-800">Office</span>
                        </div>
                        <div class="d-flex content text-white">
                            <i class="fas fa-map-marker-alt me-3 mt-2"></i>
                            <div class="card-text">
                                <?= $website->address_office; ?>
                                <p>Phone : <?= $noOffice; ?></p>
                                <p>Email : <?= $website->email; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 mt-4 mt-md-0">
                    <div class="address wow fadeInRight" data-wow-delay="0.1s">
                        <div class="heading mb-3">
                            <span class="fs-5 text-orange fw-800">Operational</span>
                        </div>
                        <div class="d-flex content text-white">
                            <i class="fas fa-map-marker-alt me-3 mt-2"></i>
                            <div class="card-text">
                                <?= $website->address_operational; ?>
                                <p>Phone : <?= $noOperational; ?></p>
                                <p>Email : <?= $website->email; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact py-5">
    <div class="container">
        <div class="header-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h2>Hubungi Kami</h2>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="card rounded-10 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card-body">
                        <form id="help" class="form-contact">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="">Your Name</label>
                                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="">Your Email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="">Subject</label>
                                <input type="text" name="subjek" id="subjek" class="form-control" placeholder="Subject">
                            </div>
                            <div class="mb-3">
                                <label for="">Message</label>
                                <textarea name="message" id="message" class="form-control" rows="7" placeholder="Message"></textarea>
                            </div>
                            <div class="mb-3 mt-5 text-end">
                                <button type="submit" class="bg-orange px-5 py-2 fw-bold rounded-10 border-0">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mt-5 mt-lg-0">
                <div class="maps mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="heading mb-4">
                        <h3>Office Map</h3>
                    </div>
                    <?= $website->map_office; ?>
                </div>
                <div class="maps wow fadeInUp" data-wow-delay="0.1s">
                    <div class="heading mb-4">
                        <h3>Operational Map</h3>
                    </div>
                    <?= $website->map_operational; ?>
                </div>
            </div>
        </div>
    </div>
</section>