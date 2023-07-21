import {
    BtnLogin,
    CloseErrFormSignIn,
    ErrEmailPhone,
    ErrFormSignin,
    InputEmailLogin,
    InputPasswordLogin,
    MatnFormSignin,
} from "../Elements.js";

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
if (InputEmailLogin !== null) {
    InputEmailLogin.addEventListener("blur", () => {
        ValidateEmail(InputEmailLogin);
    });
}

if (BtnLogin !== null) {
    BtnLogin.addEventListener("click", (e) => {
        e.preventDefault();

        if (
            InputEmailLogin.value === "" ||
            InputPasswordLogin.value === ""
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
}
if (CloseErrFormSignIn !== null) {
    CloseErrFormSignIn.addEventListener("click", () => {
        ErrFormSignin.style.left = "110%";
    });
}
