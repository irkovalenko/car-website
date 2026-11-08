@extends('layouts.basic')
@include('layouts.components.header')
@section('childContent')
@yield('content')
@endsection
@include('layouts.components.footer')