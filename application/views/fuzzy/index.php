<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-lg-12">
            <center>
                <h2>Prediksi Heart Disease</h2>
                <h2>Fuzzy Logic</h2>
                <br>
            </center>
            <a href="<?= base_url(); ?>fuzzy/tambah/" class="btn btn-sm btn-primary">Prediksi Baru</a>
      <br>
            <br>
                    <?php 
                    $i = 1;
                    foreach ($heart as $hdp) : ?>
                    <div class="card mb-3">
                    <div class="card-body">
                        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col" style="width:4%">Nomor</th>
                            <th scope="col" style="width:9%">Keterangan</th>
                            <th scope="col" style="width:12%">MiuUmur</th>
                            <th scope="col" style="width:12%">MiuKolestrol</th>
                            <th scope="col" style="width:8%">MiuSTD</th>
                            <th scope="col">Matching Rules</th>
                            <th scope="col">Deffuzy</th>
                            <th scope="col">Hasil</th>
                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h6><?= $i++ ?></h6>
                        
                                </td>
                                <td>
                                    <h6 class="card-title"> Umur : <?= $hdp['age']?></h6>
                                    <h6 class="card-title"> Kolestrol : <?= $hdp['cholesterol']?></h6>
                                    <h6 class="card-title"> STD : <?= $hdp['st_dep']?></h6>
                                </td>
                                <td>
                                    <h6 class="card-title"> Dewasa : <?= $hdp['ageDewasa']?></h6>
                                    <h6 class="card-title"> Lansia : <?= $hdp['ageLansia']?></h6>
                                    <h6 class="card-title"> Manula : <?= $hdp['ageManula']?></h6>
                                </td>
                                <td>
                                    <h6 class="card-title"> Rendah : <?= $hdp['cholesterolRendah']?></h6>
                                    <h6 class="card-title"> Sedang : <?= $hdp['cholesterolSedang']?></h6>
                                    <h6 class="card-title"> Tinggi : <?= $hdp['cholesterolTinggi']?></h6>
                                </td>
                                <td>
                                    <h6 class="card-title"> Rendah : <?= $hdp['stdRendah']?></h6>
                                    <h6 class="card-title"> Sedang : <?= $hdp['stdSedang']?></h6>
                                    <h6 class="card-title"> Tinggi : <?= $hdp['stdTinggi']?></h6>
                                </td>
                                <td>
                                    <h6 class="card-title"><?= $hdp['rules']?></h6>
                                </td>
                                <td>
                                    <h6 class="card-title"><?= $hdp['predic_dec']?></h6>
                                </td>
                                <td>
                                    <h6 class="card-title"><?= $hdp['predic']?></h6>
                                </td>
                            
                            </tr>
                            
                        </tbody>
                        
                        </table>
                        <a href="<?= base_url(); ?>fuzzy/hapus/<?= $hdp['id_predic']; ?>"><span class="badge bg-danger text-light float-end">Hapus</span></a>
                    </div>
                    </div>
                    <?php endforeach; ?>
                    <br>
        </div>
    </div>
</div>