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
                                <label for="participator_hundred">Hundred</label>
                                <input type="text" class="form-control" name="hundred" id="hundred" value="" />
                            </div>
                            <div class="form-group">
                                <label for="participator_fifty">Fifty</label>
                                <input type="text" class="form-control" name="fifty" id="fifty" value=""   />
                            </div>
                            <div class="form-group">
                                <label for="participator_twenty">Twenty</label>
                                <input type="text" class="form-control" name="twenty" id="twenty" value=""  />
                            </div>
                            <div class="form-group">
                                <label for="participator_ten">Ten</label>
                                <input type="text" class="form-control" name="ten" id="ten" value=""  />
                            </div>
                            <div class="form-group">
                                <label for="participator_one">One</label>
                                <input type="text" class="form-control" name="one" id="one" value=""  />
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <!--  Start for calculating totals amounts in definite divided form         -->
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Total Amount Cash Arranged
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <div>
                                <table>
                                    <tr><td style="width:200px">Denomination</td><td style="width:200px">Amount</td></tr>
                                    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                    <tr><td style="width:200px" class="add-hundred">100 * </td><td id="hunderd_total_disp" style="width:200px">0</td></tr>
                                    <tr><td style="width:200px" class="add-fifty">50 * </td><td id="fifty_total_disp" style="width:200px">0</td></tr>
                                    <tr><td style="width:200px" class="add-twenty">20 * </td><td id="twenty_total_disp" style="width:200px">0</td></tr>
                                    <tr><td style="width:200px" class="add-ten">10 * </td><td id="ten_total_disp" style="width:200px">0</td></tr>
                                    <tr><td style="width:200px" class="add-one">1 * </td><td id="one_total_disp" style="width:200px">0</td></tr>
                                    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                    <tr><td style="width:200px">Total Cost ($)</td><td id="grandtotal_cost_disp" style="width:200px">0</td></tr>
                                </table>
                            </div>

                    </div>
                </div>
            </div>
            <!--  End for calculating totals amounts in definite divided form           -->
        </div>
    </div>
</div>
@endsection