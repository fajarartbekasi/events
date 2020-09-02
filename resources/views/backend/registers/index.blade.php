@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="d-flex px-2 py-2">
                            <div>
                                <a href="{{route('registers.ambil-formulir')}}" class="btn btn-info ">Register</a>
                            </div>
                            <div></div>
                        </div>
                        <div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode Pendaftaran</th>
                                        <th>Kode Kegiatan</th>
                                        <th>Nama</th>
                                        <th>Tanggal Daftar</th>
                                        <th>Status</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Reg12112001</td>
                                        <td>EV1202131313</td>
                                        <td>John Doe</td>
                                        <td>121120</td>
                                        <td>Waitting</td>
                                        <td>
                                            <a href="http://" class="btn btn-sm btn-info">Show</a>
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

@endsection