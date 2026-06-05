@extends('layouts.app')

@section('title', 'Pricing - Eresa.id')
@section('meta_description', 'Harga paket Eresa.id adalah kumpulan paket yang telah kami sediakan. Kami menyediakan berbagai macam layanan yang dapat membantu Anda dalam mengembangkan bisnis Anda.')
@section('body_style', 'padding-top: 0;')

@section('content')

@include('sections.pricing.hero')
@include('sections.pricing.social_media')
@include('sections.pricing.bundling')
@include('sections.pricing.promo')
@include('sections.pricing.photoshot')
@include('sections.pricing.faq')
@include('sections.pricing.cta')

@endsection