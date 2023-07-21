@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header', ['H3Header' => 'پروژه', 'CaptionHeader' => 'خانه - پروژه ', 'TitleHeader' => 'ثبت پروژه'])
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
<section class="bg-white rounded-16 p-3 p-md-4 pt-md-5">
    <div class="data-table d-flex flex-column flex-md-row justify-content-between ">
        <div class=" d-flex flex-column flex-sm-row ">
            <div class="bg-gray ms-2 rounded-16 pe-2 d-field-header mb-2 mb-lg-0 d-flex align-items-center">
                <label for="input-search-header">
                    <img src="{{ asset('images/search.svg') }}" alt="" style="height:24px">

                </label>
                <input type="text" name="" id="input-search-header" placeholder="جستجو کاربر" class="h-100 ">
            </div>
            <button class="btn-primary-nahira">جست و جو</button>
        </div>
        <div class=" data-dropdown ms-4"data-btn-dropdown-operation>
            <div class="text-nowrap" data-dropdown-state="" >
                <p>وضعیت</p>
                <img src="{{asset('images/Frame 134.svg')}}" alt="">
                <div class="dropdown dropdown-state d-none w-100" data-dropdown-operation>
                    <div class="p-2 text-center" item-dropdown-state="">فعال</div>
                    <div class="p-2 text-center" delete-row2="" class="text-nowrap" item-dropdown-state="">غیر فعال</div>
                </div>
            </div>
        </div>
    </div>
    <div class="data-table">
        <div class="overflow-x-scroll">
            <table class="w-100 mt-4 border-b-gray ">
                <thead class="w-100 ">
                    <th class="col-2 c-gray-dark2 p-2 pb-3 text-nowrap">#</th>
                    <th class="col-7 c-gray-dark2 p-2 pb-3 text-nowrap">نام پروژه</th>
                    <th class="col-3 c-gray-dark2 p-2 pb-3 text-nowrap">کد پرسنلی</th>
                   

                </thead>
                <tbody class="" table-request data-check-empty-table>
                    <tr class="border-t-gray">
                        <td class="col-2 c-gray-dark3 py-3 px-2">
                            ۱
                        </td>
                        <td class="col-7 c-gray-dark3 py-3 px-2">
                            زهرا
                        </td>
                        <td class="col-3 c-gray-dark3 px-2">۱۲۳۴۵۶۷۸۹</td>
                        
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
</section>

<!-- Hero End -->
@endsection
