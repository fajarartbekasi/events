@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <form action="">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Kode Kegiatan</label>
                                        <input type="text" name="" class="form-control" id="" disable>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" name="" class="form-control" id="" disable>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Tanggal</label>
                                        <input type="text" name="" class="form-control" id="" disable>
                                    </div>
                                </div>
                                <div class="px-3 py-3">
                                    <button type="submit" class="btn btn-info">Kirim Pendaftaran</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection