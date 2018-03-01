@extends('layouts.master')
@section('title', 'Compose New Message')
@section('styles')
    <!-- Bootstrap WYSIHTML5 -->
    <link href="{{ asset('css/admin/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/admin/select2.min.css') }}" rel="stylesheet" type="text/css">
@stop
@section('javascript')
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('js/admin/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <script src="{{ asset('js/admin/select2.full.min.js') }}"></script>
    <script>
      $(function () {
        //Add text editor
        $("#compose-textarea").wysihtml5();
        $('.select2').select2();
      });
    </script>
@stop
@section('body.breadcrumbs')
    {{ Breadcrumbs::render('messages.create') }}
@stop
@section('content')
    <div class="row">
        @include('messages.partials.column-left-mail')
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
                <form method="post" action="{{url('messages')}}">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <select name="receiver" class="form-control select2" style="width: 100%;">
                                <option selected disabled>To:</option>
                                @foreach($receivers as $receiver)
                                    <option value="{{$receiver->id}}">{{$receiver->username}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <input name="title" class="form-control" placeholder="Subject:">
                        </div>
                        <div class="form-group">
                        <textarea name="content" id="compose-textarea" class="form-control" style="height: 300px">

                        </textarea>
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<div class="btn btn-default btn-file">--}}
                                {{--<i class="fa fa-paperclip"></i> Attachment--}}
                                {{--<input type="file" name="attachment">--}}
                            {{--</div>--}}
                            {{--<p class="help-block">Max. 32MB</p>--}}
                        {{--</div>--}}
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <div class="pull-right">
                            {{--<button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>--}}
                            <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                        </div>
                        <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /. box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection