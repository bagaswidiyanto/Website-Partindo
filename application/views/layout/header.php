<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <?php
    if ($this->uri->segment(1) == '') {
        $segment1 = $website->metaTitle;
        $metaKey = $website->metaKeywords;
        $metaDes = $website->metaDescription;
    } else if ($this->uri->segment(1) == 'profile') {
        $segment1 = $website->metaTitle . ' | Profile';
        $metaKey = $website->metaKeywords;
        $metaDes = $website->metaDescription;
    } elseif ($this->uri->segment(1) == 'part_division') {
        $segment1 = $website->metaTitle . ' | Part Division';
        $metaKey = $website->metaKeywords;
        $metaDes = $website->metaDescription;
    } elseif ($this->uri->segment(1) == 'engine_hydraulic') {
        $segment1 = $website->metaTitle . ' | ENGINE, HYDRAUIC & FABRICATION DIVISION';
        $metaKey = $website->metaKeywords;
        $metaDes = $website->metaDescription;
    } elseif ($this->uri->segment(1) == 'genset_electrical') {
        $segment1 = $website->metaTitle . ' | GENSET & ELECTRICAL DIVISION';
        $metaKey = $website->metaKeywords;
        $metaDes = $website->metaDescription;
    } elseif ($this->uri->segment(1) == 'media') {
        $segment1 = $website->metaTitle . ' | Media';
        $metaKey = $website->metaKeywords;
        $metaDes = $website->metaDescription;
    } elseif ($this->uri->segment(1) == 'career') {
        $segment1 = $website->metaTitle . ' | Career';
        $metaKey = $website->metaKeywords;
        $metaDes = $website->metaDescription;
    } elseif ($this->uri->segment(1) == 'news') {
        $segment1 = $website->metaTitle . ' | News';
        $metaKey = $website->metaKeywords;
        $metaDes = $website->metaDescription;
    } elseif ($this->uri->segment(1) == 'contact') {
        $segment1 = $website->metaTitle . ' | Contact';
        $metaKey = $website->metaKeywords;
        $metaDes = $website->metaDescription;
    }
    ?>

    <?php if ($this->uri->segment(2) != 'detail' && $this->uri->segment(2) != 'detail_posisi') { ?>
        <title><?= $segment1; ?></title>
        <meta name="keywords" content="<?= $metaKey; ?>">
        <meta name="description" content="<?= $metaDes; ?>">


        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?= $website->metaTitle; ?>" />
        <meta property="og:description" content="<?= $website->metaDescription; ?>" />
        <meta property="og:url" content="http://partindomitrautama.co.id" />
        <meta property="og:image" content="<?= base_url() ?>assets/img/og-image.png" />
    <?php } ?>

    <?php
    if ($this->uri->segment(2) == 'detail') {
        $meta = $this->db->get_where('tbl_posts', array('slug' => $this->uri->segment(3)))->row();
        echo '<title>' . $meta->metaTitle . ' - ' . $website->name . '</title>
        <meta name="keywords" content="' . $meta->metaKeywords . $website->metaKeywords . '">
        <meta name="description" content="' . $meta->metaDescription . $website->metaDescription . '">
        <meta property="og:title" content="' . $meta->metaTitle . '" />
        <meta property="og:description" content="' . $meta->metaDescription . $website->metaDescription . '" />
        <meta property="og:image" content="https://admin103.partindomitrautama.co.id/upload/posts/thumbnail/' . $meta->image . '" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="300" />
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="' . base_url() . 'news/detail/' . $meta->slug . '">
        <meta name="twitter:title" content="' . $meta->metaTitle . '">
        <meta name="twitter:description" content="' . $meta->metaDescription . $website->metaDescription . '">
        <meta name="twitter:image" content="https://admin103.partindomitrautama.co.id/upload/posts/thumbnail/' . $meta->image . '">';
    }
    if ($this->uri->segment(2) == 'detail_posisi') {
        $metaKarir = $this->db->get_where('tbl_karir', array('slug' => $this->uri->segment(3)))->row();
        echo '<title>' . $metaKarir->posisi . ' - ' . $website->name . '</title>
        <meta name="keywords" content="' . $metaKarir->metaKeywords . '">
        <meta name="description" content="' . $metaKarir->metaDescription . '">
        <meta property="og:title" content="' . $metaKarir->metaTitle . '" />
        <meta property="og:description" content="' . $metaKarir->metaDescription . '" />
        <meta property="og:image" content="https://admin103.partindomitrautama.co.id/upload/karir/' . $website->image . '" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="300" />
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="' . base_url() . 'career/detail_posisi/' . $metaKarir->slug . '">
        <meta name="twitter:title" content="' . $metaKarir->metaTitle . '">
        <meta name="twitter:description" content="' . $metaKarir->metaDescription . '">
        <meta name="twitter:image" content="https://admin103.partindomitrautama.co.id/upload/karir/' . $website->image . '">';
    }
    ?>

    <!-- Favicon -->
    <link href="<?= base_url(); ?>assets/img/logo-url.png" sizes="32x32" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,600,700,800,900' rel='stylesheet'>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/lib/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/profile.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/part-division.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/media.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/career.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/news.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/swiper.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/whatsapp_chat.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container container-1558 d-block">
            <div class="logo mb-2">
                <a href="<?= base_url(); ?>" class="navbar-logo d-flex align-items-center" aria-label="Logo">
                    <img src="https://admin103.partindomitrautama.co.id/upload/<?= $website->image; ?>" class="me-3" alt="">
                </a>
            </div>
            <div class="menu-bar d-flex align-items-center">
                <a href="<?= base_url(); ?>" class="navbar-logo d-flex align-items-center" aria-label="Logo">
                    <img src="https://admin103.partindomitrautama.co.id/upload/<?= $website->image; ?>" class="me-3" alt="">
                </a>
                <a href="<?= base_url(); ?>" class="navbar-brand d-flex align-items-center" aria-label="Logo">
                    <img src="<?= base_url(); ?>assets/img/logo.png" alt="">
                    <!-- <h1 class="m-0">Gardener</h1> -->
                </a>
                <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-label="navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
                    <?php $hal = $this->uri->segment(1); ?>
                    <div class="navbar-nav p-0">
                        <a href="<?= base_url() ?>" class="nav-item nav-link <?= $hal == '' ? 'active'  : ''; ?>">Home</a>
                        <a href="<?= base_url("profile") ?>" class="nav-item nav-link <?= $hal == 'profile' ? 'active'  : ''; ?>">Profile</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle <?= $hal == 'part_division' ? 'active' : ($hal == 'engine_hydraulic' ? 'active' : ($hal == 'genset_electrical' ? 'active' : '')); ?>" data-bs-toggle="dropdown">Our Business</a>
                            <div class="dropdown-menu m-0">
                                <a href="<?= base_url("part_division") ?>" class="dropdown-item <?= $hal == 'part_division' ? 'active'  : ''; ?>">PART
                                    DIVISION</a>
                                <a href="<?= base_url("engine_hydraulic") ?>" class="dropdown-item <?= $hal == 'engine_hydraulic' ? 'active'  : ''; ?>">ENGINE,
                                    HYDRAUIC & FABRICATION DIVISION </a>
                                <a href="<?= base_url("genset_electrical") ?>" class="dropdown-item <?= $hal == 'genset_electrical' ? 'active'  : ''; ?>">GENSET &
                                    ELECTRICAL DIVISION</a>
                            </div>
                        </div>
                        <a href="<?= base_url("media") ?>" class="nav-item nav-link <?= $hal == 'media' ? 'active'  : ''; ?>">Media</a>
                        <a href="<?= base_url("career") ?>" class="nav-item nav-link <?= $hal == 'career' ? 'active'  : ''; ?>">Career</a>
                        <a href="<?= base_url("news") ?>" class="nav-item nav-link <?= $hal == 'news' ? 'active'  : ''; ?>">News</a>
                        <a href="<?= base_url("contact") ?>" class="nav-item nav-link <?= $hal == 'contact' ? 'active'  : ''; ?>">Contact</a>
                    </div>
                    <div class="top-contact ms-auto position-relative">
                        <div class="heading">
                            <p>Contact Us</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-phone-alt me-2"></i>
                            <div>
                                <p><?= $noOffice; ?></p>
                                <p><?= $noOperational; ?></p>
                            </div>
                            <div class="d-flex ms-4">
                                <?php foreach ($sosmed as $sosmed) { ?>
                                    <a class="btn btn-outline-light btn-social" href="<?= $sosmed->link; ?>" title="<?= $sosmed->name; ?>" target="_blank"><i class="<?= $sosmed->icon; ?>"></i></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>