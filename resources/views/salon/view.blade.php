@extends('layouts.app')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="color: #09B0B0 ;">Salons</h1>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('admin.salons.create') }}" class="btn btn-primary float-right"
                            style="margin-left: 130px;">Add new</a>
                        <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Image Upload </a></li> -->
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">

            <!-- <h3 style="color: green;">View all image</h3> -->

            <div class="row">
                @foreach ($data as $brn)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    {{ $brn->name }}
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="info-box bg-light">
                                        <div class="info-box-content">
                                            <img src="../image/salon/{{ $brn->image }}">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-md-6">
                                            <img src="{{ asset('image/google_logo_black.png')}}" alt="" style="width: 130px;">
                                            <div class="google-rating" data-rating="{{$brn->google}}"></div>
                                            {{-- <h5>{{$brn->google}}</h5> --}}
                                        </div>
                                        <div class="col-md-6">
                                          <img src="{{ asset('image/facebook_logo_black.png')}}" alt="" style="width: 130px;">
                                          <div class="facebook-rating" data-rating="{{$brn->facebook}}"></div>
                                            {{-- <h5>{{ $brn->facebook }}</h5> --}}
                                        </div>
                                    </div>
                                    <a href="{{ route('admin.salons.edit', $brn->salon_id) }}"
                                        class="btn btn-sm btn-primary">View/Edit</a>
                                    <a href="{{ route('admin.salons.destroy', $brn->salon_id) }}"
                                        class="btn btn-sm btn-danger">Delete</a>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                @endforeach
                <!-- ./col -->
            </div>
        </div>



    </section>
@endsection

@section('script')
    <script type="text/javascript">
        document.getElementById('salonz').className = 'nav-link active';

        $(".google-rating").starRating({
            readOnly: true,
            strokeColor: '#894A00',
            strokeWidth: 10,
            starSize: 25
        });

        $(".facebook-rating").starRating({
            readOnly: true,
            initialRating: 4,
            strokeColor: '#894A00',
            strokeWidth: 10,
            starSize: 25
        });
    </script>
@endsection
