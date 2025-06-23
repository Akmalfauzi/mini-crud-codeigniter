<?= $this->include('partials/head') ?>

<style>
    /* Modern Article List Styles */
    .page-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        margin: -1rem -1rem 2rem -1rem;
        padding: 2rem;
        border-radius: 0 0 20px 20px;
        position: relative;
        overflow: hidden;
    }
    
    .page-header::before {
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
    
    .page-header h1 {
        position: relative;
        z-index: 1;
        margin: 0;
    }
    
    .page-header .btn {
        position: relative;
        z-index: 1;
        background: rgba(255, 255, 255, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: white;
        border-radius: 12px;
        padding: 0.75rem 1.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }
    
    .page-header .btn:hover {
        background: rgba(255, 255, 255, 0.25);
        border-color: rgba(255, 255, 255, 0.4);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }
    
    .article-card {
        border: none;
        border-radius: 18px;
        background: white;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        transition: all 0.3s ease;
        overflow: hidden;
        position: relative;
    }
    
    .article-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }
    
    .article-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    
    .table-modern {
        border: none;
        background: transparent;
    }
    
    .table-modern thead th {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border: none;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
        color: #495057;
        padding: 1rem;
        position: sticky;
        top: 0;
        z-index: 10;
    }
    
    .table-modern tbody tr {
        border: none;
        transition: all 0.3s ease;
    }
    
    .table-modern tbody tr:hover {
        background: linear-gradient(135deg, #f8f9ff 0%, #f0f4ff 100%);
        transform: scale(1.01);
    }
    
    .table-modern tbody td {
        border: none;
        padding: 1.25rem 1rem;
        vertical-align: middle;
        border-bottom: 1px solid #f1f3f4;
    }
    
    .article-title {
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 0.5rem;
        line-height: 1.4;
    }
    
    .article-excerpt {
        color: #6c757d;
        font-size: 0.9rem;
        line-height: 1.5;
    }
    
    .status-badge {
        border-radius: 20px;
        padding: 0.5rem 1rem;
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        border: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .status-published {
        background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
        color: white;
    }
    
    .status-draft {
        background: linear-gradient(135deg, #ff6b6b 0%, #feca57 100%);
        color: white;
    }
    
    .action-btn {
        border-radius: 10px;
        padding: 0.5rem 0.75rem;
        font-size: 0.85rem;
        font-weight: 500;
        transition: all 0.3s ease;
        border: 2px solid;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 40px;
        margin: 0 0.25rem;
    }
    
    .action-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }
    
    .btn-edit {
        border-color: #4facfe;
        color: #4facfe;
        background: transparent;
    }
    
    .btn-edit:hover {
        background: #4facfe;
        color: white;
    }
    
    .btn-delete {
        border-color: #ff6b6b;
        color: #ff6b6b;
        background: transparent;
    }
    
    .btn-delete:hover {
        background: #ff6b6b;
        color: white;
    }
    
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
        border-radius: 20px;
        margin: 2rem 0;
    }
    
    .empty-state-icon {
        font-size: 4rem;
        color: #ddd;
        margin-bottom: 1.5rem;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    .empty-state h5 {
        color: #495057;
        font-weight: 600;
        margin-bottom: 1rem;
    }
    
    .empty-state p {
        color: #6c757d;
        margin-bottom: 2rem;
    }
    
    .empty-state .btn {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        border-radius: 12px;
        padding: 0.75rem 2rem;
        font-weight: 600;
        color: white;
        transition: all 0.3s ease;
    }
    
    .empty-state .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
    }
    
    .date-text {
        color: #6c757d;
        font-size: 0.85rem;
        font-weight: 500;
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
    
    .article-card {
        animation: fadeInUp 0.6s ease-out;
    }
    
    @media (max-width: 768px) {
        .page-header {
            margin: -1rem -1rem 1rem -1rem;
            padding: 1.5rem 1rem;
        }
        
        .page-header h1 {
            font-size: 1.5rem;
        }
        
        .table-responsive {
            border-radius: 12px;
            overflow: hidden;
        }
        
        .action-btn {
            margin: 0.125rem;
        }
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <?= $this->include('partials/side_nav') ?>
            
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="h2 mb-2">
                                <i class="fas fa-newspaper me-3"></i>
                                Daftar Artikel
                            </h1>
                            <p class="mb-0 opacity-90">Kelola semua artikel Anda dalam satu tempat</p>
                        </div>
                        <div>
                            <a href="<?= base_url('/admin/article/create') ?>" class="btn">
                                <i class="fas fa-plus me-2"></i>
                                Tambah Artikel
                            </a>
                        </div>
                    </div>
                </div>

                <div class="article-card">
                    <div class="card-body p-0">
                        <?php if (empty($articles)): ?>
                            <div class="empty-state">
                                <div class="empty-state-icon">
                                    <i class="fas fa-newspaper"></i>
                                </div>
                                <h5>Belum ada artikel</h5>
                                <p>Mulai dengan menambahkan artikel pertama Anda dan bagikan cerita menarik!</p>
                                <a href="<?= base_url('/admin/article/create') ?>" class="btn">
                                    <i class="fas fa-plus me-2"></i>
                                    Buat Artikel Pertama
                                </a>
                            </div>
                        <?php else: ?>
                            <div class="table-responsive">
                                <table class="table table-modern mb-0">
                                    <thead>
                                        <tr>
                                            <th width="60">No</th>
                                            <th>Artikel</th>
                                            <th width="120">Status</th>
                                            <th width="140">Tanggal</th>
                                            <th width="120">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($articles as $index => $article): ?>
                                            <tr>
                                                <td>
                                                    <div class="fw-bold text-primary"><?= $index + 1 ?></div>
                                                </td>
                                                <td>
                                                    <div class="article-title"><?= esc($article['title']) ?></div>
                                                    <?php if (!empty($article['content'])): ?>
                                                        <div class="article-excerpt">
                                                            <?= character_limiter(strip_tags($article['content']), 120) ?>
                                                        </div>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if ($article['status'] === 'published'): ?>
                                                        <span class="status-badge status-published">
                                                            <i class="fas fa-check-circle"></i>
                                                            Published
                                                        </span>
                                                    <?php else: ?>
                                                        <span class="status-badge status-draft">
                                                            <i class="fas fa-edit"></i>
                                                            Draft
                                                        </span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <div class="date-text">
                                                        <?php 
                                                            $timezone = new DateTimeZone('Asia/Jakarta');
                                                            $date = new DateTime($article['created_at'], $timezone);
                                                            echo $date->format('d M Y');
                                                        ?>
                                                    </div>
                                                    <div class="date-text">
                                                        <?= $date->format('H:i') ?> WIB
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="<?= base_url('/admin/article/edit/' . $article['id']) ?>" 
                                                           class="action-btn btn-edit" 
                                                           title="Edit Artikel">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <button type="button" 
                                                                class="action-btn btn-delete" 
                                                                onclick="confirmDelete('<?= base_url('/admin/article/delete/' . $article['id']) ?>', 'Hapus Artikel?', 'Artikel yang dihapus tidak dapat dikembalikan!')"
                                                                title="Hapus Artikel">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </main>
        </div>
    </div>

<?= $this->include('partials/footer') ?> 