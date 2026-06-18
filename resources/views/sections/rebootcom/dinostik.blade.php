<!-- SYSTEM MONITOR SHOWCASE SECTION -->
<section id="system-monitor" class="showcase-section py-5">
    <div class="container">
        
        <!-- Section Header -->
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-8 reveal">
                <span class="badge-premium mb-3">REBOOTCOM SYSTEM MONITOR</span>
                <h2 class="section-title mb-3">
                    Pantau & Optimalkan <span class="text-danger">Kinerja PC Anda</span>
                </h2>
                <p class="section-desc">
                    Aplikasi komprehensif untuk mendiagnosis perangkat keras dan perangkat lunak secara mandiri.
                </p>
            </div>
        </div>

        <div class="row gy-5 position-relative">
            <!-- Left Column: Sticky Image Mockup -->
            <div class="col-lg-7">
                <div class="sticky-mockup-wrapper reveal">
                    <div class="glass-mockup-frame">
                        <video autoplay loop muted playsinline class="img-fluid w-100 rounded-3 shadow-lg" id="showcase-video">
                            <source src="{{ asset('assets/images/rebootcom/dashboard/dashboard-demo.mp4') }}" type="video/mp4">
                            Browser Anda tidak mendukung tag video.
                        </video>
                    </div>
                </div>
            </div>

            <!-- Right Column: Scrolling Feature Cards -->
            <div class="col-lg-5 ps-lg-4 scrolling-cards-wrapper">
                
                <!-- Card 1: Top Metrics -->
                <div class="showcase-card reveal reveal-delay-2">
                    <div class="card-icon">
                        <i class="bi bi-speedometer text-danger"></i>
                    </div>
                    <h4>Top Metrics & Optimization</h4>
                    <p>Pemantauan instan metrik utama perangkat Anda (CPU, RAM, GPU, Baterai) agar selalu terkendali. Lengkap dengan fitur <strong>Quick Boost</strong> untuk membersihkan memori dengan satu klik.</p>
                </div>

                <!-- Card 2: Eresa Integration -->
                <div class="showcase-card reveal">
                    <div class="card-icon">
                        <i class="bi bi-megaphone-fill text-primary"></i>
                    </div>
                    <h4>Ruang Informasi Spesial</h4>
                    <p>Mendukung ekosistem digital terintegrasi melalui informasi layanan dari <strong>Eresa Creative Studio</strong>. Pantau kinerja sekaligus temukan solusi pengembangan bisnis.</p>
                </div>

                <!-- Card 3: System Summary -->
                <div class="showcase-card reveal">
                    <div class="card-icon">
                        <i class="bi bi-pc-display"></i>
                    </div>
                    <h4>System Summary</h4>
                    <p>Dapatkan informasi detail mengenai spesifikasi perangkat keras dan sistem operasi Anda. Mulai dari Hostname, versi OS, hingga nama model prosesor secara terperinci.</p>
                </div>

                <!-- Card 4: Temperatures -->
                <div class="showcase-card reveal">
                    <div class="card-icon">
                        <i class="bi bi-thermometer-half text-warning"></i>
                    </div>
                    <h4>Live Temperatures & Metrics</h4>
                    <p>Jangan biarkan komponen Anda <strong>overheat</strong>. Pantau suhu CPU dan Motherboard secara <em>real-time</em> beserta frekuensi prosesor dan metrik <em>thread</em> inti secara langsung.</p>
                </div>

                <!-- Card 5: Advanced Monitoring -->
                <div class="showcase-card reveal mb-0">
                    <div class="card-icon">
                        <i class="bi bi-hdd-network-fill text-success"></i>
                    </div>
                    <h4>Advanced Monitoring</h4>
                    <p>Analisis mendalam mengenai sisa kapasitas penyimpanan (partisi C: & D:), rincian pemakaian memori, beban pemrosesan GPU, hingga kecepatan jaringan (Download/Upload).</p>
                </div>
            </div>
        </div>

        @include('sections.rebootcom.menu-dinostik')
    </div>
</section>
