@extends('layout.index')
@section('container')
    <!-- Hero Section -->
    {{-- <section id="beranda" class="hero-section" style="background-image: url(https://masuk-ptn.com/images/product/368b1d936cf9be5ef1d7c936bc793c306655880f.jpg)">
        <div class="container text-center text-dark" style="margin-top: -100px;">
            <h1 class="display-3 mb-5">Developing Educotourism Villages for Climate Change Mitigation</h1>
            <a href="/registration" class="btn btn-danger btn-lg" style="margin-top: 100px;">Register Now</a>
        </div>
    </section> --}}
    <section id="beranda" class="hero-section">
        <div class="video-background">
            <!-- YouTube video container -->
            <div id="youtube-player"></div>
            <!-- Overlay to ensure text remains readable -->
            <div class="overlay"></div>
        </div>
        
        <div class="container text-center position-relative">
            <h1 class="display-3 mb-5 text-white">Developing Educotourism Villages for Climate Change Mitigation</h1>
            <a href="/registration" class="btn btn-danger btn-lg">Register Now</a>
        </div>

        <style>
            .hero-section {
                position: relative;
                height: 100vh;
                overflow: hidden;
                display: flex;
                align-items: center;
                justify-content: center;
            }
    
            .video-background {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 0;
                pointer-events: none; /* Prevents clicking the video */
            }
    
            #youtube-player {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 100vw;
                height: 100vh;
                transform: translate(-50%, -50%);
                pointer-events: none;
            }
    
            @media (min-aspect-ratio: 16/9) {
                #youtube-player {
                    height: 56.25vw;
                }
            }
            
            @media (max-aspect-ratio: 16/9) {
                #youtube-player {
                    width: 177.78vh;
                }
            }
    
            .overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.4);
            }
    
            .hero-section .container {
                z-index: 1;
            }
    
            .hero-section h1 {
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            }
    
            .btn-danger {
                padding: 15px 30px;
                font-size: 1.25rem;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
    
            .btn-danger:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
            }
        </style>
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

    {{-- <section id="negara" class="py-5 bg-light">
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
    </section> --}}

    <section id="sponsor" class="py-5 bg-light" >
        <div class="container">
            <h2 class="text-center mb-5">Our Sponsors</h2>
            <div class="row justify-content-center align-items-center g-4">
                @foreach ($sponsor as $s)
                    <div class="col-6 col-md-3">
                        <a href="{{$s->link_website}}" target="_blank" class="d-block text-center">
                            <img src="{{ asset('storage/' . $s->image) }}" class="img-fluid" style="max-height: 100px; transition: transform 0.3s;">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="negara" class="py-5 ">
        <div class="container">
            <h2 class="text-center mb-5">Location of International KKN 2025</h2>
    
            <!-- Pahawang Village -->
            <div class="row mt-5">
                <div class="col-md-6">
                    <div style="position: relative;">
                        <img src="https://i.pinimg.com/736x/83/5f/f7/835ff715a2d628d1f5e4f6d03873a07c.jpg" class="card-img-top" style="width: 100%; height: 400px; object-fit: cover; border-radius: 10px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19541.02314116337!2d105.22618090646887!3d-5.678462083549218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41255795f62817%3A0x61315f106afd2eb5!2sDesa%20Wisata%20Pulau%20Pahawang!5e1!3m2!1sid!2sid!4v1739154736170!5m2!1sid!2sid" style="width: 100%; height: 300px; border-radius: 10px; margin-top: 10px;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h2>Pahawang Village, Pesawaran Regency</h2>
                        <p>Pahawang Village is a beautiful coastal village located in Pesawaran Regency, Lampung, Indonesia. Known for its stunning marine biodiversity, this village has become a popular destination for eco-tourism and marine conservation.
                            One of the main attractions of Pahawang Village is Pahawang Island, which is famous for its crystal-clear waters, vibrant coral reefs, and diverse marine life. The island offers excellent opportunities for snorkeling, diving, and sea walking, allowing visitors to explore its underwater beauty up close.
                            In addition to tourism, Pahawang Village has a strong potential in marine-based small and medium enterprises (SMEs). Many local communities engage in fishery-related businesses, including fish farming, seafood processing, and traditional fishing methods.
                            Environmental conservation is also a key focus in Pahawang Village. The local community actively participates in coral reef restoration projects and mangrove reforestation, which help protect marine ecosystems and sustain biodiversity.
                            With its breathtaking natural scenery, rich marine resources, and commitment to conservation, Pahawang Village is a must-visit destination for nature lovers and adventure seekers.</p>
                    </div>
                </div>
            </div>
    
            <!-- Girimulyo Village -->
            <div class="row mt-5">
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h2>Girimulyo Village, East Lampung Regency</h2>
                        <p>Girimulyo Village, located in East Lampung Regency, Indonesia, is a village rich in biodiversity, cultural heritage, and agricultural potential. This village is known as a natural habitat for pollen-eating bats, playing a crucial role in maintaining the ecological balance and supporting local ecosystems.
                            One of the key agricultural products of Girimulyo is the Siger Avocado, a premium butter avocado variety native to Lampung. This avocado is highly valued for its creamy texture and rich flavor, making it popular across Indonesia.
                            Girimulyo Village is also home to historical and archaeological sites, including terraced pyramid structures, ancient bathing pools, sundials, and fortress moats. These structures, along with megalithic statues and artifacts such as the Buddha-Avalokitesvara statue, porcelain plates, and beads, are believed to date back to the Srivijaya Kingdom era and the pre-Buddhist megalithic period.
                            With its combination of natural beauty, historical significance, and agricultural excellence, Girimulyo Village is an important cultural and ecological destination in Lampung. It offers visitors a unique experience of nature, history, and sustainable farming practices in one location.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="position: relative; float: right;">
                        <img src="https://i.pinimg.com/736x/d0/be/5a/d0be5a1625a28d6d9ffbc9f67c36769f.jpg" class="card-img-top" style="width: 100%; height: 400px; object-fit: cover; border-radius: 10px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19551.152191765254!2d105.64098246273743!3d-5.371508315546296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40fa6bc4e0108b%3A0x5ee102154baebe9b!2sBalai%20Desa%20Girimulyo!5e1!3m2!1sid!2sid!4v1739154865119!5m2!1sid!2sid" style="width: 100%; height: 300px; border-radius: 10px; margin-top: 10px;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
    
            <!-- Way Kambas -->
            <div class="row mt-5">
                <div class="col-md-6">
                    <div style="position: relative;">
                        <img src="https://i.pinimg.com/736x/97/55/be/9755be30cd3b9fdd4ef51bc17b92dd0c.jpg" class="card-img-top" style="width: 100%; height: 400px; object-fit: cover; border-radius: 10px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4891.202201767585!2d105.77435337585503!3d-4.927570450449653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40813cf143bc13%3A0x4c426b2efc4681a3!2sTaman%20Nasional%20Way%20Kambas!5e1!3m2!1sid!2sid!4v1739154933424!5m2!1sid!2sid" style="width: 100%; height: 300px; border-radius: 10px; margin-top: 10px;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h2>Way Kambas Village, East Lampung Regency</h2>
                        <p>Way Kambas Village, located in East Lampung Regency, Indonesia, is best known for being home to Way Kambas National Park, one of Indonesia’s oldest and most important wildlife conservation areas. The park spans over 1,300 square kilometers and is dedicated to protecting endangered species, particularly the Sumatran elephant and Sumatran rhinoceros.
                            The village and its surrounding areas play a crucial role in conservation-based eco-tourism, offering visitors a chance to experience the beauty of Lampung’s natural landscapes while learning about wildlife preservation efforts. Tourists can explore the Elephant Conservation Center (ECC), where elephants are rehabilitated and trained for conservation purposes.
                            In addition to its wildlife protection efforts, Way Kambas Village promotes sustainable environmental practices. One of its key initiatives includes the utilization of elephant manure for biogas and organic fertilizer production, helping to manage waste while providing renewable energy for local communities. Another innovative project is integrated grass cultivation, which ensures a steady food supply for the elephants.
                            With its rich biodiversity, conservation efforts, and commitment to sustainable development, Way Kambas Village serves as a vital center for wildlife protection and eco-tourism, attracting visitors and researchers from around the world.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


@endsection