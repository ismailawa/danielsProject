@extends('layouts.custom-app')
<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Institution</div>
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
                    <form class="form-horizontal" method="POST" action="{{ route('institutions.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('institutionname') ? ' has-error' : '' }}">
                            <label for="institutionname" class="col-md-4 control-label">Institution Name</label>

                            <div class="col-md-6">
                                <input id="institutionname" type="text" class="form-control" name="institutionname" value="{{ old('institutionname') }}" required autofocus>

                                @if ($errors->has('institutionname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('institutionname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       
                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add Institution
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
