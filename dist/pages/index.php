<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Berfungsi untuk menghubungkan Bootstrap CSS untuk membuat tampilan lebih menarik -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <!-- Merupakan Judul dari sebuah halaman -->
    <title>Tugas Praktikum WEB II - OOP</title>
    <!-- Berfungsi untuk menghubungkan Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Berfungsi untuk mengatur tampilan judul dan tabel dengan CSS-->
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
    <!-- Merupakan Navbar untuk navigasi antar halaman -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <!-- Merupakan Nama brand di dalam navbar -->
        <a class="navbar-brand" href="#">MailScore</a>
        <!-- Tombol toggle untuk navigasi pada layar kecil -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu navigasi collapsible -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="btn-group d-flex justify-content-center mb-4">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <!-- Link untuk berpindah ke halaman Data Tabel Mahasiswa -->
              <li>
                <a href="mahasiswa.php" type="button" class="btn btn-outline-primary">Data Tabel Mahasiswa</a>
              </li>
              <!-- Link untuk berpindah ke halaman Data Tabel Perbaikan -->
              <li>
                <a href="nilaiperbaikan.php" type="button" class="btn btn-outline-danger">Data Tabel Perbaikan</a>
              </li>
              <!-- Link untuk beprindah ke halaman Tampil Mahasiswa -->
              <li>
                <a href="tampil_mahasiswa.php" type="button" class="btn btn-outline-info">Tampil Mahasiswa</a>
              </li>
              <!-- Link untuk berpindah ke halaman Tampil Nilai Perbaikan -->
              <li>
                <a href="tampil_nilaiperbaikan.php" type="button" class="btn btn-outline-secondary">Tampil Nilai Perbaikan</a>
              </li>
          </div>
        </div>
      </div>
    </nav>

    <!-- Merupakan Judul tabel Data Tabel Mahasiswa -->
    <h1>Data Tabel Mahasiswa</h1>
    <!-- PHP untuk mengambil data mahasiswa dari database -->
    <?php
    include "koneksi.php";
    $data = $DataMahasiswa->TampilkanDataMahasiswa(); // Untuk memanggil fungsi untuk menampilkan data mahasiswa
    ?>
    <!-- Untuk membuat tabel untuk menampilkan data mahasiswa -->
    <table border="1" class="table table-info table-hover">
      <tr>
        <!-- Header tabel -->
        <th>No</th>
        <th>Mahasiswa ID</th>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>No Telp</th>
      </tr>

      <!-- PHP loop untuk menampilkan data mahasiswa dalam tabel -->
      <?php
      $no = 1; // Untuk Inisialisasi nomor urut
      foreach ($data as $row) {
      ?>
      <tr>
        <!-- Menampilkan data mahasiswa ke dalam baris tabel -->
        <td><?php echo $no++?></td>
        <td><?php echo $row ['mahasiswa_id']?></td>
        <td><?php echo $row ['nim']?></td>
        <td><?php echo $row ['nama_mhs']?></td>
        <td><?php echo $row ['alamat']?></td>
        <td><?php echo $row ['email']?></td>
        <td><?php echo $row ['no_telp']?></td>
      </tr>
      <?php
      }
      ?>
    </table>

    <!-- Judul tabel Data Tabel Nilai Perbaikan -->
    <h1>Data Tabel Nilai Perbaikan</h1>

    <!-- PHP untuk mengambil data perbaikan nilai dari database -->
    <?php
    $data = $DataPerbaikan->TampilkanDataPerbaikan(); // Memanggil fungsi untuk menampilkan data nilai perbaikan
    ?>

    <!-- Membuat tabel untuk menampilkan data nilai perbaikan -->
    <table border="1" class="table table-success table-hover">
      <tr>
        <!-- Header tabel -->
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

      <!-- PHP loop untuk menampilkan data nilai perbaikan dalam tabel -->
      <?php
      $no = 1; // Inisialisasi nomor urut
      foreach ($data as $row) {
      ?>
      <tr>
        <!-- Menampilkan data nilai perbaikan ke dalam baris tabel -->
        <td><?php echo $no++?></td>
        <td><?php echo $row ['perbaikan_id']?></td>
        <td><?php echo $row ['tgl_perbaikan']?></td>
        <td><?php echo $row ['keterangan']?></td>
        <td><?php echo $row ['mahasiswa_id']?></td>
        <td><?php echo $row ['matkul_id']?></td>
        <td><?php echo $row ['semester_id']?></td>
        <td><?php echo $row ['nilai_id']?></td>
        <td><?php echo $row ['dosen_id']?></td>
      </tr>
      <?php
      }
      ?>
    </table>
  </body>
</html>