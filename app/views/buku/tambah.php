
        <div class="container-fluid py-2 px-5">
            <div class="row d-flex align-items-center mt-4">
                <div class="col-2">
                    <h2 class="">Tambah Data</h2>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <form action="<?= BASEURL ?>/buku/tambahData" method="POST">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Judul</label>
                                <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail2" class="form-label">Nama Penulis</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail3" class="form-label">Tanggal Terbit</label>
                                <input type="date" name="tgl_terbit" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <a href="<?= BASEURL ?>/buku" class="btn btn-danger">Close</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
