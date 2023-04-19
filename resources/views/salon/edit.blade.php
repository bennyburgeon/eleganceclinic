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
                    <form action="{{ route('admin.salons.update', $data->salon_id) }}" method="post" id="cardUpload"
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
                            <label>Salon Name</label>
                            <input type="text" value="{{ $data->name }}" name="name" class="form-control"
                                placeholder="Please enter a salon name">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Google Rating</label>
                                    <select name="google" class="form-control">
                                        <option selected="selected" disabled="disabled">Select value</option>
                                        <option value="1" <?php
                                        if ($data->google == '1') {
                                            echo "selected='selected'";
                                        } ?>>1</option>
                                        <option value="1.5" <?php if ($data->google == '1.5') {
                                            echo "selected='selected'";
                                        } ?>>1.5</option>
                                        <option value="2" <?php if ($data->google == '2') {
                                            echo "selected='selected'";
                                        } ?>>2</option>
                                        <option value="2.5" <?php if ($data->google == '2.5') {
                                            echo "selected='selected'";
                                        } ?>>2.5</option>
                                        <option value="3" <?php if ($data->google == '3') {
                                            echo "selected='selected'";
                                        } ?>>3</option>
                                        <option value="3.5" <?php if ($data->google == '3.5') {
                                            echo "selected='selected'";
                                        } ?>>3.5</option>
                                        <option value="4" <?php if ($data->google == '4') {
                                            echo "selected='selected'";
                                        } ?>>4</option>
                                        <option value="4.5" <?php if ($data->google == '4.5') {
                                            echo "selected='selected'";
                                        } ?>>4.5</option>
                                        <option value="5" <?php if ($data->google == '5') {
                                            echo "selected='selected'";
                                        } ?>>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Facebook Rating</label>
                                    <select name="facebook" class="form-control">
                                        <option selected="selected" disabled="disabled">Select value</option>
                                        <option value="1" <?php
                                        if ($data->facebook == '1') {
                                            echo "selected='selected'";
                                        } ?>>1</option>
                                        <option value="1.5" <?php
                                        if ($data->facebook == '1.5') {
                                            echo "selected='selected'";
                                        } ?>>1.5</option>
                                        <option value="2" <?php
                                        if ($data->facebook == '2') {
                                            echo "selected='selected'";
                                        } ?>>2</option>
                                        <option value="2.5" <?php
                                        if ($data->facebook == '2.5') {
                                            echo "selected='selected'";
                                        } ?>>2.5</option>
                                        <option value="3" <?php
                                        if ($data->facebook == '3') {
                                            echo "selected='selected'";
                                        } ?>>3</option>
                                        <option value="3.5" <?php
                                        if ($data->facebook == '3.5') {
                                            echo "selected='selected'";
                                        } ?>>3.5</option>
                                        <option value="4" <?php
                                        if ($data->facebook == '4') {
                                            echo "selected='selected'";
                                        } ?>>4</option>
                                        <option value="4.5" <?php
                                        if ($data->facebook == '4.5') {
                                            echo "selected='selected'";
                                        } ?>>4.5</option>
                                        <option value="5" <?php
                                        if ($data->facebook == '5') {
                                            echo "selected='selected'";
                                        } ?>>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>About</label>
                                    <textarea class="form-control" rows="8" name="about" value="{{ $data->about }}"
                                        placeholder="Please enter a description in less than 150 words">{{ $data->about }}</textarea>
                                </div>
                                <?php
                                $imgArr = [];
                                $imgArr = explode(',', $data->facilities);
                                ?>
                                <div class="form-group">
                                    <label>Select facilities available</label><br>

                                    <img src="/image/a1.png" style="width: 100px">
                                    <input class="form-check-input" type="checkbox" value="1" name="image1"
                                        @php if(isset($imgArr[0])){ if($imgArr[0]=="1" ){echo "checked=checked" ;}} @endphp
                                        style="  /* Double-sized Checkboxes */
  -ms-transform: scale(2); /* IE */
  -moz-transform: scale(2); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  transform: scale(2);
  padding: 10px;">

                                    <img src="/image/b1.png" style="width: 110px">
                                    <input class="form-check-input" type="checkbox" value="2" name="image2"
                                        @php if(isset($imgArr[1])){ if($imgArr[1]=="2" ){echo "checked=checked" ;}} @endphp
                                        style="  /* Double-sized Checkboxes */
  -ms-transform: scale(2); /* IE */
  -moz-transform: scale(2); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  transform: scale(2);
  padding: 10px;">

                                    <img src="/image/b2.png" style="width: 100px">
                                    <input class="form-check-input" type="checkbox" value="3" name="image3"
                                        @php if(isset($imgArr[2])){ if($imgArr[2]=="3" ){echo "checked=checked" ;}} @endphp
                                        style="  /* Double-sized Checkboxes */
  -ms-transform: scale(2); /* IE */
  -moz-transform: scale(2); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  transform: scale(2);
  padding: 10px;">

                                    <img src="/image/b3.png" style="width: 100px">
                                    <input class="form-check-input" type="checkbox" value="4" name="image4"
                                        @php if(isset($imgArr[3])){ if($imgArr[3]=="4" ){echo "checked=checked" ;}} @endphp
                                        style="  /* Double-sized Checkboxes */
  -ms-transform: scale(2); /* IE */
  -moz-transform: scale(2); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  transform: scale(2);
  padding: 10px;">
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

                        <div class="form-group">
                            <label>Payment Accepted</label><br>

                            <img src="/image/a11.png" style="width: 100px">
                            <input class="form-check-input" type="checkbox" value="1" name="img1"
                                @php if(isset($image[0])){ if($image[0]=="1" ){echo "checked=checked" ;}} @endphp
                                style="  /* Double-sized Checkboxes */
  -ms-transform: scale(2); /* IE */
  -moz-transform: scale(2); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  transform: scale(2);
  padding: 10px;">

                            <img src="/image/a12.png" style="width: 100px; margin-left:10px;">
                            <input class="form-check-input" type="checkbox" value="2" name="img2"
                                @php if(isset($image[1])){ if($image[1]=="2" ){echo "checked=checked" ;}} @endphp
                                style="  /* Double-sized Checkboxes */
  -ms-transform: scale(2); /* IE */
  -moz-transform: scale(2); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  transform: scale(2);
  padding: 10px;">

                            <img src="/image/a13.png" style="width: 100px; margin-left:10px;">
                            <input class="form-check-input" type="checkbox" value="3" name="img3"
                                @php if(isset($image[2])){ if($image[2]=="3" ){echo "checked=checked" ;}} @endphp
                                style="  /* Double-sized Checkboxes */
  -ms-transform: scale(2); /* IE */
  -moz-transform: scale(2); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  transform: scale(2);
  padding: 10px;">

                            <img src="/image/a14.png" style="width: 100px; margin-left:10px;">
                            <input class="form-check-input" type="checkbox" value="4"
                                name="img4"@php if(isset($image[3])){ if($image[3]=="4" ){echo "checked=checked" ;}} @endphp
                                style="  /* Double-sized Checkboxes */
  -ms-transform: scale(2); /* IE */
  -moz-transform: scale(2); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  transform: scale(2);
  padding: 10px;">

                            <img src="/image/a15.png" style="width: 100px; margin-left:10px;">
                            <input class="form-check-input" type="checkbox" value="5" name="img5"
                                @php if(isset($image[4])){ if($image[4]=="5" ){echo "checked=checked" ;}} @endphp
                                style="  /* Double-sized Checkboxes */
  -ms-transform: scale(2); /* IE */
  -moz-transform: scale(2); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  transform: scale(2);
  padding: 10px;">

                            <img src="/image/a16.png" style="width: 100px; margin-left:10px;">
                            <input class="form-check-input" type="checkbox" value="6" name="img6"
                                @php if(isset($image[5])){ if($image[5]=="6" ){echo "checked=checked" ;}} @endphp
                                style="  /* Double-sized Checkboxes */
  -ms-transform: scale(2); /* IE */
  -moz-transform: scale(2); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  transform: scale(2);
  padding: 10px;">
                        </div>
                        <div class="form-group">
                            <label>Packages </label>
                            <input type="text" name="packages" value="{{ $data->packages }}" class="form-control"
                                placeholder="Enter a url link (Redirect to packages in Zenoti)">
                        </div>
                        <div class="form-group">
                            <label>Pricelist</label>
                            <input type="pricelist" name="pricelist" value="{{ $data->pricelist }}" class="form-control"
                                placeholder="Enter a url link (Redirect to booking page)">
                        </div>
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
                            <label>'Book Now' button link</label>
                            <input type="link" name="button_link" value="{{ $data->booking_button }}"
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
