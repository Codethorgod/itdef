<!DOCTYPE html>
<html lang="en">
   <head>
      <title>@yield('title') |  Shaadipros</title>
      <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}" />
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="title" content="@yield('title')" />
      <meta name="description" content="@yield('meta_description')" />
      <meta name="keywords" content="@yield('meta_keywords')" />
      <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
      <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">

      <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.min.css')}}">
      <!-- swiper -->
      <link rel="stylesheet" type="text/css" href="{{asset('css/swiper.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
   </head>

   <body class="home-1">
   
      <!-- header start -->
      <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="{{url('/')}}">
             <img class="img-fluid" style="max-width: 50%;" src="{{ asset('admin-assets/images/it-definitions.png') }}" alt="">
                
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{url('/about')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{url('/dictionary')}}">Dictionary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{url('/Q&A')}}">Q & A</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{url('/articles')}}">Articles</a>
                        </li>

                    </ul>
                </div>
               
                
            </div>
           
        </div>
    </nav>
      <!-- header end -->
  
   @yield('content')
      
    <!-- footer start -->
    <footer class="bg-secondary pt-4">
        <div class="container">
            <div class="row py-4">

                <div class="col-lg-3 col-12 align-left">
                    <a class="navbar-brand" href="index.html">
                        <img class="img-fluid bg-white" style="max-width: 100%;" src="{{ asset('admin-assets/images/it-definitions.png') }}" alt="">
                    </a>
                    <p class="text-light my-lg-4 my-2">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut.
                    </p>
                    <ul class="list-inline footer-icons light-300">
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="http://facebook.com/">
                                <i class='bx bxl-facebook-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.linkedin.com/">
                                <i class='bx bxl-linkedin-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.whatsapp.com/">
                                <i class='bx bxl-whatsapp-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.flickr.com/">
                                <i class='bx bxl-flickr-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.medium.com/">
                                <i class='bx bxl-medium-square bx-md' ></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h3 class="h4 pb-lg-3 text-light light-300">Our Company</h2>
                        <ul class="list-unstyled text-light light-300">
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light" href="index.html">Home</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="about.html">About Us</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="work.html">Work</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i></i><a class="text-decoration-none text-light py-1" href="pricing.html">Price</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="contact.html">Contact</a>
                            </li>
                        </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h4 pb-lg-3 text-light light-300">Our Works</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Branding</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Business</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Marketing</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Social Media</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Digital Solution</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="#">Graphic</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h4 pb-lg-3 text-light light-300">For Client</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1" href="tel:010-020-0340">010-020-0340</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1" href="mailto:info@company.com">info@company.com</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

       

    </footer>
  <!-- footer end -->
  <!-- footer copyright start -->
  <div class="w-100 bg-primary py-3">
    <div class="container">
        <div class="row pt-2">
            <div class="col-lg-6 col-sm-12">
                {{-- <p class="text-lg-start text-center text-light light-300">
                    © Copyright 2023 ShaadiPros Company. All Rights Reserved.
                </p> --}}
            </div>
            <div class="col-lg-6 col-sm-12">
                {{-- <p class="text-lg-end text-center text-light light-300">
                    Designed by <a rel="sponsored" class="text-decoration-none text-light" href="https://templatemo.com/" target="_blank"><strong>Chirag & Harsh</strong></a>
                </p> --}}
            </div>
        </div>
    </div>
</div>
  <!-- footer copyright end -->


  <a href="javascript:void(0)" class="scroll" id="top">
      <span><i class="fa fa-angle-double-up"></i></span>
  </a>
  <!-- back to top end -->

  <!-- jquery -->

  <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
  <!-- bootstrap -->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- popper -->
  <script src="{{asset('js/popper.min.js')}}"></script>

  <!-- owl carousal -->
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <!-- swiper -->
  <script src="{{asset('js/swiper.min.js')}}"></script>
  <!-- custom -->
  <script src="{{asset('js/custom.js')}}"></script>
  <script src="{{asset('js/addtocart.js')}}"></script>

  @stack('custom_js')

  <script>
      $(document).ready(function () {
          $("#cart_count").text(0);
          $("#a_cart_count").attr("href", "/front/home/login");
      });

      $("#txtsearch").keyup(function (event) {
          //console.log(event.keyCode);
          if (event.keyCode === 13) {

              // get current page name (Remove # from end)
              let page = document.location.pathname.match(/[^\/]+$/)[0];
              if (page.includes('products')) {
                  //console.log('click button');
                  $("#btnsearch").click();
              }
              else {
                  let search = $("#txtsearch").val().trim();
                  window.location = '/front/home/products?search=' + search;
                  //console.log('Redirect to Page');
              }
          }
      });

      function searchproducts() {
          // skip is 0
          var _skip = parseInt($("#hdn_skip").val(0));
          console.log(_skip);
          let search = $("#txtsearch").val().trim();
          console.log(search);
          loadproduct(null, search, _skip, false);
      }
  </script>

</body>

</html>