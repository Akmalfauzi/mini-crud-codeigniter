<?= $this->include('partials/head') ?>

<style>
    /* Enhanced Dashboard Styles */
    .dashboard-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        margin: -1rem -1rem 2rem -1rem;
        padding: 2rem;
        border-radius: 0 0 20px 20px;
        position: relative;
        overflow: hidden;
    }
    
    .dashboard-header::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="3" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="80" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="40" cy="70" r="1" fill="rgba(255,255,255,0.1)"/></svg>');
        opacity: 0.6;
        pointer-events: none;
    }
    
    .stats-card {
        border: none;
        border-radius: 18px;
        transition: all 0.3s ease;
        overflow: hidden;
        position: relative;
        background: white;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
    }
    
    .stats-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }
    
    .stats-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: var(--card-gradient);
    }
    
    .stats-card.primary {
        --card-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    
    .stats-card.success {
        --card-gradient: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
    }
    
    .stats-card.warning {
        --card-gradient: linear-gradient(135deg, #ff6b6b 0%, #feca57 100%);
    }
    
    .stats-card.info {
        --card-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    }
    
    .stats-number {
        font-size: 2.5rem;
        font-weight: 700;
        margin: 0;
        background: var(--card-gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        line-height: 1;
    }
    
    .stats-label {
        font-size: 0.9rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #6c757d;
        margin-bottom: 0.5rem;
    }
    
    .stats-icon {
        width: 60px;
        height: 60px;
        border-radius: 15px;
        background: var(--card-gradient);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        margin-left: auto;
    }
    
    .quick-action-card {
        border: none;
        border-radius: 18px;
        background: white;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        transition: all 0.3s ease;
        overflow: hidden;
        position: relative;
    }
    
    .quick-action-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }
    
    .action-btn {
        border: none;
        border-radius: 12px;
        padding: 1rem 1.5rem;
        font-weight: 600;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        color: white;
    }
    
    .action-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s ease;
    }
    
    .action-btn:hover::before {
        left: 100%;
    }
    
    .action-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        color: white;
    }
    
    .action-btn.primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    
    .action-btn.success {
        background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
    }
    
    .action-btn.info {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    }
    
    .action-btn.warning {
        background: linear-gradient(135deg, #ff6b6b 0%, #feca57 100%);
    }
    
    .welcome-text {
        position: relative;
        z-index: 1;
    }
    
    .dashboard-time {
        font-size: 0.9rem;
        opacity: 0.9;
    }
    
    .progress-thin {
        height: 4px;
        border-radius: 2px;
        background-color: #e9ecef;
        margin-top: 0.5rem;
    }
    
    .progress-thin .progress-bar {
        border-radius: 2px;
        background: var(--card-gradient);
    }
    

    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .animate-card {
        animation: fadeInUp 0.6s ease-out;
    }
    
    .animate-card:nth-child(1) { animation-delay: 0.1s; }
    .animate-card:nth-child(2) { animation-delay: 0.2s; }
    .animate-card:nth-child(3) { animation-delay: 0.3s; }
    .animate-card:nth-child(4) { animation-delay: 0.4s; }
    
    @media (max-width: 768px) {
        .dashboard-header {
            margin: -1rem -1rem 1rem -1rem;
            padding: 1.5rem;
        }
        
        .stats-number {
            font-size: 2rem;
        }
        
        .stats-icon {
            width: 50px;
            height: 50px;
            font-size: 1.2rem;
        }
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <?= $this->include('partials/side_nav') ?>
            
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Dashboard Header -->
                <div class="dashboard-header">
                    <div class="welcome-text">
                        <h1 class="h2 mb-2">
                            <i class="fas fa-tachometer-alt me-3"></i>
                            Selamat Datang di Dashboard
                        </h1>
                        <p class="mb-1">Kelola artikel dan feedback dengan mudah</p>
                        <div class="dashboard-time">
                            <i class="fas fa-calendar-alt me-2"></i>
                            <?php 
                                $timezone = new DateTimeZone('Asia/Jakarta');
                                $date = new DateTime('now', $timezone);
                                
                                $bulan = [
                                    1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April',
                                    5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
                                    9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
                                ];
                                
                                $hari = $date->format('d');
                                $bulan_nama = $bulan[(int)$date->format('m')];
                                $tahun = $date->format('Y');
                                $waktu = $date->format('H:i');
                                
                                echo "$hari $bulan_nama $tahun, $waktu";
                            ?> WIB
                        </div>
                    </div>
                </div>

                <!-- Statistics Cards -->
                <div class="row mb-4">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stats-card primary h-100 animate-card">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="stats-label">Total Artikel</div>
                                        <div class="stats-number"><?= $article_count ?></div>
                                        <div class="progress-thin">
                                            <div class="progress-bar" style="width: 85%"></div>
                                        </div>
                                        <small class="text-muted mt-1 d-block">Semua artikel dalam sistem</small>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stats-icon">
                                            <i class="fas fa-newspaper"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stats-card success h-100 animate-card">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="stats-label">Artikel Published</div>
                                        <div class="stats-number"><?= $published_count ?></div>
                                        <div class="progress-thin">
                                            <div class="progress-bar" style="width: <?= $article_count > 0 ? ($published_count / $article_count * 100) : 0 ?>%"></div>
                                        </div>
                                        <small class="text-muted mt-1 d-block">Artikel yang sudah dipublikasi</small>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stats-icon">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stats-card warning h-100 animate-card">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="stats-label">Artikel Draft</div>
                                        <div class="stats-number"><?= $draft_count ?></div>
                                        <div class="progress-thin">
                                            <div class="progress-bar" style="width: <?= $article_count > 0 ? ($draft_count / $article_count * 100) : 0 ?>%"></div>
                                        </div>
                                        <small class="text-muted mt-1 d-block">Artikel yang belum dipublikasi</small>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stats-icon">
                                            <i class="fas fa-edit"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card stats-card info h-100 animate-card">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="stats-label">Total Feedback</div>
                                        <div class="stats-number"><?= $feedback_count ?></div>
                                        <div class="progress-thin">
                                            <div class="progress-bar" style="width: 70%"></div>
                                        </div>
                                        <small class="text-muted mt-1 d-block">Masukan dari pengguna</small>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stats-icon">
                                            <i class="fas fa-comments"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="quick-action-card">
                            <div class="card-header bg-transparent border-0 pt-4 px-4">
                                <h5 class="card-title mb-0">
                                    <i class="fas fa-bolt me-2 text-primary"></i>
                                    Aksi Cepat
                                </h5>
                                <p class="text-muted mb-0 mt-1">Kelola konten dengan satu klik</p>
                            </div>
                            <div class="card-body p-4">
                                <div class="row g-3">
                                    <div class="col-md-3">
                                        <a href="<?= base_url('/admin/article/create') ?>" class="action-btn primary w-100">
                                            <i class="fas fa-plus me-2"></i>
                                            <span>Buat Artikel Baru</span>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="<?= base_url('/admin/article') ?>" class="action-btn success w-100">
                                            <i class="fas fa-list me-2"></i>
                                            <span>Kelola Artikel</span>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="<?= base_url('/admin/feedback') ?>" class="action-btn info w-100">
                                            <i class="fas fa-comments me-2"></i>
                                            <span>Lihat Feedback</span>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="<?= base_url('/feedback') ?>" class="action-btn warning w-100" target="_blank">
                                            <i class="fas fa-paper-plane me-2"></i>
                                            <span>Form Feedback</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </main>
        </div>
    </div>

<?= $this->include('partials/footer') ?> 