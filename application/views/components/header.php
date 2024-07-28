<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profil Sekolah</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .header, .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
        }
        .banner img {
            width: 100%;
            height: auto;
        }
        .academic-info {
            background-color: #f1f1f1;
            padding: 40px 0;
        }
        .academic-info h3 {
            margin-bottom: 30px;
        }
        .academic-info .card {
            transition: transform 0.2s;
        }
        .academic-info .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
<header class="bg-light py-2 border-bottom">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <img src="https://1.bp.blogspot.com/-MjZy_XhCY4k/W5jG0F-7cHI/AAAAAAAADt0/om1i_IsJvUknsQJgmpKNpPXwtN9uxe6mwCLcBGAs/s1600/Logo%2BKemendiknas.png" alt="Logo" height="50">
                <h5 class="ms-3 mb-0">Sekolah Menengah Pertama<br><span class="text-muted">Akreditasi A</span></h5>
            </div>
            <div class="d-flex align-items-center">
                <a href="mailto:sekolahmenegahpertama@gmail.com" class="text-muted me-3"><i class="fas fa-envelope"></i></a>
                <a href="#" class="text-muted me-3"><i class="fab fa-instagram"></i> </a>
                <a href="#" class="text-muted me-3"><i class="fas fa-phone-alt"></i></a>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Berita</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                            <li><a class="dropdown-item" href="#">Visi dan Misi</a></li>
                            <li><a class="dropdown-item" href="#">Tentang Sekolah</a></li>
                            <li><a class="dropdown-item" href="#">Guru</a></li>
                            <li><a class="dropdown-item" href="#">Staff dan Tata Usaha</a></li>
                            <li><a class="dropdown-item" href="#">Tim Pengembang Sekolah</a></li>
                        
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Galeri
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                            <li><a class="dropdown-item" href="#">Video</a></li>
                            <li><a class="dropdown-item" href="#">Foto</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Akademik
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                            <li><a class="dropdown-item" href="#">Prestasi</a></li>
                            <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sarana Prasana
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                            <li><a class="dropdown-item" href="#">Mushola</a></li>
                            <li><a class="dropdown-item" href="#">Lab Komputer</a></li>
                            <li><a class="dropdown-item" href="#">Perpustakaan</a></li>
                            <li><a class="dropdown-item" href="#">Lab IPA</a></li>
                        </ul>
                    </li>
                    <!-- Tambahkan menu lainnya sesuai kebutuhan -->
                </ul>
                <form class="d-flex ms-3">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <a href="#" class="btn btn-primary ms-3">Pendaftaran</a>
            </div>
        </div>
    </nav>
