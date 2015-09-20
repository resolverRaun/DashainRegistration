@extends('app')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="page-head-line">Please Login To Enter </h4>

            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <form role="form" method="POST" action="{{ url('/auth/login') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label>Enter Email ID : </label>
                    <input type="text" class="form-control" name="email"/>
                    <label>Enter Password : </label>
                    <input type="password" class="form-control" name="password"/>
                    <hr/>
                    @if (count($errors) > 0)
                    <h4 class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </h4>
                    @endif
                    <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-user"></span>Login
                    </button>
                </form>
            </div>
<!--            <div class="col-md-6">-->
<!--                <div class="alert alert-info">-->
<!--                    This is a free bootstrap admin template with basic pages you need to craft your project.-->
<!--                    Use this template for free to use for personal and commercial use.-->
<!--                    <br/>-->
<!--                    <strong> Some of its features are given below :</strong>-->
<!--                    <ul>-->
<!--                        <li>-->
<!--                            Responsive Design Framework Used-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            Easy to use and customize-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            Font awesome icons included-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            Clean and light code used.-->
<!--                        </li>-->
<!--                    </ul>-->
<!---->
<!--                </div>-->
<!--                <div class="alert alert-success">-->
<!--                    <strong> Instructions To Use:</strong>-->
<!--                    <ul>-->
<!--                        <li>-->
<!--                            Lorem ipsum dolor sit amet ipsum dolor sit ame-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            Aamet ipsum dolor sit ame-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            Lorem ipsum dolor sit amet ipsum dolor-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            Cpsum dolor sit ame-->
<!--                        </li>-->
<!--                    </ul>-->
<!---->
<!--                </div>-->
<!--            </div>-->

        </div>
    </div>
</div>
@endsection
