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
                <tbody class="w-100">
                    <tr class="border-t-gray w-100 d-flex justify-content-between  px-3 px-lg-4 ">
                        <td class="col-1 py-3 text-nowrap">
                            <span class="ps-2 c-gray-dark3">شنبه</span class="c-gray-dark3"> <span>۱۴۰۲/۰۲/۲۰</span>
                        </td>
                        <td class="pe-5 py-3 d-flex text-nowrap">
                            <span class="c-gray-dark3 text-nowrap">قسمت اول روز:</span>
                            <span class="d-flex pe-3 text-nowrap">
                                از <p class="me-1">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3 text-nowrap">
                                تا <p class="me-1">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2 py-3 d-flex"> <span class="c-gray-dark3 text-nowrap">قسمت دوم روز:</span>
                            <span class="d-flex pe-3">
                                از <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3">
                                تا <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">شناوری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">سقف اضافه کاری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>


                    </tr>
                    <tr class="border-t-gray w-100 d-flex justify-content-between  px-3 px-lg-4 ">
                        <td class="col-1 py-3 text-nowrap">
                            <span class="ps-2 c-gray-dark3">یکشنبه</span class="c-gray-dark3"> <span>۱۴۰۲/۰۲/۲۰</span>
                        </td>
                        <td class="pe-5 py-3 d-flex text-nowrap">
                            <span class="c-gray-dark3 text-nowrap">قسمت اول روز:</span>
                            <span class="d-flex pe-3 text-nowrap">
                                از <p class="me-1">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3 text-nowrap">
                                تا <p class="me-1">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2 py-3 d-flex"> <span class="c-gray-dark3 text-nowrap">قسمت دوم روز:</span>
                            <span class="d-flex pe-3">
                                از <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3">
                                تا <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">شناوری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">سقف اضافه کاری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>


                    </tr>
                    <tr class="border-t-gray w-100 d-flex justify-content-between  px-3 px-lg-4 ">
                        <td class="col-1 py-3 text-nowrap">
                            <span class="ps-2 c-gray-dark3">دوشنبه</span class="c-gray-dark3"> <span>۱۴۰۲/۰۲/۲۰</span>
                        </td>
                        <td class="pe-5 py-3 d-flex text-nowrap">
                            <span class="c-gray-dark3 text-nowrap">قسمت اول روز:</span>
                            <span class="d-flex pe-3 text-nowrap">
                                از <p class="me-1">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3 text-nowrap">
                                تا <p class="me-1">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2 py-3 d-flex"> <span class="c-gray-dark3 text-nowrap">قسمت دوم روز:</span>
                            <span class="d-flex pe-3">
                                از <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3">
                                تا <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">شناوری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">سقف اضافه کاری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>


                    </tr>
                    <tr class="border-t-gray w-100 d-flex justify-content-between  px-3 px-lg-4 ">
                        <td class="col-1 py-3 text-nowrap">
                            <span class="ps-2 c-gray-dark3">سه شنبه</span class="c-gray-dark3">
                            <span>۱۴۰۲/۰۲/۲۰</span>
                        </td>
                        <td class="pe-5 py-3 d-flex text-nowrap">
                            <span class="c-gray-dark3 text-nowrap">قسمت اول روز:</span>
                            <span class="d-flex pe-3 text-nowrap">
                                از <p class="me-1">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3 text-nowrap">
                                تا <p class="me-1">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2 py-3 d-flex"> <span class="c-gray-dark3 text-nowrap">قسمت دوم روز:</span>
                            <span class="d-flex pe-3">
                                از <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3">
                                تا <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">شناوری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">سقف اضافه کاری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>


                    </tr>
                    <tr class="border-t-gray w-100 d-flex justify-content-between  px-3 px-lg-4 ">
                        <td class="col-1 py-3 text-nowrap">
                            <span class="ps-2 c-gray-dark3">چهارشنبه</span class="c-gray-dark3">
                            <span>۱۴۰۲/۰۲/۲۰</span>
                        </td>
                        <td class="pe-5 py-3 d-flex text-nowrap">
                            <span class="c-gray-dark3 text-nowrap">قسمت اول روز:</span>
                            <span class="d-flex pe-3 text-nowrap">
                                از <p class="me-1">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3 text-nowrap">
                                تا <p class="me-1">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2 py-3 d-flex"> <span class="c-gray-dark3 text-nowrap">قسمت دوم روز:</span>
                            <span class="d-flex pe-3">
                                از <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3">
                                تا <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">شناوری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">سقف اضافه کاری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>


                    </tr>
                    <tr class="border-t-gray w-100 d-flex justify-content-between  px-3 px-lg-4 ">
                        <td class="col-1 py-3 text-nowrap">
                            <span class="ps-2 c-gray-dark3">پنج شنبه</span class="c-gray-dark3">
                            <span>۱۴۰۲/۰۲/۲۰</span>
                        </td>
                        <td class="pe-5 py-3 d-flex text-nowrap">
                            <span class="c-gray-dark3 text-nowrap">قسمت اول روز:</span>
                            <span class="d-flex pe-3 text-nowrap">
                                از <p class="me-1">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3 text-nowrap">
                                تا <p class="me-1">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2 py-3 d-flex"> <span class="c-gray-dark3 text-nowrap">قسمت دوم روز:</span>
                            <span class="d-flex pe-3">
                                از <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3">
                                تا <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">شناوری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">سقف اضافه کاری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>


                    </tr>
                    <tr class="border-t-gray w-100 d-flex justify-content-between  px-3 px-lg-4 ">
                        <td class="col-1 py-3 text-nowrap">
                            <span class="ps-2 c-gray-dark3">جمعه</span class="c-gray-dark3"> <span>۱۴۰۲/۰۲/۲۰</span>
                        </td>
                        <td class="pe-5 py-3 d-flex text-nowrap">
                            <span class="c-gray-dark3 text-nowrap">قسمت اول روز:</span>
                            <span class="d-flex pe-3 text-nowrap">
                                از <p class="me-1">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3 text-nowrap">
                                تا <p class="me-1">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2 py-3 d-flex"> <span class="c-gray-dark3 text-nowrap">قسمت دوم روز:</span>
                            <span class="d-flex pe-3">
                                از <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3">
                                تا <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">شناوری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">سقف اضافه کاری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>


                    </tr>
                </tbody>
            </table>
        </div>


    </section>

</section>
<!-- Hero End -->
@endsection
@section('script')
<script>
    const month = ['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر', 'دی', 'بهمن',
        'اسفند',
    ];

    const ValueMonth = document.querySelector('[data-value-month]');
    let NumMonth = 2;
    ValueMonth.innerHTML = month[NumMonth]


    document.querySelector('[data-btn-forward-month]').addEventListener('click', () => {
        if (NumMonth < 11) {
            ValueMonth.innerHTML = month[NumMonth += 1];
        } else {
            NumMonth = 0;
            ValueMonth.innerHTML = month[NumMonth];
        }
    })
    document.querySelector('[data-btn-backward-month]').addEventListener('click', () => {
        if (NumMonth > 0) {
            ValueMonth.innerHTML = month[NumMonth -= 1];
        } else {
            NumMonth = 11;
            ValueMonth.innerHTML = month[NumMonth];
        }
    })

    const weeks = ['هفته اول', 'هفته دوم', 'هفته سوم', 'هفته چهارم'];

    const ValueWeek = document.querySelector('[data-value-week]');
    let NumWeek = 0;
    ValueWeek.innerHTML = weeks[NumWeek]

    document.querySelector('[data-btn-forward-week]').addEventListener('click', () => {
        if (NumWeek < 3) {
            ValueWeek.innerHTML = weeks[NumWeek += 1];
        } else {
            NumWeek = 0;
            ValueWeek.innerHTML = weeks[NumWeek];
        }
    })
    document.querySelector('[data-btn-backward-week]').addEventListener('click', () => {
        if (NumWeek > 0) {
            ValueWeek.innerHTML = weeks[NumWeek -= 1];
        } else {
            NumWeek = 3;
            ValueWeek.innerHTML = weeks[NumWeek];
        }
    })
</script>
@endsection
