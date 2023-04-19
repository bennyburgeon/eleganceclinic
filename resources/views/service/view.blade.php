@extends('layouts.app')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="color: #09B0B0 ;">Services</h1>
            
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

    <!-- <h3 style="color: green;">View all image</h3> -->
 
<div class="row">
    @foreach($data as $keys)
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  {{$keys->name}}
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-12">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <img src="{{asset('image/service/'.$keys->image)}}">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                    <h5>{{$keys->category}}</h5>
                    </div>
                    <div class="col-md-6">
                    <h5></h5>
                    </div>
                  </div>
                  <a href="" data-toggle="modal"data-target="#addImages{{ $keys->id }}" class="btn btn-sm btn-primary">Edit</a>

                  <form method="POST" action="{{ route('admin.services.destroy',encrypt($keys->id)) }}">
                @csrf
                 <input name="_method" type="hidden" value="DELETE">
                 <button type="submit" class="btn btn-sm btn-danger" onclick="confirm('Are you sure!')" data-toggle="tooltip"title='Delete'>Delete</button>
                 </form>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div> 
        <div class="modal fade" id="addImages{{ $keys->id }}" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Service Details</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin.services.update',$keys->id)}}" method="POST" enctype="multipart/form-data"
                                id="carousalUploadNew">
                                @csrf
                                @method('PUT')
                                <div class="card card-widget" id="imgCard2">

                                    <div class="card-body">
                                            <img class="img-fluid pad" src="{{asset('image/service/'.$keys->image) }}" style="height:80px; width:110px;" alt="Photo"
                                                id="imgPrevEdit">
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="imageUpload2">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input"
                                                id="imageUpload2">
                                            <label class="custom-file-label" for="imageUpload2">Choose file</label>
                                        </div>
                                        <!-- <div class="input-group-append">
                                                                <span class="input-group-text">Upload</span>
                                                              </div> -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category" class="form-control">
                                        <option value="{{$keys->category}}">{{$keys->category}}</option>
                                      @foreach($value as $val)              
                                        <option value="{{$val->name}}">{{$val->name}}</option>
                                       @endforeach 
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Service Name</label>
                                    <input type="text" value="{{$keys->name}}" class="form-control" name="name"
                                        placeholder="enter sub title">
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
          @endforeach
          <!-- ./col -->
        </div>
        
        <div class="modal fade" id="addImage" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Service Details</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin.services.store')}}" method="POST" enctype="multipart/form-data"
                                id="carousalUploadNew">
                                @csrf
                                <div class="card card-widget" id="imgCard2">


                                </div>

                                <div class="form-group">
                                    <label for="imageUpload2">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input"
                                                id="imageUpload2">
                                            <label class="custom-file-label" for="imageUpload2">Choose file</label>
                                        </div>
                                        <!-- <div class="input-group-append">
                                                                <span class="input-group-text">Upload</span>
                                                              </div> -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category" class="form-control">
                                        <option selected="selected" disabled="disabled">Select value</option>
                                      @foreach($value as $val)              
                                        <option value="{{$val->name}}">{{$val->name}}</option>
                                       @endforeach 
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Service Name</label>
                                    <input type="text" value="" class="form-control" name="name"
                                        placeholder="enter sub title">
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

 

</section>

@endsection

@section('script')
<script type="text/javascript">
  document.getElementById('cid').className ='nav-link active';
</script>
@endsection

