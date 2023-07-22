import { ValidateForm } from "../../../Validations/Forms.js";
import WindowCheck from "../../../component/Window.js";

jalaliDatepicker.startWatch();
const PasswordSigninInformation = document.querySelectorAll(
  ".password-signin-information"
); const ErrPasswordNewPersonel = document.querySelectorAll(
  ".err-password-new-personel"
);const ErrFromNewPersonel = document.querySelectorAll(
  ".err-form-new-personel"
);
window.onclick=(e)=>{
    WindowCheck(e);
}
document.querySelector('#btn-form-new-personel').addEventListener('click', (e)=>{
    ValidateForm(e);
    document
  
    for (let i = 0; i < document.formNewPersonel.input2.length; i++) {
      for (let i = 0; i < PasswordSigninInformation.length; i++) {
        if (
          document.querySelector(".password-signin-information1").value !==
          document.querySelector(".password-signin-information2").value
        ) {
          ErrPasswordNewPersonel[0].innerHTML = "رمز عبور یکسان نیست";
          ErrPasswordNewPersonel[1].innerHTML = "رمز عبور یکسان نیست";
          e.preventDefault();
        } else {
          ErrPasswordNewPersonel[0].innerHTML = "";
          ErrPasswordNewPersonel[1].innerHTML = "";
        }
      }
      if (document.formNewPersonel.input2[i].value === "") {
        ErrFromNewPersonel[i].innerHTML = "لطفا ورودی را پر کنید";
        e.preventDefault();
      } else {
        ErrFromNewPersonel[i].innerHTML = "";
      }
    }

})
