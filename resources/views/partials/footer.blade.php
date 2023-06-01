<footer>
    <footer id="app_footer">
        <div class="container_footer ">
            <!-- ----TOP FOOTER----- -->
            <div class="top_footer my_background text-light">
                <div class="info_top_footer">
                    <div class="img_container d-flex py-3 container-lg">
                        <div class="col-4 col-md-2">
                            <div class="link_list_footer mx-3">
                                <h2 class="my-3 my-xl-4">DC COMICS</h2>
                                <ul class="p-0">
                                    <li><a href="#"> Characters </a> </li>
                                    <li><a href="#"> Comics </a> </li>
                                    <li><a href="#"> Movies </a> </li>
                                    <li><a href="#"> Characters </a> </li>
                                    <li><a href="#"> TV </a> </li>
                                    <li><a href="#"> Games </a> </li>
                                    <li><a href="#"> Videos </a> </li>
                                    <li><a href="#"> News </a> </li>
                                </ul>
                            </div>
                            <div class="link_list_footer mx-3">
                                <h2 class="my-3  my-xl-4">shop</h2>
                                <ul class="p-0">
                                    <li><a href="#"> Shop DC </a> </li>
                                    <li><a href="#"> Shop Dc Collectibles </a> </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-4 col-md-2 ">
                            <div class="link_list_footer mx-3">
                                <h2 class="my-3 my-xl-4">DC</h2>
                                <ul class="p-0">
                                    <li><a href="#"> Terms of Use </a> </li>
                                    <li><a href="#"> Privacy policy </a> </li>
                                    <li><a href="#"> Add Choices </a> </li>
                                    <li><a href="#"> advertising</a> </li>
                                    <li><a href="#"> Jobs </a> </li>
                                    <li><a href="#"> Subscriptions </a> </li>
                                    <li><a href="#"> Talent Workshop </a> </li>
                                    <li><a href="#"> CPSC certificates </a> </li>
                                    <li><a href="#"> Ratings </a> </li>
                                    <li><a href="#"> Shop Help </a> </li>
                                    <li><a href="#"> Contacts Us </a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-4 col-md-2">
                            <div class="link_list_footer mx-3">
                                <h2 class="my-3 my-xl-4">Sites</h2>
                                <ul class="p-0">
                                    <li><a href="#"> DC </a> </li>
                                    <li><a href="#"> Mad Magazine </a> </li>
                                    <li><a href="#"> DC Kids </a> </li>
                                    <li><a href="#"> DC Universe </a> </li>
                                    <li><a href="#"> DC POWER Visa </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----BOTTOM FOOTER----- -->
            <div class="bottom_footer container-lg d-sm-flex justify-content-between align-items-center py-4 px-3">
                <div class="link_container">
                    <a href="#">SIGN-UP NOW!</a>
                </div>
                <nav class="d-flex align-items-center mt-4 mt-sm-0 ">
                    <div class="mx-2 d-none d-md-flex"> follow us</div>
                    <div class="social_nav fw-bold d-flex">
                        @foreach (config('footerInfo') as $icon)
                            <div class="text-dark">
                                <a class="text-dark mx-2" href="#">
                                    <img src="{{ Vite::asset('resources/img/' . $icon['icon']) }}"
                                        alt="{{ $icon['name'] }}">
                                    {{-- <img src="{{ Vite::asset('../../resources/img/' . $icon['icon']) }}" alt=""> --}}
                                </a>

                            </div>
                        @endforeach
                    </div>
                </nav>
            </div>
        </div>
    </footer>
</footer>
