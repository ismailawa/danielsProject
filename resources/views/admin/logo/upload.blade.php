@extends('layouts.custom-app')
<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Upload A Logo</div>
               
                <div class="panel-body">
                    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ route('logo.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('logoname') ? ' has-error' : '' }}">
                            <label for="logoname" class="col-md-4 control-label">Upload jpeg Logo</label>

                            <div class="col-md-6">
                                <input id="logoname" type="file" class="form-control" name="logoname" value="{{ old('logoname') }}" required autofocus>

                                @if ($errors->has('logoname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('logoname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" name="" value="Upload">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
