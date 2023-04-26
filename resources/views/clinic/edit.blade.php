@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="color: #09B0B0 ;">Salons</h1>
                </div>

            </div>
        </div>
    </div>


    <section class="content">
        <div class="col-sm-12"><br>
            <!-- text input -->
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.clinic.update', $data->clinic_id) }}" method="post" id="cardUpload"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-widget" style="width: 300px; border-radius: 10px;" id="imgCard">
                                    <div class="card mb-2" style="border-radius: 10px;">
                                        <img class="card-img-top" id="imgPrev"
                                            src="{{ asset('/image/salon/' . $data->image . '') }}" alt="Photo"
                                            style="width: 300px; border-radius: 10px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="imageUpload">Upload image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" value="{{$data->image}}" name="image" class="custom-file-input" id="imageUpload">
                                    <label class="custom-file-label" for="imageUpload">Choose file</label>
                                </div>

                            </div>

                        </div>

                        <div class="form-group">
                            <label>Clinic Name</label>
                            <input type="text" value="{{ $data->name }}" name="name" class="form-control"
                                placeholder="Please enter a salon name">
                        </div>
                       
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>About</label>
                                    <textarea class="form-control" rows="8" name="about" value="{{ $data->about }}"
                                        placeholder="Please enter a description in less than 150 words">{{ $data->about }}</textarea>
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Opening Hours</label>
                                    <textarea id="summernote" name="hours">{{ $data->opening_hours }}</textarea>
                                </div>
                            </div>
                        </div>
                        <?php
                        $image = [];
                        $image = explode(',', $data->payment);
                        ?>
                        <!-- <div class="form-group">
                            <label>Packages </label>
                            <input type="text" name="packages" value="{{ $data->packages }}" class="form-control"
                                placeholder="Enter a url link (Redirect to packages in Zenoti)">
                        </div> -->
                        <div class="form-group">
                            <label>Gift Cards</label>
                            <input type="gift" name="gift" value="{{ $data->gift }}" class="form-control"
                                placeholder="Enter a url link (Redirect to gift card in Zenoti)">
                        </div>
                        <div class="form-group">
                            <label>Map</label>
                            <input type="map" name="map" value="{{ $data->map }}" class="form-control"
                                placeholder="Enter a url link (Redirect to booking page)">
                        </div>
                        <div class="form-group">
                            <label>Appointment Link</label>
                            <input type="link" name="appointment" value="{{ $data->appointment }}"
                                class="form-control" placeholder="title">
                        </div>
                        <div class="form-group">
                            <label>Packages Link</label>
                            <input type="link" name="package_link" value="{{ $data->package_link }}"
                                class="form-control" placeholder="title">
                        </div>

                        <button type="submit" class="btn btn-block btn-primary" style="width: 100px;">Update</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(function() {
            $('#imageUpload').imoViewer({
                'preview': '#image-previewer',
                'minWidth': 400,
                'minHeight': 400,
                'onSuccess': function(element, file) {
                    // do something
                }
            })
        });

        $('#cardUpload').validate({
            rules: {
                title: {
                    required: true
                },
            },
            messages: {
                title: {
                    required: "Enter title"
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
    <script type="text/javascript">
        $('#imageUpload').change(function() {
            //Get reference of FileUpload.
            var fileUpload = document.getElementById("imageUpload");

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
                            if (height > 400 || width > 400) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Image dimension exceeded. Please upload image with Height: 400 and Width: 400'
                                })
                                return false;
                            } else if (height < 400 || width < 400) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Image dimension subceeded. Please upload image with Height: 400 and Width: 400'
                                })
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
                    return false;
                }
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please select a valid Image file.'
                })
                return false;
            }
        })
    </script>

    <script type="text/javascript">
        $(function() {
            bsCustomFileInput.init();
        });

        $(document).ready(function() {
            $('#summernote').summernote({
                height: 250,
            });
        });
    </script>

    <script type="text/javascript">
        $(function() {
            bsCustomFileInput.init();
        });


        $('#imageUpload').change(function() {
            const file = this.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#imgPrev').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });
    </script>

    <script type="text/javascript">
        document.getElementById('salonz').className = 'nav-link active';
    </script>
@endsection
