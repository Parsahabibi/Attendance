import {
    BtnDropdownOperationHoliday,
    DataBtnDropDownOperation,
    DataDropDownOperation,
    DataDropdownDiv,
    DataDropdownInput,
    DataItemDropdown,
    DropdownOperationHoliday,
} from "../Elements.js";
if (
    DataDropdownInput !== null &&
    DataDropdownDiv !== null &&
    DataItemDropdown !== null
) {
    for (let i = 0; i < DataDropdownInput.length; i++) {
        DataDropdownInput[i].onclick = () => {
            if (DataDropdownDiv[i].classList.contains("d-none")) {
                DataDropdownDiv[i].classList.remove("d-none");
            } else {
                DataDropdownDiv[i].classList.add("d-none");
            }

            for (let j = 0; j < DataItemDropdown.length; j++) {
                DataItemDropdown[j].onclick = (e) => {
                    DataDropdownInput[i].value = e.target.innerText;
                };
            }
        };
    }
}
if (DataBtnDropDownOperation !== null && DataDropDownOperation !== null) {
    for (let j = 0; j < DataBtnDropDownOperation.length; j++) {
        DataBtnDropDownOperation[j].onclick = () => {
            if (DataDropDownOperation[j].classList.contains("d-none")) {
                DataDropDownOperation[j].classList.remove("d-none");
            } else {
                DataDropDownOperation[j].classList.add("d-none");
            }
        };
    }
}
if (BtnDropdownOperationHoliday !== null) {
    for (let j = 0; j < BtnDropdownOperationHoliday.length; j++) {
        BtnDropdownOperationHoliday[j].onclick = () => {
            if (DropdownOperationHoliday[j].classList.contains("d-none")) {
                DropdownOperationHoliday[j].classList.remove("d-none");
            } else {
                DropdownOperationHoliday[j].classList.add("d-none");
            }
        };
    }
}
