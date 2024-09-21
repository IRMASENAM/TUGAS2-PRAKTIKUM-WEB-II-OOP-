<!doctype html>
<html lang="en">
  <head>
    <!-- Meta tag untuk encoding karakter dan pengaturan tampilan di perangkat mobile -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Menghubungkan Bootstrap 5.3 untuk desain yang responsif -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <!-- Judul halaman -->
    <title>Tugas Praktikum WEB II - OOP</title>
    <!-- Menghubungkan file JavaScript Bootstrap untuk interaksi seperti dropdown dan modal -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Styling khusus untuk judul dan tabel -->
    <style>
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
    <!-- Navbar untuk navigasi antara halaman-halaman aplikasi -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <!-- Nama aplikasi pada navbar -->
        <a class="navbar-brand" href="index.php">MailScore</a>
        <!-- Tombol untuk collapse navbar pada tampilan kecil (mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu navigasi -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- Link ke halaman Data Mahasiswa -->
            <li>
              <a href="mahasiswa.php" type="button" class="btn btn-outline-primary">Data Tabel Mahasiswa</a>
            </li>
            <!-- Link ke halaman Data Tabel Perbaikan Nilai -->
            <li>
              <a href="nilaiperbaikan.php" type="button" class="btn btn-outline-danger">Data Tabel Perbaikan</a>
            </li>
            <!-- Link ke halaman Tampil Mahasiswa -->
            <li>
              <a href="tampil_mahasiswa.php" type="button" class="btn btn-outline-info">Tampil Mahasiswa</a>
            </li>
            <!-- Link ke halaman Tampil Nilai Perbaikan -->
            <li>
              <a href="tampil_nilaiperbaikan.php" type="button" class="btn btn-outline-secondary">Tampil Nilai Perbaikan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Judul halaman untuk tabel Nilai Perbaikan -->
    <h1>Data Tabel Nilai Perbaikan</h1>
    <!-- PHP untuk menampilkan data dari database -->
    <?php
    // Menghubungkan file koneksi ke database
    include "koneksi.php";   
    // Mengambil data perbaikan dari method di dalam class yang dideklarasikan sebelumnya
    $data = $DataPerbaikan->TampilkanDataPerbaikan();
    ?>
    <!-- Tabel Bootstrap untuk menampilkan data perbaikan -->
    <table border="1" class="table table-success table-hover">
      <tr>
        <!-- Header tabel untuk menampilkan nama kolom -->
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
      <!-- Loop PHP untuk menampilkan setiap baris data -->
      <?php
      $no = 1; // Variabel nomor urut
      foreach ($data as $row) { // Loop untuk setiap data yang diambil dari database
      ?>
      <tr>
        <!-- Menampilkan data ke dalam tabel -->
        <td><?php echo $no++?></td>
        <td><?php echo $row['perbaikan_id']?></td>
        <td><?php echo $row['tgl_perbaikan']?></td>
        <td><?php echo $row['keterangan']?></td>
        <td><?php echo $row['mahasiswa_id']?></td>
        <td><?php echo $row['matkul_id']?></td>
        <td><?php echo $row['semester_id']?></td>
        <td><?php echo $row['nilai_id']?></td>
        <td><?php echo $row['dosen_id']?></td>
      </tr>
      <?php
      }
      ?>
    </table>
  </body>
</html>