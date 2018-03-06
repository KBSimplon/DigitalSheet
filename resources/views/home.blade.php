@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nouvel apprenant :</div>
                <div class="card-body">

                    <form class="form-horizontal" method="POST" action="{{ route('test') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <!-- LASTNAME -->
                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Lastname*</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- FIRSTNAME -->
                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">Firstname*</label>

                            <div class="col-md-6">
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

                        <!-- FORMATION -->
                        <div class="form-group{{ $errors->has('formation') ? ' has-error' : '' }}">
                            <label for="formation" class="col-md-4 control-label">Formation*</label>

                            <div class="col-md-6">
                                <input id="formation" type="text" class="form-control" name="formation" value="{{ old('formation') }}" required>

                                @if ($errors->has('formation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('formation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- PLACE -->
                        <div class="form-group{{ $errors->has('place') ? ' has-error' : '' }}">
                            <label for="place" class="col-md-4 control-label">Place*</label>

                            <div class="col-md-6">
                                <input id="place" type="text" class="form-control" name="place" value="{{ old('place') }}" required>

                                @if ($errors->has('place'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('place') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
