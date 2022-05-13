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
                <a href="{{ route('admin.type.index') }}" class="nav-link">Home</a>
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
                        <h1 class="ml-3">It's type #{{$type->id}}</h1>
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
            <!-- Small boxes (Stat box) -->
            <div class="row ml-2">
                <div class="col-md-6 d-flex align-items-center">
                    <h1 class="mr-3">{{ $type->title }}</h1>
                    <a href="{{ route('admin.type.edit', $type->id) }}" class="text-success mr-2"><i class="fas fa-pencil-alt text-success"></i></a>
                    <form action="{{ route('admin.type.delete', $type->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="border-0 bg-transparent" type="submit">
                            <i class="text-danger fas fa-trash" role="button"></i>
                        </button>
                    </form>




                </div>
            </div>
        </div>
        <!-- /.row -->

    </div><!-- /.container-fluid -->
    </section>



@endsection
