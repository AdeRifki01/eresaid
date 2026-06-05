<?php
// Konfigurasi Data Footer (Bisa dipindah ke file config.php)
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

<footer class="footer-agency" style="background-image: url('{{ asset('assets/images/components/bgfooter.png') }}'); background-size: cover; background-position: center; position: relative;">
    <div class="container">
        <!-- Main Footer -->
        <div class="footer-main">
            <!-- Tetap gunakan justify-content-center untuk row utama -->
            <div class="row g-4 text-center text-lg-start justify-content-center">      
                <!-- Brand/Logo (Full width di mobile agar di atas) -->
                <div class="col-12 col-lg-3 px-3 footer-reveal footer-delay-1">
                    <div class="mb-4">
                        <img src="{{ asset('assets/images/eresa/Logo_putih.png') }}" alt="Eresa.id" style="width: 140px; height: auto;">
                    </div>
                    <div class="footer-social">
                        <a href="{{ $social_media['facebook'] }}" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="{{ $social_media['instagram'] }}" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="{{ $social_media['tiktok'] }}" target="_blank"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>

                <!-- Kolom Home -->
                <div class="col-6 col-lg-3 px-3 footer-reveal footer-delay-2">
                    <div class="d-inline-block text-start">
                        <h5 class="footer-title-link-style mb-3">
                            <a href="/" class="footer-title-link d-flex align-items-center">
                                <div style="width: 25px;"><i class="bi bi-house-door"></i></div>
                                <div>Home</div>
                            </a>
                        </h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a href="/about" class="d-flex align-items-center">
                                    <div style="width: 25px;"><i class="bi bi-info-circle"></i></div>
                                    <div>About Us</div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="/rebootcom" class="d-flex align-items-center">
                                    <div style="width: 25px;"><i class="bi bi-pc-display"></i></div>
                                    <div>Reboot Com</div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="/portofolio" class="d-flex align-items-center">
                                    <div style="width: 25px;"><i class="bi bi-images"></i></div>
                                    <div>Portofolio</div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="/pricing" class="d-flex align-items-center">
                                    <div style="width: 25px;"><i class="bi bi-currency-dollar"></i></div>
                                    <div>Price</div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="/contact" class="d-flex align-items-center">
                                    <div style="width: 25px;"><i class="bi bi-telephone"></i></div>
                                    <div>Contact</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Kolom Contact (Gunakan col-6 agar bersebelahan dengan Home) -->
                <div class="col-6 col-lg-4 px-3 footer-reveal footer-delay-3">
                    <div class="d-inline-block text-start">
                        <h5 class="footer-title-link-style mb-3">
                            <a href="/contact" class="footer-title-link d-flex align-items-center">
                                <div style="width: 25px;"><i class="bi bi-telephone"></i></div>
                                <div>Contact</div>
                            </a>
                        </h5>
                        <ul class="list-unstyled">
                            @foreach($phones as $phone)
                            <li class="mb-2">
                                <a href="https://wa.me/{{ $phone }}" target="_blank" class="d-flex align-items-center">
                                    <div style="width: 25px;"><i class="bi bi-whatsapp"></i></div>
                                    <div>{{ $phone }}</div>
                                </a>
                            </li>
                            @endforeach
                            <li class="mb-2">
                                <a href="mailto:{{ $email }}" class="d-flex align-items-center">
                                    <div style="width: 25px;"><i class="bi bi-envelope-at"></i></div>
                                    <div>{{ $email }}</div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ $map_link }}" target="_blank" class="d-flex align-items-start">
                                    <div style="width: 25px; padding-top: 2px;"><i class="bi bi-geo-alt"></i></div>
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
    const footerReveal = document.querySelectorAll('.footer-reveal');
    const footerObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                entry.target.classList.add('active');
            }
        });
    }, {
        threshold: 0.2
    });
    footerReveal.forEach(el => footerObserver.observe(el));
    });
</script>