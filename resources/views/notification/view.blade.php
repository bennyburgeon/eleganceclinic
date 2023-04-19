@extends('layouts.app')

@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0" style="color: #09B0B0 ;">Marquee Text</h1>

      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <!-- <a href="/add-image" class="btn btn-primary float-right" style="margin-left: 130px;">Add new image</a>
 -->
          <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Image Upload </a></li> -->
        </ol>
      </div>
    </div>
  </div>
</div>


<section class="content">
  <div class="col-sm-12">
    <!-- text input -->
    <div class="card">


      <!--  <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          
        </div> -->
      <div class="card-body">
        <form action="{{ route('admin.notifications.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="{{$data[0]->id}}">
          
          <div class="form-group">
            <label>Title</label>
            <input type="text" value="{{$data[0]->title}}" class="form-control" name="title" placeholder="enter title">
          </div>
          <div class="form-group">
            <label>Discription</label>
            <textarea class="form-control" rows="3" name="discription" placeholder="Enter ...">{{$data[0]->discription}}</textarea>
          </div>
          <div class="form-group">
            <label>Button Link</label>
            <input type="text" value="{{$data[0]->link}}" class="form-control" name="link" placeholder="enter valid url">
          </div>

          <button type="submit" class="btn btn-primary" style="width: 100px;">Update</button>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</section>

@endsection

@section('script')
<script type="text/javascript">
  document.getElementById('marq').className = 'nav-link active';
</script>
@endsection