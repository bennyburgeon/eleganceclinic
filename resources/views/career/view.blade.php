@extends('layouts.app')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0" style="color: #09B0B0 ;">Careers</h1>

      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <a href="{{route('admin.careers.create')}}" class="btn btn-primary float-right" style="margin-left: 130px;">Add New</a>
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
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Career Updates
            </h3>
          </div>

          <div class="card-body">
            <dl class="row">
              <dt class="col-sm-4">Title</dt>
              <dd class="col-sm-8">{{$keys->title}}.</dd>
              <dt class="col-sm-4">No.of Vaccancies</dt>
              <dd class="col-sm-8">{{$keys->vaccancy}}.</dd>
              <dt class="col-sm-4">Location</dt>
              <dd class="col-sm-8">{{$keys->location}}.</dd>
              <dt class="col-sm-4">Qualification</dt>
              <dd class="col-sm-8">{{$keys->qualification}}.
              </dd>
              <dt class="col-sm-4">Experience Required</dt>
              <dd class="col-sm-8">{{$keys->experience}}.
              </dd>
              <dt class="col-sm-4">Skills Required</dt>
              <dd class="col-sm-8">{{$keys->skills}}.
              </dd>
              <dt class="col-sm-4">Time</dt>
              <dd class="col-sm-8">{{$keys->time}}.
              </dd>
              <dt class="col-sm-4">Payment Details</dt>
              <dd class="col-sm-8">{{$keys->payment}}.
              </dd>
              <dt class="col-sm-4">description</dt>
              <dd class="col-sm-8">{{$keys->description}}.
              </dd>
            </dl>
            <div class="btn-group">
              <a href="{{ route('admin.careers.edit',encrypt($keys->id))}}" type="button" class="btn btn-primary">Edit</a>
              <form method="POST" action="{{ route('admin.careers.destroy', encrypt($keys->id)) }}">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button type="submit" class="btn btn-danger" onclick="confirm('Are you sure!')" data-toggle="tooltip" title='Delete'>Delete</button>
              </form>
            </div>
          </div>

        </div>

      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
@section('script')

<script type="text/javascript">
  document.getElementById('careerz').className = 'nav-link active';
</script>
@endsection