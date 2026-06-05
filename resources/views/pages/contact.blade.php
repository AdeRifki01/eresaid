@extends('layouts.app')

@section('title', 'Hubungi Kami - Eresa.id')
@section('meta_description', 'Hubungi Eresa.id untuk konsultasi proyek atau informasi lebih lanjut tentang layanan kami.')
@section('body_style', 'padding-top: 0;')

@section('content')
<div style="background-color: #f3f4f6; min-height: 120vh;">
    @include('sections.contact.hero')
    @include('sections.contact.form')
    @include('sections.contact.faq')
</div>
@endsection
