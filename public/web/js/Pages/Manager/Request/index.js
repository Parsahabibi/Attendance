import WindowCheck from "../../../component/Window.js";

jalaliDatepicker.startWatch();
const LiReported = document.querySelectorAll(".li-reported");
for (let i = 0; i < LiReported.length; i++) {
    LiReported[i].onclick = () => {
        for (let i = 0; i < LiReported.length; i++) {
            LiReported[i].classList.remove("active-li");
        }
        LiReported[i].classList.add("active-li");
    };
}

window.onclick = (e) => {
    WindowCheck(e);
};
