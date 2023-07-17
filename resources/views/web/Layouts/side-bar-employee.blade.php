<section class="side-bar col-2 col-sm-1 h-100 p-2 p-lg-3 d-flex flex-column justify-content-between align-items-center">

    <div class="mb-4">
        <img src="{{ asset('images/Nahira-logo.svg') }}" alt="">
    </div>

    <a href="{{ url('/Employee/Dashbord') }}" class="bg-gray-500 p-2  item-sidebar col-11 col-md-8 {{ $ClassDashbord }}"
        item-sidebar>
        <img src="{{ asset('images/home(3).svg') }}" alt="" class="col-lg-7 img-dark-item-sidebar">
        <img src="{{ asset('images/home(1) 1.svg') }}" alt="" class="col-lg-7 img-light-item-sidebar">
    </a>

    <a href="{{ url('/Employee/YourShift') }}"
        class="bg-gray-500 p-2 col-11 col-md-8 item-sidebar {{ $ClassYourShift }}" item-sidebar>
        <img src="{{ asset('images/working-hours(2).svg') }}" alt="" class="col-lg-7 img-dark-item-sidebar">
        <img src="{{ asset('images/working-hours.svg') }}" alt="" class="col-lg-7 img-light-item-sidebar">
    </a>

    <a href="{{ url('/Employee/Reported') }}" class="bg-gray-500 p-2 col-11 col-md-8 item-sidebar {{ $ClassReported }}"
        item-sidebar>
        <img src="{{ asset('images/Frame 7.svg') }}" alt="" class="col-lg-7 img-dark-item-sidebar">
        <img src="{{ asset('images/holiday(3).svg') }}" alt="" class="col-lg-7  img-light-item-sidebar">
    </a>

    <a href="{{ url('/Employee/Function') }}"
        class="bg-gray-500 p-2 col-11 col-md-8 item-sidebar {{ $ClassFunction }}" item-sidebar>
        <img src="{{ asset('images/Frame 7 (1).svg') }}" alt="" class="col-lg-7 img-dark-item-sidebar">
        <img src="{{ asset('images/holiday(3).svg') }}" alt="" class="col-lg-7  img-light-item-sidebar">
    </a>

    <a href="{{ url('/Employee/Request') }}" class="bg-gray-500 p-2  col-11 col-md-8 item-sidebar {{ $ClassRequest }}"
        item-sidebar>
        <img src="{{ asset('images/request(8).svg') }}" alt="" class="col-lg-7 img-dark-item-sidebar">
        <img src="{{ asset('images/request(4).svg') }}" alt="" class="col-lg-7 img-light-item-sidebar">
    </a>

    <a href="{{ url('/Employee/Shift') }}" class="bg-gray-500 p-2 col-11 col-md-8 item-sidebar {{ $ClassShift }}"
        item-sidebar>
        <img src="{{ asset('images/Frame 7 (2).svg') }}" alt="" class="col-lg-7 img-dark-item-sidebar">
        <img src="{{ asset('images/holiday(3).svg') }}" alt="" class="col-lg-7  img-light-item-sidebar">
    </a>

    <div class="bg-gray-500 p-2 col-11 col-md-8  item-sidebar">
        <a href="{{ url('/') }}">

            <img src="{{ asset('images/logout(1).svg') }}" alt="" class="col-lg-7"></a>
    </div>

</section>
