@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="color: #09B0B0 ;">Clinic</h1>
                </div>

            </div>
        </div>
    </div>


    <section class="content">
        <div class="col-sm-12"><br>
            <!-- text input -->
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.clinic.store') }}" method="POST" id="cardUpload"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <div class="card card-widget" style="width: 300px; border-radius: 10px;" id="imgCard">
                                <div class="card mb-2" style="border-radius: 10px;">
                                    <img class="card-img-top" id="imgPrev" src="{{ asset('image/salon_image_icon.jpg') }}"
                                        alt="Photo" style="width: 300px; border-radius: 10px;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="imageUpload">Upload image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="imageUpload">
                                    <label id="imageUploadLabel" class="custom-file-label" for="imageUpload">Choose
                                        file</label>
                                </div>

                            </div>

                        </div>
                        <div class="form-group">
                            <label>Clinic Name</label>
                            <input type="text" name="name" class="form-control"
                                placeholder="Please enter a salon name">
                        </div>
                        <!-- <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Google Rating</label>
                                    <select name="google" class="form-control">
                                        <option selected="selected" disabled="disabled">Select value</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="2.5">2.5</option>
                                        <option value="3">3</option>
                                        <option value="3.5">3.5</option>
                                        <option value="4">4</option>
                                        <option value="4.5">4.5</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Facebook Rating</label>
                                    <select name="facebook" class="form-control">
                                        <option selected="selected" disabled="disabled">Select value</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="2.5">2.5</option>
                                        <option value="3">3</option>
                                        <option value="3.5">3.5</option>
                                        <option value="4">4</option>
                                        <option value="4.5">4.5</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>About</label>
                                    <textarea class="form-control" rows="8" name="about"
                                        placeholder="Please enter a description in less than 150 words"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Select facilities available</label><br>

                                    <img src="/image/R.png" style="width: 100px">
                                    <input class="form-check-input" type="checkbox" value="1" name="image1"
                                        style="  /* Double-sized Checkboxes */
  -ms-transform: scale(2); /* IE */
  -moz-transform: scale(2); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  transform: scale(2);
  padding: 10px;">

                                    <img src="/image/2160941.png" style="width: 110px">
                                    <input class="form-check-input" type="checkbox" value="2" name="image2"
                                        style="  /* Double-sized Checkboxes */
  -ms-transform: scale(2); /* IE */
  -moz-transform: scale(2); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  transform: scale(2);
  padding: 10px;">

                                    <img src="/image/portable-toilet-icon.png" style="width: 100px">
                                    <input class="form-check-input" type="checkbox" value="3" name="image3"
                                        style="  /* Double-sized Checkboxes */
  -ms-transform: scale(2); /* IE */
  -moz-transform: scale(2); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  transform: scale(2);
  padding: 10px;">

                                    <img src="/image/icon-parking.png" style="width: 100px">
                                    <input class="form-check-input" type="checkbox" value="4" name="image4"
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
                                    <textarea id="summernote" name="hours"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <label>Packages </label>
                            <input type="packages" name="packages" class="form-control"
                                placeholder="Enter a url link (Redirect to packages in Zenoti)">
                        </div> -->
                        <!-- <div class="form-group">
                            <label>Pricelist</label>
                            <input type="text" name="pricelist" class="form-control"
                                placeholder="Enter a url link (Redirect to booking page)">
                        </div> -->
                        <div class="form-group">
                            <label>Gift Cards</label>
                            <input type="text" name="gift" class="form-control"
                                placeholder="enter a url link (Redirect to gift card in Zenoti)">
                        </div>
                        <div class="form-group">
                            <label>Map</label>
                            <input type="text" name="map" class="form-control"
                                placeholder="Enter a url link (Redirect to booking page)">
                        </div>
                        <div class="form-group">
                            <label>Appointment Link</label>
                            <input type="text" name="appointment" class="form-control" placeholder="enter a valid url">
                        </div>
                        <div class="form-group">
                            <label>Packages Link</label>
                            <input type="text" name="package_link" class="form-control" placeholder="enter a valid url">
                        </div>

                        <button type="submit" class="btn btn-block btn-primary" style="width: 100px;">Submit</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $('#cardUpload').validate({
            rules: {
                title: {
                    required: true
                },
            },
            messages: {
                image: {
                    required: "Please upload an image"
                },
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
                    $('#imgCard').css('display', 'block');
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
