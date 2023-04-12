{{-- @extends("layouts.master")

@section('content') --}}

<!-- ....................gallery................... -->
<div class="container">
    <div class="gallery-search">
        <input id="searchbar" onkeyup="search_animal()" type="text" name="search" placeholder="Search data..">
    </div>
</div>
<div class="cont">
    <div class="page-head">
        <h1>Vacancy on Newspaper</h1>
    </div>
    @if (isset($gallery))
    <div class="demo-gallery">
        <ul id="lightgallery">
            @foreach ($gallery as $gall)
            <li data-responsive="https://sachinchoolur.github.io/lightgallery.js/static/img/1-375.jpg 375, https://sachinchoolur.github.io/lightgallery.js/static/img/1-480.jpg 480, https://sachinchoolur.github.io/lightgallery.js/static/img/1.jpg 800"
                data-src="{{ $gall->banner_image }}"
                data-sub-html="<h4> 2020/02/02</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                <a href="">
                    <img class="img-responsive" src="{{ $gall->banner_image }}">
                    <div class="demo-gallery-poster">
                        <img src="{{ $gall->banner_image }}">
                    </div>
                </a>
                <div class="date-time">
                    {{ $gall->caption }}
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
<div class="container">
    <nav class="text-center pagition-nav">
        <ul class="pagination">
            <li class="page-item"><a class="page-link active" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
        </ul>
    </nav>
</div>
<!-- ....................gallery................... -->
{{-- @endsection --}}