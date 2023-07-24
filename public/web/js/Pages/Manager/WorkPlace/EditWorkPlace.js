import {
    NewCityWorkplace,
    NewLocationWorkplace,
    NewNameWorkplace,
} from "../../../Elements.js";
import WindowCheck from "../../../component/Window.js";

window.onload = () => {
    NewNameWorkplace.value = localStorage.getItem("ItemName");
    NewCityWorkplace.value = localStorage.getItem("ItemCity");
    NewLocationWorkplace.value = localStorage.getItem("ItemLocation");
};
window.onclick=(e)=>{
    WindowCheck(e);
}