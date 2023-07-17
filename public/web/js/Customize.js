import { Inputs } from "./Elements.js";

(function InputsCustomize() {
    for (let i = 0; i < Inputs.length; i++) {
        Inputs[i].setAttribute('autocomplete','off')
    }
})();
