@extends('layouts.app')

@section('title', 'Home - Eresa.id')
@section('meta_description', 'Eresa.id adalah perusahaan yang bergerak di bidang teknologi informasi dan komunikasi. Kami menyediakan berbagai macam layanan yang dapat membantu Anda dalam mengembangkan bisnis Anda.')
@section('body_style', 'padding-top: 0;')

@section('content')

@include('sections.home.hero')
@include('sections.home.penawaran')
@include('sections.home.layanan')
@include('sections.home.portofolio')
@include('sections.home.customers')

@endsection