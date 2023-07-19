@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header', [
        'H3Header' => 'پرسنل',
        'CaptionHeader' => 'خانه - پرسنل - ',
        'TitleHeader' => 'ثبت پرسنل جدید',
    ])
@endsection

@section('sidebar')
    @include('web.Layouts.side-bar', [
        'ClassDashbord' => '',
        'ClassLocation' => '',
        'ClassShift' => '',
        'ClassPersonel' => 'active-item-sidebar',
        'ClassReported' => '',
        'ClassRequest' => '',
        'ClassProject' => '',
        'ClassHoliday' => '',
    ])
@endsection
<section class="">
    <div class="p-3 p-md-4 rounded-16 bg-white">
        <form action="" class="col-12 d-flex flex-column justify-content-start align-items-end"
            name="formNewPersonel">
            <div class="mb-4 col-12">
                <h4 class="fs-6 fw-bold mb-3">اطلاعات ورود</h4>
                <div class="row">
                    <div class="col-12 col-md-4 d-flex flex-column mb-3">
                        <label for="" class="mb-1 c-gray-900">
                            نام کاربری
                            <span class="c-pink">*</span>
                        </label>
                        <input type="text" name="input2" class="bg-input rounded-8 py-md-2">
                        <p class="err-form-new-personel err-input pt-1"></p>
                    </div>
                    <div class="col-12 col-md-4 d-flex flex-column mb-3">
                        <label for="" class="mb-1 c-gray-900">
                            رمز عبور
                            <span class="c-pink">*</span>
                        </label>
                        <input type="password" name="input2"
                            class="bg-input rounded-8 py-md-2 password-signin-information password-signin-information1">
                        <p class="err-form-new-personel err-input pt-1"></p>
                        <p class="err-password-new-personel err-input pt-1"></p>
                    </div>
                    <div class="col-12 col-md-4 d-flex flex-column mb-3">
                        <label for="" class="mb-1 c-gray-900">
                            تکرار رمز عبور
                            <span class="c-pink">*</span>
                        </label>
                        <input type="password" name="input2"
                            class="bg-input rounded-8 py-md-2 password-signin-information password-signin-information2">
                        <p class="err-form-new-personel err-input pt-1"></p>
                        <p class="err-password-new-personel err-input pt-1"></p>
                    </div>
                </div>
            </div>
            <div class="mb-4 col-12">
                <h4 class="fs-6 fw-bold mb-3">اطلاعات پرسنلی</h4>
                <div class="row">
                    <div class="col-12 col-md-4 d-flex flex-column mb-3">
                        <label for="" class="mb-1 c-gray-900">
                            نام
                            <span class="c-pink">*</span>
                        </label>
                        <input type="text" name="input2" class="bg-input rounded-8 py-md-2">
                        <p class="err-form-new-personel err-input pt-1"></p>
                    </div>
                    <div class="col-12 col-md-4 d-flex flex-column mb-3">
                        <label for="" class="mb-1 c-gray-900">
                            نام خانوادگی
                            <span class="c-pink">*</span>
                        </label>
                        <input type="text" name="input2" class="bg-input rounded-8 py-md-2">
                        <p class="err-form-new-personel err-input pt-1"></p>
                    </div>
                    <div class="col-12 col-md-4 d-flex flex-column mb-3">
                        <label for="" class="mb-1 c-gray-900">
                            کد ملی
                            <span class="c-pink">*</span>
                        </label>
                        <input type="text" name="input2" pattern="\d*" class="bg-input rounded-8 py-md-2"
                            maxlength="10" id="international-code">
                        <p class="err-form-new-personel err-input pt-1"></p>
                    </div>
                </div>
            </div>
            <div class="mb-4 col-12">
                <h4 class="fs-6 fw-bold mb-3">اطلاعات شغلی</h4>
                <div class="row">
                    <div class="col-12 col-md-4 d-flex flex-column mb-3 mb-md-4">
                        <label for="" class="mb-1 c-gray-900">
                            محل کار
                            <span class="c-pink">*</span>
                        </label>
                        <input type="text" name="input2" class="bg-input rounded-8 py-md-2">
                        <p class="err-form-new-personel err-input pt-1"></p>
                    </div>
                    <div class="col-12 col-md-4 d-flex flex-column mb-3 mb-md-4">
                        <label for="" class="mb-1 c-gray-900">
                            شیفت
                            <span class="c-pink">*</span>
                        </label>
                        <input type="text" name="input2" class="bg-input rounded-8 py-md-2">
                        <p class="err-form-new-personel err-input pt-1"></p>
                    </div>
                    <div class="col-12 col-md-4 d-flex flex-column mb-3 mb-md-4">
                        <label for="" class="mb-1 c-gray-900">
                            کد پرسنل
                            <span class="c-pink">*</span>
                        </label>
                        <input type="text" name="input2" class="bg-input rounded-8 py-md-2">
                        <p class="err-form-new-personel err-input pt-1"></p>
                    </div>
                    <div class="col-12 col-md-4 d-flex flex-column mb-3">
                        <label for="" class="mb-1 c-gray-900">
                            تاریخ شروع کار
                            <span class="c-pink">*</span>
                        </label>
                        <input type="date" name="input2" class="bg-input rounded-8 py-md-2">
                        <p class="err-form-new-personel err-input pt-1"></p>
                    </div>
                    <div class="col-12 col-md-4 d-flex flex-column mb-3">
                        <label for="" class="mb-1 c-gray-900">
                            تاریخ پایان کار <span class="c-gray">(اختیاری)</span>
                            <span class="c-pink">*</span>
                        </label>
                        <input type="date" name="input" class="bg-input rounded-8 py-md-2">
                        <!-- <p class="err-form-new-personel err-input pt-1"></p> -->
                    </div>
                    <div class="col-12 col-md-4 d-flex flex-column mb-3">
                        <label for="" class="mb-1 c-gray-900">
                            سیاست کاری
                            <span class="c-pink">*</span>
                        </label>
                        <input type="text" name="input2" class="bg-input rounded-8 py-md-2">
                        <p class="err-form-new-personel err-input pt-1"></p>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <h6 class="mb-3 fw-bold">روش ثبت تردد</h6>
                <div class="fs-small-100 pe-3 mb-3">
                    <h6 class="d-inline fw-bold">موقعیت مکانی(gps) :</h6>
                    <p class="fs-small-100 d-inline">
                        با انتخاب این گزینه پرسنل باید در هنگام ثبت تردد gps و wifi دستگاه
                        خود را روشن کرده و در محدوده مکانی انتخاب شده توسط مدیر تردد خود
                        را ثبت کند.
                    </p>
                </div>
                <div class="pe-3 mb-3">
                    <h6 class="fs-small-100 d-inline fw-bold">سیگنال وای فای(WiFi) :</h6>
                    <p class="fs-small-100 d-inline">
                        (مخصوص کاربران اندروید) با انتخاب این گزینه پرسنل باید در هنگام
                        ثبت تردد gps و wifi دستگاه خود را روشن کرده و در محدوده WiFi
                        انتخاب شده توسط مدیر تردد خود را ثبت کند.(فقط مخصوص پرسنلی که از
                        اپلیکیشن اندروید استفاده میکنند)
                    </p>
                </div>
                <div class="mt-3">
                    <h6 class="fs-small-100 fw-bold">محدود کردن دستگاه مورد استفاده در ثبت تردد</h6>
                    <div class="d-flex align-items-start" role="button">
                        <input type="checkbox" name="" id="device-type" class="m-2">

                        <label for="device-type" class="fs-small-100 mt-2" role="button">
                            <h6 class="fs-small-100 d-inline fw-bold">نوع دستگاه:</h6>
                            در صورت انتخاب هر کدام از دستگاه ها، این پرسنل فقط از طریق همان
                            نوع وب و یا فقط اپلیکیشن اندروید امکان ثبت تردد خواهد
                            داشت.
                        </label>
                    </div>
                </div>
            </div>
            <button id="btn-form-new-personel" class="btn-primary-nahira px-5"
                type="submit">
                ثبت
            </button>
        </form>
    </div>
</section>
<!-- Hero End -->
@endsection
