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
        {{-- <div class="container-modal hide">
            <div class="bg-modal" close-modal=""></div>
            <div class="col-12 col-md-6 modal-delete rounded-24 p-4">
                <div class="d-flex justify-content-between">
                    <h6>حذف محل کار</h6>
                    <img src="{{asset('images/Frame 77.svg')}}" alt="close" role="button" close-modal="">
                </div>
                <div class="body-modal-delete d-flex flex-column justify-content-center align-items-center py-5">
                    <div class="p-modal-delete px-5 py-4 text-nowrap mb-5">
                        <h6>آیا می‌خواهید شیفت انتخابی حذف شود؟</h6>
                    </div>
                    <div>
                        <button class="mx-3 py-2 px-4 rounded-24" ok-delete-row="">بله</button>
                        <button class="mx-3 py-2 px-4 rounded-24" close-modal="">خیر</button>
                    </div>
                </div>
            </div>
        </div> --}}
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
                    <tbody class="col-12" body-table=""></tbody>
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
    const liList = document.querySelectorAll(".li");

    for (let i = 0; i < liList.length; i++) {
        // console.log("knhwhfb");
        liList[i].onclick = () => {
            for (let i = 0; i < liList.length; i++) {
                liList[i].classList.remove("active");
            }
            liList[i].classList.add("active");
        };
    }
    jalaliDatepicker.startWatch();

    const DataBtnDropDownOperation = document.querySelectorAll(
        "[data-btn-dropdown-operation]"
    );

    const DataDropDownOperation = document.querySelectorAll(
        "[data-dropdown-operation]"
    );
    for (let j = 0; j < DataBtnDropDownOperation.length; j++) {
        DataBtnDropDownOperation[j].onclick = () => {
            if (DataDropDownOperation[j].classList.contains("d-none")) {
                DataDropDownOperation[j].classList.remove("d-none");
            } else {
                DataDropDownOperation[j].classList.add("d-none");
            }
        };
    }

    let BtnDropDown = document.querySelectorAll("[data-dropdown]");
    let DropDown = document.querySelectorAll(".dropdown");
    let BtnDeleteRow = document.querySelectorAll("[delete-row]");
    let CloseModal = document.querySelectorAll("[close-modal]");
    let Modal = document.querySelector(".container-modal");
    let DeleteRow = document.querySelector("[ok-delete-row]");
    let RowTable = document.querySelectorAll("[body-table]>tr");
    let ComponyName = document.querySelector("[data-input-name]");
    let CompanyCity = document.querySelector("[data-input-city]");
    let text = document.querySelectorAll(".textBox");
    let img = document.querySelectorAll(".image");
    let button = document.getElementById("SearchButton");

    let input = document.getElementById("nameOfShift");

    let row = document.querySelector("[body-table]");

    const data = [{
            id: 1,
            title: "ساعتی"
        },
        {
            id: 2,
            title: "هفتگی"
        },
        {
            id: 3,
            title: "ساعتی"
        },
        {
            id: 4,
            title: "ساعتی"
        },
    ];
    input.onclick = () => {
        input.value = "";
    };

    data.map(
        (item) =>
        (row.innerHTML += `
        <tr class="borderTable border-0">
              <td class="py-4 border-0 c-gray-dark col-2">${item.id}</td>
              <td class="py-4 border-0 c-gray-dark text-center col-2 shift">${item.title}</td>
              <td
                class="float-start ms-4 py-3 border-0 ps-4 c-gray-200 fs-small data-dropdown p-0 c-gray-dark3"
              >
                <div class="endFlex" data-btn-dropdown-operation data-dropdown>
                  <p class="textBox fs-small-100">عملیات</p>
                  <img src="{{asset('images/Frame 134.svg')}}" alt="" class="pe-1 image" />
                  <div class="dropdown" data-dropdown-operation>
                    <div>ویرایش</div>
                    <div delete-row>حذف</div>
                  </div>
                </div>
              </td>
            </tr>
        `)
    );

    for (let i = 0; i < BtnDropDown.length; i++) {
        BtnDropDown[i].onclick = () => {
            if (DropDown[i].style.display === "inline")
                DropDown[i].style.display = "none";
            else DropDown[i].style.display = "inline";
        };

        BtnDeleteRow[i].onclick = () => {
            Modal.classList.remove("hide");
            Modal.classList.add("show");
            DeleteRow.onclick = () => {
                Modal.classList.remove("show");
                Modal.classList.add("hide");
                RowTable[i].remove();
            };
        };
    }
    for (let j = 0; j < CloseModal.length; j++) {
        CloseModal[j].addEventListener("click", () => {
            Modal.classList.remove("show");
            Modal.classList.add("hide");
        });
    }

    window.onclick = (e) => {
        for (let k = 0; k < BtnDropDown.length; k++) {
            if (
                e.target !== BtnDropDown[k] &&
                e.target !== text[k] &&
                e.target !== img[k]
            ) {
                DropDown[k].style.display = "none";
            }
        }
    };

    button.onclick = () => {
        let search = document.getElementById("nameOfShift").value;
        let arr = data.filter((item) => item.title === search);
        console.log(arr);
        row.innerHTML = "";
        arr.map(
            (item) =>
            (row.innerHTML += `
        <tr class="borderTable border-0">
              <td class="py-4 border-0 c-gray-dark col-2">${item.id}</td>
              <td class="py-4 border-0 c-gray-dark text-center col-2 shift">${item.title}</td>
              <td
                class="float-start py-3 border-0 ps-4 c-gray-200 fs-small data-dropdown p-0 c-gray-dark3"
              >
                <div class="endFlex" data-btn-dropdown-operation data-dropdown>
                  <p class="textBox">عملیات</p>
                  <img src="{{asset('images/Frame 134.svg')}}" alt="" class="pe-1 image" />
                  <div class="dropdown" data-dropdown-operation>
                    <div>ویرایش</div>
                    <div delete-row>حذف</div>
                  </div>
                </div>
              </td>
            </tr>
        `)
        );
    };
</script>
@endsection
