<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data Customer Type
                </h4>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>ID Customer Type</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($customerType) :
                    foreach ($customerType as $ct) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $ct['id_customer_type']; ?></td>
                            <td><?= $ct['nama']; ?></td>
                            <td><?= $ct['alamat']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="4" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>