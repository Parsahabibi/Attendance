import {
    BtnSearchPersonel,
    InputSerch,
    OkDeleteRowPersonel,
    TablePersonel,
} from "../../../Elements.js";
import CheckEmptyTable from "../../../Validations/Table.js";
import { GenereateDeleteRow } from "../../../component/PushData.js";
import WindowCheck from "../../../component/Window.js";
try {
    (function Personel() {
        const GenerateBtnDropDownOperationPersonel = () => {
            setTimeout(() => {
                BtnDropDown = document.querySelectorAll(
                    "[data-btn-dropdown-operation-personel]"
                );
                DropDown = document.querySelectorAll(
                    "[data-dropdown-operation-personel]"
                );
                TextDropDown = document.querySelectorAll(
                    "[data-btn-dropdown-operation-personel]>p"
                );
                ImgDropDown = document.querySelectorAll(
                    "[data-btn-dropdown-operation-personel]>img"
                );
                for (let i = 0; i < BtnDropDown.length; i++) {
                    BtnDropDown[i].addEventListener("click", () => {
                        DropDown[i].style.display = "inline";
                    });
                }
                window.onclick = (e) => {
                    for (let i = 0; i < BtnDropDown.length; i++) {
                        if (
                            e.target !== BtnDropDown[i] &&
                            e.target !== TextDropDown[i] &&
                            e.target !== ImgDropDown[i]
                        ) {
                            DropDown[i].style.display = "none";
                        }
                    }
                    for (let i = 0; i < BtnDropDownState.length; i++) {
                        if (
                            e.target !== BtnDropDownState[i] &&
                            e.target !== TextDropDownState[i] &&
                            e.target !== ImgDropDownState[i]
                        ) {
                            DropDownState[i].style.display = "none";
                        }
                    }
                    WindowCheck(e);
                };
            }, 500);
        };
        const GenerateBtnDropDownStatePersonel = () => {
            setTimeout(() => {
                BtnDropDownState = document.querySelectorAll(
                    "[data-btn-dropdown-state-personel]"
                );
                DropDownState = document.querySelectorAll(
                    "[data-dropdown-state-personel]"
                );
                TextDropDownState = document.querySelectorAll(
                    "[data-btn-dropdown-state-personel]>p"
                );
                ImgDropDownState = document.querySelectorAll(
                    "[data-btn-dropdown-state-personel]>img"
                );
                for (let i = 0; i < BtnDropDownState.length; i++) {
                    BtnDropDownState[i].addEventListener("click", () => {
                        DropDownState[i].style.display = "inline";
                    });
                }
            }, 500);
        };
        const GenerateDeleteRowPersonel = () => {
            setTimeout(() => {
                let ModalDeletePersonel = document.querySelector(
                    "[modal-delete-Personel]"
                );
                let DeleteRowPersonel = document.querySelectorAll(
                    "[delete-row-Personel]"
                );
                let RowTablePersonel = document.querySelectorAll(
                    "[table-Personel]>tr"
                );
                GenereateDeleteRow(
                    DeleteRowPersonel,
                    ModalDeletePersonel,
                    OkDeleteRowPersonel,
                    RowTablePersonel
                );
            }, 500);
        };
        const GeneratePutStatePersonel = () => {
            setTimeout(() => {
                let ItemDataBtnDropdownStatePersonel = document.querySelectorAll(
                    "[data-btn-dropdown-state-personel]>div"
                );
                let DataBtnDropdownStatePersonel = document.querySelectorAll(
                    "[data-btn-dropdown-state-personel]>p"
                );
                for (let i = 0; i < ItemDataBtnDropdownStatePersonel.length; i++) {
                    ItemDataBtnDropdownStatePersonel[i].onclick=(e)=>{
                        // console.log(e.target.innerHTML)
                        DataBtnDropdownStatePersonel[i].innerHTML=e.target.innerHTML;
                    }
                }
            }, 500);
        };
        const DataPersonel = [
            {
                id: "۱",
                img: "Frame 127.svg",
                code: "۱۲۳۴۵۶۷۸۹",
                name: "امیررضا",
                family: "کاشی پزها",
                shift: "ساعتی",
            },
            {
                id: "۲",
                img: "Frame 127.svg",
                code: "۱۲۳۴۵۶۷۸۹",
                name: "پارسا",
                family: "حبیبی",
                shift: "ساعتی",
            },
            {
                id: "۳",
                img: "Frame 127.svg",
                code: "۱۲۳۴۵۶۷۸۹",
                name: "پژمان",
                family: "لطیفی",
                shift: "ساعتی",
            },
            {
                id: "۴",
                img: "Frame 127.svg",
                code: "۱۲۳۴۵۶۷۸۹",
                name: "امین",
                family: "غلامی",
                shift: "ساعتی",
            },
            {
                id: "۵",
                img: "Frame 127.svg",
                code: "۱۲۳۴۵۶۷۸۹",
                name: "هانیه",
                family: "ضرغامی",
                shift: "ساعتی",
            },
        ];
        if (TablePersonel !== null) {
            DataPersonel.map(
                (item) =>
                    (TablePersonel.innerHTML += `
    <tr class="border-t-gray">
    <td class="c-gray-dark3 py-3 px-2 table-personel">
        <div class="d-flex align-items-center">
            <p class="ps-5">${item.id}</p>
        <img src="../../images/${item.img}" alt="" />
        </div>

    </td>
    <td class="fs-small-100 text-center c-gray-dark3 px-2">${item.code}</td>
    <td class="fs-small-100 text-center c-gray-dark3 px-2">${item.name}</td>
    <td class="fs-small-100 text-center c-gray-dark3 px-2">${item.family}</td>
    <td class="fs-small-100 text-center c-gray-dark3 px-2">${item.shift}</td>
    <td class="fs-small-100 text-center data-dropdown c-gray-dark3 px-2">
      <div class="" data-btn-dropdown-operation-personel>
        <p>عملیات</p>
        <img src="../../images/Frame 134.svg" alt="" />
        <div class="dropdown dropdown-operation" data-dropdown-operation-personel>
          <div>ویرایش</div>
          <div delete-row-Personel >حذف</div>
        </div>
      </div>
    </td>
    <td class="fs-small-100 text-center data-dropdown c-gray-dark3 px-2">
      <div class="text-nowrap" data-btn-dropdown-state-personel>
        <p>وضعیت</p>
        <img src="../../images/Frame 134.svg" alt=""  style="width:18px"/>
        <div class="dropdown dropdown-state"data-dropdown-state-personel>
          <div item-dropdown-state>فعال</div>
          <div delete-row2 class="text-nowrap" item-dropdown-state>غیر فعال</div>
        </div>
      </div>
    </td>
</tr>
           

        `)
            );
            GenerateBtnDropDownOperationPersonel();
            GenerateBtnDropDownStatePersonel();
            GenerateDeleteRowPersonel();
            GeneratePutStatePersonel();
        }
        let SearchPersonel = [];
        if (BtnSearchPersonel !== null && TablePersonel !== null) {
            BtnSearchPersonel.addEventListener("click", (e) => {
                e.preventDefault();
                let SearchPersonel = [];
                TablePersonel.innerHTML = "";
                DataPersonel.forEach((item) => {
                    if (item.name.includes(InputSerch.value)) {
                        SearchPersonel.push(item);
                    }
                });
                SearchPersonel.map((item) => {
                    TablePersonel.innerHTML += `
    <tr class="border-t-gray">
    <td class="c-gray-dark3 py-3 px-2 table-personel">
        <div class="d-flex align-items-center">
            <p class="ps-5">${item.id}</p>
        <img src="../../images/${item.img}" alt="" />
        </div>

    </td>
    <td class="fs-small-100 text-center c-gray-dark3 px-2">${item.code}</td>
    <td class="fs-small-100 text-center c-gray-dark3 px-2">${item.name}</td>
    <td class="fs-small-100 text-center c-gray-dark3 px-2">${item.family}</td>
    <td class="fs-small-100 text-center c-gray-dark3 px-2">${item.shift}</td>
    <td class="fs-small-100 text-center data-dropdown c-gray-dark3 px-2">
      <div class="" data-dropdown data-btn-dropdown-operation-personel>
        <p>عملیات</p>
        <img src="../../images/Frame 134.svg" alt="" />
        <div class="dropdown dropdown-operation" data-dropdown-operation-personel>
          <div>ویرایش</div>
          <div delete-row-Personel>حذف</div>
        </div>
      </div>
    </td>
    <td class="fs-small-100 text-center data-dropdown c-gray-dark3 px-2">
      <div class="text-nowrap" data-btn-dropdown-state-personel>
        <p>وضعیت</p>
        <img src="../../images/Frame 134.svg" alt="" style="width:18px" />
        <div class="dropdown dropdown-state"data-dropdown-state-personel>
          <div item-dropdown-state>فعال</div>
          <div delete-row2 class="text-nowrap" item-dropdown-state>غیر فعال</div>
        </div>
      </div>
    </td>
</tr>
           
`;
                });
                CheckEmptyTable();
                GenerateBtnDropDownOperationPersonel();
                GenerateBtnDropDownStatePersonel();
                GenerateDeleteRowPersonel();
            GeneratePutStatePersonel();

            });
        }
    })();
} catch (error) {}
