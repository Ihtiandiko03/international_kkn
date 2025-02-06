@extends('layout.index')
@section('container')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 registration-container">
            <h2 class="text-center mb-4">International KKN Registration</h2>
            
            <!-- Step Indicator -->
            <div class="step-indicator">
                <div class="step active" data-step="1">Personal Information</div>
                <div class="step" data-step="2">Academic Information</div>
                <div class="step" data-step="3">Country Selection</div>
                <div class="step" data-step="4">Confirmation</div>
            </div>

            <!-- Progress Bar -->
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%"></div>
            </div>

            <!-- Registration Form -->
            <form id="registrationForm" action="{{ route('main.registration_store') }}" method="POST">
                @csrf
                <!-- Step 1: Personal Information -->
                <div class="form-step active" data-step="1">
                    <h4 class="mb-4">Personal Information</h4>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        
                    </div>
                    <div class="row">
                        
                        {{-- <div class="col-md-6 mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div> --}}
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Place of Birth</label>
                            <input type="text" class="form-control" name="tempat_lahir" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" name="tanggal_lahir" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Gender</label>
                            <select class="form-select" name="jenis_kelamin" required >
                                <option value="">Select Gender</option>
                                <option value="Laki">Male</option>
                                <option value="Perempuan">Female</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" name="no_hp" required>
                        </div>
                    </div>
                   
                    <div class="text-end">
                        <button type="button" class="btn btn-danger next-step">Next</button>
                    </div>
                </div>

                <!-- Step 2: Academic Information -->
                <div class="form-step" data-step="2">
                    <h4 class="mb-4">Academic Information</h4>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">University</label>
                            <input type="text" class="form-control" name="kampus_asal" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Faculty</label>
                            <input type="text" class="form-control" name="fakultas_asal" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Study Program</label>
                            <input type="text" class="form-control" name="prodi_asal" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Semester</label>
                            <select class="form-select" name="semester" required>
                                <option value="">Select Semester</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">GPA</label>
                            <input type="number" step="0.01" min="0" max="4" class="form-control" name="ipk" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Language Certificate</label>
                            <select class="form-select" name="sertif_inggris" required>
                                <option value="">Select Certificate</option>
                                <option value="toefl">TOEFL</option>
                                <option value="ielts">IELTS</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary prev-step">Back</button>
                        <button type="button" class="btn btn-danger next-step">Next</button>
                    </div>
                </div>

                <!-- Step 3: Country Selection -->
                <div class="form-step" data-step="3">
                    <h4 class="mb-4">Selection Country</h4>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Choose Country</label>
                            <select class="form-select" name="negara_asal" required>
                                <option value="">Select Country</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="South Korea">South Korea</option>
                                <option value="China">China</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Japan">Japan</option>
                                <option value="Germany">Germany</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Australia">Australia</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Reason for Join International KKN</label>
                            <textarea class="form-control" rows="4" name="alasan" required></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary prev-step">Back</button>
                        <button type="button" class="btn btn-danger next-step">Next</button>
                    </div>
                </div>

                <!-- Step 4: Confirmation -->
                <div class="form-step" data-step="4">
                    <h4 class="mb-4">Registration Confirmation</h4>
                    <div class="card bg-light mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Terms and Conditions</h5>
                            <ul>
                                <li>Active student at least in semester 3</li>
                                <li>Minimum GPA of 3.0</li>
                                <li>Must have a language certificate</li>
                                <li>Pass administrative and interview selection</li>
                            </ul>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="confirmation" required>
                                <label class="form-check-label" for="confirmation">
                                    I declare that the information provided is correct
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary prev-step">Back</button>
                        <button type="submit" class="btn btn-success">Submit Registration</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('registrationForm');
        const steps = document.querySelectorAll('.form-step');
        const stepIndicators = document.querySelectorAll('.step-indicator .step');
        const progressBar = document.querySelector('.progress-bar');
        const nextButtons = document.querySelectorAll('.next-step');
        const prevButtons = document.querySelectorAll('.prev-step');

        let currentStep = 1;

        function updateStep(newStep) {
            // Hide all steps
            steps.forEach(step => step.classList.remove('active'));
            stepIndicators.forEach(indicator => indicator.classList.remove('active'));

            // Show current step
            document.querySelector(`.form-step[data-step="${newStep}"]`).classList.add('active');
            document.querySelector(`.step-indicator .step[data-step="${newStep}"]`).classList.add('active');

            // Update progress bar
            progressBar.style.width = `${(newStep - 1) * 33.33}%`;

            currentStep = newStep;
        }

        nextButtons.forEach(button => {
            button.addEventListener('click', function() {
                if (currentStep < 4) {
                    updateStep(currentStep + 1);
                }
            });
        });

        prevButtons.forEach(button => {
            button.addEventListener('click', function() {
                if (currentStep > 1) {
                    updateStep(currentStep - 1);
                }
            });
        });

        
    });
</script>
@endsection
