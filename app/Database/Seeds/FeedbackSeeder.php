<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Ahmad Nugroho',
                'email' => 'ahmad.nugroho@email.com',
                'message' => 'Website ini sangat membantu! Interface-nya user-friendly dan informasinya lengkap. Semoga terus dikembangkan dengan fitur-fitur baru yang lebih menarik.',
                'created_at' => date('Y-m-d H:i:s', strtotime('-6 days')),
                'updated_at' => date('Y-m-d H:i:s', strtotime('-6 days')),
            ],
            [
                'name' => 'Sari Dewi',
                'email' => 'sari.dewi@gmail.com',
                'message' => 'Terima kasih untuk tutorial-tutorialnya yang sangat bermanfaat. Sebagai pemula dalam programming, saya merasa sangat terbantu dengan penjelasan yang mudah dipahami.',
                'created_at' => date('Y-m-d H:i:s', strtotime('-4 days')),
                'updated_at' => date('Y-m-d H:i:s', strtotime('-4 days')),
            ],
            [
                'name' => 'Budi Santoso',
                'email' => 'budi.santoso@yahoo.com',
                'message' => 'Aplikasi CRUD ini sangat inspiratif! Kode-kodenya clean dan mudah dipahami. Bisa jadi referensi untuk project saya yang sedang dikerjakan.',
                'created_at' => date('Y-m-d H:i:s', strtotime('-3 days')),
                'updated_at' => date('Y-m-d H:i:s', strtotime('-3 days')),
            ],
            [
                'name' => 'Lisa Permata',
                'email' => 'lisa.permata@outlook.com',
                'message' => 'Design UI/UX-nya keren! Penggunaan Bootstrap dan SweetAlert2 membuat aplikasi terlihat modern dan professional. Great work!',
                'created_at' => date('Y-m-d H:i:s', strtotime('-2 days')),
                'updated_at' => date('Y-m-d H:i:s', strtotime('-2 days')),
            ],
            [
                'name' => 'Doni Pratama',
                'email' => 'doni.pratama@email.co.id',
                'message' => 'Form validasinya sudah bagus, tapi mungkin bisa ditambahkan fitur upload gambar untuk artikel. Overall, aplikasinya sudah sangat baik untuk pembelajaran.',
                'created_at' => date('Y-m-d H:i:s', strtotime('-1 day')),
                'updated_at' => date('Y-m-d H:i:s', strtotime('-1 day')),
            ],
            [
                'name' => 'Maya Sari',
                'email' => 'maya.sari@student.ac.id',
                'message' => 'Sebagai mahasiswa IT, saya sangat terbantu dengan source code ini untuk tugas akhir. Dokumentasinya juga lengkap. Terima kasih banyak!',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert data
        $this->db->table('feedback')->insertBatch($data);
    }
}
