import {
    CloseModal,
    CloseModalManagerLocation,
    CloseModalManagerPersonel,
    CloseModalManagerProject,
    CloseModalManagerRequest,
    CloseModalManagerShift,
    ContainerModal,
    ContainerModalLocation,
    ContainerModalPersonel,
    ContainerModalProject,
    ContainerModalRequest,
    ContainerModalShift,
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



if (
    CloseModalManagerRequest !== undefined &&
    CloseModalManagerRequest !== null &&
    ContainerModalRequest !== undefined &&
    ContainerModalRequest !== null
) {
    for (let i = 0; i < CloseModalManagerRequest.length; i++) {
        CloseModalManagerRequest[i].onclick = () => {
            ContainerModalRequest.classList.add("hide");
        };
    }
}


if (
    CloseModalManagerShift !== undefined &&
    CloseModalManagerShift !== null &&
    ContainerModalShift !== undefined &&
    ContainerModalShift !== null
) {
    for (let i = 0; i < CloseModalManagerShift.length; i++) {
        CloseModalManagerShift[i].onclick = () => {
            ContainerModalShift.classList.add("hide");
        };
    }
}