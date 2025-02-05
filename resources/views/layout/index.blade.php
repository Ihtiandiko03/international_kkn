<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KKN Internasional</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/api/placeholder/1920/1080');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            color: white;
        }
        
        .feature-card {
            transition: transform 0.3s;
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
        }
        
        .timeline-section {
            position: relative;
            padding: 50px 0;
        }
        
        .timeline-item {
            padding: 20px;
            border-left: 3px solid #dc3545;
            position: relative;
            margin-bottom: 30px;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -10px;
            top: 25px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #dc3545;
        }
        
        .country-card {
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 30px;
        }
        
        .country-card img {
            transition: transform 0.3s;
        }
        
        .country-card:hover img {
            transform: scale(1.1);
        }

        .org-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border-radius: 15px;
            overflow: hidden;
            border: solid 2pt black;
        }

        .org-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .org-card-header {
            background-color: #dc3545;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .org-card-body {
            padding: 20px;
            text-align: center;
        }

        .org-card-body img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .org-chart {
            position: relative;
            padding: 50px 0;
        }

        

        .connector {
            position: absolute;
            border-top: 4px solid #dc3545;
            z-index: -1;
        }

        .registration-container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 40px;
            margin-top: 50px;
        }
        .form-step {
            display: none;
        }
        .form-step.active {
            display: block;
        }
        .progress {
            height: 5px;
            background-color: #e9ecef;
            margin-bottom: 30px;
        }
        .progress-bar {
            background-color: #dc3545;
        }
        .form-check-input:checked {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .step-indicator {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }
        .step-indicator div {
            flex: 1;
            text-align: center;
            padding: 10px;
            background-color: #f8f9fa;
            margin: 0 5px;
            border-radius: 5px;
            color: #6c757d;
        }
        .step-indicator div.active {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">International KKN  </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/struktur">Committees</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pengumuman">Announcement</a></li>
                    <li class="nav-item"><a class="nav-link" href="#timeline">Sponsorship</a></li>
                    <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @yield('container')

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4">
                    <h5>Address</h5>
                    <p>Jl. Terusan Ryacudu, Way Huwi,<br>Lampung Selatan, Lampung</p>
                </div>
                <div class="col-md-4">
                    <h5>Contact</h5>
                    <p>Email: kkn.internasional2025@itera.ac.id<br>Phone: Muhammad Iqbal (+62 822 8155 1913)</p>
                </div>
                <div class="col-md-4">
                    <h5>Sosial Media</h5>
                    <div class="mt-3">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <p class="mb-0">&copy; 2025 KKN Internasional. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>