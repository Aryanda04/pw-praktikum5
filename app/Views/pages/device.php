<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Device</h1>
            <table class="table">
                <thead>

                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Status</th>
                        <th scope="col"> </th>
                    </tr>

                </thead>
                <tbody>
                    <?php foreach ($device as $k) : ?>
                        <tr>
                            <th scope="row"><?= $k['id']; ?></th>
                            <td><?= $k['device_name']; ?></td>
                            <td><?= $k['device_brand']; ?></td>
                            <td><?= $k['device_quantity']; ?></td>
                            <td><?= $k['device-status']; ?></td>
                            <td>
                                <a href="/pages/detail" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>