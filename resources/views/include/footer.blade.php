<!-- Footer Area Start Here -->
<footer class="black-bg footer-style-four pb-35">
    <div class="container">
        <!-- Footer Top Start -->
        {{-- <div class="footer-top ptb-15">
            <nav>
                <ul class="footer-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Enavle cookies</a></li>
                    <li><a href="#">Privacy and Cookie Policy</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </nav>
        </div> --}}
        <!-- Footer Top End -->
        <!-- Footer Middle Start -->
        <div class="footer-middle ptb-45">
            <div class="row">
                <!-- Single Footer Start -->
                <div class="col-xl-6 col-lg-6 col-md-6 col-6 mb-all-40">
                    <div class="single-footer">
                        <h3 class="footer-title">Address</h3>
                        <div class="footer-content">
                            <ul class="footer-list last-footer">
                                <li class="list-upper">
                                   <p>{{ $contact[0]->alamat }}</p>
                                </li>
                                <li>
                                    <p>Call : <span> {{ $contact[0]->telepon }}</span></p>
                                </li>
                                <li>
                                    <p>Whatsapp : <span>{{ $contact[0]->whatsapp }}</span></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Start -->
                <!-- Single Footer Start -->
                <div class="col-xl-6 col-lg-6 col-md-6 col-6 mb-all-40">
                    <div class="single-footer style-change">
                        <?=$contact[0]->peta?>
                    </div>
                </div>
                <!-- Single Footer Start -->
                
                
            </div>
            <!-- Row End -->
        </div>
        <!-- Footer Middle End -->
        <!-- Footer Bottom Start -->
        <div class="footer-bottom pt-35">
            <div class="d-flex flex-wrap justify-content-md-between justify-content-center footer-bottom-content">
                <div class="footer-copyright mb-sm-15">
                    <p>Wolfs 2024</p>
                    {{-- <p>Powered By Pander template</p> --}}
                </div>
                <div class="footer-payment">
                    {{-- <a href="#"><img src="img/payment/payment.png" alt="payment-img" class="img"></a> --}}
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </div>
</footer>
<!-- Footer Area End Here -->