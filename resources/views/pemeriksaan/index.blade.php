@extends('layouts.master')

@section('content')

        <div class="container-fluid">
        <!-- Area Chart Example-->

        <div class="row">
            <div class="col-lg-12">
            <div class="card mb-1">
            <div class="card-header">
                <i class="fas fa-chart-bar"></i>
                Pemeriksaan Pasien
            </div>

                <div class="card-body">
                    <div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand">
                        <div class="">
                            </div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class="">

                                        <div class="container-fluid">
                                        <!-- Area Chart Example-->

                                        <div class="row">
                                            <div class="col-lg-12">
                                            <div class="card mb-1">
                                            <div class="card-header">
                                                <i class="fas fa-chart-bar"></i>
                                                Pemeriksaan Pasien
                                            </div>

                                                <div class="card-body">
                                                    <div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand">
                                                        <div class="">
                                                            </div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink">
                                                            <div class="">
                                                                <table class="table-condensed" width="100%">
                                                                    <tbody>
                                                                            <tr>
                                                                            <td><label for="">Tanggal Pendaftaran</label></td>
                                                                            <td><input type="text" name="telp" class="form-control" required=""></td>
                                                                            <td></td>
                                                                            <td><label for="">No. Rekam Medik</label></td>
                                                                            <td><input type="text" name="telp" class="form-control" required=""></td>
                                                                            </tr>
                                                                            <td><br></td>

                                                                            <tr>
                                                                            <td><label for="">No Pendaftaran</label></td>
                                                                            <td><input type="text" name="telp" class="form-control" required=""></td>
                                                                            <td></td>
                                                                            <td><label for="">Nama Pasien</label></td>
                                                                            <td><input type="text" name="telp" class="form-control" required=""></td>
                                                                            </tr>

                                                                             <td><br></td>

                                                                            <tr>
                                                                            <td><label for="">Dokter</label></td>
                                                                            <td><input type="text" name="telp" class="form-control" required=""></td>
                                                                            <td></td>
                                                                            <td><label for="">Klinik</label></td>
                                                                            <td><input type="text" name="telp" class="form-control" required=""></td>
                                                                            </tr>

                                                                        </tbody>


                                                                </table>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>


                                </div>

                                <div class="container-fluid">
                                        <!-- ATindakan Pasien -->

                                        <div class="row">
                                            <div class="col-lg-12">
                                            <div class="card mb-1">
                                            <div class="card-header">
                                                <i class="fas fa-chart-bar"></i>
                                                Tindakan Pasien
                                            </div>

                                                <div class="card-body">
                                                    <div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand">
                                                        <div class="">
                                                            </div>
                                                        </div>
                                                        <div class="chartjs-size-monitor-shrink">
                                                            <div class="">
                                                                <ul class="nav nav-tabs" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Anamnesa</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Tindakan</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#references" role="tab" data-toggle="tab">Obat-Obtan</a>
                                                                </li>
                                                                </ul>

                                                                <!-- Tab panes -->
                                                                <div class="tab-content">
                                                                <div role="tabpanel" class="tab-pane fade in active" id="profile">
                                                                     <!-- ATindakan Pasien -->

                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                            <div class="card mb-1">
                                                                            <div class="card-header">
                                                                                <i class="fas fa-chart-bar"></i>
                                                                                Pemeriksaan Awal
                                                                            </div>

                                                                                <div class="card-body">
                                                                                    <div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand">
                                                                                        <div class="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="chartjs-size-monitor-shrink">
                                                                                            <div class="">
                                                                                                    <table class="table-condensed" width="100%">
                                                                    <tbody>
                                                                            <tr>
                                                                            <td><label for="">Berat Badan</label></td>
                                                                            <td><label for="">Tensi Darah</label></td>
                                                                            <td><label for="">Tinggi Badan </label></td>
                                                                            <td><label for="">Buta Warna</label></td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td><input type="text" name="telp" class="form-control" required=""></td>
                                                                            <td><input type="text" name="telp" class="form-control" required=""></td>
                                                                            <td><input type="text" name="telp" class="form-control" required=""></td>
                                                                            <td><input type="text" name="telp" class="form-control" required=""></td>
                                                                            </tr>
                                                                            <td><br></td>
                                                                            <tr>
                                                                            <td><label for="">Keluhan</label></td>
                                                                            <td><input type="text" name="telp" class="form-control" required=""></td>
                                                                            </tr>
                                                                            <td></td>
                                                                            <tr>
                                                                            <td><label for="">Anamnesis</label></td>
                                                                            <td><input type="text" name="telp" class="form-control" required=""></td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td><label for="">Diagnosis</label></td>
                                                                            <td><input type="text" name="telp" class="form-control" required=""></td>
                                                                            </tr>
                                                                            <td></td>
                                                                            <tr>
                                                                            <td><label for="">Keterangan</label></td>
                                                                            <td><input type="text" name="telp" class="form-control" required=""></td>
                                                                            </tr>
                                                                            <tr>
                                                                            <td><label for="">Upload Photo</label></td>
                                                                            <td><input type="file" name="telp" class="form-control" ></td>
                                                                            </tr>
                                                                            <td><br><br></td>
                                                                            <tr>
                                                                                <td>
                                                                                    <button type="submit">Simpan</button>
                                                                                    <button type="reset">Batal</button>
                                                                                </td>
                                                                            </tr>



                                                                        </tbody>


                                                                </table>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                                <div role="tabpanel" class="tab-pane fade" id="buzz">
                                                                     <!-- ATindakan Pasien -->
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                            <div class="card mb-1">
                                                                            <div class="card-header">
                                                                                <i class="fas fa-chart-bar"></i>
                                                                                Tindakan
                                                                            </div>

                                                                                <div class="card-body">
                                                                                    <div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand">
                                                                                        <div class="">
{
<div class="modal fade" id="daftar-tindakan">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Tindakan Dokter</h5>
<button type="button" class="close" data-dismiss="modal">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<table class="table table-striped">
<thead class="thead-dark">
<tr>
<th scope="col">#</th>
                                                                                                                                                                                           {{--   <th scope="col">Nama Tindakan</th>
                                                                                                                                                                                            <th scope="col">Tarif Tindakan</th>
                                                                                                                                                                                            <th scope="col">Opsi</th>  --}}
                                                                                                                                                                            </tr>
                                                                                                                                                                        </thead>
                                                                                                                                                                            <tbody>

                                                                                                                                                                            </tbody>
                                                                                                                                                                </table>
                                                                                                                                                            </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                 </div>
                                                                                                                            </div>                                                                                                            </div>
                                                                                                                </tbody>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jQuery v3.2.0.js"></script>
  <script src="js/bootstrap.min.js"></script>

@endsection


