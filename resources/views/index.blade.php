@extends('layout.index')
@section('container')
    <!-- Hero Section -->
    <section id="beranda" class="hero-section" style="background-image: url(https://masuk-ptn.com/images/product/368b1d936cf9be5ef1d7c936bc793c306655880f.jpg)">
        <div class="container text-center text-dark" style="margin-top: -100px;">
            <h1 class="display-3 mb-5">Developing Educotourism Villages for Climate Change Mitigation</h1>
            <a href="/registration" class="btn btn-danger btn-lg" style="margin-top: 100px;">Register Now</a>
        </div>
    </section>

    {{-- <section id="beranda" class="hero-section">
        <div id="heroCarousel" class="container carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://masuk-ptn.com/images/product/368b1d936cf9be5ef1d7c936bc793c306655880f.jpg" class="d-block w-100" alt="Image 1" style="height: 100vh; width: height: 100vh; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="https://www.itera.ac.id/wp-content/uploads/2020/01/3.jpg" class="d-block w-100" alt="Image 2" style="height: 100vh; width: height: 100vh; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="https://www.itera.ac.id/wp-content/uploads/2024/02/Gerbang-ITERA-Drone-2.jpg" class="d-block w-100" alt="Image 3" style="height: 100vh; width: height: 100vh; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="https://itrc.itera.ac.id/storage/Assets/Profil.jpeg" class="d-block w-100" alt="Image 4" style="height: 100vh; width: height: 100vh; object-fit: cover;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container text-center text-dark" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <h1 class="display-3 mb-5">Developing Educotourism Villages for Climate Change Mitigation</h1>
            <a href="/registration" class="btn btn-danger btn-lg" style="margin-top: 100px;">Register Now</a>
        </div>
    </section> --}}

    <!-- Tentang Section -->
    <section id="tentang" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Why International KKN?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card card h-100 p-4">
                        <div class="text-center mb-3">
                            <i class="fas fa-globe fa-3x text-danger"></i>
                        </div>
                        <h4 class="text-center">Global Experience</h4>
                        <p>Gain valuable experience in an international environment and learn about new cultures.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card card h-100 p-4">
                        <div class="text-center mb-3">
                            <i class="fas fa-handshake fa-3x text-danger"></i>
                        </div>
                        <h4 class="text-center">International Network</h4>
                        <p>Build connections with students and professionals from different countries.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card card h-100 p-4">
                        <div class="text-center mb-3">
                            <i class="fas fa-graduation-cap fa-3x text-danger"></i>
                        </div>
                        <h4 class="text-center">Self-development</h4>
                        <p>Improve soft skills and adaptability in an international environment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Negara Tujuan Section -->
    <section id="negara" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Contributing Countries</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="country-card card" style="position: relative;">
                        <img src="https://i.pinimg.com/736x/83/89/52/83895264750bf768114d2c65459641db.jpg" class="card-img-top" width="300" height="300">
                        <div class="card-img-overlay" style="position: absolute; top: 55%; left: 53%; transform: translate(-50%, -50%); color: white; text-shadow: 2px 2px 4px rgba(255, 0, 0, 0.5);">
                            <h5 class="card-title" style="font-size: 24pt;">South Korea</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="country-card card" style="position: relative;">
                        <img src="https://i.pinimg.com/736x/05/75/f3/0575f3bfaa462f53b86f34a0d259be9d.jpg" class="card-img-top" width="300" height="300">
                        <div class="card-img-overlay" style="position: absolute; top: 55%; left: 53%; transform: translate(-50%, -50%); color: white; text-shadow: 2px 2px 4px rgba(255, 0, 0, 0.5);">
                            <h5 class="card-title" style="font-size: 24pt;">China</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="country-card card" style="position: relative;">
                        <img src="https://i.pinimg.com/736x/2e/1a/93/2e1a93a0250c4a768b82e708b53e7364.jpg" class="card-img-top" width="300" height="300">
                        <div class="card-img-overlay" style="position: absolute; top: 55%; left: 53%; transform: translate(-50%, -50%); color: white; text-shadow: 2px 2px 4px rgba(255, 0, 0, 0.5);">
                            <h5 class="card-title" style="font-size: 21pt;">Malaysia</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="country-card card" style="position: relative;">
                        <img src="https://i.pinimg.com/736x/bd/94/e5/bd94e5bde8c80b999a8091b0919b4baa.jpg" class="card-img-top" width="300" height="300">
                        <div class="card-img-overlay" style="position: absolute; top: 55%; left: 53%; transform: translate(-50%, -50%); color: white; text-shadow: 2px 2px 4px rgba(255, 0, 0, 0.5);">
                            <h5 class="card-title" style="font-size: 24pt;">Japan</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="country-card card" style="position: relative;">
                        <img src="https://i.pinimg.com/736x/ec/bb/7d/ecbb7d8b0ae36d366b4f290a27015627.jpg" class="card-img-top" width="300" height="300">
                        <div class="card-img-overlay" style="position: absolute; top: 55%; left: 53%; transform: translate(-50%, -50%); color: white; text-shadow: 2px 2px 4px rgba(255, 0, 0, 0.5);">
                            <h5 class="card-title" style="font-size: 20pt;">Germany</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="country-card card" style="position: relative;">
                        <img src="https://i.pinimg.com/736x/2c/7f/c3/2c7fc320b858f27fa558dd7e2fdc8b6b.jpg" class="card-img-top" width="300" height="300">
                        <div class="card-img-overlay" style="position: absolute; top: 55%; left: 53%; transform: translate(-50%, -50%); color: white; text-shadow: 2px 2px 4px rgba(255, 0, 0, 0.5);">
                            <h5 class="card-title" style="font-size: 20pt;">Vietnam</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="country-card card" style="position: relative;">
                        <img src="https://i.pinimg.com/736x/49/45/52/494552cfc79ee3223ce386e1ba2692a2.jpg" class="card-img-top" width="300" height="300">
                        <div class="card-img-overlay" style="position: absolute; top: 55%; left: 53%; transform: translate(-50%, -50%); color: white; text-shadow: 2px 2px 4px rgba(255, 0, 0, 0.5);">
                            <h5 class="card-title" style="font-size: 20pt;">Thailand</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="country-card card" style="position: relative;">
                        <img src="https://i.pinimg.com/736x/d2/2b/4f/d22b4f47f5b56f53385b825a31358bc4.jpg" class="card-img-top" width="300" height="300">
                        <div class="card-img-overlay" style="position: absolute; top: 55%; left: 53%; transform: translate(-60%, -45%); color: white; text-shadow: 2px 2px 4px rgba(255, 0, 0, 0.5);">
                            <h5 class="card-title" style="font-size: 16pt;">Uzbekistan</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="country-card card" style="position: relative;">
                        <img src="https://i.pinimg.com/736x/f6/a6/80/f6a68049dda3b982ef1094424880760b.jpg" class="card-img-top" width="300" height="300">
                        <div class="card-img-overlay" style="position: absolute; top: 55%; left: 53%; transform: translate(-50%, -50%); color: white; text-shadow: 2px 2px 4px rgba(255, 0, 0, 0.5);">
                            <h5 class="card-title" style="font-size: 20pt;">Australia</h5>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section id="timeline" class="timeline-section">
        <div class="container">
            <h2 class="text-center mb-5">Timeline</h2>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="timeline-item">
                        <h4>Registration</h4>
                        <p>March 1 - April 30, 2025</p>
                    </div>
                    <div class="timeline-item">
                        <h4>Selection and Interview</h4>
                        <p>May 1 - 15, 2025</p>
                    </div>
                    <div class="timeline-item">
                        <h4>Announcement</h4>
                        <p>May 20, 2025</p>
                    </div>
                    <div class="timeline-item">
                        <h4>Orientation</h4>
                        <p>June 1 - 30, 2025</p>
                    </div>
                    <div class="timeline-item">
                        <h4>Program Implementation</h4>
                        <p>July - August 2025</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection