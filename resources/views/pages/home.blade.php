@extends('layouts.master')
@section('title', 'Home')

@section('content')
<div class="header-spacer"></div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>A Picture of me</h1>
            <img src="{{ asset('images/hawaii.jpg') }}" width="300">
        </div>
    </div>
</div>
@endsection
