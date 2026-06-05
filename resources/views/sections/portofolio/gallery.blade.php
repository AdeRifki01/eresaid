<!-- GALLERY -->
    <section class="d-flex align-items-center" style="min-height:100vh; padding-top:10px; background-color: #ffffff;">
        <div class="container" style="margin-top:100px;">
            <h2 class="text-center fw-bold mb-2 reveal">Gallery</h2>
    <!-- FILTER BUTTON -->
            <div class="text-center mb-4 reveal reveal-delay-1">
                <button class="btn border-0 bg-transparent fw-bold me-3 filter-btn active-btn"
                    onclick="filterGallery('all', this)">
                    All
                </button>

                <button class="btn border-0 bg-transparent me-3 filter-btn"
                    onclick="filterGallery('eresa', this)">
                    Eresa
                </button>

                <button class="btn border-0 bg-transparent filter-btn"
                    onclick="filterGallery('feed', this)">
                    Feed
                </button>
            </div>

<!-- GRID -->
            <div class="row g-3">
<!-- ERESA -->
                <div class="col-6 col-md-4 col-lg-3 gallery-item eresa reveal reveal-delay-2">
                    <div class="gallery-card">
                        <img src="assets/images/portofolio/Porto_1.webp" class="gallery-img">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item eresa reveal reveal-delay-3">
                    <div class="gallery-card">
                        <img src="assets/images/portofolio/Porto_4.jpg" class="gallery-img">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item eresa reveal reveal-delay-4">
                    <div class="gallery-card">
                        <img src="assets/images/portofolio/Porto_3.jpg" class="gallery-img">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item eresa reveal reveal-delay-5">
                    <div class="gallery-card">
                        <img src="assets/images/portofolio/Porto_2.webp" class="gallery-img">
                    </div>
                </div>

<!-- FEED -->
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed reveal reveal-delay-2">
                    <div class="gallery-card">
                        <img src="assets/images/produk/jamuin1.png" class="gallery-img">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed reveal reveal-delay-3">
                    <div class="gallery-card">
                        <img src="assets/images/produk/MestiMinum.png" class="gallery-img">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed reveal reveal-delay-4">
                    <div class="gallery-card">
                        <img src="assets/images/produk/reboot1.png" class="gallery-img">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed reveal reveal-delay-5">
                    <div class="gallery-card">
                        <img src="assets/images/produk/reboot2.png" class="gallery-img">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed reveal reveal-delay-6">
                    <div class="gallery-card">
                        <img src="assets/images/produk/almaz1.png" class="gallery-img">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed reveal reveal-delay-1">
                    <div class="gallery-card">
                        <img src="assets/images/produk/almaz2.png" class="gallery-img">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed reveal reveal-delay-2">
                    <div class="gallery-card">
                        <img src="assets/images/produk/Totoro1.png" class="gallery-img">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed reveal reveal-delay-3">
                    <div class="gallery-card">
                        <img src="assets/images/produk/jamuin2.png" class="gallery-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- SCRIPT FILTER GALLERY -->
<script>
    function filterGallery(category, btn) {
        // 1. Ubah gaya tombol yang aktif (tebalkan teks)
        document.querySelectorAll('.filter-btn').forEach(b => {
            b.classList.remove('fw-bold');
            // Jika ada indikator lain seperti garis bawah, bisa dihapus di sini
        }); 
        btn.classList.add('fw-bold');

        // 2. Lakukan filter pada item galeri
        const items = document.querySelectorAll('.gallery-item');
        items.forEach(item => {
            // Sembunyikan semua item dulu secara visual agar transisi rapi
            item.style.opacity = '0';
            item.style.transform = 'scale(0.95)';
            
            setTimeout(() => {
                if (category === 'all' || item.classList.contains(category)) {
                    item.style.display = 'block';
                    // Tampilkan kembali dengan animasi ringan
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                        item.style.transition = 'all 0.4s ease-in-out';
                    }, 50);
                } else {
                    item.style.display = 'none';
                }
            }, 300); // Waktu yang sama dengan durasi transisi menghilang
        });
    }
</script>
