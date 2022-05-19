@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="ml-3">Earning Edit</h1>
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
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">

                        <!-- form start -->
                        <form action="{{ route('admin.earning.update', $earning->id) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="card-body">


                                <label>Amount</label>
                                <div class="input-group mb-3">

                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" name="amount"
                                           value=" {{$earning->amount}} ">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                @error('amount')
                                <div class="text-danger"> {{ $message }} </div>
                                @enderror

                                <label>Date</label>
                                <div class="form-group">
                                    <div class="input-group date" id="datetimepicker1"
                                         data-target-input="nearest">
                                        <input type="text" name="date" value=" {{ $earning->date }} "
                                               class="form-control datetimepicker-input"
                                               data-target="#datetimepicker1"/>
                                        <div class="input-group-append" data-target="#datetimepicker1"
                                             data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    @error('date')
                                    <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Type</label>
                                    <select class="form-control" name="type_id">
                                        @foreach($types as $type)
                                            <option value="{{ $type->id }}" {{ $type->id == $earning->type_id ? ' selected' : '' }}>
                                                {{ $type->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('type_id')
                                    <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control" name="source_id">
                                        @foreach($sources as $source)
                                            <option value="{{$source->id}}" {{$source->id == $earning->source_id ? ' selected' : ''}}>
                                                {{ $source->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('source_id')
                                    <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>

                                <label>Description</label>
                                <div class="input-group mb-3">


                                        <textarea class="form-control" name="description" rows="3"
                                                  placeholder="Enter ..."> {{ $earning->description }}</textarea>


                                </div>
                                <input type="submit" class="btn btn-primary w-25" value="Add">
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->


                </div>
            </div>
        </div>
        <!-- /.row -->

    </div><!-- /.container-fluid -->
    </section>



@endsection
