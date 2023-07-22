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
        'H3Header' => 'درخواست ها',
        'CaptionHeader' => 'خانه - درخواست ها - ',
        'TitleHeader' => 'درخواست ها',
    ])
@endsection

@section('sidebar')
    @include('web.Layouts.side-bar-employee', [
        'ClassDashbord' => '',
        'ClassYourShift' => '',
        'ClassReported' => '',
        'ClassFunction' => '',
        'ClassRequest' => 'active-item-sidebar',
        'ClassShift' => '',
    ])
@endsection
<section class="">
    <div class="bg-white p-3 p-lg-4 rounded-16 mb-3">
        <h6 class="fw-bold mb-3">درخواست های جدید</h6>
        <form action="" data-form-validation
            class="col-12 col-lg-10 d-flex flex-column flex-lg-row align-items-lg-end align-items-start mt-3 mt-lg-4">
            <div class="col-12 col-lg-3 d-flex flex-column mx-lg-2 mb-3 mb-lg-0 position-relative">
                <label for="">نوع</label>
                <img src="{{ asset('images/down.svg') }}" alt="" class="btn-toggle-down position-absolute">
                <input data-input-validation class="fs-small c-gray-dark3 bg-gray rounded-16 py-2 mt-1" role="button"
                    type="text" readonly value="همه" data-dropdown-input data-value-request />
                <p class="err-form-new-personel err-input pt-1"></p>

                <div class="d-none bg-white w-100 rounded-16 position-absolute top-100 box-shadow pt-2"style="z-index:10"
                    data-dropdown-div>
                    <div class="fs-small c-gray-dark3" role="button" data-item-dropdown>
                        <p class="px-2 py-2">همه</p>
                    </div>
                    <div class="fs-small c-gray-dark3 border-t-gray" role="button" data-item-dropdown>
                        <p class="px-2 py-2">تردد</p>
                    </div>
                    <div class="fs-small c-gray-dark3 border-t-gray" role="button" data-item-dropdown>
                        <p class="px-2 py-2">مرخصی</p>
                    </div>
                    <div class="fs-small c-gray-dark3 border-t-gray" role="button" data-item-dropdown>
                        <p class="px-2 py-2">اضافه کار</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex flex-column mx-lg-2 mb-3 mb-lg-0 position-relative mt-3 mt-lg-0">
                <label for="">از تاریخ</label>
                <input readonly data-input-validation class="bg-gray rounded-16 py-2 mt-1" type="text" id="dateFrom"
                    data-jdp data-value-request />
                <p class="err-form-new-personel err-input pt-1"></p>

            </div>
            <div class="col-12 col-lg-3 d-flex flex-column mx-lg-2 mb-3 mb-lg-0 position-relative mt-3 mt-lg-0">
                <label for="">تا تاریخ</label>
                <input readonly data-input-validation class="bg-gray rounded-16 py-2 mt-1" type="text" id="dateFrom"
                    data-jdp data-value-request />
                <p class="err-form-new-personel err-input pt-1"></p>

            </div>

            <button class="text-nowrap btn-primary-nahira  mt-3 mt-lg-0"type="button" btn-submit-form-validation
                data-btn-push-request>مشاهده ی
                گزارش تردد</button>
        </form>
        <div class="overflow-x-scroll">
            <table class="w-100 mt-4 border-b-gray ">
                <thead class="w-100 ">
                    <th class="c-gray-dark2 py-2 pe-5 pb-3 text-nowrap">نوع درخواست</th>
                    <th class="c-gray-dark2 py-2 pe-5 pb-3 text-nowrap">زمان شروع</th>
                    <th class="c-gray-dark2 py-2 pe-5 pb-3 text-nowrap">زمان پایان</th>
                    <th class="c-gray-dark2 py-2 pe-5 pb-3 text-nowrap">عملیات</th>
                </thead>
                <tbody class="" table-request data-check-empty-table></tbody>
            </table>
        </div>
        <div class="d-none m-5 mb-3 d-flex flex-column align-items-center" data-emplty-table-massage>
            <p class="c-gray-dark2 text-nowrap pb-3">
                داده‌ای موجود نیست
            </p>
            <img src="{{ asset('images/Frame 29.svg') }}" alt="" class="no-data">
        </div>
    </div>
    <div class="bg-white p-3 p-lg-4 rounded-16">
        <h6 class="fw-bold mb-3">بایگانی درخواست ها</h6>
        <form action=""
            class="col-12 col-lg-10 d-flex flex-column flex-lg-row align-items-lg-end align-items-start mt-3 mt-lg-4">
            <div class="col-12 col-lg-3 d-flex flex-column mx-lg-2 mb-3 mb-lg-0 position-relative">
                <label for="">نوع</label>
                <img src="{{ asset('images/down.svg') }}" alt="" class="btn-toggle-down position-absolute">
                <input class="fs-small c-gray-dark3 bg-gray rounded-16 py-2 mt-1" role="button" type="text" readonly
                    value="همه" data-dropdown-input />
                <p class="err-form-new-personel err-input pt-1"></p>
                <div class="d-none bg-white w-100 rounded-16 position-absolute top-100 box-shadow pt-2"style="z-index:10"
                    data-dropdown-div>
                    <div class="fs-small c-gray-dark3" role="button" data-item-dropdown>
                        <p class="px-2 py-2">همه</p>
                    </div>
                    <div class="fs-small c-gray-dark3 border-t-gray" role="button" data-item-dropdown>
                        <p class="px-2 py-2">تردد</p>
                    </div>
                    <div class="fs-small c-gray-dark3 border-t-gray" role="button" data-item-dropdown>
                        <p class="px-2 py-2">مرخصی</p>
                    </div>
                    <div class="fs-small c-gray-dark3 border-t-gray" role="button" data-item-dropdown>
                        <p class="px-2 py-2">اضافه کار</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex flex-column mx-lg-2 mb-3 mb-lg-0 position-relative">
                <label for="">از تاریخ</label>
                <input readonly class="bg-gray rounded-16 py-2 mt-1" type="text" id="dateFrom" data-jdp />
                <p class="err-form-new-personel err-input pt-1"></p>
            </div>
            <div class="col-12 col-lg-3 d-flex flex-column mx-lg-2 mb-3 mb-lg-0 position-relative">
                <label for="">تا تاریخ</label>
                <input readonly class="bg-gray rounded-16 py-2 mt-1" type="text" id="dateFrom" data-jdp />
                <p class="err-form-new-personel err-input pt-1"></p>
            </div>

            <button class="text-nowrap btn-primary-nahira"type="submit">مشاهده ی گزارش تردد</button>
        </form>
        <div class="overflow-x-scroll">
            <table class="w-100 mt-4">
                <thead class="w-100">
                    <th class="c-gray-dark2 py-2 pe-5 pb-3 text-nowrap">نوع درخواست</th>
                    <th class="c-gray-dark2 py-2 pe-5 pb-3 text-nowrap">زمان شروع</th>
                    <th class="c-gray-dark2 py-2 pe-5 pb-3 text-nowrap">زمان پایان</th>
                    <th class="c-gray-dark2 py-2 pe-5 pb-3 text-nowrap">عملیات</th>
                </thead>
                <tbody class="" table-request data-check-empty-table></tbody>
            </table>
        </div>

        <div class="d-none m-5 mb-3 d-flex flex-column align-items-center" data-emplty-table-massage>
            <p class="c-gray-dark2 text-nowrap pb-3">
                داده‌ای موجود نیست
            </p>
            <img src="{{ asset('images/Frame 29.svg') }}" alt="" class="no-data">
        </div>
    </div>
</section>
<!-- Hero End -->
@endsection

@section('script')
<script type="module" src="{{asset('web/js/component/DropDown.js')}}"></script>
<script src="{{ asset('web/js/Pages/Employee/Request/index.js') }}"></script>
@endsection
