@extends('layouts.app')

@section('title', 'Portfolio - Eresa.id')
@section('meta_description', 'Portofolio Eresa.id adalah kumpulan karya yang telah kami hasilkan. Kami menyediakan berbagai macam layanan yang dapat membantu Anda dalam mengembangkan bisnis Anda.')

@section('content')

@include('sections.portofolio.gallery')
@include('sections.portofolio.video')
@include('sections.portofolio.cta')

@endsection