@extends('layouts.master')

@section('content')
 <!-- Icon Cards-->
        <div class="row">
         <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">Total Pasien!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
         <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">Pasien Bulan ini!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">Pasien Hari Ini!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        <div class="container-fluid">
        <!-- Area Chart Example-->

        <div class="row">
            <div class="col-lg-6">
            <div class="card mb-5">
            <div class="card-header">
                <i class="fas fa-chart-bar"></i>
                Registrasi Pasien
            </div>

                <div class="card-body">
                    <div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand">
                        <div class=""></div></div><div class="chartjs-size-monitor-shrink">
                            <div class="">
                                <form id="frm-pasien" target="_blank">
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="form-group">
                                                <div class="radio">
                                                <label>
                                                    <input type="radio" name="jenis_pasien" id="input" value="baru" checked="checked">
                                                    Baru
                                                </label>
                                                <label style="margin-left: 10px">
                                                    <input type="radio" name="jenis_pasien" id="input" value="lama">
                                                    Lama
                                                </label>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="form-group">
                                                <label>No. Rekamedik</label>
                                                <input type="text" name="id" id="id_antri" class="form-control" required="" value="" readonly="">
                                                <input type="hidden" name="status" value="antri">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Pasien</label>
                                                <table >
				                                <tr>
						                        <th><input type="text" name="nama" class="form-control" required=""></button></th>
						                        <th><button type="reset" class="btn btn-primary">Cari<i class="fa fa-refresh"></i></button></th>
					                            </tr>
                                                </div>
                                            </table>
                                            </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" name="tgl_lahir" class="form-control datepicker">
                                            </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <div class="radio">
                                                <label>
                                                    <input type="radio" name="jenis_kelamin" id="input" value="pria" checked="checked">
                                                    Pria
                                                </label>
                                                <label style="margin-left: 10px">
                                                    <input type="radio" name="jenis_kelamin" id="input" value="wanita">
                                                    Wanita
                                                </label>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="form-group">
                                                <label>Pekerjaan</label>
                                                <input type="text" name="pekerjaan" class="form-control" required="">
                                            </div>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="form-group">
                                                <label>No. Telp</label>
                                                <input type="text" name="telp" class="form-control" required="">
                                            </div>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="form-group">
                                                <label>Pilih Dokter</label>
                                                <select name="layanan_dokter" id="pelayanan_dokter" class="form-control select2" style="width:100% !important">
                                                <option disabled selected>-Pilih Dokter-</option>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="form-group">
                                                <label>Spesialis Dokter</label>
                                                <input type="text" id="spesialis" class="form-control" required="" readonly>
                                            </div>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea class="form-control" name="alamat" required=""></textarea>
                                            </div>
                                            </div>

                                            <div class="col-lg-8">
                                                <table >
				                                <tr>
						                        <th><button type="submit" class="btn btn-block btn-primary btn-lg btn-flat">Simpan <i class="fa fa-save"></i></button></th>
						                        <th><button type="reset" class="btn btn-block btn-danger btn-lg btn-flat">Reset<i class="fa fa-refresh"></i></button></th>
					                            </tr>
                                                </div>
                                            </table>
                                        </form>
                            </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>

<div class="col-lg-6">
    <div class="card mb-1">
        <div class="card-header">
            <i class="fas fa-chart-pie"></i>
                Informasi Pasien
        </div>
          <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover dataTable"  role="grid" aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
                <thead>
                  <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 300.767px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Tgl Pendaftaran</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 269.767px;" aria-label="Position: activate to sort column ascending">No. Pendaftaran</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 114.117px;" aria-label="Office: activate to sort column ascending">Klinik</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 51.9667px;" aria-label="Age: activate to sort column ascending">Dokter</th>
                  </tr>
                </thead>
                <tbody>
                <tr role="row" class="">
                    <td class="sorting_1">Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>

              </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
