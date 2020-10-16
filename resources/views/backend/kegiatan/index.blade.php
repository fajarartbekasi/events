@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{route('activitys.create')}}" class="btn btn-outline-primary">Tambah Kegiatan</a>
            </div>

            <div class="card border-0 shadow">
                <div class="px-3 py-3">
                    <h4 class="text muted">Master Kegiatan</h4>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode kegiatan</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($activitys as $activity)
                            <tr>
                                <td><a href="{{route('activitys.tampil-formEdit')}}" class="btn btn-outline-primary btn-sm">
                                        {{$activity->code_activity}}
                                    </a></td>
                                <td>{{$activity->date}}</td>
                                <td>{{$activity->status}}</td>
                                <td>

                                    <a href="http://" class="btn btn-outline-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection