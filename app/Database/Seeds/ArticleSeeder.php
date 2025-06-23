<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'Panduan Lengkap Memulai Pemrograman Web',
                'content' => 'Pemrograman web adalah salah satu skill yang paling dicari di era digital ini. Dalam artikel ini, kita akan membahas langkah-langkah dasar untuk memulai journey Anda sebagai web developer. Mulai dari HTML, CSS, JavaScript, hingga framework modern seperti React dan Vue.js. Dengan mengikuti panduan ini, Anda akan memiliki foundation yang kuat untuk membangun aplikasi web yang menarik dan fungsional.',
                'status' => 'published',
                'created_at' => date('Y-m-d H:i:s', strtotime('-7 days')),
                'updated_at' => date('Y-m-d H:i:s', strtotime('-7 days')),
            ],
            [
                'title' => '10 Tips Meningkatkan Produktivitas Developer',
                'content' => 'Sebagai developer, produktivitas adalah kunci kesuksesan. Berikut adalah 10 tips yang dapat membantu Anda menjadi developer yang lebih produktif: 1) Gunakan IDE yang tepat, 2) Manfaatkan keyboard shortcuts, 3) Automasi tugas repetitif, 4) Gunakan version control dengan baik, 5) Buat dokumentasi yang baik, 6) Belajar debugging yang efektif, 7) Gunakan tools testing, 8) Manage waktu dengan baik, 9) Selalu update skill, 10) Jaga work-life balance.',
                'status' => 'published',
                'created_at' => date('Y-m-d H:i:s', strtotime('-5 days')),
                'updated_at' => date('Y-m-d H:i:s', strtotime('-5 days')),
            ],
            [
                'title' => 'Mengapa CodeIgniter 4 Layak Dipelajari',
                'content' => 'CodeIgniter 4 hadir dengan banyak improvement dari versi sebelumnya. Framework PHP ini menawarkan performance yang lebih baik, architecture yang lebih clean, dan fitur-fitur modern seperti namespace, PSR-4 autoloading, dan RESTful API. Dalam artikel ini, kita akan explore mengapa CI4 adalah pilihan yang tepat untuk project web development Anda.',
                'status' => 'published',
                'created_at' => date('Y-m-d H:i:s', strtotime('-3 days')),
                'updated_at' => date('Y-m-d H:i:s', strtotime('-3 days')),
            ],
            [
                'title' => 'Tutorial CRUD dengan Bootstrap 5',
                'content' => 'CRUD (Create, Read, Update, Delete) adalah operasi dasar dalam pengembangan aplikasi web. Dikombinasikan dengan Bootstrap 5, kita dapat membuat interface yang responsive dan menarik. Tutorial ini akan mengajarkan Anda cara membuat aplikasi CRUD yang lengkap dengan validasi form, modal, dan alert menggunakan SweetAlert2.',
                'status' => 'draft',
                'created_at' => date('Y-m-d H:i:s', strtotime('-2 days')),
                'updated_at' => date('Y-m-d H:i:s', strtotime('-2 days')),
            ],
            [
                'title' => 'Best Practices Database Design',
                'content' => 'Database design yang baik adalah foundation dari aplikasi yang scalable dan maintainable. Artikel ini akan membahas prinsip-prinsip normalisasi, indexing, relationship antar tabel, dan optimasi query. Dengan mengikuti best practices ini, aplikasi Anda akan memiliki performance yang optimal bahkan dengan data yang besar.',
                'status' => 'draft',
                'created_at' => date('Y-m-d H:i:s', strtotime('-1 day')),
                'updated_at' => date('Y-m-d H:i:s', strtotime('-1 day')),
            ],
            [
                'title' => 'JavaScript ES6+ Features yang Wajib Dikuasai',
                'content' => 'JavaScript terus berkembang dengan fitur-fitur baru yang memudahkan developer. ES6 dan versi selanjutnya membawa fitur seperti arrow functions, destructuring, template literals, async/await, dan masih banyak lagi. Mari kita explore fitur-fitur ini dengan contoh praktis yang dapat langsung Anda terapkan.',
                'status' => 'published',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert data
        $this->db->table('articles')->insertBatch($data);
    }
}
