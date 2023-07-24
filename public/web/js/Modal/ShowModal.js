import { BtnShowModal, ContainerModal } from "../Elements.js";

if (BtnShowModal !== undefined && BtnShowModal !== null) {
    BtnShowModal.addEventListener("click", () => {
        ContainerModal.classList.remove('hide-modal');
        ContainerModal.classList.remove('hide');
        document.querySelector('.side-bar').style.zIndex='10';

    });
}
