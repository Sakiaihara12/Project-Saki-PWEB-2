<div class="container">
    <div class="card">
        <div class="card-body">
 	    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                tambah data
            </button>
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Default Modal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post">
                            <div class="modal-body">
                                <div class="modal-body">
                                    <label>Nama</label>
                                    <input type="text" name="fullname" class="form-control" required>

                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" required>

                                    <label>Jenis Kunjungan</label>
                                    <input type="number" name="jenis_kunjungan_id" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" name="type" value="add" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Waktu</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jenis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    require_once("Controllers/Kunjungan.php");
                    foreach ($kunjungan->index() as $item): ?>
                    <tr>
                        <td></td>
                        <td><?= $item['timestamp']?></td>
                        <td><?= $item['fullname']?></td>
                        <td><?= $item['email']?></td>
                        <td><?= $item['jenis']?></td>
                        <td>
                            <form method="post">
                                <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                <input type="submit" value="delete" name="type" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                    <?php 
                    endforeach;
                    if(isset($_POST['type'])) {
                        if($_POST['type'] == "delete") {
                            $kunjungan->delete($_POST['id']);
                            echo '<script>alert("hapus berhasil")</script><meta http-equiv="refresh" content="0; url=?url=kunjungan">';
                        }
                        if ($_POST['type'] == "add") {
                            $data = [
                                'fullname' => $_POST['fullname'],
                                'email' => $_POST['email'],
                                'jenis_kunjungan_id' => $_POST['jenis_kunjungan_id']
                            ];
                            $kunjungan->create($data);
                            echo '<script>alert("Tambah berhasil")</script><meta http-equiv="refresh" content="0; url=?url=kunjungan">';
                        }
                    
                        if ($_POST['type'] == "update") {
                            $data = [
                                'fullname' => $_POST['fullname'],
                                'email' => $_POST['email'],
                                'jenis_kunjungan_id' => $_POST['jenis_kunjungan_id']
                            ];
                            $kunjungan->update($_POST['id'], $data);
                            echo '<script>alert("Update berhasil")</script><meta http-equiv="refresh" content="0; url=?url=kunjungan">';
                        }
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Waktu</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jenis</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>