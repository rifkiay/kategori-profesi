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
            'deskripsi_profesi' => 'Software Developer adalah profesional yang bertanggung jawab untuk merancang, mengembangkan, menguji, dan memelihara perangkat lunak. Mereka bekerja dengan berbagai bahasa pemrograman untuk menciptakan aplikasi atau sistem yang memenuhi kebutuhan pengguna dan bisnis. Selama proses pengembangan, mereka berkolaborasi dengan tim lintas fungsi, termasuk analis bisnis, desainer UI/UX, dan pengembang lainnya, untuk menciptakan solusi perangkat lunak yang efisien dan efektif. 
            
            Selain menulis kode, seorang Software Developer juga harus memecahkan masalah teknis, mengidentifikasi dan memperbaiki bug, serta memastikan perangkat lunak yang dikembangkan berfungsi dengan baik di berbagai perangkat atau sistem operasi. Mereka harus selalu mengikuti tren teknologi terbaru untuk memastikan aplikasi yang dikembangkan tetap relevan dan aman.',
            'keterampilan' => 'Bahasa Pemrograman: Python, Java, C++, JavaScript, SQL.
            Pengembangan Web: HTML, CSS, JavaScript, Angular, React. 
            Pengembangan Aplikasi Mobile: Android, iOS, Flutter, Swift. 
            Pemahaman Basis Data: MySQL, PostgreSQL, MongoDB. 
            Alat Manajemen Proyek: Git, GitHub, JIRA, Trello.',

            'gaji' => '6.000.000',
            'gambar_profesi' => 'gambar/profesi/teknologi_informasi/sofware_developer/software-developer.jpg',
        ]);

        Profesi::create([
            'id_kategori_profesi' => 1,
            'nama_profesi' => 'Data Scientist',
            'deskripsi_profesi' => 'Data Scientist adalah profesional yang menganalisis data kompleks untuk menemukan pola, tren, dan wawasan yang dapat memberikan nilai strategis bagi organisasi. Mereka mengumpulkan, mengolah, dan membersihkan data besar dari berbagai sumber untuk mengidentifikasi informasi yang relevan. Menggunakan algoritma statistik, pembelajaran mesin, dan teknik analisis lanjutan, Data Scientist menciptakan model yang dapat memprediksi perilaku, tren pasar, atau hasil bisnis di masa depan. Pekerjaan ini membutuhkan pemahaman mendalam tentang statistik dan matematika, serta kemampuan untuk menerjemahkan temuan data menjadi rekomendasi yang dapat digunakan oleh pihak manajemen.
        
            Selain analisis data, Data Scientist juga bertanggung jawab untuk mengembangkan dan mengimplementasikan solusi berbasis data yang mendukung pengambilan keputusan bisnis. Mereka bekerja sama dengan tim lain, seperti insinyur data dan analis bisnis, untuk menciptakan sistem yang mengoptimalkan pengelolaan data dan meningkatkan efisiensi operasional. Keahlian dalam pemrograman (seperti Python, R, dan SQL), serta pemahaman yang kuat tentang teknologi big data dan visualisasi data, sangat penting dalam pekerjaan ini. Dengan kemampuannya untuk mengolah dan memanfaatkan data dalam jumlah besar, seorang Data Scientist membantu organisasi dalam merumuskan strategi yang berbasis pada data untuk meningkatkan kinerja dan keuntungan bisnis.',
            'keterampilan' => 'Python
            R
            SQL
            Statistik
            Machine Learning
            Visualisasi Data
            Pemahaman Bisnis',
            'gaji' => '6.000.000 - 15.000.000',
            'gambar_profesi' => 'gambar/profesi/teknologi_informasi/data_science/data_scientist.jpg',
        ]);        

        Profesi::create([
            'id_kategori_profesi' => 1,
            'nama_profesi' => 'Network Engineer',
            'deskripsi_profesi' => 'Network Engineer adalah seorang profesional yang memainkan peran penting dalam merancang, mengelola, dan memelihara infrastruktur jaringan komputer yang mendukung berbagai operasional dalam suatu organisasi. Tanggung jawab utama mereka mencakup memastikan bahwa jaringan tetap berjalan dengan lancar, aman, dan tanpa gangguan, serta mampu menangani volume lalu lintas data yang tinggi. Mereka mengelola perangkat keras jaringan seperti router, switch, firewall, dan server, serta perangkat lunak yang mendukung komunikasi antar perangkat dan aplikasi. Selain itu, Network Engineer juga bertanggung jawab untuk melakukan pemeliharaan rutin dan peningkatan sistem agar tetap mengikuti perkembangan teknologi terbaru yang dapat meningkatkan kinerja dan keamanan jaringan.
        
            Selain perawatan dan pengelolaan jaringan, seorang Network Engineer juga bertugas untuk memantau dan menganalisis kinerja jaringan secara real-time untuk mengidentifikasi potensi masalah atau gangguan yang dapat mempengaruhi kelancaran operasional bisnis. Jika terjadi gangguan atau kerusakan, mereka akan segera mengambil langkah-langkah perbaikan yang diperlukan. Kemampuan dalam troubleshooting sangat penting dalam profesi ini, karena mereka harus dapat mendiagnosis dan mengatasi masalah dengan cepat agar jaringan tetap andal dan efisien dalam mendukung kebutuhan bisnis yang terus berkembang.',
            'keterampilan' => 'CCNA
            LAN/WAN
            Troubleshooting
            Firewall
            Virtualisasi
            Monitoring Tools',
            'gaji' => '5.000.000 - 10.000.000',
            'gambar_profesi' => 'gambar/profesi/teknologi_informasi/network_engineer/network_engineer.jpg',
        ]);        
             
        Profesi::create([
            'id_kategori_profesi' => 1,
            'nama_profesi' => 'Cybersecurity Analyst',
            'deskripsi_profesi' => 'Cybersecurity Analyst bertugas melindungi sistem informasi dari ancaman dunia maya dengan mengidentifikasi potensi risiko dan memantau jaringan dari aktivitas mencurigakan. Mereka bertanggung jawab mengamankan data penting serta mencegah akses yang tidak sah ke sistem organisasi. Cybersecurity Analyst juga melakukan analisis forensik digital pasca-insiden guna mengidentifikasi akar penyebab masalah dan mencegah serangan serupa di masa mendatang. Mereka harus memastikan bahwa semua sistem keamanan tetap mutakhir dan mematuhi kebijakan serta standar keamanan informasi yang berlaku.
        
            Selain itu, Cybersecurity Analyst juga membantu organisasi dalam mencegah dan menangani serangan siber. Mereka memastikan infrastruktur keamanan tetap kuat dengan mengimplementasikan langkah-langkah proteksi, melakukan pengujian kerentanan, dan memperbarui sistem pertahanan secara berkala. Peran ini mengharuskan mereka untuk bekerja sama dengan tim internal dan eksternal, seperti tim audit dan tim pengembang perangkat lunak, untuk memperkuat kebijakan keamanan. Mereka juga bertanggung jawab untuk memberikan pelatihan kepada staf perusahaan terkait praktik keamanan siber guna meminimalkan risiko dari ancaman berbasis manusia.',
            'keterampilan' => 'Analisis Risiko
            Firewall
            IDS/IPS
            Kriptografi
            Ethical Hacking
            CEH
            CISSP',
            'gaji' => '7.000.000 - 12.000.000',
            'gambar_profesi' => 'gambar/profesi/teknologi_informasi/cyber_securtiy/cybersecurity_analyst.jpg',
        ]);
        
        Profesi::create([
            'id_kategori_profesi' => 1,
            'nama_profesi' => 'Cloud Architect',
            'deskripsi_profesi' => 'Cloud Architect bertanggung jawab merancang dan mengelola infrastruktur berbasis cloud yang mendukung kebutuhan bisnis. Mereka bertugas memastikan keamanan, skalabilitas, dan efisiensi sistem cloud dengan mengintegrasikan layanan dari platform seperti AWS, Azure, dan Google Cloud. Dalam perannya, Cloud Architect juga mengawasi proses pengembangan arsitektur cloud, mulai dari perencanaan awal hingga penerapan dan pemeliharaan sistem. Mereka bertanggung jawab untuk mengidentifikasi solusi terbaik yang sesuai dengan kebutuhan bisnis, memastikan integrasi mulus antara sistem on-premise dan cloud, serta mengadopsi praktik terbaik dalam pengelolaan keamanan dan privasi data.
        
            Selain itu, Cloud Architect memiliki peran kunci dalam strategi migrasi ke cloud. Mereka berkolaborasi dengan tim pengembang, administrator sistem, dan manajer TI untuk memastikan transisi yang lancar dan tanpa gangguan terhadap operasi bisnis. Cloud Architect juga bertugas untuk mengoptimalkan kinerja sistem cloud dengan memanfaatkan alat otomatisasi, meningkatkan efisiensi biaya operasional, serta memastikan ketersediaan dan keandalan layanan. Sebagai bagian dari pekerjaannya, mereka perlu mengikuti perkembangan teknologi cloud terbaru, termasuk layanan berbasis container, mikroservices, dan manajemen infrastruktur sebagai kode (IaC), guna memastikan bahwa arsitektur cloud tetap mutakhir dan relevan dengan kebutuhan industri.',
            'keterampilan' => 'AWS
            Azure
            GCP
            Keamanan Cloud
            Mikroservices
            Sertifikasi',
            'gaji' => '10.000.000 - 12.000.000',
            'gambar_profesi' => 'gambar/profesi/teknologi_informasi/cloud/cloud.jpeg',
        ]);
        

        // // Kesehatan
        Profesi::create([
            'id_kategori_profesi' => 2,
            'nama_profesi' => 'Dokter Umum',
            'deskripsi_profesi' => 'Dokter Umum memiliki peran yang sangat penting dalam memberikan layanan kesehatan primer kepada masyarakat. Mereka bertugas untuk melakukan pemeriksaan fisik, mendiagnosis penyakit, serta memberikan pengobatan dan perawatan medis yang diperlukan. Selain itu, mereka juga bertanggung jawab untuk memberikan edukasi kepada pasien mengenai gaya hidup sehat, pencegahan penyakit, dan pengelolaan kondisi kesehatan tertentu. Sebagai profesional kesehatan pertama yang sering dihubungi oleh pasien, dokter umum memainkan peran kunci dalam mendeteksi penyakit sejak dini dan merujuk pasien ke spesialis jika diperlukan.
        
            Selain memberikan perawatan medis, seorang dokter umum juga harus memiliki keterampilan komunikasi yang baik untuk berinteraksi dengan pasien dari berbagai latar belakang. Mereka harus mampu mengumpulkan informasi medis dengan tepat, membuat keputusan medis yang bijaksana, serta menjelaskan diagnosis dan opsi pengobatan dengan jelas. Dokter Umum juga harus terus memperbarui pengetahuan medis mereka mengikuti perkembangan ilmu kedokteran terbaru, serta menjaga lisensi praktik mereka dengan memenuhi persyaratan yang berlaku. Keterampilan dalam pengambilan keputusan klinis yang cepat dan tepat sangat penting, mengingat banyak kondisi medis yang membutuhkan penanganan segera.',
            'keterampilan' => 'Pengetahuan Medis
            Diagnostik
            Komunikasi
            Pengambilan
            Keputusan
            Lisensi Praktik',
            'gaji' => '4.000.000 - 10.000.000',
            'gambar_profesi' => 'gambar/profesi/kesehatan/dokter_umum/dokter_umum.jpg',
        ]);
        
        Profesi::create([
            'id_kategori_profesi' => 2,
            'nama_profesi' => 'Perawat',
            'deskripsi_profesi' => 'Perawat adalah tenaga kesehatan yang memiliki peran vital dalam memberikan perawatan langsung kepada pasien di berbagai fasilitas medis, seperti rumah sakit, klinik, dan puskesmas. Mereka bertanggung jawab untuk memantau kondisi pasien, memberikan pengobatan sesuai dengan instruksi dokter, serta memastikan kenyamanan dan kebutuhan fisik pasien terpenuhi. Selain itu, perawat juga berperan dalam merawat pasien pascaoperasi, mengelola perawatan luka, serta membantu dalam prosedur medis yang diperlukan. Perawat bekerja dalam tim medis yang lebih luas dan sering kali menjadi penghubung utama antara pasien dan dokter atau tenaga medis lainnya.
        
            Selain tugas medis, perawat juga memberikan edukasi penting kepada pasien dan keluarga mengenai cara mengelola kondisi kesehatan atau penyakit tertentu, seperti diabetes, hipertensi, atau penyakit kronis lainnya. Keterampilan komunikasi yang baik sangat dibutuhkan dalam profesi ini, karena perawat sering kali berinteraksi langsung dengan pasien yang mungkin mengalami stres atau kecemasan terkait kondisi kesehatannya. Perawat juga harus memiliki ketahanan fisik dan mental yang kuat, mengingat pekerjaan mereka yang sering kali memerlukan waktu yang panjang dan melibatkan situasi emosional yang kompleks. Keberhasilan dalam profesi ini sangat bergantung pada kemampuan perawat dalam memberikan perawatan yang penuh perhatian dan responsif terhadap kebutuhan pasien.',
            'keterampilan' => 'gambar/Pengetahuan Keperawatan
            Komunikasi
            Empati
            Manajemen Waktu
            Ketahanan Fisik dan Mental',
            'gaji' => '3.000.000 - 6.000.000',
            'gambar_profesi' => 'gambar/profesi/kesehatan/perawat/perawat.jpg',
        ]);
        
        Profesi::create([
            'id_kategori_profesi' => 2,
            'nama_profesi' => 'Apoteker',
            'deskripsi_profesi' => 'Apoteker adalah tenaga profesional di bidang farmasi yang bertanggung jawab untuk memastikan penggunaan obat yang aman, efektif, dan sesuai dengan kebutuhan pasien. Mereka berperan dalam proses pengadaan, penyimpanan, distribusi, dan pengendalian obat-obatan di fasilitas kesehatan seperti rumah sakit, apotek, dan puskesmas. Selain itu, apoteker bertugas memverifikasi resep dari dokter, memastikan dosis obat yang diberikan sudah tepat, serta memberikan informasi kepada pasien tentang cara penggunaan obat yang benar. Dengan peran ini, apoteker membantu meningkatkan efektivitas pengobatan dan meminimalkan risiko efek samping atau interaksi obat yang berbahaya.

            Selain menangani obat-obatan, apoteker juga bertanggung jawab untuk memberikan edukasi kepada pasien dan tenaga medis mengenai pengelolaan obat, efek samping, dan interaksi antarobat. Mereka memastikan bahwa semua proses distribusi obat sesuai dengan regulasi farmasi dan standar keselamatan. Dalam lingkup industri farmasi, apoteker juga dapat terlibat dalam penelitian dan pengembangan obat baru, serta pengawasan kualitas produk farmasi. Keterampilan dalam farmakologi, analisis resep, serta pemahaman tentang regulasi farmasi sangat penting bagi seorang apoteker. Dengan peran ini, apoteker membantu memastikan bahwa pengelolaan obat dilakukan secara aman, efektif, dan sesuai dengan ketentuan hukum yang berlaku.',
            'keterampilan' => 'Farmakologi
            Analisis Resep
            Komunikasi
            Manajemen Obat
            Regulasi Farmasi',
            'gaji' => '4.000.000 - 8.000.000',
            'gambar_profesi' => 'gambar/profesi/kesehatan/apoteker/apoteker.jpg',
        ]);
    
        Profesi::create([
            'id_kategori_profesi' => 2,
            'nama_profesi' => 'Ahli Gizi',
            'deskripsi_profesi' => 'Ahli Gizi adalah tenaga profesional yang bertanggung jawab dalam merancang program nutrisi untuk individu maupun kelompok guna mendukung kesehatan dan mencegah penyakit. Mereka mengevaluasi kebutuhan gizi berdasarkan usia, kondisi kesehatan, dan gaya hidup seseorang, kemudian memberikan rekomendasi pola makan yang sesuai. Ahli Gizi juga terlibat dalam pengelolaan program diet khusus bagi pasien dengan kondisi kesehatan tertentu, seperti diabetes, hipertensi, atau gangguan pencernaan. Dalam lingkup komunitas, mereka berperan dalam kampanye edukasi mengenai pentingnya gizi seimbang serta mendorong kebiasaan makan sehat di masyarakat.
        
            Selain memberikan layanan konsultasi, Ahli Gizi juga bekerja di fasilitas kesehatan seperti rumah sakit, puskesmas, klinik kesehatan, hingga lembaga pendidikan dan industri makanan. Mereka terlibat dalam penelitian terkait nutrisi, pengembangan produk pangan sehat, serta evaluasi kebijakan kesehatan gizi. Ahli Gizi harus memiliki keterampilan komunikasi yang baik untuk menjelaskan konsep gizi kepada pasien dan masyarakat umum. Dengan pengetahuan mendalam di bidang ilmu gizi dan kemampuannya dalam merencanakan program nutrisi, Ahli Gizi berperan penting dalam upaya meningkatkan kualitas kesehatan masyarakat dan mencegah munculnya penyakit yang disebabkan oleh pola makan yang buruk.',
            'keterampilan' => 'Ilmu Gizi
            Komunikasi
            Perencanaan Program
            Penelitian
            Empati',
            'gaji' => '3.000.000 - 6.000.000',
            'gambar_profesi' => 'gambar/profesi/kesehatan/ahli_gizi/ahli_gizi.jpg',
        ]);
        
        Profesi::create([
            'id_kategori_profesi' => 2,
            'nama_profesi' => 'Teknisi Radiologi',
            'deskripsi_profesi' => 'Teknisi Radiologi adalah tenaga profesional di bidang kesehatan yang bertanggung jawab untuk mengoperasikan peralatan pencitraan medis seperti X-ray, CT Scan, dan MRI. Mereka membantu dokter dalam proses diagnosis dengan menghasilkan gambar internal tubuh pasien yang akurat dan berkualitas tinggi. Sebelum prosedur dimulai, Teknisi Radiologi memastikan bahwa pasien berada dalam posisi yang tepat dan memberikan instruksi kepada pasien untuk mengurangi pergerakan yang dapat memengaruhi hasil pencitraan. Selain itu, mereka bertanggung jawab untuk memprogram pengaturan mesin sesuai kebutuhan pencitraan yang diminta oleh dokter, serta memastikan bahwa kualitas gambar yang dihasilkan optimal.
        
            Salah satu aspek penting dari pekerjaan Teknisi Radiologi adalah memastikan keselamatan pasien dan dirinya sendiri dari paparan radiasi. Mereka wajib mematuhi protokol keselamatan radiasi dengan menggunakan alat pelindung diri (APD) serta mengatur dosis radiasi yang aman selama proses pencitraan. Teknisi Radiologi juga bertanggung jawab untuk memelihara dan memeriksa kelayakan operasional peralatan pencitraan secara berkala guna memastikan mesin tetap berfungsi dengan baik. Profesi ini membutuhkan keterampilan teknis yang tinggi, perhatian terhadap detail, serta kemampuan komunikasi yang efektif dalam memberikan instruksi kepada pasien. Peran mereka sangat penting dalam mendukung proses diagnosis medis yang cepat, akurat, dan aman bagi pasien.',
            'keterampilan' => 'Operasional Alat Radiologi
            Keselamatan Radiasi
            Ketelitian
            Komunikasi
            Pemecahan Masalah',
            'gaji' => '4.000.000 - 7.000.000',
            'gambar_profesi' => 'gambar/profesi/kesehatan/radiologis/radiologis.jpg',
        ]);  
        
         // // Pendidikan 
         Profesi::create([
            'id_kategori_profesi' => 3,
            'nama_profesi' => 'Guru Sekolah Dasar',
            'deskripsi_profesi' => 'Guru Sekolah Dasar bertanggung jawab untuk mendidik siswa di tingkat pendidikan dasar, menciptakan materi pembelajaran yang kreatif, dan membantu pengembangan akademik, sosial, serta emosional siswa.',


            'keterampilan' => 'Kemampuan Mengajar
            Pengetahuan Kurikulum
            Teknologi Pendidikan
            Komunikasi dan Kesabaran',
            'gaji' => '4.500.000',
            'gambar_profesi' => 'gambar/profesi/pendidikan/Guru Sd/Guru Sd.png',
        ]);
        
        Profesi::create([
            'id_kategori_profesi' => 3,
            'nama_profesi' => 'Dosen Perguruan Tinggi',
            'deskripsi_profesi' => 'Dosen mengajar di perguruan tinggi, melakukan penelitian, dan membimbing mahasiswa untuk pengembangan akademik dan karier mereka.',


            'keterampilan' => 'Pengajaran dan Penelitian
            Penyusunan Materi Perkuliahan
            Penulisan Akademik
            Komunikasi',

            'gaji' => '10.000.000',
            'gambar_profesi' => 'gambar/profesi/pendidikan/Dosen/Dosen.png',
        ]);
        
        Profesi::create([
            'id_kategori_profesi' => 3,
            'nama_profesi' => 'Konselor Pendidikan',
            'deskripsi_profesi' => 'Konselor Pendidikan mendukung siswa dalam aspek pribadi, akademik, dan sosial dengan memberikan bimbingan terkait studi dan karier.',


            'keterampilan' => 'Konseling Individu
            Pemahaman Psikologi Pendidikan
            Pemecahan Masalah
            Komunikasi Empatik',
            'gaji' => '3.000.000',
            'gambar_profesi' => 'gambar/profesi/pendidikan/konselor pendidikan/Konselor Pendidikan.png',
        ]);
    
        Profesi::create([
            'id_kategori_profesi' => 3,
            'nama_profesi' => 'Pengembang Kurikulum',
            'deskripsi_profesi' => 'Pengembang Kurikulum merancang dan mengevaluasi kurikulum pendidikan agar relevan dan memenuhi kebutuhan peserta didik.',


            'keterampilan' => 'Desain Kurikulum
            Evaluasi Pendidikan
            Pemahaman Kebijakan Pendidikan',
            'gaji' => '9.000.000',
            'gambar_profesi' => 'gambar/profesi/pendidikan/pengembang kurikulum/Pengembang Kurikulum.png',
        ]);
        
        Profesi::create([
            'id_kategori_profesi' => 3,
            'nama_profesi' => 'Kepala Sekolah',
            'deskripsi_profesi' => 'Kepala Sekolah adalah pemimpin sekolah yang mengelola operasional, memotivasi guru, dan memastikan keberhasilan proses pendidikan.',


            'keterampilan' => 'Manajemen Sekolah
            Kepemimpinan
            Komunikasi Efektif',
            'gaji' => '12.000.000',
            'gambar_profesi' => 'gambar/profesi/pendidikan/Kepala Sekolah/Kepala Sekolah.png',
        ]);

        // // keuangan
        Profesi::create([
            'id_kategori_profesi' => 4,
            'nama_profesi' => 'Analis Keuangan',
            'deskripsi_profesi' => 'Analis Keuangan menganalisis data keuangan perusahaan untuk memberikan rekomendasi strategi keuangan dan investasi.',


            'keterampilan' => 'Analisis Keuangan
            Pengelolaan Risiko
            Pemahaman Pasar Keuangan',
            'gaji' => '8.000.000',
            'gambar_profesi' => 'gambar/profesi/Keuangan/Analisis Keuangan/Analisis Keuangan.png',
        ]);
        
        Profesi::create([
            'id_kategori_profesi' => 4,
            'nama_profesi' => 'Akuntan',
            'deskripsi_profesi' => 'Akuntan bertanggung jawab untuk mencatat, menganalisis, dan menyusun laporan keuangan perusahaan.',


            'keterampilan' => 'Akuntansi dan Pajak
            Analisis Laporan Keuangan
            Pemahaman Hukum Perpajakan',
            'gaji' => '7.400.000',
            'gambar_profesi' => 'gambar/profesi/Keuangan/Akuntan/Akuntan.png',
        ]);
        
        Profesi::create([
            'id_kategori_profesi' => 4,
            'nama_profesi' => 'Konsultan Keuangan',
            'deskripsi_profesi' => 'Konsultan Keuangan membantu klien dalam merencanakan dan mengelola keuangan untuk mencapai tujuan finansial.',


            'keterampilan' => 'Perencanaan Keuangan
            Analisis Risiko
            Pengelolaan Portofolio',
            'gaji' => '10.000.000',
            'gambar_profesi' => 'gambar/profesi/Keuangan/Konsultan Keuangan/Konsultan Keuangan.png',
        ]);
    
        Profesi::create([
            'id_kategori_profesi' => 4,
            'nama_profesi' => 'Manajer Investasi',
            'deskripsi_profesi' => 'Manajer Investasi mengelola portofolio investasi klien untuk memaksimalkan keuntungan berdasarkan strategi yang disepakati.',


            'keterampilan' => 'Manajemen Portofolio
            Strategi Investasi
            Analisis Pasar',
            'gaji' => '14.000.000',
            'gambar_profesi' => 'gambar/profesi/Keuangan/Manager Investasi/Manager Investasi.png',
        ]);
        
        Profesi::create([
            'id_kategori_profesi' => 4,
            'nama_profesi' => 'Penasihat Pajak',
            'deskripsi_profesi' => 'Penasihat Pajak memberikan panduan kepada individu atau perusahaan terkait peraturan pajak dan strategi untuk memaksimalkan keuntungan setelah pajak.',


            'keterampilan' => 'Pemahaman Perpajakan
            Penyusunan Laporan Pajak
            Kepatuhan Pajak',
            'gaji' => '9.000.000',
            'gambar_profesi' => 'gambar/profesi/Keuangan/Penasihat Pajak/Penasihat Pajak.png',
        ]);

        // // konstruksi
        Profesi::create([
            'id_kategori_profesi' => 6,
            'nama_profesi' => 'Arsitek',
            'deskripsi_profesi' => 'Merancang bangunan dan struktur, memadukan elemen estetika dan fungsionalitas. Mereka bekerja sama dengan klien dan tim konstruksi untuk menghasilkan desain yang sesuai kebutuhan.',
        
            'keterampilan' => 'AutoCAD
            SketchUp
            Pemahaman Peraturan Bangunan
            Kreativitas Desain',
            'gaji' => '7.000.000' ,
            'gambar_profesi' => 'gambar/profesi/Konstruksi/Arsitek/arsitek.jpg' ,
        ]);
        
        Profesi::create([
           'id_kategori_profesi' => 6,
           'nama_profesi' => 'Manajer Proyek Konstruksi',
           'deskripsi_profesi' => 'Mengawasi proyek konstruksi dari awal hingga selesai, mengelola anggaran, jadwal, dan tim.',
        
           'keterampilan' => 'Manajemen Proyek
           Negosiasi Kontrak
           Kepemimpinan
           Pemahaman Hukum Konstruksi',
           'gaji' => '15.000.000',
           'gambar_profesi' => 'gambar/profesi/Konstruksi/Manajer Proyek Konstruksi/Manajer Proyek Konstruksi.jpg',
        ]);
        
        Profesi::create([
            'id_kategori_profesi' => 6,
            'nama_profesi' => 'Surveyor Konstruksi',
            'deskripsi_profesi' => 'Mengukur tanah dan properti untuk menentukan batas lahan dan membantu dalam perencanaan konstruksi.',
    
            'keterampilan' => 'Penggunaan Alat Ukur
            Keterampilan Teknis
            Pemahaman Geodesi',
            'gaji' => '5.000.000',
            'gambar_profesi' => 'gambar/profesi/Konstruksi/Surveyor Konstruksi/Surveyor Konstruksi.jpg',
        ]);
    
        Profesi::create([
            'id_kategori_profesi' => 6,
            'nama_profesi' => 'Insinyur Sipil',
            'deskripsi_profesi' => 'Merancang dan mengawasi pembangunan infrastruktur seperti jalan, jembatan, dan gedung.',
        
            'keterampilan' => 'Perhitungan struktural
            AutoCADn
            Manajemen konstruksi',
            'gaji' => '10.000.000 - 25.000.000',
            'gambar_profesi' => 'gambar/profesi/Konstruksi/Insinyur Sipil/insinyur sipil.jpg',
        ]);
        
        Profesi::create([
            'id_kategori_profesi' => 6,
            'nama_profesi' => 'Pekerja Konstruksi',
            'deskripsi_profesi' => 'Melakukan pekerjaan fisik dalam pembangunan, seperti memasang rangka, beton, dan material lainnya.',
        
            'keterampilan' => 'Penggunaan alat berat
            Teknik konstruksi
            Ketahanan fisik',
            'gaji' => '3.000.000 - 7.000.000',
            'gambar_profesi' => 'gambar/profesi/Konstruksi/Pekerja Konstruksi/Pekerja Konstruksi.jpg',
        ]);

        //seni & design
        Profesi::create([
            'id_kategori_profesi' => 7,
            'nama_profesi' => 'Desainer Grafis',
            'deskripsi_profesi' => 'Membuat desain visual untuk media cetak atau digital seperti logo, poster, dan situs web.',
           
            'keterampilan' => 'Adobe Photoshop
            Illustrator\nInDesign
            Kreativitas Desain',
            'gaji' => '5.000.000',
            'gambar_profesi' => 'gambar/profesi/Seni & Desain/Desainer Grafis/desainer grafis.jpg',
        ]);
        
        Profesi::create([
            'id_kategori_profesi' => 7,
            'nama_profesi' => 'Animator',
            'deskripsi_profesi' => 'Membuat animasi untuk film, iklan, atau video game dengan menggunakan software animasi.',
        
            'keterampilan' => 'Adobe After Effects
            Blender
            Maya
            Storytelling Visual',
            'gaji' => '3.000.000',
            'gambar_profesi' => 'gambar/profesi/Seni & Desain/Animator/animator.jpg'
        ]);
        
        Profesi::create([
            'id_kategori_profesi' => 7,
            'nama_profesi' => 'Fotografer',
            'deskripsi_profesi' => 'Mengambil foto untuk keperluan komersial, artistik, atau dokumentasi.',
        
            'keterampilan' => 'Komposisi Gambar
            Pemahaman Cahaya
            Penggunaan Kamera Profesional',
            'gaji' => '4.000.000',
            'gambar_profesi' => 'gambar/profesi/Seni & Desain/Fotografer/fotografer.jpg'
        ]);
    
        Profesi::create([
            'id_kategori_profesi' => 7,
            'nama_profesi' => 'Desainer Interior',
            'deskripsi_profesi' => 'Mendesain tata letak interior bangunan agar fungsional, estetis, dan sesuai dengan permintaan klien.',
        
            'keterampilan' => 'AutoCAD
            SketchUp
            Pemilihan Material
            Pengaturan Ruang',
            'gaji' => '6.000.000 - 17.000.000',
            'gambar_profesi' => 'gambar/profesi/Seni & Desain/Desainer Interior/desainer interior.jpg',
        ]);
        
        Profesi::create([
            'id_kategori_profesi' => 7,
            'nama_profesi' => 'Ilustrator',
            'deskripsi_profesi' => 'Membuat ilustrasi untuk buku, majalah, atau materi promosi, baik secara digital maupun manual.',
        
            'keterampilan' => 'Menggambar
            Kreativitas
            Penggunaan Tablet Grafis',
            'gaji' => '5.000.000 - 12.000.000',
            'gambar_profesi' => 'gambar/profesi/Seni & Desain/Ilustrator/ilustrator.jpg'
        ]);  

        // Influencer
        Profesi::create([
            'id_kategori_profesi' => 9,
            'nama_profesi' => 'Influencer Makanan dan Minuman',
            'deskripsi_profesi' => 'Influencer Makanan dan Minuman fokus pada konten yang berhubungan dengan makanan, resep, review restoran, dan produk minuman. Mereka sering mengulas tempat makan, menunjukkan cara memasak resep, atau mempromosikan produk makanan dan minuman tertentu. Influencer ini berperan penting dalam mempengaruhi kebiasaan makan pengikut mereka dan sering kali bekerja sama dengan brand makanan untuk mempromosikan produk mereka.',
           
           
            'keterampilan' => 'Fotografi Makanan
            Pengetahuan Kuliner
            Konten Resep
            Pemasaran Makanan
            Keterampilan Menulis',
            'gaji' => '3.000.000 - 20.000.000',
            'gambar_profesi' => 'gambar/profesi/influencer/Influencer Makanan dan Minuman/Influencer_Makanan _dan _Minuman.jpg',
        ]);

        Profesi::create([
            'id_kategori_profesi' => 9,
            'nama_profesi' => 'Influencer Fashion',
            'deskripsi_profesi' => 'Influencer Fashion dikenal karena gaya pakaian mereka yang trendi dan kemampuan mereka untuk mempengaruhi tren mode. Mereka sering kali bekerja dengan merek fashion untuk mempromosikan koleksi terbaru, aksesori, atau tren pakaian. Influencer ini menciptakan konten yang menarik dengan mengenakan pakaian dari merek tertentu dan berbagi ide-ide styling yang dapat diikuti oleh pengikut mereka. Mereka juga berkolaborasi dengan desainer atau retailer fashion untuk kampanye pemasaran.',
           
           
            'keterampilan' => 'Fashion Styling
            Fotografi dan Mode
            Pemahaman Tren Fashion
            Branding dan Pemasaran
            Komunikasi Visual',
            'gaji' => '6.000.000 - 90.000.000',
            'gambar_profesi' => 'gambar/profesi/influencer/Influencer Fashion/Influencer_Fashion.jpg',
        ]);        

        Profesi::create([
            'id_kategori_profesi' => 9,
            'nama_profesi' => 'Influencer E-commerce',
            'deskripsi_profesi' => 'Influencer E-commerce berfokus pada promosi dan penjualan produk melalui platform e-commerce, seperti marketplace atau website pribadi. Mereka sering kali bekerja dengan merek untuk memasarkan produk tertentu dengan memberikan kode diskon, ulasan produk, atau konten yang menunjukkan bagaimana produk tersebut dapat digunakan. Influencer ini memiliki pengikut yang tertarik pada produk dan sering kali membeli melalui tautan atau promosi yang dibagikan oleh influencer.',
            
            
            'keterampilan' => 'Pemasaran Digital
            Strategi Penjualan
            Konten Visual
            Analisis Penjualan
            Hubungan Merek',
            'gaji' => '9.000.000 - 25.000.000',
            'gambar_profesi' => 'gambar/profesi/influencer/Influencer E-commerce/Influencer_E-commerce.jpg',
        ]);        
             
        Profesi::create([
            'id_kategori_profesi' => 9,
            'nama_profesi' => 'Influencer Media Sosial',
            'deskripsi_profesi' => 'Influencer Media Sosial adalah individu yang memiliki pengaruh besar di platform media sosial seperti Instagram, TikTok, dan YouTube. Mereka memanfaatkan pengikut yang banyak untuk mempromosikan produk, merek, atau gaya hidup. Influencer ini sering kali bekerja sama dengan merek untuk membuat konten yang sesuai dengan audiens mereka, baik berupa ulasan produk, tutorial, atau gaya hidup yang dapat menginspirasi pengikut. Mereka juga berperan dalam membangun hubungan dengan pengikut dan menjaga citra personal di media sosial.',
            
            
            'keterampilan' => 'Kreativitas Konten
            Fotografi dan Videografi
            Komunikasi Digital
            Branding Pribadi
            Pemasaran Influencer',
            'gaji' => '5.000.000 - 50.000.000',
            'gambar_profesi' => 'gambar/profesi/influencer/Influencer Media Sosial/Influencer_Media_Sosial.jpg',
        ]);
        
        Profesi::create([
           'id_kategori_profesi' => 9,
           'nama_profesi' => 'Influencer Travel',
           'deskripsi_profesi' => 'Influencer Travel berbagi pengalaman perjalanan mereka dengan pengikut, termasuk destinasi wisata, tips perjalanan, dan rekomendasi tempat makan atau akomodasi. Mereka sering berkolaborasi dengan agen perjalanan, maskapai penerbangan, atau merek pariwisata untuk mempromosikan tempat-tempat tertentu dan memotivasi orang untuk melakukan perjalanan. Konten yang mereka buat dapat berupa foto perjalanan, vlog, atau artikel tentang destinasi yang dikunjungi.',
           
           
           'keterampilan' => 'Penulisan Perjalanan
            Fotografi Wisata
            Pengalaman Budaya
            Pemasaran Pariwisata
            Komunikasi Visual',
            'gaji' => '4.000.000 - 30.000.000',
            'gambar_profesi' => 'gambar/profesi/influencer/Influencer Travel/Influencer_Travel.jpg',
        ]);
        
         // // Olahraga
         Profesi::create([
            'id_kategori_profesi' => 10,
            'nama_profesi' => 'Ahli Fisioterapi Olahraga',
            'deskripsi_profesi' => 'Ahli Fisioterapi Olahraga memiliki peran penting dalam pemulihan cedera fisik yang dialami oleh atlet. Mereka menggunakan teknik fisioterapi untuk mengurangi rasa sakit, meningkatkan fleksibilitas, dan membantu pemulihan otot serta sendi. 
            
            Ahli Fisioterapi Olahraga juga bekerja sama dengan pelatih untuk memastikan bahwa atlet dapat berlatih dan berkompetisi dengan aman setelah cedera. Mereka melakukan evaluasi kondisi fisik atlet dan merancang program rehabilitasi yang sesuai untuk memaksimalkan potensi fisik atlet.',
            'keterampilan' => 'Rehabilitasi Cedera
            Teknik Fisioterapi
            Pemulihan Otot
            Pengetahuan Anatomi
            Komunikasi',
            'gaji' => '5.000.000 - 10.000.000',
            'gambar_profesi' => 'gambar/profesi/olahraga/Ahli_Fisioterapi_Olahraga/Ahli_Fisioterapi_Olahraga.jpg',
        ]);
        
        Profesi::create([
            'id_kategori_profesi' => 10,
            'nama_profesi' => 'Analis Kinerja Olahraga',
            'deskripsi_profesi' => 'Analis Kinerja Olahraga bertugas untuk menganalisis data dan statistik terkait performa atlet atau tim selama latihan dan pertandingan. Mereka menggunakan teknologi dan perangkat lunak khusus untuk mengumpulkan data mengenai gerakan, kecepatan, kekuatan, dan parameter lain yang relevan dengan kinerja atlet. Data ini digunakan untuk memberikan wawasan yang berguna bagi pelatih dan atlet dalam merencanakan latihan yang lebih efektif dan meningkatkan performa mereka di lapangan.',
           
           
            'keterampilan' => 'Analisis Data
            Statistik Olahraga
            Teknologi Olahraga
            Pemecahan Masalah
            Pengamatan Detail',
            'gaji' => '6.000.000 - 12.000.000',
            'gambar_profesi' => 'gambar/profesi/olahraga/Analis_Kinerja_Olahraga/Analis_Kinerja_Olahraga.jpg',
        ]);
        
        Profesi::create([
            'id_kategori_profesi' => 10,
            'nama_profesi' => 'Manajer Tim Olahraga',
            'deskripsi_profesi' => 'Manajer Tim Olahraga bertugas mengelola segala aspek administratif dan operasional yang berkaitan dengan tim olahraga. Mereka bekerja untuk memastikan segala hal terkait pengaturan jadwal pertandingan, perjalanan, anggaran, serta kebutuhan logistik tim terlaksana dengan baik. Manajer juga bertanggung jawab dalam mengoordinasi komunikasi antara pelatih, pemain, sponsor, dan media. Dengan kemampuan organisasi yang baik, manajer tim olahraga berperan penting dalam memastikan tim dapat fokus pada kinerja di lapangan.',
            
            
            'keterampilan' => 'Manajemen Tim
            Pengorganisasian
            Administrasi
            Kepemimpinan
            Negosiasi',
            'gaji' => '6.000.000 - 12.000.000',
            'gambar_profesi' => 'gambar/profesi/olahraga/Manajer_Tim_Olahraga/Manajer_Tim_Olahraga.jpg',
        ]);
    
        Profesi::create([
            'id_kategori_profesi' => 10,
            'nama_profesi' => 'Pelatih Sepak Bola',
            'deskripsi_profesi' => 'Pelatih Sepak Bola bertanggung jawab untuk melatih dan mengembangkan keterampilan para pemain sepak bola. Mereka menyusun strategi permainan, latihan, dan taktik untuk meningkatkan performa tim. Pelatih juga mengawasi perkembangan fisik dan mental pemain serta memberikan motivasi untuk mencapai tujuan tim. Dalam liga atau klub profesional, pelatih bekerja dengan tim staf untuk merancang program latihan yang komprehensif. Selain itu, mereka juga berperan dalam pemilihan pemain yang tepat untuk setiap pertandingan.',
            
            
            'keterampilan' => 'Strategi Permainan
            Kepemimpinan
            Komunikasi
            Motivasi
            Analisis Kinerja',
            'gaji' => '8.000.000 - 20.000.000',
            'gambar_profesi' => 'gambar/profesi/olahraga/Pelatih_Sepak_bola/Pelatih_Sepak_bola.jpg',
        ]);
        
        Profesi::create([
            'id_kategori_profesi' => 10,
            'nama_profesi' => 'Penyelenggara Acara Olahraga',
            'deskripsi_profesi' => 'Penyelenggara Acara Olahraga bertanggung jawab untuk merencanakan dan mengorganisir berbagai acara olahraga, mulai dari turnamen kecil hingga event internasional besar. Mereka bekerja untuk memastikan kelancaran acara, termasuk pengaturan tempat, pengaturan logistik, serta koordinasi dengan tim, peserta, sponsor, dan media. Tugas mereka juga mencakup penyusunan anggaran, promosi acara, dan mengatasi masalah yang mungkin muncul sebelum, selama, atau setelah acara berlangsung.',
            
            
            'keterampilan' => 'Manajemen Acara
            Komunikasi
            Kepemimpinan
            Pengorganisasian
            Negosiasi',
            'gaji' => '4.000.000 - 8.000.000',
            'gambar_profesi' => 'gambar/profesi/olahraga/Penyelenggara_Acara_Olahraga/Penyelenggara_Acara_Olahraga.jpg',
        ]); 
    }
}