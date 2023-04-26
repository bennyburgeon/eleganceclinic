@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="color: #09B0B0 ;">Treatments Edit</h1>

                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{$data->headline}}</h3>
                </div>

                <div class="card-body">
                        <form action="{{ route('admin.treatments.update', $data->treatment_id) }}" method="post" id="updateTreatment" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Treatment Name</label>
                            <input type="text" value="{{$data->headline}}" class="form-control" name="name"
                                placeholder="enter treatment name">
                        </div>
                        <label for="imageUpload1">Cover Image</label>
                        <div class="card card-widget" style="width: 100%; border-radius: 10px;" id="imgCard1">
                            <div class="card mb-2" style="border-radius: 10px;">
                                <img class="card-img-top" id="imgPrev1" src="{{ asset('image/treatment/'. $data->image.'') }}"
                                    alt="Photo" style="width: 100%; border-radius: 10px;">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="coverImg" class="custom-file-input" id="imageUpload1">
                                    <label class="custom-file-label" for="imageUpload1">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" value="{{$data->treatment}}" class="form-control" name="title"
                                placeholder="enter a title">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea value="{{$data->description}}" rows="6" id="summernote3"  class="form-control" name="description" placeholder="enter description">{{$data->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Benefits</label>
                            <textarea id="summernote1" name="benefits" vlaue="{{$data->benefit}}">{{$data->benefit}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Treatment Journey</label>
                            <textarea id="summernote5" name="journey" value="{{$data->treatment_journey}}">{{$data->treatment_journey}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Pre&Post Treatment</label>
                            <textarea id="summernote6" name="pre_post" value="{{$data->pre_post_treatment}}">{{$data->pre_post_treatment}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Treatable Areas</label>
                            <textarea id="summernote7" name="area" value="{{$data->treatable_area}}">{{$data->treatable_area}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>FAQ</label>
                            <textarea id="summernote2" vlaue="{{$data->faq}}" name="faq">{{$data->faq}}</textarea>
                        </div>
                        <label for="imageUpload2">Gallery Images</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-widget" style="width: 300px; border-radius: 10px; display: block;"
                                    id="imgCard2">
                                    <div class="card mb-2" style="border-radius: 10px;">
                                        <img class="card-img-top" id="imgPrev2" src="{{ asset('image/treatment/'.$data->galImg1.'') }}">
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="galImg1" class="custom-file-input" id="imageUpload2">
                                        <label class="custom-file-label" for="imageUpload2">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-widget" style="width: 300px; border-radius: 10px; display: block;"
                                    id="imgCard3">
                                    <div class="card mb-2" style="border-radius: 10px;">
                                        <img class="card-img-top" id="imgPrev3" src="{{ asset('image/treatment/'.$data->galImg2.'') }}">
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="galImg2" class="custom-file-input" id="imageUpload3">
                                        <label class="custom-file-label" for="imageUpload3">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <!-- <div class="form-group">
                            <label>Discounted packages button link</label>
                            <input type="text" value="{{$data->disPacks}}" class="form-control" name="disPacks"
                                placeholder="enter valid url">
                        </div>
                        <div class="form-group">
                            <label>Booking button link</label>
                            <input type="text" value="{{$data->bkngLink}}" class="form-control" name="bookingBtn"
                                placeholder="enter valid url">
                        </div> -->

                        <h4> After Care </h4>

                        <label for="imageUpload4">Cover Image</label>
                                <div class="card card-widget" style="width: 300px; border-radius: 10px; display: block;" id="imgCard4">
                                    <div class="card mb-2" style="border-radius: 10px;">
                                        <img class="card-img-top" id="imgPrev4"
                                            src="{{ asset('image/treatment/'. $data->aftercareimage.'') }}" alt="Photo"
                                            style="width: 100%; border-radius: 10px;">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="aftercareimage" class="custom-file-input"
                                                    id="imageUpload4">
                                                <label class="custom-file-label" for="imageUpload4">Choose file</label>
                                            </div>
                                        </div>
                                </div>

                            <div class="form-group">
                                <label>After Care Note</label>
                                <textarea id="summernote2edit" value="{{$data->aftercare_note}}" name="aftercare_note">{{$data->aftercare_note}}</textarea>
                            </div>
                        <div class="modal-footer justify-content-between">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>

                    </form>
                </div>
            </div>

            <!-- ----------- -->
        </div>
    </section>
@endsection

@section('script')
    <script type="text/javascript">
        document.getElementById('treatid').className = 'nav-link active';

        $(document).ready(function() {
            $('#summernote1').summernote({
                height: 200,
            });

            $('#summernote2').summernote({
                height: 200,
            });
            $('#summernote3').summernote({
                height: 200,
            });

$('#summernote5').summernote({
    height: 200,
});

$('#summernote6').summernote({
    height: 200,
});

$('#summernote7').summernote({
    height: 200,
});

            $('#summernote1edit').summernote({
                height: 200,
            });

            $('#summernote2edit').summernote({
                height: 200,
            });
        });

        $(document).ready(function() {
            $("#example1").DataTable();
        });
    </script>

    <script>
        $('#updateTreatment').validate({
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
        $('#imageUpload1').change(function() {
            const file = this.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#imgCard1').css('display', 'block');
                    $('#imgPrev1').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });

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

        $('#imageUpload3').change(function() {
            const file = this.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#imgCard3').css('display', 'block');
                    $('#imgPrev3').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });
        $('#imageUpload4').change(function() {
            const file = this.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#imgCard4').css('display', 'block');
                    $('#imgPrev4').attr('src', event.target.result);
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
