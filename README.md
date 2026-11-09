# LAPORAN PRAKTIKUM 7
## PEMROGRAMAN SERVER-SIDE PHP

---

# BAB I – PENDAHULUAN

### 1.1 Latar Belakang

PHP merupakan salah satu bahasa pemrograman yang digunakan untuk membangun aplikasi web, khususnya pada bagian *server-side*. PHP memungkinkan sebuah website menerima, mengolah, dan menampilkan data yang dikirimkan oleh pengguna.

Pada praktikum ini, mahasiswa mempelajari dasar pemrograman PHP mulai dari penggunaan variabel, tipe data, operator, percabangan, perulangan, function, hingga pemrosesan form menggunakan metode GET dan POST.

### 1.2 Tujuan Praktikum

1. Memahami perbedaan pemrosesan client-side dan server-side.
2. Mengenal sintaks dasar PHP dan cara menjalankannya.
3. Memahami penggunaan variabel, tipe data, operator, dan percabangan.
4. Mempelajari penggunaan perulangan, array, dan function.
5. Memahami pemrosesan data menggunakan metode GET dan POST.
6. Memahami validasi dan sanitasi input pengguna.
7. Membuat aplikasi sederhana menggunakan PHP.

---

# BAB II – DASAR TEORI

### 2.1 Pengertian PHP

PHP (*PHP: Hypertext Preprocessor*) merupakan bahasa pemrograman server-side yang digunakan untuk mengembangkan aplikasi berbasis web. Kode PHP diproses oleh server, kemudian hasilnya dikirimkan ke browser dalam bentuk HTML.

### 2.2 Client-Side dan Server-Side

- **Client-side** adalah proses yang berjalan pada browser pengguna, seperti HTML, CSS, dan JavaScript.
- **Server-side** adalah proses yang dijalankan pada server untuk menerima dan mengolah permintaan dari pengguna.

### 2.3 Variabel dan Tipe Data

Variabel digunakan untuk menyimpan data. Dalam PHP, penulisan variabel diawali dengan tanda `$`.

Tipe data PHP meliputi string, integer, float, boolean, array, object, dan null.

### 2.4 Operator dan Percabangan

Operator digunakan untuk melakukan operasi matematika maupun perbandingan. Percabangan seperti `if`, `elseif`, dan `else` digunakan untuk menentukan kondisi berdasarkan nilai tertentu.

### 2.5 Perulangan dan Array

Array digunakan untuk menyimpan beberapa data dalam satu variabel. Perulangan seperti `foreach` digunakan untuk membaca setiap data yang terdapat di dalam array.

### 2.6 Function

Function merupakan kumpulan kode yang dibuat untuk menjalankan tugas tertentu dan dapat digunakan kembali sehingga program menjadi lebih terstruktur.

### 2.7 Metode GET dan POST

- **GET** merupakan metode pengiriman data melalui URL.
- **POST** mengirimkan data melalui bagian body permintaan. POST umum digunakan untuk mengirimkan data dari formulir.

### 2.8 Validasi dan Sanitasi

Validasi digunakan untuk memastikan data yang dimasukkan sesuai dengan ketentuan. `htmlspecialchars()` digunakan untuk mengamankan tampilan input pengguna agar karakter HTML tidak diproses sebagai kode HTML atau script.

---

# BAB III – LANGKAH KERJA DAN HASIL PRAKTIKUM

### 3.1 Menjalankan Program PHP

Langkah pertama adalah membuat folder proyek di dalam direktori `htdocs` pada XAMPP. Selanjutnya, membuat file `index.php` dan memasukkan kode PHP.

Program dijalankan melalui browser menggunakan alamat:

```text
http://localhost/lab7_php/
```

**Hasil yang diharapkan:**

Browser menampilkan tulisan "Belajar PHP", pesan bahwa PHP berhasil dijalankan, serta waktu dari server.

**Dokumentasi:**

<img width="1920" height="1080" alt="Screenshot (296)" src="https://github.com/user-attachments/assets/b61a8c03-2c73-4cfd-b750-3d0709275cc6" />


### 3.2 Variabel, Operator, dan Percabangan

Pada latihan ini dibuat variabel untuk menyimpan nama mahasiswa serta nilai tugas, UTS, dan UAS. Nilai akhir dihitung menggunakan bobot tugas 30%, UTS 30%, dan UAS 40%.

Selanjutnya, digunakan percabangan `if`, `elseif`, dan `else` untuk menentukan predikat nilai.

**Hasil yang diharapkan:**

Program menampilkan nama mahasiswa, nilai akhir, dan predikat berdasarkan hasil perhitungan.

**Dokumentasi:**

<img width="1920" height="1080" alt="Screenshot (297)" src="https://github.com/user-attachments/assets/0c745c43-f554-42e3-ab95-c851221b3af0" />

### 3.3 Perulangan dan Array

Pada latihan ini dibuat sebuah array yang berisi daftar nama mahasiswa. Kemudian, perulangan `foreach` digunakan untuk menampilkan seluruh nama dalam bentuk daftar.

**Hasil yang diharapkan:**

Semua nama mahasiswa berhasil ditampilkan secara berurutan pada browser.

**Dokumentasi:**

<img width="1920" height="1080" alt="Screenshot (298)" src="https://github.com/user-attachments/assets/85c73aae-7bd6-4fcf-a446-6750842eb1df" />

### 3.4 Membuat Function

Pada latihan ini dibuat function `hitungDiskon()` untuk menghitung harga setelah mendapatkan potongan diskon.

Program menggunakan harga awal Rp150.000 dengan diskon sebesar 10%.

**Hasil yang diharapkan:**

Program menampilkan harga setelah diskon sebesar **Rp135.000**.

**Dokumentasi:**

<img width="1920" height="1080" alt="Screenshot (299)" src="https://github.com/user-attachments/assets/78e83bdc-8ad2-4cae-ac05-1e778b3eb598" />

### 3.5 Memproses Form dengan GET

Pada latihan ini dibuat formulir pencarian menggunakan metode GET. Pengguna memasukkan kata kunci, kemudian program mengambil data tersebut menggunakan variabel `$_GET`.

**Hasil yang diharapkan:**

Kata kunci berhasil ditampilkan dan terlihat pada URL browser setelah formulir dikirim.

**Dokumentasi:**

<img width="1920" height="1080" alt="Screenshot (300)" src="https://github.com/user-attachments/assets/2dcad304-5e3b-412e-8c5e-1c42b5e29749" />

### 3.6 Memproses Form dengan POST

Pada latihan ini dibuat formulir yang berisi nama dan program studi. Data dikirim menggunakan metode POST dan diproses menggunakan `$_POST`.

Program juga melakukan pemeriksaan agar semua kolom wajib diisi.

**Hasil yang diharapkan:**

Data yang dimasukkan berhasil ditampilkan kembali. Jika terdapat kolom kosong, program memberikan pesan bahwa semua kolom wajib diisi.

**Dokumentasi:**

<img width="1920" height="1080" alt="Screenshot (301)" src="https://github.com/user-attachments/assets/dbeeadf6-72f7-498e-b884-b0d0d03efdd8" />

### 3.7 Pengolahan Data Sederhana

Pada latihan ini dibuat formulir untuk memasukkan nama barang, harga, dan jumlah barang. PHP digunakan untuk melakukan validasi data dan menghitung subtotal menggunakan rumus:

**Subtotal = Harga × Jumlah**

**Hasil yang diharapkan:**

Program menampilkan nama barang dan subtotal transaksi. Jika data tidak sesuai, program menampilkan pesan kesalahan.

**Dokumentasi:**

<img width="1920" height="1080" alt="Screenshot (302)" src="https://github.com/user-attachments/assets/16ea801b-7795-446c-a0ea-8e3f709812c3" />

### 3.8 Mini Project Aplikasi Formulir Data Mahasiswa

Pada mini project dibuat aplikasi formulir data mahasiswa yang terdiri dari:

- Nama
- NIM
- Program Studi
- Semester
- Email

Data dikirim menggunakan metode POST. Selanjutnya, PHP melakukan validasi terhadap setiap input, termasuk pemeriksaan format email dan semester dalam rentang 1 sampai 14.

**Hasil yang diharapkan:**

Jika seluruh data valid, aplikasi menampilkan ringkasan data mahasiswa. Jika terdapat kesalahan, aplikasi menampilkan pesan kesalahan sesuai input yang tidak memenuhi ketentuan.

**Dokumentasi:**

<img width="1920" height="1080" alt="Screenshot (304)" src="https://github.com/user-attachments/assets/3c82635d-a744-4eda-a267-d24cf1740487" />

---

