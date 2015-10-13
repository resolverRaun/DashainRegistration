@extends('layout')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Miscellaneous Data </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Money
                    </div>
                    <div class="panel-body">
                        <form action="{{ url('/home/miscellaneous/save') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="participator_name">Hundred</label>
                                <input type="text" class="form-control" name="hundred" id="hundred" value="{{$data->hundred}}" />
                            </div>
                            <div class="form-group">
                                <label for="participator_adult">Fifty</label>
                                <input type="text" class="form-control" name="fifty" id="fifty" value="{{$data->fifty}}"   />
                            </div>
                            <div class="form-group">
                                <label for="participator_adult">Twenty</label>
                                <input type="text" class="form-control" name="twenty" id="twenty" value="{{$data->twenty}}"  />
                            </div>
                            <div class="form-group">
                                <label for="participator_adult">Ten</label>
                                <input type="text" class="form-control" name="ten" id="ten" value="{{$data->ten}}"  />
                            </div>
                            <div class="form-group">
                                <label for="participator_adult">One</label>
                                <input type="text" class="form-control" name="one" id="one" value="{{$data->one}}"  />
                            </div>
                            <div class="form-group">
                                <input type="submit" name="btnSubmit" value="Update" id="ten" class="btn btn-md btn-success" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection