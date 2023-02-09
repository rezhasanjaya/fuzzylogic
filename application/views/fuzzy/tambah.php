<div class="container" style="margin-top: 10px">
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <h1 class="fw mt-4">Prediksi Baru</h1>
            <hr>
            <div class="card-body">
                <form method="post" action="<?= base_url('fuzzy/tambah') ?>" enctype="multipart/form-data">
                    <?php if ($this->session->flashdata('flash')) : ?>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Data <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="age" class="form-label"><b>Age</b></label>
                        <input type="number" min="29" max="77" class="form-control" name="age" id="age">
                        <div class="form-text text-danger"><?= form_error('age'); ?></div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="cholesterol" class="form-label"><b>Cholesterol</b></label>
                        <input type="number" min="126" max="564" class="form-control" name="cholesterol" id="cholesterol">
                        <div class="form-text text-danger"><?= form_error('cholesterol'); ?></div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="st_dep" class="form-label"><b>ST Depression</b></label>
                        <input type="float" min="0" max="4" class="form-control" name="st_dep" id="st_dep">
                        <div class="form-text text-danger"><?= form_error('st_dep'); ?></div>
                    </div>
                    <br>

                    <button type="submit" name="submit" class="btn btn-primary  float-end">Submit</button>
                    <a href="<?php echo base_url() ?>fuzzy" class="btn btn-md btn-dark">Kembali</a>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>