import {
    DataInputValidation,
    ErrFromNewPersonel,
} from "../Elements.js";

const ValidateForm = (e) => {
    e.preventDefault();
    for (let j = 0; j < DataInputValidation.length; j++) {
        if (DataInputValidation[j].value === "") {
            ErrFromNewPersonel[j].innerHTML = "لطفا ورودی را پر کنید";
        } else {
            ErrFromNewPersonel[j].innerHTML = "";
        }
    }
};
export { ValidateForm };
