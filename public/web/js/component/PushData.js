import {
    BodyTable,
    BtnSearch,
    BtnSearchPersonel,
    BtnSearchProject,
    CompanyCity,
    ComponyName,
    ContainerModalLocation,
    ContainerModalPersonel,
    DataBtnPushRequest,
    DataValueRequest,
    InputSerch,
    InputSerchProject,
    OkDeleteRowLocation,
    OkDeleteRowPersonel,
    OkDeleteRowProject,
    TablePersonel,
    TableProject,
    TableRequest,
} from "../Elements.js";
import { ValidateForm } from "../Validations/Forms.js";
import CheckEmptyTable from "../Validations/Table.js";
import WindowCheck from "./Window.js";

const GenereateDeleteRow = (BtnDelete, Modal, OkDelete, RowTable) => {
    for (let i = 0; i < BtnDelete.length; i++) {
        BtnDelete[i].onclick = () => {
            Modal.classList.remove("hide");
            OkDelete.onclick = () => {
                Modal.classList.remove("show");
                Modal.classList.add("hide");
                RowTable[i].remove();
            };
        };
    }
};
try {

    // Request
    (function Request() {
        const GenerateBtnDropDownRequest = () => {
            setTimeout(() => {
                let BtnDropDownRequest = document.querySelectorAll(
                    "[data-btn-dropdown-operation-request]"
                );
                let DropDownRequest = document.querySelectorAll(
                    "[data-dropdown-operation-request]"
                );
                let TextDropDownRequest = document.querySelectorAll(
                    "[data-btn-dropdown-operation-request]>p"
                );
                let ImgDropDownRequest = document.querySelectorAll(
                    "[data-btn-dropdown-operation-request]>img"
                );
                for (let i = 0; i < BtnDropDownRequest.length; i++) {
                    BtnDropDownRequest[i].addEventListener("click", () => {
                        DropDownRequest[i].classList.remove("d-none");
                    });
                }
                window.onclick = (e) => {
                    for (let i = 0; i < BtnDropDownRequest.length; i++) {
                        if (
                            e.target !== BtnDropDownRequest[i] &&
                            e.target !== TextDropDownRequest[i] &&
                            e.target !== ImgDropDownRequest[i]
                        ) {
                            DropDownRequest[i].classList.add("d-none");
                        }
                    }
                    // WindowCheck(e);
                };
                console.log(BtnDropDownRequest);
            }, 500);
        };

        let DataRequest = [];
        const PushRequest = () => {
            for (let i = 0; i < TableRequest.length; i++) {
                TableRequest[i].innerHTML = DataRequest.map(
                    (item) =>
                        `
    <tr class="border-t-gray">
    <td class="my-2 c-gray-200 fs-small pe-5 py-2">${item.Type}</td>
    <td class="my-2 c-gray-200 fs-small pe-5 py-2">${item.DateStart}</td>
    <td class="my-2 c-gray-200 fs-small pe-5 py-2">${item.DateEnd}</td>
    <td class="my-2 c-gray-200 fs-small col-1  c-gray-dark3 px-2 me-5 py-2" data-btn-dropdown-operation="">
        <div class="d-flex btn-data-dropdown" data-btn-dropdown-operation-request>
            <p>
                عملیات

            </p>
            <img src="../images/Frame 134.svg" alt="" class="pe-1">
            <div class="dropdown dropdown-operation d-none" data-dropdown-operation-request>
                <div>ویرایش</div>
                <div delete-row="">حذف</div>
            </div>
        </div>
    </td>
</tr>`
                );
            }
        };

        if (DataBtnPushRequest !== null) {
            DataBtnPushRequest.onclick = (e) => {
                ValidateForm(e);
                if (
                    DataValueRequest[0].value !== "" &&
                    DataValueRequest[1].value !== "" &&
                    DataValueRequest[2].value !== ""
                ) {
                    DataRequest.push({
                        Type: DataValueRequest[0].value,
                        DateStart: DataValueRequest[1].value,
                        DateEnd: DataValueRequest[2].value,
                    });
                    PushRequest();
                    DataValueRequest[1].value = "";
                    DataValueRequest[2].value = "";
                    CheckEmptyTable();
                    GenerateBtnDropDownRequest();
                } else {
                }
            };
        }
    })();
    //***********************************************************************************************************

    // Location
    (function Location() {
        const GenerateBtnDropDownLocation = () => {
            setTimeout(() => {
                BtnDropDown = document.querySelectorAll("[data-dropdown]");
                DropDown = document.querySelectorAll(
                    "[data-dropdown-operation-location]"
                );
                TextDropDown = document.querySelectorAll("[data-dropdown]>p");
                ImgDropDown = document.querySelectorAll("[data-dropdown]>img");
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
                    WindowCheck(e);
                };
            }, 500);
        };
        const GenerateDeleteRowLocation = () => {
            setTimeout(() => {
                let ModalDeleteLocation = document.querySelector(
                    "[modal-delete-location]"
                );
                let DeleteRowLocation = document.querySelectorAll(
                    "[delete-row-location]"
                );
                let RowTableLocation = document.querySelectorAll(
                    "[table-location]>tr"
                );
                GenereateDeleteRow(
                    DeleteRowLocation,
                    ModalDeleteLocation,
                    OkDeleteRowLocation,
                    RowTableLocation
                );
            }, 500);
        };
        const Data = [
            {
                id: "1",
                name: "ناهیرا",
                city: "قزوین",
                location: "قزوین، رستوران آرمان",
            },
            {
                id: "2",
                name: "ناهیرا",
                city: "تهران",
                location: "تهران، رستوران آرمان",
            },
            {
                id: "3",
                name: "ناهیرا",
                city: "شیراز",
                location: "شیراز، رستوران آرمان",
            },
            {
                id: "4",
                name: "ناهیرا",
                city: "مشهد",
                location: "مشهد، رستوران آرمان",
            },
            {
                id: "5",
                name: "ناهیرا",
                city: "شیراز",
                location: "شیراز، رستوران آرمان",
            },
            {
                id: "6",
                name: "ناهیرا",
                city: "شیراز",
                location: "شیراز، رستوران آرمان",
            },
        ];
        if (BodyTable !== null) {
            Data.map(
                (item) =>
                    (BodyTable.innerHTML += `
            <tr class="border-t-gray">
              <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${item.id}</td>
              <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${item.name}</td>
              <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${item.city}</td>
              <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${item.location}</td>
              <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2 data-dropdown"">
                <div class="" data-dropdown>
                 <p> عملیات</p>
                  <img src="../../images/Frame 134.svg" alt="" />
                  <div class="dropdown" data-dropdown-operation-location>
                    <div>ویرایش</div>
                    <div delete-row-location>حذف</div>
                  </div>
                </div>
              </td>
            </tr>
          `)
            );
            GenerateBtnDropDownLocation();
            GenerateDeleteRowLocation();
        }
        if (BtnSearch !== null) {
            BtnSearch.addEventListener("click", (e) => {
                e.preventDefault();
                BodyTable.innerHTML = "";
                let name, city;
                for (let i = 0; i < Data.length; i++) {
                    city = Data[i].city.includes(CompanyCity.value.trim());
                    name = Data[i].name.includes(ComponyName.value.trim());

                    // console.log(name,city);
                    if (name === true && city === true) {
                        const array = Data.filter((item) => {
                            return (
                                item.city.includes(CompanyCity.value.trim()) &&
                                item.name.includes(ComponyName.value.trim())
                            );
                        });
                        // console.log(array);
                        BodyTable.innerHTML = "";

                        //   console.log(name, city);
                        array.map((item) => {
                            BodyTable.innerHTML += `
                  <tr class="border-t-gray">
                    <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${item.id}</td>
                    <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${item.name}</td>
                    <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${item.city}</td>
                    <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${item.location}</td>
                    <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2 data-dropdown">
                      <div class="" data-dropdown>
                        عملیات
                        <img src="../../images/Frame 134.svg" alt="" />
                        <div class="dropdown"data-dropdown-operation-location>
                          <div>ویرایش</div>
                          <div delete-row-location>حذف</div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  `;
                        });

                        break;
                    } else if (name === true || city === true) {
                        BodyTable.innerHTML += `
                  <tr class="border-t-gray">
                    <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${Data[i].id}</td>
                    <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${Data[i].name}</td>
                    <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${Data[i].city}</td>
                    <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${Data[i].location}</td>
          
                    <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2 data-dropdown">
                      <div class="" data-dropdown>
                        عملیات
                        <img src="../../images/Frame 134.svg" alt="" />
                        <div class="dropdown"data-dropdown-operation-location>
                          <div>ویرایش</div>
                          <div delete-row-location>حذف</div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  `;
                        // break;
                    }
                    // else if (name === false || city === false) {
                    //     BodyTable.innerHTML = "";
                    //     CheckEmptyTable();
                    // }
                }
                CheckEmptyTable();
                GenerateBtnDropDownLocation();
                GenerateDeleteRowLocation();
            });
        }
    })();
    //***********************************************************************************************************

    // Personel
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
            <img src="../../images/Frame 134.svg" alt="" />
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
            <img src="../../images/Frame 134.svg" alt="" />
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
            });
        }
    })();
    //***********************************************************************************************************

    // project
    (function project() {
        const GenerateBtnDropDownOperationProject = () => {
            setTimeout(() => {
                BtnDropDown = document.querySelectorAll(
                    "[data-btn-dropdown-operation-project]"
                );
                DropDown = document.querySelectorAll(
                    "[data-dropdown-operation-project]"
                );
                TextDropDown = document.querySelectorAll(
                    "[data-btn-dropdown-operation-project]>p"
                );
                ImgDropDown = document.querySelectorAll(
                    "[data-btn-dropdown-operation-project]>img"
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
                    for (let i = 0; i < BtnDropDownStatus.length; i++) {
                        if (
                            e.target !== BtnDropDownStatus[i] &&
                            e.target !== TextDropDownStatus[i] &&
                            e.target !== ImgDropDownStatus[i]
                        ) {
                            DropDownStatus[i].style.display = "none";
                        }
                    }
                    WindowCheck(e);
                };
            }, 500);
        };
        const GenerateBtnDropDownStatusProject = () => {
            setTimeout(() => {
                BtnDropDownStatus = document.querySelectorAll(
                    "[data-btn-dropdown-state-project]"
                );
                DropDownStatus = document.querySelectorAll(
                    "[data-dropdown-state-project]"
                );
                TextDropDownStatus = document.querySelectorAll(
                    "[data-btn-dropdown-state-project]>p"
                );
                ImgDropDownStatus = document.querySelectorAll(
                    "[data-btn-dropdown-state-project]>img"
                );
                for (let i = 0; i < BtnDropDownStatus.length; i++) {
                    BtnDropDownStatus[i].addEventListener("click", () => {
                        DropDownStatus[i].style.display = "inline";
                    });
                }
            }, 500);
        };
        const GenerateDeleteRowProject = () => {
            setTimeout(() => {
                let ModalDeleteProject = document.querySelector(
                    "[modal-delete-project]"
                );
                let DeleteRowProject = document.querySelectorAll(
                    "[delete-row-project]"
                );
                let RowTableProject =
                    document.querySelectorAll("[table-project]>tr");
                GenereateDeleteRow(
                    DeleteRowProject,
                    ModalDeleteProject,
                    OkDeleteRowProject,
                    RowTableProject
                );
            }, 500);
        };
        const DataProject = [
            {
                id: "1",
                name: "نیار",
                company: "پژمان",
            },
            {
                id: "2",
                name: "فینتو",
                company: "امیررضا",
            },
            {
                id: "3",
                name: "آهنا",
                company: "پارسا",
            },
            {
                id: "4",
                name: "آقای ملک",
                company: "پژمان",
            },
        ];
        if (TableProject !== null) {
            DataProject.map(
                (item) =>
                    (TableProject.innerHTML += `
                <tr class="border-t-gray">
                <td class=" fs-small-100 text-end c-gray-dark3 px-2">${item.id}</td>
                <td class=" fs-small-100 c-gray-dark3 px-2">${item.name}</td>
                <td class=" fs-small-100 text-end c-gray-dark3 px-2">${item.company}</td>
                <td class=" fs-small-100 text-center data-dropdown c-gray-dark3 px-2">
                  <div class="" data-dropdown data-btn-dropdown-operation-project>
                    عملیات
                    <img src="../../images/Frame 134.svg" alt="" />
                    <div class="dropdown dropdown-operation"data-dropdown-operation-project>
                      <div>ویرایش</div>
                      <div delete-row-project>حذف</div>
                    </div>
                  </div>
                </td>
                <td class="fs-small-100 text-center data-dropdown c-gray-dark3 px-2">
                  <div class="text-nowrap" data-dropdown-state data-btn-dropdown-state-project>
                    <p>وضعیت</p>
                    <img src="../../images/Frame 134.svg" alt="" />
                    <div class="dropdown dropdown-state" data-dropdown-state-project>
                      <div item-dropdown-state>فعال</div>
                      <div delete-row2 class="text-nowrap" item-dropdown-state>غیر فعال</div>
                    </div>
                  </div>
                </td>
            </tr>
               
    
            `)
            );
            GenerateBtnDropDownOperationProject();
            GenerateBtnDropDownStatusProject();
            GenerateDeleteRowProject();
        }
        if (BtnSearchProject !== null) {
            BtnSearchProject.addEventListener("click", (e) => {
                e.preventDefault();
                let SearchProject = [];
                TableProject.innerHTML = "";
                DataProject.forEach((item) => {
                    if (item.name.includes(InputSerchProject.value)) {
                        SearchProject.push(item);
                    }
                });

                SearchProject.map((item) => {
                    TableProject.innerHTML += `
                <tr class="border-t-gray">
                <td class=" fs-small-100 text-end c-gray-dark3 px-2">${item.id}</td>
                <td class=" fs-small-100 c-gray-dark3 px-2">${item.name}</td>
                <td class=" fs-small-100 text-end c-gray-dark3 px-2">${item.company}</td>
                <td class=" fs-small-100 text-center data-dropdown c-gray-dark3 px-2">
                  <div class="" data-dropdown data-btn-dropdown-operation-project>
                    عملیات
                    <img src="../../images/Frame 134.svg" alt="" />
                    <div class="dropdown dropdown-operation" data-dropdown-operation-project>
                      <div>ویرایش</div>
                      <div delete-row-project>حذف</div>
                    </div>
                  </div>
                </td>
                <td class="fs-small-100 text-center data-dropdown c-gray-dark3 px-2">
                  <div class="text-nowrap" data-btn-dropdown-state-project>
                    <p>وضعیت</p>
                    <img src="../../images/Frame 134.svg" alt="" />
                    <div class="dropdown dropdown-state" data-dropdown-state-project>
                      <div item-dropdown-state>فعال</div>
                      <div delete-row2 class="text-nowrap" item-dropdown-state>غیر فعال</div>
                    </div>
                  </div>
                </td>
            </tr>
               
    `;
                });
                CheckEmptyTable();
                GenerateBtnDropDownOperationProject();
                GenerateBtnDropDownStatusProject();
                GenerateDeleteRowProject();
            });
        }
    })();
    //***********************************************************************************************************

} catch (error) {
    console.log(error)
}
export {GenereateDeleteRow};