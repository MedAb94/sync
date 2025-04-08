@extends('layouts.app')
@section('title')
    SYNC CO
@endsection

<!-- Add this to the <head> section -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
@section('content')

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        @if(session('success'))
            <div id="success-alert" class="alert alert-success position-fixed top-0 end-0 m-3" style="z-index: 1050;">
                {{ session('success') }}
            </div>
        @endif

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hero-text">
                        <div class="transformation-text text-primary">
                            {{__('content.home.hero.1')}} <br>
                            <span class="highlight">{{__('content.home.hero.2')}}</span>
                        </div>
                        <h3 class="hero-connector">{{__('content.home.hero.3')}}</h3>
                        <div class="numerique-text text-primary">{{__('content.home.hero.4')}} <span
                                class="highlight">{{__('content.home.hero.5')}}</span></div>
                    </div>
                    <p class="hero-description">
                        {!! __('content.home.hero_description') !!}
                    </p>

                </div>
                <div class="col-lg-5 text-center">
                    <img src="/assets/media/rocket.png" alt="Code Editor" class="code-img">
                </div>
            </div>
        </div>

    </section>

    <!-- main axess Section -->
    <section class="main-axess">

        @php
            $axes = [
                [
                    'icon' => 'fas fa-rocket',
                    'title' => __('content.home.main_axes.1'),
                    'description' => __('content.home.main_axes.1_desc'),
                    'link' => 'digital-transformation',
                ],
                [
                    'icon' => 'fas fa-code',
                    'title' => __('content.home.main_axes.2'),
                    'description' => __('content.home.main_axes.2_desc'),
                    'link' => 'software-development',
                ],
                [
                    'icon' => 'fas fa-notes-medical',
                    'title' => __('content.home.main_axes.3'),
                    'description' => __('content.home.main_axes.3_desc'),
                    'link' => 'healthcare-solutions',
                ],
            ];
        @endphp
        <div class="container">
            <h3 class="text-center mb-5 fw-bold">
                {{ __('content.home.main_axes.title') }}
            </h3>
            <div class="row">
                @foreach($axes as $ax)
                    <div class="col-lg-4">
                        <div class="axess-card">
                            <div class="axess-icon">
                                <span class="{{ $ax['icon'] }} "></span>
                            </div>
                            <h4 class="axess-title">{{ $ax['title'] }}</h4>
                            <p class="axess-description">{!! $ax['description'] !!}</p>

                            <!-- Add the link/button to the bottom of the card -->
                            {{--                            <a href="{{ route('axe.details', $ax['link']) }}"--}}
                            {{--                               class="axess-btn bg-primary">{{ __('content.home.learn_more') }}--}}
                            {{--                            </a>--}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{--    solutions--}}
    <section id="solutions" class="py-5 solutions">
        @php
            $solutions = [
                [
                    "title" => __('content.home.solutions.myclinic'),
                    "description" => __('content.home.solutions.myclinic_desc'),
                    "link" => "myclinic",
                    "icon"=>"fas fa-hospital"
                ],
                [
                    "title" => __('content.home.solutions.mylab'),
                    "description" => __('content.home.solutions.mylab_desc'),
                    "link" => "mylab",
                    "icon"=>"fas fa-hospital"
                ],
                [
                    "title" => __('content.home.solutions.odoo'),
                    "description" => __('content.home.solutions.odoo_desc'),
                    "link" => "odoo",
                    "icon"=>"fas fa-building"
                ]
            ];
        @endphp
        <div class="container text-center">
            <h2 class="mb-4 fw-bold text-primary">{{ __('content.home.solutions.title') }}</h2>
            <p class="mb-5">{{ __('content.home.solutions.description') }}</p>
            <div class="row">
                @foreach($solutions as $sol)
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm p-4">
                            <div class="solution-icon">
                                <span class="{{$sol['icon']}} mb-3"></span>
                            </div>
                            <h4 class="fw-semibold">{{ $sol['title'] }}</h4>
                            <p>{{ $sol['description'] }}</p>
                            <div class="text-right">
                                <a href="solutions/{{ $sol['link'] }}">{{__('content.home.learn_more')}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="text-primary fw-bold">{{ __('content.home.services.title') }}</h2>
                <p class="text-muted">{{ __('content.home.services.description') }}</p>
            </div>
            <div class="row">
                @php
                    $services = [
                        ['icon' => 'fas fa-map', 'title' => 'cartography', 'description' => 'cartography_desc'],
                        ['icon' => 'fas fa-laptop-code', 'title' => 'it', 'description' => 'it_desc'],
                        ['icon' => 'fas fa-code', 'title' => 'softwares', 'description' => 'softwares_desc'],
                        ['icon' => 'fas fa-tools', 'title' => 'maintenance', 'description' => 'maintenance_desc'],
                    ];
                @endphp

                @foreach ($services as $service)
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm border-0 p-4 text-center bg-white h-100">
                            <div class="service-icon">
                                <span class="{{ $service['icon'] }}"></span>
                            </div>
                            <h5 class="fw-bold">{{ __('content.home.services.' . $service['title']) }}</h5>
                            <p class="text-muted">{{ __('content.home.services.' . $service['description']) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{--    client logos section--}}
    <section id="clients" class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="text-primary fw-bold">{{ __('content.home.clients_title') }}</h2>
                <p class="text-muted mb-5">{{ __('content.home.clients_desc') }}</p>
            </div>

            @php
                $clients = [
                    ['logo' => '1.png', 'name'=>"Clinique Chiva"],
                    ['logo' => '2.jpeg', 'name'=>"Ministere de la transition numerique"],
                    ['logo' => 'taazour.jpeg', 'name'=>"TAAZOUR"],
                    ['logo' => 'csa.jpg', 'name'=>"CSA"],
                    ['logo' => 'evad.png', 'name'=>"EVAD"],
                ];
            @endphp

            <div class="client-slider">
                @foreach($clients as $client)
                    <div class="text-center px-2">
                        <div class="text-center rounded p-3">
                            <img src="/assets/media/clients/{{ $client['logo'] }}" alt="{{ $client['name'] }}" class="img-fluid mb-2 mx-auto">
                            <div class="fw-bold text-muted small">{{ $client['name'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="text-primary fw-bold">{{ __('content.home.contact.title') }}</h2>
                <p class="text-muted">{{ __('content.home.contact.description') }}</p>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm border-0 p-4 h-100">
                        <h5 class="fw-bold">{{ __('content.home.contact.address') }}</h5>
                        <p class="text-muted">Toujounine, LAT S2 A, Nouakchott, Mauritania</p>
                        <h5 class="fw-bold">{{ __('content.home.contact.phone') }}</h5>
                        <p class="text-muted">
                            <a href="tel:+22243204060" class="text-decoration-none text-primary">+222 43204060</a>
                        </p>

                        <h5 class="fw-bold">{{ __('content.home.contact.whatsapp') }}</h5>
                        <p class="text-muted">
                            <a href="https://wa.me/22243204060" target="_blank"
                               class="text-decoration-none text-primary">
                                +222 43204060
                            </a>
                        </p>

                        <h5 class="fw-bold">{{ __('content.home.contact.email') }}</h5>
                        <p class="text-muted">
                            <a href="mailto:contact@sync-co.services" class="text-decoration-none text-primary">
                                contact@sync-co.services
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">


                    <div class="card shadow-sm border-0 p-4 h-100">
                        <h5 class="fw-bold">{{ __('content.home.contact.send') }}</h5>
                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control"
                                       placeholder="{{ __('content.home.contact.name') }}" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control"
                                       placeholder="{{ __('content.home.contact.email') }}" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="whatsapp" class="form-control"
                                       placeholder="{{ __('content.home.contact.whatsapp') }}" required>
                            </div>
                            <div class="mb-3">
        <textarea name="message" class="form-control" rows="4"
                  placeholder="{{ __('content.home.contact.message') }}" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">
                                {{ __('content.home.contact.send') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add this before the closing </body> tag -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.client-slider').slick({
                dots: false, // Hide dots
                infinite: true, // Infinite looping
                speed: 300, // Transition speed
                slidesToShow: 4, // Number of slides to show at once
                slidesToScroll: 1, // Number of slides to scroll
                autoplay: true, // Auto-play the slider
                autoplaySpeed: 2000, // Auto-play speed in milliseconds
                responsive: [
                    {
                        breakpoint: 1024, // Breakpoint for tablets
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: false // Hide dots on smaller screens too
                        }
                    },
                    {
                        breakpoint: 600, // Breakpoint for mobile devices
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            dots: false // Hide dots on smaller screens too
                        }
                    },
                    {
                        breakpoint: 480, // Breakpoint for small mobile devices
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: false // Hide dots on smaller screens too
                        }
                    }
                ]
            });
        });
    </script>
@endsection
