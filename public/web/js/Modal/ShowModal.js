import { BtnShowModal, ContainerModal } from "../Elements.js";

if (BtnShowModal !== undefined && BtnShowModal !== null) {
    BtnShowModal.addEventListener("click", () => {
        ContainerModal.classList.remove('hide-modal');
    });
}
