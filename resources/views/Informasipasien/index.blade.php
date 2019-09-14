@extends('layouts.master')

@section('content')

        <div class="container-fluid">
        <!-- Area Chart Example-->

        <div class="row">
            <div class="col-lg-12">
            <div class="card mb-1">
            <div class="card-header">
                <i class="fas fa-chart-bar"></i>
                Informasi Pasien Klinik Nirmala
            </div>

                <div class="card-body">
                    <div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand">
                        <div class=""></div></div><div class="chartjs-size-monitor-shrink">
                            <div class="">
                                <table class="table table-bordered table-hover dataTable"  role="grid" aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
                <thead>
                  <tr role="row">
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">No</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending"><center>Tgl Pendaftaran</center></th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending"><center>No Pendaftaran</center></th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending"><center>No Rekamedik</center></th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 300px;" aria-label="Position: activate to sort column ascending"><center>Nama Pasien</center></th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 100x;" aria-label="Office: activate to sort column ascending"><center>Klinik</center></th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 200px;" aria-label="Age: activate to sort column ascending"><center>Dokter</center></th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 80px;" aria-label="Position: activate to sort column ascending"><center>Status</center></th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 200px;" aria-label="Position: activate to sort column ascending"><center>Pemeriksaan</center></th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 200px;" aria-label="Position: activate to sort column ascending"><center>Batal Periksa</center></th>
                  </tr>
                </thead>
                <tbody>
                <tr role="row" class="">
                    <td>.</td>
                    <td class="sorting_1">13-09-2019</td>
                    <td>RJ1909130001</td>
                    <td>011112</td>
                    <td>Dani Kosasih</td>
                    <td>Kulit</td>
                    <td>dr. Suteja</td>
                    <td>Pemeriksaan</td>
                    <td><button type="submit" class="btn btn-primary ">Simpan <i class="fa fa-save"></i></button></td>
                    <td><button type="submit" class="btn btn-danger ">Batal <i class="fa fa-delete"></i></button></td>
                    

              </table>

                            </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>

@endsection
