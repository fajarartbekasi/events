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
            <div class="col-md-12">
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
            <div class="col-md-12">
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
            <div class="col-md-3">
                <div class="card border-0">
                        <img src="{{asset('banner/undraw_date_picker_gorr.png')}}"
                             alt=""
                             class="card-img-top"
                             srcset="">
                    <div class="card-body">
                        <h3>grozavule Eloquent One-to-Many Relationship</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac lectus quis elit pharetra tristique
                        </p>
                        <button type="submit" class="btn btn-outline-info btn-block">Daftar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                        <img src="{{asset('banner/undraw_date_picker_gorr.png')}}"
                             alt=""
                             class="card-img-top"
                             srcset="">
                    <div class="card-body">
                        <h3>How to save info with ajax in php?</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac lectus quis elit pharetra tristique
                        </p>
                        <button type="submit" class="btn btn-outline-info btn-block">Daftar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection