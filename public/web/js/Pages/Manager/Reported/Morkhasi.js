import WindowCheck from "../../../component/Window.js";

// window.onload = function () {
var ddlYears = document.getElementById("Personal");

//Determine the Current Year.
var currentYear = new Date().toLocaleDateString("fa-IR");

const date = currentYear.split("/");

const year = date[0];

const p2e = (s) => s.replace(/[۰-۹]/g, (d) => "۰۱۲۳۴۵۶۷۸۹".indexOf(d));

const years = p2e(year);

for (var i = years; i >= 1390; i--) {
    var option = document.createElement("OPTION");
    option.innerHTML = i;
    option.value = i;
    ddlYears.appendChild(option);
}

// const variable = document.querySelector(".pa");
// console.log(variable);

const selected = document.getElementById("month");

const selectDay = document.getElementById("day");

let first;

const arr1 = ["فروردین", "اردیبهشت", "خرداد", "تیر", "مرداد", "شهریور"];

const arr2 = ["مهر", "آبان", "آذر", "دی", "بهمن", "اسفند"];

selected.onblur = () => {
    console.log(selected.value);

    if (arr1.includes(selected.value)) {
        first = true;
    }
    if (arr2.includes(selected.value)) {
        first = false;
    }
    console.log(`first:${first}`);
    let day = document.getElementById("day");

    if (first === true) {
        selectDay.innerHTML = "";
        console.log(first);
        for (var p = 1; p <= 31; p++) {
            var option = document.createElement("OPTION");
            option.innerHTML = p;
            option.value = p;
            day.appendChild(option);
        }
    }

    if (first === false) {
        selectDay.innerHTML = "";

        for (var o = 1; o <= 30; o++) {
            var option = document.createElement("OPTION");
            option.innerHTML = o;
            option.value = o;
            day.appendChild(option);
        }
    }
};

// };

window.onclick = (e) => {
    WindowCheck(e);
};
