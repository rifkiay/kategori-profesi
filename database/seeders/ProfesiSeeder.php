<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profesi;

class ProfesiSeeder extends Seeder
{
    public function run(): void
    {
        // Teknologi Informasi
        Profesi::create([
            'id_kategori_profesi' => 1, 
            'nama_profesi' => 'Software Developer',
            'deskripsi_profesi' => 'Software Developer adalah profesional yang bertanggung jawab untuk merancang, mengembangkan, menguji, dan memelihara perangkat lunak. Mereka bekerja dengan berbagai bahasa pemrograman untuk menciptakan aplikasi atau sistem yang memenuhi kebutuhan pengguna dan bisnis. Selama proses pengembangan, mereka berkolaborasi dengan tim lintas fungsi, termasuk analis bisnis, desainer UI/UX, dan pengembang lainnya, untuk menciptakan solusi perangkat lunak yang efisien dan efektif. Selain menulis kode, seorang Software Developer juga harus memecahkan masalah teknis, mengidentifikasi dan memperbaiki bug, serta memastikan perangkat lunak yang dikembangkan berfungsi dengan baik di berbagai perangkat atau sistem operasi. Mereka harus selalu mengikuti tren teknologi terbaru untuk memastikan aplikasi yang dikembangkan tetap relevan dan aman.',
            'keterampilan' => 'Bahasa Pemrograman: Python, Java, C++, JavaScript, SQL; Pengembangan Web: HTML, CSS, JavaScript, Angular, React; Pengembangan Aplikasi Mobile: Android, iOS, Flutter, Swift; Pemahaman Basis Data: MySQL, PostgreSQL, MongoDB; Alat Manajemen Proyek: Git, GitHub, JIRA, Trello.',
            'gaji' => 'Junior: Rp 6.000.000 – Rp 10.000.000 per bulan. Mid-Level: Rp 10.000.000 – Rp 15.000.000 per bulan. Senior: Rp 15.000.000 – Rp 30.000.000 per bulan. Lead Developer atau Manager: Di atas Rp 30.000.000 per bulan.',
            'gambar_profesi' => 'software_developer.jpg',
        ]);

        Profesi::create([
            'id_kategori_profesi' => 1,
            'nama_profesi' => 'Data Scientist',
            'deskripsi_profesi' => 'Data Scientist adalah profesional yang menganalisis data kompleks untuk menemukan pola dan wawasan yang berharga menggunakan algoritma, statistik, dan pembelajaran mesin. Mereka bertanggung jawab untuk mengelola data besar dan menciptakan model prediktif untuk mendukung pengambilan keputusan bisnis.',
            'keterampilan' => 'Python, R, SQL, Statistik, Machine Learning, Visualisasi Data (Tableau, Power BI), Komunikasi Data, Pemahaman Bisnis',
            'gaji' => 'Entry Level: 8-15 juta, Mid-Level: 15-30 juta, Senior Level: 30-50 juta',
            'gambar_profesi' => 'data_scientist.jpg',
        ]);

        Profesi::create([
            'id_kategori_profesi' => 1,
            'nama_profesi' => 'Network Engineer',
            'deskripsi_profesi' => 'Network Engineer adalah profesional yang merancang, mengelola, dan memelihara jaringan komputer untuk memastikan komunikasi data yang lancar dan aman dalam organisasi. Mereka juga memastikan jaringan dapat diandalkan, efisien, dan sesuai kebutuhan bisnis.',
            'keterampilan' => 'CCNA, LAN/WAN, Troubleshooting Jaringan, Firewall, Virtualisasi Jaringan, Monitoring Tools',
            'gaji' => 'Entry Level: 5-10 juta, Mid-Level: 10-20 juta, Senior Level: 20-40 juta',
            'gambar_profesi' => 'network_engineer.jpg',
        ]);

        Profesi::create([
            'id_kategori_profesi' => 1,
            'nama_profesi' => 'Cybersecurity Analyst',
            'deskripsi_profesi' => 'Cybersecurity Analyst bertugas melindungi sistem informasi dari ancaman dunia maya dengan mengidentifikasi potensi risiko, memantau jaringan untuk aktivitas mencurigakan, dan menerapkan langkah-langkah keamanan. Mereka juga membantu organisasi dalam mencegah dan menangani serangan siber.',
            'keterampilan' => 'Analisis Risiko, Pengetahuan Firewall, IDS/IPS, Kriptografi, Ethical Hacking, Sertifikasi seperti CEH, CISSP',
            'gaji' => 'Entry Level: 7-12 juta, Mid-Level: 12-25 juta, Senior Level: 25-50 juta',
            'gambar_profesi' => 'cybersecurity_analyst.jpg',
        ]);

        Profesi::create([
            'id_kategori_profesi' => 1,
            'nama_profesi' => 'Cloud Architect',
            'deskripsi_profesi' => 'Cloud Architect bertanggung jawab merancang dan mengelola infrastruktur berbasis cloud untuk memenuhi kebutuhan bisnis, memastikan keamanan, skalabilitas, dan efisiensi. Mereka bekerja dengan teknologi seperti AWS, Azure, dan Google Cloud.',
            'keterampilan' => 'AWS, Azure, GCP, Keamanan Cloud, Mikroservices, Sertifikasi Profesional',
            'gaji' => 'Entry Level: 10-20 juta, Mid-Level: 20-35 juta, Senior Level: 35-60 juta',
            'gambar_profesi' => 'cloud_architect.jpg',
        ]);

        // Kesehatan
        Profesi::create([
            'id_kategori_profesi' => 2,
            'nama_profesi' => 'Dokter Umum',
            'deskripsi_profesi' => 'Dokter Umum bertugas memberikan layanan kesehatan primer, termasuk diagnosis, pengobatan, dan pencegahan penyakit pada pasien. Mereka adalah garis depan dalam sistem layanan kesehatan, memberikan edukasi dan perawatan kepada masyarakat.',
            'keterampilan' => 'Pengetahuan Medis, Diagnostik, Komunikasi, Pengambilan Keputusan, Lisensi Praktik',
            'gaji' => 'Entry Level: 4-10 juta, Mid-Level: 10-20 juta, Senior Level: 20-50 juta',
            'gambar_profesi' => 'dokter_umum.jpg',
        ]);

        Profesi::create([
            'id_kategori_profesi' => 2,
            'nama_profesi' => 'Perawat',
            'deskripsi_profesi' => 'Perawat adalah tenaga kesehatan yang memberikan perawatan langsung kepada pasien di berbagai fasilitas medis, memastikan kebutuhan kesehatan mereka terpenuhi. Mereka juga memberikan edukasi kepada pasien dan keluarganya tentang pengelolaan penyakit.',
            'keterampilan' => 'Pengetahuan Keperawatan, Komunikasi, Empati, Manajemen Waktu, Ketahanan Fisik dan Mental',
            'gaji' => 'Entry Level: 3-6 juta, Mid-Level: 6-12 juta, Senior Level: 12-20 juta',
            'gambar_profesi' => 'perawat.jpg',
        ]);

        Profesi::create([
            'id_kategori_profesi' => 2,
            'nama_profesi' => 'Apoteker',
            'deskripsi_profesi' => 'Apoteker bertugas memastikan penggunaan obat yang aman dan efektif. Mereka memberikan saran mengenai pengelolaan obat kepada pasien dan tenaga medis, serta memastikan kepatuhan terhadap regulasi farmasi.',
            'keterampilan' => 'Farmakologi, Analisis Resep, Komunikasi, Manajemen Obat, Regulasi Farmasi',
            'gaji' => 'Entry Level: 4-8 juta, Mid-Level: 8-15 juta, Senior Level: 15-30 juta',
            'gambar_profesi' => 'apoteker.jpg',
        ]);

        Profesi::create([
            'id_kategori_profesi' => 2,
            'nama_profesi' => 'Ahli Gizi',
            'deskripsi_profesi' => 'Ahli Gizi merancang program nutrisi untuk individu atau kelompok, membantu mengelola pola makan sehat, dan memberikan edukasi mengenai gizi untuk mencegah penyakit. Mereka bekerja di berbagai fasilitas kesehatan dan komunitas.',
            'keterampilan' => 'Ilmu Gizi, Komunikasi, Perencanaan Program, Penelitian, Empati',
            'gaji' => 'Entry Level: 3-6 juta, Mid-Level: 6-10 juta, Senior Level: 10-20 juta',
            'gambar_profesi' => 'ahli_gizi.jpg',
        ]);

        Profesi::create([
            'id_kategori_profesi' => 2,
            'nama_profesi' => 'Teknisi Radiologi',
            'deskripsi_profesi' => 'Teknisi Radiologi mengoperasikan alat pencitraan medis seperti X-ray, CT Scan, dan MRI untuk membantu diagnosis. Mereka memastikan keselamatan pasien selama prosedur dan menjaga kualitas alat pencitraan.',
            'keterampilan' => 'Operasional Alat Radiologi, Keselamatan Radiasi, Ketelitian, Komunikasi, Pemecahan Masalah',
            'gaji' => 'Entry Level: 4-7 juta, Mid-Level: 7-12 juta, Senior Level: 12-20 juta',
            'gambar_profesi' => 'teknisi_radiologi.jpg',
        ]);
    }
}
