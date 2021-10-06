<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php
        include "koneksi.php";
        $data = $conn->query("SELECT * FROM tb_user");
        foreach ($data as $i => $nilai) {
    ?>

            <tr>
                <td><?= $i+1 ?></td>
                <td><?= $nilai['nama'] ?></td>
                <td><?= $nilai['username'] ?></td>
                <td><?= $nilai['password'] ?></td>
                <td>
                    <button type="button" class="btn btn-warning btn-sm">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                </td>
            </tr>

    <?php } ?>
    </tbody>
</table>