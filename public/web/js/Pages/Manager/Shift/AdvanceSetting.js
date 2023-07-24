import {
    BtnAdvancedSetting,
    ContentAdvancedSetting,
} from "../../../Elements.js";

if (BtnAdvancedSetting !== null) {
    BtnAdvancedSetting.addEventListener("click", () => {
        ContentAdvancedSetting.classList.remove("d-none");
    });
}
