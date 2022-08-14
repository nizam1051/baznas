$(document).on('change', '#countzakat', function () {
    var select = $(this).val();
    var form = '';
    if (select == 'fitrah') {
        form = '<div class="card-body" style="background-color: #01502D;">' +
            '<h5 class="card-title" style="color:white; text-align: left;"><b>Komponen Zakat</b></h5>' +
            '<div>&nbsp;</div>' +
            '<p class="card-text" style="color: white; text-align: left;">Silahkan diisi sesuai dengan harga beras 1 Kg di kota anda</p>' +
            '<p class="card-text" style="color: white; text-align: left;">Harga Beras (1 Kg)</p>' +
            '<div class="col-auto">' +
            '<div class="input-group">' +
            '<div class="input-group-text">Rp</div>' +
            '<input type="text" class="form-control" id="priceFitrah" data-price = 0>' +
            '</div>' +
            '</div>' +
            '<p class="card-text" style="color: white; text-align: left;">Besaran Zakat Fitrah</p>' +
            '<div class="col-auto">' +
            '<div class="input-group">' +
            '<div class="input-group-text">Kg</div>' +
            '<input type="text" class="form-control" value="2,5" readonly>' +
            '</div>' +
            '</div>' +
            '<div>&nbsp;</div>' +
            '<button type="button" class="btn btn-primary2" id="hitungFitrah" style="background-color: #FF9900; border-color: #FF9900;">Hitung</button>' +
            '</div>';
    } else if (select == 'maal') {
        form = '<div class="card-body" style="background-color: #01502D;">' +
            '<h5 class="card-title" style="color:white; text-align: left;"><b>Komponen Zakat</b></h5>' +
            '<div>&nbsp;</div>' +
            '<p class="card-text" style="color: white; text-align: left;">Silahkan diisi sesuai dengan gaji anda perbulan</p>' +
            '<div>&nbsp;</div>' +
            '<p class="card-text" style="color: white; text-align: left;">Gaji Pokok Perbulan</p>' +
            '<div class="col-auto">' +
            '<div class="input-group">' +
            '<div class="input-group-text">Rp</div>' +
            '<input type="text" class="form-control" id="gajiPokok" name="gaji" required>' +
            '</div>' +
            '</div>' +
            '<p class="card-text" style="color: white; text-align: left;">Tunjangan Tambahan</p>'+
            '<div class="col-auto">'+
            '<div class="input-group">'+
            '<div class="input-group-text">Rp</div>'+
            '<input type="text" class="form-control" name="tunjangan" id="tunjangan" required>'+
            '</div>'+
            '</div>'+
            '<p class="card-text" style="color: white; text-align: left;">Hutang/Cicilan</p>' +
            '<div class="col-auto">' +
            '<div class="input-group">' +
            '<div class="input-group-text">Rp</div>' +
            '<input type="text" class="form-control" id="hutang" name="hutang" required>' +
            '</div>' +
            '</div>' +
            '<p class="card-text" style="color: white; text-align: left;">Besaran Zakat Maal</p>' +
            '<div class="col-auto">' +
            '<div class="input-group">' +
            '<div class="input-group-text">%</div>' +
            '<input type="number" class="form-control" id="autoSizingInputGroup" value="2,5" readonly>' +
            '</div>' +
            '</div>' +
            '<div>&nbsp;</div>' +
            '<button type="submit" class="btn btn-primary2" id="hitungMaal" style="background-color: #FF9900; border-color: #FF9900;">Hitung</button>' +
            '</div>';
    } else if (select == 'fidyah') {
        form = '<div class="card-body" style="background-color: #01502D;">' +
            '<h5 class="card-title" style="color:white; text-align: left;"><b>Komponen Zakat</b></h5>' +
            '<div>&nbsp;</div>' +
            '<p class="card-text" style="color: white; text-align: left;">Silahkan diisi sesuai dengan hutang puasa anda</p>' +
            '<div>&nbsp;</div>' +
            '<p class="card-text" style="color: white; text-align: left;">Total hari tidak berpuasa</p>' +
            '<div class="col-auto">' +
            '<div class="input-group">' +
            '<div class="input-group-text">Hari</div>' +
            '<input type="number" min="1" class="form-control" id="day" name="hari">' +
            '</div>' +
            '</div>' +
            ' <p class="card-text" style="color: white; text-align: left;">Total jiwa</p>'+
            ' <div class="col-auto">'+
            '<div class="input-group">'+
            '<div class="input-group-text">Jiwa</div>'+
            '<input type="number" min="1" class="form-control" id="soul" name="jiwa">'+
            '</div>'+
            '</div>'+
            ' <p class="card-text" style="color: white; text-align: left;">Harga Zakat Fidyah(Per hari dan Per jiwa)</p>' +
            '<div class="col-auto">' +
            '<div class="input-group">' +
            '<div class="input-group-text">Rp</div>' +
            '<input type="text" class="form-control" value="50.000" readonly>' +
            '</div>' +
            '</div>' +
            '<div>&nbsp;</div>' +
            '<button type="submit" class="btn btn-primary2" id="hitungFidyah" style="background-color: #FF9900; border-color: #FF9900;">Hitung</button>' +
            '</div>';
    } else if (select == 'qurban') {
        form = '<div class="card-body" style="background-color: #01502D;">' +
            '<h5 class="card-title" style="color:white; text-align: left;"><b>Komponen Qurban</b></h5>' +
            '<div>&nbsp;</div>' +
            '<p class="card-text" style="color: white; text-align: left;">Pilih Jenis Qurban</p>' +
            '<div class="col-auto">' +
            '<div class="input-group">' +
            '<select class="form-select" id="qurban" name="qurban">' +
            '<option value="A">Domba/Kambing Al-Kautsar</option>' +
            '<option value="B">Domba/Kambing Firdaus</option>' +
            '<option value="C">Sapi Al-Kautsar</option>' +
            '</select>' +
            '</div>' +
            '</div>' +
            '<div>&nbsp;</div>' +
            '<button type="submit" class="btn btn-primary2" style="background-color: #FF9900; border-color: #FF9900;" id="hitungQurban">Hitung</button>' +
            '</div>';
    } else if (select == 'infaq') {
        form = '<div class="card-body" style="background-color: #01502D;">' +
            '<h5 class="card-title" style="color:white; text-align: left;"><b>Komponen Infaq</b></h5>' +
            '<div>&nbsp;</div>' +
            '<p class="card-text" style="color: white; text-align: left;">Silahkan diisi sesuai dengan gaji anda perbulan</p>' +
            '<div>&nbsp;</div>' +
            '<p class="card-text" style="color: white; text-align: left;">Gaji Pokok Perbulan</p>' +
            '<div class="col-auto">' +
            '<div class="input-group">' +
            '<div class="input-group-text">Rp</div>' +
            '<input type="text" min="0" class="form-control" id="gaji" name="gaji">' +
            '</div>' +
            '</div>' +
            '<p class="card-text" style="color: white; text-align: left;">Tunjangan Tambahan</p>' +
            '<div class="col-auto">' +
            '<div class="input-group">' +
            '<div class="input-group-text">Rp</div>' +
            '<input type="text" min="0" class="form-control" id="tunjangan" name="tunjangan">' +
            '</div>' +
            '</div>' +
            '<p class="card-text" style="color: white; text-align: left;">Besaran Infaq Perbulan</p>' +
            '<div class="col-auto">' +
            '<div class="input-group">' +
            '<div class="input-group-text">%</div>' +
            '<input type="text" class="form-control" id="autoSizingInputGroup" value="2,5" readonly>' +
            '</div>' +
            '</div>' +
            '<div>&nbsp;</div>' +
            '<button type="submit" class="btn btn-primary2" id="hitungInfaq" style="background-color: #FF9900; border-color: #FF9900;">Hitung</button>' +
            '</div>';
    } else {
        form = '<div class="alert alert-danger" role="alert">' +
            '<b>Ooops!</b>pilih jenis zakat' +
            '</div>';
    }
    $('#showform').html(form);
});
