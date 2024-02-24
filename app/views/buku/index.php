
        <div class="container-fluid py-2 px-5">
            <div class="row d-flex align-items-center mt-4">
                <div class="col-2">
                    <h2 class="">Daftar Buku</h2>
                </div>
                <div class="col-1">
                    <!-- Pakai Halaman Baru -->
                    <!-- <a href="<?= BASEURL ?>/buku/tambah" class="btn btn-primary btn-sm ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                        Tambah Data
                    </a> -->
                    <!-- Pakai Modal -->
                    <button type="button" class="btn btn-primary btn-sm tombolTambah" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                        Tambah Data
                    </button>
                </div>
                <div class="col-2">
                    <form action="<?= BASEURL ?>/buku/searching" method="post">
                        <div class="input-group">
                            <input type="text" name="cari_judul" class="form-control" placeholder="Cari Judul" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button type="submit" name="search" class="btn btn-primary" type="button" id="button-addon2">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-3">
                    <?php Flasher::flash(); ?>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-8">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Nama Penulis</th>
                                <th scope="col">Tanggal Terbit</th>
                                <th scope="col" style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php
                            $n = 1;
                            foreach ($data['buku'] as $rowBuku) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $n++ ?></th>
                                    <td><?= $rowBuku['judul'] ?></td>
                                    <td><?= $rowBuku['nama'] ?></td>
                                    <td><?= $rowBuku['tgl_terbit'] ?></td>
                                    <td style="text-align: center;">
                                        <!-- Pakai Halaman -->
                                        <!-- <a href="<?= BASEURL ?>/buku/edit/<?= $rowBuku['id_buku'] ?>" class="btn btn-warning btn-sm" >
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg>
                                        </a> -->

                                        <!-- Pakai Modal -->
                                        <a href="<?= BASEURL ?>/buku/edit/<?= $rowBuku['id_buku'] ?>" class="btn btn-warning btn-sm tombolEdit" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id_buku="<?= $rowBuku['id_buku'] ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg>
                                        </a>

                                        <a href="<?= BASEURL ?>/buku/deleteData/<?= $rowBuku['id_buku'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Ingin menghapus data ini?');">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="" method="post">
                    <input type="hidden" name="id_buku" class="id_buku">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Judul</label>
                                <input type="text" name="judul" class="form-control judul" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail2" class="form-label">Nama Penulis</label>
                                <input type="text" name="nama" class="form-control nama" id="exampleInputEmail2" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail3" class="form-label">Tanggal Terbit</label>
                                <input type="date" name="tgl_terbit" class="form-control tgl_terbit" id="exampleInputEmail3" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="<?= BASEURL ?>/js/script.js"></script>
    </body>
</html>
