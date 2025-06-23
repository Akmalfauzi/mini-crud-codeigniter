<?= $this->include('partials/head') ?>

<style>
    /* Modern Article Form Styles */
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
    
    .form-card {
        border: none;
        border-radius: 18px;
        background: white;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        transition: all 0.3s ease;
        overflow: hidden;
        position: relative;
    }
    
    .form-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    
    .form-card .card-header {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border: none;
        padding: 1.5rem 2rem;
        margin-bottom: 0;
    }
    
    .form-card .card-header h5 {
        color: #2c3e50;
        font-weight: 600;
        margin: 0;
    }
    
    .form-card .card-body {
        padding: 2rem;
    }
    

    
    .form-label {
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 0.75rem;
        font-size: 0.95rem;
    }
    
    .form-control, .form-select {
        border: 2px solid #e9ecef;
        border-radius: 12px;
        padding: 0.75rem 1rem;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        background: #fafbfc;
    }
    
    .form-control:focus, .form-select:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
        background: white;
    }
    
    .form-control.is-invalid, .form-select.is-invalid {
        border-color: #ff6b6b;
        background: #fff5f5;
    }
    
    .form-control.is-invalid:focus, .form-select.is-invalid:focus {
        border-color: #ff6b6b;
        box-shadow: 0 0 0 0.2rem rgba(255, 107, 107, 0.15);
    }
    
    .invalid-feedback {
        color: #ff6b6b;
        font-size: 0.85rem;
        font-weight: 500;
        margin-top: 0.5rem;
        display: block;
    }
    
    .form-text {
        color: #6c757d;
        font-size: 0.85rem;
        margin-top: 0.5rem;
    }
    
    .required-asterisk {
        color: #ff6b6b;
        font-weight: bold;
    }
    
    .modern-btn {
        border: none;
        border-radius: 12px;
        padding: 0.75rem 2rem;
        font-weight: 600;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        text-decoration: none;
    }
    
    .modern-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s ease;
    }
    
    .modern-btn:hover::before {
        left: 100%;
    }
    
    .modern-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }
    
    .btn-primary-modern {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }
    
    .btn-primary-modern:hover {
        color: white;
    }
    
    .btn-secondary-modern {
        background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
        color: white;
    }
    
    .btn-secondary-modern:hover {
        color: white;
    }
    

    
    .character-counter {
        font-size: 0.8rem;
        color: #6c757d;
        text-align: right;
        margin-top: 0.25rem;
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
    
    .form-card {
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
        
        .form-card .card-body {
            padding: 1.5rem;
        }
        
        .modern-btn {
            width: 100%;
            margin-bottom: 0.5rem;
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
                                <i class="fas fa-plus me-3"></i>
                                Tambah Artikel
                            </h1>
                            <p class="mb-0 opacity-90">Buat artikel baru dan bagikan ide Anda</p>
                        </div>
                        <div>
                            <a href="<?= base_url('/admin/article') ?>" class="btn">
                                <i class="fas fa-arrow-left me-2"></i>
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="form-card">
                            <div class="card-header">
                                <h5>
                                    <i class="fas fa-edit me-2"></i>
                                    Form Artikel Baru
                                </h5>
                            </div>
                            <div class="card-body">
                                <?= form_open('/admin/article/store', ['class' => 'needs-validation', 'novalidate' => true]) ?>
                                    
                                    <div class="mb-4">
                                        <label for="title" class="form-label">
                                            <i class="fas fa-heading me-2 text-primary"></i>
                                            Judul Artikel <span class="required-asterisk">*</span>
                                        </label>
                                        <input type="text" 
                                               class="form-control <?= (session('validation') && isset(session('validation')['title'])) ? 'is-invalid' : '' ?>" 
                                               id="title" 
                                               name="title" 
                                               value="<?= old('title') ?>" 
                                               placeholder="Masukkan judul artikel yang menarik..."
                                               required>
                                        <?php if (session('validation') && isset(session('validation')['title'])): ?>
                                            <div class="invalid-feedback">
                                                <i class="fas fa-exclamation-circle me-1"></i>
                                                <?= session('validation')['title'] ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="mb-4">
                                        <label for="content" class="form-label">
                                            <i class="fas fa-align-left me-2 text-primary"></i>
                                            Konten Artikel <span class="required-asterisk">*</span>
                                        </label>
                                        <textarea class="form-control <?= (session('validation') && isset(session('validation')['content'])) ? 'is-invalid' : '' ?>" 
                                                  id="content" 
                                                  name="content" 
                                                  rows="12" 
                                                  placeholder="Tulis konten artikel Anda di sini... (minimal 10 karakter)"
                                                  required
                                                  oninput="updateCharacterCount(this)"><?= old('content') ?></textarea>
                                        <div class="d-flex justify-content-between align-items-center mt-2">
                                            <div class="form-text">
                                                <i class="fas fa-info-circle me-1"></i>
                                                Konten artikel wajib diisi dengan minimal 10 karakter
                                            </div>
                                            <div class="character-counter" id="content-counter">
                                                0 karakter
                                            </div>
                                        </div>
                                        <?php if (session('validation') && isset(session('validation')['content'])): ?>
                                            <div class="invalid-feedback">
                                                <i class="fas fa-exclamation-circle me-1"></i>
                                                <?= session('validation')['content'] ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="mb-4">
                                        <label for="status" class="form-label">
                                            <i class="fas fa-flag me-2 text-primary"></i>
                                            Status Publikasi <span class="required-asterisk">*</span>
                                        </label>
                                        <select class="form-select <?= (session('validation') && isset(session('validation')['status'])) ? 'is-invalid' : '' ?>" 
                                                id="status" 
                                                name="status" 
                                                required>
                                            <option value="">Pilih Status Artikel</option>
                                            <option value="draft" <?= old('status') === 'draft' ? 'selected' : '' ?>>
                                                <i class="fas fa-edit"></i> Draft - Belum dipublikasi
                                            </option>
                                            <option value="published" <?= old('status') === 'published' ? 'selected' : '' ?>>
                                                <i class="fas fa-check-circle"></i> Published - Siap dipublikasi
                                            </option>
                                        </select>
                                        <?php if (session('validation') && isset(session('validation')['status'])): ?>
                                            <div class="invalid-feedback">
                                                <i class="fas fa-exclamation-circle me-1"></i>
                                                <?= session('validation')['status'] ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="d-flex flex-column flex-md-row gap-3 justify-content-md-end">
                                        <a href="<?= base_url('/admin/article') ?>" class="modern-btn btn-secondary-modern">
                                            <i class="fas fa-times"></i>
                                            Batal
                                        </a>
                                        <button type="submit" class="modern-btn btn-primary-modern">
                                            <i class="fas fa-save"></i>
                                            Simpan Artikel
                                        </button>
                                    </div>

                                <?= form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Character counter for content textarea
        function updateCharacterCount(textarea) {
            const counter = document.getElementById('content-counter');
            const count = textarea.value.length;
            counter.textContent = count + ' karakter';
            
            // Change color based on minimum requirement
            if (count < 10) {
                counter.style.color = '#ff6b6b';
            } else {
                counter.style.color = '#28a745';
            }
        }
        
        // Initialize character count on page load
        document.addEventListener('DOMContentLoaded', function() {
            const contentTextarea = document.getElementById('content');
            if (contentTextarea.value) {
                updateCharacterCount(contentTextarea);
            }
        });
        
        // Keyboard shortcuts
        document.addEventListener('keydown', function(e) {
            // Ctrl + S to save
            if (e.ctrlKey && e.key === 's') {
                e.preventDefault();
                document.querySelector('form').submit();
            }
            
            // Ctrl + Enter to submit
            if (e.ctrlKey && e.key === 'Enter') {
                e.preventDefault();
                document.querySelector('form').submit();
            }
            
            // Esc to go back
            if (e.key === 'Escape') {
                window.location.href = '<?= base_url('/admin/article') ?>';
            }
        });
    </script>

<?= $this->include('partials/footer') ?> 