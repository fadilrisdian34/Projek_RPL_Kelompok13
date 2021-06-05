<div align="center">
  <h1>Poly: Clinic Care IPB University</h1>
  <img src="https://upload.wikimedia.org/wikipedia/commons/1/15/Bogor_Agricultural_University_%28IPB%29_symbol.svg" width=250px>
  <br>
  <b>Rekayasa Perangkat Lunak (KOM331)<br>
  Kelompok 13 Praktikum 2</b>
  <br><br>
  <b> Asisten Praktikum: </b> <br>
  1. Kak Indah Puspita <br>
  2. Kak Qoriatul Khairunnisa
  <br><br>
  <b> Anggota Kelompok: </b>
  <table>
    <tr>
      <th></th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Role</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Denny Lindawati Sinurat</td>
      <td>G64180103</td>
      <td>UI/UX Designer</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Rakheda Andria Parastu</td>
      <td>G64180105</td>
      <td>Frontend Developer</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Fadil Risdian Ansori</td>
      <td>G64180111</td>
      <td>Backend Developer</td>
    </tr>
    <tr>
      <td>4</td>
      <td>M Fathan Fatazka</td>
      <td>G64180118</td>
      <td>Frontend Developer</td>
    </tr>
  </table>
</div>


## Deskripsi Singkat Aplikasi
[`^ Kembali Keatas ^`](#)

&ensp;&ensp;&ensp;&ensp;&ensp; Aplikasi Poly : Clinic Care IPB University merupakan sebuah aplikasi berbasis web. Aplikasi Poly akan menampilkan nomor antrian online yang bisa di booking sehingga user dapat datang ke klinik IPB saat waktunya dan tidak perlu menunggu antrian. Selain itu, aplikasi ini akan menyediakan fitur konsultasi dokter agar user dapat berkonsultasi seputar penyakit tanpa datang ke klinik serta dengan aplikasi ini user dapat membeli obat secara online.


## User Analysis
[`^ Kembali Keatas ^`](#)

#### User Story

Melalui diskusi, didapatkan beberapa `user story` sebagai berikut:

* Sebagai mahasiswa, agar dapat berobat di Poliklinik IPB tanpa memerlukan waktu yang lama, saya dapat melihat nomor antrian pasien Poliklinik IPB sehingga saya mengetahui waktu yang tepat untuk datang ke Poliklinik IPB.
* Sebagai mahasiswa, agar dapat berkonsultasi tentang penyakit saya, saya dapat melakukan chatting dengan dokter.
* Sebagai pasien, agar dapat mengetahui kualifikasi dokter yang menjalani praktek di Poliklinik IPB, saya dapat melihat profil dokter yang ingin saya konsultasikan.
* Sebagai mahasiswa, saya dapat memesan obat secara online sehingga saya tidak perlu pergi ke lokasi. 
* Sebagai pasien/dokter, agar dapat menggunakan aplikasi, saya dapat melakukan login atau sign up akun terlebih dahulu sebelum masuk ke aplikasi.
* Sebagai pengembang, agar civitas akademika IPB dapat mudah dalam berobat ke Poliklinik, saya dapat mengembangkan dan membuat aplikasi berupa notifikasi nomor antrian Poliklinik IPB dan konsultasi dokter secara online.

## Spesifikasi Teknis Lingkungan Pengembangan
[`^ Kembali Keatas ^`](#)

#### Software:
* Operating System : Windows 10 64-bit
* Text Editor : Visual Studio Code
* Version Control System: Git
* Design Tools and Prototyping : Figma
* Management Tools : Trello and Google Site
  
#### Hardware:
* CPU : Intel Core i3-4030U @1.90GHz
* GPU : Intel HD Graphic Family
* RAM : 6GB DDR3l
* ROM : 512Gb HDD dan 128Gb SSD

#### Tech Stack
* Programming Languange : HTML, CSS, Javascript
* Framework : Native
* Web Service : XAMPP
* Database : MySql / MongoDB
 
## Hasil dan pembahasan
[`^ Kembali Keatas ^`](#)

  ### 1. Use Case Diagram 
  
  <img src="https://github.com/fadilrisdian34/Projek_RPL_Kelompok13/blob/main/report-file/new-use-case.png">
  
  ### 2. Activity Diagram 
  * Mendaftar Antrian :
  <img src="https://github.com/fadilrisdian34/Projek_RPL_Kelompok13/blob/main/report-file/activity-diagram-for-address-a-queue.png">
  
  * Membatalkan Antrian :
  <img src="https://github.com/fadilrisdian34/Projek_RPL_Kelompok13/blob/main/report-file/av-to-cancel-appointment.png">
  
  * Chat Konsultasi dengan Dokter :
  <img src="https://github.com/fadilrisdian34/Projek_RPL_Kelompok13/blob/main/report-file/av-to-chat-with-doctor.png">
 
  ### 3. Class Diagram 
  
  <img src="https://github.com/fadilrisdian34/Projek_RPL_Kelompok13/blob/main/report-file/Class%20Diagram%20Poly.jpeg"> 
  
  ### 4. Entity Relationship Diagram
  
  <img src="https://github.com/fadilrisdian34/Projek_RPL_Kelompok13/blob/main/report-file/ERD%20Poly.jpeg">
  
  ### 5. Arsitektur sistem  
  
  <img src="https://github.com/fadilrisdian34/Projek_RPL_Kelompok13/blob/main/report-file/arsitektur-rpl.png">
  
  ### 6. Fungsi Utama yang Dikembangkan 
  
  `Poly: Clinic For IPB University` memiliki beberapa fungsi utama, yaitu:
   
   #### a. Pemesanan Antrian: 
   &ensp;&ensp;&ensp;&ensp;&ensp; Dimana mahasiswa/pasien dapat mengambil nomor antrian untuk melakukan check-up di klinik IPB secara daring melalui web. Nomor antrian yang diambil datanya akan langsung tersimpan, sehingga tidak terjadi nomor ganda pada saat anda datang ke klinik ipb. Dengan ini, pasien dapat mengetahui kapan dia harus datang ke klinik IPB tanpa harus menunggu terlalu lama.
   
   &ensp;&ensp;&ensp;&ensp;&ensp; Mahasiswa/pasien dapat melakukan pemesanan online melalui halaman dashboard Poly. Ketika hendak melakukan pemesanan, pasien diharuskan mengisi beberapa data diri mulai dari nama, NIM, hingga tanggal check-up. Setelah proses pengisian data selesai, maka pasien akan mendapat nomor antriannya dan terdapat pemberitahuan nomor antrian yang saat ini sedang melakukan check-up dengan dokter di klinik IPB.

   <b> b. Chat Konsultasi Online dengan Dokter: </b>
   
   &ensp;&ensp;&ensp;&ensp;&ensp; Dimana mahasiswa/pasien dapat berkonsultasi dengan dokter yang ada di klinik tentang masalah kesehatan. Dokter dapat mengetahui kondisi mahasiswa/pasien tanpa perlu datang langsung ke klinik sehingga lebih cepat penanganannya dan lebih hemat waktu. Ketika hendak melakukan chat konsultasi dengan dokter, pasien dapat menuju halaman dashboard platform Poly. Kemudian memilih menu `chat konsultasi` dan memilih dokter yang sesuai untuk melakukan konsultasi.  

  ### 7. Fungsi CRUD 

## Hasil Implementasi
[`^ Kembali Keatas ^`](#)
  * Screenshot sistem 

## Testing (Test cases)
[`^ Kembali Keatas ^`](#)
  * Positive Cases
  * Negative Cases (Optional, jika ada jadi nilai tambah)
  
## Saran untuk Pengembangan Selanjutnya
[`^ Kembali Keatas ^`](#)

Berikut adalah beberapa saran dalam proyek pengembangan selanjutnya:
1. Proses pembelajaran dalam membangun/mengembangkan platform harus lebih efektif dan tidak memakan waktu yang lama
2. Pembagian tugas para pengembang lebih jelas dan sesuai jobdesc agar tanggung jawab lebih merata dan tepat
3. Memaksimalkan komunikasi dan manajemen antar pengembang dalam proses pengembangan
4. Melakukan pembaharuan untuk fitur-fitur yang belum berjalan dengan baik 
5. Meningkatkan fitur-fitur yang tersedia didalam platform yang dikembangkan.
