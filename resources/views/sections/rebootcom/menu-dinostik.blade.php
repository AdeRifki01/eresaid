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
                                <p class="text-muted">Dapatkan gambaran komprehensif tentang kesehatan "otak" komputer Anda.
                                    Fitur ini menyajikan pemakaian secara akurat dan mengidentifikasi <strong>bottleneck</strong> secara otomatis.</p>
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
                                <p class="text-muted">Pantau penggunaan memori secara mendalam. Lihat porsi memori yang terpakai untuk memastikan PC Anda tetap lancar saat <strong>multitasking</strong>.</p>
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
                                <p class="text-muted">Sangat penting untuk <strong>gamer</strong> dan <strong>creator</strong>. Menu ini memantau kinerja <strong>Graphics Card</strong> Anda, memastikan performa <strong>rendering</strong> optimal tanpa <strong>overheating</strong>.</p>
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
                                <p class="text-muted">Periksa kapasitas <strong>Hardisk</strong> atau <strong>SSD</strong> Anda. Pantau ruang yang tersisa pada partisi utama dan kelola file sistem Anda dengan lebih baik.</p>
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
                                <p class="text-muted">Akses cepat ke utilitas sistem yang berguna untuk mengatasi masalah ringan (<strong>troubleshooting</strong>), mempercepat pemeliharaan, dan mengatur <strong>startup</strong> PC Anda.</p>
                            </div>
                            <div class="col-md-7">
                                <img src="{{ asset('assets/images/rebootcom/dashboard/tools.png') }}" class="img-fluid rounded-3 shadow-lg" alt="Tools Feature">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
