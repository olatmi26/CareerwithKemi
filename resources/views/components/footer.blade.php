<footer id="footer">
    <div class="container my-4">
        <div class="row py-5">
            <div class="col-md-5 col-lg-4 mb-5 mb-lg-0">
                <h5 class="text-6 text-transform-none font-weight-semibold text-color-light mb-4">Contact
                    Details</h5>
                <p class="text-4 mb-1">Mary land Lagos, Nigeira</p>
                <p class="text-4 mb-4 pb-1">Suite 20</p>

                <p class="text-5 mb-1 pt-2"><i class="fa fa-solid fa-phone"></i> <a href="" class="text-decoration-none"
                        title="Call +234 803 940 0359" tcxhref="0803 940 0359" target="_blank">+234 803 940 0359</a>
                </p>
                <p class="text-5 mb-0"><i class="fa fa-solid fa-envelope"></i> <a href="mailto:enquiry@careerswithkemi.com">enquiry@careerswithkemi.com</a></p>
            </div>
            <div class="col-md-7 col-lg-3 mb-5 mb-lg-0">
                <h5 class="text-6 text-transform-none font-weight-semibold text-color-light mb-4">Quick Navigation</h5>
                <div class="row">
                    {{-- <div class="col"> --}}
                        <p class="mb-1"><a href="elements-call-to-action.html" class="text-4 link-hover-style-1">Resume
                                builder</a></p>
                        <p class="mb-1">
                            <a href="elements-pricing-tables.html" class="text-4 link-hover-style-1">E-books</a>
                        </p>
                        <p class="mb-1"><a href="#" class="text-4 link-hover-style-1">Shops</a></p>
                        <p class="mb-1"><a href="#" class="text-4 link-hover-style-1">Contact Us</a></p>
                        <p class="mb-1">
                            <a href="#" class="text-4 link-hover-style-1">About Me</a>
                        </p>
                        <p class="mb-1">
                            <a href="/privacy-policy" class="text-4 link-hover-style-1">Privacy policy</a>
                        </p>
                    {{-- </div> --}}
                </div>
            </div>
            <div class="col-md-5 col-lg-1 mb-5 mb-lg-0">
                <h5 class="text-6 text-transform-none font-weight-semibold text-color-light mb-4">Follow us</h5>
                <ul
                    class="footer-social-icons social-icons social-icons-clean social-icons-big social-icons-opacity-light social-icons-icon-light mt-0 mt-lg-3">
                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
                            title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank"
                            title="Twitter"><i class="fab fa-twitter text-2"></i></a></li>
                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank"
                            title="Linkedin"><i class="fab fa-linkedin-in text-2"></i></a></li>
                </ul>
            </div>
            
            @livewire('news-letter')
        </div>
    </div>
    <div class="footer-copyright footer-copyright-style-2">
        <div class="container py-2">
            <div class="row py-2">
                <div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
                    <p class="text-white"><a href="{{ route('index-page') }}"> Careere's with Kemi</a> ©
                        Copyright 2020 - {{
                        \Carbon\Carbon::now()->format('Y') }}. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>