import { BgDark,SideBar } from "../Elements.js";
BgDark.addEventListener("click", () => {
    SideBar.style.right='-100%';
    BgDark.style.visibility = "hidden";
});

