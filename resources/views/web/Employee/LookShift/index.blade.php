@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header', [
        'H3Header' => 'اطلاعات شیفت شما',
        'CaptionHeader' => 'خانه - شیفت - ',
        'TitleHeader' => 'اطلاعات شیفت شما',
    ])
@endsection

@section('sidebar')
    @include('web.Layouts.side-bar-employee', [
        'ClassDashbord' => '',
        'ClassYourShift' => 'active-item-sidebar',
        'ClassReported' => '',
        'ClassFunction' => '',
        'ClassRequest' => '',
        'ClassShift' => '',
    ])
@endsection
<section class="">

    <section class="shift-information bg-white py-3 py-lg-4 px-0 rounded-16">
        <div class="d-flex flex-column align-items-start px-3 px-lg-4 ">
            <h6 class="fw-bold">اطلاعات شیفت شما</h6>
            <div class="col-12 col-xl-10 d-flex flex-column flex-xl-row justify-content-between my-5">
                <div class="d-flex align-items-center py-2 py-xl-0">
                    <h6 class="ps-2">نام شیفت :</h6>
                    <p>لورم</p>
                </div>
                <div class="d-flex align-items-center py-2 py-xl-0">
                    <h6 class="ps-2">سقف اضافه کاری روز بدون شیفت :</h6>
                    <p>۵دقیقه</p>
                </div>
                <div class="d-flex align-items-center py-2 py-xl-0">
                    <h6 class="ps-2">تبعیت از تعطیلات رسمی :</h6>
                    <p>دارد</p>
                </div>
            </div>
            <div class="d-flex justify-content-between col-12 col-md-6 col-xl-4">
                <div class="d-flex align-items-center">
                    <span class="ps-3" data-value-month></span>
                    <div class="bg-gray d-flex justify-content-between rounded-16 ">
                        <div class="py-3 px-2" role="button" data-btn-backward-month>
                            <img src="{{ asset('images/Frame 43.svg') }}" alt="">
                        </div>
                        <div class="py-3 px-2" role="button" data-btn-forward-month>
                            <img src="{{ asset('images/Frame 44.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <span class="ps-3" data-value-week></span>
                    <div class="bg-gray d-flex justify-content-between rounded-16">
                        <div class="py-3 px-2" role="button" data-btn-backward-week>
                            <img src="{{ asset('images/Frame 43.svg') }}" alt="">
                        </div>
                        <div class="py-3 px-2" role="button"data-btn-forward-week>
                            <img src="{{ asset('images/Frame 44.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-3 overflow-x-scroll">
            <table class="w-100">
                <tbody class="w-100" table-yourshift>

                </tbody>
            </table>
        </div>


    </section>

</section>
<!-- Hero End -->
@endsection
@section('script')
<script src="{{ asset('web/js/Pages/Employee/LookShift/index.js') }}"></script>
@endsection