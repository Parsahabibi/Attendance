import { NavIcon ,SideBar,BgDark} from "../Elements.js";

NavIcon.addEventListener("click", () => {
    SideBar.style.right = "0";
    BgDark.style.visibility = "visible";
});
