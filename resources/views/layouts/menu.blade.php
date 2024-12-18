<div class="header header-2" style="background-color: #053e63;">
    <div class="top-header">
        <div class="container">
            <div class="row no-gutters justify-content-between align-items-center">
                <div class="col-xl-6 col-lg-6 col-sm-8">
                    <div class="top-left">
                        <ul>
                            <li>
                                <i class="flaticon-black-back-closed-envelope-shape"></i>
                                <span>
                                    <a href="mailto:info@forerunnerhrm.com" style="color: white;">
                                        info@forerunnerhrm.com
                                    </a>
                                </span>
                            </li>

                            <li>
                                <i class="fa fa-phone"></i>
                                <span>
                                    <a href="tel:+959 255 488 745" style="color: white;">
                                        +959 255 488 745
                                    </a>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-4 d-flex justify-content-sm-end justify-content-center">
                    <div class="top-right">
                        <a href="#" target="_blank" class="fb">
                            <i class="flaticon-facebook-app-symbol"></i>
                        </a>
                        <a href="#" class="tw"><i class="flaticon-twitter"></i></a>
                        <a href="#" class="ld"><i class="flaticon-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-header">
        <div class="container">
            <div class="row" style="width: 1800px;">

                <div class="col-xl-2 col-lg-2 d-xl-flex d-lg-flex d-none align-items-center">
                    <div class="logo">
                        <a href="{{ route('welcome') }}">
                            <img src="{{ asset('data/logo.jpg') }}" alt="LOGO" style="height:100px;">
                        </a>
                    </div>
                </div>

                <div class="d-xl-none d-lg-none col-4">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="material-icons-round">apps</i>
                    </button>
                </div>

                <div class="col-xl-9 col-lg-9 next">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('welcome') }}"
                                        style="font-size:16px; font-weight: 700; color:#02365A;">
                                        Home
                                    </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="serviceDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        style="font-size:16px;  font-weight:700; color:#02365A;">
                                        About Us
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="serviceDropdown">

                                        <li>
                                            <a class="dropdown-item" href="{{ route('about.index') }}">
                                                About Us
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="{{ route('overview.index') }}">
                                                Company Overview
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="{{ route('ceomessage.index') }}">
                                                Message From CEO
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="#">
                                                Company Brochure
                                            </a>
                                        </li>

                                        <li hidden>
                                            <a class="dropdown-item" href="{{ route('company.index') }}">
                                                Vision, Mission & Values
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="{{ route('team.index') }}">
                                                Our Team Members
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="{{ route('organization.index') }}">
                                                Our Organization Chart
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="serviceDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        style="font-size:16px;  font-weight:700; color:#02365A;">
                                        Our Services
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="serviceDropdown">
                                        @foreach ($countryies as $country)
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ route('overseas_jobs.show', $country->id) }}">
                                                    {{ $country->title ?? '' }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li class="nav-item dropdown"><a class="nav-link"
                                        href="{{ route('recruitment.index') }}"
                                        style="font-size:16px;  font-weight:700; color:#02365A;">
                                        Our Recruitment Activities
                                    </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="blogDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        style="font-size:16px;  font-weight:700; color:#02365A;">
                                        Job Seekers
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="blogDropdown">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('cv.index') }}">Submit CV</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('employer.index') }}">Employer
                                                Form</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact.index') }}"
                                        style="font-size:16px;  font-weight:700; color:#02365A;">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
