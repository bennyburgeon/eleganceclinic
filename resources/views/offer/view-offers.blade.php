@extends('layouts.app')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="color: #09B0B0 ;">Offers</h1>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addImage">
                            Add New
                        </button>
                        <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Image Upload </a></li> -->
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Offer details</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                                aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column descending">Offer Title
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">
                                            Offer Price</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                            Actions</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            Created on</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">Updated
                                            on</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($data))
                                        @foreach ($data as $key)
                                            <tr>
                                                <td class="dtr-control sorting_1" tabindex="0">{{ $key->title }}</td>
                                                <td>{{ $key->price }}</td>
                                                <td><button class="btn btn-app bg-info"
                                                        style="height: 30px; min-width: 30px; padding:0px; margin:0px;"
                                                        onclick="editData('{{ $key->title }}','{{ $key->price }}','{{ $key->offer_id }}')">
                                                        <i class="fas fa-pencil-square-o" style="padding: 2px;"></i>
                                                    </button>
                                                    <a href="{{ route('admin.delete.offer',$key->offer_id) }}"
                                                        class="btn btn-app bg-danger"
                                                        style="height: 30px; min-width: 30px; padding:0px; margin:0px;">
                                                        <i class="fas fa-trash" style="padding: 2px;"></i>
                                                    </a>
                                                </td>
                                                <td>{{ $key->created_at }}</td>
                                                <td>{{ $key->updated_at }}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="offerEdit" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Offer Details</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.update.offer') }}" method="POST" enctype="multipart/form-data"
                                id="carousalUpload">
                                @csrf
                                <input type="hidden" id="tableId" name="id" value="">
                                <div class="form-group">
                                    <label>Offer title</label>
                                    <input type="text" id="modalTitle" value="" class="form-control"
                                        name="offers" placeholder="enter main title">
                                </div>
                                <div class="form-group">
                                    <label>Offer Price</label>
                                    <input type="text" id="modalPrice" value="" class="form-control"
                                        name="price" placeholder="enter sub title">
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        
        <div class="modal fade" id="addImage" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Offer Details</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.store.offer') }}" method="POST" enctype="multipart/form-data"
                                id="carousalUpload">
                                @csrf
                                <div class="form-group">
                                    <label>Salon</label>
                                    <select name="category" class="form-control">
                                        <option selected="selected" disabled="disabled">Select value</option>
                                      @foreach($salon as $val)              
                                        <option value="{{$val->salon_id}}">{{$val->name}}</option>
                                       @endforeach 
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Offer title</label>
                                    <input type="text" id="" value="" class="form-control"
                                        name="offers" placeholder="enter main title">
                                </div>
                                <div class="form-group">
                                    <label>Offer Price</label>
                                    <input type="text" id="" value="" class="form-control"
                                        name="price" placeholder="enter sub title">
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        <!-- /.card -->
        </div>

    </section>
@endsection

@section('script')
    <script type="text/javascript">
        document.getElementById('ofrr').className = 'nav-link active';
    </script>
    <script>
        function editData(a,b,c) {
            console.log("value1: " + a + " " + "value2: " + b);
            $("#modalTitle").val(a)
            $("#modalPrice").val(b)
            $("#tableId").val(c)
            $("#offerEdit").modal('show');
        }
        $(document).ready(function() {
            $("#example1").DataTable();
        });
    </script>
@endsection
