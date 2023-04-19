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

 <form action="{{route('admin.reviews.update',$data->customer_review_id)}}" method="POST" enctype="multipart/form-data">
		@csrf
    @method('PUT')

 <!-- <div class="form-group p-3">
 	<img src="" style="width: 100px">
        <label for="imageUpload">File input</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" id="imageUpload">
            <label class="custom-file-label" for="imageUpload">Choose file</label>
          </div>
                      
        </div>
          </div>

<div class="form-group p-3">
			<label>Name</label>
			<input type="text" name="name" value="" class="form-control" placeholder="Name" required>
		</div>
		<div class="form-group p-3">
			<label>Date</label>
			<input type="date" name="date" value="" class="form-control" placeholder="date" required>
		</div> -->
		<div class="form-group p-3">
			<label>Textarea</label>
            <textarea class="form-control" rows="3" name="textarea" placeholder="Enter ...">{{$data->textarea}}</textarea><br>
            <button type="submit" class="btn btn-block btn-primary" style="width: 100px;">Update</button>
		</div>
		
</form>
</div></div></div></div>
</section>

@endsection

@section('script')

<script type="text/javascript">
  $(function () {
  bsCustomFileInput.init();
});
</script>
<script type="text/javascript">
  document.getElementById('test').className ='nav-link active';
</script>

@endsection