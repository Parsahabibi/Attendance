@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header',['H3Header'=>'شیفت کاری','CaptionHeader'=>'خانه - شیفت - ','TitleHeader'=>'شیفت کاری'])
@endsection

@section('sidebar')
@include('web.Layouts.side-bar-employee',[
    'ClassDashbord'=>'',
    'ClassYourShift'=>'',
    'ClassReported'=>'',
    'ClassFunction'=>'',
    'ClassRequest'=>'',
    'ClassShift'=>'active-item-sidebar'
])
@endsection
<section class="">
    <div class="bg-white rounded-16 p-2 p-lg-4 d-flex flex-column align-items-center">
        <div class="report col-12 mt-4">
          <div class="title pb-4 d-flex flex-column flex-md-row justify-content-between align-items-start">
            <h6 class="fw-bold mb-3">شیفت کاری</h6>
          </div>
          <div class="input d-flex flex-wrap align-items-end justify-content-between gap-3 pb-4 borderTable">
            <div class="d-flex flex-row flex-sm-row align-items-baseline gap-2">
                <h5 class="h5 fs-medium">نام شیفت :</h5>
                <p class="p fs-medium">لورم</p>
            </div>
            <div class="d-flex align-items-baseline gap-2">
                <h5 class="h5 fs-medium">سقف اضافه کاری روز بدون شیفت :</h5>
                <p class="p fs-medium">۵ دقیقه</p>
            </div>
            <div class="d-flex align-items-baseline gap-2">
                <h5 class="h5 fs-medium">تبعیت از تعطیلات رسمی :</h5>
                <p class="p fs-medium">دارد</p>
            </div>
          </div>
          <div class="BoxTable overflow-x-scroll">
            <table class="table w-100">
              <thead class="">
                <tr class="">
                  
                </tr>
              </thead>
              <tbody>
                <tr class="d-flex align-items-center borderTable">
                    <td class="py-4 w-100 text-center border-0">
                        <div class="d-flex align-items-center  gap-4">
                            <h5 class="c-gray-dark3 fs-small-100 day">شنبه</h5>
                            <p class="c-gray-dark3 fs-small-100 date">۱۴۰۲/۰۲/۲۰</p>
                        </div>
                    </td>
                    <td class="py-4 w-100 text-center border-0">
                        <div class="d-flex align-items-center gap-2">
                            <h5 class="c-gray-dark3 fs-small-100 from">از</h5>
                            <p class=" fs-small-100 clock">۱۰:۰۰</p>
                        </div>
                    </td>
                    <td class="py-4 w-100 text-center border-0">
                        <div class="d-flex align-items-center gap-2">
                            <h5 class="c-gray-dark3 fs-small-100 from">تا</h5>
                            <p class="fs-small-100 clock">۱۹:۰۰</p>
                        </div>
                    </td>
                </tr>
                <tr class="d-flex align-items-center borderTable">
                    <td class="py-4 w-100 text-center border-0">
                        <div class="d-flex align-items-center gap-4">
                            <h5 class="c-gray-dark3 fs-small-100 day">یکشنبه</h5>
                            <p class="c-gray-dark3 fs-small-100 date">۱۴۰۲/۰۲/۲۱</p>
                        </div>
                    </td>
                    <td class="py-4 w-100 text-center border-0">
                        <div class="d-flex align-items-center gap-2">
                            <h5 class="c-gray-dark3 fs-small-100 from">از</h5>
                            <p class=" fs-small-100 clock">۱۰:۰۰</p>
                        </div>
                    </td>
                    <td class="py-4 w-100 text-center border-0">
                        <div class="d-flex align-items-center gap-2">
                            <h5 class="c-gray-dark3 fs-small-100 from">تا</h5>
                            <p class=" fs-small-100 clock">۱۹:۰۰</p>
                        </div>
                    </td>
                </tr>
                <tr class="d-flex align-items-center borderTable">
                    <td class="py-4 w-100 text-center border-0">
                        <div class="d-flex align-items-center gap-4">
                            <h5 class="c-gray-dark3 fs-small-100 day">دوشنبه</h5>
                            <p class="c-gray-dark3 fs-small-100 date">۱۴۰۲/۰۲/۲۲</p>
                        </div>
                    </td>
                    <td class="py-4 w-100 text-center border-0">
                        <div class="d-flex align-items-center gap-2">
                            <h5 class="c-gray-dark3 fs-small-100 from">از</h5>
                            <p class=" fs-small-100 clock">۱۰:۰۰</p>
                        </div>
                    </td>
                    <td class="py-4 w-100 text-center border-0">
                        <div class="d-flex align-items-center gap-2">
                            <h5 class="c-gray-dark3 fs-small-100 from">تا</h5>
                            <p class=" fs-small-100 clock">۱۹:۰۰</p>
                        </div>
                    </td>
                </tr>
                <tr class="d-flex align-items-center borderTable">
                    <td class="py-4 w-100 text-center border-0">
                        <div class="d-flex align-items-center gap-4">
                            <h5 class="c-gray-dark3 fs-small-100 day">سه‌شنبه</h5>
                            <p class="c-gray-dark3 fs-small-100 date">۱۴۰۲/۰۲/۲۳</p>
                        </div>
                    </td>
                    <td class="py-4 w-100 text-center border-0">
                        <div class="d-flex align-items-center gap-2">
                            <h5 class="c-gray-dark3 fs-small-100 from">از</h5>
                            <p class=" fs-small-100 clock">۱۰:۰۰</p>
                        </div>
                    </td>
                    <td class="py-4 w-100 text-center border-0">
                        <div class="d-flex align-items-center gap-2">
                            <h5 class="c-gray-dark3 fs-small-100 from">تا</h5>
                            <p class=" fs-small-100 clock">۱۹:۰۰</p>
                        </div>
                    </td>
                </tr>
                <tr class="d-flex align-items-center borderTable">
                    <td class="py-4 w-100 text-center border-0">
                        <div class="d-flex align-items-center gap-4">
                            <h5 class="c-gray-dark3 fs-small-100 day">چهارشنبه</h5>
                            <p class="c-gray-dark3 fs-small-100 date">۱۴۰۲/۰۲/۲۴</p>
                        </div>
                    </td>
                    <td class="py-4 w-100 text-center border-0">
                        <div class="d-flex align-items-center gap-2">
                            <h5 class="c-gray-dark3 fs-small-100 from">از</h5>
                            <p class=" fs-small-100 clock">۱۰:۰۰</p>
                        </div>
                    </td>
                    <td class="py-4 w-100 text-center border-0">
                        <div class="d-flex align-items-center gap-2">
                            <h5 class="c-gray-dark3 fs-small-100 from">تا</h5>
                            <p class="fs-small-100 clock">۱۹:۰۰</p>
                        </div>
                    </td>
                </tr>
                <tr class="d-flex align-items-center borderTable">
                    <td class="py-4 w-100 text-center border-0">
                        <div class="d-flex align-items-center gap-4">
                            <h5 class="c-gray-dark3 fs-small-100 day">پنج‌شنبه</h5>
                            <p class="c-gray-dark3 fs-small-100 date">۱۴۰۲/۰۲/۲۵</p>
                        </div>
                    </td>
                    <td class="py-4 w-100 text-center border-0">
                        <div class="d-flex align-items-center gap-2">
                            <h5 class="c-gray-dark3 fs-small-100 from">از</h5>
                            <p class="fs-small-100 clock">۱۰:۰۰</p>
                        </div>
                    </td>
                    <td class="py-4 w-100 text-center border-0">
                        <div class="d-flex align-items-center gap-2">
                            <h5 class="c-gray-dark3 fs-small-100 from">تا</h5>
                            <p class="fs-small-100 clock">۱۹:۰۰</p>
                        </div>
                    </td>
                </tr>
                <tr class="d-flex align-items-center">
                    <td class="py-4 w-100 text-center border-0">
                        <div class="d-flex align-items-center gap-4">
                            <h5 class="c-gray-dark3 fs-small-100 day">جمعه</h5>
                            <p class="c-gray-dark3 fs-small-100 date">۱۴۰۲/۰۲/۲۶</p>
                        </div>
                    </td>
                    <td class="py-4 w-100 text-center border-0">
                        <div class="d-flex align-items-center gap-2">
                            <h5 class="c-gray-dark3 fs-small-100 from">از</h5>
                            <p class="fs-small-100 clock">۱۰:۰۰</p>
                        </div>
                    </td>
                    <td class="py-4 w-100 text-center border-0">
                        <div class="d-flex align-items-center gap-2">
                            <h5 class="c-gray-dark3 fs-small-100 from">تا</h5>
                            <p class="fs-small-100 clock">۱۹:۰۰</p>
                        </div>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- <div
            class="empty d-flex flex-column align-items-center justify-content-center"
          >
            <p>داده‌ای موجود نیست</p>
            <img src="./Frame 126.png" alt="" />
          </div> -->
        </div>
      
    </div>
    
    {{-- <jdp-container style="z-index: 1000;"></jdp-container><jdp-overlay style="z-index: 999;"></jdp-overlay></body> --}}
</section>
<!-- Hero End -->
@endsection
