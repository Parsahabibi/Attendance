@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header', ['H3Header' => 'داشبورد', 'CaptionHeader' => '', 'TitleHeader' => 'حضور و غیاب'])
@endsection

@section('sidebar')
    @include('web.Layouts.side-bar', [
        'ClassDashbord' => 'active-item-sidebar',
        'ClassLocation' => '',
        'ClassShift' => '',
        'ClassPersonel' => '',
        'ClassReported' => '',
        'ClassRequest' => '',
        'ClassProject' => '',
        'ClassHoliday' => ''
    ])
@endsection
<section class="">
    <div class="d-flex flex-column flex-lg-row m-0">
        <div class="container col-12 col-lg-5 ps-lg-5 ps-3">
          <div class="row g-4">
            <div class="col-6">
              <div class="item-container col-12 rounded-16 p-xl-4 p-3">
                <div class="d-flex justify-content-between">
                  <div class="pb-5">
                    <img src="{{asset('./images/personel-icon.svg')}}" alt="" />
                  </div>
                  <span class="fs-3 c-gray">1</span>
                </div>
                <h5 class="fs-medium text-nowrap">پرسنل</h5>
              </div>
            </div>
            <div class="col-6">
              <div class="item-container col-12 rounded-16 p-xl-4 p-3">
                <div class="d-flex justify-content-between">
                  <div class="pb-5">
                    <img src="{{asset('./images/active-personel-icon.svg')}} "alt="" />
                  </div>
                  <span class="fs-3 c-gray">1</span>
                </div>
                <h5 class="fs-medium text-nowrap">پرسنل فعال</h5>
              </div>
            </div>
            <div class="col-6">
              <div class="item-container col-12 rounded-16 p-xl-4 p-3">
                <div class="d-flex justify-content-between">
                  <div class="pb-5">
                    <img src="{{asset('./images/deactive-personel.svg')}}" alt="" />
                  </div>
                  <span class="fs-3 c-gray">2</span>
                </div>
                <h5 class="fs-medium text-nowrap">پرسنل غیرفعال</h5>
              </div>
            </div>
            <div class="col-6">
              <div class="item-container col-12 rounded-16 p-xl-4 p-3">
                <div class="d-flex justify-content-between">
                  <div class="pb-5">
                    <img src="{{asset('./images/Frame 22.svg')}}" alt="" />
                  </div>
                  <span class="fs-3 c-gray">2</span>
                </div>
                <h5 class="fs-medium text-nowrap">حاضرین</h5>
              </div>
            </div>
            <div class="col-6">
              <div class="item-container col-12 rounded-16 p-xl-4 p-3">
                <div class="d-flex justify-content-between">
                  <div class="pb-5">
                    <img src="{{asset('./images/absent-icon.svg')}}" alt="" />
                  </div>
                  <span class="fs-3 c-gray">3</span>
                </div>
                <h5 class="fs-medium text-nowrap">غایبین</h5>
              </div>
            </div>
            <div class="col-6">
              <div class="item-container col-12 rounded-16 p-xl-4 p-3">
                <div class="d-flex justify-content-between">
                  <div class="pb-5">
                    <img src="{{asset('./images/count-vacation-icon.svg')}}" alt="" />
                  </div>
                  <span class="fs-3 c-gray">3</span>
                </div>
                <h5 class="fs-medium text-nowrap">تعداد مرخصی</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-7">
          <div
            class="col-12 card-container bg-orange rounded-16 d-flex flex-column flex-md-row align-items-center p-3 mt-4 mt-lg-0 mb-4"
          >
            <div class="col-md-4 col-10">
              <img class="w-100" src="{{asset('./images/Frame 20.svg')}}" alt="" />
            </div>
            <div
              class="col-md-8 col-12 d-flex flex-column justify-content-between align-items-md-end align-items-center"
            >
              <h5
                class="c-white text-md-start text-center mb-2 lh-base col-md-10 col-12"
              >
                جهت استفاده از سامانه حضور و غیاب فینتو، مراحل زیر را تکمیل کنید.
              </h5>
              <div class="d-flex flex-wrap">
                <div
                  class="item-card-container bg-green rounded-16 py-2 px-4 c-white me-2 mb-2"
                >
                  <p class="fs-6 text-nowrap">ثبت محل کار</p>
                </div>
                <div
                  class="item-card-container bg-green rounded-16 py-2 px-4 c-white me-2 mb-2"
                >
                  <p class="fs-6 text-nowrap">تعریف شیفت</p>
                </div>
                <div
                  class="item-card-container bg-green rounded-16 py-2 px-4 c-white me-2 mb-2"
                >
                  <p class="fs-6 text-nowrap">ثبت پرسنل</p>
                </div>
                <div
                  class="item-card-container bg-green rounded-16 py-2 px-4 c-white me-2 mb-2"
                >
                  <p class="fs-6 text-nowrap">نصب نرم افزار موبایل</p>
                </div>
              </div>
            </div>
          </div>
  
          <div class="container col-12">
            <div class="row g-4 d-flex flex-column flex-md-row">
              <div class="col-md-6 col-12 pe-0 ps-md-4 ps-0">
                <div class="col-12 rounded-16 p-lg-4 p-3 bg-white">
                  <div
                    class="d-flex justify-content-between align-items-center mb-4"
                  >
                    <h6 class="fw-bold">حاضرین</h6>
                    <div class="img-refresh" onclick="rotate()">
                      <img src="{{asset("./images/refresh-icon.svg")}}" alt="" role="button" />
                    </div>
                  </div>
                  <div class="overflow-x-scroll">
                    <table class="col-12">
                      <thead>
                        <tr>
                          <th></th>
                          <th class="text-center text-nowrap fs-small-100 p-2 my-5 px-1">کد پرسنلی</th>
                          <th class="text-center text-nowrap fs-small-100 px-1">نام</th>
                          <th class="text-center text-nowrap fs-small-100 px-1">محل کار</th>
                          <th class="text-center text-nowrap fs-small-100 px-1">ساعت ورود</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="">
                            <div
                              class="border-table my-1"
                              style="background-color: #009ef7"
                            ></div>
                          </td>
                          <td class="text-center text-nowrap fs-small-100 c-gray-dark p-2 my-5">12345</td>
                          <td class="text-center text-nowrap fs-small-100 c-gray-dark">هانیه ضرغامی</td>
                          <td class="text-center text-nowrap fs-small-100 c-gray-dark">ناهیرا</td>
                          <td class="text-center text-nowrap fs-small-100 c-gray-dark">۱۴ : ۳۲</td>
                        </tr>
                        <tr>
                          <td class="">
                            <div
                              class="border-table my-1"
                              style="background-color: #50cd89"
                            ></div>
                          </td>
                          <td class="text-center text-nowrap fs-small-100 c-gray-dark p-2 my-5">12345</td>
                          <td class="text-center text-nowrap fs-small-100 c-gray-dark">هانیه ضرغامی</td>
                          <td class="text-center text-nowrap fs-small-100 c-gray-dark">ناهیرا</td>
                          <td class="text-center text-nowrap fs-small-100 c-gray-dark">۱۴ : ۳۲</td>
                        </tr>
                        <tr>
                          <td class="">
                            <div
                              class="border-table my-1"
                              style="background-color: #ffc712"
                            ></div>
                          </td>
                          <td class="text-center text-nowrap fs-small-100 c-gray-dark p-2 my-5">12345</td>
                          <td class="text-center text-nowrap fs-small-100 c-gray-dark">هانیه ضرغامی</td>
                          <td class="text-center text-nowrap fs-small-100 c-gray-dark">ناهیرا</td>
                          <td class="text-center text-nowrap fs-small-100 c-gray-dark">۱۴ : ۳۲</td>
                        </tr>
                        <tr>
                          <td class="">
                            <div
                              class="border-table my-1"
                              style="background-color: #f2416f"
                            ></div>
                          </td>
                          <td class="text-center text-nowrap fs-small-100 c-gray-dark p-2 my-5">12345</td>
                          <td class="text-center text-nowrap fs-small-100 c-gray-dark">هانیه ضرغامی</td>
                          <td class="text-center text-nowrap fs-small-100 c-gray-dark">ناهیرا</td>
                          <td class="text-center text-nowrap fs-small-100 c-gray-dark">۱۴ : ۳۲</td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="d-none m-5 d-flex flex-column align-items-center">
                      <p class="c-gray-dark2 text-nowrap pb-3">
                        داده‌ای موجود نیست
                      </p>
                      <img src="{{asset('./images/Frame 29.svg')}}" alt="" class="no-data"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-12 px-0">
                <div class="col-12 rounded-16 p-lg-4 p-3 bg-white">
                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <h6 class="fw-bold">غایبین</h6>
                    <div class="img-refresh" onclick="rotate2()">
                      <img src="{{asset('./images/refresh-icon.svg')}}" alt="" role="button" />
                    </div>
                  </div>
                  <div class="overflow-x-scroll">
                    <table
                      class="d-flex flex-column justify-content-strat align-items-start"
                    >
                      <thead>
                        <tr>
                          <th></th>
                          <th class="text-center fs-small-100 p-2 my-5 px-1">کد پرسنلی</th>
                          <th class="text-center fs-small-100 px-1 pe-4">نام</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="">
                            <div
                              class="border-table my-1"
                              style="background-color: #009ef7"
                            ></div>
                          </td>
                          <td class="text-center c-gray-dark fs-small-100 py-2 px-3 my-5">
                            12345
                          </td>
                          <td class="text-center c-gray-dark fs-small-100">هانیه ضرغامی</td>
                        </tr>
                        <tr>
                          <td class="">
                            <div
                              class="border-table my-1"
                              style="background-color: #50cd89"
                            ></div>
                          </td>
                          <td class="text-center c-gray-dark fs-small-100 py-2 px-3 my-5">
                            12345
                          </td>
                          <td class="text-center c-gray-dark fs-small-100">هانیه ضرغامی</td>
                        </tr>
                        <tr>
                          <td class="">
                            <div
                              class="border-table my-1"
                              style="background-color: #ffc712"
                            ></div>
                          </td>
                          <td class="text-center c-gray-dark fs-small-100 py-2 px-3 my-5">
                            12345
                          </td>
                          <td class="text-center c-gray-dark fs-small-100">هانیه ضرغامی</td>
                        </tr>
                        <tr>
                          <td class="">
                            <div
                              class="border-table my-1"
                              style="background-color: #f2416f"
                            ></div>
                          </td>
                          <td class="text-center c-gray-dark fs-small-100 py-2 px-3 my-5">
                            12345
                          </td>
                          <td class="text-center c-gray-dark fs-small-100">هانیه ضرغامی</td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="d-none m-5 d-flex flex-column align-items-center">
                      <p class="c-gray-dark2 text-nowrap pb-3">
                        داده‌ای موجود نیست
                      </p>
                      <img src="{{asset('./images/Frame 29.svg')}}" alt="" class="no-data" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
<!-- Hero End -->
@endsection

@section('script')
<script src="{{asset('web/js/Pages/Manager/Dashbord/index.js')}}"></script>
<script src="{{asset('web/js/Pages/Manager/Dashbord/WindowSideBar.js')}}" type="module"></script>

@endsection