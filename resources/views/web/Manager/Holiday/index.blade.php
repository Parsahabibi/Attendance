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
        'H3Header' => 'تعریف تعطیلات',
        'CaptionHeader' => 'خانه - تعطیلات - ',
        'TitleHeader' => 'تعریف تعطیلات',
    ])
@endsection

@section('sidebar')
    @include('web.Layouts.side-bar', [
        'ClassDashbord' => '',
        'ClassLocation' => '',
        'ClassShift' => '',
        'ClassPersonel' => '',
        'ClassReported' => '',
        'ClassRequest' => '',
        'ClassProject' => '',
        'ClassHoliday' => 'active-item-sidebar',
    ])
@endsection
<section class="">
    <div class="">
        <div class="rounded-16 p-3 p-md-4 bg-white">
            <h5 class="mb-3 fw-bold">تعریف تعطیلات</h5>
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-end">
                <div class="col-md-6  col-12 row">
                    <div class="col-12 col-md-6  d-flex flex-column mb-3">
                        <label for="" class="mb-1 c-gray-900"> از تاریخ</label>
                        <input type="text" readonly name="input" class="bg-input rounded-8 py-md-2" data-jdp>
                    </div>
                    <div class="col-12 col-md-6 d-flex flex-column mb-3 mb-lg-0">
                        <label for="" class="mb-1 c-gray-900"> تا تاریخ</label>

                        <input type="text" readonly name="input" class="bg-input rounded-8 py-md-2" data-jdp>
                    </div>
                </div>
                <button class="btn-primary-nahira">ثبت</button>
            </div>
        </div>
        <div class="rounded-16 p-3 p-md-4 bg-white mt-3">
            <h5 class="mb-3 fw-bold">تعطیلات</h5>
            <div class="d-flex flex-md-row flex-column justify-content-between align-items-end">
                <div class="col-md-6 col-12 row">
                    <div class="col-12 col-md-6 d-flex flex-column mb-3 mb-lg-0">
                        <label for="" class="mb-1 c-gray-900">ماه</label>
                        {{-- <input type="month" name="input" class="bg-input rounded-8 py-md-2"> --}}
                        <select title="" id="" class="select-month">
                            <option data-option-month="" class="" value="فروردین">
                                فروردین
                            </option>
                            <option data-option-month="" class="" value="اردیبهشت">
                                اردیبهشت
                            </option>
                            <option data-option-month="" class="" value="خرداد">خرداد</option>
                            <option data-option-month="" class="" value="تیر">تیر</option>
                            <option data-option-month="" class="" value="مرداد">مرداد</option>
                            <option data-option-month="" class="" value="شهریور">
                                شهریور
                            </option>
                            <option data-option-month="" class="" value="مهر">مهر</option>
                            <option data-option-month="" class="" value="آبان">آبان</option>
                            <option data-option-month="" class="" value="آذر">آذر</option>
                            <option data-option-month="" class="" value="دی">دی</option>
                            <option data-option-month="" class="" value="بهمن">بهمن</option>
                            <option data-option-month="" class="" value="اسفند">
                                اسفند
                            </option>
                        </select>
                        
                    </div>
                    <div class="col-12 col-md-6 d-flex flex-column mb-3 mb-lg-0">
                        <label for="" class="mb-1 c-gray-900">سال</label>
                        <input type="number" min="1402" max="1500" step="1" value="1402" name="input"
                            class="bg-input rounded-8 py-md-2">
                    </div>
                </div>
                <button class="btn-primary-nahira">دریافت لیست تعطیلات</button>
            </div>
            <div class="bg-white rounded-24 mt-5 data-table col-12 overflow-x-scroll">
                <table class="w-100 col-12">
                    <thead>
                        <tr class="justify-content-between">
                            <th class="text-nowrap c-gray-dark col-4 py-4 ">تاریخ</th>
                            <th class="text-nowrap c-gray-dark col-4 ">عنوان تعطیلات</th>
                            <th class="text-nowrap c-gray-dark col-4 text-start ps-5">عملیات</th>
                        </tr>
                    </thead>
                    <tbody body-table="" class="">
                        <tr class="border-t-gray">
                            <td class="text-nowrap px-2 c-gray-dark3 col-4 py-3 ">۱۴۰۲/۰۲/۰۵</td>
                            <td class="text-nowrap px-2 c-gray-dark3 col-4  ">رحلت حضرت امام خمینی</td>

                            <td class="data-dropdown col-4 py-3 ">
                                <div class="m-0 float-start ms-4" data-dropdown="">
                                    عملیات
                                    <img src="{{ asset('images/Frame 134.svg') }}" alt="">
                                    <div class="dropdown" style="display: none;">
                                        <div>ویرایش</div>
                                        <div delete-row="">حذف</div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="border-t-gray">
                            <td class="text-nowrap px-2 c-gray-dark3 col-4">۱۴۰۲/۰۲/۰۵</td>
                            <td class="text-nowrap px-2 c-gray-dark3 col-4">قیام 15 خرداد</td>

                            <td class="data-dropdown col-4 py-3">
                                <div class="m-0 float-start ms-4" data-dropdown="">
                                    عملیات
                                    <img src="{{ asset('images/Frame 134.svg') }}" alt="">
                                    <div class="dropdown" style="display: none;">
                                        <div>ویرایش</div>
                                        <div delete-row="">حذف</div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-none border-t-gray py-5 m-5 d-flex flex-column align-items-center">
                    <p class="c-gray-dark2 text-nowrap pb-3">داده‌ای موجود نیست</p>
                    <img src="{{ asset('images/Frame 29.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero End -->
@endsection

@section('script')
<script>
    jalaliDatepicker.startWatch();
</script>
@endsection
