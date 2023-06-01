<div class="extra_options">
    <div
        class="container-lg options_container fs_25 d-flex justify-content-center flex-wrap text-center align-items-center">
        @foreach (config('optionsIcon') as $icon)
            <a class="additional_option d-flex align-items-center justify-content-center flex-column flex-lg-row my-3"
                href="#">
                <div class="img_container d-flex justify-content-center align-items-center">

                    <img src="{{ Vite::asset('resources/img/' . $icon['icon']) }}" alt="{{ $icon['name'] }}">
                </div>
                <div class="name_option m-2">{{ $icon['name'] }}</div>
            </a>
        @endforeach
    </div>
</div>
