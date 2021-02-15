@extends('backend.layouts.app')
@section('title', 'Dashboard')
@section('breadcrumbs')
    <h4 class="page-title pull-left">Dashboard</h4>
    <ul class="breadcrumbs pull-left">
        <li><a href="{{route('dashboard.index')}}">Home</a></li>
        <li><span>Dashboard</span></li>
    </ul>
@endsection
@section('content')

@endsection