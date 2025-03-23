@extends('layouts.app')
@section('title')
    MyClinic - Hospital Management System
@endsection

@section('content')

    <div class="myclinic-hero-section p-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1 class="hero-title">{!! __('myclinic.hero_title')!!}</h1>
                    <h2 class="subtitle">{!! __('myclinic.hero_subtitle')!!}</h2>

                    <p class="hero-text">
                        {!! __('myclinic.hero_text')!!}
                    </p>

                    <div class="divider"></div>

                    <ul class="benefits-list">
                        <li><strong>{!! __('myclinic.benefits_security')!!}</strong></li>
                        <li><strong>{!! __('myclinic.benefits_automation')!!}</strong></li>
                        <li><strong>{!! __('myclinic.benefits_decision')!!}</strong></li>
                    </ul>

                    <p class="cta-text">{!! __('myclinic.cta_text')!!}</p>

                    <a href="#contact" data-target="contact"
                       class="scroll-link btn cta-button">{!! __('myclinic.cta_button')!!}</a>
                </div>
                {{-- <div class="col-lg-5 d-none d-lg-block text-center">
                    <img src="/assets/media/doctor.webp" alt="Healthcare Professional" class="img-fluid doctor-image">
                </div> --}}
            </div>
        </div>
    </div>

    <!-- plans -->
    <div class="container py-5">
        <div class="row g-4">
            <!-- Hospitals and Clinics Card -->
            <div class="col-md-6">
                <div class="card h-100 rounded-4 shadow-sm bg-light">
                    <div class="card-body p-4 text-center">
                        <!-- Hospital Icon -->
                        <div class="text-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24"
                                 fill="none" stroke="#0d6efd" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="2"/>
                                <path d="M7 8h10"/>
                                <path d="M7 12h10"/>
                                <path d="M7 16h10"/>
                                <circle cx="18" cy="7" r="1"/>
                                <circle cx="18" cy="11" r="1"/>
                                <circle cx="18" cy="15" r="1"/>
                            </svg>
                        </div>

                        <!-- Title -->
                        <h2 class="fw-bold mb-4">{!! __('myclinic.hospitals_and_clinics_title')!!}</h2>

                        <!-- Description -->
                        <p class=" mb-4">
                            {!! __('myclinic.hospitals_and_clinics_description')!!}
                        </p>

                        <!-- Benefits List -->
                        <ul class="list-unstyled text-start mb-4">
                            <li class="mb-3">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <div class="bg-primary text-white p-1 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-diamond-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                      d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>{!! __('myclinic.benefit_1')!!}</div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <div class="bg-primary text-white p-1 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-diamond-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                      d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>{!! __('myclinic.benefit_2')!!}</div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <div class="bg-primary text-white p-1 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-diamond-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                      d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>{!! __('myclinic.benefit_3')!!}</div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <div class="bg-primary text-white p-1 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-diamond-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                      d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>{!! __('myclinic.benefit_4')!!}</div>
                                </div>
                            </li>
                        </ul>

                        <!-- CTA Button -->
                        {{--                        <div class="text-center mt-4">--}}
                        {{--                            <a href="#"--}}
                        {{--                               class="btn btn-warning text-white fw-bold rounded-pill px-5 py-2">{!! __('myclinic.cta_clinic_plan')!!}</a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>

            <!-- Individual Practitioners Card -->
            <div class="col-md-6">
                <div class="card h-100 rounded-4 shadow-sm bg-primary text-white">
                    <div class="card-body p-4 text-center">
                        <!-- Practitioner Icon -->
                        <div class="text-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24"
                                 fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>

                        <!-- Title -->
                        <h2 class="fw-bold mb-4">{!! __('myclinic.practitioners_title')!!}</h2>

                        <!-- Description -->
                        <p class=" mb-4">
                            {!! __('myclinic.practitioners_description')!!}
                        </p>

                        <!-- Benefits List -->
                        <ul class="list-unstyled text-start mb-4">
                            <li class="mb-3">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <div class="bg-white text-primary p-1 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-diamond-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                      d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>{!! __('myclinic.practitioners_benefit_1')!!}</div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <div class="bg-white text-primary p-1 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-diamond-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                      d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>{!! __('myclinic.practitioners_benefit_2')!!}</div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <div class="bg-white text-primary p-1 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-diamond-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                      d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>{!! __('myclinic.practitioners_benefit_3')!!}</div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <div class="bg-white text-primary p-1 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-diamond-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                      d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>{!! __('myclinic.practitioners_benefit_4')!!}</div>
                                </div>
                            </li>
                        </ul>

                        <!-- CTA Button -->
                        {{--                        <div class="text-center mt-4">--}}
                        {{--                            <a href="#"--}}
                        {{--                               class="btn btn-warning text-white fw-bold rounded-pill px-5 py-2">{!! __('myclinic.cta_individual_plan')!!}</a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- POS Section -->
    <section class="my-5 bg-primary py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 class="fw-bold text-white mb-4">{!! __('myclinic.pos_title')!!}</h4>
                    <p class="text-white mb-5">
                        {!! __('myclinic.pos_description')!!}
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Payment Methods Card -->
                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-primary">{!! __('myclinic.pos_payment_methods_title')!!}</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">💵 {!! __('myclinic.pos_payment_method_1')!!}</li>
                                <li class="list-group-item">💳 {!! __('myclinic.pos_payment_method_2')!!}</li>
                                <li class="list-group-item">📱 {!! __('myclinic.pos_payment_method_3')!!}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Centralized Management Card -->
                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-primary">{!! __('myclinic.pos_centralized_management_title')!!}</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">✔️ {!! __('myclinic.pos_centralized_management_1')!!}</li>
                                <li class="list-group-item">✔️ {!! __('myclinic.pos_centralized_management_2')!!}</li>
                                <li class="list-group-item">✔️ {!! __('myclinic.pos_payment_method_4')!!}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Security Card -->
                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-primary">{!! __('myclinic.pos_enhanced_security_title')!!}</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">🔐 {!! __('myclinic.pos_enhanced_security_1')!!}</li>
                                <li class="list-group-item">📝 {!! __('myclinic.pos_enhanced_security_2')!!}</li>
                                <li class="list-group-item">🛡️ {!! __('myclinic.pos_enhanced_security_3')!!}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Integration Card -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">{!! __('myclinic.pos_integration_title')!!}</h5>
                            <p class="card-text">
                                {!! __('myclinic.pos_integration_description')!!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--MODULES--}}
    <section class="py-5 myclinic-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="text-primary">{{ __('myclinic.myclinic_title') }}</h2>
                <p class="text-muted">{{ __('myclinic.myclinic_subtitle') }}</p>
            </div>

            <div class="row g-4">
                <!-- Carte 1 : Dashboard -->
                <div class="col-md-6">
                    <div class="card h-100">
                        <h5 class="card-title bg-primary text-white p-2 rounded">{{ __('myclinic.dashboard_title') }}</h5>
                        <div class="card-body">
                            <p class="card-text">{{ __('myclinic.dashboard_description') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Carte 2 : Réception -->
                <div class="col-md-6">
                    <div class="card h-100">
                        <h5 class="card-title bg-primary text-white p-2 rounded">{{ __('myclinic.reception_title') }}</h5>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <b>{{ __('myclinic.reception_insured') }}</b>: {{ __('myclinic.reception_insured_description') }}
                                </li>
                                <li>
                                    <b>{{ __('myclinic.reception_welcome') }}</b>: {{ __('myclinic.reception_welcome_description') }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Carte 3 : Hôpital -->
                <div class="col-md-6">
                    <div class="card h-100">
                        <h5 class="card-title bg-primary text-white p-2 rounded">{{ __('myclinic.hospital_title') }}</h5>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <b>{{ __('myclinic.hospital_care') }}</b>: {{ __('myclinic.hospital_care_description') }}
                                </li>
                                <li>
                                    <b>{{ __('myclinic.hospital_staff') }}</b>: {{ __('myclinic.hospital_staff_description') }}
                                </li>
                                <li>
                                    <b>{{ __('myclinic.hospital_management') }}</b>: {{ __('myclinic.hospital_management_description') }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Carte 4 : Trésorerie -->
                <div class="col-md-6">
                    <div class="card h-100">
                        <h5 class="card-title bg-primary text-white p-2 rounded">{{ __('myclinic.treasury_title') }}</h5>
                        <div class="card-body">
                            <p class="card-text">{{ __('myclinic.treasury_description') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Carte 5 : Facturation -->
                <div class="col-md-6">
                    <div class="card h-100">
                        <h5 class="card-title bg-primary text-white p-2 rounded">{{ __('myclinic.billing_title') }}</h5>
                        <div class="card-body">
                            <p class="card-text">{{ __('myclinic.billing_description') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Carte 6 : Stock -->
                <div class="col-md-6">
                    <div class="card h-100">
                        <h5 class="card-title bg-primary text-white p-2 rounded">{{ __('myclinic.stock_title') }}</h5>
                        <div class="card-body">
                            <ul>
                                <li>{{ __('myclinic.stock_description_1') }}</li>
                                <li>{{ __('myclinic.stock_description_2') }}</li>
                                <li>{{ __('myclinic.stock_description_3') }}</li>
                                <li>{{ __('myclinic.stock_description_4') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Carte 7 : Achats -->
                <div class="col-md-6">
                    <div class="card h-100">
                        <h5 class="card-title bg-primary text-white p-2 rounded">{{ __('myclinic.purchases_title') }}</h5>
                        <div class="card-body">
                            <p class="card-text">{{ __('myclinic.purchases_description') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Carte 8 : Ressources Humaines -->
                <div class="col-md-6">
                    <div class="card h-100">
                        <h5 class="card-title bg-primary text-white p-2 rounded">{{ __('myclinic.hr_title') }}</h5>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <b>{{ __('myclinic.hr_employees') }}</b>: {{ __('myclinic.hr_employees_description') }}
                                </li>
                                <li>{{ __('myclinic.hr_organization') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Carte 9 : Dossier Médical Électronique -->
                <div class="col-md-6">
                    <div class="card h-100">
                        <h5 class="card-title bg-primary text-white p-2 rounded">{{ __('myclinic.ehr_title') }}</h5>
                        <div class="card-body">
                            <p class="card-text">{{ __('myclinic.ehr_description') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Carte 10 : Maintenance -->
                <div class="col-md-6">
                    <div class="card h-100">
                        <h5 class="card-title bg-primary text-white p-2 rounded">{{ __('myclinic.maintenance_title') }}</h5>
                        <div class="card-body">
                            <p class="card-text">{{ __('myclinic.maintenance_description') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--    action button--}}

    <div class="text-center my-2">
        <a href="#contact"
           data-target="contact"
           class="scroll-link btn btn-warning text-white fw-bold rounded-pill px-5 py-2">{{ __('myclinic.start_now_button') }}</a>
    </div>

@endsection

