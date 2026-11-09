# PRAKTIKUM 7

### IDENTITAS MAHASISWA
- Nama: Adhytia hamdani putra
- NIM: [312510160]
- Kelas: [I251B]
- Mata Kuliah: Pemrograman Web

---

## A. TUJUAN PRAKTIKUM

1. Memahami perbedaan pemrosesan client-side dan server-side.
2. Mengenal sintaks dasar pemrograman PHP.
3. Menggunakan variabel, tipe data, operator, dan percabangan.
4. Memahami penggunaan perulangan, array, dan function.
5. Memproses data form menggunakan metode GET dan POST.
6. Melakukan validasi dan sanitasi input pengguna.
7. Membuat aplikasi sederhana menggunakan PHP.

## B. PERANGKAT YANG DIGUNAKAN

- Laptop/PC
- Visual Studio Code
- XAMPP
- PHP
- Google Chrome

## C. CARA MENJALANKAN PROGRAM

1. Buka aplikasi XAMPP.
2. Jalankan Apache dengan menekan tombol Start.
3. Simpan folder Lab7Web_PHP ke dalam direktori htdocs.
4. Buka folder proyek menggunakan Visual Studio Code.
5. Pastikan Apache sudah berjalan.
6. Buka browser Google Chrome.
7. Masukkan alamat localhost sesuai folder latihan.

Contoh:

http://localhost/Lab7Web_PHP/index.php/

Untuk menjalankan latihan lainnya, ganti nama folder latihan sesuai program yang ingin dibuka.

## D. STRUKTUR FOLDER

Lab7Web_PHP/
- index.php/ 
- mahasiswa.php
- README.md 

## E. HASIL PRAKTIKUM

### 1. Latihan 1 - Menjalankan PHP

Pada latihan pertama, dilakukan pengujian untuk menjalankan kode PHP melalui server lokal XAMPP. Program menampilkan teks bahwa PHP berhasil dijalankan.

**Screenshot:**

<img width="751" height="302" alt="Screenshot 2026-11-09 150812" src="https://github.com/user-attachments/assets/a15e84fa-d21f-4233-bd45-38bb04de33e4" />
<img width="681" height="163" alt="Screenshot 2026-11-09 150819" src="https://github.com/user-attachments/assets/e67d336d-5749-49f6-9a66-561a6ececb55" />



### 2. Latihan 2 - Variabel, Operator, dan Percabangan

Pada latihan kedua, digunakan variabel untuk menyimpan data mahasiswa dan nilai tugas, UTS, serta UAS. Program menghitung nilai akhir berdasarkan bobot yang ditentukan dan menampilkan predikat nilai menggunakan percabangan if dan elseif.

**Screenshot:**

<img width="652" height="417" alt="Screenshot 2026-11-09 150833" src="https://github.com/user-attachments/assets/005a1ef8-6bf5-4ec5-815c-7b8abe0e7621" />
<img width="507" height="80" alt="Screenshot 2026-11-09 150842" src="https://github.com/user-attachments/assets/1d8c7fbd-0e5b-4f71-a081-576ea29fde3f" />


### 3. Latihan 3 - Perulangan dan Array

Pada latihan ketiga, digunakan array untuk menyimpan beberapa nama mahasiswa. Perulangan foreach digunakan untuk menampilkan seluruh data mahasiswa.

**Screenshot:**

<img width="560" height="180" alt="Screenshot 2026-11-09 151054" src="https://github.com/user-attachments/assets/5474a6bf-e3aa-4c32-8149-841b507b9a1d" />
<img width="855" height="152" alt="Screenshot 2026-11-09 151101" src="https://github.com/user-attachments/assets/130313be-f7a4-4f3e-ba4c-df62ee67057e" />


### 4. Latihan 4 - Function

Pada latihan keempat, dibuat function untuk menghitung harga setelah diskon. Function menerima parameter harga dan persentase diskon, kemudian mengembalikan hasil perhitungan.

**Screenshot:**

<img width="676" height="200" alt="Screenshot 2026-11-09 151116" src="https://github.com/user-attachments/assets/13964fb8-461c-48a1-81c8-e1f953cd3426" />
<img width="615" height="32" alt="Screenshot 2026-11-09 151128" src="https://github.com/user-attachments/assets/06fcd3a0-38d9-4562-bd5e-ce0348eb6634" />


### 5. Latihan 5 - Pemrosesan Form GET

Pada latihan kelima, dibuat form pencarian sederhana menggunakan metode GET. Data yang dimasukkan pengguna dikirim melalui parameter URL dan ditampilkan kembali oleh PHP.

**Screenshot:**

<img width="688" height="277" alt="Screenshot 2026-11-09 151220" src="https://github.com/user-attachments/assets/1b8a0749-4b8e-4880-b1b0-dc93c9f679f3" />
<img width="446" height="45" alt="Screenshot 2026-11-09 151226" src="https://github.com/user-attachments/assets/93223997-cd3f-4d09-9e43-daae8ac95b07" />


### 6. Latihan 6 - Pemrosesan Form POST

Pada latihan keenam, dibuat form data mahasiswa yang berisi nama dan program studi. Data dikirim menggunakan metode POST, kemudian diperiksa dan ditampilkan oleh PHP.

**Screenshot:**

<img width="680" height="380" alt="Screenshot 2026-11-09 151629" src="https://github.com/user-attachments/assets/fe69afe0-af30-4855-9897-c33eb10c4a1f" />
<img width="743" height="26" alt="Screenshot 2026-11-09 151646" src="https://github.com/user-attachments/assets/fd099e80-75de-46ad-8fda-9da0acccee97" />


### 7. Latihan 7 - Pengolahan Data Sederhana

Pada latihan ketujuh, dibuat form transaksi yang menerima nama barang, harga, dan jumlah barang. PHP melakukan validasi input dan menghitung subtotal transaksi.

**Screenshot:**

<img width="782" height="537" alt="Screenshot 2026-11-09 151705" src="https://github.com/user-attachments/assets/1d24d80e-3564-46f9-92ee-2a63969fcac8" />
<img width="921" height="22" alt="Screenshot 2026-11-09 151716" src="https://github.com/user-attachments/assets/c3040d42-da9b-4aa7-bbd1-e6fee99fcec6" />


### 8. Mini Project - Formulir Data Mahasiswa

Pada mini project, dibuat aplikasi formulir data mahasiswa yang terdiri dari nama, NIM, program studi, semester, dan email.

Program menggunakan metode POST untuk mengirim data, melakukan validasi di sisi server, dan menampilkan ringkasan data mahasiswa apabila seluruh input valid.

**Screenshot:**

<img width="582" height="942" alt="Screenshot 2026-11-09 151928" src="https://github.com/user-attachments/assets/ac9a85ba-2841-4be1-9796-cb5a7bb0b7df" />
<img width="450" height="822" alt="Screenshot 2026-11-09 151944" src="https://github.com/user-attachments/assets/6884671d-9cc9-40e3-ad8d-5c354eb6f407" />
<img width="612" height="970" alt="Screenshot 2026-11-09 152007" src="https://github.com/user-attachments/assets/ec617232-4bb7-428c-b234-9760f7d16182" />
<img width="676" height="112" alt="Screenshot 2026-11-09 152017" src="https://github.com/user-attachments/assets/b7fc7552-af36-4bb1-aab5-c5bacf1f22d6" />
<img width="540" height="418" alt="Screenshot 2026-11-09 152029" src="https://github.com/user-attachments/assets/f4725973-1e69-4e01-8ef2-075ae1ec416b" />


**Pemrograman Web - Praktikum 7**
