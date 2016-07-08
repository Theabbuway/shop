@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="panel panel-danger">
                <div class="panel-heading">Wats new</div>

                <div class="panel-body">
                    Tecno mobile phone
                    <img src="/images/h8.jpg" height="100%" width="100%">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">Shopit</div>

                <div class="panel-body">
                    Your one stop online shopping solution
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <div class="panel panel-success">
                <div class="panel-heading">Wats new</div>

                <div class="panel-body">
                    Brand new subaru impreza
                    <img src="/images/subaru.jpg" height="100%" width="100%">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Wats new</div>

                <div class="panel-body">
                    T-shirt from Japan
                    <img src="/images/t-shirt.jpg">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-warning">
                <div class="panel-heading">Wats new</div>

                <div class="panel-body">
                    Lenovo touchpad
                    <img src="/images/hp.jpg">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
