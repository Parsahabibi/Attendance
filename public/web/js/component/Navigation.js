import { NavIcon, SideBar, BgDark } from "../Elements.js";

if (NavIcon !== null) {
    NavIcon.addEventListener("click", () => {
        SideBar.style.right = "0";
        BgDark.style.visibility = "visible";
    });
}
