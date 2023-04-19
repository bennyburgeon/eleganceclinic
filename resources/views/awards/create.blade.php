@extends('layouts.app')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="color: #09B0B0 ;">Awards</h1>
            
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
		<form action="{{route('admin.awards.store')}}" method="POST" enctype="multipart/form-data" id="awardzz">
		@csrf
		        <div class="form-group">
                    <label for="imageUpload">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="">
                        <label class="custom-file-label" for="imageUpload">Choose file</label>
                        @error('image')<span class="error-message"role="alert">{{ $message }} </span>@enderror
                      </div>
                      <!-- <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div> -->
                    </div>
                  </div>
            <div class="form-group">
            <label>Name</label>
            <input type="text" value="" class="form-control" name="name" placeholder="enter award name">
            @error('name')<span class="error-message"role="alert">{{ $message }} </span>@enderror
          </div>
            <div class="form-group">
            <label>Awarded By</label>
            <input type="text" value="" class="form-control" name="award" placeholder="awarded by">
            @error('award')<span class="error-message"role="alert">{{ $message }} </span>@enderror
          </div>
          <div class="form-group">
            <label>Year</label>
            <input type="text" value="" class="form-control" name="year" placeholder="enter year">
            @error('year')<span class="error-message"role="alert">{{ $message }} </span>@enderror
          </div>
                <button type="submit" class="btn btn-block btn-primary" style="width: 100px;">Submit</button>
                  
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
  document.getElementById('awardss').className ='nav-link active';
</script>
@endsection