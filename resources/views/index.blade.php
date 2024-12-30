@extends('layout.baseview')
@section('title','Login')
@section('style')
<style>
 .navbar-brand img {
  width: 60px;
}
.navbar-nav {
  align-items: center;
}
.navbar .navbar-nav .nav-link {
  
  font-size: 1.1em;
  padding: 0.5em 1em;
}
@media screen and (min-width: 768px) {
  .navbar-brand img {
    width: 80px;
  }
  .navbar-brand {
    margin-right: 0;
    padding: 0 1em;
  }
}
</style>
@endsection
@section('content')
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar1">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbar1">
                    <div class="navbar-nav mx-auto text-black">
                        
                        <a href="#" class="nav-item nav-link active">Home</a>
                        <a href="#" class="navbar-brand d-none d-md-block">
                           <img src="{{asset('assets/images/logo.png')}}"  alt="Brand Logo">
                       </a>
                       @foreach($pages as $page)
                       <a href="{{url('page/'.$page->slug)}}" class="nav-item nav-link text-black">{{$page->name}}</a>                       
                      
                       @endforeach
                    </div>
                </div>
            </div>
        </nav>
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" ></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" ></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://thumbs.dreamstime.com/b/business-man-using-digital-search-bar-virtual-screen-word-hotel-book-accommodation-online-website-travel-336610170.jpg" class="d-block w-100" alt="Carousel 1" style="max-height: 100vh;">
                </div>
                <div class="carousel-item">
                    <img src="https://colorlib.com/wp/wp-content/uploads/sites/2/booking-form-template-1.jpg" class="d-block w-100" alt="Carousel 2" style="max-height: 100vh;">
                </div>
                <div class="carousel-item">
                    <img src="https://stampede.ai/_next/image?url=https%3A%2F%2Fwebsite-backend.stampede.ai%2Fwp-content%2Fuploads%2F2022%2F05%2FSocial-Media-Posts-3-2-1-1024x579.png&w=3840&q=75" class="d-block w-100" alt="Carousel 3" style="max-height: 100vh;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </header>
    <main class="m-5">
        <section class="container m-4" id="about-us">
            <h6 class="display-5 text-center">About Us</h6>
            <div class="row">
                <div class="col-md-5">
                    <div class="container">
                        <img src="https://img.freepik.com/free-photo/air-ticket-flight-booking-concept_53876-122380.jpg" class="d-block w-100" alt="About us">
                    </div>
                </div>
                <div class="col-md-7">
                    <p class="text-black-50">
                        At BookMaster, we specialize in simplifying and streamlining booking management for businesses of all sizes. Whether you’re a hotel, restaurant, event planner, or service provider, we offer a comprehensive suite of tools designed to help you manage your bookings efficiently, reduce no-shows, and enhance the overall customer experience.
                    <p>
                        Founded with a vision to bring modern technology to traditional booking systems, our platform provides intuitive features that allow you to handle reservations, appointments, and scheduling with ease. From real-time availability syncing and automated reminders to integrated payment processing, our solutions are designed to save you time and boost your revenue                    </p>
                    </p>
                </div>
            </div>
            <div class="row">
                <h6 class="display-6 text-center">What Makes us Unique</h6>
                <div class="col-md-4">
                    <div class="container text-center">
                        <span class="bi bi-person color-teal icon-lg"></span>
                        <p>Custom Tailored user Options</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container text-center">
                        <span class="bi bi-shield-shaded color-teal icon-lg"></span>
                        <p>Privary First Approach</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container text-center">
                        <span class="bi bi-list color-teal icon-lg"></span>
                        <p>Multiple Variations</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="team" class="container m-4">
            <h6 class="display-5 text-center">Our Innovative Team</h6>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <div class="card" style="width: 300px;">
                            <img class="card-img-top" src="https://plus.unsplash.com/premium_photo-1689530775582-83b8abdb5020?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cmFuZG9tJTIwcGVyc29ufGVufDB8fDB8fHww">
                            <div class="card-body text-center">
                                <h4 class="card-title">Joe Doe</h4>
                                <i class="bi bi-facebook icon-sm m-2"></i>
                                <i class="bi bi-instagram icon-sm m-2"></i>
                                <i class="bi bi-linkedin icon-sm m-2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <div class="card" style="width: 300px;">
                            <img class="card-img-top" src="https://media.istockphoto.com/id/1466995518/photo/business-woman-and-worker-portrait-at-office-desk-as-administration-executive-company-manager.jpg?s=612x612&w=0&k=20&c=NvKeG6Fh0_VVfH_N0Ka-5j8284XJhL2VTJfe6IwDkWQ=">
                            <div class="card-body text-center">
                                <h4 class="card-title">Alina white</h4>
                                <i class="bi bi-facebook icon-sm m-2"></i>
                                <i class="bi bi-instagram icon-sm m-2"></i>
                                <i class="bi bi-linkedin icon-sm m-2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <div class="card" style="width: 300px;">
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5feh6-WBnJMJzunv-DXyYf3BUFU5Yexv08g&s">
                            <div class="card-body text-center">
                                <h4 class="card-title">Brown Walkman</h4>
                                <i class="bi bi-facebook icon-sm m-2"></i>
                                <i class="bi bi-instagram icon-sm m-2"></i>
                                <i class="bi bi-linkedin icon-sm m-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="container m-4">
            <h6 class="display-5 text-center ">Contact Us</h6>
                <div class="align-content-center">
                    <div class="container p-3">
                        <p class="text-muted text-center fs-3">Here's our Contact Info</p>
                        <div class="text-black-s text-center fs-4">Our Email</div>
                        <div class="text-black-50 text-center fs-5">support@example.com</div>
                        <div class="text-black-s text-center fs-4">Our Phone No.</div>
                        <div class="text-black-50 text-center fs-5">+91 85658 98563</div>
                        <div class="text-black-s text-center fs-4">Our Address</div>
                        <div class="text-black-50 text-center fs-5">HSR Layout, Bangalore <br> Karnatake 560 XXX</div>
                    </div>
                </div>
              
          
        </section>
    </main>
    <footer class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="container m-5">
                        <img src="assets/images/logo.png" height="30px" class="bg-white">
                        <div>
                            <p class="text-white">
                                Our mission is to empower businesses to thrive by providing them with an easy-to-use, reliable, and scalable booking management solution. We understand the challenges of managing appointments and reservations, and our goal is to take the hassle out of the process—allowing you to focus on what matters most: delivering exceptional service to your customers.                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container m-5">
                        <p class="text-white fs-5">Quick Links</p>
                        <ul class="remove-bullets remove-text-decoration">
                            <li><a  href="#" class="remove-text-decoration text-white">About Us</a></li>
                            <li><a href="#" class="remove-text-decoration text-white">Contact Us</a></li>C
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="text-white text-center">
                    <p>All rights reserved &copy 2022, <a href="1stop.ai">1Stop.ai</a></p>
                </div>
            </div>
        </div>
    </footer>
@endsection
@section('customjs')
<script>
</script>
@endsection