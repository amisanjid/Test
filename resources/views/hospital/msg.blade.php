@extends('formAdvance')
@Section('content')
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{url('/')}} ">Home</a>
                        </li>
                        <!--
                        <li>
                            <a>Forms</a>
                        </li>
                        <li class="active">
                            <strong>Create Profile</strong>
                        </li>-->
                    </ol>
                </div>
                <div class="col-lg-12">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-12">

                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5> <small></small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                        @if(isset($success))
                            <div class="alert alert-success">
                                Success. <a class="alert-link" href="#">Go Back</a>.
                            </div>
                        @endif

                        @if(isset($failed))
                            <div class="alert alert-danger">
                                Failed. <a class="alert-link" href="#">Go Back</a>.
                            </div>
                        @endif
                        </div>
                    </div>
                </div>
                

            </div>
@endSection