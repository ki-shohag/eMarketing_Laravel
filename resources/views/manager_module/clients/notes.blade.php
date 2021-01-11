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

        <h1 class="logo mr-auto"><a href="/manager-dashboard">CRM Spot</a></h1>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
            <li><a href="/manager-dashboard">Dashboard</a></li>
            <li class="active"><a href="/manager/clients">Clients</a></li>
            <li><a href="/manager/company">Company</a></li>
            <li><a href="/manager/services">Services</a></li>
            <li><a href="/manager/chat">Chat</a></li>
            <li><a href="/manager/profile">Profile</a></li>
            <li><a href="/manager/signout">Sign Out</a></li>          

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->



    <main id="main">
        <section>
            <div class="row mt-4 justify-content-center">
                <div class="col col-xl-2 border rounded border-primary">
                    <div class="border-bottom text-center border-sercondary">
                        <img class="mt-2" src="{{asset('/img/team/team-1.jpg')}}" alt="No Image.."
                            id="client-pro-pic"><br>
                        <label class="mt-4" for="">{{$client['full_name']}}}</label><br>
                        <label class="mt-2" for="">Phone: 0{{$client['phone']}}</label><br>
                        <label for="">Email: {{$client['email']}}</label>
                    </div>
                    <div class="border-top border-primary pt-4">
                    <div class="border-top border-primary pt-4">
                    <a class="btn btn-primary btn-block"href="/manager/show-client/{{$client['id']}}"><span class="text-light">Profile</span></a></button><br>
                        <a class="btn btn-warning btn-block"href="/manager/show-client/{{$client['id']}}/calls"><span class="text-light">Calls</span></a></button><br>
                        <a class="btn btn-success btn-block"href="/manager/show-client/{{$client['id']}}/appointments"><span class="text-light">Appoitments</span></a></button><br>
                        <a class="btn btn-danger btn-block"href="/manager/show-client/{{$client['id']}}/notes"><span class="text-light">Notes</span></a></button><br>
                        <a class="btn btn-dark btn-block"href="/manager/show-client/{{$client['id']}}/proposals"><span class="text-light">Proposals</span></a></button><br>
                        <a class="btn btn-info btn-block"href="/manager/chat/{{$client['id']}}"><span class="text-light">Chat</span></a></button><br>  
                    </div>
                    </div>
                </div>
                <div class="col col-xl-6">
                    <section id="notes-section">
                        <div class="row m-0 p-0">
                            <div class="col-6 bg-primary  mb-3 pt-3">
                                <h5 class="text-light">Notes</h5>
                                <span class="text-danger">{{session('msg')}}</span>
                            </div>
                            <div class="col-6 text-right bg-primary  mb-3 pt-3">
                                <button type="button" class="btn btn-success mb-3" data-toggle="modal"
                                    data-target="#add-notes-modal">
                                    Create a New Note
                                </button>

                                <!-- Modal -->
                                <div class="modal text-left fade" id="add-notes-modal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add New Note</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="/clients/{{$client['id']}}/notes/add-note" method="post">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            @csrf
                                                            <input class="form-control" type="date" placeholder="Date"
                                                                name="creation_date"><br>
                                                            <input class="form-control" type="text" placeholder="Title"
                                                                name="title"><br>
                                                            <textarea class="form-control" placeholder="Body"
                                                                name="body"></textarea><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning"
                                                        data-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-success">Add Note</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <table id="appointmentsTable" class="table table-striped table-bordered"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Title</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for($i = 0; $i < count($notes); $i++)
                                        <tr>
                                            <td>{{$notes[$i]['creation_date']}}</td>
                                            <td><a tabindex="0" class="btn btn-link" role="button" data-toggle="popover"
                                                    data-trigger="focus" title="{{$notes[$i]['title']}}"
                                                    data-content="{{$notes[$i]['body']}}"><u>{{$notes[$i]['title']}}</u></a>
                                            </td>
                                            <td>
                                                <form action="/clients/{{$client['id']}}/notes/edit/{{$notes[$i]['id']}}" method="post">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-block btn-info" data-toggle="modal"
                                                    data-target="#editModal">
                                                    Edit Note
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="editModal" tabindex="-1" role="dialog"
                                                    aria-labelledby="editLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editLabel">Edit Note</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        @csrf
                                                                        <input class="form-control" type="date" placeholder="Date"
                                                                            name="creation_date" value="{{$notes[$i]['creation_date']}}"><br>
                                                                        <input class="form-control" type="text" placeholder="Title"
                                                                            name="title" value="{{$notes[$i]['title']}}"><br>
                                                                        <input class="form-control" placeholder="Body"
                                                                            name="body" value="{{$notes[$i]['body']}}"><br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-warning"
                                                                    data-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-success">Save
                                                                    changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            </td>
                                            <td><a href="/clients/{{$client['id']}}/notes/delete/{{$notes[$i]['id']}}"
                                                    class="btn btn-danger btn-block">Delete</a></td>
                                        </tr>
                                        @endfor
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
            $('#callsTable').DataTable();
            $('#appointmentsTable').DataTable();
            //$('#callsTable').DataTable();
        });
        $(function () {
            $('[data-toggle="popover"]').popover()
        });
    </script>
</body>

</html>