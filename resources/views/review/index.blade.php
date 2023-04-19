@extends('layouts.app')

@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="color: #09B0B0 ;">Customer Review</h1>
            
          </div>
        </div>
      </div>
    </div>


 <section class="content">
  <div class="container-fluid">
<div class="card">
<div class="card-body">
<div class="col-sm-12">

 <form action="{{ route('admin.reviews.store')}}" method="POST" enctype="multipart/form-data" id="testimUpload">
		@csrf

 <!-- <div class="form-group p-3">
        <label for="imageUpload">File input</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" name="image"  class="custom-file-input" id="imageUpload">
            <label class="custom-file-label" for="imageUpload">Choose file</label>
          </div>
                      
        </div>
          </div>

<div class="form-group p-3">
			<label>Name</label>
			<input type="text" name="name" class="form-control" placeholder="Name">
		</div>
		<div class="form-group p-3">
			<label>Date</label>
			<input type="date" name="date" class="form-control" placeholder="date">
		</div> -->
		<div class="form-group p-3">
			<label>Textarea</label>
            <textarea class="form-control" rows="3" name="textarea" placeholder="Enter ..."></textarea><br>
		</div>
		<button type="submit" class="btn btn-block btn-primary" style="width: 100px;">Submit</button>
		
</form>
</div></div></div></div>
</section>
@endsection
@section('script')
<script>
    $('#testimUpload').validate({
    rules: {
      textarea: {
        required: true
      },
  },
    messages: {
      textarea: {
        required: "enter something"
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
  $(function () {
  bsCustomFileInput.init();
});
</script>
<script type="text/javascript">
  document.getElementById('test').className ='nav-link active';
</script>

@endsection

