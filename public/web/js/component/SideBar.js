import {
    ItemSidebar,
    DropdownItemSidebar,
    ItemSidebarImgDark,
    ItemSidebarImgLight,
} from "../Elements.js";

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

window.onclick = (e) => {
    if (DropdownItemSidebar.length !== 0) {
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
};
