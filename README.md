# Leb7Web

BAB I
PENDAHULUAN
1.1 Latar Belakang
PHP merupakan salah satu bahasa pemrograman yang digunakan untuk membangun aplikasi web, khususnya pada bagian server-side. PHP memungkinkan sebuah website menerima, mengolah, dan menampilkan data yang dikirimkan oleh pengguna.
Pada praktikum ini, mahasiswa mempelajari dasar pemrograman PHP mulai dari penggunaan variabel, tipe data, operator, percabangan, perulangan, function, hingga pemrosesan form menggunakan metode GET dan POST.
1.2 Tujuan Praktikum
1.	Memahami perbedaan pemrosesan client-side dan server-side.
2.	Mengenal sintaks dasar PHP dan cara menjalankannya.
3.	Memahami penggunaan variabel, tipe data, operator, dan percabangan.
4.	Mempelajari penggunaan perulangan, array, dan function.
5.	Memahami pemrosesan data menggunakan metode GET dan POST.
6.	Memahami validasi dan sanitasi input pengguna.
7.	Membuat aplikasi sederhana menggunakan PHP.
BAB II
DASAR TEORI
2.1 Pengertian PHP
PHP (PHP: Hypertext Preprocessor) merupakan bahasa pemrograman server-side yang digunakan untuk mengembangkan aplikasi berbasis web. Kode PHP diproses oleh server, kemudian hasilnya dikirimkan ke browser dalam bentuk HTML.
2.2 Client-Side dan Server-Side
Client-side adalah proses yang berjalan pada browser pengguna, seperti HTML, CSS, dan JavaScript. Server-side adalah proses yang dijalankan pada server untuk menerima dan mengolah permintaan dari pengguna.
2.3 Variabel dan Tipe Data
Variabel digunakan untuk menyimpan data. Dalam PHP, penulisan variabel diawali dengan tanda $. Tipe data PHP meliputi string, integer, float, boolean, array, object, dan null.
2.4 Operator dan Percabangan
Operator digunakan untuk melakukan operasi matematika maupun perbandingan. Percabangan seperti if, elseif, dan else digunakan untuk menentukan kondisi berdasarkan nilai tertentu.
2.5 Perulangan dan Array
Array digunakan untuk menyimpan beberapa data dalam satu variabel. Perulangan seperti foreach digunakan untuk membaca setiap data yang terdapat di dalam array.
2.6 Function
Function merupakan kumpulan kode yang dibuat untuk menjalankan tugas tertentu dan dapat digunakan kembali sehingga program menjadi lebih terstruktur.
2.7 Metode GET dan POST
GET merupakan metode pengiriman data melalui URL, sedangkan POST mengirimkan data melalui bagian body permintaan. POST umum digunakan untuk mengirimkan data dari formulir.
2.8 Validasi dan Sanitasi
Validasi digunakan untuk memastikan data yang dimasukkan sesuai dengan ketentuan. htmlspecialchars() digunakan untuk mengamankan tampilan input pengguna agar karakter HTML tidak diproses sebagai kode HTML atau script.
BAB III
LANGKAH KERJA DAN HASIL PRAKTIKUM
3.1 Menjalankan Program PHP
Langkah pertama adalah membuat folder proyek di dalam direktori htdocs pada XAMPP. Selanjutnya, membuat file index.php dan memasukkan kode PHP. Program dijalankan melalui browser menggunakan alamat http://localhost/lab7_php/.
Hasil yang diharapkan: Browser menampilkan tulisan “Belajar PHP”, pesan bahwa PHP berhasil dijalankan, serta waktu dari server.
 
3.2 Variabel, Operator, dan Percabangan
Pada latihan ini dibuat variabel untuk menyimpan nama mahasiswa serta nilai tugas, UTS, dan UAS. Nilai akhir dihitung menggunakan bobot tugas 30%, UTS 30%, dan UAS 40%. Selanjutnya, digunakan percabangan if, elseif, dan else untuk menentukan predikat nilai.
Hasil yang diharapkan: Program menampilkan nama mahasiswa, nilai akhir, dan predikat berdasarkan hasil perhitungan.
 
3.3 Perulangan dan Array
Pada latihan ini dibuat sebuah array yang berisi daftar nama mahasiswa. Kemudian, perulangan foreach digunakan untuk menampilkan seluruh nama dalam bentuk daftar.
Hasil yang diharapkan: Semua nama mahasiswa berhasil ditampilkan secara berurutan pada browser.
 
3.4 Membuat Function
Pada latihan ini dibuat function hitungDiskon() untuk menghitung harga setelah mendapatkan potongan diskon. Program menggunakan harga awal Rp150.000 dengan diskon sebesar 10%.
Hasil yang diharapkan: Program menampilkan harga setelah diskon sebesar Rp135.000.
 
3.5 Memproses Form dengan GET
Pada latihan ini dibuat formulir pencarian menggunakan metode GET. Pengguna memasukkan kata kunci, kemudian program mengambil data tersebut menggunakan variabel $_GET.
Hasil yang diharapkan: Kata kunci berhasil ditampilkan dan terlihat pada URL browser setelah formulir dikirim.
 
3.6 Memproses Form dengan POST
Pada latihan ini dibuat formulir yang berisi nama dan program studi. Data dikirim menggunakan metode POST dan diproses menggunakan $_POST. Program juga melakukan pemeriksaan agar semua kolom wajib diisi.
Hasil yang diharapkan: Data yang dimasukkan berhasil ditampilkan kembali. Jika terdapat kolom kosong, program memberikan pesan bahwa semua kolom wajib diisi.
 
3.7 Pengolahan Data Sederhana
Pada latihan ini dibuat formulir untuk memasukkan nama barang, harga, dan jumlah barang. PHP digunakan untuk melakukan validasi data dan menghitung subtotal menggunakan rumus Subtotal = Harga × Jumlah.
Hasil yang diharapkan: Program menampilkan nama barang dan subtotal transaksi. Jika data tidak sesuai, program menampilkan pesan kesalahan.
 

3.8 Mini Project Aplikasi Formulir Data Mahasiswa
Pada mini project dibuat aplikasi formulir data mahasiswa yang terdiri dari nama, NIM, program studi, semester, dan email. Data dikirim menggunakan metode POST. Selanjutnya, PHP melakukan validasi terhadap setiap input, termasuk pemeriksaan format email dan semester dalam rentang 1 sampai 14.
Hasil yang diharapkan: Jika seluruh data valid, aplikasi menampilkan ringkasan data mahasiswa. Jika terdapat kesalahan, aplikasi menampilkan pesan kesalahan sesuai input yang tidak memenuhi ketentuan.
 
BAB IV
PENGUJIAN DAN PEMBAHASAN
4.1 Pengujian Input Valid
Berikut contoh pengujian menggunakan data yang sesuai:
8.	Memasukkan nama mahasiswa, program studi, dan email dengan format yang benar. Data dapat diterima dan ditampilkan.
9.	Memasukkan harga barang sebesar Rp10.000 dan jumlah 2. Program berhasil menghitung subtotal sebesar Rp20.000.
4.2 Pengujian Input Tidak Valid
Berikut contoh pengujian menggunakan data yang tidak sesuai:
10.	Mengosongkan kolom nama atau program studi. Program menampilkan pesan bahwa semua kolom wajib diisi.
11.	Memasukkan format email yang salah atau semester di luar rentang 1–14. Program menampilkan pesan kesalahan validasi.
4.3 Pembahasan
Berdasarkan materi praktikum, PHP dapat digunakan untuk mengolah data yang berasal dari formulir pengguna. Setiap latihan memiliki fungsi yang berbeda, mulai dari menampilkan teks, melakukan perhitungan, mengelola kumpulan data, hingga menerima dan memvalidasi input.
Penggunaan metode GET dan POST membantu proses pengiriman data, sedangkan validasi dan sanitasi diperlukan agar data yang diterima dapat diperiksa sebelum ditampilkan atau diproses lebih lanjut.

PERTANYAAN EVALUASI
1. Apa perbedaan pemrosesan client-side dan server-side?
Client-side merupakan proses yang dijalankan pada sisi browser pengguna, seperti HTML, CSS, dan JavaScript. Sementara itu, server-side merupakan proses yang dijalankan pada server, seperti menerima permintaan, memproses input, menjalankan aturan aplikasi, dan mengirimkan hasil kembali ke browser.
2. Mengapa file PHP harus dijalankan melalui web server?
PHP merupakan bahasa pemrograman server-side yang membutuhkan web server untuk memproses dan menjalankan kode programnya. Jika file PHP dibuka secara langsung melalui file manager, kode PHP tidak akan diproses sebagaimana mestinya.
3. Apa fungsi tanda $ pada variabel PHP?
Tanda $ digunakan sebagai penanda variabel dalam PHP. Setiap variabel harus diawali dengan tanda tersebut, misalnya $nama, $umur, dan $nilai.
4. Apa perbedaan metode GET dan POST?
GET mengirimkan data melalui parameter URL sehingga cocok digunakan untuk pencarian atau permintaan data. POST mengirimkan data melalui body permintaan sehingga lebih sesuai untuk pengiriman formulir. POST bukan enkripsi, sehingga HTTPS tetap diperlukan untuk melindungi data selama pengiriman.
5. Mengapa input pengguna perlu divalidasi di sisi server?
Validasi server-side diperlukan untuk memastikan data yang diterima sesuai dengan ketentuan aplikasi. Validasi ini juga membantu mencegah data kosong, format yang salah, dan input yang tidak sesuai meskipun validasi pada sisi browser dapat dilewati.
6. Apa fungsi htmlspecialchars() ketika menampilkan data dari form?
Fungsi htmlspecialchars() digunakan untuk mengubah karakter khusus HTML menjadi bentuk yang aman ketika ditampilkan pada halaman web. Fungsi ini membantu mengurangi risiko injeksi HTML atau script berbahaya dari input pengguna.
7. Apa manfaat penggunaan function dalam program PHP?
Function bermanfaat untuk mengelompokkan kode berdasarkan tugas tertentu agar program lebih terstruktur, mudah dibaca, dan dapat digunakan kembali tanpa harus menuliskan kode yang sama berulang kali.

BAB V
PENUTUP
5.1 Kesimpulan
Berdasarkan praktikum yang telah dipelajari, dapat disimpulkan bahwa PHP merupakan bahasa pemrograman server-side yang berguna untuk membangun aplikasi web dinamis.
Melalui praktikum ini, mahasiswa mempelajari penggunaan variabel, tipe data, operator, percabangan, perulangan, array, dan function. Selain itu, mahasiswa juga memahami cara menerima dan mengolah data menggunakan metode GET dan POST serta melakukan validasi terhadap input pengguna.
Dengan demikian, praktikum ini memberikan pemahaman dasar mengenai cara kerja pemrograman server-side menggunakan PHP
