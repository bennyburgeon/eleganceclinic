@extends('layouts.app')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="color: #09B0B0 ;">Customer Review</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <a href="{{route('admin.reviews.create')}}" class="btn btn-primary" style="margin-left: 130px;">Add new</a>
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Image Upload </a></li> -->
            </ol>
          </div>
        </div>
      </div>
    </div>

<section class="content">
<div class="container-fluid">

<div class="col-sm-12 col-md-6">
  <!-- <div id="example1_filter" class="col-md-12 dataTables_filter">
    <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1">
    </label>
    
  </div>
 -->  <!-- <a href="add-image">Add New Image</a> -->
</div>
<div class="card">
             
              <!-- ./card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                    <!-- <tr>
                      
                      <th>Image</th>
                      <th>Name</th>
                      <th>Date</th> -->
                      <th>Textarea</th>
                      <th class="col-sm-1">Update</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                     @foreach($data as $keys)
                 <tr>
                   <!-- <td class="col-sm-1">{{$keys->id}}</td> -->
                

               <td class="col-sm-5">{{$keys->textarea}}</td>

               <td class="col col-sm-1"><a href="{{ route('admin.reviews.edit',encrypt($keys->customer_review_id))}}" class="btn btn-primary ">Update</a></td>
    
      <td style="align-content: left;" class="col-sm-1">
                    <form method="POST" action="{{ route('admin.reviews.destroy', encrypt($keys->customer_review_id)) }}">
@csrf
<input name="_method" type="hidden" value="DELETE">
<button type="submit" class="btn btn-sm btn-danger" onclick="confirm('Are you sure!')" data-toggle="tooltip" title='Delete'>Delete</button>
</form>
    </td>
                 </tr>
                 @endforeach
                  
                  
                  
            </tbody>
    
           </table></div>

      </div>
      </section>

@endsection

@section('script')
<script type="text/javascript">
  document.getElementById('test').className ='nav-link active';
</script>
@endsection

