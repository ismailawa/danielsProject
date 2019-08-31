@extends('layouts.custom-app')

@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as <strong>ADMIN</strong>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="ui basic segment">
    <div class="ui container breadcrumb">
  <a class="section" href="{{ url('/') }}">
      <i class="home icon"></i>
  </a>
  <div class="divider"> / </div>
  <div class="section">Admin Dashboard</div>
  <div class="divider"> / </div>
  <div class="active section">Home</div>
</div>
    <div class="ui raised segment">
      <h3 class="ui header">Admin Dashboard</h3>
        <div class="ui three column grid">
              <div class="column">
                <div>
                    <div class="eight wide tablet four wide computer column">
                                <div class="ui horizontal segments">
                                      <div class="ui inverted teal segment center aligned">
                                        <div class="ui inverted orange statistic">
                                          @foreach ($members as $member)
                                          @endforeach
                                            <div class="value">
                                                {{$members->count()}}
                                            </div>
                                            <div class="label" style="color: #000">
                                                Registered Members
                                            </div>
                                        </div>
                                      </div>
                                      <div class="ui inverted teal tertiary segment center aligned">
                                        <div class="ui inverted  statistic">
                                        <div class="value">
                                                <i class="user outline icon"></i>
                                            </div>
                                        </div>
                                      </div>
                                </div>
                    </div>
                </div>
              </div>
              <div class="column">
                <div>
                    <div class="eight wide tablet four wide computer column">
                                <div class="ui horizontal segments">
                                      <div class="ui inverted teal segment center aligned">
                                        <div class="ui inverted yellow statistic">
                                            <div class="value">
                                                3,952
                                            </div>
                                            <div class="label" style="color: #000">
                                                Printed ID Cards
                                            </div>
                                        </div>
                                      </div>
                                      <div class="ui inverted teal tertiary segment center aligned">
                                          <div class="ui inverted  statistic">
                                        <div class="value">
                                                <i class="address card outline icon"></i>
                                            </div>
                                        </div>
                                      </div>
                                </div>
                    </div>
                </div>
              </div>
              <div class="column">
                <div>
                    <div class="eight wide tablet four wide computer column">
                                <div class="ui horizontal segments">
                                      <div class="ui inverted teal segment center aligned">
                                        <div class="ui inverted pink statistic">
                                            <div class="value">
                                                {{$users->count()}}
                                            </div>
                                            <div class="label" style="color: #000">
                                                Reg. Staff
                                            </div>
                                        </div>
                                      </div>
                                      <div class="ui inverted teal tertiary segment center aligned">
                                          <div class="ui inverted  statistic">
                                        <div class="value">
                                                <i class="user circle icon"></i>
                                            </div>
                                        </div>
                                      </div>
                                </div>
                    </div>
                </div>
              </div>
        </div>

            <!-- Notification Grid -->
        <div class="ui two column grid">
            <div class="column">
                <div class="ui clearing segment">
                      <h4 class="ui right floated header">
                        <i class="bell icon"></i>
                      </h4>
                      <h3 class="ui left floated violet header">
                        Notification
                      </h3>
                </div>
            </div>
            <div class="column">
                <h3 class="ui top attached red header">
                  <i class="assistive listening systems icon"></i> Reminder
                </h3>
                <div class="ui attached segment">
                  <p><strong>Backup Database File Every 1 Hour.</strong></p>
                </div>
            </div>
        </div>
<!-- end of notification grid -->    
    </div>
</div>

@endsection
