import {
    BtnPutRequest,
    ContainerModal,
    ContainerModalRequestManager,
    DataCheckEmptyTable,
    OkDeleteRowRequestManager,
    RequesstPersonel,
    RequestDate,
    RequestTimeEnd,
    RequestTimeStart,
    RequestType,
    TableRequestManager,
} from "../../../Elements.js";
import CheckEmptyTable from "../../../Validations/Table.js";
import { GenereateDeleteRow } from "../../../component/PushData.js";
import WindowCheck from "../../../component/Window.js";
import { ValidateForm } from "../../../Validations/Forms.js";

jalaliDatepicker.startWatch();
const LiReported = document.querySelectorAll(".li-reported");
window.onclick=(e)=>{
    WindowCheck(e);

}

for (let i = 0; i < LiReported.length; i++) {
    LiReported[i].onclick = () => {
        for (let i = 0; i < LiReported.length; i++) {
            LiReported[i].classList.remove("active-li");
        }
        LiReported[i].classList.add("active-li");
    };
}
const GenerateBtnDropDownStateRequestManager = () => {
    setTimeout(() => {
        let BtnDropDownState = document.querySelectorAll(
            "[data-btn-dropdown-state-request-manager]"
        );
        let DropDownState = document.querySelectorAll(
            "[data-dropdown-state-request-manager]"
        );
        let TextDropDownState = document.querySelectorAll(
            "[data-btn-dropdown-state-request-manager]>p"
        );
        let ImgDropDownState = document.querySelectorAll(
            "[data-btn-dropdown-state-request-manager]>img"
        );
        for (let i = 0; i < BtnDropDownState.length; i++) {
            BtnDropDownState[i].addEventListener("click", () => {
                DropDownState[i].classList.remove("d-none");
            });
        }

        window.onclick = (e) => {
            for (let i = 0; i < BtnDropDownState.length; i++) {
                if (
                    e.target !== BtnDropDownState[i] &&
                    e.target !== TextDropDownState[i] &&
                    e.target !== ImgDropDownState[i]
                ) {
                    DropDownState[i].classList.add("d-none");
                }
            }
            WindowCheck(e);
        };
    }, 500);
};
const GenerateDeleteRowRequestManager = () => {
    setTimeout(() => {
        let ModalDeleteRequestManager = document.querySelector(
            "[modal-delete-request-manager]"
        );
        let DeleteRowRequestManager = document.querySelectorAll(
            "[delete-row-request-manager]"
        );
        let RowTableRequestManager = document.querySelectorAll(
            "[table-request-manager]>tr"
        );

        GenereateDeleteRow(
            DeleteRowRequestManager,
            ModalDeleteRequestManager,
            OkDeleteRowRequestManager,
            RowTableRequestManager
        );
    }, 500);
};
BtnPutRequest.addEventListener("click", (e) => {

    e.preventDefault();
    if (
        RequesstPersonel.value.trim() !== "" &&
        RequestType.value.trim() !== "" &&
        RequestTimeStart.value.trim() !== "" &&
        RequestTimeEnd.value.trim() !== "" &&
        RequestDate.value.trim() !== ""
    ) {
        ValidateForm(e);
        document.querySelector(".side-bar").style.zIndex = "100"; //Test
 
        TableRequestManager.innerHTML += `
    <tr class="border-t-gray">
      <td class="fs-small-100 p-3 text-nowrap text-center c-gray-dark3 col-2">${RequesstPersonel.value}</td>
      <td class="fs-small-100 p-3 text-nowrap text-center c-gray-dark3 col-2">${RequestType.value}</td>
      <td class="fs-small-100 p-3 text-nowrap text-center c-gray-dark3 col-2">${RequestTimeStart.value}</td>
      <td class="fs-small-100 p-3 text-nowrap text-center c-gray-dark3 col-2">${RequestTimeEnd.value}</td>
      <td class="fs-small-100 p-3 text-nowrap text-center c-gray-dark3 col-2">${RequestDate.value}</td>
      <td class="fs-small-100 p-3 text-nowrap text-center c-gray-dark3 col-2 data-dropdown"">
        <div class="btn-data-dropdown" data-dropdown data-btn-dropdown-state-request-manager>
         <p> عملیات</p>
          <img src="../images/Frame 134.svg" alt="" />
          <div class="dropdown d-none" data-dropdown-state-request-manager>
            <div>ویرایش</div>
            <div delete-row-request-manager>حذف</div>
          </div>
        </div>
      </td>
    </tr>
    `;
        CheckEmptyTable();
        GenerateBtnDropDownStateRequestManager();
        GenerateDeleteRowRequestManager();
        ContainerModal.classList.add("hide");

    } else {
        ValidateForm(e);
    }
});
