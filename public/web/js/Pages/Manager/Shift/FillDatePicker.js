import ShamsiDate from "../../../persiandate/PersianDatePicker.js";

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

let counter = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];


for (let r = 0; r < 12; r++) {

    for (let i = ShamsiDate.Months[r][0].ItemNumWeek; i < ShamsiDate.Months[r].length + ShamsiDate.Months[r][0].ItemNumWeek; i++) {
        if (ShamsiDate.Months[r][counter[r]]) {
            td[r][i].innerHTML = ShamsiDate.Months[r][counter[r]].ItemDay;
            counter[r]++;
        } else {
            break;
        }
    }
}
