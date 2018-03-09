<?php use \App\Model\Role;?>
@extends('layouts.master')
@section('title', 'List of Message Templates')
@section('javascript')
    <script src="{{ asset('js/admin/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/admin/dataTables.bootstrap.min.js') }}"></script>
    <script>
      $(function () {
        $('#viewList').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : true,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : true,
          'order': [],
          'columnDefs': [ { orderable: false, targets: [0]}]
        })
      })
    </script>
@stop
@section('body.breadcrumbs')
    {{ Breadcrumbs::render('tipsters') }}
@stop
@section('content')
    <div class="box box-list">
        <div class="box-header">
            <h3 class="box-title">@yield('title')</h3>
            @if($createAction == true)<a href="{{ route('messagetemplates.create') }}" class="btn btn-md btn-primary pull-right"><i class="fa fa-plus"></i> New Message Template</a>@endif
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            @if (\Session::has('success'))
                <div class="alert alert-success clearfix">
                    <p>{{ \Session::get('success') }}</p>
                </div><br />
            @endif
            <div class="table-responsive">
                <table id="viewList" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Message ID</th>
                        <th>Subject VN</th>
                        <th>Subject EN</th>
                        <th>Content VN</th>
                        <th>Content EN</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i= 0; ?>
                    @foreach($templates as $template)
                        <?php $i++ ?>
                        <tr>
                            <td><?php echo $i?></td>
                            <td>{{ $template->message_id }}</td>
                            <td>{{$template->subject_vn}}</td>
                            <td>{{ $template->subject_en }}</td>
                            <td>{{ $template->content_vn }}</td>
                            <td>{{$template->content_en}}</td>
                            <td class="actions text-center" style="width: 100px">
                                <a href="{{route('messagetemplates.showsendmessage', $template->id)}}" class="btn btn-xs btn-primary" title="Send message"><i class="fa fa-paper-plane"></i></a>
                                {{--<a href="{{route('messagetemplates.show', $template->id)}}" class="btn btn-xs btn-success" title="View"><i class="fa fa-eye"></i></a>--}}
                                @if($editAction == true)<a href="{{route('messagetemplates.edit', $template->id)}}" class="btn btn-xs btn-info" title="Edit"><i class="fa fa-pencil"></i></a>@endif
                                {{--@if($deleteAction == true)<form action="{{route('messagetemplates.destroy', $template->id)}}" method="post">--}}
                                {{--{{csrf_field()}}--}}
                                {{--<input name="_method" type="hidden" value="DELETE">--}}
                                {{--<button class="btn btn-xs btn-danger" type="submit"><i class="fa fa-trash"></i></button>--}}
                                {{--</form>@endif--}}
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Message ID</th>
                        <th>Subject VN</th>
                        <th>Subject EN</th>
                        <th>Content VN</th>
                        <th>Content EN</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                </table>
            </div>

        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

@endsection