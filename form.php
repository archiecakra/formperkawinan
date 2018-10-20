<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>

    <meta name="description" content="Form Registrasi Perkawinan">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fa_all.css">
    <link rel="stylesheet" type="text/css" href="assets/css/form.css">

    <!-- jQuery -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <!-- Java script -->
    <script src="assets/js/bootstrap.bundle.js"></script>

    <title>Form Registrasi Perkawinan</title>

  </head>

  <body>

    <div class="container">
      <form action="index.html" method="post">

        <div class="row">
          <div class="col-12">

            <div class="header text-center">
              <h1>Form Pernikahan</h1>
            </div>

          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div id="wizard1">
  <h3>Personal Information</h3>
  <section>
    <p>Try the keyboard navigation by clicking arrow left or right!</p>
  </section>
  <h3>Billing Information</h3>
  <section>
    <p>Wonderful transition effects.</p>
  </section>
  <h3>Payment Details</h3>
  <section>
    <p>The next and previous buttons help you to navigate through your content.</p>
  </section>
</div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-body">
                <div class="col-md-12">
                  <div class="form-check form-check-inline">
                    <h5>Pilih Kewarganegaraan</h5>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label"> <strong>WNI</strong> </label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="">
                    <label class="form-check-label"> <strong>WNA</strong> </label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="">
                    <label class="form-check-label"> <strong>Tanpa Warga Negara</strong> </label>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="" class="col-md-3 col-form-label">Pekerjaan / Pangkat</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="pekerjaan" placeholder="Masukkan Pekerjaan / Pangkat">
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>

        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav item text-center">
                    <a href="#" class="nav-link active"> <h6>Data Calon<br>Mempelai Pria</h6> </a>
                  </li>
                  <li class="nav item text-center">
                    <a href="#" class="nav-link"> <h6>Data Calon<br>Mempelai Wanita</h6> </a>
                  </li>
                  <li class="nav item text-center">
                    <a href="#" class="nav-link"> <h6>Data Saksi<br>Pertama</h6> </a>
                  </li>
                  <li class="nav item text-center">
                    <a href="#" class="nav-link"> <h6>Data Saksi<br>Kedua</h6> </a>
                  </li>
                </ul>
              </div>
              <div class="card-body">

                <div class="card">
                  <div class="card-header">
                    <h6>Data Diri</h6>
                  </div>
                  <div class="card-body">

                    <div class="form-group row">
                      <label for="nama_keluarga" class="col-md-3 col-form-label">Nama Keluarga</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="nama_keluarga" id="nama_keluarga" placeholder="Masukkan Nama Keluarga">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="nama_kecil" class="col-md-3 col-form-label">Nama Kecil</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="nama_kecil" id="nama_kecil" placeholder="Masukkan Nama Kecil">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="ttl" class="col-md-3 col-form-label">Tempat & Tanggal Lahir</label>
                      <div class="col-md-4">
                        <input type="text" class="form-control" name="tl" placeholder="Masukkan Kota Tempat Lahir">
                      </div>
                      <div class="col-md-5">
                        <input type="date" class="form-control" name="ttl">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-md-3 col-form-label">Agama</label>
                      <div class="col-md-3">
                        <select class="custom-select" name="agama">
                          <option value="">Pilih Agama</option>
                          <option value="islam">Islam</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-md-3 col-form-label">Pekerjaan / Pangkat</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="pekerjaan" placeholder="Masukkan Pekerjaan / Pangkat">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-md-3 col-form-label">Alamat Tempat Tinggal Sekarang</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Tempat Tinggal">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-md-3 col-form-label">Status Pernikahan</label>
                      <div class="col-md-9">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label"> <strong>Sudah Pernah Menikah</strong> </label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="">
                          <label class="form-check-label"> <strong>Belum Pernah Menikah</strong> </label>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    <h6>Data Orang Tua ( Ayah )</h6>
                  </div>
                  <div class="card-body">

                    <div class="form-group row">
                      <label for="nama_keluarga" class="col-md-3 col-form-label">Nama Keluarga</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="nama_keluarga" id="nama_keluarga" placeholder="Masukkan Nama Keluarga">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="nama_kecil" class="col-md-3 col-form-label">Nama Kecil</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="nama_kecil" id="nama_kecil" placeholder="Masukkan Nama Kecil">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="ttl" class="col-md-3 col-form-label">Tempat & Tanggal Lahir</label>
                      <div class="col-md-4">
                        <input type="text" class="form-control" name="tl" placeholder="Masukkan Kota Tempat Lahir">
                      </div>
                      <div class="col-md-5">
                        <input type="date" class="form-control" name="ttl">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-md-3 col-form-label">Agama</label>
                      <div class="col-md-3">
                        <select class="custom-select" name="agama">
                          <option value="">Pilih Agama</option>
                          <option value="islam">Islam</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-md-3 col-form-label">Pekerjaan / Pangkat</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="pekerjaan" placeholder="Masukkan Pekerjaan / Pangkat">
                      </div>
                    </div>

                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    <h6>Data Orang Tua ( Ibu )</h6>
                  </div>
                  <div class="card-body">

                    <div class="form-group row">
                      <label for="nama_keluarga" class="col-md-3 col-form-label">Nama Keluarga</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="nama_keluarga" id="nama_keluarga" placeholder="Masukkan Nama Keluarga">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="nama_kecil" class="col-md-3 col-form-label">Nama Kecil</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="nama_kecil" id="nama_kecil" placeholder="Masukkan Nama Kecil">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="ttl" class="col-md-3 col-form-label">Tempat & Tanggal Lahir</label>
                      <div class="col-md-4">
                        <input type="text" class="form-control" name="tl" placeholder="Masukkan Kota Tempat Lahir">
                      </div>
                      <div class="col-md-5">
                        <input type="date" class="form-control" name="ttl">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-md-3 col-form-label">Agama</label>
                      <div class="col-md-3">
                        <select class="custom-select" name="agama">
                          <option value="">Pilih Agama</option>
                          <option value="islam">Islam</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-md-3 col-form-label">Pekerjaan / Pangkat</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="pekerjaan" placeholder="Masukkan Pekerjaan / Pangkat">
                      </div>
                    </div>

                  </div>
                </div>

              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-md" name="button">Selanjutnya</button>
              </div>
            </div>

          </div>
        </div>

      </form>
    </div>

  </body>

</html>
