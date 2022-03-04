<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Form Edit Customer
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('customer') ?>" class="btn btn-sm btn-secondary btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Kembali
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open('', [], ['stok' => 0, 'id_customer' => $customer['id_customer']]); ?>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="id_customer">ID Customer</label>
                    <div class="col-md-9">
                        <input readonly value="<?= set_value('id_customer', $customer['id_customer']); ?>" name="id_customer" id="id_customer" type="text" class="form-control" placeholder="ID Customer...">
                        <?= form_error('id_customer', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="nama">Nama</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('nama', $customer['nama']); ?>" name="nama" id="nama" type="text" class="form-control" placeholder="Nama...">
                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="alamat">Alamat</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('alamat', $customer['alamat']); ?>" name="alamat" id="alamat" type="text" class="form-control" placeholder="Alamat...">
                        <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="lat">Latitude</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('lat', $customer['lat']); ?>" name="lat" id="lat" type="text" class="form-control" placeholder="Latitude...">
                        <?= form_error('lat', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="long">Longtitude</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('long', $customer['long']); ?>" name="long" id="long" type="text" class="form-control" placeholder="Longtitude...">
                        <?= form_error('long', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="customer_type_id">Tipe Customer</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <select name="customer_type_id" id="customer_type_id" class="custom-select">
                                <option value="<?= set_value('customer_type_id', $customer['customer_type_id']); ?>" selected disabled><?= $customer['customer_type_id']?></option>
                                <?php foreach ($customer_type as $j) : ?>
                                    <option <?= set_select('customer_type_id', $j['id_customer_type']) ?> value="<?= $j['id_customer_type'] ?>"><?= $j['id_customer_type'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <?= form_error('customer_type_id', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="tanggal_lahir">Tanggal Lahir</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('tanggal_lahir', $customer['tanggal_lahir']); ?>" name="tanggal_lahir" id="tanggal_lahir" type="text" class="form-control date" placeholder="Tanggal Lahir...">
                        <?= form_error('tanggal_lahir', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="keterangan">Keterangan</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('keterangan', $customer['keterangan']); ?>" name="keterangan" id="keterangan" type="text" class="form-control" placeholder="Keterangan...">
                        <?= form_error('keterangan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="status">Status</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('status', $customer['status']); ?>" name="status" id="status" type="text" class="form-control" placeholder="Status...">
                        <?= form_error('status', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</bu>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>