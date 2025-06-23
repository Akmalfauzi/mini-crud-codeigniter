<div class="col-md-3 col-lg-2 sidebar d-flex flex-column p-0">
    <div class="p-3">
        <a href="<?= base_url('/admin') ?>" class="navbar-brand text-white text-decoration-none">
            <i class="fas fa-tachometer-alt me-2"></i>
            Admin Panel
        </a>
    </div>
    
    <nav class="nav flex-column px-3 flex-grow-1">
        <a class="nav-link text-white <?= (strpos(current_url(), '/admin/dashboard') !== false || current_url() == base_url('/admin') || rtrim(current_url(), '/') == rtrim(base_url('/admin'), '/')) ? 'active bg-white bg-opacity-25 rounded' : '' ?>" 
           href="<?= base_url('/admin/dashboard') ?>">
            <i class="fas fa-home me-2"></i>
            Dashboard
        </a>
        
        <a class="nav-link text-white <?= strpos(current_url(), '/admin/article') !== false ? 'active bg-white bg-opacity-25 rounded' : '' ?>" 
           href="<?= base_url('/admin/article') ?>">
            <i class="fas fa-newspaper me-2"></i>
            Artikel
        </a>
        
        <a class="nav-link text-white <?= strpos(current_url(), '/admin/feedback') !== false ? 'active bg-white bg-opacity-25 rounded' : '' ?>" 
           href="<?= base_url('/admin/feedback') ?>">
            <i class="fas fa-comments me-2"></i>
            Feedback
        </a>
        
        <hr class="text-white my-3">
        
        <a class="nav-link text-white" href="<?= base_url('/feedback') ?>" target="_blank">
            <i class="fas fa-external-link-alt me-2"></i>
            Lihat Feedback Form
        </a>
        
        <a class="nav-link text-white" href="<?= base_url('/') ?>">
            <i class="fas fa-globe me-2"></i>
            Lihat Website
        </a>
    </nav>
    
    <div class="p-3 mt-auto">
        <div class="admin-profile">
            <div class="admin-avatar">
                <i class="fas fa-user-circle"></i>
            </div>
            <div class="admin-info">
                <div class="admin-name">Akmal Fauzi</div>
                <div class="admin-role">Administrator</div>
            </div>
        </div>
    </div>
</div> 