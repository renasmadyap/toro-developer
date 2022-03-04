<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data Customer
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('customer/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Customer
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>ID Customer</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>latitude</th>
                    <th>Longitude</th>
                    <th>Jenis Customer</th>
                    <th>Tanggal Lahir</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($customer) :
                    foreach ($customer as $c) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $c['id_customer']; ?></td>
                            <td><?= $c['nama']; ?></td>
                            <td><?= $c['alamat']; ?></td>
                            <td><?= $c['lat']; ?></td>
                            <td><?= $c['long']; ?></td>
                            <td><?= $c['customer_type_id']; ?></td>
                            <td><?= $c['tanggal_lahir']; ?></td>
                            <td><?= $c['keterangan']; ?></td>
                            <td><?= $c['status']; ?></td>
                            <td>
                                <a href="<?= base_url('customer/edit/') . $c['id_customer'] ?>" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('customer/delete/') . $c['id_customer'] ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="11" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>