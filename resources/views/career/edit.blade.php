@extends('layouts.app')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="color: #09B0B0 ;">careers</h1>
            
          </div>
          
        </div>
      </div>
    </div>

<section class="content">
<div class="container-fluid">
  <div class="card">
        <div class="card-body">

	   <!-- <h3>File Upload</h3>
 -->
 <form action="{{route('admin.careers.update',$data->id)}}" method="post" enctype="multipart/form-data" id="awardzz">
		@csrf
    @method('PUT')
            <div class="form-group">
            <label>Title</label>
            <input type="text" value="{{$data->title}}" class="form-control" name="title" placeholder="enter vaccancy name">
            @error('name')<span class="error-message"role="alert">{{ $message }} </span>@enderror
          </div>
            <div class="form-group">
            <label>No.of Vaccancies </label>
            <input type="text" value="{{$data->vaccancy}}" class="form-control" name="vaccancy" placeholder="enter no.of vaccancy">
            @error('award')<span class="error-message"role="alert">{{ $message }} </span>@enderror
          </div>
          <div class="form-group">
            <label>Location</label>
            <input type="text" value="{{$data->location}}" class="form-control" name="location" placeholder="enter location">
            @error('year')<span class="error-message"role="alert">{{ $message }} </span>@enderror
          </div>
          <div class="form-group">
            <label>Qualification</label>
            <input type="text" value="{{$data->qualification}}" class="form-control" name="qualification" placeholder="enter qualification">
            @error('year')<span class="error-message"role="alert">{{ $message }} </span>@enderror
          </div>
          <div class="form-group">
            <label>Experience Required</label>
            <input type="text" value="{{$data->experience}}" class="form-control" name="experience" placeholder="enter required experience">
            @error('year')<span class="error-message"role="alert">{{ $message }} </span>@enderror
          </div>
            <div class="form-group">
                 <label>Skills Required</label>
                 <textarea class="form-control" rows="6" name="skills" value="{{$data->skills}}"
                 placeholder="enter skills required">{{$data->skills}}</textarea>
             </div>
             <div class="form-group">
                 <label>Time</label>
                 <select name="time" class="form-control">
                    <option value="{{$data->time}}">{{$data->time}}</option>
                    <option value="Full Time">Full Time</option>
                    <option value="Part Time">Part Time</option>
                </select>
             </div>
          <div class="form-group">
            <label>Payment Details</label>
            <input type="text" value="{{$data->payment}}" class="form-control" name="payment" placeholder="enter required experience">
            @error('year')<span class="error-message"role="alert">{{ $message }} </span>@enderror
          </div>
            <div class="form-group">
                 <label>description</label>
                 <textarea class="form-control" rows="6" name="description" value="{{$data->description}}"
                 placeholder="enter payment details">{{$data->description}}</textarea>
             </div>
                <button type="submit" class="btn btn-block btn-primary" style="width: 100px;">Update</button>
                  
    </form>
</div>
</div></div>
	

</section>


@endsection

@section('script')

<script>
    $('#awardzz11').validate({
    rules: {
      image: {
        required: true,
      },
      name: {
        required: true,
      },
      award: {
        required: true,
      },
      year: {
        required: true,
      },
    },
    messages: {
      image: {
        required: "Please upload an image"
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
</script>
<script type="text/javascript">
  document.getElementById('careerz').className ='nav-link active';
</script>
@endsection