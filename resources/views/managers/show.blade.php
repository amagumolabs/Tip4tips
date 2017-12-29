@extends('layouts.master')
@section('title', 'Profile')

@section('content')
    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="{{ asset('images/avatar2.png') }}" alt="User profile picture">

                    <h3 class="profile-username text-center">Thuy Pham</h3>

                    <p class="text-muted text-center">Admin</p>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->


        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <!-- About Me Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">About Me</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <strong><i class="fa fa-user margin-r-5"></i> User name</strong>

                    <p class="text-muted">
                        B.S. in Computer Science from the University of Tennessee at Knoxville
                    </p>

                    <hr>
                    <strong><i class="fa fa-user-circle-o margin-r-5"></i> Account type</strong>

                    <p class="text-muted">
                        B.S. in Computer Science from the University of Tennessee at Knoxville
                    </p>

                    <hr>

                    <strong><i class="fa fa-address-book margin-r-5"></i> Fullname</strong>

                    <p class="text-muted">
                        Pham Thi Dang Thuy
                    </p>

                    <hr>

                    <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>

                    <p class="text-muted">
                        thuy.pham@amagumolabs.com
                    </p>

                    <hr>
                    <strong><i class="fa fa-phone margin-r-5"></i> Phone</strong>

                    <p class="text-muted">
                        0989310732
                    </p>

                    <hr>
                    <strong><i class="fa fa-home margin-r-5"></i> Address</strong>

                    <p class="text-muted">
                        Nguyen Hien Le, Tan Binh.
                    </p>

                    <hr>

                    <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                    <p class="text-muted">Sai Gon, Vietnam</p>

                    <hr>

                    <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

@endsection