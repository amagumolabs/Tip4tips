@extends('layouts.master')
@section('title', 'Edit Lead')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-md-4 col-md-push-8">

            <!-- Profile Image -->
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Assignment Area</h3>
                </div>
                <div class="box-body">
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
                    <form role="form" method="post" action="{{url('assignments')}}">
                        {{ csrf_field() }}

                        <div class="box-body">
                            <input type="hidden" name="lead" value="{{$lead->id}}">
                            <div class="form-group">
                                <label>Assign to Consultant</label>
                                <select name="consultant" class="form-control">
                                    @foreach(\App\User::getAllConsultant() as $consultant)
                                        <option value="{{$consultant->id}}">{{$consultant->fullname}}</option>
                                    @endforeach
                                </select>
                            </div>


                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary pull-right">Assign</button>
                        </div>
                    </form>
                </div>

                <!-- /.box-body -->
            </div>
            <!-- /.box -->


        </div>
        <!-- /.col -->
        <div class="col-md-8 col-md-pull-4">
            <!-- create manager form -->
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Lead</h3>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <!-- /.box-header -->
                <form role="form" method="post" action="{{route('leads.update', $id)}}">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="PATCH">
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Full name</label>
                                <input name="fullname" type="text" class="form-control" value="{{$lead->fullname}}" placeholder="Enter ...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Birthday</label>
                                <input name="birthday" type="text" class="form-control" value="{{$lead->birthday}}" placeholder="Enter ...">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" name="gender">
                                    <option value="0" @if($lead->gender == 0) selected @endif>Male</option>
                                    <option value="1" @if($lead->gender == 1) selected @endif>Female</option>
                                    <option value="2" @if($lead->gender == 2) selected @endif>Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="text" class="form-control" value="{{$lead->email}}" placeholder="Enter ...">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input name="phone" type="text" class="form-control" value="{{$lead->phone}}" placeholder="Enter ...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Address</label>
                                <input name="address" type="text" class="form-control" value="{{$lead->address}}" placeholder="Enter ...">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Region</label>
                                <select name="region" class="form-control">
                                    @foreach($regions as $region)
                                        <option value="{{$region->id}}" @if($region->id == $lead->region_id) selected @endif>{{$region->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Need</label>
                        <textarea name="need" class="form-control" placeholder="Enter ..." rows="5">{{$lead->need}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Tipster</label>
                        <select name="tipster" class="form-control">
                            @foreach($tipsters as $tipster)
                            <option value="{{$tipster->id}}" @if($tipster->id == $lead->tipster_id) selected @endif>{{$tipster->fullname}}</option>
                            @endforeach
                        </select>
                    </div>




                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="button" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>

@endsection