@extends('layouts.admin')

@section('title', 'Add FAQ')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

@endsection

@section('content')
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Adding FAQ : </h3>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="section-block" id="basicform">Add FAQ</div>
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('admin.faq.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf


                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Question</label>
                                            <input id="inputText3" type="text" class="form-control" placeholder="Question" name="question">
                                        </div>

                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Answer</label>
                                            <textarea name="answer" id="contacttext" class="form-control">

                                </textarea>
                                            <script>
                                                ClassicEditor
                                                    .create(document.querySelector('#answer'))
                                                    .then(editor => {
                                                        console.log(editor);
                                                    })
                                                    .catch(error => {
                                                        console.error(error);
                                                    });
                                            </script>

                                        </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option selected="selected">False</option>
                                                <option>True</option>
                                            </select>
                                        </div>
                                        <div>
                                            <button class="btn btn-primary" type="submit">Add FAQ</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

        @section('foot')
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
            <script>
                $(document).ready(function(){
                    $('#aboutus').summernote();
                    $('#contact').summernote();
                    $('#references').summernote();
                });
            </script>

@endsection
