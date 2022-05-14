@extends('admin.layouts.main')

@section('content')

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('admin.main.index') }}" class="nav-link">Home</a>
            </li>

        </ul>
    </nav>

    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="ml-3">Earning Create</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v2</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <div class="row ml-2">
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary w-75">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Earning info</h3>
                                </div>
                                <form action="{{ route('admin.earning.store') }}" method="POST">
                                    @csrf
                                    <div class="card-body">


                                        <label>Amount</label>
                                        <div class="input-group mb-3">

                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" class="form-control" name="amount">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>

                                        <label>Date</label>
                                        <div class="form-group">
                                            <div class="input-group date" id="datetimepicker1"
                                                 data-target-input="nearest">
                                                <input type="text" name="date" class="form-control datetimepicker-input"
                                                       data-target="#datetimepicker1"/>
                                                <div class="input-group-append" data-target="#datetimepicker1"
                                                     data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Type</label>
                                            <select class="form-control" name="type_id">
                                                @foreach($types as $type)
                                                    <option value="{{ $type->id }}">
                                                        {{ $type->title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Source</label>
                                            <select class="form-control" name="source_id">
                                                @foreach($sources as $source)
                                                    <option value="{{$source->id}}">
                                                        {{ $source->title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <label>Description</label>
                                        <div class="input-group mb-3">


                                            <textarea class="form-control" name="description" rows="3" placeholder="Enter ..."></textarea>


                                        </div>
                                        <input type="submit" class="btn btn-primary w-25" value="Add">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

    </div><!-- /.container-fluid -->
    </section>

@endsection
