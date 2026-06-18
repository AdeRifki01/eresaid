<!-- CONTACT FORM & MAP SECTION -->
<section class="container mb-5 contact-form-wrapper" style="position: relative; z-index: 10;">
    <div class="bg-white rounded-5 shadow p-4 p-md-5 mx-auto contact-form-inner reveal" style="max-width: 900px;">
        <div class="row g-5">
            
            <!-- KIRI: Form -->
            <div class="col-lg-6 pe-lg-4">
                <h2 class="fw-bold text-dark mb-3">Get In Touch</h2>
                <p class="text-dark small mb-4" style="line-height: 1.6;">
                    Have questions or need help with your digital project?
                    Our team is always ready to assist you.
                </p>

                {{-- Container untuk notifikasi JavaScript --}}
                <div id="notifContainer"></div>

                <form id="contactForm">
                    @csrf
                    <div class="mb-3">
                        <input type="text" id="name" name="name" placeholder="Name" required class="form-control form-control rounded-4 px-4 py-2">
                    </div>
                    <div class="mb-3">
                        <input type="email" id="email" name="email" placeholder="Email" required class="form-control form-control rounded-4 px-4 py-2">
                    </div>
                    <div class="mb-3">
                        <input type="text" id="phone" name="phone" placeholder="Phone number" class="form-control form-control rounded-4 px-4 py-2">
                    </div>
                    <div class="mb-3">
                        <input type="text" id="company" name="company" placeholder="Company name" class="form-control form-control rounded-4 px-4 py-2">
                    </div>
                    <div class="mb-4">
                        <textarea id="message" name="message" placeholder="Message" rows="3" required class="form-control rounded-4 px-4 py-2" style="height: auto; resize: none;"></textarea>
                    </div>
                    <div class="d-flex gap-3">
                        <button type="submit" id="submitBtn" class="btn text-white rounded-4 py-2 fw-bold w-100" style="background-color: #3e85f4; transition: 0.3s;"
                        onmouseover="this.style.backgroundColor='#3e85f4'"
                        onmouseout="this.style.backgroundColor='#3e85f4'">Send</button>
                        
                        <button type="reset" class="btn btn-outline-secondary rounded-4 py-2 fw-bold w-100">Reset</button>
                    </div>
                </form>
            </div>

            <!-- KANAN: Map & Contact Info -->
            <div class="col-lg-6 ps-lg-4 d-flex flex-column">
                <!-- Map -->
                <div class="map-container mb-2 flex-grow-1" style="min-height: 250px;">
                    <iframe 
                        src="https://www.google.com/maps?q=Jl.+Delima+Raya+Blok+8+No.5A+Duren+Sawit+Jakarta+Timur&output=embed" 
                        class="w-100 h-100 rounded-4" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>

                <!-- Contact Details -->
                <div class="contact-details mt-3 w-100 d-flex flex-column align-items-start" style="text-align: left;">
                    <!-- Alamat -->
                    <div class="d-flex align-items-center mb-1 w-100" style="justify-content: flex-start !important;">
                        <div class="icon-box me-3 flex-shrink-0" style="margin-top: 4px;">
                            <i class="bi bi-geo-alt fs-5"></i>
                        </div>
                        <a href="https://maps.app.goo.gl/hknFGGRKnirRHVop6" target="_blank" rel="noopener noreferrer" class="text-dark small text-decoration-none fw-medium m-0 d-block text-start" style="line-height: 1.5; width: 100%;">
                            Jl. Delima Raya Blok 8 No.5A,
                            Duren Sawit, Jakarta Timur, 13450
                        </a>
                    </div>
                    <!-- Email -->
                    <div class="d-flex align-items-center mb-1 w-100" style="justify-content: flex-start !important;">
                        <div class="icon-box me-3 flex-shrink-0" style="margin-top: 4px;">
                            <i class="bi bi-envelope fs-5"></i>
                        </div>
                        <a href="mailto:info@eresa.id" class="text-dark small text-decoration-none fw-medium m-0 d-block text-start" style="line-height: 1.2; width: 100%;">info@eresa.id</a>
                    </div>
                    <!-- WhatsApp -->
                    <div class="d-flex align-items-center w-100" style="justify-content: flex-start !important;">
                        <div class="icon-box me-3 flex-shrink-0" style="margin-top: 4px;">
                            <i class="bi bi-telephone fs-5"></i>
                        </div>
                        <a href="https://wa.me/6285117618858?text=Hai%20Admin%20Eresa%2C%20saya%20ingin%20berdiskusi%20langsung%2C%20apakah%20bisa%20meeting%20secara%20langsung%3F" target="_blank" rel="noopener noreferrer" class="text-dark small text-decoration-none fw-medium m-0 d-block text-start" style="line-height: 1.2; width: 100%;">+62 851-1761-8858</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const notifContainer = document.getElementById('notifContainer');

    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Mencegah form reload halaman

            // Ubah teks tombol jadi loading
            const originalBtnText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...';
            submitBtn.disabled = true;

            // Ambil data form
            const formData = new FormData(form);

            // Kirim data menggunakan Fetch API (AJAX)
            fetch('/contact/send', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => {
                // Laravel return JSON normally for AJAX request, but handle non-JSON if exception
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.status === 'success') {
                    // Tampilkan pesan sukses
                    notifContainer.innerHTML = `<div class="alert alert-success alert-dismissible fade show rounded-4" role="alert">
                        ${data.message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
                    form.reset(); // Kosongkan form
                } else {
                    // Tampilkan pesan error
                    notifContainer.innerHTML = `<div class="alert alert-danger alert-dismissible fade show rounded-4" role="alert">
                        ${data.message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
                }
            })
            .catch(error => {
                console.error('Error:', error);
                notifContainer.innerHTML = `<div class="alert alert-danger alert-dismissible fade show rounded-4" role="alert">
                    Terjadi kesalahan pada sistem. Silakan coba lagi.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>`;
            })
            .finally(() => {
                // Kembalikan tombol seperti semula
                submitBtn.innerHTML = originalBtnText;
                submitBtn.disabled = false;
            });
        });
    }
});
</script>
