<!doctype html>
<html lang="en">
  <head>
    <!-- Meta tags untuk setting karakter dan responsive design -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Menghubungkan ke file CSS Bootstrap dan dokumentasi Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Tugas Praktikum WEB II - OOP</title>
    <!-- Menghubungkan ke file JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      /* Menentukan style untuk heading dan tabel */
      h1 {
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
      }
      table {
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
      }
    </style>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
<!-- Navbar untuk navigasi antar halaman -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">MailScore</a> <!-- Nama brand -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- Beberapa tombol navigasi untuk berpindah halaman -->
            <li>
            <a href="mahasiswa.php" type="button" class="btn btn-outline-primary">Data Tabel Mahasiswa</a>
            </li>
            <li>
            <a href="nilaiperbaikan.php" type="button" class="btn btn-outline-danger">Data Tabel Perbaikan</a>
            </li>
            <li>
            <a href="tampil_mahasiswa.php" type="button" class="btn btn-outline-info">Tampil Mahasiswa</a>
            </li>
            <li>
            <a href="tampil_nilaiperbaikan.php" type="button" class="btn btn-outline-secondary">Tampil Nilai Perbaikan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Judul halaman -->
    <h1>Data Tabel Nilai Perbaikan yang Nilainya 70 perlu Perbaikan</h1>
    <!-- Kode PHP untuk mengambil data dari database -->
    <?php
    // Menyertakan file koneksi ke database
    include "koneksi.php"; 
    // Memanggil method dari objek $TampNiPer untuk menampilkan data nilai perbaikan
    $dataPerbaikan = $TampNiPer->TampilkanDataPerbaikan();
    ?>
    <!-- Tabel untuk menampilkan data yang diambil dari database -->
    <table border="1" class="table table-success table-hover">
      <tr>
        <!-- Header tabel untuk setiap kolom -->
        <th>No</th>
        <th>Perbaikan ID</th>
        <th>Tanggal Perbaikan</th>
        <th>Keterangan</th>
        <th>ID Mahasiswa</th>
        <th>ID Matkul</th>
        <th>ID Semester</th>
        <th>ID Nilai</th>
        <th>ID Dosen</th>
      </tr>
    <!-- Looping untuk menampilkan setiap baris data dari database -->
    <?php
    $no = 1; // Inisialisasi nomor urut
    // Loop melalui setiap data perbaikan yang diambil dari database
    foreach ($dataPerbaikan as $row) {
    ?>
    <tr>
      <!-- Menampilkan data di setiap baris -->
      <td><?php echo $no++?></td> <!-- Nomor urut -->
      <td><?php echo $row['perbaikan_id']?></td> <!-- ID perbaikan -->
      <td><?php echo $row['tgl_perbaikan']?></td> <!-- Tanggal perbaikan -->
      <td><?php echo $row['keterangan']?></td> <!-- Keterangan perbaikan -->
      <td><?php echo $row['mahasiswa_id']?></td> <!-- ID mahasiswa -->
      <td><?php echo $row['matkul_id']?></td> <!-- ID mata kuliah -->
      <td><?php echo $row['semester_id']?></td> <!-- ID semester -->
      <td><?php echo $row['nilai_id']?></td> <!-- ID nilai -->
      <td><?php echo $row['dosen_id']?></td> <!-- ID dosen -->
    </tr>
    <?php
    }
    ?>
    </table>
  </body>
</html>