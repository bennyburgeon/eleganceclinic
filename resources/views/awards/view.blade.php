@extends('layouts.app')

@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0" style="color: #09B0B0 ;">Awards</h1>

      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <a href="{{route('admin.awards.create')}}" class="btn btn-primary float-right" style="margin-left: 130px;">Add New Awards</a>
          <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Image Upload </a></li> -->
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      @foreach($data as $keys)
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <img s <h3 class="card-title">Awards details</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <img class="" src="{{asset('/image/awards/'.$keys->image)}}" style="height: 150px; width:300px;" alt="Photo">
                <h5>
                  {{$keys->name}}
                </h5>
                <h5>{{$keys->awarded_by}}</h5>
                <h5>{{$keys->year}}</h5>
                <div class="margin" style="margin-top: 10px;">
                  <div class="btn-group">
                    <a href="{{ route('admin.awards.edit',encrypt($keys->award_id))}}" type="button" class="btn btn-sm btn-primary">Edit</a>
                    <!-- <a href="{{ route('admin.awards.show',encrypt($keys->award_id))}}" type="button" class="btn btn-sm btn-danger" onclick="confirm('Are you sure!')">Delete</a> -->
                    <form method="POST" action="{{ route('admin.awards.destroy', encrypt($keys->award_id)) }}">
                      @csrf
                      <input name="_method" type="hidden" value="DELETE">
                      <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure!')" data-toggle="tooltip" title='Delete'>Delete</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      @endforeach
      <!-- /.col (left) -->

      <!-- /.col (right) -->
    </div>
  </div>



</section>


@endsection

@section('script')

<script type="text/javascript">
  document.getElementById('awardss').className = 'nav-link active';
</script>

@endsection