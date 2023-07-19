import {
    DataBtnDropDownOperation,
    DataContentBtnDropDownOperation,
    DataDropDownOperation,
    DataDropdownDiv,
    DataDropdownInput,
    DataImageBtnDropDownOperation,
    DropdownItemSidebar,
    ItemSidebar,
    ItemSidebarImgDark,
    ItemSidebarImgLight,
} from "../Elements.js";

window.onclick = (e) => {
    for (let i = 0; i < ItemSidebar.length; i++) {
        if (
            e.target !== ItemSidebarImgLight[i] &&
            e.target !== ItemSidebarImgDark[i] &&
            e.target !== ItemSidebar[i]
        ) {
            DropdownItemSidebar[i].style.display = "none";
        }
    }
    for (let i = 0; i < DataDropdownInput.length; i++) {
        if (e.target !== DataDropdownInput[i]) {
            DataDropdownDiv[i].classList.add("d-none");
        }
    }

    for (let i = 0; i < DataBtnDropDownOperation.length; i++) {
        if (
            e.target !== DataBtnDropDownOperation[i] &&
            e.target !== DataContentBtnDropDownOperation[i] &&
            e.target !== DataImageBtnDropDownOperation[i]
        ) {
            DataDropDownOperation[i].classList.add("d-none");
        }
    }
};

