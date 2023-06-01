<footer>
    <footer id="app_footer">
        <div class="container_footer ">
            <!-- ----FOOTER----- -->
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
