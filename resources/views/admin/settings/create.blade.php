@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Upload Settings</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('settings.index') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('appname') ? ' has-error' : '' }}">
                            <label for="appname" class="col-md-4 control-label">appname</label>

                            <div class="col-md-6">
                                <input id="appname" type="text" class="form-control" name="appname" value="{{ old('appname') }}" required autofocus>

                                @if ($errors->has('appname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('appname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('hostinstitution') ? ' has-error' : '' }}">
                            <label for="hostinstitution" class="col-md-4 control-label">Host Institution</label>

                            <div class="col-md-6">
                                <input id="hostinstitution" type="hostinstitution" class="form-control" name="hostinstitution" value="{{ old('hostinstitution') }}" required>

                                @if ($errors->has('hostinstitution'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hostinstitution') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        <div class="form-group{{ $errors->has('apptheme') ? ' has-error' : '' }}">
                            <label for="apptheme" class="col-md-4 control-label">Theme</label>

                            <div class="col-md-6">
                                <input id="apptheme" type="apptheme" class="form-control" name="apptheme" value="{{ old('apptheme') }}" required>

                                @if ($errors->has('apptheme'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apptheme') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                        <div class="form-group{{ $errors->has('appmotto') ? ' has-error' : '' }}">
                            <label for="appmotto" class="col-md-4 control-label">Motto</label>

                            <div class="col-md-6">
                                <input id="appmotto" type="appmotto" class="form-control" name="appmotto" value="{{ old('appmotto') }}" required>

                                @if ($errors->has('appmotto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('appmotto') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Settings
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
