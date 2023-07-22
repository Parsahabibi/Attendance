import {
    DataBtnPushRequest,
    DataValueRequest,
    OkBtnRowRequest,
    TableRequest,
} from "../../../Elements.js";
import { ValidateForm } from "../../../Validations/Forms.js";
import CheckEmptyTable from "../../../Validations/Table.js";
import { GenereateDeleteRow } from "../../../component/PushData.js";
import WindowCheck from "../../../component/Window.js";
try {
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
        
        const GenerateDeleteRowRequest = () => {
            setTimeout(() => {
                let ModalDeleteRequest = document.querySelector(
                    "[modal-delete-request-employee]"
                );
                let DeleteRowRequest = document.querySelectorAll(
                    "[delete-row-Request]"
                );
                let RowTableRequest =
                    document.querySelectorAll("[table-Request]>tr");
                GenereateDeleteRow(
                    DeleteRowRequest,
                    ModalDeleteRequest,
                    OkBtnRowRequest,
                    RowTableRequest
                );
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
                <div delete-row-Request>حذف</div>
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
                    GenerateDeleteRowRequest();
                } else {
                }
            };
        }
    })();
} catch (error) {}
