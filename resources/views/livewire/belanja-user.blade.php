<div class="container">
    <div class="row mt-4">
        <div class="col">
            <div class="table-responsive">
                <table class="taable text-center">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Tanggal Pesan</td>
                            <td>Nama Produk</td>
                            <td>Status</td>
                            <td>Total Harga</td>
                            <td>Aksi</td>
                            <td>No.</td>
                            <td>Hapus</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1?>
                        @foreise ($belanja as $pesanan)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$pesanan->created_at}}</td>
                            <td>{{$no++}}</td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
 
</div>
