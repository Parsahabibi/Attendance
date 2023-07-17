<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    @include('web.layouts.head-tag')
    @yield('head-tag')
</head>

<body dir="rtl">
    <div class="bg-dark"></div>
    @yield('header')
    @yield('sidebar')

    <div class="sign-up-container bg-white d-flex flex-column align-items-center pb-4 col-12 h-100vh col-md-5 col-lg-4">
        <div class="d-flex justify-content-between p-3 col-12">
            <h3 class="fs-5 c-gray-800">ورود به پنل فینتو</h3>
            <img src="{{ asset('images/Frame 31.svg') }}" alt="" style="width: 8px" />
        </div>
        <div class="border-t-gray p-4 col-12">
            <form name="Login" action="">
                <div class="col-12 d-flex flex-column mb-3">
                    <label for="" class="mb-2 c-gray-900">
                        موبایل یا ایمیل
                        <span class="c-pink">*</span>
                    </label>
                    <input type="text" name="input1" class="bg-input rounded-8 email-input py-md-2"
                        onblur="ValidateEmail(document.Login.input1)" />
                    <p id="err-input-email_phone" class="err-input pt-1"></p>
                </div>
                <div class="col-12 d-flex flex-column mb-3">
                    <label for="" class="mb-2 c-gray-900">
                        رمز عبور
                        <span class="c-pink">*</span>
                    </label>
                    <input type="password" name="input2" class="bg-input rounded-8 py-md-2" />
                </div>
                <button class="bg-orange py-2 col-12 c-white rounded-8 mt-2" id="btn-login">
                    <a data-link-login class="d-block w-100">
                        ورود
                    </a>
                </button>
            </form>
        </div>
        <div class="text-center c-orange pb-3 mb-4 border-b-gray col-12">
            <a href="#">
                <p class="mb-2">رمز عبورم را فراموش کرده ام</p>
            </a>
            <a href="{{ url('/Employee/Dashbord') }}">
                <p>بخش ورود پرسنل</p>
            </a>
        </div>
    </div>
    <div class="err-form-signin">
        <p></p>
        <img src="{{ asset('images/Frame 31.svg') }}" alt="" id="close-err-form-signin" style="width: 8px" />
    </div>

    {{-- <script type="module" src="{{asset('web/js/index.js')}}"></script> --}}

    <script>
        const ManagerData = {
            "email": "amirrezakashipazha@gmail.com",
            "phone": "09901898106",
            "password": "1234"
        }
        const btnLogin = document.querySelector('#btn-login');
        const DataLinkLogin = document.querySelector('[data-link-login]');

        function ValidateEmail(inputText) {
            var mailformat = /^\w+([\.-]?\w+)*@[a-z]\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            ErrEmailPhone = document.querySelector("#err-input-email_phone");

            const RegexNumber = /^\+?([0-9]{3})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;

            if (inputText.value.match(mailformat) || inputText.value.match(RegexNumber)) {
                ErrEmailPhone.innerHTML = "";
                return true;
            } else {
                ErrEmailPhone.innerHTML = "لطفا یک ایمیل یا شماره موبایل معتبر وارد کنید";
                return false;
            }
        }
        const ErrFromSignin = document.querySelector(".err-form-signin");
        const MatnFromSignin = document.querySelector(".err-form-signin>p");
        btnLogin.addEventListener("click", (e) => {
            if (document.Login.input1.value.trim() === ManagerData.email || document.Login.input1.value.trim() ===
                ManagerData
                .phone &&
                document.Login.input2.value.trim() === ManagerData.password) {
                DataLinkLogin.setAttribute('href', '{{ url('/Manager/Dashbord') }}')
                return true;
            } else {

                e.preventDefault();
                DataLinkLogin.setAttribute('href', '');
                if (
                    document.Login.input1.value === "" ||
                    document.Login.input2.value === ""
                ) {

                    MatnFromSignin.innerHTML = "لطفا ورودی ها را پرکنید";
                    if (window.innerWidth > 768) {
                        ErrFromSignin.style.animation = " err-card-desktop .5s";
                        setTimeout(() => {
                            ErrFromSignin.style.left = "10px";
                        }, 400);
                    } else {
                        ErrFromSignin.style.animation = " err-card-mobile .3s";
                        setTimeout(() => {
                            ErrFromSignin.style.left = "0";
                        }, 200);
                    }
                } else {
                    ErrFromSignin.style.left = "110%";
                }
                return true;

            }

        });
        document
            .querySelector("#close-err-form-signin")
            .addEventListener("click", () => {
                ErrFromSignin.style.left = "110%";
            });
    </script>
</body>

</html>
