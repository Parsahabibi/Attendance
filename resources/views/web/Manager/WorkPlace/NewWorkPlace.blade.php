@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header', [
        'H3Header' => ' محل کار ',
        'CaptionHeader' => 'خانه - محل کار - ',
        'TitleHeader' => 'ثبت محل کار جدید',
    ])
@endsection

@section('sidebar')
    @include('web.Layouts.side-bar', [
        'ClassDashbord' => '',
        'ClassLocation' => 'active-item-sidebar',
        'ClassShift' => '',
        'ClassPersonel' => '',
        'ClassReported' => '',
        'ClassRequest' => '',
        'ClassProject' => '',
        'ClassHoliday' => '',
    ])
@endsection
<section class="">
    <div class="d-flex flex-column flex-lg-row card-form bg-white rounded-24 p-2 pt-4 p-lg-5 pb-lg-3">
        <div class="col-12 col-lg-6 ps-lg-5 mb-5 mb-lg-0">
            <h3 class="fs-5 fw-bold mb-3">ثبت محل کار جدید</h3>
            <div class="">
                <form class="col-12 d-flex flex-column align-items-start" action="" method="post">
                    <div class="col-12 d-flex mb-3">
                        <div class="col-6 d-flex flex-column mx-lg-2 mb-3 mb-lg-0">
                            <label for="">نام محل کار </label>
                            <input class="bg-gray rounded-16 py-2 mt-2" type="text">
                        </div>
                        <div class="col-6 d-flex flex-column mx-lg-2 mb-3 mb-lg-0">
                            <label for="">شهر</label>
                            <input class="bg-gray rounded-16 py-2 mt-2" type="text">
                        </div>
                    </div>
                    <div class="col-12 d-flex">
                        <div class="col-6 d-flex flex-column mx-lg-2 mb-3 mb-lg-0">
                            <label for="">آدرس محل کار</label>
                            <input class="bg-gray rounded-16 py-2 mt-2" type="text">
                        </div>
                        <div class="col-6 d-flex flex-column mx-lg-2 mb-3 mb-lg-0">
                            <label for="">شعاع(متر)</label>
                            <input class="bg-gray rounded-16 py-2 mt-2" type="text">
                        </div>
                    </div>
                    <div class="mt-2">
                        <p class="my-2 c-gray-dark">سیگنال WiFi (اختیاری)</p>
                        <p class="fs-small-100 c-gray">
                            در صورتی که میخواهید برای تردد در محدود آنتن دهی مودم محل کار
                            سیگنال WiFi هم تعریف کنید یک سیگنال جدید اضافه کنید.
                        </p>
                    </div>
                    <button class="btn-primary-nahira px-5 mt-5">ثبت</button>
                </form>
            </div>
        </div>
        <div class="col-12 col-lg-6 google-map">
            <iframe src="https://balad.ir/embed?p=Pqq5T7706TIl8o" width="100%" height="400px" frameborder="0"
                style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</section>
<!-- Hero End -->
@endsection
