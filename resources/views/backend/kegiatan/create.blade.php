@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">

            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{route('activitys.store')}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success')}}
                            </div>
                        @endif

                            <div class="form-group">
                                <label for="name">Judul</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="date">Tanggal</label>
                                <input type="date" name="date" class="form-control" id="date" required>
                                <p class="text-danger">{{ $errors->first('date') }}</p>
                            </div>

                            <div class="form-group">
                                <label for="information">information</label>
                                <textarea name="information" id="information" class="form-control" required>

                                </textarea>
                                <p class="text-danger">{{ $errors->first('information') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" name="status" class="form-control" id="status" required>
                                <p class="text-danger">{{ $errors->first('status') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" name="price" class="form-control" id="price" required>
                                <p class="text-danger">{{ $errors->first('price') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="images">Image</label>
                                <input type="file" name="images" class="form-control" id="images" required>
                                <p class="text-danger">{{ $errors->first('images') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="capacity">Capacity</label>
                                <input type="number" name="capacity" class="form-control" id="capacity" required>
                                <p class="text-danger">{{ $errors->first('capacity') }}</p>
                            </div>
                            <div>
                                <button class="btn btn-outline-success">Simpan Activity</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection