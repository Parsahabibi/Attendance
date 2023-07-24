import {
    CloseModal,
    CloseModalManagerLocation,
    CloseModalManagerPersonel,
    CloseModalManagerProject,
    CloseModalManagerRequest,
    CloseModalManagerShift,
    CloseModalRequestManager,
    ContainerModal,
    ContainerModalLocation,
    ContainerModalPersonel,
    ContainerModalProject,
    ContainerModalRequest,
    ContainerModalRequestManager,
    ContainerModalShift,
} from "../Elements.js";

if (CloseModal !== undefined && CloseModal !== null) {
    for (let i = 0; i < CloseModal.length; i++) {
        CloseModal[i].addEventListener("click", () => {
            ContainerModal.classList.add("hide-modal");
            document.querySelector(".side-bar").style.zIndex = "100"; //Test
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
            document.querySelector(".side-bar").style.zIndex = "100"; //Test
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
            document.querySelector(".side-bar").style.zIndex = "100"; //Test
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
            document.querySelector(".side-bar").style.zIndex = "100"; //Test
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
            document.querySelector(".side-bar").style.zIndex = "100"; //Test
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
            document.querySelector(".side-bar").style.zIndex = "100"; //Test
        };
    }
}

if (
    CloseModalRequestManager !== undefined &&
    CloseModalRequestManager !== null &&
    ContainerModalRequestManager !== undefined &&
    ContainerModalRequestManager !== null
) {
    for (let i = 0; i < CloseModalRequestManager.length; i++) {
        CloseModalRequestManager[i].onclick = () => {
            ContainerModalRequestManager.classList.add("hide");
            document.querySelector(".side-bar").style.zIndex = "100"; //Test
        };
    }
}
