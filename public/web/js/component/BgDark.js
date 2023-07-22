import { BgDark, SideBar } from "../Elements.js";
if (BgDark !== null) {
    BgDark.addEventListener("click", () => {
        SideBar.style.right = "-100%";
        BgDark.style.visibility = "hidden";
    });
}
