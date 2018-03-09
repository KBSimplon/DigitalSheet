@extends('layouts.app')

@section('content')
<div class="container" id="cart" style="background: url('images/welcome3.jpg') no-repeat center fixed; -webkit-background-size: cover; background-size: cover;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- <div class="card" style="background: url('images/welcome1.jpg') no-repeat center fixed; -webkit-background-size: cover; background-size: cover;">
             -->
             </br>
             <div class="card">
                <div class="card-header">New Student :</div>
                <div class="card-body">

                    <!-- <form class="form-horizontal" method="POST" action="{{ route('task') }}" enctype="multipart/form-data">
                        {{ csrf_field() }} -->
                    <form class="form-horizontal" method="POST" action="/task" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        
                        <div class="row">
                        <div class="col-md-6">
                        <!-- LASTNAME -->
                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="control-label">Lastname*</label>

                            
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                        <!-- FIRSTNAME -->
                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">Firstname*</label>

                            
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <!-- AVATAR -->

                        <!-- AVATAR -->

                        <div class="col-md-6">
                        <!-- FORMATION -->
                        <div class="form-group{{ $errors->has('formation') ? ' has-error' : '' }}">
                            <label for="formation" class="col-md-4 control-label">Formation*</label>

                            
                                <input id="formation" type="text" class="form-control" name="formation" value="{{ old('formation') }}" required>

                                @if ($errors->has('formation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('formation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                        <!-- PLACE -->
                        <div class="form-group{{ $errors->has('place') ? ' has-error' : '' }}">
                            <label for="place" class="col-md-4 control-label">Place*</label>

                            
                                <input id="place" type="text" class="form-control" name="place" value="{{ old('place') }}" required>

                                @if ($errors->has('place'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('place') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12">
                        <div class="form-group">
                            
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Add new Student
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    </br>

    <div class="container" id="table">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (Auth::check())
                    <h2>Students List</h2>
                        <!-- <a href="/task" class="btn btn-primary">Add new Task</a> -->
                        <table class="table" id="tableDeux" style="background: url('images/welcome2.jpg') no-repeat center fixed; -webkit-background-size: cover; background-size: cover;">
                            <thead><tr>
                                <th>Lastname</th>
                                <th>Firstname</th>
                                <th>Formation</th>
                                <th>Place</th>
                                <th>Awesome Options</th>
                                </tr>
                            </thead>
                            <tbody>@foreach($user->tasks as $task)
                                <tr>
                                    <td>
                                        {{$task->lastname}}
                                    </td>
                                    <td>
                                        {{$task->firstname}}
                                    </td>
                                    <td>
                                        {{$task->formation}}
                                    </td>
                                    <td>
                                        {{$task->place}}
                                    </td>
                                    <td>  
                                        <form action="/task/{{$task->id}}">
                                            <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                                            <button type="submit" name="delete" formmethod="POST" class="btn btn-danger">Delete</button>
                                            {{ csrf_field() }}
                                        </form>
                                    </td>
                                </tr>
                                
        
                            @endforeach</tbody>
                        </table>
                @else
                    <h3>You need to log in. <a href="/login">Click here to login</a></h3>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
