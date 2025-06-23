<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title . ' - Mini CRUD App' : 'Feedback Form - Mini CRUD App' ?></title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <!-- SweetAlert2 -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .feedback-card {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(15px);
            border-radius: 25px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.2);
            overflow: hidden;
        }
        
        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 2rem;
            text-align: center;
            position: relative;
        }
        
        .card-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="80" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="60" cy="20" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="30" cy="70" r="1" fill="rgba(255,255,255,0.1)"/></svg>');
            opacity: 0.5;
            pointer-events: none;
        }
        
        .header-icon {
            width: 70px;
            height: 70px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.8rem;
            color: white;
            border: 3px solid rgba(255, 255, 255, 0.3);
        }
        
        .form-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }
        
        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: #f8f9fa;
        }
        
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
            background-color: white;
            transform: translateY(-1px);
        }
        
        .form-control:hover:not(:focus) {
            border-color: #667eea;
            background-color: white;
        }
        
        .form-control.is-invalid {
            border-color: #dc3545;
            background-color: #fff5f5;
        }
        
        .form-control.is-invalid:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.15);
        }
        
        .invalid-feedback {
            display: block;
            margin-top: 0.5rem;
            font-size: 0.875rem;
            color: #dc3545;
            font-weight: 500;
        }
        
        .form-text {
            margin-top: 0.5rem;
            font-size: 0.875rem;
            color: #6c757d;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 12px;
            padding: 0.875rem 2rem;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
            background: linear-gradient(135deg, #5a67d8 0%, #6b46c1 100%);
        }
        
        .btn-primary:active {
            transform: translateY(0);
        }
        
        .btn-outline-light {
            border: 2px solid rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 0.5rem 1rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-outline-light:hover {
            background: rgba(255, 255, 255, 0.9);
            color: #667eea;
            transform: translateY(-1px);
            box-shadow: 0 5px 15px rgba(255, 255, 255, 0.3);
        }
        
        .admin-link {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1050;
        }
        
        .form-section {
            padding: 2.5rem;
        }
        
        .input-group-icon {
            position: relative;
        }
        
        .input-group-icon .form-control {
            padding-left: 3rem;
        }
        
        .input-group-icon .icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            z-index: 10;
            transition: color 0.3s ease;
        }
        
        .input-group-icon .form-control:focus + .icon {
            color: #667eea;
        }
        
        .card-footer {
            background: #f8f9fa;
            border: none;
            padding: 1.5rem 2.5rem;
            text-align: center;
            border-radius: 0 0 25px 25px;
        }
        
        .character-counter {
            font-size: 0.8rem;
            margin-top: 0.25rem;
            text-align: right;
            color: #6c757d;
            font-weight: 500;
        }
        
        .character-counter.warning {
            color: #fd7e14;
        }
        
        .character-counter.danger {
            color: #dc3545;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }
            
            .feedback-card {
                margin: 1rem 0;
            }
            
            .form-section {
                padding: 1.5rem;
            }
            
            .card-header {
                padding: 1.5rem;
            }
            
            .admin-link {
                top: 10px;
                right: 10px;
            }
        }
        
        /* Animation for form elements */
        .form-group {
            animation: slideInUp 0.5s ease-out;
        }
        
        .form-group:nth-child(1) { animation-delay: 0.1s; }
        .form-group:nth-child(2) { animation-delay: 0.2s; }
        .form-group:nth-child(3) { animation-delay: 0.3s; }
        
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <!-- Admin Link -->
    <div class="admin-link">
        <a href="<?= base_url('/admin') ?>" class="btn btn-outline-light btn-sm">
            <i class="fas fa-cog me-2"></i>
            Admin Panel
        </a>
    </div>

    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="feedback-card">
                    <!-- Header -->
                    <div class="card-header">
                        <div class="header-icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h2 class="h3 mb-2 fw-bold">Feedback Form</h2>
                        <p class="mb-0 opacity-90">
                            Kami senang mendengar pendapat Anda! Berikan feedback untuk membantu kami berkembang.
                        </p>
                    </div>

                    <!-- Form Section -->
                    <div class="form-section">
                        <?= form_open('/feedback', ['class' => 'needs-validation', 'novalidate' => true]) ?>
                            
                            <!-- Name Field -->
                            <div class="form-group mb-4">
                                <label for="name" class="form-label">
                                    <i class="fas fa-user me-2 text-primary"></i>
                                    Nama Lengkap <span class="text-danger">*</span>
                                </label>
                                <div class="input-group-icon">
                                    <input type="text" 
                                           class="form-control <?= (session('validation') && isset(session('validation')['name'])) ? 'is-invalid' : '' ?>" 
                                           id="name" 
                                           name="name" 
                                           value="<?= old('name') ?>" 
                                           placeholder="Masukkan nama lengkap Anda"
                                           required>
                                    <i class="fas fa-user icon"></i>
                                </div>
                                <?php if (session('validation') && isset(session('validation')['name'])): ?>
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-triangle me-1"></i>
                                        <?= session('validation')['name'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Email Field -->
                            <div class="form-group mb-4">
                                <label for="email" class="form-label">
                                    <i class="fas fa-envelope me-2 text-primary"></i>
                                    Alamat Email <span class="text-danger">*</span>
                                </label>
                                <div class="input-group-icon">
                                    <input type="email" 
                                           class="form-control <?= (session('validation') && isset(session('validation')['email'])) ? 'is-invalid' : '' ?>" 
                                           id="email" 
                                           name="email" 
                                           value="<?= old('email') ?>" 
                                           placeholder="contoh@email.com"
                                           required>
                                    <i class="fas fa-envelope icon"></i>
                                </div>
                                <?php if (session('validation') && isset(session('validation')['email'])): ?>
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-triangle me-1"></i>
                                        <?= session('validation')['email'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Message Field -->
                            <div class="form-group mb-4">
                                <label for="message" class="form-label">
                                    <i class="fas fa-comment-dots me-2 text-primary"></i>
                                    Pesan Feedback <span class="text-danger">*</span>
                                </label>
                                <textarea class="form-control <?= (session('validation') && isset(session('validation')['message'])) ? 'is-invalid' : '' ?>" 
                                          id="message" 
                                          name="message" 
                                          rows="5" 
                                          placeholder="Ceritakan pengalaman, saran, atau kritik Anda di sini... (minimal 10 karakter)"
                                          required><?= old('message') ?></textarea>
                                <div class="character-counter" id="charCounter">
                                    <span id="charCount">0</span>/1000 karakter
                                </div>
                                <div class="form-text">
                                    <i class="fas fa-info-circle me-1"></i>
                                    Feedback Anda sangat berharga untuk perbaikan layanan kami
                                </div>
                                <?php if (session('validation') && isset(session('validation')['message'])): ?>
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-triangle me-1"></i>
                                        <?= session('validation')['message'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-paper-plane me-2"></i>
                                    Kirim Feedback
                                </button>
                            </div>

                        <?= form_close() ?>
                    </div>

                    <!-- Footer -->
                    <div class="card-footer">
                        <div class="row text-center">
                            <div class="col-12">
                                <small class="text-muted d-block mb-2">
                                    <i class="fas fa-shield-alt me-1 text-success"></i>
                                    Data Anda aman dan hanya digunakan untuk perbaikan layanan
                                </small>
                                <small class="text-muted">
                                    <i class="fas fa-heart text-danger me-1"></i>
                                    Terima kasih telah membantu kami menjadi lebih baik!
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
    
    <script>
        // Show success message
        <?php if (session()->getFlashdata('success')): ?>
            Swal.fire({
                icon: 'success',
                title: 'Terima Kasih!',
                text: '<?= session()->getFlashdata('success') ?>',
                showConfirmButton: true,
                confirmButtonText: 'OK',
                confirmButtonColor: '#667eea',
                timer: 6000,
                timerProgressBar: true,
                showClass: {
                    popup: 'animate__animated animate__zoomIn'
                },
                hideClass: {
                    popup: 'animate__animated animate__zoomOut'
                }
            }).then(() => {
                // Clear form after success
                document.querySelector('form').reset();
                updateCharacterCount();
            });
        <?php endif; ?>
        
        // Form validation
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                            
                            // Focus on first invalid field
                            var firstInvalidField = form.querySelector(':invalid');
                            if (firstInvalidField) {
                                firstInvalidField.focus();
                            }
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
        
        // Character counter functionality
        const messageTextarea = document.getElementById('message');
        const charCountSpan = document.getElementById('charCount');
        const charCounter = document.getElementById('charCounter');
        const maxLength = 1000;
        
        function updateCharacterCount() {
            const currentLength = messageTextarea.value.length;
            charCountSpan.textContent = currentLength;
            
            // Remove existing classes
            charCounter.classList.remove('warning', 'danger');
            
            // Add appropriate class based on character count
            if (currentLength > maxLength * 0.9) {
                charCounter.classList.add('danger');
            } else if (currentLength > maxLength * 0.7) {
                charCounter.classList.add('warning');
            }
            
            // Limit character count
            if (currentLength > maxLength) {
                messageTextarea.value = messageTextarea.value.substring(0, maxLength);
                charCountSpan.textContent = maxLength;
            }
        }
        
        if (messageTextarea) {
            messageTextarea.addEventListener('input', updateCharacterCount);
            // Initialize counter
            updateCharacterCount();
        }
        
        // Enhanced form interactions
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('focused');
            });
        });
        
        // Auto-resize textarea
        if (messageTextarea) {
            messageTextarea.addEventListener('input', function() {
                this.style.height = 'auto';
                this.style.height = Math.min(this.scrollHeight, 200) + 'px';
            });
        }
    </script>
</body>
</html> 