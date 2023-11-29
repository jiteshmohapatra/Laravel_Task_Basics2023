@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1 style="text-align:center;"><b style="color:red;">Laravel 9</b> <b style="color:green;">C</b><b style="color:skyblue">R</b><b style="color:blue">U</b><b style="color:brown;">D</b> (<b style="color:green;">Create,</b> <b style="color:skyblue;">Read,</b> <b style="color:blue;">Update</b> and <b style="color:brown";>Delete)</b></h1>
                    </div>
                    <div class="card-body"><br>
                        <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student" style="font-size:30px; border:1px solid brown; border-width:5px;margin-left:420px;">
                         Create New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive" style="border-radius:5px;box-shadow:2px 3px 5px orange; border-top:3px solid orange;border-left:2px solid orange;border:2px solid brown;border-width:30px;display:inline-block;margin-left:200px; margin-bottom:5px;">
                            <table class="table table-striped table-bordered table-hover table-primary">
                                <thead>
                                    <tr class="table-active">
                                        <th class="table-primary">ID</th>
                                        <th  class="table-secondary">Name</th>
                                        <th class="table-success">City</th>
                                        <th class="table-danger">PhoneNo</th>
                                        <th class="table-warning">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->city }}</td>
                                        <td>{{ $item->phoneno }}</td>
  
                                        <td>
                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Read</button></a>
                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
