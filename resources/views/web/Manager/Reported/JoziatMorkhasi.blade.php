@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header', [
        'H3Header' => 'گزارش ها',
        'CaptionHeader' => 'خانه - گزارش ها - ',
        'TitleHeader' => 'جزییات مرخصی',
    ])
@endsection

@section('sidebar')
    @include('web.Layouts.side-bar', [
        'ClassDashbord' => '',
        'ClassLocation' => '',
        'ClassShift' => '',
        'ClassPersonel' => '',
        'ClassReported' => 'active-item-sidebar',
        'ClassRequest' => '',
        'ClassProject' => '',
        'ClassHoliday' => '',
    ])
@endsection
<section class="">

    <div class="bg-white rounded-16 p-2 p-lg-4 d-flex flex-column align-items-center">
        <div class="report col-12 mt-4">
            <div class="title pb-4 d-flex flex-column flex-md-row justify-content-between align-items-start">
                <h6 class="fw-bold mb-3">جزییات مرخصی</h6>
                <div class="left d-flex flex-wrap flex-sm-row align-items-start gap-3">
                    <button class="btn-primary-nahira">دریافت گزارش اکسل</button>
                </div>
            </div>
            <div class="input d-flex flex-wrap align-items-end gap-3 pb-5">
                <div class="d-flex flex-column align-items-start gap-2 col-12 col-sm-3">
                    <label for="Personal">پرسنل</label>
                    <input id="Personal" class="col-12 bg-input rounded-8">
                </div>
                <div class="d-flex flex-column align-items-start gap-2 col-12 col-sm-3">
                    <label for="dateFrom">سال</label>
                    <select id="ddlYears" class="col-12 select-month pe-2">
                        1402
                        <option value="1390">1390</option>
                        <option value="1391">1391</option>
                        <option value="1392">1392</option>
                        <option value="1393">1393</option>
                        <option value="1394">1394</option>
                        <option value="1395">1395</option>
                        <option value="1396">1396</option>
                        <option value="1397">1397</option>
                        <option value="1398">1398</option>
                        <option value="1399">1399</option>
                        <option value="1400">1400</option>
                        <option value="1401">1401</option>
                        <option value="1402">1402</option>
                    </select>
                    <!-- <input id="dateFrom" data-jdp class="col-12" /> -->
                </div>
                <div class="d-flex flex-column align-items-start gap-2 col-12 col-sm-3">
                    <label for="dateTo">ماه</label>
                    <select id="month" class="col-12 select-month pe-2">
                        <option value="فروردین">فروردین</option>
                        <option value="اردیبهشت">اردیبهشت</option>
                        <option value="خرداد">خرداد</option>
                        <option value="تیر">تیر</option>
                        <option value="مرداد">مرداد</option>
                        <option value="شهریور">شهریور</option>
                        <option value="مهر">مهر</option>
                        <option value="آبان">آبان</option>
                        <option value="آذر">آذر</option>
                        <option value="دی">دی</option>
                        <option value="بهمن">بهمن</option>
                        <option value="اسفند">اسفند</option>
                    </select>
                    <!-- <input id="dateTo" data-jdp class="col-12" /> -->
                </div>
                <button class="btn-primary-nahira">مشاهده ی گزارش کارکرد</button>
            </div>
            <div class="jobClock pb-5">
                <p class="pb-4">سیاست کاری</p>
                <div class="col-10 d-flex flex-column flex-md-row justify-content-between">
                    <div class="d-flex flex-column gap-4">
                        <p>مرخصی مجاز در سال:</p>
                        <p>مرخصی مجاز در ماه:</p>
                    </div>
                    <div class="d-flex flex-column gap-4">
                        <p>مرخصی استفاده شده در سال:</p>
                        <p>مرخصی استفاده شده در ماه:</p>
                    </div>
                    <div class="d-flex flex-column gap-4">
                        <p>مانده مرخصی در سال:</p>
                        <p>مانده مرخصی در ماه:</p>
                    </div>
                </div>
            </div>
            <h6 class="fw-bold pb-2 my-4">درخواست های مرخصی</h6>
            <div class="BoxTable overflow-x-scroll border-b-gray">
                <table class=" w-100">
                    <thead class="thead">
                        <tr class="tr pr-3">
                            <th class="text-nowrap text-center pb-4 fs-small-100 px-2 c-gray-dark">
                                نوع درخواست
                            </th>
                            <th class="text-nowrap text-center pb-4 fs-small-100 px-2 c-gray-dark">زمان شروع</th>
                            <th class="text-nowrap text-center pb-4 fs-small-100 px-2 c-gray-dark">زمان پایان</th>
                            <th class="text-nowrap text-center pb-4 fs-small-100 px-2 c-gray-dark">وضعیت</th>
                            <th class="text-nowrap text-center pb-4 fs-small-100 px-2 c-gray-dark">عملیات</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="m-5 mb-3 d-flex flex-column align-items-center" data-emplty-table-massage>
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


@section('script')
<script type="module">
    import WindowCheck from "{{ asset('web/js/component/Window.js') }}";

    window.onload = function() {
        //Reference the DropDownList.
        var ddlYears = document.getElementById("ddlYears");

        //Determine the Current Year.
        var currentYear = new Date().toLocaleDateString("fa-IR");

        const date = currentYear.split("/");

        const year = date[0];

        const p2e = (s) => s.replace(/[۰-۹]/g, (d) => "۰۱۲۳۴۵۶۷۸۹".indexOf(d));

        const years = p2e(year);

        console.log(years);

        //Loop and add the Year values to DropDownList.
        for (var i = 1390; i <= years; i++) {
            var option = document.createElement("OPTION");
            option.innerHTML = i;
            option.value = i;
            ddlYears.appendChild(option);
        }
        
    };
    window.onclick=(e)=>{
        WindowCheck(e);
    }
</script>
@endsection
