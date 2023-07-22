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
        'H3Header' => ' شیفت ها',
        'CaptionHeader' => 'خانه - شیفت -',
        'TitleHeader' => 'لیست شیفت ها',
    ])
@endsection

@section('sidebar')
    @include('web.Layouts.side-bar', [
        'ClassDashbord' => '',
        'ClassLocation' => '',
        'ClassShift' => 'active-item-sidebar',
        'ClassPersonel' => '',
        'ClassReported' => '',
        'ClassRequest' => '',
        'ClassProject' => '',
        'ClassHoliday' => '',
    ])
@endsection
<section class="">

    <div class=" d-flex flex-column align-items-center col-12 mx-auto">
        <div class="container-modal hide"modal-delete-shift>
            <div class="bg-modal" close-modal-shift></div>
            <div class="col-12 col-sm-10 col-md-7 modal-delete rounded-24 p-4">
                <div class="d-flex justify-content-between">
                    <h6>حذف محل کار</h6>
                    <img src="{{ asset('images/Frame 77.svg') }}" alt="close" style="width: 12px" role="button"
                    close-modal-shift/>
                </div>
                <div class="body-modal-delete d-flex flex-column justify-content-center align-items-center py-5">
                    <div class="p-modal-delete px-5 py-4 text-nowrap mb-5">
                        <h6>آیا می‌خواهید محل کار انتخابی حذف شود؟</h6>
                    </div>
                    <div>
                        <button class="mx-3 py-2 px-4 rounded-24" ok-delete-row-shift>بله</button>
                        <button class="mx-3 py-2 px-4 rounded-24" close-modal-shift>خیر</button>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="bg-white rounded-16 p-2 p-lg-4 header input col-12">
            <h6 class="fw-bold mb-3">لیست شیفت ها</h6>
            <div class="d-flex flex-column flex-sm-row align-items-sm-end gap-4 gap-sm-4 col-12">
                <div class="d-flex flex-column align-items-start col-12 col-sm-6 col-lg-3">
                    <label for="nameOfShift" class="pb-2">نام شیفت </label>
                    <input id="nameOfShift" class="col-12 bg-input rounded-8" style="cursor: text">
                </div>
                <button id="SearchButton" class="btn-primary-nahira">
                    جست و جو
                </button>
            </div>
        </div>
        <div class="bg-white rounded-16 p-2 p-lg-4 report col-12 mt-4">
            <div class="BoxTable over data-table">
                <table class=" w-100">
                    <thead class="thead col-12">
                        <tr class="tr">
                            <th class="text-nowrap  pb-4 col-2">شماره</th>
                            <th class="text-nowrap text-center pb-4 col-2">نام شیفت</th>
                            <th class="text-nowrap ps-5 text-start pb-4 col-8">عملیات</th>
                        </tr>
                    </thead>
                    <tbody class="col-12"table-Shift body-table-shift=""data-check-empty-table> </tbody>
                </table>
                <div class="d-none m-5 mb-3 d-flex flex-column align-items-center" data-emplty-table-massage>
                    <p class="c-gray-dark2 text-nowrap pb-3">
                        داده‌ای موجود نیست
                    </p>
                    <img src="{{ asset('images/Frame 29.svg') }}" alt="" class="no-data" style="width:auto">
                </div>
            </div>
        </div>

    </div>

    {{-- <jdp-container style="z-index: 1000;"></jdp-container><jdp-overlay style="z-index: 999;"></jdp-overlay></body> --}}
</section>
<!-- Hero End -->
@endsection

@section('script')
<script src="{{asset('web/js/Pages/Manager/Shift/index.js')}}" type="module"></script>

@endsection
