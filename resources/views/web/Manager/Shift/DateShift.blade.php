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
    <div class="bg-dark bg-dark2"></div>
    <section class="modal-shift-manager col-12 col-md-11 bg-white pb-4 no-scroll-bar no-scrollbar hide"
        style="overflow-y: scroll;" data-modal>
        <div class="d-flex  justify-content-between w-100 p-3 p-md-4 border-b-gray">
            <h5 class="fw-bold">نوع شیفت خود را انتخاب کنید</h5>
            <img src="{{ asset('images/remove.svg') }}" alt="" style="width: 12px"class="btn-close-modal-shift"
                role="button" btn-modal>
        </div>
        <div class="p-3 py-4 d-flex align-items-end flex-column flex-lg-row">
            <div class="col-12 col-lg-3 d-flex flex-column mx-lg-2 mb-3 mb-lg-0">
                <label for="">سال شیفت</label>
                <input class="bg-gray rounded-16 py-2 mt-1" type="text" data-input-city="">
            </div>
            <div class="col-12 col-lg-3 d-flex flex-column mx-lg-2 mb-3 mb-lg-0 position-relative">
                <label for="">زمان شناوری</label>
                <input class="bg-gray rounded-16 py-2 mt-1" type="number" data-input-city=""
                    data-input-shenavari-datepicker>
                <p id="err-input-email_phone" class="err-input pt-1" data-input-shenavari-modal-date-picher></p>
            </div>
            <div class="col-12 col-lg-3 d-flex flex-column mx-lg-2 mb-3 mb-lg-0 position-relative">
                <label for="">سقف اضافه کاری روزانه</label>
                <input class="bg-gray rounded-16 py-2 mt-1" type="number" data-input-city=""
                    data-input-ezafekary-datepicker>
                <p id="err-input-email_phone" class="err-input pt-1" data-input-ezafekari-modal-date-picher></p>
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
            <button class="btn-primary-nahira text-nowrap" btn-next-step-date-picker>مرحله بعدی</button>
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
            <button class="btn-primary-nahira py- px-5">ثبت</button>
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
                            <div class="contextCardCalender height px-1 d-flex flex-column align-items-center gap-3">
                            </div>
                            <div class="px-1 py-1 col-12 pb-3">
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
<script src="{{asset('web/js/Pages/Manager/Shift/FillDatePicker.js')}}" type="module"></script>
<script src="{{asset('web/js/Pages/Manager/Shift/PutDataInDatePicker.js')}}" type="module"></script>
<script src="{{asset('web/js/Pages/Manager/Shift/AdvanceSetting.js')}}" type="module"></script>

@endsection
