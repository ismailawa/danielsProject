@extends('layouts.custom-app')
<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Hostel</div>
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($error->all as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div>
                @endif
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="{{ route('hostels.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('hostelname') ? ' has-error' : '' }}">
                            <label for="hostelname" class="col-md-4 control-label">Hostel Name</label>

                            <div class="col-md-6">
                                <input id="hostelname" type="text" class="form-control" name="hostelname" value="{{ old('hostelname') }}" required autofocus>

                                @if ($errors->has('hostelname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hostelname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                               <button type="submit" class="btn btn-primary">
                                    Add Hostel
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
