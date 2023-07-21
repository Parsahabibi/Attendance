import { BtnShowModal, CloseModal, ContainerModal } from "../Elements.js";

if (BtnShowModal !== undefined && BtnShowModal !== null) {
    BtnShowModal.addEventListener("click", () => {
        ContainerModal.classList.remove("hide-modal");
    });
}

if (CloseModal !== undefined && CloseModal !== null) {
    for (let i = 0; i < CloseModal.length; i++) {
        CloseModal[i].addEventListener("click", () => {
            ContainerModal.classList.add("hide-modal");
        });
    }
}
