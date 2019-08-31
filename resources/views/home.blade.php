@extends('layouts.main-app')

@section('content')

<div class="ui basic segment">
    <div class="ui container breadcrumb">
  <a class="section" href="{{ url('/') }}">
      <i class="home icon"></i>
  </a>
  <div class="divider"> / </div>
  <div class="section">Staff Dashboard</div>
  <div class="divider"> / </div>
  <div class="active section">Home</div>
</div>
    <div class="ui raised segment">
      <h3 class="ui header">Staff Dashboard</h3>
        <div class="ui two column grid">
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
                                
                    </div>
                </div>
              </div>
        </div>

            <!-- Notification Grid -->
        <div class="ui two column grid">
            <div class="column">
                <!-- contents here -->
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