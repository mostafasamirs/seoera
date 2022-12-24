    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="text-center">
                        <img src="{{asset('website')}}/assets/imgs/theme/loading.gif" alt="" />
                    </div>
                </div>
            </div>
        </div> -->
    <!-- Vendor JS-->
    <script src="{{asset('website')}}/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script data-cfasync="false" src="{{asset('website')}}/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="{{asset('website')}}/assets/js/plugins/slick.js"></script>
    <script src="{{asset('website')}}/assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{asset('website')}}/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="{{asset('website')}}/assets/js/plugins/wow.js"></script>
    <script src="{{asset('website')}}/assets/js/plugins/waypoints.js"></script>
    <script src="{{asset('website')}}/assets/js/plugins/scrollup.js"></script>
    <script src="{{asset('website')}}/assets/js/plugins/jquery.vticker-min.js"></script>
    <script src="{{asset('website')}}/assets/js/plugins/perfect-scrollbar.js"></script>
    <script src="{{asset('website')}}/assets/js/plugins/magnific-popup.js"></script>
    <script src="{{asset('website')}}/assets/js/plugins/select2.min.js"></script>
    <script src="{{asset('website')}}/assets/js/plugins/counterup.js"></script>
    <script src="{{asset('website')}}/assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="{{asset('website')}}/assets/js/plugins/images-loaded.js"></script>
    <script src="{{asset('website')}}/assets/js/plugins/isotope.js"></script>
    <script src="{{asset('website')}}/assets/js/plugins/jquery.theia.sticky.js"></script>
    <script src="{{asset('website')}}/assets/js/plugins/jquery.elevatezoom.js"></script>
    <!-- Template  JS -->
    <script src="{{asset('website')}}/assets/js/main48b2.js?v=4.0"></script>
    <script src="{{asset('website')}}/assets/js/shop48b2.js?v=4.0"></script>



    <script type="text/javascript">
        $(document).ready(function(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                }
            });
            $('.laravel-ajax-file-upload').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: 'POST'
                    , url: "{{ route('wesite.touch')}}"
                    , data: formData
                    , cache: false
                    , dataType: 'json'
                    , contentType: false
                    , processData: false
                    , success: (data) => {
                        this.reset();
                        alert('Thank you, the order has been sent.');
                        console.log(data);
                    }
                    , error: function(data) {
                        console.log(data);
                    }
                });
            });
        });

    </script>
