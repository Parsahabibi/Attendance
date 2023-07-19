import {
    DataBtnDropDownOperation,
    DataDropDownOperation,
    DataDropdownDiv,
    DataDropdownInput,
    DataItemDropdown,
} from "../Elements.js";

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

for (let j = 0; j < DataBtnDropDownOperation.length; j++) {
    DataBtnDropDownOperation[j].onclick = () => {
        if (DataDropDownOperation[j].classList.contains("d-none")) {
            DataDropDownOperation[j].classList.remove("d-none");
        } else {
            DataDropDownOperation[j].classList.add("d-none");
        }
    };
}