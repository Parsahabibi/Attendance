@extends('web.layouts.master')

@section('head-tag')
    <title></title>
    
    <link rel="stylesheet" href="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.css" />
    <script type="text/javascript" src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>

@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header', ['H3Header' => 'پرسنل', 'CaptionHeader' => 'خانه - پرسنل - ', 'TitleHeader' => 'لیست پرسنل'])
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
    <div
      class="personel-list data-table p-4 rounded-24 bg-white position-relative"
    >
      {{-- <div class="container-modal hide">
        <div class="bg-modal" close-modal></div>
        <div class="modal-delete rounded-24 p-4">
          <div class="d-flex justify-content-between">
            <h6>حذف محل کار</h6>
            <img src="{{asset('images/Frame 77.svg')}}" alt="close" role="button" close-modal />
          </div>
          <div
            class="body-modal-delete d-flex flex-column justify-content-center align-items-center py-5"
          >
            <div class="p-modal-delete px-5 py-4 text-nowrap mb-5">
              <h6>آیا می‌خواهید محل کار انتخابی حذف شود؟</h6>
            </div>
            <div>
              <button class="mx-3 py-2 px-4 rounded-24" ok-delete-row>
                بله
              </button>
              <button class="mx-3 py-2 px-4 rounded-24" close-modal>خیر</button>
            </div>
          </div>
        </div>
      </div> --}}
      <div
        class="head-personel-list d-flex flex-column flex-lg-row justify-content-between align-items-end mb-3"
      >
        <div class="col-12 col-lg-10">
          <form
            class="col-12 d-flex flex-column flex-lg-row align-items-end"
            action=""
          >
            <div
              class="col-12 col-lg-4 d-flex flex-column mx-lg-2 mb-3 mb-lg-0 position-relative"
            >
              <img
                class="position-absolute icon-serch-input "
                src="{{asset('images/Frame 128.svg')}}"
                alt=""
               
              />
              <input
                class="bg-gray rounded-16 py-3 mt-2 pe-5"
                type="text"
                placeholder="جستجو کاربر"
                id="input-search-personel"
              />
            </div>

            <button
              class="btn-primary-nahira"
              btn-search
            >
              جست و جو
            </button>
          </form>
        </div>

        <div class="text-center  export-excel">
          <div class="text-nowrap btn-secondary-nahira py-3" style="width: auto">
            <p>دریافت اکسل</p>
          </div>
        </div>
      </div>
      <div class="overflow-x-scroll">
        <table class="w-100" id="myTable">
          <thead>
            <tr>
              <th class="py-4 col-1 c-gray-dark2">#</th>
              <th class="text-center c-gray-dark2">کد پرسنلی</th>
              <th class="text-center c-gray-dark2">نام</th>
              <th class="text-center c-gray-dark2">نام خانوادگی</th>
              <th class="text-center c-gray-dark2">شیفت</th>
              <th class="text-center c-gray-dark2">عملیات</th>
              <th class="text-center c-gray-dark2">وضعیت</th>
            </tr>
          </thead>
          <tbody id="table-personel">
            <tr class="border-t-gray">
                <td class="c-gray-dark3 py-3 px-2 table-personel">
                    <div class="d-flex align-items-center">
                        <p class="ps-5">1</p>
                    <img src="{{asset('images/Frame 127.svg')}}" alt="" />
                    </div>

                </td>
                <td class="fs-small-100 text-center c-gray-dark3 px-2">۱۲۳۴۵۶۷۸۹</td>
                <td class="fs-small-100 text-center c-gray-dark3 px-2">زهرا</td>
                <td class="fs-small-100 text-center c-gray-dark3 px-2">مرادی نیا</td>
                <td class="fs-small-100 text-center c-gray-dark3 px-2">ساعتی</td>
                <td class="fs-small-100 text-center data-dropdown c-gray-dark3 px-2">
                  <div class="" data-dropdown>
                    عملیات
                    <img src="{{asset('images/Frame 134.svg')}}" alt="" />
                    <div class="dropdown dropdown-operation">
                      <div>ویرایش</div>
                      <div delete-row>حذف</div>
                    </div>
                  </div>
                </td>
                <td class="fs-small-100 text-center data-dropdown c-gray-dark3 px-2">
                  <div class="text-nowrap" data-dropdown-state>
                    <p>وضعیت</p>
                    <img src="{{asset('images/Frame 134.svg')}}" alt="" />
                    <div class="dropdown dropdown-state">
                      <div item-dropdown-state>فعال</div>
                      <div delete-row2 class="text-nowrap" item-dropdown-state>غیر فعال</div>
                    </div>
                  </div>
                </td>
            </tr>
          
        </tbody>
        </table>
        <div class="d-none m-5 mb-3 d-flex flex-column align-items-center" data-emplty-table-massage>
          <p class="c-gray-dark2 text-nowrap pb-3">
              داده‌ای موجود نیست
          </p>
          <img src="{{ asset('images/Frame 29.svg') }}" alt="" class="no-data" style="width:auto">
      </div>
      </div>
    </div>
</section>
<!-- Hero End -->
@endsection
