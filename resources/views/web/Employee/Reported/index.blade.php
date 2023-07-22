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
        'H3Header' => 'گزارش کارکرد',
        'CaptionHeader' => 'خانه - کارکرد - ',
        'TitleHeader' => 'گزارش کارکرد',
    ])
@endsection

@section('sidebar')
    @include('web.Layouts.side-bar-employee', [
        'ClassDashbord' => '',
        'ClassYourShift' => '',
        'ClassReported' => 'active-item-sidebar',
        'ClassFunction' => '',
        'ClassRequest' => '',
        'ClassShift' => '',
    ])
@endsection
<section class="">

    <div class="bg-white rounded-16 p-2 p-lg-4 d-flex flex-column align-items-center">
        <div class="report col-12 mt-4">
            <div class="title pb-4 d-flex flex-column flex-md-row justify-content-between align-items-start">
                <h6 class="fw-bold mb-3">گزارش کارکرد</h6>
                <div class="left d-flex flex-wrap flex-sm-row align-items-start gap-3">
                    <button class="btn-primary-nahira">دریافت گزارش اکسل</button>
                </div>
            </div>
            <div class="input d-flex flex-wrap align-items-end gap-3 pb-5">
                <div class="d-flex flex-column align-items-start gap-2 col-12 col-sm-3">
                    <label for="dateFrom">از تاریخ</label>
                    <input id="dateFrom" data-jdp="" class="col-12 bg-input rounded-8">
                </div>
                <div class="d-flex flex-column align-items-start gap-2 col-12 col-sm-3">
                    <label for="dateTo">تا تاریخ</label>
                    <input id="dateTo" data-jdp="" class="col-12 bg-input rounded-8">
                </div>
                <button class="btn-primary-nahira">مشاهده ی گزارش کارکرد</button>
            </div>
            <div class="BoxTable overflow-x-scroll">
                <table class=" w-100">
                    <thead class="thead border-b-gray">
                        <tr class="tr d-flex align-items-center justify-content-between">
                            <th class="c-gray-dark3 text-nowrap w-100 text-center pb-4 px-2">مجموع حضور</th>
                            <th class="c-gray-dark3 text-nowrap w-100 text-center pb-4 px-2">غیبت</th>
                            <th class="c-gray-dark3 text-nowrap w-100 text-center pb-4 px-2">اضافه کار</th>
                            <th class="c-gray-dark3 text-nowrap w-100 text-center pb-4 px-2">کل حضور</th>
                            <th class="c-gray-dark3 text-nowrap w-100 text-center pb-4 px-2">روز کارکرد</th>
                            <th class="c-gray-dark3 text-nowrap w-100 text-center pb-4 px-2">مرخصی استحقاقی</th>
                            <th class="c-gray-dark3 text-nowrap w-100 text-center pb-4 px-2">استعلاجی</th>
                            <th class="c-gray-dark3 text-nowrap w-100 text-center pb-4 px-2">مازاد حضور</th>
                            <th class="c-gray-dark3 text-nowrap w-100 text-center pb-4 px-2">ماموریت</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="d-flex align-items-center justify-content-between borderTable">
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                        </tr>
                        <tr class="d-flex align-items-center justify-content-between borderTable">
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                        </tr>
                        <tr class="d-flex align-items-center justify-content-between borderTable">
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                            <td class="fs-small-100  c-gray-dark2 py-4 w-100 text-center">۰۱:۴۴</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-none m-5 mb-3 d-flex flex-column align-items-center" data-emplty-table-massage>
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
<script src="{{ asset('web/js/Pages/Employee/Reported/index.js') }}"></script>
@endsection
