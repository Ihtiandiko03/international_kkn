@extends('layout.index')
@section('container')
     <!-- Header Section -->

    <section class="announcement-hero position-relative overflow-hidden py-5">
        <div class="container position-relative" style="z-index: 2;">
            <div class="row min-vh-25 align-items-center py-5">
                <div class="col-12 text-center text-white">
                    <h1 class="display-4 fw-bold mb-3">Organizational Structure</h1>
                    <p class="lead mb-0">Program Management Team International KKN</p>
                </div>
            </div>
        </div>
        <div class="bg-danger position-absolute top-0 start-0 w-100 h-100" style="opacity: 0.9;"></div>
    </section>

    <!-- Struktur Organisasi -->
    <section class="org-chart container py-5">
        <div class="row justify-content-center">
            <!-- Ketua -->
            <div class="col-md-4 text-center mb-4 position-relative">
                <div class="org-card">
                    <div class="org-card-header">
                        <h4>Chairman</h4>
                    </div>
                    <div class="org-card-body">
                        <h5>Dr. Eng. Feerzet Achmad, S.T., M.T</h5>
                        <p class="text-muted">Teknik Kimia</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <!-- Wakil Ketua dan Sekretaris -->
            <div class="col-md-4 text-center mb-4 position-relative">
                <div class="org-card">
                    <div class="org-card-header">
                        <h4>Deputy Chairman 1</h4>
                    </div>
                    <div class="org-card-body">
                        <h5>Teny Sylvia, S.TP., M.Sc.</h5>
                        <p class="text-muted">Teknologi Industri Pertanian</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center mb-4 position-relative">
                <div class="org-card">
                    <div class="org-card-header">
                        <h4>Deputy Chairman 2</h4>
                    </div>
                    <div class="org-card-body">
                        <h5>Dr. Idra Herlina S.Si., M.Sc</h5>
                        <p class="text-muted">Kimia</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <!-- Koordinator Bidang -->
            <div class="col-md-3 text-center mb-4 position-relative">
                <div class="org-card">
                    <div class="org-card-header">
                        <h4>Information Systems Coordinator</h4>
                    </div>
                    <div class="org-card-body">
                        <h5>Andre Febrianto S.Kom., M. Eng</h5>
                        <p class="text-muted">Teknik Informatika</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center mb-4 position-relative">
                <div class="org-card">
                    <div class="org-card-header">
                        <h4>Public Relations Division Coordinator</h4>
                    </div>
                    <div class="org-card-body">
                        <h5>Muhammad Iqbal, S.T., M.M.</h5>
                        <p class="text-muted">Teknik Industri</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 text-center mb-4 position-relative">
                <div class="org-card">
                    <div class="org-card-header">
                        <h4>Coordinator of General Secretariat and Finance</h4>
                    </div>
                    <div class="org-card-body">
                        <h5>Juanda, S.E., M.M.</h5>
                        <p class="text-muted">LPPM</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center mb-4 position-relative">
                <div class="org-card">
                    <div class="org-card-header">
                        <h4>Coordinator of Facilities and Infrastructure Division</h4>
                    </div>
                    <div class="org-card-body">
                        <h5>Nur Miswari, S.T., M.T</h5>
                        <p class="text-muted">Teknik Industri</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center mb-4 position-relative">
                <div class="org-card">
                    <div class="org-card-header">
                        <h4>Sponsorship Division Coordinator</h4>
                    </div>
                    <div class="org-card-body">
                        <h5>Dr. apt. Anjar Hermadi Saputro, S.Farm., M.Pharm.Sci</h5>
                        <p class="text-muted">Farmasi</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center mb-4 position-relative">
                <div class="org-card">
                    <div class="org-card-header">
                        <h4>Consumption Coordinator</h4>
                    </div>
                    <div class="org-card-body">
                        <h5>Dr. Okta Amelia, S.TP., M.Si.</h5>
                        <p class="text-muted">Teknologi Industri Pertanian</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center mb-4 position-relative">
                <div class="org-card">
                    <div class="org-card-header">
                        <h4>Event Coordinator</h4>
                    </div>
                    <div class="org-card-body">
                        <h5>Jarwinda, S.Si., M.T.</h5>
                        <p class="text-muted">Teknik Pertambangan</p>
                    </div>
                </div>
            </div>


            <div class="col-md-3 text-center mb-4 position-relative">
                <div class="org-card">
                    <div class="org-card-header">
                        <h4>Division Coordinator
                            Transportation and K3L</h4>
                    </div>
                    <div class="org-card-body">
                        <h5>Rizqi Wahyudi, S.TP., M.Sc.</h5>
                        <p class="text-muted">Teknik Industri</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center mb-4 position-relative">
                <div class="org-card">
                    <div class="org-card-header">
                        <h4>Coordinator of Training and 
                            Monitoring Division</h4>
                    </div>
                    <div class="org-card-body">
                        <h5>Wilda Harlia Devita, S.TP., M.Si.</h5>
                        <p class="text-muted">Teknologi Industri Pertanian</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center mb-4 position-relative">
                <div class="org-card">
                    <div class="org-card-header">
                        <h4>Publication and 
                            Documentation Coordinator</h4>
                    </div>
                    <div class="org-card-body">
                        <h5>Harmiansyah, S.T., M.T</h5>
                        <p class="text-muted">Teknik Biosistem</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection