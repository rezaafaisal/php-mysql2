<?php 
    $koneksi = mysqli_connect('localhost', 'root', 'Tenin@123', 'perpustakaan'); 

    function insert($data){
        $judul = $data['judul'];
        $penulis = $data['penulis'];
        $tahun = $data['tahun_terbit'];
        $deskripsi = $data['deskripsi'];

        global $koneksi;
        $query = "INSERT INTO buku (judul, deskripsi, tahun_terbit, penulis) VALUES ('$judul', '$deskripsi', '$tahun', '$penulis')";

        mysqli_query($koneksi, $query);

        if(mysqli_affected_rows($koneksi)){
            header("location:index.php?insert_success");
        }
    }
?>