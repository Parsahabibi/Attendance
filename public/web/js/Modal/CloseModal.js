import { CloseModal, CloseModalManagerLocation, ContainerModal, ContainerModalLocation } from "../Elements.js";

if (CloseModal !== undefined && CloseModal !== null) {
    for (let i = 0; i < CloseModal.length; i++) {
        CloseModal[i].addEventListener("click", () => {
            ContainerModal.classList.add("hide-modal");
        });
    }
}

if (
    CloseModalManagerLocation !== undefined &&
    CloseModalManagerLocation !== null&&
    ContainerModalLocation !== undefined &&
    ContainerModalLocation !== null
) {
    for (let i = 0; i < CloseModalManagerLocation.length; i++) {
        CloseModalManagerLocation[i].addEventListener("click", () => {
            ContainerModalLocation.classList.remove('hide');
        });
    }
}
