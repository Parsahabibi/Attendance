import { DataInputValidation, ErrFromNewPersonel } from "../Elements.js";

const ValidateForm = (e) => {
    for (let j = 0; j < DataInputValidation.length; j++) {
        if (DataInputValidation[j].value === "") {
            ErrFromNewPersonel[j].innerHTML = "لطفا ورودی را پر کنید";
            e.preventDefault();
        } else {
            ErrFromNewPersonel[j].innerHTML = "";
        }
    }
};
export { ValidateForm };
