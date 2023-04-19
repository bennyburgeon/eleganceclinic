@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="color: #09B0B0 ;">Treatment</h1>
                </div><!-- /.col -->
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">

                    <!-- <h3>File Upload</h3>
     -->
                     <form action="{{ route('admin.treatments.store') }}" method="POST" id="cardUpload"
                        enctype="multipart/form-data">
                        @csrf


                        <div class="form-group">
                            <label>Category</label>
                            <select name="category" class="form-control">
                                <option selected="selected" disabled="disabled">choose an option</option>
                                <option value="brows">Brows</option>
                                <option value="lashes">Lashes</option>
                                <option value="nails">Nails</option>
                                <option value="waxing">Waxing</option>
                                <option value="grooming">Grooming</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Headline</label>
                            <input type="text" name="headline" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="imageUpload">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image1" class="custom-file-input" id="imageUpload">
                                    <label class="custom-file-label" for="imageUpload">Choose file</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Treatment</label>
                            <input type="text" name="treatment" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" id="summernote3" rows="3" name="desc" placeholder="Enter ..."></textarea>
                        </div>

                        <div class="form-group">
                            <label>Benefits</label>
                            <textarea id="summernote" name="benefit"></textarea>
                        </div>

                        <div class="form-group">
                            <label>FAQ</label>
                            <textarea id="summernote1" name="faq"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="imageUpload">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input multiple="" type="file" name="image2[]" class="custom-file-input"
                                        id="imageUpload">
                                    <label class="custom-file-label" for="imageUpload">Choose file</label>
                                </div>
                            </div>
                        </div>

                        <h4> After Care </h4>

                        <div class="form-group">
                            <label for="imageUpload">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input multiple="" type="file" name="aftercareimage" class="custom-file-input"
                                        id="imageUpload">
                                    <label class="custom-file-label" for="imageUpload">Choose file</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>After Care Description</label>
                            <textarea id="summernote3" name="aftercare_description"></textarea>
                        </div>

                        <div class="form-group">
                            <label>After Care Note</label>
                            <textarea id="summernote4" name="aftercare"></textarea>
                        </div>

                        <button type="submit" class="btn btn-block btn-primary" style="width: 100px;">Submit</button>

                </div>

                </form>
            </div>
        </div>
        </div>


    </section>
@endsection

@section('script')
    <script>
        $('#treatment').validate({
            rules: {
                image: {
                    required: true
                },
                headline: {
                    required: true
                },
            },
            messages: {
                image: {
                    required: "Please upload an image"
                },
                headline: {
                    required: "Enter something"
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
                height: 150,
            });
            $('#summernote1').summernote({
                height: 150,
            });
            $('#summernote2').summernote({
                height: 150,
            });
            $('#summernote3').summernote({
                height: 150,
            });
            $('#summernote4').summernote({
                height: 150,
            });
        });
    </script>

    <script type="text/javascript">
        document.getElementById('treatid').className = 'nav-link active';
    </script>
@endsection
