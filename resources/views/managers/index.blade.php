@extends('layouts.master')
@section('title', 'All Managers')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">All Managers</h3>
            <a href="managers/add" class="btn btn-md btn-primary pull-right">Add New Manager</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="view-managers" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>thuyph
                    </td>
                    <td>Pham Thi Dang Thuy</td>
                    <td>phamdangthuy2310@gmail.com</td>
                    <td>Community</td>
                    <td><label class="label label-success">Active</label></td>
                    <td>
                        <a class="btn btn-xs btn-success" title="View"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-xs btn-info" title="Edit"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-xs btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>chinhpham
                    </td>
                    <td>Pham Phu Chinh</td>
                    <td>phuchinh@gmail.com</td>
                    <td>Sales</td>
                    <td><label class="label label-success">Active</label></td>
                    <td>
                        <a class="btn btn-xs btn-success" title="View"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-xs btn-info" title="Edit"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-xs btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>anguyen
                    </td>
                    <td>Nguyen Van A</td>
                    <td>anguyen@gmail.com</td>
                    <td>Community</td>
                    <td><label class="label label-success">Active</label></td>
                    <td>
                        <a class="btn btn-xs btn-success" title="View"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-xs btn-info" title="Edit"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-xs btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>nguyenngoc
                    </td>
                    <td>Nguyen Ngoc B</td>
                    <td>nguyenngoc@gmail.com</td>
                    <td>Community</td>
                    <td><label class="label label-danger">Deactive</label></td>
                    <td>
                        <a class="btn btn-xs btn-success" title="View"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-xs btn-info" title="Edit"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-xs btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>cvo
                    </td>
                    <td>Vo Thi C</td>
                    <td>cvo@gmail.com</td>
                    <td>Sales</td>
                    <td><label class="label label-success">Active</label></td>
                    <td>
                        <a class="btn btn-xs btn-success" title="View"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-xs btn-info" title="Edit"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-xs btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>


                </tbody>
                <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

@endsection