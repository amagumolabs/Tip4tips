@extends('layouts.master')
@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <!-- create consultant form -->
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit consultant information</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form role="form">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" value="thuyph" disabled="">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                            <label>Password confirm</label>
                            <input type="password" class="form-control" placeholder="Enter ...">
                        </div>

                        <div class="form-group">
                            <label>Full name</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                            <label>Region</label>
                            <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Business Type</label>
                            <select class="form-control">
                                <option>Insurance</option>
                                <option>Sales</option>
                                <option>Real Estate</option>
                                <option>Service</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Rating</label>

                        </div>

                    </form>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary pull-right">Create</button>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>

@endsection