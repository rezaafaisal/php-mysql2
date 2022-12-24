<?php 

    // koneksi database
    $koneksi = mysqli_connect('localhost', 'root', 'Tenin@123', 'perpustakaan');

    // query untuk mengambil data
    $query = "SELECT * FROM buku";

    // eksekusi query
    $hasil = mysqli_query($koneksi, $query);

    // buat array kosong untuk menampung data buku
    $books = array();
    
    // proses pengambilan data
    while($baris = mysqli_fetch_assoc($hasil)){
        array_push($books, $baris);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="mt-5 row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h6>Data Buku</h6>
                            <a href="" class="btn btn-success">Tambah Data</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Buku</th>
                                    <th>Deskripsi</th>
                                    <th>Penulis</th>
                                    <th>Tahun Terbit</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php 
                                // perulangan data
                                foreach($books as $i => $book) :
                            ?>
                                <tr>
                                    <td><?= $i+1 ?></td>
                                    <td><?= $book['judul']  ?></td>
                                    <td><?= $book['deskripsi'] ?></td>
                                    <td><?= $book['penulis'] ?></td>
                                    <td><?= $book['tahun_terbit'] ?></td>
                                </tr>
                            <?php 
                                 endforeach;
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>