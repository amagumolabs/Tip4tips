<?php use \App\Common\Utils; ?>
@extends('layouts.master')
@section('title', 'Create Product')
@section('javascript')
    <script src="{{ asset('js/admin/product.js') }}"></script>
    <script>
      $(document).ready(function () {
        var src = '{{asset(Utils::$PATH__IMAGE)}}/';
        $("#imgAnchorInput").change(function() {
          $("#imgHandleInput").val($(this).val());
          src += $(this).val();
          console.log(src, $(this).val());
          $("#imgHandle").attr('src', src);
        }).change();
      })
    </script>
@stop
@section('body.breadcrumbs')
    {{ Breadcrumbs::render('products.create') }}
@stop
@section('content')
    @if($createAction == false)
        <div class="box box-danger">
            <div class="box-body text-center">
                <p>You do not access to this screen. Please contact to admin.</p>
            </div>
        </div>
    @else

    <div class="row">
        <!-- /.col -->
        <div class="col-md-8">
            <!-- create manager form -->

            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Create Product</h3>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div>
                @endif
                <!-- /.box-header -->
                <form role="form" method="post" action="{{route('products.store')}}">
                    {{ csrf_field() }}
                <input id="imgHandleInput" name="thumbnail" type="hidden" value="">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Product name</label>
                                <input name="name" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="5"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Category</label>
                                <select name="category" class="form-control">
                                    <option value="" disabled selected>Please pick a category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label>Price</label>
                                    <input name="price" type="number" class="form-control" value="0">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Quality</label>
                                    <input name="quality" type="number" class="form-control" value="0">
                                </div>
                            </div>


                        </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <a href="{{route('products.index')}}" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-primary pull-right">Create</button>
                </div>
                </form>
            </div>

            <!-- /.box -->
        </div>
        <div class="col-md-4">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">@yield('title')</h3>
                </div>
                <div class="box-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        <input id="imgAnchorInput" type="hidden" value="{{Session::get('image')}}">

                    @endif
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="upload__area-thumbnail">
                        <p><span>
                            <img id="imgHandle" src="{{ asset('images/no_image_available.jpg') }}">
                        </span></p>
                    </div>
                    <div class="form__upload">
                        {!! Form::open(array('route' => 'image.upload.post','files'=>true)) !!}
                        <div class="form-inline-simple">
                            {!! Form::file('image', array('class' => 'form-control')) !!}
                            <button type="submit" class="btn btn-info">Upload</button>
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>

            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Category</h3>
                </div>
                <div class="box-body">
                    <div id="categoryForm" class="categoryForm" data-url="{{route('products.addcategory')}}">
                        <div class="form-group">
                            <input name="categoryName" class="form-control" placeholder="Ex: Insurance">
                            <button id="catAdd" type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                        </div>
                        <div class="form-group">
                            <label id="catAlert" class="label"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif
@endsection