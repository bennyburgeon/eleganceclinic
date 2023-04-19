@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="color: #09B0B0 ;">Banner</h1>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addImage">
                            Add new banner
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

            @foreach ($imageData as $data)
                <div class="col-sm-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Banner details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <img class="img-fluid pad" src="{{ asset('image/banner/'.$data->image) }}" alt="Photo">
                                    <div class="row" style="margin-top: 15px;">
                                        <div class="info-box col-md-6">
                                            <span class="info-box-icon"><i class="far fa-hand-o-up"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Button Title</span>
                                                <span class="info-box-number">{{ $data->button_title }}</span>
                                            </div>
                                        </div>
                                        <div class="info-box col-md-6">
                                            <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Button Link</span>
                                                <span class="info-box-number">{{ $data->button_link }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="margin" style="margin-top: 10px;">
                                        <div class="btn-group">
                                            <a href="" data-toggle="modal"
                                                data-target="#addImages{{ $data->banner_id }}" type="button"
                                                class="btn btn-sm btn-primary">Edit</a>


                                            <a href="{{ route('admin.delete.banner',$data->banner_id) }}" type="button"
                                                class="btn btn-sm btn-danger" onclick="confirm('Are you sure!')">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Main Title</span>
                                            <span class="info-box-number">{{ $data->title_main }}</span>
                                        </div>
                                    </div>
                                    <div class="info-box">
                                        <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Sub Title</span>
                                            <span class="info-box-number">{{ $data->title_sub }}</span>
                                        </div>
                                    </div>
                                    <div class="info-box">
                                        <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Paragraph Title</span>
                                            <span class="info-box-number">{{ $data->title_para }}</span>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>

                        <!-- /.col (left) -->

                        <!-- /.col (right) -->
                    </div>
                </div>


                <!-- ----------- -->

                <div class="modal fade" id="addImages{{ $data->banner_id }}" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Banner Details</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.update.banner',$data->banner_id) }}" method="POST" enctype="multipart/form-data"
                                    id="carousalUpload">
                                    @csrf
                                    <input type="hidden" name="bnr" value="{{ $data->banner_id }}">
                                    <div class="card card-widget" id="imgCardEdit">

                                        <div class="card-body">
                                            <img class="img-fluid pad" src="{{asset('image/banner/'.$data->image) }}" style="height:80px; width:110px;" alt="Photo"
                                                id="imgPrevEdit">
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="imageUpload">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input"
                                                    id="imageUpload">
                                                <label class="custom-file-label" for="imageUpload">Choose file</label>
                                            </div>
                                            <!-- <div class="input-group-append">
                                                            <span class="input-group-text">Upload</span>
                                                          </div> -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Main Title</label>
                                        <input type="text" value="{{ $data->title_main }}" class="form-control"
                                            name="title_main" placeholder="enter main title">
                                    </div>
                                    <div class="form-group">
                                        <label>Sub Title</label>
                                        <input type="text" value="{{ $data->title_sub }}" class="form-control"
                                            name="title_sub" placeholder="enter sub title">
                                    </div>
                                    <div class="form-group">
                                        <label>Title Paragraph</label>
                                        <input type="text" value="{{ $data->title_para }}" class="form-control"
                                            name="title_para" placeholder="enter discription">
                                    </div>
                                    <div class="form-group">
                                        <label>Button Title</label>
                                        <input type="text" value="{{ $data->button_title }}" class="form-control"
                                            name="title_button" placeholder="enter button title">
                                    </div>
                                    <div class="form-group">
                                        <label>Button Link</label>
                                        <input type="text" value="{{ $data->button_link }}" class="form-control"
                                            name="button_link" placeholder="enter valid url">
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach


            <div class="modal fade" id="addImage" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">New Banner Details</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.store.banner') }}" method="POST" enctype="multipart/form-data"
                                id="carousalUploadNew">
                                @csrf
                                <div class="card card-widget" id="imgCard2">

                                    <div class="card-body">
                                        <img class="img-fluid pad" src="" alt="Photo" id="imgPrev2">
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
                                    <label>Main Title</label>
                                    <input type="text" value="" class="form-control" name="title_main"
                                        placeholder="enter main title">
                                </div>
                                <div class="form-group">
                                    <label>Sub Title</label>
                                    <input type="text" value="" class="form-control" name="title_sub"
                                        placeholder="enter sub title">
                                </div>
                                <div class="form-group">
                                    <label>Title Paragraph</label>
                                    <input type="text" value="" class="form-control" name="title_para"
                                        placeholder="enter discription">
                                </div>
                                <div class="form-group">
                                    <label>Button Title</label>
                                    <input type="text" value="" class="form-control" name="title_button"
                                        placeholder="enter button title">
                                </div>
                                <div class="form-group">
                                    <label>Button Link</label>
                                    <input type="text" value="" class="form-control" name="button_link"
                                        placeholder="enter valid url">
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
        $('#imgCard2').css('display', 'none');
        document.getElementById('carousalid').className = 'nav-link active';
    </script>

    <script>
        $('#carousalUploadNew').validate({
            rules: {
                image: {
                    required: true
                },
                title_main: {
                    required: true
                },
            },
            messages: {
                image: {
                    required: "Please upload an image"
                },
                title_main: {
                    required: "Please enter title"
                },
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    </script>
    <script>
        $('#imageUpload2').change(function() {
            const file = this.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#imgCard2').css('display', 'block');
                    $('#imgPrev2').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });

        $('#imageUpload').change(function() {
            const file = this.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#imgCardEdit').css('display', 'block');
                    $('#imgPrevEdit').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });
    </script>


    <script type="text/javascript">
        $('#imageUpload2').change(function() {
            //alert("kjkj");
            //Get reference of FileUpload.
            var fileUpload = document.getElementById("imageUpload2");


            //Check whether the file is valid Image.
            var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.png|.gif)$");
            if (regex.test(fileUpload.value.toLowerCase())) {

                //Check whether HTML5 is supported.
                if (typeof(fileUpload.files) != "undefined") {
                    //Initiate the FileReader object.
                    var reader = new FileReader();
                    //Read the contents of Image File.
                    reader.readAsDataURL(fileUpload.files[0]);
                    reader.onload = function(e) {
                        //Initiate the JavaScript Image object.
                        var image = new Image();

                        //Set the Base64 string return from FileReader as source.
                        image.src = e.target.result;

                        //Validate the File Height and Width.
                        image.onload = function() {
                            var height = this.height;
                            var width = this.width;
                            if (height > 762 || width > 1920) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Please upload image with Height: 762 and Width: 1920'
                                })
                                $('#imageUpload2').val('');
                                $('#imgCard2').css('display', 'none');
                                return false;
                            }
                        };

                    }
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'This browser does not support HTML5'
                    })
                    $('#imageUpload2').val('');
                    $('#imgCard2').css('display', 'none');
                    return false;
                }
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please select a valid Image file.'
                })
                $('#imageUpload2').val('');
                $('#imgCard2').css('display', 'none');
                return false;
            }
        })
    </script>
@endsection
