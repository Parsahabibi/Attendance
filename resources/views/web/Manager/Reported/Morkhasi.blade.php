@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header', [
        'H3Header' => 'گزارش ها',
        'CaptionHeader' => 'خانه - گزارش ها - ',
        'TitleHeader' => 'مرخصی',
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

    <div class="bg-white p-2 p-lg-4 d-flex flex-column align-items-center rounded-16">
        <div class="report col-12 mt-4">
            <div class="title pb-4 d-flex flex-column flex-md-row justify-content-between align-items-start">
                <h6 class="fw-bold mb-3">گزارش مرخصی پرسنل</h6>
                <div class="left d-flex flex-wrap flex-sm-row align-items-start gap-3">
                    <button class="btn-primary-nahira">مشاهده ی گزارش</button>
                </div>
            </div>
            <div class="input d-flex flex-wrap align-items-end gap-3 pb-5">
                <div class="d-flex flex-column align-items-start gap-2 col-12 col-sm-3">
                    <label for="Personal">سال</label>
                    <!-- <input id="Personal" class="col-12"/> -->
                    <select id="Personal" class="col-12 select-month pe-2">
                        <option value="1402">1402</option>
                        <option value="1401">1401</option>
                        <option value="1400">1400</option>
                        <option value="1399">1399</option>
                        <option value="1398">1398</option>
                        <option value="1397">1397</option>
                        <option value="1396">1396</option>
                        <option value="1395">1395</option>
                        <option value="1394">1394</option>
                        <option value="1393">1393</option>
                        <option value="1392">1392</option>
                        <option value="1391">1391</option>
                        <option value="1390">1390</option>
                    </select>
                </div>
                <div class="d-flex flex-column align-items-start gap-2 col-12 col-sm-3">
                    <label for="dateFrom">ماه</label>
                    <!-- <input id="dateFrom" type="number" class="col-12" /> -->
                    <select title="fg" id="month" class="col-12 select-month pe-2">
                        <option data-option-month="" class="first" value="فروردین">
                            فروردین
                        </option>
                        <option data-option-month="" class="first" value="اردیبهشت">
                            اردیبهشت
                        </option>
                        <option data-option-month="" class="first" value="خرداد">خرداد</option>
                        <option data-option-month="" class="first" value="تیر">تیر</option>
                        <option data-option-month="" class="first" value="مرداد">مرداد</option>
                        <option data-option-month="" class="first" value="شهریور">
                            شهریور
                        </option>
                        <option data-option-month="" class="second" value="مهر">مهر</option>
                        <option data-option-month="" class="second" value="آبان">آبان</option>
                        <option data-option-month="" class="second" value="آذر">آذر</option>
                        <option data-option-month="" class="second" value="دی">دی</option>
                        <option data-option-month="" class="second" value="بهمن">بهمن</option>
                        <option data-option-month="" class="second" value="اسفند">
                            اسفند
                        </option>
                    </select>
                </div>
                <div class="d-flex flex-column align-items-start gap-2 col-12 col-sm-3">
                    <label for="dateTo">روز</label>
                    <!-- <input id="dateTo" type="number" class="col-12" /> -->
                    <select title="df" name="name" id="day" class="col-12 select-month pe-2"></select>
                </div>
            </div>
            <div class="BoxTable overflow-x-scroll border-b-gray">
                <table class=" w-100">
                    <thead class="thead">
                        <tr class="tr">
                            <th class="text-nowrap pb-4 px-2 c-gray-dark fs-small-100">کد</th>
                            <th class="text-nowrap pb-4 px-2 c-gray-dark fs-small-100">نام</th>
                            <th class="text-nowrap pb-4 px-2 c-gray-dark fs-small-100">استفاده ماهانه</th>
                            <th class="text-nowrap pb-4 px-2 c-gray-dark fs-small-100">استفاده سالانه</th>
                            <th class="text-nowrap pb-4 px-2 c-gray-dark fs-small-100">تعداد ماهانه</th>
                            <th class="text-nowrap pb-4 px-2 c-gray-dark fs-small-100">تعداد سالانه</th>
                            <th class="text-nowrap pb-4 px-2 c-gray-dark fs-small-100">مانده ماهانه</th>
                            <th class="text-nowrap pb-4 px-2 c-gray-dark fs-small-100">مانده سالانه</th>
                            <th class="text-nowrap pb-4 px-2 c-gray-dark fs-small-100">جزییات مرخصی</th>
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



    </div>
</section>
<!-- Hero End -->
@endsection

@section('script')
<script src="{{asset('web/js/Pages/Manager/Reported/Morkhasi.js')}}" type="module"></script>

@endsection
