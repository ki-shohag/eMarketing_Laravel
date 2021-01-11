</div>

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
<script src="{{asset('js/chatClient.js')}}"></script>

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('js/clientProfile.js')}}"></script>

<script>
    function printFile(a, e) {
        var restorePage = document.body.innerHTML;
        document.getElementById(a).style.display = 'none';
        var printContent = document.getElementById(e);
        window.print();
        document.getElementById(a).style.display = 'block';
        document.body.innerHTML = restorePage;
    }
</script>

<script>
    $(document).ready(function() {
        $("#companyTable").DataTable();
        $("#servicesTable").DataTable();
        $("#appointmentsTable").DataTable();
        $("#notesTable").DataTable();
        $("#proposalsTable").DataTable();
    });
    $(function() {
        $('[data-toggle="popover"]').popover();
    });
</script>
</html>