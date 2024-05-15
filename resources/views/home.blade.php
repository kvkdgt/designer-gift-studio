@extends('theme')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/home.css'); }} ">

<div class="hero">
    <div class="left-section">
        <div class="hero-text-1">We Design</div>
        <div class="hero-text-2">Beautiful Graphics</div>
        <div class="hero-text-3">In our studio, we're all about crafting designs that truly speak to you. We put our heart and soul into every project, making sure it's not just good, but exceptional. Our goal? To blow your mind with our creativity and innovation, leaving you beyond satisfied every time.
        </div>

    </div>
    <div class="right-section">
        <div class="image-grid">
            <div class="grid-item">
                <img src="{{ URL::asset('imgs/work/2.jpg'); }}" style="width:100%">
                <!-- <div class="text">Client Work</div> -->
            </div>

            <div class="grid-item">
                <img src="{{ URL::asset('imgs/work/4.jpg'); }}" style="width:100%">
                <!-- <div class="text">Client Work</div> -->
            </div>

            <div class="grid-item">
                <img src="{{ URL::asset('imgs/work/73.png'); }}" style="width:100%">
                <!-- <div class="text">Client Work</div> -->
            </div>

            <div class="grid-item">
                <img src="{{ URL::asset('imgs/work/93.jpg'); }}" style="width:100%">
                <!-- <div class="text">Client Work</div> -->
            </div>
        </div>
    </div>
</div>

<div class="section-2">
    <div class="left-section-2">
        <img src="{{ URL::asset('imgs/vector.png'); }}" alt="">
    </div>
    <div class="right-section-2">
        <div class="main-text-section-2">
            Our Graphics <span>Makes</span> The Difference
        </div>
        <div class="point">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
            </svg>
            <span>We deliver something Creative for your Business</span>
        </div>
        <div class="point-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
            </svg>
            <span>Graphics Change the identity of your Brand or Business</span>
        </div>
        <a href="{{env('APP_URL')}}/#contact-us">
            <span class="contact-us-in-section-2">
                CONTACT US
            </span>
        </a>
    </div>
</div>

<div class="services">
    <div class="headings">
        <div class="title">Our Services</div>
        <div class="sub-title">We Offer Creative Graphic Services</div>
    </div>
    <div class="card-group-container">
        <div class="card-group">
            <div class="card">
                <div class="card-content">
                    <div class="service-img">
                        <img src="{{ URL::asset('imgs/icons/logo.png'); }}" alt="">
                    </div>
                    <h2 class="card-title">Logo Designing</h2>
                    <p class="card-description">Our expert team of designers specializes in creating unique and visually striking logos that leave a lasting impression. We transform your vision into a powerful visual identity.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <div class="service-img">
                        <img src="{{ URL::asset('imgs/icons/banner.png'); }}" alt="">
                    </div>
                    <h2 class="card-title">Banner Designing</h2>
                    <p class="card-description">Our professional team of designers is here to provide exceptional banner design services tailored to your unique needs. Whether it's for promotional campaigns or events.

                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="service-img">
                        <img src="{{ URL::asset('imgs/icons/broucher.png'); }}" alt="">
                    </div>
                    <h2 class="card-title">Brochure design</h2>
                    <p class="card-description">We offer exceptional brochure design services at the best rates. Our expert team of designers understands the importance of visually appealing and informative brochures.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <div class="service-img">
                        <img src="{{ URL::asset('imgs/icons/corporate.png'); }}" alt="">
                    </div>
                    <h2 class="card-title">Corporate Identity</h2>
                    <p class="card-description">From business cards to employee ID cards, we create visually appealing and customized designs that reflect your brand's personality and professionalism.

                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <div class="service-img">
                        <img src="{{ URL::asset('imgs/icons/invitation.png'); }}" alt="">
                    </div>
                    <h2 class="card-title">Invitation design</h2>
                    <p class="card-description">We specialize in creating exquisite invitation cards that set the tone for your celebration. Whether it's a wedding, birthday party, baby shower, or corporate event.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="service-img">
                        <img src="{{ URL::asset('imgs/icons/album.png'); }}" alt="">
                    </div>
                    <h2 class="card-title">Photo album design</h2>
                    <p class="card-description">Whether it's a wedding, family reunion, or any other milestone event, our skilled designers will create a personalized and visually stunning layout album.</p>
                </div>
            </div>

            <!-- Add more cards here -->
        </div>
    </div>
</div>

<div class="extra-support">
    <div class="text-data">Need Creative Design Solution?</div>
    <div class="btn-data"> <span class="extra-support-text"> EXTRA SUPPORT</span>
    <a href="{{env('APP_URL')}}/#contact-us">
    <span class="extra-support-btn">CONTACT US</span>
    </a>
</div>
</div>
<div class="contact-details">



    <div class="email">

        <div class="contact-text">
            <div class="main-text">Email</div>
            <div class="main-text-value">giftstudio29@gmail.com</div>
        </div>
    </div>
    <div class="vertical-line"></div>
    <div class="email">

        <div class="contact-text">
            <div class="main-text">Address</div>
            <div class="main-text-value">A6/43, Goyal intercity, gurukul, Ahmedabad</div>
        </div>
    </div>
    <div class="vertical-line"></div>
    <div class="email">

        <div class="contact-text">
            <div class="main-text">Mobile</div>
            <div class="main-text-value">+91 8469003923</div>
        </div>
    </div>

</div>
<div class="contact-us">
    <div class="contact-vector"><img src="{{ URL::asset('imgs/contact-us.svg'); }}" alt=""></div>
    <div class="contact-form" id="contact-us">
        <div class="container">
            <div class="h2">Send Message</div>
            <div class="get-in-touch">Let's connect and discuss about your designs</div>
            <form id="contact-form" method="POST" action="{{route('enquiry/add')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection