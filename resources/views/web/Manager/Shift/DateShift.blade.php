@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header', [
        'H3Header' => 'شیفت ها',
        'CaptionHeader' => 'خانه - شیفت -',
        'TitleHeader' => 'ثبت شیفت جدید',
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
<section class="shift-date-picker">
    <section class="modal-shift-manager col-12 col-md-11 bg-white pb-4 no-scroll-bar no-scrollbar" style="overflow-y: scroll;" data-modal>
        <div class="d-flex  justify-content-between w-100 p-3 p-md-4 border-b-gray">
            <h5 class="fw-bold">نوع شیفت خود را انتخاب کنید</h5>
            <img src="{{ asset('images/remove.svg') }}" alt="" style="width: 12px"class="btn-close-modal-shift" role="button" btn-modal>
        </div>
        <div class="p-3 py-4 d-flex align-items-end flex-column flex-lg-row">
            <div class="col-12 col-lg-3 d-flex flex-column mx-lg-2 mb-3 mb-lg-0">
                <label for="">سال شیفت</label>
                <input class="bg-gray rounded-16 py-2 mt-1" type="text" data-input-city="">
            </div>
            <div class="col-12 col-lg-3 d-flex flex-column mx-lg-2 mb-3 mb-lg-0">
                <label for="">زمان شناوری</label>
                <input class="bg-gray rounded-16 py-2 mt-1" type="text" data-input-city="">
            </div>
            <div class="col-12 col-lg-3 d-flex flex-column mx-lg-2 mb-3 mb-lg-0">
                <label for="">سقف اضافه کاری روزانه</label>
                <input class="bg-gray rounded-16 py-2 mt-1" type="text" data-input-city="">
            </div>
            <button class="btn-primary-nahira text-nowrap" btn-advanced-setting>تنظیمات پیشرفته</button>
        </div>
        <div class="p-3 py-4 d-flex flex-column border-t-gray d-none" content-advanced-setting>
            <h6 class="fw-bold mb-3">تنظیمات پیشرفته</h6>
            <div class="col-12 d-flex flex-column flex-lg-row">
                <div class="col-12 col-lg-3 d-flex flex-column mx-lg-2 mb-3 mb-lg-0">
                    <label for="">اضافه کار از ابتدای شیفت</label>
                    <input class="bg-gray rounded-16 py-2 mt-1" type="text" data-input-city="">
                </div>
                <div class="col-12 col-lg-4 d-flex flex-column mx-lg-2 mb-3 mb-lg-0">
                    <label for="">اضافه کار در میانه شیفت</label>
                    <input class="bg-gray rounded-16 py-2 mt-1" type="text" data-input-city="">
                </div>
                <div class="col-12 col-lg-4 d-flex flex-column mx-lg-2 mb-3 mb-lg-0">
                    <label for="">اضافه کار از انتهای شیفت</label>
                    <input class="bg-gray rounded-16 py-2 mt-1" type="text" data-input-city="">
                </div>
            </div>
            <div class="col-12 d-flex flex-column flex-lg-row">
                <div class="col-12 col-lg-3 d-flex flex-column mx-lg-2 mb-3 mb-lg-0">
                    <label for="">تاخیر مجاز</label>
                    <input class="bg-gray rounded-16 py-2 mt-1" type="text" data-input-city="">
                </div>
                <div class="col-12 col-lg-4 d-flex flex-column mx-lg-2 mb-3 mb-lg-0">
                    <label for="">تعجیل مجاز</label>
                    <input class="bg-gray rounded-16 py-2 mt-1" type="text" data-input-city="">
                </div>
                <div class="col-12 col-lg-4 d-flex flex-column mx-lg-2 mb-3 mb-lg-0">
                    <label for="">شناوری قبل شیفت</label>
                    <input class="bg-gray rounded-16 py-2 mt-1" type="text" data-input-city="">
                </div>
            </div>
        </div>
        <div class="mt-4 overflow-x-scroll ">
            <table class="w-100 ">
                <thead class="w-100 ">
                    <th class="p-3 pb-4 text-nowrap text-center pe-3">روز کاری</th>
                    <th class="p-3 pb-4 text-nowrap text-center">قسمت دوم روز</th>
                    <th class="p-3 pb-4 text-nowrap text-center">زمان شروع</th>
                    <th class="p-3 pb-4 text-nowrap text-center">زمان پایان</th>
                    <th class="p-3 pb-4 col-2"></th>
                    <th class="p-3 pb-4 text-nowrap text-center">قسمت دوم روز</th>
                    <th class="p-3 pb-4 text-nowrap text-center">زمان شروع</th>
                    <th class="p-3 pb-4 text-nowrap text-center ps-3">زمان پایان</th>
                </thead>
                <tbody>
                    <tr class="border-t-gray ">
                        <td class="p-3 text-nowrap text-center c-gray-dark3">شنبه</td>
                        <td class="p-3 text-nowrap text-center pe-3 c-gray-dark3 ">
                            <input type="checkbox" name="" id="">
                        </td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3">۰۰:۰۰</td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3">۰۰:۰۰</td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3"></td>
                        <td class=" c-gray-dark3 text-center">
                            <input type="checkbox" name="" id="">
                        </td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3">۰۰:۰۰</td>
                        <td class="p-3 text-nowrap text-center ps-3 c-gray-dark3">۰۰:۰۰</td>
                    </tr>
                    <tr class="border-t-gray ">
                        <td class="p-3 text-nowrap text-center c-gray-dark3">یکشنبه</td>
                        <td class="p-3 text-nowrap text-center pe-3 c-gray-dark3 ">
                            <input type="checkbox" name="" id="">
                        </td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3">۰۰:۰۰</td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3">۰۰:۰۰</td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3"></td>
                        <td class=" c-gray-dark3 text-center">
                            <input type="checkbox" name="" id="">
                        </td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3">۰۰:۰۰</td>
                        <td class="p-3 text-nowrap text-center ps-3 c-gray-dark3">۰۰:۰۰</td>
                    </tr>
                    <tr class="border-t-gray ">
                        <td class="p-3 text-nowrap text-center c-gray-dark3">دوشنبه</td>
                        <td class="p-3 text-nowrap text-center pe-3 c-gray-dark3 ">
                            <input type="checkbox" name="" id="">
                        </td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3">۰۰:۰۰</td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3">۰۰:۰۰</td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3"></td>
                        <td class=" c-gray-dark3 text-center">
                            <input type="checkbox" name="" id="">
                        </td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3">۰۰:۰۰</td>
                        <td class="p-3 text-nowrap text-center ps-3 c-gray-dark3">۰۰:۰۰</td>
                    </tr>
                    <tr class="border-t-gray ">
                        <td class="p-3 text-nowrap text-center c-gray-dark3">سه شنبه</td>
                        <td class="p-3 text-nowrap text-center pe-3 c-gray-dark3 ">
                            <input type="checkbox" name="" id="">
                        </td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3">۰۰:۰۰</td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3">۰۰:۰۰</td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3"></td>
                        <td class=" c-gray-dark3 text-center">
                            <input type="checkbox" name="" id="">
                        </td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3">۰۰:۰۰</td>
                        <td class="p-3 text-nowrap text-center ps-3 c-gray-dark3">۰۰:۰۰</td>
                    </tr>
                    <tr class="border-t-gray ">
                        <td class="p-3 text-nowrap text-center c-gray-dark3">چهارشنبه</td>
                        <td class="p-3 text-nowrap text-center pe-3 c-gray-dark3 ">
                            <input type="checkbox" name="" id="">
                        </td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3">۰۰:۰۰</td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3">۰۰:۰۰</td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3"></td>
                        <td class=" c-gray-dark3 text-center">
                            <input type="checkbox" name="" id="">
                        </td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3">۰۰:۰۰</td>
                        <td class="p-3 text-nowrap text-center ps-3 c-gray-dark3">۰۰:۰۰</td>
                    </tr>
                    <tr class="border-t-gray ">
                        <td class="p-3 text-nowrap text-center c-gray-dark3">پنج شنبه</td>
                        <td class="p-3 text-nowrap text-center pe-3 c-gray-dark3 ">
                            <input type="checkbox" name="" id="">
                        </td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3">۰۰:۰۰</td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3">۰۰:۰۰</td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3"></td>
                        <td class=" c-gray-dark3 text-center">
                            <input type="checkbox" name="" id="">
                        </td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3">۰۰:۰۰</td>
                        <td class="p-3 text-nowrap text-center ps-3 c-gray-dark3">۰۰:۰۰</td>
                    </tr>
                    <tr class="border-t-gray ">
                        <td class="p-3 text-nowrap text-center c-gray-dark3">جمعه</td>
                        <td class="p-3 text-nowrap text-center pe-3 c-gray-dark3 ">
                            <input type="checkbox" name="" id="">
                        </td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3">۰۰:۰۰</td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3">۰۰:۰۰</td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3"></td>
                        <td class=" c-gray-dark3 text-center">
                            <input type="checkbox" name="" id="">
                        </td>
                        <td class="p-3 text-nowrap text-center c-gray-dark3">۰۰:۰۰</td>
                        <td class="p-3 text-nowrap text-center ps-3 c-gray-dark3">۰۰:۰۰</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-12 col-md-4 d-flex justify-content-evenly mx-auto">
            <button class="btn-secondary-nahira text-nowrap">مرحله قبلی</button>
            <button class="btn-primary-nahira text-nowrap">مرحله بعدی</button>
        </div>
    </section>

    <div class="calender col-12 mx-auto p-0 mt-4">
        <div class="header d-flex align-items-baseline justify-content-between flex-wrap col-12 py-4 px-4">
            <div class="change d-flex align-items-baseline gap-3">
                <div class="d-flex align-items-baseline gap-2">
                    <p style="width: 35px" class="textOne year">۱۴۰۲</p>
                    <div class="arrow bg-light d-flex align-items-center gap-4 py-2 px-2">
                        <div class="rightYear d-flex align-items-center justify-content-center cursor">
                            <img src="{{ asset('images/Frame 43 (1).svg') }}" alt="" />
                        </div>
                        <div class="leftYear d-flex align-items-center justify-content-center cursor">
                            <img src="{{ asset('images/Frame 44 (1).svg') }}" alt="" />
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-baseline gap-2">
                    <p style="width: 72px" class="textOne month text-center">خرداد</p>
                    <div class="arrow bg-light d-flex align-items-center gap-4 py-2 px-2">
                        <div class="rightMonth d-flex align-items-center justify-content-center cursor">
                            <img src="{{ asset('images/Frame 43 (1).svg') }}" alt="" />

                        </div>
                        <div class="leftMonth d-flex align-items-center justify-content-center cursor">
                            <img src="{{ asset('images/Frame 44 (1).svg') }}" alt="" />

                        </div>
                    </div>
                </div>
            </div>
            <button class="confirm py-2 px-5">ثبت</button>
        </div>
        <div class="borderBottom col-12"></div>
        <div class="items py-4 px-4 pt-0 d-flex flex-column gap-4 flex-xl-row justify-content-xl-between">
            <div class="d-flex flex-wrap flex-md-nowrap align-items-center gap-4 justify-content-md-between gap-xl-3">
                <div class="input d-flex flex-column align-items-start col-12 col-md-5 col-xl-6">
                    <label class="label" for="nameShift">نام شیفت</label>
                    <input class="col-12" id="nameShift" />
                </div>
                <div class="input d-flex flex-column align-items-start col-12 col-md-5 col-xl-6">
                    <label class="label" for="top">سقف اضافه کاری روز بدون شیفت</label>
                    <input class="col-12" id="top" />
                </div>
            </div>
            <div class="d-flex flex-column gap-2 justify-content-lg-between">
                <div class="input d-flex align-items-center gap-1">
                    <input type="checkbox" id="check" />
                    <label class="label pb-0 cursor" for="check">تبعیت از تعطیلات رسمی</label>
                </div>
                <div
                    class="navbarCalender d-flex align-items-center justify-content-start justify-content-md-between flex-wrap gap-3">
                    <div class="check cursor textTwo px-3 px-xl-0 pe-xl-2 py-2 text-center">
                        برداشتن تیک ها
                    </div>
                    <div class="borderLeft"></div>
                    <div class="DeleteCustomShift cursor textTwo px-3 px-xl-0 py-2 text-center">
                        حذف شیفت های انتخابی
                    </div>
                    <div class="borderLeft"></div>
                    <div class="cursor textTwo px-3 px-xl-0 py-2 text-center">
                        کپی شیفت در سال بعد
                    </div>
                    <div class="borderLeft"></div>
                    <div class="cursor boxDrops position-relative textTwo px-3 px-xl-0 ps-xl-2 py-2 text-center"
                        style="background: #f9f9f9">
                        <span class="textDrop">تکرار الگوی انتخابی</span>
                        <div class="positionCostume boxShadowDatePicker py-2">
                            <div class="px-3 dropdownText py-2 border-b-gray">تکرار در ماه</div>

                            <div class="px-3 dropdownText py-2">تکرار در سال</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="date-picker p-4  bg-white">

        <div class="body-date-picker overflow-hidden rounded-16">
            <div class="col-12 d-flex container-date-picker">
                <div class="col-12 overflow-x-scroll border-t-gray">
                    <div class="head-date-picker d-flex">
                        <div class="w-week text-center fw-bold">شنبه</div>
                        <div class="w-week text-center fw-bold">یکشنبه</div>
                        <div class="w-week text-center fw-bold">دوشنبه</div>
                        <div class="w-week text-center fw-bold">سه شنبه</div>
                        <div class="w-week text-center fw-bold">چهارشنبه</div>
                        <div class="w-week text-center fw-bold">پنج شنبه</div>
                        <div class="w-week text-center fw-bold">جمعه</div>
                    </div>
                    <div class="farvardin month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                                ۱۲:۰۰ الی ۱۵:۰۰
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3"></div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="farvardin month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="farvardin month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="farvardin month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="farvardin month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="farvardin month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-farvardin-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 overflow-x-scroll border-t-gray">
                    <div class="head-date-picker d-flex">
                        <div class="w-week text-center fw-bold">شنبه</div>
                        <div class="w-week text-center fw-bold">یکشنبه</div>
                        <div class="w-week text-center fw-bold">دوشنبه</div>
                        <div class="w-week text-center fw-bold">سه شنبه</div>
                        <div class="w-week text-center fw-bold">چهارشنبه</div>
                        <div class="w-week text-center fw-bold">پنج شنبه</div>
                        <div class="w-week text-center fw-bold">جمعه</div>
                    </div>
                    <div class="ordibehesht month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="ordibehesht month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="ordibehesht month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="ordibehesht month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="ordibehesht month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="ordibehesht month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-ordibehesht-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 overflow-x-scroll border-t-gray">
                    <div class="head-date-picker d-flex">
                        <div class="w-week text-center fw-bold">شنبه</div>
                        <div class="w-week text-center fw-bold">یکشنبه</div>
                        <div class="w-week text-center fw-bold">دوشنبه</div>
                        <div class="w-week text-center fw-bold">سه شنبه</div>
                        <div class="w-week text-center fw-bold">چهارشنبه</div>
                        <div class="w-week text-center fw-bold">پنج شنبه</div>
                        <div class="w-week text-center fw-bold">جمعه</div>
                    </div>
                    <div class="khordad month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="khordad month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="khordad month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="khordad month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="khordad month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="khordad month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-khordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 overflow-x-scroll border-t-gray">
                    <div class="head-date-picker d-flex">
                        <div class="w-week text-center fw-bold">شنبه</div>
                        <div class="w-week text-center fw-bold">یکشنبه</div>
                        <div class="w-week text-center fw-bold">دوشنبه</div>
                        <div class="w-week text-center fw-bold">سه شنبه</div>
                        <div class="w-week text-center fw-bold">چهارشنبه</div>
                        <div class="w-week text-center fw-bold">پنج شنبه</div>
                        <div class="w-week text-center fw-bold">جمعه</div>
                    </div>
                    <div class="tir month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="tir month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="tir month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="tir month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="tir month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="tir month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-tir-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 overflow-x-scroll border-t-gray">
                    <div class="head-date-picker d-flex">
                        <div class="w-week text-center fw-bold">شنبه</div>
                        <div class="w-week text-center fw-bold">یکشنبه</div>
                        <div class="w-week text-center fw-bold">دوشنبه</div>
                        <div class="w-week text-center fw-bold">سه شنبه</div>
                        <div class="w-week text-center fw-bold">چهارشنبه</div>
                        <div class="w-week text-center fw-bold">پنج شنبه</div>
                        <div class="w-week text-center fw-bold">جمعه</div>
                    </div>
                    <div class="mordad month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mordad month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mordad month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mordad month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mordad month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mordad month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mordad-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 overflow-x-scroll border-t-gray">
                    <div class="head-date-picker d-flex">
                        <div class="w-week text-center fw-bold">شنبه</div>
                        <div class="w-week text-center fw-bold">یکشنبه</div>
                        <div class="w-week text-center fw-bold">دوشنبه</div>
                        <div class="w-week text-center fw-bold">سه شنبه</div>
                        <div class="w-week text-center fw-bold">چهارشنبه</div>
                        <div class="w-week text-center fw-bold">پنج شنبه</div>
                        <div class="w-week text-center fw-bold">جمعه</div>
                    </div>
                    <div class="shahrivar month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="shahrivar month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="shahrivar month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="shahrivar month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="shahrivar month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="shahrivar month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-shahrivar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 overflow-x-scroll border-t-gray">
                    <div class="head-date-picker d-flex">
                        <div class="w-week text-center fw-bold">شنبه</div>
                        <div class="w-week text-center fw-bold">یکشنبه</div>
                        <div class="w-week text-center fw-bold">دوشنبه</div>
                        <div class="w-week text-center fw-bold">سه شنبه</div>
                        <div class="w-week text-center fw-bold">چهارشنبه</div>
                        <div class="w-week text-center fw-bold">پنج شنبه</div>
                        <div class="w-week text-center fw-bold">جمعه</div>
                    </div>
                    <div class="mehr month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mehr month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mehr month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mehr month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mehr month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mehr month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-mehr-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 overflow-x-scroll border-t-gray">
                    <div class="head-date-picker d-flex">
                        <div class="w-week text-center fw-bold">شنبه</div>
                        <div class="w-week text-center fw-bold">یکشنبه</div>
                        <div class="w-week text-center fw-bold">دوشنبه</div>
                        <div class="w-week text-center fw-bold">سه شنبه</div>
                        <div class="w-week text-center fw-bold">چهارشنبه</div>
                        <div class="w-week text-center fw-bold">پنج شنبه</div>
                        <div class="w-week text-center fw-bold">جمعه</div>
                    </div>
                    <div class="aban month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="aban month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="aban month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="aban month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="aban month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="aban month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-aban-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 overflow-x-scroll border-t-gray">
                    <div class="head-date-picker d-flex">
                        <div class="w-week text-center fw-bold">شنبه</div>
                        <div class="w-week text-center fw-bold">یکشنبه</div>
                        <div class="w-week text-center fw-bold">دوشنبه</div>
                        <div class="w-week text-center fw-bold">سه شنبه</div>
                        <div class="w-week text-center fw-bold">چهارشنبه</div>
                        <div class="w-week text-center fw-bold">پنج شنبه</div>
                        <div class="w-week text-center fw-bold">جمعه</div>
                    </div>
                    <div class="azar month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="azar month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="azar month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="azar month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="azar month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="azar month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-azar-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 overflow-x-scroll border-t-gray">
                    <div class="head-date-picker d-flex">
                        <div class="w-week text-center fw-bold">شنبه</div>
                        <div class="w-week text-center fw-bold">یکشنبه</div>
                        <div class="w-week text-center fw-bold">دوشنبه</div>
                        <div class="w-week text-center fw-bold">سه شنبه</div>
                        <div class="w-week text-center fw-bold">چهارشنبه</div>
                        <div class="w-week text-center fw-bold">پنج شنبه</div>
                        <div class="w-week text-center fw-bold">جمعه</div>
                    </div>
                    <div class="dey month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="dey month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="dey month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="dey month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="dey month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="dey month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-dey-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 overflow-x-scroll border-t-gray">
                    <div class="head-date-picker d-flex">
                        <div class="w-week text-center fw-bold">شنبه</div>
                        <div class="w-week text-center fw-bold">یکشنبه</div>
                        <div class="w-week text-center fw-bold">دوشنبه</div>
                        <div class="w-week text-center fw-bold">سه شنبه</div>
                        <div class="w-week text-center fw-bold">چهارشنبه</div>
                        <div class="w-week text-center fw-bold">پنج شنبه</div>
                        <div class="w-week text-center fw-bold">جمعه</div>
                    </div>
                    <div class="bahman month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bahman month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bahman month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bahman month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bahman month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="bahman month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-bahman-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 overflow-x-scroll border-t-gray">
                    <div class="head-date-picker d-flex">
                        <div class="w-week text-center fw-bold">شنبه</div>
                        <div class="w-week text-center fw-bold">یکشنبه</div>
                        <div class="w-week text-center fw-bold">دوشنبه</div>
                        <div class="w-week text-center fw-bold">سه شنبه</div>
                        <div class="w-week text-center fw-bold">چهارشنبه</div>
                        <div class="w-week text-center fw-bold">پنج شنبه</div>
                        <div class="w-week text-center fw-bold">جمعه</div>
                    </div>
                    <div class="esfand month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="esfand month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="esfand month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="esfand month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="esfand month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="esfand month-datepicker d-flex">
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
                            </div>
                        </div>
                        <div class="w-week text-center boxTable bgWhite">
                            <div
                                class="headerBox px-1 pt-1 d-flex paddingBottom align-items-center justify-content-between col-12">
                                <p class="m-0 day-esfand-date-picker"></p>
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <button class="paste">paste</button>
                                    <button class="copy">copy</button>
                                    <input id="number" type="checkbox" class="checkBox" />
                                    <label class="d-none" for="number">sd</label>
                                </div>
                            </div>
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
                                <button class="button d-flex align-items-center justify-content-between col-12">
                                    + تعریف شیفت
                                    <img src="{{ asset('images/Frame 109.svg') }}" alt="" />
                                </button>
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
<script>
    const ShowDate = () => {
        const date = new Date();
        const option = {
            weekday: "long",
            year: "numeric",
            month: "long",
            day: "numeric",
        };
        let day, week, month, year;
        day = date
            .toLocaleDateString("fa-IR", option)
            .split(" ")[2]
            .split(",")[0];
        week = date.toLocaleDateString("fa-IR", option).split(" ")[3];
        month = date.toLocaleDateString("fa-IR", option).split(" ")[1];
        year = date.toLocaleDateString("fa-IR", option).split(" ")[0];

        // day = "29";
        // week = "سه‌شنبه";
        // month = "اسفند";
        // year = "1402";

        const ArrMonth = [
            "فروردین",
            "اردیبهشت",
            "خرداد",
            "تیر",
            "مرداد",
            "شهریور",
            "مهر",
            "آبان",
            "آذر",
            "دی",
            "بهمن",
            "اسفند",
        ];

        const ArrWeek = [
            "شنبه",
            "یکشنبه",
            "دوشنبه",
            "سه‌شنبه",
            "چهارشنبه",
            "پنجشنبه",
            "جمعه",
        ];
        const ArrKabise = [
            1403, 1408, 1412, 1416, 1420, 1424, 1428, 1432, 1436, 1441, 1445,
            1449, 1453, 1457, 1461, 1465, 1469, 1474, 1478, 1482, 1486, 1490,
            1494, 1498,
        ];
        let ThisYear = [];

        var pn = ["۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹"];
        var en = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];

        for (var i = 0; i < 10; i++) {
            var regex_fa = new RegExp(pn[i], "g");
            day = day.replace(regex_fa, en[i]);
        }

        var NumDay = +day;

        const DayToday = NumDay;

        for (var i = 0; i < 10; i++) {
            var regex_fa = new RegExp(pn[i], "g");
            year = year.replace(regex_fa, en[i]);
        }
        var NumYear = +year;
        // NumYear=1408

        let NumMonth, NumNewMonth;
        for (let i = 0; i < ArrMonth.length; i++) {
            if (ArrMonth[i].includes(month)) {
                NumMonth = i + 1;
                NumNewMonth = i + 1;
            }
        }

        let NumWeek;

        for (let i = 0; i < ArrWeek.length; i++) {
            if (ArrWeek[i] === week) {
                NumWeek = i;
            }
        }

        console.log(`${NumYear}/${NumMonth}/${NumDay}/${week}`);

        let NumMonthToday = NumMonth;
        let NumDayToday = NumDay;
        let WeekToday = week;
        let NumYearToday = NumYear;

        let NumMonthBefore = NumMonth,
            NumDayBefore = NumDay,
            NumYearBefore = NumYear,
            NumWeekBefore = NumWeek;
        let limit = 0;
        if (NumMonth <= 6) {
            limit = (NumMonth - 1) * 31 + NumDay; // در اوردن تعداد روز های قبل از تاریخ امروز
        } else {
            limit = (NumMonth - 1) * 30 + NumDay; // برای دراوردن تعداد روزهای بعد از تاریخ امروز
        }
        let Kabise = 365;

        let KabiseConditional = 30;

        if (ArrKabise.includes(NumYear)) {
            //برای تشخیص سال کبیسه
            Kabise += 1;
            KabiseConditional = 31;
            console.log("object");
        }
        let finallimit;
        if (NumMonth <= 6) {
            finallimit = limit;
        } else {
            finallimit = limit + 6;
        }

        for (let i = 0; i <= Kabise - limit; i++) {
            if (NumMonth <= 12) {
                if (NumMonth <= 6) {
                    if (NumDay <= 31) {
                        ThisYear.push({
                            ItemNumWeek: NumWeek,
                            ItemWeek: ArrWeek[NumWeek],
                            ItemYear: NumYear,
                            ItemMonth: NumMonth,
                            ItemDay: NumDay++,
                        });
                        if (NumWeek < 6) {
                            NumWeek++;
                        } else {
                            NumWeek = 0;
                        }
                    } else {
                        NumDay = 1;
                        NumMonth++;
                        ThisYear.push({
                            ItemNumWeek: NumWeek,
                            ItemWeek: ArrWeek[NumWeek],
                            ItemYear: NumYear,
                            ItemMonth: NumMonth,
                            ItemDay: NumDay++,
                        });
                        if (NumWeek < 6) {
                            NumWeek++;
                        } else {
                            NumWeek = 0;
                        }
                    }
                } else {
                    if (NumMonth === 12) {
                        if (NumDay < KabiseConditional) {
                            if (NumDay === 29) {
                                ThisYear.push({
                                    ItemNumWeek: NumWeek,
                                    ItemWeek: ArrWeek[NumWeek++],
                                    ItemYear: NumYear,
                                    ItemMonth: NumMonth,
                                    ItemDay: NumDay++,
                                });
                                // break;
                            } else {
                                ThisYear.push({
                                    ItemNumWeek: NumWeek,
                                    ItemWeek: ArrWeek[NumWeek],
                                    ItemYear: NumYear,
                                    ItemMonth: NumMonth,
                                    ItemDay: NumDay++,
                                });
                                if (NumWeek < 6) {
                                    NumWeek++;
                                } else {
                                    NumWeek = 0;
                                }
                            }
                        } else {
                            NumDay = 1;
                            NumMonth++;
                            ThisYear.push({
                                ItemNumWeek: NumWeek,
                                ItemWeek: ArrWeek[NumWeek],
                                ItemYear: NumYear,
                                ItemMonth: NumMonth,
                                ItemDay: NumDay++,
                            });
                            if (NumWeek < 6) {
                                NumWeek++;
                            } else {
                                NumWeek = 0;
                            }
                        }
                    } else {
                        if (NumDay <= 30) {
                            ThisYear.push({
                                ItemNumWeek: NumWeek,
                                ItemWeek: ArrWeek[NumWeek],
                                ItemYear: NumYear,
                                ItemMonth: NumMonth,
                                ItemDay: NumDay++,
                            });
                            if (NumWeek < 6) {
                                NumWeek++;
                            } else {
                                NumWeek = 0;
                            }
                        } else {
                            NumDay = 1;
                            NumMonth++;
                            ThisYear.push({
                                ItemNumWeek: NumWeek,
                                ItemWeek: ArrWeek[NumWeek],
                                ItemYear: NumYear,
                                ItemMonth: NumMonth,
                                ItemDay: NumDay++,
                            });
                            if (NumWeek < 6) {
                                NumWeek++;
                            } else {
                                NumWeek = 0;
                            }
                        }
                    }
                }
            }
        }

        for (let i = 0; i < finallimit; i++) {
            if (NumMonthBefore <= 12) {
                if (NumMonthBefore <= 7) {
                    if (NumDayBefore >= 1) {
                        ThisYear.unshift({
                            ItemNumWeek: NumWeekBefore,
                            ItemWeek: ArrWeek[NumWeekBefore],
                            ItemYear: NumYearBefore,
                            ItemMonth: NumMonthBefore,
                            ItemDay: NumDayBefore--,
                        });
                        if (NumWeekBefore > 0) {
                            NumWeekBefore--;
                        } else {
                            NumWeekBefore = 6;
                        }
                    } else {
                        //               if (NumMonthBefore <= 6) {
                        //                 NumDayBefore = 30;
                        // console.log('object');
                        //               } else {
                        //                 NumDayBefore = 31;

                        //               }
                        NumDayBefore = 31;
                        NumMonthBefore--;
                        ThisYear.unshift({
                            ItemNumWeek: NumWeekBefore,
                            ItemWeek: ArrWeek[NumWeekBefore],
                            ItemYear: NumYearBefore,
                            ItemMonth: NumMonthBefore,
                            ItemDay: NumDayBefore--,
                        });
                        if (NumWeekBefore > 0) {
                            NumWeekBefore--;
                        } else {
                            NumWeekBefore = 6;
                        }
                    }
                } else {
                    if (NumDayBefore >= 1) {
                        ThisYear.unshift({
                            ItemNumWeek: NumWeekBefore,
                            ItemWeek: ArrWeek[NumWeekBefore],
                            ItemYear: NumYearBefore,
                            ItemMonth: NumMonthBefore,
                            ItemDay: NumDayBefore--,
                        });
                        if (NumWeekBefore > 0) {
                            NumWeekBefore--;
                        } else {
                            NumWeekBefore = 6;
                        }
                    } else {
                        NumDayBefore = 30;
                        NumMonthBefore--;
                        ThisYear.unshift({
                            ItemNumWeek: NumWeekBefore,
                            ItemWeek: ArrWeek[NumWeekBefore],
                            ItemYear: NumYearBefore,
                            ItemMonth: NumMonthBefore,
                            ItemDay: NumDayBefore--,
                        });
                        if (NumWeekBefore > 0) {
                            NumWeekBefore--;
                        } else {
                            NumWeekBefore = 6;
                        }
                    }
                }
            }
        }

        let FinallThisYear = Array.from(
            new Set(ThisYear.map(JSON.stringify))
        ).map(JSON.parse);

        let ArrFarvardin = ThisYear.slice(0, 31);
        let ArrOrdibehesht = ThisYear.slice(31, 62);
        let ArrKhordad = ThisYear.slice(62, 93);
        let ArrTir = ThisYear.slice(93, 125);
        let ArrMordad = ThisYear.slice(125, 156);
        let ArrShahrivar = ThisYear.slice(156, 187);
        let ArrMehr = ThisYear.slice(187, 217);
        let ArrAban = ThisYear.slice(217, 247);
        let ArrAzar = ThisYear.slice(247, 277);
        let ArrDey = ThisYear.slice(277, 307);
        let ArrBahman = ThisYear.slice(307, 337);
        let ArrEsfand = ThisYear.slice(337, 366);

        let Table = document.querySelector("#demo>tbody>tr");
        let count = 0;

        if (NumNewMonth >= 6) {
            FinallThisYear.pop();
        }

        return [{
            Months: [
                ArrFarvardin,
                ArrOrdibehesht,
                ArrKhordad,
                ArrTir,
                ArrMordad,
                ArrShahrivar,
                ArrMehr,
                ArrAban,
                ArrAzar,
                ArrDey,
                ArrBahman,
                ArrEsfand,
            ],
            FinallThisYear,
            NumMonthToday,
            WeekToday,
            NumDayToday,
            NumYearToday,
        }, ];
    };

    const ShamsiDate = ShowDate()[0];
    console.log(ShamsiDate.NumMonthToday, "NumMonthToday");
    const MonthEn = [
        "farvardin",
        "ordibehesht",
        "khordad",
        "tir",
        "mordad",
        "shahrivar",
        "mehr",
        "aban",
        "azar",
        "dey",
        "bahman",
        "esfand",
    ];

    console.log(ShamsiDate.FinallThisYear);

    let table = document.querySelector("table");
    let tbody = document.querySelector("tbody");

    let tdfarr = document.querySelectorAll(".day-farvardin-date-picker");
    let tdord = document.querySelectorAll(".day-ordibehesht-date-picker");
    let tdKhor = document.querySelectorAll(".day-khordad-date-picker");
    let tdtir = document.querySelectorAll(".day-tir-date-picker");
    let tdmord = document.querySelectorAll(".day-mordad-date-picker");
    let tdshah = document.querySelectorAll(".day-shahrivar-date-picker");
    let tdmehr = document.querySelectorAll(".day-mehr-date-picker");
    let tdaban = document.querySelectorAll(".day-aban-date-picker");
    let tdazar = document.querySelectorAll(".day-azar-date-picker");
    let tddey = document.querySelectorAll(".day-dey-date-picker");
    let tdbah = document.querySelectorAll(".day-bahman-date-picker");
    let tdesf = document.querySelectorAll(".day-esfand-date-picker");

    let td = [
        tdfarr,
        tdord,
        tdKhor,
        tdtir,
        tdmord,
        tdshah,
        tdmehr,
        tdaban,
        tdazar,
        tddey,
        tdbah,
        tdesf,
    ];

    counter = [
        (a1 = 0),
        (a2 = 0),
        (a3 = 0),
        (a4 = 0),
        (a5 = 0),
        (a6 = 0),
        (a7 = 0),
        (a8 = 0),
        (a9 = 0),
        (a10 = 0),
        (a11 = 0),
        (a12 = 0),
    ];
    let j = 0;
    let k = 0;
    //   console.log(tdfarr, tdord);

    for (let r = 0; r < 12; r++) {
        for (
            let i = ShamsiDate.Months[r][0].ItemNumWeek; i < ShamsiDate.Months[r].length + ShamsiDate.Months[r][0]
            .ItemNumWeek; i++
        ) {
            if (ShamsiDate.Months[r][counter[r]]) {
                td[r][i].innerHTML = ShamsiDate.Months[r][counter[r]].ItemDay;
                counter[r]++;
            } else {
                break;
            }
        }
    }

    //------------------------------------------------------------------------------------------------------

    const weeks = ["هفته اول", "هفته دوم", "هفته سوم", "هفته چهارم"];

    const p2e = (s) => s.replace(/[۰-۹]/g, (d) => "۰۱۲۳۴۵۶۷۸۹".indexOf(d));

    let month = document.querySelector(".month");

    let years = document.querySelector(".year");

    let rightYear = document.querySelector(".rightYear");
    let leftYear = document.querySelector(".leftYear");

    let rightMonth = document.querySelector(".rightMonth");
    let leftMonth = document.querySelector(".leftMonth");

    let content = document.querySelectorAll(".contextCardCalender");

    let box = document.querySelectorAll(".boxTable");

    let paste = document.querySelectorAll(".paste");
    let copy = document.querySelectorAll(".copy");

    let headerBox = document.querySelectorAll(".headerBox");

    let check = document.querySelector(".check");

    let checkBox = document.querySelectorAll(".checkBox");

    let shift = document.querySelector(".DeleteCustomShift");

    let today = new Date().toLocaleDateString("fa-IR");
    let array = today.split("/");

    let monthIndex = p2e(array[1]);

    check.onclick = () => {
        for (let j = 0; j < checkBox.length; j++) {
            checkBox[j].checked = false;
        }
    };

    shift.onclick = () => {
        for (let j = 0; j < checkBox.length; j++) {
            if (checkBox[j].checked === true) {
                content[j].innerHTML = "";
                checkBox[j].checked = false;
                box[j].classList.add("bgWhite");
                box[j].classList.remove("emptyButton");
                paste[j].style.display = "none";
                copy[j].style.display = "none";
                // headerBox[j].classList.remove('paddingBottom')
                // headerBox[j].classList.add('paddingRemoveItem')
            }
        }
    };

    for (let i = 0; i < box.length; i++) {
        if (content[i].innerHTML.trim() === "") {
            box[i].classList.add("bgWhite");
            box[i].classList.remove("emptyButton");
            paste[i].style.display = "none";
            copy[i].style.display = "none";
            // headerBox[i].classList.remove('paddingBottom')
            // headerBox[i].classList.add('paddingRemoveItem')
        } else {
            box[i].classList.remove("bgWhite");
            box[i].classList.add("emptyButton");
            paste[i].style.display = "block";
            copy[i].style.display = "block";
        }
    }

    let indexMonth = monthIndex - 1;
    let indexYear = 0;

    const monthArray = [
        "فروردین",
        "اردیبهشت",
        "خرداد",
        "تیر",
        "مرداد",
        "شهریور",
        "مهر",
        "آبان",
        "آذر",
        "دی",
        "بهمن",
        "اسفند",
    ];

    month.innerHTML = monthArray[indexMonth];

    // month.innerHTML = monthArray[0];
    const yearArray = [
        "۱۴۰۲",
        "۱۴۰۳",
        "۱۴۰۴",
        "۱۴۰۵",
        "۱۴۰۶",
        "۱۴۰۷",
        "۱۴۰۸",
        "۱۴۰۹",
        "۱۴۱۰",
        "۱۴۱۱",
        "۱۴۱۲",
        "۱۴۱۳",
        "۱۴۱۴",
        "۱۴۱۵",
        "۱۴۱۶",
        "۱۴۱۷",
        "۱۴۱۸",
        "۱۴۱۹",
        "۱۴۲۰",
    ];

    leftYear.onclick = () => {
        indexYear++;
        if (indexYear >= yearArray.length - 1) {
            indexYear = yearArray.length - 1;
        }

        years.innerHTML = yearArray[indexYear];
    };

    rightYear.onclick = () => {
        indexYear--;

        if (0 >= indexYear) {
            indexYear = 0;
        }
        years.innerHTML = yearArray[indexYear];
    };

    const ContainerDatePicker = document.querySelector(
        ".container-date-picker"
    );

    let translate = (ShamsiDate.NumMonthToday - 1) * 100;
    leftMonth.onclick = () => {
        indexMonth++;
        if (indexMonth >= monthArray.length - 1) {
            indexMonth = monthArray.length - 1;
        }
        if (translate < 1100) {
            translate += 100;
            ContainerDatePicker.style.transform = `translateX(${translate}%)`;
        }
        console.log(translate)
        month.innerHTML = monthArray[indexMonth];
    };

    rightMonth.onclick = () => {
        indexMonth--;
        if (0 >= indexMonth) {
            indexMonth = 0;
        }
        if (translate >= 100) {
            translate -= 100;
            ContainerDatePicker.style.transform = `translateX(${translate}%)`;
        }
        console.log(translate)
        month.innerHTML = monthArray[indexMonth];
    };

    window.onload = () => {
        ContainerDatePicker.style.transform = `translateX(${translate}%)`;

    }
    //   (function GenerateAutoMonthNow() {
    //   })();

    let variable = document.querySelector(".boxDrops");
    let drop = document.querySelector(".positionCostume");
    let text = document.querySelector(".textDrop");
    variable.onclick = () => {
        if (drop.style.display === "block") {
            drop.style.display = "none";
        } else {
            drop.style.display = "block";
        }
    };
    window.onclick = (e) => {
        if (e.target !== variable && e.target !== text) {
            drop.style.display = "none";
        }
    };
</script>
@endsection
