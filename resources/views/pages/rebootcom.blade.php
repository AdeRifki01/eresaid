@extends('layouts.app')

@section('title', 'Rebootcom - Coming Soon')

@section('content')
<style>
    .coming-soon-simple {
        min-height: 110vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 4rem 1rem;
    }
    
    .coming-soon-icon {
        font-size: 4rem;
        color: #3e85f4;
        margin-bottom: 1.5rem;
    }
    
    .coming-soon-title {
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 1rem;
    }
    
    .coming-soon-text {
        color: #64748b;
        font-size: 1.1rem;
        max-width: 500px;
        margin: 0 auto 2rem auto;
        line-height: 1.6;
    }
    
    .btn-return {
        background: #3e85f4;
        color: white;
        padding: 0.75rem 2rem;
        border-radius: 50px;
        font-weight: 500;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        transition: all 0.3s ease;
    }
    
    .btn-return:hover {
        background: #2b6cb0;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(62, 133, 244, 0.2);
    }
</style>

<section class="coming-soon-simple">
    <div class="container">
        <div class="coming-soon-icon">
            <i class="bi bi-tools"></i>
        </div>
        <h1 class="coming-soon-title">Segera Hadir</h1>
        <p class="coming-soon-text">
            Halaman <strong>Rebootcom</strong> sedang dalam tahap pengembangan. Kami sedang menyiapkan layanan terbaik untuk Anda. Silakan kunjungi kembali nanti.
        </p>
        <a href="{{ url('/') }}" class="btn-return">
            <i class="bi bi-arrow-left me-2"></i> Kembali ke Beranda
        </a>
    </div>
</section>

@endsection