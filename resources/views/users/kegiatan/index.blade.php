@extends('layouts.app')

@section('content')
    <div class="container">
        <nav  aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item active"
                    aria-current="page">
                    <li class="badge badge-info">
                        Aktif
                    </li>
                </li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 mb-2">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="d-flex">
                            <div>
                                <img src="{{asset('banner/sample.jpeg')}}"
                                        alt=""
                                        class="rounded-circle"
                                        width="80"
                                        height="80"
                                        srcset="">
                            </div>
                            <div>
                                <h3>
                                    discussion view count incrementing every refresh
                                </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac lectus quis elit pharetra tristique
                                </p>
                                <button type="submit" class="btn btn-outline-info btn-block">Daftar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-2">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="d-flex">
                            <div>
                                <img src="{{asset('banner/sample.jpeg')}}"
                                alt=""
                                class="rounded-circle"
                                width="80"
                                height="80"
                                srcset="">
                            </div>
                            <div>
                                <h3>Laravel iteration/loop add amount to next user</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac lectus quis elit pharetra tristique
                        </p>
                        <button type="submit" class="btn btn-outline-info btn-block">Daftar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection