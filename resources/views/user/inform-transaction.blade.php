@extends('layouts.app')

@section('page-title', 'แจ้งการโอนเงิน')
@section('page-heading', 'แจ้งการโอนเงิน')

@section('breadcrumbs')
    <li class="breadcrumb-item active">
        แจ้งการโอนเงิน
    </li>
@stop

@section('content')
    @include('partials.messages')
    <h1>WOW</h1>
@stop

@section('styles')
    <style>
        .user.media {
            float: left;
            border: 1px solid #dfdfdf;
            background-color: #fff;
            padding: 15px 20px;
            border-radius: 4px;
            margin-right: 15px;
        }
    </style>
@stop