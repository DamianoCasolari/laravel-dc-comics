<footer>
    <footer id="app_footer">
        <div class="container_footer ">
            <!-- ----TOP FOOTER----- -->
            <div class="top_footer my_background">
                <div class="info_top_footer">
                    <div class="img_container d-flex py-3 container-lg">
                        <div class="col-4 col-md-2">
                            <div class="link_list_footer mx-3">
                                <h2 class="my-3 my-xl-4"></h2>
                                <ul>
                                    {{-- <li v-for="link in arrayDcComics"><a href="#">{{ link }}</a></li> --}}
                                </ul>
                            </div>
                            <div class="link_list_footer mx-3">
                                <h2 class="my-3  my-xl-4"></h2>
                                <ul>
                                    {{-- <li v-for="link in arrayShop"><a href="#">{{ link }}</a></li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="col-4 col-md-2 ">
                            <div class="link_list_footer mx-3">
                                <h2 class="my-3 my-xl-4"></h2>
                                <ul>
                                    {{-- <li v-for="link in arrayDc"><a href="#">{{ link }}</a></li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="col-4 col-md-2">
                            <div class="link_list_footer mx-3">
                                <h2 class="my-3 my-xl-4"></h2>
                                <ul>
                                    {{-- <li v-for="link in arraySites"><a href="#">{{ link }}</a></li> --}}
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
