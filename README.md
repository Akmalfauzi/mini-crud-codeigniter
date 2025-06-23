# 🚀 CI4 Mini CRUD - Sistem Manajemen Artikel

[![CodeIgniter](https://img.shields.io/badge/CodeIgniter-4.x-orange.svg)](https://codeigniter.com/)
[![PHP](https://img.shields.io/badge/PHP-8.1%2B-blue.svg)](https://php.net/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-purple.svg)](https://getbootstrap.com/)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

Aplikasi web mini modern yang dibangun dengan **CodeIgniter 4** yang menyediakan sistem manajemen artikel lengkap dengan feedback pengguna dan dashboard admin yang elegan.

## 🌟 Demo Live

**🔗 [Live Demo](https://youtu.be/0bK3Qsmon40)**

---

## ✨ Fitur Utama

### 🏠 **Halaman Publik**
- **Landing Page Modern**: Halaman beranda responsif dengan design gradient yang elegan
- **Sistem Feedback**: Form feedback yang user-friendly dengan validasi komprehensif
- **Design Responsif**: Optimal di semua perangkat desktop dan mobile

### 🛠️ **Admin Panel**
- **Dashboard Analytics**: Statistik artikel dan feedback dengan visualisasi menarik
- **Manajemen Artikel**: CRUD lengkap dengan sistem draft/published
- **Manajemen Feedback**: Review dan kelola feedback dari pengguna
- **Modern UI/UX**: Interface admin yang clean dengan hover effects dan animations

### 🎨 **Design System**
- **Modern Gradients**: Purple-blue theme yang konsisten
- **Glassmorphism Effects**: Background transparan dengan blur effects
- **Smooth Animations**: Transisi halus dan micro-interactions
- **Typography Excellence**: Hierarki teks yang jelas dan mudah dibaca

---

## 🖼️ Screenshots

<details>
<summary>📱 Lihat Screenshots</summary>

### Dashboard Admin
![Dashboard](https://via.placeholder.com/800x400/667eea/ffffff?text=Modern+Dashboard)

### Halaman Artikel
![Articles](https://via.placeholder.com/800x400/4facfe/ffffff?text=Article+Management)

### Form Feedback
![Feedback](https://via.placeholder.com/800x400/764ba2/ffffff?text=Feedback+Form)

</details>

---

## 🚀 Quick Start

### 📋 Persyaratan Sistem

| Requirement | Version |
|-------------|---------|
| **PHP** | 8.1+ |
| **Database** | MySQL 5.7+ / MariaDB 10.2+ |
| **Web Server** | Apache/Nginx |
| **Extensions** | `intl`, `mbstring`, `json`, `mysqlnd` |

### ⚡ Instalasi Cepat

```bash
# 1️⃣ Clone repositori
git clone https://github.com/Akmalfauzi/mini-crud-codeigniter.git
cd mini-crud-codeigniter

# 2️⃣ Install dependencies
composer install

# 3️⃣ Setup environment
cp env .env

# 4️⃣ Konfigurasi database
# Edit file .env dengan pengaturan database Anda

# 5️⃣ Run migrations & seeders
php spark migrate
php spark db:seed DatabaseSeeder

# 6️⃣ Start development server
php spark serve
```

### 🔧 Konfigurasi Database

Edit file `.env`:

```env
database.default.hostname = localhost
database.default.database = ci4_mini_crud
database.default.username = your_username
database.default.password = your_password
database.default.DBDriver = MySQLi

# Timezone
app.timezone = Asia/Jakarta
```

---

## 📖 Panduan Penggunaan

### 🌐 Area Publik

| URL | Deskripsi |
|-----|-----------|
| `/` | Halaman beranda dengan fitur overview |
| `/feedback` | Form feedback untuk pengguna |

### 🔐 Area Admin

| URL | Deskripsi |
|-----|-----------|
| `/admin/dashboard` | Dashboard dengan statistik dan aksi cepat |
| `/admin/article` | Manajemen artikel (List, Create, Edit, Delete) |
| `/admin/feedback` | Manajemen feedback dari pengguna |

### 💡 Tips Penggunaan

**Artikel Management:**
- ✅ Gunakan status "Draft" untuk artikel yang belum siap dipublikasi
- ✅ Status "Published" akan menampilkan artikel di area publik
- ✅ Gunakan character counter untuk memastikan konten cukup panjang
- ✅ Keyboard shortcuts: `Ctrl+S` (save), `Ctrl+Enter` (submit), `Esc` (back)

**Feedback Management:**
- ✅ Klik email pengirim untuk membalas langsung
- ✅ Gunakan toggle untuk membaca feedback panjang
- ✅ Feedback ditampilkan berdasarkan tanggal terbaru

---

## 🏗️ Struktur Proyek

```
tugas-mini-crud/
├── 📁 app/
│   ├── 📁 Controllers/
│   │   ├── 📁 Admin/           # Controller admin
│   │   ├── Home.php            # Homepage controller
│   │   └── FeedbackController.php
│   ├── 📁 Models/
│   │   ├── ArticleModel.php    # Model artikel
│   │   └── FeedbackModel.php   # Model feedback
│   ├── 📁 Views/
│   │   ├── 📁 admin/           # Views admin panel
│   │   ├── 📁 partials/        # Komponen UI
│   │   └── 📁 feedback/        # Views feedback
│   └── 📁 Database/
│       ├── 📁 Migrations/      # Database migrations
│       └── 📁 Seeds/           # Sample data
├── 📁 public/                  # Assets & entry point
└── 📄 README.md
```

---

## 🎯 Fitur Detail

### 📝 **Manajemen Artikel**

<details>
<summary>🔍 Lihat Detail Fitur</summary>

- **✍️ Create Article**: Form modern dengan real-time character counter
- **📊 Article List**: Table responsive dengan preview content
- **✏️ Edit Article**: Update artikel dengan informasi lengkap
- **🗑️ Delete Article**: Konfirmasi SweetAlert untuk keamanan
- **📋 Status Management**: Toggle antara Draft dan Published
- **🕐 Timezone Support**: Semua tanggal menggunakan Asia/Jakarta (WIB)

**Validasi:**
- Judul wajib diisi
- Konten minimal 10 karakter
- Status wajib dipilih

</details>

### 💬 **Sistem Feedback**

<details>
<summary>🔍 Lihat Detail Fitur</summary>

- **📝 Modern Form**: Design elegan dengan icons dan animations
- **✅ Validation**: Client-side dan server-side validation
- **📊 Character Counter**: Real-time counting dengan color coding
- **📧 Email Integration**: Direct mailto links di admin panel
- **🔄 Auto-resize**: Textarea yang menyesuaikan konten
- **💫 Micro-interactions**: Smooth hover effects dan transitions

**Validasi:**
- Nama: 3-50 karakter
- Email: Format valid
- Pesan: 10-500 karakter

</details>

### 📊 **Dashboard Admin**

<details>
<summary>🔍 Lihat Detail Fitur</summary>

- **📈 Statistics Cards**: Animated cards dengan gradient design
- **⚡ Quick Actions**: Akses cepat ke semua fitur
- **👤 Admin Profile**: Profile card dengan Akmal Fauzi
- **🕐 Real-time Clock**: Waktu Jakarta dengan format Indonesia
- **📱 Responsive**: Optimal di semua ukuran layar

**Metrics:**
- Total artikel
- Artikel published vs draft
- Total feedback
- Aksi cepat ke semua fitur

</details>

---

## 🎨 Design System

### 🌈 **Color Palette**

```css
/* Primary Gradients */
--primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
--secondary-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
--success-gradient: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
--warning-gradient: linear-gradient(135deg, #ff6b6b 0%, #feca57 100%);

/* Semantic Colors */
--text-primary: #2c3e50;
--text-secondary: #6c757d;
--background: #f8f9fa;
```

### 🎭 **UI Components**

- **Cards**: Border radius 18px dengan shadow dan hover effects
- **Buttons**: Gradient backgrounds dengan shimmer animations
- **Forms**: Modern inputs dengan focus states dan validation
- **Tables**: Clean design dengan hover effects dan responsive layout
- **Navigation**: Glassmorphism sidebar dengan active states

---

## 🔧 Customization

### 🎨 **Mengubah Theme**

```css
/* Ganti warna utama di app/Views/partials/head.php */
.sidebar {
    background: linear-gradient(135deg, #your-color-1 0%, #your-color-2 100%);
}
```

### 📝 **Menambah Field Artikel**

1. **Migration**: Tambah kolom di database
2. **Model**: Update validation rules di `ArticleModel`
3. **Controller**: Handle field baru di `Article.php`
4. **View**: Tambah input di form create/edit

### 🌐 **Mengubah Timezone**

```php
// app/Config/App.php
public string $appTimezone = 'Asia/Jakarta'; // Ganti sesuai kebutuhan
```

---

## 🚀 Deployment

### 📦 **Production Checklist**

- [ ] Set `CI_ENVIRONMENT = production` di `.env`
- [ ] Update database credentials
- [ ] Set proper file permissions (755 untuk folders, 644 untuk files)
- [ ] Enable mod_rewrite untuk Apache
- [ ] Setup HTTPS untuk keamanan
- [ ] Backup database secara berkala

### 🔒 **Security Recommendations**

- 🔐 Ganti default app key di `.env`
- 🚫 Hapus `index.php` dari URL dengan htaccess
- 🛡️ Implementasi rate limiting untuk forms
- 📝 Regular security updates
- 🔍 Monitor error logs

---

## 🤝 Contributing

Kontribusi untuk meningkatkan aplikasi ini sangat diterima! 

### 📋 **Cara Berkontribusi**

1. **🍴 Fork** repositori ini
2. **🌿 Branch** fitur baru (`git checkout -b feature/amazing-feature`)
3. **✏️ Commit** perubahan (`git commit -m 'Add: amazing feature'`)
4. **📤 Push** ke branch (`git push origin feature/amazing-feature`)
5. **🔄 Pull Request** dengan deskripsi lengkap

### 📏 **Coding Standards**

- Follow **PSR-12** coding standards
- Use **semantic commit messages**
- Write **clear comments** untuk logic kompleks
- Test fitur baru sebelum PR

---

## 🐛 Bug Reports & Feature Requests

Temukan bug atau punya ide fitur baru? 

**🔗 [Create Issue](https://github.com/akmalfauzi/tugas-mini-crud/issues)**

**Format Bug Report:**
- 🔍 **Deskripsi**: Jelaskan bug yang terjadi
- 🔄 **Steps to Reproduce**: Langkah-langkah untuk reproduce
- 💻 **Environment**: PHP version, OS, browser
- 📸 **Screenshots**: Jika memungkinkan

---

## 📄 License

Proyek ini dilisensikan di bawah [MIT License](LICENSE) - lihat file LICENSE untuk detail lengkap.

---

## 🙏 Credits & Acknowledgments

- **🔥 [CodeIgniter 4](https://codeigniter.com/)** - PHP Framework yang powerful
- **🎨 [Bootstrap 5](https://getbootstrap.com/)** - CSS Framework untuk UI
- **✨ [Font Awesome](https://fontawesome.com/)** - Icon library yang lengkap
- **🍭 [SweetAlert2](https://sweetalert2.github.io/)** - Beautiful alerts dan confirmations

---

## 📞 Contact

**👨‍💻 Developer**: Akmal Fauzi  
**📧 Email**: akmalfauzi912@gmail.com  
**🐙 GitHub**: [@akmalfauzi](https://github.com/akmalfauzi)  

---

<div align="center">

**⭐ Jika aplikasi ini membantu, berikan star di GitHub! ⭐**
</div>
