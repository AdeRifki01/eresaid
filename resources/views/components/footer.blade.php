<?php
$company_name = "@eresa.id";
$tagline      = "Eresa Creative Studio";
$address      = "Jl. Delima Raya Blok 8 No.5A Duren Sawit - Jakarta Timur 13450";
$map_link     = "https://maps.app.goo.gl/hknFGGRKnirRHVop6";
$email        = "info@eresa.id";
$phones       = ["+6285117618858"];
$social_media = [
    'facebook'  => 'https://www.facebook.com/share/17vxsWVbU2/?mibextid=wwXIfr',
    'instagram' => 'https://www.instagram.com/eresa_id?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==',
    'tiktok'    => 'https://www.tiktok.com/@eresa.creative.st?is_from_webapp=1&sender_device=pc'
];
$current_year = date("Y");
?>

<style>
/* === GIF Icon Wrapper === */
.gif-icon-wrap {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    border: 2.5px solid #3BC8C8;
    background: #ffffff;           /* background putih penuh */
    flex-shrink: 0;
    overflow: hidden;
    transition: border-color 0.3s, box-shadow 0.3s, transform 0.2s;
}

.gif-icon-wrap img {
    width: 26px;
    height: 26px;
    object-fit: contain;
    display: block;
    /* Saat idle: tampilkan sebagai grayscale agar terlihat "diam" */
    filter: grayscale(0%);
    transition: filter 0.2s;
}

/* Hover pada <a> — efek lingkaran dan icon */
a:hover .gif-icon-wrap,
a:focus .gif-icon-wrap {
    border-color: #2af4f4;
    box-shadow: 0 0 10px rgba(59, 200, 200, 0.6);
    transform: scale(1.1);
    background: #ffffff;
}

/* Title icon sedikit lebih besar */
.footer-title-link .gif-icon-wrap {
    width: 42px;
    height: 42px;
}

.footer-title-link .gif-icon-wrap img {
    width: 30px;
    height: 30px;
}
</style>

<footer class="footer-agency" style="background-image: url('{{ asset('assets/images/components/bgfooter.jpeg') }}'); background-size: cover; background-position: center; position: relative;">
    <div class="container">
        <div class="footer-main">
            <div class="row g-4 text-center text-lg-start justify-content-center">

                <!-- Brand/Logo -->
                <div class="col-12 col-lg-4 px-3 footer-reveal footer-delay-1 d-flex flex-column align-items-center">
                    <div class="mb-3">
                        <img src="{{ asset('assets/images/eresa/Logo_putih.png') }}" alt="Eresa.id" style="width: 100px; height: auto;">
                    </div>
                    <div class="footer-social justify-content-center">
                        <a href="{{ $social_media['facebook'] }}" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="{{ $social_media['instagram'] }}" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="{{ $social_media['tiktok'] }}" target="_blank"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>

                <!-- Kolom Home -->
                <div class="col-6 col-lg-3 px-3 footer-reveal footer-delay-2">
                    <div class="d-inline-block text-start">
                        <h5 class="footer-title-link-style mb-3">
                            <a href="/" class="footer-title-link d-flex align-items-center gap-2 gif-link">
                                <span class="gif-icon-wrap">
                                    <img class="gif-img" data-src="{{ asset('assets/images/icon/footer/Home.gif') }}" src="{{ asset('assets/images/icon/footer/Home.gif') }}" alt="Home">
                                </span>
                                <div>Home</div>
                            </a>
                        </h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a href="/about" class="d-flex align-items-center gap-2 gif-link">
                                    <span class="gif-icon-wrap">
                                        <img class="gif-img" data-src="{{ asset('assets/images/icon/footer/rocket_6172512.gif') }}" src="{{ asset('assets/images/icon/footer/rocket_6172512.gif') }}" alt="About">
                                    </span>
                                    <div>About Us</div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="/rebootcom" class="d-flex align-items-center gap-2 gif-link">
                                    <span class="gif-icon-wrap">
                                        <img class="gif-img" data-src="{{ asset('assets/images/icon/footer/Rebootcom.gif') }}" src="{{ asset('assets/images/icon/footer/Rebootcom.gif') }}" alt="Reboot Com">
                                    </span>
                                    <div>Reboot Com</div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="/portofolio" class="d-flex align-items-center gap-2 gif-link">
                                    <span class="gif-icon-wrap">
                                        <img class="gif-img" data-src="{{ asset('assets/images/icon/footer/Home.gif') }}" src="{{ asset('assets/images/icon/footer/Portofolio.gif') }}" alt="Portofolio">
                                    </span>
                                    <div>Portofolio</div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="/pricing" class="d-flex align-items-center gap-2 gif-link">
                                    <span class="gif-icon-wrap">
                                        <img class="gif-img" data-src="{{ asset('assets/images/icon/footer/Price.gif') }}" src="{{ asset('assets/images/icon/footer/Price.gif') }}" alt="Price">
                                    </span>
                                    <div>Pricing</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Kolom Contact -->
                <div class="col-6 col-lg-4 px-3 footer-reveal footer-delay-3">
                    <div class="d-inline-block text-start">
                        <h5 class="footer-title-link-style mb-3">
                            <a href="/contact" class="footer-title-link d-flex align-items-center gap-2 gif-link">
                                <span class="gif-icon-wrap">
                                    <img class="gif-img" data-src="{{ asset('assets/images/icon/footer/Contact.gif') }}" src="{{ asset('assets/images/icon/footer/Contact.gif') }}" alt="Contact">
                                </span>
                                <div>Contact</div>
                            </a>
                        </h5>
                        <ul class="list-unstyled">
                            @foreach($phones as $phone)
                            <li class="mb-2">
                                <a href="https://wa.me/{{ $phone }}" target="_blank" class="d-flex align-items-center gap-2 gif-link">
                                    <span class="gif-icon-wrap">
                                        <img class="gif-img" data-src="{{ asset('assets/images/icon/footer/Whatsapp.gif') }}" src="{{ asset('assets/images/icon/footer/Whatsapp.gif') }}" alt="WhatsApp">
                                    </span>
                                    <div>{{ $phone }}</div>
                                </a>
                            </li>
                            @endforeach
                            <li class="mb-2">
                                <a href="mailto:{{ $email }}" class="d-flex align-items-center gap-2 gif-link">
                                    <span class="gif-icon-wrap">
                                        <img class="gif-img" data-src="{{ asset('assets/images/icon/footer/Email.gif') }}" src="{{ asset('assets/images/icon/footer/Email.gif') }}" alt="Email">
                                    </span>
                                    <div>{{ $email }}</div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ $map_link }}" target="_blank" class="d-flex align-items-start gap-2 gif-link">
                                    <span class="gif-icon-wrap" style="margin-top: 2px;">
                                        <img class="gif-img" data-src="{{ asset('assets/images/icon/footer/Alamat.gif') }}" src="{{ asset('assets/images/icon/footer/Alamat.gif') }}" alt="Alamat">
                                    </span>
                                    <div style="line-height: 1.4;">{!! nl2br(e(str_replace(' - ', "\n", $address))) !!}</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>

<!-- BOTTOM COPYRIGHT -->
<div class="footer-bottom">
    <div class="container">
        <p>
            <a href="#" style="text-decoration: none; color: inherit; cursor: pointer;">
                © {{ $company_name }} - All Rights Reserved
            </a>
        </p>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {

    /* ── Intersection Observer: footer reveal ── */
    const footerReveal = document.querySelectorAll('.footer-reveal');
    const footerObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add('active');
        });
    }, { threshold: 0.2 });
    footerReveal.forEach(el => footerObserver.observe(el));

    /* ── GIF: play on hover (restart animation) ── */
    document.querySelectorAll('.gif-link').forEach(link => {
        link.addEventListener('mouseenter', () => {
            const img = link.querySelector('.gif-img');
            if (!img) return;
            const src = img.getAttribute('data-src');
            // Tambah timestamp agar browser reload & GIF mulai dari frame 1
            img.src = src + '?t=' + Date.now();
        });
        link.addEventListener('mouseleave', () => {
            // Biarkan GIF tetap jalan sampai selesai — tidak perlu reset
            // Kalau ingin berhenti saat mouse keluar, uncomment baris di bawah:
            // const img = link.querySelector('.gif-img');
            // if (img) img.src = '';
        });
    });

});
</script>
