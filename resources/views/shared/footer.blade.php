<!-- footer: top + bottom -->
<footer>
    <!-- top footer: menu + logo -->
    <div id="ec-top-footer">
        <div class="container d-flex justify-content-between text-white">
            <!-- menu -->
            <div class="ec-menu-footer">
                <ul>
                    <li class="list-group-item">
                        <h5 class="text-uppercase">Dc comics</h5>
                        <ul>
                            <li class="list-group-item">Characters</li>
                        </ul>
                    </li>
                </ul>
                <p class="text-white">All Site Content TIM and © 2020 DC Entertainment, uniess otherwise <span class="text-primary">noted here</span>. All rights reserved. <span class="text-primary">Cookies Setting.</span></p>
            </div>
            <!-- /menu -->
            <!-- logo -->
            <div>
                <img class="ec-img-footer" src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="logo-dc-comics">
            </div>
            <!-- /logo -->
        </div>
    </div>
    <!-- /top footer: menu + logo -->

    <!-- bottom footer: button sign-up + socials -->
    <div id="ec-bottom-footer" class="bg-dark">
        <div class="container d-flex align-items-center justify-content-between">
            <!-- button sign-up -->
            <button type="button" class="btn ec-border-primary rounded-0 text-white">Sign-up now!</button>
            <!-- /button sign-up -->
            <!-- socials -->
            <div id="socials" class="py-4 d-flex align-items-center">
                <h6 class="text-primary text-uppercase m-0">Follow us</h6>
                <ul class="d-flex align-items-center m-0 gap-2">
                    <li class="list-group-item">
                        <a href="">
                            <img class="ec-img-footer" src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="fb">
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="">
                            <img class="ec-img-footer" src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="twitter">
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="">
                            <img class="ec-img-footer" src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="youtube">
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="">
                            <img class="ec-img-footer" src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="pinterest">
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="">
                            <img class="ec-img-footer" src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="periscope">
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /socials -->
        </div>
    </div>
    <!-- /bottom footer: button sign-up + socials -->
</footer>
<!-- /footer: top + bottom -->