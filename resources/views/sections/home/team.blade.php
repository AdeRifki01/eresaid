<section class="eresa-team py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="team-title fw-bold">Eresa Team</h2>
            <p class="team-tagline fst-italic text-muted">"Orang-Orang Di Balik Karya Terbaik Kami."</p>
        </div>

        <div class="row g-4 justify-content-center">

            <div class="col-6 col-md-4 col-lg-2 text-center team-reveal team-delay-1">
                <div class="team-card">
                    <div class="team-photo-wrap">
                        <img src="{{ asset('assets/images/team/Dedi_PH.png') }}" alt="Dedi P Hutahaean" class="team-photo">
                        <div class="team-overlay">
                            <span class="team-overlay-role">COO</span>
                        </div>
                    </div>
                    <div class="team-info mt-3">
                        <h6 class="team-name mb-0">Dedi P Hutahaean</h6>
                        <span class="team-role">COO</span>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-2 text-center team-reveal team-delay-2">
                <div class="team-card">
                    <div class="team-photo-wrap">
                        <img src="{{ asset('assets/images/team/JB_Avon.png') }}" alt="JB. Avon" class="team-photo">
                        <div class="team-overlay">
                            <span class="team-overlay-role">HRGA Head</span>
                        </div>
                    </div>
                    <div class="team-info mt-3">
                        <h6 class="team-name mb-0">JB. Avon</h6>
                        <span class="team-role">HRGA Head</span>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-2 text-center team-reveal team-delay-3">
                <div class="team-card">
                    <div class="team-photo-wrap">
                        <img src="{{ asset('assets/images/team/Ikin.png') }}" alt="Ikin Sodikin" class="team-photo">
                        <div class="team-overlay">
                            <span class="team-overlay-role">S&M Head</span>
                        </div>
                    </div>
                    <div class="team-info mt-3">
                        <h6 class="team-name mb-0">Ikin Sodikin</h6>
                        <span class="team-role">S&M Head</span>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-2 text-center team-reveal team-delay-4">
                <div class="team-card">
                    <div class="team-photo-wrap">
                        <img src="{{ asset('assets/images/team/Shihand.png') }}" alt="Shihandari" class="team-photo">
                        <div class="team-overlay">
                            <span class="team-overlay-role">Marketing Mgr</span>
                        </div>
                    </div>
                    <div class="team-info mt-3">
                        <h6 class="team-name mb-0">Shihandari</h6>
                        <span class="team-role">Marketing Mgr</span>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-2 text-center team-reveal team-delay-5">
                <div class="team-card">
                    <div class="team-photo-wrap">
                        <img src="{{ asset('assets/images/team/Agus.png') }}" alt="Agus Purnawan" class="team-photo">
                        <div class="team-overlay">
                            <span class="team-overlay-role">Production Mgr</span>
                        </div>
                    </div>
                    <div class="team-info mt-3">
                        <h6 class="team-name mb-0">Agus Purnawan</h6>
                        <span class="team-role">Production Mgr</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
.eresa-team {
    background: linear-gradient(135deg, #eef2ff 0%, #f0f4ff 60%, #e8f0fe 100%);
    position: relative;
    overflow: hidden;
}

.eresa-team::before {
    content: '';
    position: absolute;
    top: -80px;
    right: -80px;
    width: 320px;
    height: 320px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(61,107,222,0.08) 0%, transparent 70%);
    pointer-events: none;
}

.eresa-team::after {
    content: '';
    position: absolute;
    bottom: -60px;
    left: -60px;
    width: 240px;
    height: 240px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(99,102,241,0.07) 0%, transparent 70%);
    pointer-events: none;
}

.team-title {
    font-size: 2rem;
    color: #1a1a2e;
    position: relative;
    display: inline-block;
}

.team-title::after {
    content: '';
    display: block;
    width: 48px;
    height: 3px;
    background: linear-gradient(90deg, #3d6bde, #6366f1);
    border-radius: 2px;
    margin: 8px auto 0;
}

.team-tagline {
    font-size: 0.95rem;
    color: #6c757d;
}

/* Card */
.team-card {
    transition: transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
    cursor: default;
}

.team-card:hover {
    transform: translateY(-10px);
}

/* Photo wrap dengan overlay */
.team-photo-wrap {
    width: 130px;
    height: 130px;
    margin: 0 auto;
    border-radius: 50%;
    overflow: hidden;
    position: relative;
    border: 3px solid transparent;
    background: linear-gradient(white, white) padding-box,
                linear-gradient(135deg, #3d6bde, #6366f1, #a855f7) border-box;
    box-shadow: 0 6px 24px rgba(61, 107, 222, 0.25);
    transition: box-shadow 0.3s ease, transform 0.3s ease;
}

.team-card:hover .team-photo-wrap {
    box-shadow: 0 10px 36px rgba(61, 107, 222, 0.38);
    transform: scale(1.05);
}

.team-photo {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top;
    transition: transform 0.4s ease;
}

.team-card:hover .team-photo {
    transform: scale(1.08);
}

/* Overlay saat hover */
.team-overlay {
    position: absolute;
    inset: 0;
    border-radius: 50%;
    background: linear-gradient(160deg, rgba(61,107,222,0.82), rgba(99,102,241,0.88));
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.team-card:hover .team-overlay {
    opacity: 1;
}

.team-overlay-role {
    color: #ffffff;
    font-size: 0.78rem;
    font-weight: 700;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    text-align: center;
    padding: 0 8px;
}

/* Info */
.team-info {
    position: relative;
}

.team-name {
    font-size: 0.88rem;
    font-weight: 700;
    color: #1a1a2e;
    transition: color 0.3s ease;
}

.team-card:hover .team-name {
    color: #3d6bde;
}

.team-role {
    font-size: 0.75rem;
    color: #6366f1;
    font-weight: 600;
    letter-spacing: 0.04em;
    background: rgba(99,102,241,0.1);
    padding: 2px 10px;
    border-radius: 20px;
    display: inline-block;
    margin-top: 4px;
}

/* Reveal animation — masuk dari bawah + fade */
.team-reveal {
    opacity: 0;
    transform: translateY(40px) scale(0.95);
    transition: opacity 0.6s ease, transform 0.6s cubic-bezier(0.34, 1.3, 0.64, 1);
}

.team-reveal.active {
    opacity: 1;
    transform: translateY(0) scale(1);
}

.team-delay-1 { transition-delay: 0.1s; }
.team-delay-2 { transition-delay: 0.2s; }
.team-delay-3 { transition-delay: 0.3s; }
.team-delay-4 { transition-delay: 0.4s; }
.team-delay-5 { transition-delay: 0.5s; }

/* Mobile */
@media (max-width: 576px) {
    .team-photo-wrap {
        width: 100px;
        height: 100px;
    }
    .team-name {
        font-size: 0.8rem;
    }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const teamCards = document.querySelectorAll('.team-reveal');
    const teamObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.15 });
    teamCards.forEach(el => teamObserver.observe(el));
});
</script>
