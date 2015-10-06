@extends('layout')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Participant Form </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="dashboard-div-wrapper bk-clr-one">
                    <i class="fa fa-user dashboard-div-icon"></i>

                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                             aria-valuemax="100" style="width: 80%">
                        </div>

                    </div>
                    <h5 class="dashboard-members-count">Adult : {{$total_members->total_adult}} </h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="dashboard-div-wrapper bk-clr-two">
                    <i class="fa fa-cogs dashboard-div-icon"></i>

                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                             aria-valuemax="100" style="width: 40%">
                        </div>

                    </div>
                    <h5>Children : {{$total_members->total_children}}</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="dashboard-div-wrapper bk-clr-three">
                    <i class="fa fa-bell-o dashboard-div-icon"></i>

                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                             aria-valuemax="100" style="width: 50%">
                        </div>

                    </div>
                    <h5>Senior : {{$total_members->total_senior}}</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="dashboard-div-wrapper bk-clr-four">
                    <i class="fa fa-dollar dashboard-div-icon"></i>

                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                             aria-valuemax="100" style="width: 70%">
                        </div>

                    </div>
                    <h5>Petty Cash($) : {{$sum_cost}} </h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        New Participants
                    </div>
                    <div class="panel-body">
                        <form action="{{ url('/home/participants/save') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="participator_name">Name</label>
                                <input type="text" class="form-control" name="name" id="participant_name" placeholder="Enter name" />
                            </div>
                            <div class="form-group">
                                <label>Select Participant types</label>
                                <select class="form-control" id="participant_type" name="is_member">
                                    <option value="">Select</option>
                                    <option value="1">Member</option>
                                    <option value="0">Non Member</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="participator_adult">Adult</label>
                                <input type="text" class="form-control" name="adult" id="participant_adult" vaule="0" placeholder="0" />
                            </div>
                            <div class="form-group">
                                <label for="participator_children">Children</label>
                                <input type="text" class="form-control" name="children" id="participant_children"  vaule="0" placeholder="0" />
                            </div>
                            <div class="form-group">
                                <label for="participator_senior">Senior</label>
                                <input type="text" class="form-control" name="senior" id="participant_senior"  vaule="0" placeholder="0" />
                            </div>
                            <div class="form-group">
                                <label for="participator_tot_cost">Total Cost</label>
                                <input type="text" class="form-control" name="cost_amt" id="cost_amt"  vaule="0" placeholder="0" />
                            </div>
                            <div class="form-group">
                                <label for="participator_received_amt">Received Amount</label>
                                <input type="text" class="form-control" name="received_amt" id="received_amt"  vaule="0" placeholder="0" />
                            </div>
                            <div class="form-group">
                                <label for="participator_return_amt">Return Amount</label>
                                <input type="text" class="form-control" name="return_amt" id="return_amt"  vaule="0" placeholder="0" />
                            </div>
                            <div class="form-group">
                                <input type="submit" name="btnSubmit" value="Save" id="submit_participant" class="btn btn-md btn-success" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>

<!--  Start for calculating totals of the participators         -->

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       Participant Bills
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group has-success">
                                <label class="control-label" for="participant_name_disp" id="pt_name">Participant Name</label>
                            </div>
                            <div>
                                <table>
                                    <tr><td style="width:200px">Person</td><td style="width:200px">Total</td></tr>
                                    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                    <tr><td style="width:200px">Adult</td><td id="adult_total_disp" style="width:200px">0</td></tr>
                                    <tr><td style="width:200px">Children</td><td id="children_total_disp" style="width:200px">0</td></tr>
                                    <tr><td style="width:200px">Senior</td><td id="senior_total_disp" style="width:200px">0</td></tr>
                                    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                    <tr><td style="width:200px">Total Cost ($)</td><td id="total_cost_disp" style="width:200px">0</td></tr>
                                </table>
                            </div>

                    </div>
                </div>
            </div>
  <!--  End for calculating totals of the participators         -->

        </div>
    </div>
</div>
@endsection