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
            'gambar_profesi' => 'profesi/teknologi_informasi/sofware_developer/software-developer.jpg',
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
            'gambar_profesi' => 'profesi/teknologi_informasi/data_science/data_scientist.jpg',
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
            'gambar_profesi' => 'profesi/teknologi_informasi/network_engineer/network_engineer.jpg',
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
            'gambar_profesi' => 'profesi/teknologi_informasi/cyber_securtiy/cybersecurity_analyst.jpg',
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
            'gambar_profesi' => 'profesi/teknologi_informasi/cloud/cloud.jpeg',
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
            'gambar_profesi' => 'profesi/kesehatan/dokter_umum/dokter_umum.jpg',
        ]);
        
        Profesi::create([
            'id_kategori_profesi' => 2,
            'nama_profesi' => 'Perawat',
            'deskripsi_profesi' => 'Perawat adalah tenaga kesehatan yang memiliki peran vital dalam memberikan perawatan langsung kepada pasien di berbagai fasilitas medis, seperti rumah sakit, klinik, dan puskesmas. Mereka bertanggung jawab untuk memantau kondisi pasien, memberikan pengobatan sesuai dengan instruksi dokter, serta memastikan kenyamanan dan kebutuhan fisik pasien terpenuhi. Selain itu, perawat juga berperan dalam merawat pasien pascaoperasi, mengelola perawatan luka, serta membantu dalam prosedur medis yang diperlukan. Perawat bekerja dalam tim medis yang lebih luas dan sering kali menjadi penghubung utama antara pasien dan dokter atau tenaga medis lainnya.
        
            Selain tugas medis, perawat juga memberikan edukasi penting kepada pasien dan keluarga mengenai cara mengelola kondisi kesehatan atau penyakit tertentu, seperti diabetes, hipertensi, atau penyakit kronis lainnya. Keterampilan komunikasi yang baik sangat dibutuhkan dalam profesi ini, karena perawat sering kali berinteraksi langsung dengan pasien yang mungkin mengalami stres atau kecemasan terkait kondisi kesehatannya. Perawat juga harus memiliki ketahanan fisik dan mental yang kuat, mengingat pekerjaan mereka yang sering kali memerlukan waktu yang panjang dan melibatkan situasi emosional yang kompleks. Keberhasilan dalam profesi ini sangat bergantung pada kemampuan perawat dalam memberikan perawatan yang penuh perhatian dan responsif terhadap kebutuhan pasien.',
            'keterampilan' => 'Pengetahuan Keperawatan
            Komunikasi
            Empati
            Manajemen Waktu
            Ketahanan Fisik dan Mental',
            'gaji' => '3.000.000 - 6.000.000',
            'gambar_profesi' => 'profesi/kesehatan/perawat/perawat.jpg',
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
            'gambar_profesi' => 'profesi/kesehatan/apoteker/apoteker.jpg',
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
            'gambar_profesi' => 'profesi/kesehatan/ahli_gizi/ahli_gizi.jpg',
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
            'gambar_profesi' => 'profesi/kesehatan/radiologis/radiologis.jpg',
        ]);      
    }
}
