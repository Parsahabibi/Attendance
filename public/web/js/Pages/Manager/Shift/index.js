import CheckEmptyTable from "../../../Validations/Table.js";
import WindowCheck from "../../../component/Window.js";

let BtnDropDownShift, DropDownShift, TextDropDownShift, ImgDropDownShift;
const GenerateBtnDropDownOperationShift = () => {
    setTimeout(() => {
        BtnDropDownShift = document.querySelectorAll(
            "[data-btn-dropdown-operation-Shift]"
        );
        DropDownShift = document.querySelectorAll(
            "[data-dropdown-operation-Shift]"
        );
        TextDropDownShift = document.querySelectorAll(
            "[data-btn-dropdown-operation-Shift]>p"
        );
        ImgDropDownShift = document.querySelectorAll(
            "[data-btn-dropdown-operation-Shift]>img"
        );
        for (let i = 0; i < BtnDropDownShift.length; i++) {
            BtnDropDownShift[i].addEventListener("click", () => {
                DropDownShift[i].style.display = "inline";
            });
        }
        window.onclick = (e) => {
            for (let i = 0; i < BtnDropDownShift.length; i++) {
                if (
                    e.target !== BtnDropDownShift[i] &&
                    e.target !== TextDropDownShift[i] &&
                    e.target !== ImgDropDownShift[i]
                ) {
                    DropDownShift[i].style.display = "none";
                }
            }
            WindowCheck(e);
        };
    }, 500);
};

const liList = document.querySelectorAll(".li");

for (let i = 0; i < liList.length; i++) {
    liList[i].onclick = () => {
        for (let i = 0; i < liList.length; i++) {
            liList[i].classList.remove("active");
        }
        liList[i].classList.add("active");
    };
}
jalaliDatepicker.startWatch();

let BtnDropDown = document.querySelectorAll("[data-dropdown]");
let DropDown = document.querySelectorAll(".dropdown");
let BtnDeleteRow = document.querySelectorAll("[delete-row]");
let CloseModal = document.querySelectorAll("[close-modal]");
let Modal = document.querySelector(".container-modal");
let DeleteRow = document.querySelector("[ok-delete-row]");
let RowTable = document.querySelectorAll("[body-table-shift]>tr");
let ComponyName = document.querySelector("[data-input-name]");
let CompanyCity = document.querySelector("[data-input-city]");
let text = document.querySelectorAll(".textBox");
let img = document.querySelectorAll(".image");
let button = document.getElementById("SearchButton");

let input = document.getElementById("nameOfShift");

let row = document.querySelector("[body-table-shift]");

const data = [
    {
        id: 1,
        title: "ساعتی",
    },
    {
        id: 2,
        title: "هفتگی",
    },
    {
        id: 3,
        title: "ساعتی",
    },
    {
        id: 4,
        title: "ساعتی",
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
            <div class="endFlex" data-btn-dropdown-operation-Shift>
              <p class="textBox fs-small-100">عملیات</p>
              <img src="../../images/Frame 134.svg" alt="" class="pe-1 image"/>
              <div class="dropdown" data-dropdown-operation data-dropdown-operation-Shift> 
                <div>ویرایش</div>
                <div delete-row>حذف</div>
              </div>
            </div>
          </td>
        </tr>
    `)
);
GenerateBtnDropDownOperationShift();
for (let i = 0; i < BtnDropDown.length; i++) {
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

button.onclick = () => {
    let search = document.getElementById("nameOfShift").value;
    let arr = data.filter((item) => item.title.includes(search));
    console.log(arr);
    row.innerHTML = "";

    // if (search === "") {
    //     data.map(
    //         (item) =>
    //             (row.innerHTML += `
    // <tr class="borderTable border-0">
    //       <td class="py-4 border-0 c-gray-dark col-2">${item.id}</td>
    //       <td class="py-4 border-0 c-gray-dark text-center col-2 shift">${item.title}</td>
    //       <td
    //         class="float-start ms-4 py-3 border-0 ps-4 c-gray-200 fs-small data-dropdown p-0 c-gray-dark3"
    //         >
    //         <div class="endFlex"data-btn-dropdown-operation-Shift>
    //           <p class="textBox fs-small-100">عملیات</p>
    //           <img src="../../images/Frame 134.svg" alt="" class="pe-1 image" />
    //           <div class="dropdown" data-dropdown-operation data-dropdown-operation-Shift>
    //             <div>ویرایش</div>
    //             <div delete-row>حذف</div>
    //           </div>
    //         </div>
    //       </td>
    //     </tr>
    // `)
    //     );
    // }
    arr.map(
        (item) =>
            (row.innerHTML += `
    <tr class="borderTable border-0">
          <td class="py-4 border-0 c-gray-dark col-2">${item.id}</td>
          <td class="py-4 border-0 c-gray-dark text-center col-2 shift">${item.title}</td>
          <td class="float-start ms-4 py-3 border-0 ps-4 c-gray-200 fs-small data-dropdown p-0 c-gray-dark3">
            <div class="endFlex" data-btn-dropdown-operation-shift="">
              <p class="textBox fs-small-100">عملیات</p>
              <img src="../../images/Frame 134.svg" alt="" class="pe-1 image">
              <div class="dropdown" data-dropdown-operation="" data-dropdown-operation-shift=""> 
                <div>ویرایش</div>
                <div delete-row="">حذف</div>
              </div>
            </div>
          </td>
          
        </tr>
    `)
    );

    CheckEmptyTable();
    GenerateBtnDropDownOperationShift();
};
