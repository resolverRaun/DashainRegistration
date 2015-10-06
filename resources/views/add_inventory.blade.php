@extends('layout')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Inventory Form </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        New Inventory
                    </div>
                    <div class="panel-body">
                        <form action="{{ url('/home/inventory/save') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="participator_name">Name</label>
                                <input type="text" class="form-control" name="name" id="participant_name" placeholder="Enter name" />
                            </div>
                            <div class="form-group">
                                <label for="participator_adult">Price</label>
                                <input type="text" class="form-control" name="price" id="price" placeholder="Enter Price" />
                            </div>
                            <div class="form-group">
                                <input type="submit" name="btnSubmit" value="Save" id="submit_inventory" class="btn btn-md btn-success" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection