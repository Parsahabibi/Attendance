@extends('web.layouts.master')

@section('head-tag')
    <title></title>
    <link rel="stylesheet" href="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.css" />
    <script type="text/javascript" src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header', [
        'H3Header' => 'گزارش ها',
        'CaptionHeader' => 'خانه - گزارش ها - ',
        'TitleHeader' => 'گزارشات پروژه',
    ])
@endsection

@section('sidebar')
    @include('web.Layouts.side-bar', [
        'ClassDashbord' => '',
        'ClassLocation' => '',
        'ClassShift' => '',
        'ClassPersonel' => '',
        'ClassReported' => 'active-item-sidebar',
        'ClassRequest' => '',
        'ClassProject' => '',
        'ClassHoliday' => '',
    ])
@endsection
<section class="">

    <div class=" d-flex flex-column align-items-center col-12 mx-auto">
        <div class="bg-white rounded-16 px-2 px-lg-4 pt-2 pt-lg-4  pb-0 header col-12">
            <h6 class="fw-bold mb-3">گزارشات پروژه</h6>
            <div class="items d-flex align-items-center gap-5 overflow-x-scroll ps-4 ps-md-0">
                <p class="li active text-nowrap m-0 pb-3 b-active" role="button">تردد پروژه</p>
                <p class="li text-nowrap m-0 pb-3 b-active" role="button">تردد به تفکیک پرسنل</p>
                <p class="li text-nowrap m-0 pb-3 b-active" role="button">تردد به تفکیک پروژه</p>
            </div>
        </div>
        <div class="bg-white rounded-16 p-2 p-lg-4 report col-12 mt-4">
            <div class="input d-flex flex-wrap align-items-end gap-3 pb-5">
                <div class="d-flex flex-column align-items-start gap-2 col-12 col-sm-3">
                    <label for="Personal">پرسنل</label>
                    <input id="Personal" class="col-12 bg-input rounded-8">
                </div>
                <div class="d-flex flex-column align-items-start gap-2 col-12 col-sm-3">
                    <label for="dateFrom">از تاریخ</label>
                    <input data-jdp="" id="dateFrom" class="col-12 bg-input rounded-8">
                </div>
                <div class="d-flex flex-column align-items-start gap-2 col-12 col-sm-3">
                    <label for="dateTo">تا تاریخ</label>
                    <input data-jdp="" id="dateTo" class="col-12 bg-input rounded-8">
                </div>
                <button class="btn-primary-nahira">مشاهده ی گزارش</button>
            </div>
            <div class="overflow-x-scroll">
                <table class="border-b-gray col-12">
                    <thead>
                        <th class="text-nowrap text-center pb-4 px-2 c-gray-dark fs-small-100">تاریخ</th>
                        <th class="text-nowrap text-center pb-4 px-2 c-gray-dark fs-small-100">ساعت</th>
                        <th class="text-nowrap text-center pb-4 px-2 c-gray-dark fs-small-100">جزئیات</th>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="m-5 mb-3 d-flex flex-column align-items-center" data-emplty-table-massage>
                <p class="c-gray-dark2 text-nowrap pb-3">
                    داده‌ای موجود نیست
                </p>
                <img src="{{ asset('images/Frame 29.svg') }}" alt="" class="no-data" style="width:auto">
            </div>
        </div>

    </div>

    {{-- <jdp-container style="z-index: 1000;"></jdp-container><jdp-overlay style="z-index: 999;"></jdp-overlay></body> --}}


</section>
<!-- Hero End -->
@endsection

@section('script')
<script>
    const liList = document.querySelectorAll(".li");

    for (let i = 0; i < liList.length; i++) {
        // console.log("knhwhfb");
        liList[i].onclick = () => {
            for (let i = 0; i < liList.length; i++) {
                liList[i].classList.remove("active");
            }
            liList[i].classList.add("active");
        };
    }
    jalaliDatepicker.startWatch();

    // const date = document.querySelectorAll("input");
    // // console.log(date);
    // for (let i = 0; i < date.length; i++) {
    //   date.onchange = () => {
    //     jalaliDatepicker.startWatch();
    //   };
    // }
</script>
@endsection
