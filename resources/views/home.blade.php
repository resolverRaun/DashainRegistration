@extends('layout')

@section('content')
<div class="content-wrapper">
<div class="container">
<div class="row">
    <div class="col-md-12">
        <h4 class="page-head-line">Dashboard</h4>

    </div>
</div>

<div class="row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="dashboard-div-wrapper bk-clr-one">
            <i class="fa fa-users dashboard-div-icon"></i>
            <h5 class="dashboard-members-count">Adult : {{$total_members->total_adult}} </h5>
        </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="dashboard-div-wrapper bk-clr-two">
            <i class="fa fa-child dashboard-div-icon"></i>
            <h5>Children : {{$total_members->total_children}}</h5>
        </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="dashboard-div-wrapper bk-clr-three">
            <i class="fa fa-user dashboard-div-icon"></i>
            <h5>Senior : {{$total_members->total_senior}}</h5>
        </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="dashboard-div-wrapper bk-clr-four">
            <i class="fa fa-dollar dashboard-div-icon"></i>
            <h5>Petty Cash($) : {{$sum_cost}} </h5>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-md-12">
        <a href="/home/participants/new"  class="btn btn-default">ADD</a>
        <hr/>

        <div class="table-responsive">
            <table class="table display table-striped table-bordered table-hover" id="example" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Cost Amount</th>
                    <th>Recevied Amount</th>
                    <th>Return Amount</th>
                    <th>Adult</th>
                    <th>Children</th>
                    <th>Senior</th>
                    <th>Member</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($participants as $data)
                    <tr>
                        <td>{{ $data['name'] }}</td>
                        <td>{{ $data['cost_amt'] }}</td>
                        <td>{{ $data['received_amt'] }}</td>
                        <td>{{ $data['return_amt'] }}</td>
                        <td>{{ $data['participant_type']['adult'] }}</td>
                        <td>{{ $data['participant_type']['children'] }}</td>
                        <td>{{ $data['participant_type']['senior'] }}</td>
                        @if($data['is_member']==1)
                           <td><label class="label label-success">YES</label></td>
                        @else
                           <td><label class="label label-danger">NO</label></td>
                        @endif
                        <td><a href="{{ URL::to('home/participants/edit/' . $data['id']) }}" class="btn btn-xs btn-primary">Edit</a>
                        <a href="{{ URL::to('home/participants/delete/' . $data['id']) }}" class="btn btn-xs btn-danger">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


</div>
</div>
</div>
@endsection
