

@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create a Product</h1>
@stop


@section('content')
    <form role="form">
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" class="form-control" id="pname" placeholder="">
            </div>
            <div class="form-group">
                <label>Category</label>
                <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>

                </select>
            </div>
            <div class="form-group">
                <label>Brand</label>
                <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>

                </select>
            </div>
            <div class="form-group">
                <label>Short Description</label>
                <textarea class="form-control" rows="3" placeholder="Enter short des..."></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea id="description" name="content"
                          class="form-control">{!! old('content', 'test editor content') !!}</textarea>
                <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                <script>
                    var options = {
                        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                    };
                </script>
                <script>
                    CKEDITOR.replace('description', options);
                </script>
            </div>
            <div class="form-group">
                <label for="system-requirement">System Requirement</label>
                <textarea id="system_requirement" name="content"
                          class="form-control">{!! old('content', 'test editor content') !!}</textarea>
                <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                <script>
                    var options = {
                        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                    };
                </script>
                <script>
                    CKEDITOR.replace('system_requirement', options);
                </script>
            </div>
            <div class="form-group">
                <label for="a-detail">Activation Details</label>
                <textarea id="activation_detail" name="content"
                          class="form-control">{!! old('content', 'test editor content') !!}</textarea>
                <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                <script>
                    var options = {
                        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                    };
                </script>
                <script>
                    CKEDITOR.replace('activation_detail', options);
                </script>
            </div>
            <div class="form-group">
                <label>Upload Image</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                </div>
            </div>
            <div class="form-group">
                <label for="videourl">Video Url</label>
                <input type="text" class="form-control" id="video" placeholder="upload image">
            </div>

        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@stop




