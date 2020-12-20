<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Client Profile</title>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
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
            <li><a href="/manager/services">Services</a></li>
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
            <div class="row mt-4 justify-content-center">
                <div class="col col-xl-2 border rounded border-primary">
                    <div class="border-bottom text-center border-sercondary">
                        <img class="mt-2" src="/assets/img/team/team-1.jpg" alt="No Image.." id="client-pro-pic"><br>
                        <label class="mt-4" for=""><%= user[0].full_name %></label><br>
                        <label class="mt-2" for="">Phone: 0<%= user[0].phone %></label><br>
                        <label for="">Email: <%= user[0].email %></label>
                    </div>
                    <div class="border-top border-primary pt-4">
                    <div class="border-top border-primary pt-4">
                        <a class="btn btn-primary btn-block"href="/manager/show-client/<%= user[0].id %>"><span class="text-light">Profile</span></a></button><br>
                        <a class="btn btn-primary btn-block"href="/manager/show-client/<%= user[0].id %>/calls"><span class="text-light">Calls</span></a></button><br>
                        <a class="btn btn-primary btn-block"href="/manager/show-client/<%= user[0].id %>/appointments"><span class="text-light">Appoitments</span></a></button><br>
                        <a class="btn btn-primary btn-block"href="/manager/show-client/<%= user[0].id %>/notes"><span class="text-light">Notes</span></a></button><br>
                        <a class="btn btn-primary btn-block"href="/manager/show-client/<%= user[0].id %>/proposals"><span class="text-light">Proposals</span></a></button><br>
                        <a class="btn btn-primary btn-block"href="/manager/show-client/<%= user[0].id %>/chat"><span class="text-light">Chat</span></a></button><br>  
                    </div>
                    </div>
                </div>
                <div class="col col-xl-6">
                    <section id="calls-section">
                        <div class="row m-0 p-0">
                            <div class="col-6 bg-primary  mb-3 pt-3">
                                <h5 class="text-light">Calls</h5>
                            </div>
                            <div class="col-6 text-right bg-primary  mb-3 pt-3">
                                <form action="/clients/profile/<%= user[0].id %>/calls" method="post">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success mb-3" data-toggle="modal"
                                    data-target="#add-call-modal">
                                    Add New Call
                                </button>

                                <!-- Modal -->
                                <div class="modal text-left fade" id="add-call-modal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add New Call</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <input class="form-control" type="text" placeholder="Title" name="title"><br>
                                                        <input class="form-control" type="text" placeholder="Description" name="description"><br>
                                                        <input class="form-control" type="date" placeholder="Date" name="date"><br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-success">Add Call</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <div class="col-12">
                                <table id="appointmentsTable" class="table table-striped table-bordered"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <% for(var i = 0; i < calls.length; i++) { %>
                                    <tr>
                                        <td><%= calls[i].title %></td>
                                        <td><%= calls[i].description %></td>
                                        <td><%= calls[i].date %></td>
                                        <td class="text-center">
                                            <form action="/clients/profile/<%= user[0].id %>/calls/edit/<%= user[0].id %>" method="post">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success mb-3" data-toggle="modal"
                                                    data-target="#update-call-modal">
                                                    Edit Call
                                                </button>
                
                                                <!-- Modal -->
                                                <div class="modal text-left fade" id="update-call-modal" tabindex="-2" role="dialog"
                                                    aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel2">Edit Call</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <input class="form-control" type="text" placeholder="Title" value="<%= calls[i].title %>" name="title"><br>
                                                                        <input class="form-control" type="text" placeholder="Description" value="<%= calls[i].description %>"name="description"><br>
                                                                        <input class="form-control" type="date" placeholder="Date" value="<%= calls[i].date %>" name="date"><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-warning"
                                                                    data-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-success">Save Changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        <a href="/clients/profile/<%= user[0].id %>/calls/delete/<%= calls[i].id %>" class="btn btn-danger ">Delete</a></td>
                                    </tr>
                                    <% } %>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </section>
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
                    Designed by <a href="#">Shohag</a>
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
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('js/clientProfile.js')}}"></script>


    <script>
        $(document).ready(function () {
            $('#appointmentsTable').DataTable();
        });
        $(function () {
            $('[data-toggle="popover"]').popover()
        });
    </script>
</body>

</html>