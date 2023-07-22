import {
    ItemSidebar,
    DropdownItemSidebar,
} from "../Elements.js";

if (ItemSidebar !== null) {
    for (let i = 0; i < ItemSidebar.length; i++) {
        ItemSidebar[i].onclick = () => {
            for (let k = 0; k < DropdownItemSidebar.length; k++) {
                DropdownItemSidebar[k].style.display = "none";
            }
            DropdownItemSidebar[i].style.display = "inline";
            for (let j = 0; j < ItemSidebar.length; j++) {
                ItemSidebar[j].classList.remove("active-item-sidebar");
            }
            ItemSidebar[i].classList.add("active-item-sidebar");
        };
    }
}