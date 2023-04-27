<footer style="padding-top:100px;padding-bottom:40px; background-color:#151515;">
    <div class="container">
        <div class="row">
            <div class="footer-cont col-12 col-sm-6 col-lg-4">
                <a href="index.html" class="logo"><img style="height: 100px;width: 100px;" src="{{asset('public/assets/images/grc_awards_logo.png')}}" alt="logo"></a>
                <div class="footer-email">
                    <a href="">Africa</a>
                </div>
                <p>1, Adeola Adeoye Street, Ikeja, Lagos, Nigeria.<br>
                    <i aria-hidden="true" class="mdi mdi-phone"></i>
                    <a href="tel:01-7001770">01-7001770</a><br>
                    <i aria-hidden="true" class="mdi mdi-phone"></i>
                    <a href="tel:09153414314">09153414314</a><br>
                    <i aria-hidden="true" class="mdi mdi-email-outline"></i>
                    <a href="mailto:events@grcfincrimeawards.com">events@grcfincrimeawards.com</a>
                </p>

                <div class="footer-email">
                    <a href="">United kingdom</a>
                </div>
                <p>House 24, Holborn Viaduct, London EC1A 2BN, United Kingdom. <br>
                    <i aria-hidden="true" class="mdi mdi-phone"></i>
                    <a href="tel:+447466588324">+44-7466588324</a><br>
                    <i aria-hidden="true" class="mdi mdi-email-outline"></i>
                    <a href="mailto:events@grcfincrimeawards.com">events@grcfincrimeawards.com</a>
                </p>

                <p class="footer-copyright" style="color:#8b8b8b;">
                    <a target="_blank" href="https://morgansconsortium.com" style="color: #D4AF37;">The Morgans Consortium</a> © 2021. All Rights Reserved.
                </p>
            </div>
            <div class="footer-item-link col-12 col-sm-6 col-lg-4" style="flex-direction: column;justify-content:space-evenly">
                <div class="footer-link">
                    <h5 style="color: #D4AF37;">The Award</h5>
                    <ul>
                        <li><a href="{{route('about_the_award')}}">About The Award</a></li>
                        <li><a href="{{route('show_sect_cat')}}">Sectors & Categories</a></li>
                        <li><a href="{{route('show_contact')}}">Contact us</a></li>
                    </ul>
                </div>

                <div class="footer-link">
                    <h5 style="color: #D4AF37;">Sponsorship</h5>
                    <ul>
                    <li><a href="{{route('show_sponsors')}}">Our Sponsors</a></li>
								<li><a href="{{route('show_sponsors')}}#sponsorshipPackages">Sponsorship Packages</a></li>
								<li><a href="{{route('show_sponsors')}}#becomeASponsor">Why Become a sponsor?</a></li>
                    </ul>
                </div>

            </div>
            <div class="footer-subscribe col-12 col-sm-6 col-lg-4">
                <h5 style="color: #D4AF37;">Subscribe to our newsletter. Stay up to date with our latest news and updates.</h5>
                <form class="subscribe-form">
                    <input class="inp-form" type="email" name="subscribe" placeholder="E-mail">
                    <button class="btn-form" type="submit"><i class="mdi mdi-send mdi-rotate-315 mdi-24px"></i></button>
                </form>
                <p>By clicking the button you agree to the <a href="{{route('show_policy')}}" target="_blank">Privacy Policy</a> and <a href="{{route('show_tc')}}" target="_blank">Terms and Conditions</a></p>
            </div>
        </div>
    </div>
</footer>