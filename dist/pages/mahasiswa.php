<!doctype html>
<html lang="en">
  <head>
    <!-- Meta tag untuk encoding karakter dan mengatur skala tampilan di perangkat mobile -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Menghubungkan file CSS Bootstrap untuk tampilan responsive dan modern -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <!-- Judul halaman -->
    <title>Tugas Praktikum WEB II - OOP</title>
    <!-- Menghubungkan Bootstrap JS bundle untuk fitur interaktif seperti dropdown -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Gaya khusus untuk mempercantik judul dan tabel -->
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
    <!-- Navbar untuk navigasi halaman -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <!-- Nama aplikasi di bagian kiri navbar -->
        <a class="navbar-brand" href="index.php">MailScore</a>
        <!-- Tombol untuk meng-collapse navbar di layar kecil -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu navigasi -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- Link untuk berpindah ke halaman tabel mahasiswa -->
            <li>
              <a href="mahasiswa.php" type="button" class="btn btn-outline-primary">Data Tabel Mahasiswa</a>
            </li>
            <!-- Link untuk berpindah ke halaman tabel nilai perbaikan -->
            <li>
              <a href="nilaiperbaikan.php" type="button" class="btn btn-outline-danger">Data Tabel Perbaikan</a>
            </li>
            <!-- Link untuk berpindah ke halaman yang menampilkan data mahasiswa dengan kondisi tertentu -->
            <li>
              <a href="tampil_mahasiswa.php" type="button" class="btn btn-outline-info">Tampil Mahasiswa</a>
            </li>
            <!-- Link untuk berpindah ke halaman yang menampilkan data nilai perbaikan berdasarkan kondisi tertentu -->
            <li>
              <a href="tampil_nilaiperbaikan.php" type="button" class="btn btn-outline-secondary">Tampil Nilai Perbaikan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Judul halaman untuk tabel Mahasiswa -->
    <h1>Data Tabel Mahasiswa</h1>
    <!-- Mengambil data perbaikan nilai dari database melalui PHP -->
    <?php
    // Menghubungkan ke database
    include "koneksi.php";
    // Mengambil data mahasiswa
    $data = $DataMahasiswa->TampilkanDataMahasiswa();
    ?>
    <!-- Tabel untuk menampilkan data mahasiswa -->
    <table border="1" class="table table-info table-hover">
      <tr>
        <th>No</th>
        <th>Mahasiswa ID</th>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>No Telp</th>
      </tr>
      <?php
      $no = 1;
      foreach ($data as $row) {  // Membuka blok `foreach`
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['mahasiswa_id']; ?></td>
        <td><?php echo $row['nim']; ?></td>
        <td><?php echo $row['nama_mhs']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['no_telp']; ?></td>
      </tr>
      <?php
      } // Menutup blok `foreach`
      ?>
    </table>
  </body>
</html>