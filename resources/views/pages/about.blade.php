@extends('layouts.app')

@section('title', 'Eresa Creative Studio - Eresa.id')
@section('meta_description', 'Eresa Creative Studio adalah unit bisnis dari Eresa.id yang menyediakan layanan desain grafis, web desain, video editing, dan multimedia lainnya.')
@section('body_style', 'padding-top: 0;')

@section('content')

@include('sections.about.hero')
@include('sections.about.aboutus')
@include('sections.about.layanan')
@include('sections.about.service')
@include('sections.about.cta')

@endsection