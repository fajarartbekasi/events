@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 ">

            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{route('activitys.update', $activity->id)}}"
                          method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Code Kegiatan</label>
                                    <input type="text"
                                           name=""
                                           class="form-control"
                                           value="{{$activity->code_activity}}"
                                           id="" readonly>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Kegiatan</label>
                                    <input type="text" name=""
                                    class="form-control"
                                    value="{{$activity->name}}"
                                    id="" readonly>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="text" name="" class="form-control" id="" readonly>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <input type="text" name="" class="form-control" id="" readonly>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Informasi</label>
                                    <textarea name="" id="" class="form-control"></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-outline-info">Masukan Kegiatan Baru</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection