import {
    BtnLogin,
    CloseErrFormSignIn,
    ErrEmailPhone,
    ErrFormSignin,
    MatnFormSignin,
} from "../Elements";

function ValidateEmail(inputText) {
    var mailformat = /^\w+([\.-]?\w+)*@[a-z]\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const RegexNumber = /^\+?([0-9]{3})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
    if (
        inputText.value.match(mailformat) ||
        inputText.value.match(RegexNumber)
    ) {
        ErrEmailPhone.innerHTML = "";
        return true;
    } else {
        ErrEmailPhone.innerHTML =
            "لطفا یک ایمیل یا شماره موبایل معتبر وارد کنید";
        return false;
    }
}
document.Login.input1.addEventListener("blur", () => {
    ValidateEmail(document.Login.input1);
});

BtnLogin.addEventListener("click", (e) => {
    e.preventDefault();

    if (
        document.Login.input1.value === "" ||
        document.Login.input2.value === ""
    ) {
        MatnFormSignin.innerHTML = "لطفا ورودی ها را پرکنید";
        if (window.innerWidth > 768) {
            ErrFormSignin.style.animation = " err-card-desktop .5s";
            setTimeout(() => {
                ErrFormSignin.style.left = "10px";
            }, 400);
        } else {
            ErrFormSignin.style.animation = " err-card-mobile .3s";
            setTimeout(() => {
                ErrFormSignin.style.left = "0";
            }, 200);
        }
    } else {
        ErrFormSignin.style.left = "110%";
    }
});

CloseErrFormSignIn.addEventListener("click", () => {
    ErrFormSignin.style.left = "110%";
});
