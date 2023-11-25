@extends('Layout.app')
@include('Components.hero')
@section('content')

@include('Components.about')
{{-- @include('Components.resume') --}}
@include('Components.projects')
@include('Components.services')
@include('Components.contact')

@endsection