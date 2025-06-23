<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini CRUD App - CodeIgniter 4</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .hero-section {
            padding: 100px 0;
            color: white;
            text-align: center;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .feature-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
        }
        
        .feature-card .card-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .feature-card .card-content .description {
            flex-grow: 1;
            margin-bottom: 1.5rem;
        }
        
        .feature-card .card-footer-btn {
            margin-top: auto;
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            margin: 0 auto 1.5rem;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 50px;
            padding: 15px 40px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(102, 126, 234, 0.4);
            background: linear-gradient(135deg, #5a6fd8 0%, #6a4190 100%);
        }
        
        .btn-outline-light {
            border: 2px solid white;
            border-radius: 50px;
            padding: 15px 40px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-outline-light:hover {
            background: white;
            color: #667eea;
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(255, 255, 255, 0.3);
        }
        
        .footer {
            background: rgba(0, 0, 0, 0.1);
            padding: 2rem 0;
            color: white;
            text-align: center;
            margin-top: 4rem;
        }
        
        .stats-badge {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 10px 20px;
            margin: 0 10px;
            display: inline-block;
            color: white;
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .feature-card {
                margin-bottom: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="hero-title">
                        <i class="fas fa-rocket me-3"></i>
                        Mini CRUD App
                    </h1>
                    <p class="hero-subtitle">
                        Aplikasi web berbasis CodeIgniter 4 dengan fitur CRUD artikel dan sistem feedback
                    </p>
                    
                    <div class="mb-4">
                        <span class="stats-badge">
                            <i class="fas fa-code me-2"></i>
                            CodeIgniter 4
                        </span>
                        <span class="stats-badge">
                            <i class="fas fa-paint-brush me-2"></i>
                            Bootstrap 5
                        </span>
                        <span class="stats-badge">
                            <i class="fas fa-magic me-2"></i>
                            SweetAlert2
                        </span>
                    </div>
                    
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="<?= base_url('/admin') ?>" class="btn btn-primary">
                            <i class="fas fa-tachometer-alt me-2"></i>
                            Admin Panel
                        </a>
                        <a href="<?= base_url('/feedback') ?>" class="btn btn-outline-light">
                            <i class="fas fa-comments me-2"></i>
                            Feedback Form
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <div class="card-content">
                        <h4 class="mb-3">Manajemen Artikel</h4>
                        <p class="text-muted description">
                            Kelola artikel dengan mudah. Buat, edit, hapus, dan atur status publikasi artikel dengan interface yang user-friendly dan modern.
                        </p>
                        <div class="card-footer-btn">
                            <a href="<?= base_url('/admin/article') ?>" class="btn btn-primary btn-sm">
                                <i class="fas fa-arrow-right me-2"></i>
                                Kelola Artikel
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 d-flex">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div class="card-content">
                        <h4 class="mb-3">Sistem Feedback</h4>
                        <p class="text-muted description">
                            Terima masukan dari pengguna melalui form feedback yang dilengkapi dengan validasi lengkap dan notifikasi modern.
                        </p>
                        <div class="card-footer-btn">
                            <a href="<?= base_url('/feedback') ?>" class="btn btn-primary btn-sm">
                                <i class="fas fa-paper-plane me-2"></i>
                                Kirim Feedback
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 d-flex">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="card-content">
                        <h4 class="mb-3">Dashboard Analytics</h4>
                        <p class="text-muted description">
                            Pantau statistik artikel dan feedback dengan dashboard yang informatif, analytics mendalam, dan mudah dibaca.
                        </p>
                        <div class="card-footer-btn">
                            <a href="<?= base_url('/admin/dashboard') ?>" class="btn btn-primary btn-sm">
                                <i class="fas fa-chart-bar me-2"></i>
                                Lihat Dashboard
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Tech Stack Section -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="feature-card">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="mb-3">
                                <i class="fas fa-tools me-2 text-primary"></i>
                                Teknologi yang Digunakan
                            </h3>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-2"></i>
                                    <strong>CodeIgniter 4</strong> - PHP Framework modern dengan MVC pattern
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-2"></i>
                                    <strong>Bootstrap 5</strong> - CSS Framework untuk UI yang responsive
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-2"></i>
                                    <strong>SweetAlert2</strong> - Library untuk notifikasi yang menarik
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-2"></i>
                                    <strong>Font Awesome</strong> - Icon library untuk UI yang lebih baik
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-2"></i>
                                    <strong>MySQL</strong> - Database untuk menyimpan data aplikasi
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <div class="feature-icon mx-auto" style="width: 60px; height: 60px; font-size: 1.5rem;">
                                        <i class="fab fa-php"></i>
                                    </div>
                                    <small class="text-muted">PHP</small>
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="feature-icon mx-auto" style="width: 60px; height: 60px; font-size: 1.5rem;">
                                        <i class="fab fa-bootstrap"></i>
                                    </div>
                                    <small class="text-muted">Bootstrap</small>
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="feature-icon mx-auto" style="width: 60px; height: 60px; font-size: 1.5rem;">
                                        <i class="fab fa-js"></i>
                                    </div>
                                    <small class="text-muted">JavaScript</small>
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="feature-icon mx-auto" style="width: 60px; height: 60px; font-size: 1.5rem;">
                                        <i class="fas fa-database"></i>
                                    </div>
                                    <small class="text-muted">MySQL</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="mb-2">
                        <i class="fas fa-code me-2"></i>
                        Dibuat dengan ❤️ menggunakan CodeIgniter <?= CodeIgniter\CodeIgniter::CI_VERSION ?>
                    </p>
                    <p class="mb-0">
                        <small>
                            <i class="fas fa-clock me-1"></i>
                            Page rendered in {elapsed_time} seconds using {memory_usage} MB of memory.
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
