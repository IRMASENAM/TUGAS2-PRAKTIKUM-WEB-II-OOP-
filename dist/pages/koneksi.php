<?php
// Kelas induk atau sebagai parent dari sebuah class database
class Database {
    // Properti untuk informasi koneksi
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "prakweb2_oop";
    protected $mysqli;

    // Konstruktor untuk menginisialisasi koneksi ke database
    public function __construct()
    {
        $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);
        
        // Mengecek apakah koneksi berhasil
        if ($this->mysqli->connect_errno) {
            echo "Koneksi Database Tidak Tersedia";
            exit;
        }
    }
}
// Kelas untuk mengelola data mahasiswa, turunan dari kelas Database
class Mahasiswa extends Database {
    // Method untuk menampilkan seluruh data mahasiswa
    public function TampilkanDataMahasiswa(){
        $hasil = array(); // Inisialisasi array kosong untuk menampung data
        $data = mysqli_query($this->mysqli, "SELECT * FROM mahasiswa"); // Query SQL untuk mengambil data mahasiswa
        
        // Mengecek apakah query berhasil dan memproses hasilnya
        if ($data) {
            while ($row = mysqli_fetch_array($data)) {
                $hasil[] = $row; // Menyimpan hasil ke dalam array
            }
        }
        return $hasil; // Mengembalikan array hasil
    }
}
// Kelas untuk mengelola data nilai perbaikan, turunan dari kelas Database
class NilaiPerbaikan extends Database {
    // Method untuk menampilkan data nilai perbaikan
    public function TampilkanDataPerbaikan(){
        $hasil = array(); // Inisialisasi array kosong
        $data = mysqli_query($this->mysqli, "SELECT * FROM nilai_perbaikan"); // Query SQL
        
        // Mengecek apakah query berhasil dan memproses hasilnya
        if ($data) {
            while ($row = mysqli_fetch_array($data)) {
                $hasil[] = $row; // Menyimpan hasil ke dalam array
            }
        }
        return $hasil; // Mengembalikan array hasil
    }
}
// Membuat objek dari kelas Mahasiswa
$DataMahasiswa = new Mahasiswa();
// Membuat objek dari kelas NilaiPerbaikan
$DataPerbaikan = new NilaiPerbaikan();
// Kelas turunan untuk menampilkan data mahasiswa dengan email tertentu
class TampilMahasiswa extends Mahasiswa {
    // Override method untuk menampilkan data mahasiswa berdasarkan email
    public function TampilkanDataMahasiswa()
    {
        $hasil = array(); // Inisialisasi array kosong
        $data = mysqli_query($this->mysqli, "SELECT * FROM mahasiswa WHERE email = 'pnc.stu@pnc.ac.id'"); // Query SQL dengan kondisi
        
        // Mengecek apakah query berhasil dan memproses hasilnya
        if ($data) {
            while ($row = mysqli_fetch_array($data)) {
                $hasil[] = $row; // Menyimpan hasil ke dalam array
            }
        }
        return $hasil; // Mengembalikan array hasil
    }
}
// Membuat objek dari kelas TampilMahasiswa dan mengambil data mahasiswa tertentu
$TampMaha = new TampilMahasiswa();
$dataMahasiswa = $TampMaha->TampilkanDataMahasiswa(); // Menyimpan data mahasiswa tertentu
// Kelas turunan untuk menampilkan data nilai perbaikan dengan keterangan tertentu
class TampilNilaiPerbaikan extends NilaiPerbaikan {
    // Override method untuk menampilkan data nilai perbaikan berdasarkan kondisi tertentu
    public function TampilkanDataPerbaikan()
    {
        $hasil = array(); // Inisialisasi array kosong
        $data = mysqli_query($this->mysqli, "SELECT * FROM nilai_perbaikan WHERE keterangan = 'nilai 70 perlu perbaikan'"); // Query SQL dengan kondisi
        
        // Mengecek apakah query berhasil dan memproses hasilnya
        if ($data) {
            while ($row = mysqli_fetch_array($data)) {
                $hasil[] = $row; // Menyimpan hasil ke dalam array
            }
        }
        return $hasil; // Mengembalikan array hasil
    }
}
// Membuat objek dari kelas TampilNilaiPerbaikan dan mengambil data nilai perbaikan tertentu
$TampNiPer = new TampilNilaiPerbaikan();
$dataPerbaikan = $TampNiPer->TampilkanDataPerbaikan(); // Menyimpan data nilai perbaikan