@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header', [
        'H3Header' => 'پروژه',
        'CaptionHeader' => 'خانه - پروژه ',
        'TitleHeader' => 'لیست پروژه',
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
        'ClassProject' => 'active-item-sidebar',
        'ClassHoliday' => '',
    ])
@endsection

<section class="bg-white rounded-16 p-3 p-md-4">
    <div class="d-flex justify-content-between">
        <div class="bg-gray ms-2 rounded-16 pe-2 d-field-header mb-2 mb-lg-0 d-flex align-items-center">
            <label for="input-search-header">
                <img src="{{ asset('images/search.svg') }}" alt="" style="height:24px">

            </label>
            <input type="text" name="" id="input-search-project" placeholder="جستجو کاربر" class="h-100 " data-input-search>
        </div>
        <button class="btn-primary-nahira" data-btn-search btn-search-project>جست و جو</button>
    </div>
    <div class="data-table">
        <div class="overflow-x-scroll">
            <table class="w-100 mt-4 border-b-gray ">
                <thead class="w-100 ">
                    <th class="col-1 c-gray-dark2 p-2 pb-3 text-nowrap">#</th>
                    <th class="col-7 c-gray-dark2 p-2 pb-3 text-nowrap">نام پروژه</th>
                    <th class="col-2 c-gray-dark2 p-2 pb-3 text-nowrap">پرسنل</th>
                    <th class="col-1 c-gray-dark2 p-2 pe-4 pb-3 text-nowrap">عملیات</th>
                    <th class="col-1 c-gray-dark2 p-2 pe-4 pb-3 text-nowrap">وضعیت</th>
                </thead>
                <tbody class="" id="table-project" table-Project data-check-empty-table> </tbody>
            </table>
        </div>
        <div class="m-5 mb-3 d-flex flex-column align-items-center" data-emplty-table-massage>
            <p class="c-gray-dark2 text-nowrap pb-3">
                داده‌ای موجود نیست
            </p>
            <img src="{{ asset('images/Frame 29.svg') }}" alt="" class="no-data" style="width:auto">
        </div>
    </div>
</section>
<!-- Hero End -->
@endsection
