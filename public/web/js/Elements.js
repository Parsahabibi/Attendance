const NavIcon = document.querySelector(".navigation-icon");
const ItemSidebar = document.querySelectorAll("[item-sidebar]");
const ItemSidebarImgDark = document.querySelectorAll(".img-dark-item-sidebar");
const ItemSidebarImgLight = document.querySelectorAll(
    ".img-light-item-sidebar"
);
const SideBar = document.querySelector(".side-bar");
const BgDark = document.querySelector(".bg-dark");
const DateShamsi = document.getElementById("date-shamsi");
const TimeShamsi = document.getElementById("time-shamsi");
const DropdownItemSidebar = document.querySelectorAll(".dropdown-item-sidebar");
const DataCheckEmptyTable = document.querySelectorAll(
    "[data-check-empty-table]"
);
const DataEmpltyTableMassage = document.querySelectorAll(
    "[data-emplty-table-massage]"
);
const DataInputValidation = document.querySelectorAll(
    "[data-input-validation]"
);
const ErrFromNewPersonel = document.querySelectorAll(".err-form-new-personel");
const Inputs = document.querySelectorAll("input");
const ErrFormSignin = document.querySelector(".err-form-signin");
const MatnFormSignin = document.querySelector(".err-form-signin>p");
const ErrEmailPhone = document.querySelector("#err-input-email_phone");
const BtnLogin = document.querySelector("#btn-login");
const CloseErrFormSignIn = document.querySelector("#close-err-form-signin");

export {
    NavIcon,
    ItemSidebar,
    SideBar,
    BgDark,
    DateShamsi,
    TimeShamsi,
    DropdownItemSidebar,
    ItemSidebarImgDark,
    ItemSidebarImgLight,
    DataCheckEmptyTable,
    DataEmpltyTableMassage,
    ErrFromNewPersonel,
    DataInputValidation,
    Inputs,
    ErrFormSignin,
    MatnFormSignin,
    ErrEmailPhone,
    BtnLogin,
    CloseErrFormSignIn,
};
