import {
    BtnDropdownOperationHoliday,
    DataBtnDropDownOperation,
    DataContentBtnDropDownOperation,
    DataDropDownOperation,
    DataDropdownDiv,
    DataDropdownInput,
    DataImageBtnDropDownOperation,
    DropdownItemSidebar,
    DropdownOperationHoliday,
    ImgDropdownOperationHoliday,
    ItemSidebar,
    ItemSidebarImgDark,
    ItemSidebarImgLight,
    MatnDropdownOperationHoliday,
} from "../Elements.js";

const WindowCheck = (e) => {
    if (DropdownItemSidebar !== undefined && DropdownItemSidebar !== null) {
        for (let i = 0; i < ItemSidebar.length; i++) {
            if (
                e.target !== ItemSidebarImgLight[i] &&
                e.target !== ItemSidebarImgDark[i] &&
                e.target !== ItemSidebar[i]
            ) {
                DropdownItemSidebar[i].style.display = "none";
            }
        }
    }
    if (DataDropdownInput !== undefined && DataDropdownInput !== null) {
        for (let i = 0; i < DataDropdownInput.length; i++) {
            if (e.target !== DataDropdownInput[i]) {
                DataDropdownDiv[i].classList.add("d-none");
            }
        }
    }

    if (
        DataBtnDropDownOperation !== undefined &&
        DataBtnDropDownOperation !== null
    ) {
        for (let i = 0; i < DataBtnDropDownOperation.length; i++) {
            if (
                e.target !== DataBtnDropDownOperation[i] &&
                e.target !== DataContentBtnDropDownOperation[i] &&
                e.target !== DataImageBtnDropDownOperation[i]
            ) {
                DataDropDownOperation[i].classList.add("d-none");
            }
        }
    }

    if (BtnDropdownOperationHoliday !== null) {
        for (let j = 0; j < BtnDropdownOperationHoliday.length; j++) {
            if (
                e.target !== MatnDropdownOperationHoliday[j] &&
                e.target !== ImgDropdownOperationHoliday[j] &&
                e.target !== DropdownOperationHoliday[j]
            ) {
                DropdownOperationHoliday[j].classList.add("d-none");

            }
        }
    }
};
export default WindowCheck;
