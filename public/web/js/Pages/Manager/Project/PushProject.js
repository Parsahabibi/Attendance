import {
    BtnSearchProject,
    InputSerchProject,
    OkDeleteRowProject,
    TableProject,
} from "../../../Elements.js";
import CheckEmptyTable from "../../../Validations/Table.js";
import { GenereateDeleteRow } from "../../../component/PushData.js";
import WindowCheck from "../../../component/Window.js";

try {
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
            <td class=" fs-small-100 text-end c-gray-dark3 px-2 py-4">${item.id}</td>
            <td class=" fs-small-100 c-gray-dark3 px-2 py-4">${item.name}</td>
            <td class=" fs-small-100 text-end c-gray-dark3 px-2 py-4">${item.company}</td>
            <td class=" fs-small-100 text-center data-dropdown c-gray-dark3 px-2">
              <div class="" data-dropdown data-btn-dropdown-operation-project>
              <p class="ps-1">عملیات</p>

                <img src="../../images/Frame 134.svg" alt="" />
                <div class="dropdown dropdown-operation"data-dropdown-operation-project>
                  <div>ویرایش</div>
                  <div delete-row-project>حذف</div>
                </div>
              </div>
            </td>
            <td class="fs-small-100 text-center data-dropdown c-gray-dark3 px-2">
              <div class="text-nowrap" data-dropdown-state data-btn-dropdown-state-project>
                <p class="ps-1">وضعیت</p>
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
            <td class=" fs-small-100 text-end c-gray-dark3 px-2 py-4">${item.id}</td>
            <td class=" fs-small-100 c-gray-dark3 px-2 py-4">${item.name}</td>
            <td class=" fs-small-100 text-end c-gray-dark3 px-2 py-4">${item.company}</td>
            <td class=" fs-small-100 text-center data-dropdown c-gray-dark3 px-2">
              <div class="" data-dropdown data-btn-dropdown-operation-project>
                <p class="ps-1">عملیات</p>
                <img src="../../images/Frame 134.svg" alt="" />
                <div class="dropdown dropdown-operation" data-dropdown-operation-project>
                  <div>ویرایش</div>
                  <div delete-row-project>حذف</div>
                </div>
              </div>
            </td>
            <td class="fs-small-100 text-center data-dropdown c-gray-dark3 px-2">
              <div class="text-nowrap" data-btn-dropdown-state-project>
                <p class="ps-1">وضعیت</p>
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
} catch (error) {}
