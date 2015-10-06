@extends('layout')

@section('content')
<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="page-head-line">Dashboard</h4>

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

            <div class="col-md-12">
                <a href="/home/inventory/new"  class="btn btn-default">ADD</a>
                <hr/>
                <div class="table-responsive">
                    <table class="table display table-striped table-bordered table-hover" id="example" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Created On</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($inventory as $data)
                        <tr>
                            <td>{{ $data['name'] }}</td>
                            <td>{{ $data['price'] }}</td>
                            <td>{{ $data['created_at'] }}</td>
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
