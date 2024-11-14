<?php

include("dbconnection.php");

// buatkan function addStudent()
function addStudent()
{
    
    // variabel global
    global $conn;

    // Silakan buat variabel di bawah dengan data yang diambil dari form
    if (isset($_POST["submit"])) {
        // a. Ambil data nama mobil
        // b. Ambil data brand mobil
        $namaMahasiswa = $_POST["stuname"];
        // c. Ambil data warna mobil
        $nimMahasiswa = $_POST["stuid"];
        // d. Ambil data tipe mobil
        $jurusanMahasiswa = $_POST["stuclass"];
        // e. Ambil data harga mobil
        $angkatanMahasiswa = $_POST["stuangkatan"];
        // (4) Kalau sudah, kita lanjut Query
        $query = "INSERT INTO tb_student (nama, nim, jurusan, angkatan) VALUES ('$namaMahasiswa', '$nimMahasiswa', '$jurusanMahasiswa', $angkatanMahasiswa)";
        mysqli_query($conn, $query);
      
        // (5) Buatkan kondisi jika eksekusi query berhasil
        if (mysqli_affected_rows($conn) > 0) {
            header("Location: add-students.php");
        } else {
            echo "
            <script>
                alert('Data failed');
                document.location.href = add-students.php;
            </script>
            ";
            exit;
        }
      }

    // Periksa apakah NIM sudah ada
    $ret = mysqli_query($conn, "SELECT * FROM tb_students WHERE nim = $nim");

    if (mysqli_num_rows($ret) == 0) {
        // Masukkan data ke tabel tb_student
        $query = "INSERT INTO tb_student (id, nama, nim, jurusan, angkatan) VALUES ('$idMahasiswa', '$namaMahasiswa', '$nimMahasiswa', '$jurusanMahasiswa', $angkatanMahasiswa)";
        $result = mysqli_query($conn, $query);

        /**
         * Buatlah logika untuk Memeriksa hasil dari operasi penambahan data mahasiswa.
         * 
         * Jika operasi berhasil, menampilkan pesan bahwa mahasiswa telah ditambahkan
         * dan mengarahkan pengguna ke halaman 'add-students.php'.
         * Jika operasi gagal, menampilkan pesan kesalahan.
         * Jika NIM sudah ada, menampilkan pesan bahwa NIM sudah ada.
         */
        
    }
}

function editStudent($id) {
    global $conn;

    // Ambil input dari form dan simpan dalam variabel
    if (isset($_POST["create"])) {
        // a. Ambil data nama mobil
        $idMahasiswa = $_POST["id"];
        // b. Ambil data brand mobil
        $namaMahasiswa = $_POST["nama"];
        // c. Ambil data warna mobil
        $nimMahasiswa = $_POST["nim"];
        // d. Ambil data tipe mobil
        $jurusanMahasiswa = $_POST["jurusan"];
        // e. Ambil data harga mobil
        $angkatanMahasiswa = $_POST["angkatan"];
        // (4) Kalau sudah, kita lanjut Query
        $query = "INSERT INTO tb_student (id, nama, nim, jurusan, angkatan) VALUES ('$idMahasiswa', '$namaMahasiswa', '$nimMahasiswa', '$jurusanMahasiswa', $angkatanMahasiswa)";
        mysqli_query($conn, $query);

        // (5) Buatkan kondisi jika eksekusi query berhasil
        if (mysqli_affected_rows($conn) > 0) {
            header("Location: add-students.php");
        } else {
            echo "
            <script>
                alert('Data failed');
                document.location.href = add-students.php;
            </script>
            ";
            exit;
        }
        }

    // Isi query dibawah untuk update data mahasiswa berdasarkan ID
    $query = "";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '<script>alert("Student data has been updated.")</script>';
        echo "<script>window.location.href ='manage-students.php'</script>";
    } else {
        echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
}

