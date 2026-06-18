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
                    <p>Jangan biarkan komponen Anda *overheat*. Pantau suhu CPU dan Motherboard secara <em>real-time</em> beserta frekuensi prosesor dan metrik <em>thread</em> inti secara langsung.</p>
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

        <!-- Interactive Feature Tabs -->
        <div class="row mt-5 pt-5 justify-content-center">
            <div class="col-lg-10 text-center reveal">
                <h3 class="mb-4 fw-bold">Eksplorasi Menu Spesifik</h3>
                
                <!-- Tab Navigation -->
                <ul class="nav feature-nav-tabs justify-content-center mb-5" id="featureTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="cpu-tab" data-bs-toggle="tab" data-bs-target="#cpu-pane" type="button" role="tab">CPU</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ram-tab" data-bs-toggle="tab" data-bs-target="#ram-pane" type="button" role="tab">RAM</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="gpu-tab" data-bs-toggle="tab" data-bs-target="#gpu-pane" type="button" role="tab">GPU</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="storage-tab" data-bs-toggle="tab" data-bs-target="#storage-pane" type="button" role="tab">Storage</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="battery-tab" data-bs-toggle="tab" data-bs-target="#battery-pane" type="button" role="tab">Battery</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tools-tab" data-bs-toggle="tab" data-bs-target="#tools-pane" type="button" role="tab">Tools</button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="featureTabContent">
                    <!-- CPU Pane -->
                    <div class="tab-pane fade show active" id="cpu-pane" role="tabpanel" tabindex="0">
                        <div class="row align-items-center text-start">
                            <div class="col-md-5 mb-4 mb-md-0 pe-md-4">
                                <h4 class="fw-bold mb-3">Analisis Performa Prosesor</h4>
                                <p class="text-muted">Dapatkan gambaran komprehensif tentang kesehatan "otak" komputer Anda. Fitur ini menyajikan pemakaian secara akurat dan mengidentifikasi *bottleneck* secara otomatis.</p>
                            </div>
                            <div class="col-md-7">
                                <img src="{{ asset('assets/images/rebootcom/dashboard/cpu.png') }}" class="img-fluid rounded-3 shadow-lg" alt="CPU Feature">
                            </div>
                        </div>
                    </div>
                    
                    <!-- RAM Pane -->
                    <div class="tab-pane fade" id="ram-pane" role="tabpanel" tabindex="0">
                        <div class="row align-items-center text-start">
                            <div class="col-md-5 mb-4 mb-md-0 pe-md-4">
                                <h4 class="fw-bold mb-3">Optimalisasi Memori</h4>
                                <p class="text-muted">Pantau penggunaan memori secara mendalam. Lihat porsi memori yang terpakai untuk memastikan PC Anda tetap lancar saat *multitasking*.</p>
                            </div>
                            <div class="col-md-7">
                                <img src="{{ asset('assets/images/rebootcom/dashboard/ram.png') }}" class="img-fluid rounded-3 shadow-lg" alt="RAM Feature">
                            </div>
                        </div>
                    </div>
                    
                    <!-- GPU Pane -->
                    <div class="tab-pane fade" id="gpu-pane" role="tabpanel" tabindex="0">
                        <div class="row align-items-center text-start">
                            <div class="col-md-5 mb-4 mb-md-0 pe-md-4">
                                <h4 class="fw-bold mb-3">Pemantauan Grafis</h4>
                                <p class="text-muted">Sangat penting untuk *gamer* dan *creator*. Menu ini memantau kinerja *Graphics Card* Anda, memastikan performa *rendering* optimal tanpa *overheating*.</p>
                            </div>
                            <div class="col-md-7">
                                <img src="{{ asset('assets/images/rebootcom/dashboard/gpu.png') }}" class="img-fluid rounded-3 shadow-lg" alt="GPU Feature">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Storage Pane -->
                    <div class="tab-pane fade" id="storage-pane" role="tabpanel" tabindex="0">
                        <div class="row align-items-center text-start">
                            <div class="col-md-5 mb-4 mb-md-0 pe-md-4">
                                <h4 class="fw-bold mb-3">Kesehatan Penyimpanan</h4>
                                <p class="text-muted">Periksa kapasitas *Hardisk* atau *SSD* Anda. Pantau ruang yang tersisa pada partisi utama dan kelola file sistem Anda dengan lebih baik.</p>
                            </div>
                            <div class="col-md-7">
                                <img src="{{ asset('assets/images/rebootcom/dashboard/storage.png') }}" class="img-fluid rounded-3 shadow-lg" alt="Storage Feature">
                            </div>
                        </div>
                    </div>

                    <!-- Battery Pane -->
                    <div class="tab-pane fade" id="battery-pane" role="tabpanel" tabindex="0">
                        <div class="row align-items-center text-start">
                            <div class="col-md-5 mb-4 mb-md-0 pe-md-4">
                                <h4 class="fw-bold mb-3">Siklus & Umur Baterai</h4>
                                <p class="text-muted">Khusus pengguna laptop, ketahui status pemakaian daya, kapasitas optimal, dan pantau indikator pengisian daya agar baterai lebih awet.</p>
                            </div>
                            <div class="col-md-7">
                                <img src="{{ asset('assets/images/rebootcom/dashboard/battery.png') }}" class="img-fluid rounded-3 shadow-lg" alt="Battery Feature">
                            </div>
                        </div>
                    </div>

                    <!-- Tools Pane -->
                    <div class="tab-pane fade" id="tools-pane" role="tabpanel" tabindex="0">
                        <div class="row align-items-center text-start">
                            <div class="col-md-5 mb-4 mb-md-0 pe-md-4">
                                <h4 class="fw-bold mb-3">Kumpulan Alat Cerdas</h4>
                                <p class="text-muted">Akses cepat ke utilitas sistem yang berguna untuk mengatasi masalah ringan (*troubleshooting*), mempercepat pemeliharaan, dan mengatur *startup* PC Anda.</p>
                            </div>
                            <div class="col-md-7">
                                <img src="{{ asset('assets/images/rebootcom/dashboard/tools.png') }}" class="img-fluid rounded-3 shadow-lg" alt="Tools Feature">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
