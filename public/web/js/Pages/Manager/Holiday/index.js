import {
    CloseModalManagerHoliday,
    ContainerModalHoliday,
} from "../../../Elements.js";
import { GenereateDeleteRow } from "../../../component/PushData.js";
import WindowCheck from "../../../component/Window.js";

jalaliDatepicker.startWatch();

window.onclick = (e) => {
    WindowCheck(e);
};

const BtnDeleteRow = document.querySelectorAll("[delete-row-holiday]");

for (let i = 0; i < BtnDeleteRow.length; i++) {
    BtnDeleteRow[i].onclick = () => {
        ContainerModalHoliday.classList.remove("hide");
    };
}
for (let i = 0; i < CloseModalManagerHoliday.length; i++) {
    CloseModalManagerHoliday[i].onclick = () => {
        ContainerModalHoliday.classList.add("hide");
    };
}
const OkDeleteRowHoliday = document.querySelector("[ok-delete-row-holiday]");
const ModalHoliday = document.querySelector("[modal-delete-holiday]");
// const OkDeleteRowHoliday =document.querySelector('[ok-delete-row-holiday]');
const RowTableHoliday = document.querySelectorAll("[body-table-holiday]>tr");

GenereateDeleteRow(
    BtnDeleteRow,
    ModalHoliday,
    OkDeleteRowHoliday,
    RowTableHoliday
);
