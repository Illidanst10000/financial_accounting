@extends('layouts.main')

@section('content')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Spendings</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Home</a></li>
                                <li class="breadcrumb-item active">Tags</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-1 mb-3">
                            <a href="{{ route('user.spending.create') }}" class="btn btn-block btn-primary">Create</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">

                                <div class="card-body p-0">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th style="width: 10px">ID</th>
                                            <th>Type</th>
                                            <th>Categories</th>
                                            <th>Tags</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th colspan="3" class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($spendings as $spending)
                                        <tr>
                                            <td>{{$spending->id}}</td>
                                            <td>{{$spending->types->title}}</td>
                                            <td>{{$spending->categories->title}}</td>
                                            <td>
                                            @foreach($spending->tags as $tag)
                                            {{$tag->title}}
                                            @endforeach
                                            </td>
                                            <td>{{$spending->amount}}</td>
                                            <td>{{$spending->date}}</td>
                                            <td class="text-center"><a href="{{ route('user.spending.show', $spending->id) }}">
                                                    <i class="far fa-eye"></i>
                                                </a></td>
                                            <td class="text-center"><a href="{{ route('user.spending.edit', $spending->id) }}">
                                                    <i class="fas fa-pencil-alt text-success"></i>
                                                </a></td>
                                            <td class="text-center">
                                                <form action="{{ route('user.spending.delete', $spending->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="border-0 bg-transparent" type="submit">
                                                        <i class="text-danger fas fa-trash" role="button"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                        </div>
                    </div>




                </div><!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2022 <a href="#">Financial accounting</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>

@endsection
