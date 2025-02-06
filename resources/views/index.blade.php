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
                        <img src="https://i.pinimg.com/736x/6c/8c/7b/6c8c7b2e3d5d30d59b505bd98f4332e7.jpg" class="card-img-top" width="300" height="300">
                        <div class="card-img-overlay" style="position: absolute; top: 55%; left: 53%; transform: translate(-50%, -50%); color: white; text-shadow: 2px 2px 4px rgba(255, 0, 0, 0.5);">
                            <h5 class="card-title" style="font-size: 18pt;">Indonesia</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="country-card card" style="position: relative;">
                        <img src="https://i.pinimg.com/736x/83/89/52/83895264750bf768114d2c65459641db.jpg" class="card-img-top" width="300" height="300">
                        <div class="card-img-overlay" style="position: absolute; top: 55%; left: 53%; transform: translate(-50%, -50%); color: white; text-shadow: 2px 2px 4px rgba(255, 0, 0, 0.5);">
                            <h5 class="card-title" style="font-size: 20pt;">South Korea</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="country-card card" style="position: relative;">
                        <img src="https://i.pinimg.com/736x/d5/10/de/d510de87732bdba1e90740498fc0f6c9.jpg" class="card-img-top" width="300" height="300">
                        <div class="card-img-overlay" style="position: absolute; top: 55%; left: 53%; transform: translate(-50%, -50%); color: white; text-shadow: 2px 2px 4px rgba(255, 0, 0, 0.5);">
                            <h5 class="card-title" style="font-size: 20pt;">China</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="country-card card" style="position: relative;">
                        <img src="https://i.pinimg.com/736x/2e/1a/93/2e1a93a0250c4a768b82e708b53e7364.jpg" class="card-img-top" width="300" height="300">
                        <div class="card-img-overlay" style="position: absolute; top: 55%; left: 53%; transform: translate(-50%, -50%); color: white; text-shadow: 2px 2px 4px rgba(255, 0, 0, 0.5);">
                            <h5 class="card-title" style="font-size: 20pt;">Malaysia</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="country-card card" style="position: relative;">
                        <img src="https://i.pinimg.com/736x/bd/94/e5/bd94e5bde8c80b999a8091b0919b4baa.jpg" class="card-img-top" width="300" height="300">
                        <div class="card-img-overlay" style="position: absolute; top: 55%; left: 53%; transform: translate(-50%, -50%); color: white; text-shadow: 2px 2px 4px rgba(255, 0, 0, 0.5);">
                            <h5 class="card-title" style="font-size: 20pt;">Japan</h5>
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
                        <h4>Online International KKN</h4>
                        <p>June 2 - July 14, 2025</p>
                    </div>
                    <div class="timeline-item">
                        <h4>Arrival of KKN participants Together International 2025</h4>
                        <p>July 20, 2025</p>
                    </div>
                    <div class="timeline-item">
                        <h4>Departure and Release of the 2025 International Joint KKN</h4>
                        <p>July 21, 2025</p>
                    </div>
                    <div class="timeline-item">
                        <h4>Implementation of Joint International KKN 2025</h4>
                        <p>July 21 - August 21, 2025</p>
                    </div>
                    <div class="timeline-item">
                        <h4>2025 International Joint KKN Pick-up</h4>
                        <p>August 21, 2025</p>
                    </div>
                    <div class="timeline-item">
                        <h4>2025 International Joint KKN Results Expo and Festival</h4>
                        <p>August 22, 2025</p>
                    </div>
                    <div class="timeline-item">
                        <h4>Return of KKN participants Together International 2025</h4>
                        <p>August 23, 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="negara" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Location of International KKN 2025</h2>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="" style="position: relative;">
                        <img src="https://i.pinimg.com/736x/83/5f/f7/835ff715a2d628d1f5e4f6d03873a07c.jpg"  class="card-img-top" style="width: 400px; height: 400px; object-fit: cover; border-radius: 10px;">
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h2>Pahawang Village, Pesawaran Regency</h2>
                        <p>Pahawang Village is a village potential in develop Marine product SMEs. The tourism potential 
                           of Pahawang Village includes coral reef conservation and mangrove planting. Tourist destinationssea walker
                           Pahawang Island. Marine Conservation in the Waters of Jelarangan Hamlet, Pahawang Island.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h2>Girimulyo Village, East Lampung Regency</h2>
                        <p>Natural habitat for pollen-eating bats. Cultivation of Siger Avocado, one of Lampung's 
                            superior butter avocado varieties and famous 
                            throughout Indonesia. In the form of terraced pyramids, bathing pools or baths, 
                            sundials or seasonal calendars, and fortress moats. Buddha-Avalokitesvara statue, porcelain plates, and 
                            beads estimated to be from the Srivijaya Kingdom era. The terraced pyramids and megalithic statues are thought 
                            to be from the old megalithic period (pre-Buddhist era).
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="position: relative; float: right;">
                        <img src="https://i.pinimg.com/736x/d0/be/5a/d0be5a1625a28d6d9ffbc9f67c36769f.jpg" class="card-img-top" style="width: 400px; height: 400px; object-fit: cover; border-radius: 10px;">
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="" style="position: relative;">
                        <img src="https://i.pinimg.com/736x/97/55/be/9755be30cd3b9fdd4ef51bc17b92dd0c.jpg"  class="card-img-top" style="width: 400px; height: 400px; object-fit: cover; border-radius: 10px;">
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h2>Way Kambas Village, East Lampung Regency</h2>
                        <p>Way Kambas National Park, located in Lampung, Indonesia, is renowned for its efforts in wildlife conservation, particularly for the endangered Sumatran elephants and rhinoceroses. The park spans over 1,300 square kilometers and is a sanctuary for various species of flora and fauna. 
                            The park's conservation initiatives include the optimization of conservation-based nature tourism, which aims to educate visitors about the importance of preserving natural habitats while providing a sustainable source of income for local communities. 
                            One of the key projects in Way Kambas is the utilization of manure as biogas and fertilizer. This initiative not only helps in managing waste but also provides a renewable source of energy and organic fertilizer for agricultural purposes. 
                            Additionally, the park focuses on integrated grass cultivation specifically for elephant feed. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection