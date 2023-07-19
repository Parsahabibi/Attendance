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
        'H3Header' => 'گزارش تردد',
        'CaptionHeader' => 'خانه - تردد - ',
        'TitleHeader' => 'گزارش تردد',
    ])
@endsection

@section('sidebar')
    @include('web.Layouts.side-bar-employee', [
        'ClassDashbord' => '',
        'ClassYourShift' => '',
        'ClassReported' => '',
        'ClassFunction' => 'active-item-sidebar',
        'ClassRequest' => '',
        'ClassShift' => '',
    ])
@endsection
<section class="">

    <div class="bg-white p-2 p-lg-4 rounded d-flex flex-column align-items-center">
        <div class="report col-12 mt-4">
            <div class="title pb-4 d-flex flex-column flex-md-row justify-content-between align-items-start">
                <h6 class="fw-bold mb-3">گزارش تردد</h6>
            </div>
            <div class="input d-flex flex-wrap align-items-end gap-3 pb-5">
                <div class="d-flex flex-column align-items-start gap-2 col-12 col-sm-3">
                    <label for="dateFrom">از تاریخ</label>
                    <input id="dateFrom" data-jdp="" class="col-12 bg-input rounded-8">
                </div>
                <div class="d-flex flex-column align-items-start gap-2 col-12 col-sm-3">
                    <label for="dateTo">تا تاریخ</label>
                    <input id="dateTo" data-jdp="" class="col-12 bg-input rounded-8">
                </div>
                <button class="btn-primary-nahira" id="SearchButton">مشاهده ی گزارش تردد</button>
            </div>
            <div class="BoxTable overflow-x-scroll">
                <table class=" w-100">
                    <thead class="thead border-b-gray">
                        <tr class="tr d-flex align-items-center justify-content-between">
                            <th class="text-nowrap w-100 text-center pb-4 c-gray-dark2">تاریخ</th>
                            <th class="text-nowrap w-100 text-center pb-4 c-gray-dark2">روز هفته</th>
                            <th class="text-nowrap w-100 text-center pb-4 c-gray-dark2">خلاصه تردد</th>
                            <th class="text-nowrap w-100 text-center pb-4 c-gray-dark2">کل حضور</th>
                            <th class="text-nowrap w-100 text-center pb-4 c-gray-dark2">غیبت</th>
                            <th class="text-nowrap w-100 text-center pb-4 c-gray-dark2">مرخصی استحقاقی</th>
                            <th class="text-nowrap w-100 text-center pb-4 c-gray-dark2">استعلاجی</th>
                            <th class="text-nowrap w-100 text-center pb-4 c-gray-dark2">مازاد حضور</th>
                            <th class="text-nowrap w-100 text-center pb-4 c-gray-dark2">ماموریت</th>
                        </tr>
                    </thead>
                    <tbody body-table="">
                       
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


    </div>
    {{-- <jdp-container style="z-index: 1000;"></jdp-container><jdp-overlay style="z-index: 999;"></jdp-overlay></body> --}}
</section>
<!-- Hero End -->
@endsection


@section('script')
<script>
    jalaliDatepicker.startWatch();

    let button = document.getElementById("SearchButton");

    let row = document.querySelector("[body-table]");

    let inputTo = document.getElementById("dateTo");

    let inputFrom = document.getElementById("dateFrom");

    const data = [{
            date: "۱۴۰۲/۲/۲۰",
            day: "دوشنبه",
            clock: "۰۱:۴۴",
            id: 1
        },
        {
            date: "۱۴۰۲/۲/۲۱",
            day: "سه شنبه",
            clock: "۰۱:۴۴",
            id: 2
        },
        {
            date: "۱۴۰۲/۲/۲۱",
            day: "چهارشنبه",
            clock: "۰۱:۴۴",
            id: 3
        },
        {
            date: "۱۴۰۲/۲/۲۲",
            day: "چهارشنبه",
            clock: "۰۱:۴۴",
            id: 3
        },
        {
            date: "۱۴۰۲/۲/۲۲",
            day: "چهارشنبه",
            clock: "۰۱:۴۴",
            id: 3
        },
    ];

    data.map(
        (item) =>
        (row.innerHTML += `
        <tr class="border-b-gray d-flex align-items-center justify-content-between borderTable">
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.date}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.day}</td>
                        <td
                            class="py-2 w-100 text-center border-0 d-flex align-items-center justify-content-center gap-3">
                            <div class="d-flex flex-column align-items-center justify-content-center gap-1">
                                <h6 class="enter">ورود</h6>
                                <p class="clockEnter fs-small-100 c-gray-dark3 ">${item.clock}</p>
                            </div>
                            <div class="d-flex flex-column align-items-center justify-content-center gap-1">
                                <h6 class="enter">خروج</h6>
                                <p class="clockEnter fs-small-100 c-gray-dark3 ">${item.clock}</p>
                            </div>
                        </td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                    </tr>
        `)
    );

    button.onclick = () => {
        let ConditionDate = [];
        // console.log(toString(inputTo.value))

        //   let PersianDateStart = e2a(inputFrom.value)
        //   let PersianDateEnd = e2a(inputTo.value)
        const p2e = (s) => s.replace(/[۰-۹]/g, (d) => "۰۱۲۳۴۵۶۷۸۹".indexOf(d));

        let DateStart = inputFrom.value;
        let DateEnd = inputTo.value;
        //   console.log(DateStart, DateEnd);
        console.log(DateStart)
        // console.log(data[0].date)
        let DayStart = +DateStart.split("/")[2];
        let MonthStart = +DateStart.split("/")[1];
        let YearStart = +DateStart.split("/")[0];



        let DayEnd = +DateEnd.split("/")[2];
        let MonthEnd = +DateEnd.split("/")[1];
        let YearEnd = +DateEnd.split("/")[0];


        let ConditionMonthEnd;
        if (MonthEnd > 7) {
            ConditionMonthEnd = 30;
        } else {
            ConditionMonthEnd = 31;
        }

        let ConditionMonthStart;
        if (MonthStart > 7) {
            ConditionMonthStart = 30;
        } else {
            ConditionMonthStart = 31;
        }

        let limit = 0;

        if (MonthEnd > 7) {
            limit =
                (MonthEnd - 7) * 30 +
                6 * 31 +
                DayEnd -
                ((MonthStart - 7) * 30 + 6 * 31 + DayStart);
        } else {
            limit =
                (MonthEnd - 1) * 31 + DayEnd - ((MonthStart - 1) * 31 + DayStart);
        }

        let arr = [];



        for (let z = 0; z <= limit; z++) {
            if (MonthStart > 6) {
                arr.push(`${YearStart}/${MonthStart}/${DayStart}`);
                DayStart++;
                if (DayStart > 31) {
                    MonthStart++;
                    DayStart = 1;
                }
            } else {
                arr.push(`${YearStart}/${MonthStart}/${DayStart}`);
                DayStart++;
                if (DayStart > 31) {
                    MonthStart++;
                    DayStart = 1;
                }
            }
        }
        console.log(data)
        let da = [];
        data.map((item, ...a) => {
            da.push({
                date: p2e(item.date),
                day: item.day,
                clock: item.clock,
                id: item.id
            })
        });

        let check = [];
        da.map(item => {
            console.log(arr, 'arr')
            if (arr.includes(item.date)) {
                check.push(item)
            }
        })

        for (let f = 0; f < check.length; f++) {
            console.log(da, 'da')
            console.log(check, 'check')
            let filter = da.filter(item => item.date === check[f].date)
            console.log(filter, 'جون مادرت کار کن')
        }
        row.innerHTML = ''
        check.map(
            (item) =>
            (row.innerHTML += `
                        <tr class="border-b-gray d-flex align-items-center justify-content-between borderTable">
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.date}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.day}</td>
                        <td
                            class="py-2 w-100 text-center border-0 d-flex align-items-center justify-content-center gap-3">
                            <div class="d-flex flex-column align-items-center justify-content-center gap-1">
                                <h6 class="enter">ورود</h6>
                                <p class="clockEnter fs-small-100 c-gray-dark3 ">${item.clock}</p>
                            </div>
                            <div class="d-flex flex-column align-items-center justify-content-center gap-1">
                                <h6 class="enter">خروج</h6>
                                <p class="clockEnter fs-small-100 c-gray-dark3 ">${item.clock}</p>
                            </div>
                        </td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                    </tr>
        `)
        );
        console.log(check, 'gf')
    };
</script>
@endsection
