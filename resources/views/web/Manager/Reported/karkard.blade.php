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
        'TitleHeader' => 'کارکرد',
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
    <div class="bg-white rounded-16 d-flex flex-column align-items-center p-2 p-lg-4">
        <div class="report col-12 mt-4">
            <div class="title pb-4 d-flex flex-column flex-md-row justify-content-between align-items-start">
                <h6 class="fw-bold mb-3">گزارش کارکرد پرسنل</h6>
                <div class="left d-flex flex-wrap flex-sm-row align-items-start gap-3">
                    <button class="btn-secondary-nahira fs-small-100">دریافت گزارش کارکرد</button>
                    <button class="btn-secondary-nahira fs-small-100">دریافتtimesheet</button>
                    <button class="btn-primary-nahira fs-small-100">دریافت گزارش سطری ترددها</button>
                </div>
            </div>
            <div class="input d-flex flex-wrap align-items-end gap-3 pb-5">
                <div class="col-12 col-sm-3 DateFrom d-flex flex-column align-items-start gap-2">
                    <label for="dateFrom">از تاریخ</label>
                    <input data-jdp="" id="dateFrom" class="col-12 bg-input rounded-8">
                </div>
                <div class="col-12 col-sm-3 DateFrom d-flex flex-column align-items-start gap-2">
                    <label for="dateTo">تا تاریخ</label>
                    <input data-jdp="" id="dateTo" class="col-12 bg-input rounded-8">
                </div>
                <button class="btn-primary-nahira fs-small-100">مشاهده ی گزارش کارکرد</button>
            </div>
            <div class="BoxTable overflow-x-scroll border-b-gray">
                <table class="w-100">
                    <thead class="thead ">
                        <tr class="tr">
                            <th class="text-nowrap pb-4 px-2 c-gray-dark fs-small-100">نام</th>
                            <th class="text-nowrap pb-4 px-2 c-gray-dark fs-small-100">مجموع حضور</th>
                            <th class="text-nowrap pb-4 px-2 c-gray-dark fs-small-100">غیبت</th>
                            <th class="text-nowrap pb-4 px-2 c-gray-dark fs-small-100">اضافه کار</th>
                            <th class="text-nowrap pb-4 px-2 c-gray-dark fs-small-100">ماموریت</th>
                            <th class="text-nowrap pb-4 px-2 c-gray-dark fs-small-100">مرخصی استحقاقی</th>
                            <th class="text-nowrap pb-4 px-2 c-gray-dark fs-small-100">استعلاجی</th>
                            <th class="text-nowrap pb-4 px-2 c-gray-dark fs-small-100">مازاد حضور</th>
                            <th class="text-nowrap pb-4 px-2 c-gray-dark fs-small-100">روز کارکرد</th>
                            <th class="text-nowrap pb-4 px-2 c-gray-dark fs-small-100">جزییات تردد</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="m-5 mb-3 d-flex flex-column align-items-center" data-emplty-table-massage>
                <p class="c-gray-dark2 text-nowrap pb-3">
                    داده‌ای موجود نیست
                </p>
                <img src="{{ asset('images/Frame 29.svg') }}" alt="" class="no-data" style="width:auto">
            </div>
        </div>



        {{-- <jdp-container style="z-index: 1000;"></jdp-container>
        <jdp-overlay style="z-index: 999;"></jdp-overlay> --}}
    </div>
</section>
<!-- Hero End -->
@endsection
@section('script')
<script type="module">
    import WindowCheck from "{{ asset('web/js/component/Window.js') }}";

    jalaliDatepicker.startWatch();
    
    window.onclick=(e)=>{
        WindowCheck(e);
    }
</script>
@endsection
