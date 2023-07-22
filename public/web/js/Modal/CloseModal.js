import {
    CloseModal,
    CloseModalManagerLocation,
    CloseModalManagerPersonel,
    CloseModalManagerProject,
    ContainerModal,
    ContainerModalLocation,
    ContainerModalPersonel,
    ContainerModalProject,
} from "../Elements.js";

if (CloseModal !== undefined && CloseModal !== null) {
    for (let i = 0; i < CloseModal.length; i++) {
        CloseModal[i].addEventListener("click", () => {
            ContainerModal.classList.add("hide-modal");
        });
    }
}

if (
    CloseModalManagerLocation !== undefined &&
    CloseModalManagerLocation !== null &&
    ContainerModalLocation !== undefined &&
    ContainerModalLocation !== null
) {
    for (let i = 0; i < CloseModalManagerLocation.length; i++) {
        CloseModalManagerLocation[i].onclick = () => {
            ContainerModalLocation.classList.add("hide");
        };
    }
}


if (
    CloseModalManagerPersonel !== undefined &&
    CloseModalManagerPersonel !== null &&
    ContainerModalPersonel !== undefined &&
    ContainerModalPersonel !== null
) {
    for (let i = 0; i < CloseModalManagerPersonel.length; i++) {
        CloseModalManagerPersonel[i].onclick = () => {
            ContainerModalPersonel.classList.add("hide");
        };
    }
}



if (
    CloseModalManagerProject !== undefined &&
    CloseModalManagerProject !== null &&
    ContainerModalProject !== undefined &&
    ContainerModalProject !== null
) {
    for (let i = 0; i < CloseModalManagerProject.length; i++) {
        CloseModalManagerProject[i].onclick = () => {
            ContainerModalProject.classList.add("hide");
        };
    }
}
