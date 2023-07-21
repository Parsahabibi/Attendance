@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header', [
        'H3Header' => 'محل کار ',
        'CaptionHeader' => 'خانه - محل کار - ',
        'TitleHeader' => 'لیست محل کار ها',
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
    <div class="card-form bg-white rounded-24 p-2 pt-4 pt-lg-5 pe-lg-5 pb-lg-3">
        <h5 class="fw-bold mb-3 ">لیست محل کار ها</h5>
        <div>
            <form class="col-12 col-lg-8 d-flex flex-column flex-lg-row align-items-end" action="">
                <div class="col-12 col-lg-4 d-flex flex-column mx-lg-2 mb-3 mb-lg-0">
                    <label for="">نام محل کار </label>
                    <input class="bg-gray rounded-16 py-2 mt-2" type="text" data-input-name="">
                </div>
                <div class="col-12 col-lg-4 d-flex flex-column mx-lg-2 mb-3 mb-lg-0">
                    <label for="">شهر</label>
                    <input class="bg-gray rounded-16 py-2 mt-2" type="text" data-input-city="">
                </div>
                <button class="text-nowrap btn-primary-nahira"
                    btn-search="">
                    جست و جو
                </button>
            </form>
        </div>
    </div>
    <div class="bg-white rounded-24 mt-5 data-table p-2 pt-4 pt-lg-5 pe-lg-5 pb-lg-3 overflow-x-scroll">
        <table class="col-12">
            <thead>
                <tr>
                    <th class="fw-bold px-3 col-2 pb-3">شماره</th>
                    <th class="fw-bold px-3 col-2 pb-3 ">نام</th>
                    <th class="fw-bold px-3 col-2 pb-3">شهر</th>
                    <th class="fw-bold px-3 col-2 pb-3">آدرس</th>
                    <th class="fw-bold px-3 col-2 pb-3 text-center">عملیات</th>
                </tr>
            </thead>
            <tbody body-table="" data-check-empty-table> </tbody>
        </table>
        <div class="d-none border-t-gray py-5 m-5 d-flex flex-column align-items-center"data-emplty-table-massage>
            <p class="c-gray-dark2 text-nowrap pb-3">داده‌ای موجود نیست</p>
            <img src="{{asset('images/Frame 29.svg')}}" alt="" class="no-data">
        </div>
    </div>
</section>
<!-- Hero End -->
@endsection
