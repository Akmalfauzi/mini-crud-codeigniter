<?= $this->include('partials/head') ?>

<style>
    /* Modern Feedback List Styles */
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
    
    .feedback-card {
        border: none;
        border-radius: 18px;
        background: white;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        transition: all 0.3s ease;
        overflow: hidden;
        position: relative;
    }
    
    .feedback-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }
    
    .feedback-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
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
        background: linear-gradient(135deg, #f0f8ff 0%, #e6f3ff 100%);
        transform: scale(1.01);
    }
    
    .table-modern tbody td {
        border: none;
        padding: 1.25rem 1rem;
        vertical-align: middle;
        border-bottom: 1px solid #f1f3f4;
    }
    
    .user-name {
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 0.25rem;
    }
    
    .user-email {
        color: #4facfe;
        text-decoration: none;
        font-size: 0.9rem;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .user-email:hover {
        color: #00f2fe;
        text-decoration: none;
    }
    
    .feedback-message {
        line-height: 1.6;
        color: #495057;
        max-width: 300px;
    }
    
    .message-preview {
        background: linear-gradient(135deg, #f8f9ff 0%, #f0f4ff 100%);
        border: 1px solid #e6f3ff;
        border-radius: 8px;
        padding: 0.75rem;
        font-size: 0.9rem;
        line-height: 1.5;
    }
    
    .message-full {
        background: linear-gradient(135deg, #fff8e1 0%, #ffe0b2 100%);
        border: 1px solid #ffcc02;
        border-radius: 8px;
        padding: 0.75rem;
        font-size: 0.9rem;
        line-height: 1.5;
        margin-top: 0.5rem;
    }
    
    .toggle-btn {
        background: none;
        border: none;
        color: #4facfe;
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 0.25rem 0;
        margin-top: 0.5rem;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .toggle-btn:hover {
        color: #00f2fe;
        text-decoration: underline;
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
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
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
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        border: none;
        border-radius: 12px;
        padding: 0.75rem 2rem;
        font-weight: 600;
        color: white;
        transition: all 0.3s ease;
    }
    
    .empty-state .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(79, 172, 254, 0.3);
        color: white;
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
    
    .feedback-card {
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
        
        .feedback-message {
            max-width: 200px;
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
                                <i class="fas fa-comments me-3"></i>
                                Daftar Feedback
                            </h1>
                            <p class="mb-0 opacity-90">Kelola masukan dan saran dari pengguna</p>
                        </div>
                        <div>
                            <a href="<?= base_url('/feedback') ?>" target="_blank" class="btn">
                                <i class="fas fa-external-link-alt me-2"></i>
                                Lihat Form Feedback
                            </a>
                        </div>
                    </div>
                </div>

                <div class="feedback-card">
                    <div class="card-body p-0">
                        <?php if (empty($feedbacks)): ?>
                            <div class="empty-state">
                                <div class="empty-state-icon">
                                    <i class="fas fa-comments"></i>
                                </div>
                                <h5>Belum ada feedback</h5>
                                <p>Feedback dari pengguna akan muncul di sini. Bagikan form feedback untuk mendapatkan masukan dari pengguna!</p>
                                <a href="<?= base_url('/feedback') ?>" target="_blank" class="btn">
                                    <i class="fas fa-external-link-alt me-2"></i>
                                    Buka Form Feedback
                                </a>
                            </div>
                        <?php else: ?>
                            <div class="table-responsive">
                                <table class="table table-modern mb-0">
                                    <thead>
                                        <tr>
                                            <th width="60">No</th>
                                            <th width="200">Pengguna</th>
                                            <th>Pesan</th>
                                            <th width="140">Tanggal</th>
                                            <th width="80">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($feedbacks as $index => $feedback): ?>
                                            <tr>
                                                <td>
                                                    <div class="fw-bold text-primary"><?= $index + 1 ?></div>
                                                </td>
                                                <td>
                                                    <div class="user-name"><?= esc($feedback['name']) ?></div>
                                                    <a href="mailto:<?= esc($feedback['email']) ?>" class="user-email">
                                                        <i class="fas fa-envelope"></i>
                                                        <?= esc($feedback['email']) ?>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="feedback-message">
                                                        <?php if (strlen($feedback['message']) > 150): ?>
                                                            <div class="message-preview short-text-<?= $feedback['id'] ?>">
                                                                <?= esc(substr($feedback['message'], 0, 150)) ?>...
                                                            </div>
                                                            <div class="message-full full-text-<?= $feedback['id'] ?> d-none">
                                                                <?= nl2br(esc($feedback['message'])) ?>
                                                            </div>
                                                            <button type="button" class="toggle-btn" 
                                                                    onclick="toggleMessage(<?= $feedback['id'] ?>)"
                                                                    id="toggle-<?= $feedback['id'] ?>">
                                                                Lihat selengkapnya
                                                            </button>
                                                        <?php else: ?>
                                                            <div class="message-preview">
                                                                <?= nl2br(esc($feedback['message'])) ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="date-text">
                                                        <?php 
                                                            $timezone = new DateTimeZone('Asia/Jakarta');
                                                            $date = new DateTime($feedback['created_at'], $timezone);
                                                            echo $date->format('d M Y');
                                                        ?>
                                                    </div>
                                                    <div class="date-text">
                                                        <?= $date->format('H:i') ?> WIB
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <button type="button" 
                                                                class="action-btn btn-delete" 
                                                                onclick="confirmDelete('<?= base_url('/admin/feedback/delete/' . $feedback['id']) ?>', 'Hapus Feedback?', 'Feedback yang dihapus tidak dapat dikembalikan!')"
                                                                title="Hapus Feedback">
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

    <script>
        // Toggle message display with improved animation
        function toggleMessage(feedbackId) {
            const shortText = document.querySelector('.short-text-' + feedbackId);
            const fullText = document.querySelector('.full-text-' + feedbackId);
            const toggleBtn = document.getElementById('toggle-' + feedbackId);
            
            if (shortText.classList.contains('d-none')) {
                // Show short text
                shortText.classList.remove('d-none');
                fullText.classList.add('d-none');
                toggleBtn.textContent = 'Lihat selengkapnya';
            } else {
                // Show full text
                shortText.classList.add('d-none');
                fullText.classList.remove('d-none');
                toggleBtn.textContent = 'Lihat lebih sedikit';
            }
        }
        
        // Add smooth scrolling when toggling messages
        document.addEventListener('DOMContentLoaded', function() {
            // Any additional initialization can go here
            console.log('Feedback page loaded successfully');
        });
    </script>

<?= $this->include('partials/footer') ?> 