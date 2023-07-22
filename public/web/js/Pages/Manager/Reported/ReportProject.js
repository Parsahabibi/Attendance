import WindowCheck from "../../../component/Window.js";

const liList = document.querySelectorAll(".li");

for (let i = 0; i < liList.length; i++) {
    liList[i].onclick = () => {
        for (let i = 0; i < liList.length; i++) {
            liList[i].classList.remove("active");
        }
        liList[i].classList.add("active");
    };
}
jalaliDatepicker.startWatch();

window.onclick = (e) => {
    WindowCheck(e);
};
