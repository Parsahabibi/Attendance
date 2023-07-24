import { ContentAdvancedSetting } from "../../../Elements.js";
import WindowCheck from "../../../component/Window.js";
import ShamsiDate from "../../../persiandate/PersianDatePicker.js";

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
        }
    }
};

const CheckEmptyField = () => {
    for (let i = 0; i < box.length; i++) {
        if (content[i].innerHTML.trim() === "") {
            box[i].classList.add("bgWhite");
            box[i].classList.remove("emptyButton");
            paste[i].style.display = "none";
            copy[i].style.display = "none";
        } else {
            box[i].classList.remove("bgWhite");
            box[i].classList.add("emptyButton");
            paste[i].style.display = "block";
            copy[i].style.display = "block";
        }
    }
};
CheckEmptyField();

const dataInputEzafekaryDatepicker = document.querySelector(
    "[data-input-ezafekary-datepicker]"
);
const dataInputShenavariDatepicker = document.querySelector(
    "[data-input-shenavari-datepicker]"
);
// console.log(dataInputShenavariDatepicker)
const BtnDatePicker = document.querySelectorAll(".button");
const BtnNextStepDatePicker = document.querySelector(
    "[btn-next-step-date-picker]"
);
const ContextCardCalender = document.querySelectorAll(".contextCardCalender");
const DataInputEzafekariModalDatePicker = document.querySelector(
    "[data-input-ezafekari-modal-date-picher]"
);
const DataInputShenavariModalDatePicher = document.querySelector(
    "[data-input-shenavari-modal-date-picher]"
);
const CloseModalDatePicker = () => {
    document.querySelector(".modal-shift-manager").classList.add("hide");
    document.querySelector(".bg-dark2").style.visibility = "hidden";
    document.querySelector('.side-bar').style.zIndex='100';
};
// console.log('first')
for (let i = 0; i < BtnDatePicker.length; i++) {
    BtnDatePicker[i].onclick = () => {
        ContentAdvancedSetting.classList.add("d-none");

        document.querySelector(".modal-shift-manager").classList.remove("hide");
        document.querySelector(".bg-dark2").style.visibility = "visible";
        document.querySelector('.side-bar').style.zIndex='10';
        DataInputEzafekariModalDatePicker.value = "";
        DataInputShenavariModalDatePicher.value = "";
        BtnNextStepDatePicker.onclick = () => {
            if (
                dataInputEzafekaryDatepicker.value.trim() !== "" &&
                dataInputShenavariDatepicker.value.trim() !== ""
            ) {
                ContextCardCalender[i].innerHTML = `
                <p>${dataInputEzafekaryDatepicker.value}</p>
                <p>${dataInputShenavariDatepicker.value}</p>

                `;
                CloseModalDatePicker();
                CheckEmptyField();
                DataInputEzafekariModalDatePicker.value = "";
                DataInputShenavariModalDatePicher.value = "";
            } else {
                if (dataInputEzafekaryDatepicker.value.trim() === "") {
                    DataInputEzafekariModalDatePicker.innerHTML =
                        "لطفا ورودی را پرکنید";
                }
                if (dataInputShenavariDatepicker.value.trim() === "") {
                    DataInputShenavariModalDatePicher.innerHTML =
                        "لطفا ورودی را پرکنید";
                }
            }

            dataInputEzafekaryDatepicker.value = "";
            dataInputShenavariDatepicker.value = "";

        };

    };
}

document.querySelector(".bg-dark2").addEventListener("click", () => {
    CloseModalDatePicker();
});
document
    .querySelector(".btn-close-modal-shift")
    .addEventListener("click", () => {
        CloseModalDatePicker();
    });
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

const ContainerDatePicker = document.querySelector(".container-date-picker");

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
    month.innerHTML = monthArray[indexMonth];
};

window.onload = () => {
    ContainerDatePicker.style.transform = `translateX(${translate}%)`;
};

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

    WindowCheck(e);
};
