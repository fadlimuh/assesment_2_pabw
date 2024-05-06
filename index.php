<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Produk</title>
</head>
<body>
    <h1>Manajemen Produk</h1>

    <h2>Menambahkan Produk</h2>
    <form id="formTambahProduk" enctype="multipart/form-data">
        <label for="nama">Nama Produk:</label>
        <input type="text" id="nama" name="nama" required><br>

        <label for="jenis">Jenis Produk:</label>
        <select id="jenis" name="jenis" required>
            <option value="makanan">Makanan</option>
            <option value="kosmetik">Kosmetik</option>
        </select><br>

        <label for="deskripsi_produk">Deskripsi Produk:</label>
        <textarea id="deskripsi_produk" name="deskripsi_produk" required></textarea><br>

        <label for="gambar">Gambar Produk:</label>
        <input type="file" id="gambar" name="gambar" accept="uploads/" required><br>

        <label for="kandungan">Kandungan:</label>
        <select id="kandungan" name="kandungan" required>
            <option value="Excellent">Excellent (Hijau)</option>
            <option value="Poor">Poor (Kuning)</option>
            <option value="Bad">Bad (Merah)</option>
        </select><br>

        <button type="submit">Tambah Produk</button><br>
    </form>

    <h2>Data Produk</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Jenis</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Kandungan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="dataProduk"></tbody>
    </table>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            function tampilkanDataProduk() {
                $.ajax({
                    url: 'tampilan_product.php',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data){
                        $('#dataProduk').empty();
                        $.each(data, function(index, item){
                            $('#dataProduk').append('<tr><td>'+item.id+'</td><td>'+item.nama+'</td><td>'+item.jenis+'</td><td>'+item.deskripsi_produk+'</td><td><img src="'+item.gambar+'" style="max-width: 100px;"></td><td>'+item.kandungan+'</td><td><button class="hapus" data-id="'+item.id+'">Hapus</button></td></tr>');
                        });
                    },
                    error: function(xhr, status, error){
                        console.error(status + ": " + error);
                    }
                });
            }
            
            tampilkanDataProduk();

            $('#formTambahProduk').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: 'add_product.php',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response){
                        alert(response);
                        tampilkanDataProduk();
                        $('#formTambahProduk')[0].reset();
                    },
                    error: function(xhr, status, error){
                        console.error(status + ": " + error);
                    }
                });
            });

            $(document).on('click', '.hapus', function(){
                var id_produk = $(this).data('id');
                $.ajax({
                    url: 'delete_produk.php?id='+id_produk,
                    type: 'GET',
                    success: function(response){
                        alert(response);
                        tampilkanDataProduk();
                    },
                    error: function(xhr, status, error){
                        console.error(status + ": " + error);
                    }
                });
            });
        });
    </script>
</body>
</html>
