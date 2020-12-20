<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Chat</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/manager">CRM Spot</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
        @if(true)
            <li class="active"><a href="/manager-dashboard">Dashboard</a></li>
            <li><a href="/manager/clients">Clients</a></li>
            <li><a href="/manager/company">Company</a></li>
            <li><a href="/manager/company/services">Services</a></li>
            <li><a href="/manager/chat">Chat</a></li>
            <li><a href="/manager/profile">Profile</a></li>
            <li><a href="/manager/signout">Sign Out</a></li>
          @else
            <li><a href="/manager/login">Sign In</a></li>
          @endif

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

 

  <main id="main">

    <section>
        <div class="row justify-content-center mt-3">
            <div class="col col-xl-8">
              <div class="row justify-content-around">
                <div class="col-12 col-xl-3 bg-success text-white">
                  <ul>
                    <li>User-1</li>
                    <li>User-2</li>
                    <li>User-3</li>
                    <li>User-4</li>
                    <li>User-5</li>
                    <li>User-6</li>
                    <li>User-7</li>
                    <li>User-8</li>
                    <li>User-9</li>
                    <li>User-10</li>
                    <li>User-11</li>
                    <li>User-12</li>
                    <li>User-13</li>
                    <li>User-14</li>
                    <li>User-15</li>
                    <li>User-16</li>
                    <li>User-17</li>
                    <li>User-18</li>
                    <li>User-19</li>
                    <li>User-20</li>
                    <li>User-21</li>
                    <li>User-22</li>
                    <li>User-23</li>
                    <li>User-24</li>
                    <li>User-25</li>
                  </ul>
                </div>
                <div class="col-12 col-xl-8 border border-success pt-2">
                  <div class="bg-success text-white pt-3 text-right pr-4">
                    <label for="">User Name</label>
                  </div><br>
                  <label for="" class="text-left">Sender-1 Message</label><br>
                  <label for="" class="float-right">Sender-2 Message</label><br>
                  <label for="" class="text-left">Sender-1 Message</label><br>
                  <label for="" class="float-right">Sender-2 Message</label><br>
                  <label for="" class="text-left">Sender-1 Message</label><br>
                  <label for="" class="float-right">Sender-2 Message</label><br>
                  <label for="" class="text-left">Sender-1 Message</label><br>
                  <label for="" class="float-right">Sender-2 Message</label><br>
                  <textarea name="" id="" cols="100" rows="10">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias facere similique ipsum sit eum eos quisquam asperiores voluptas nihil eligendi necessitatibus, rerum alias soluta fugiat dicta voluptatibus totam nisi? Repellat.
                  </textarea>
                  <button class="btn btn-success btn-block">Send</button>
                </div>
              </div>
            </div>
        </div>
    </section>
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">
      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>CRM Spot</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="#">APWT G7</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
</body>

</html>