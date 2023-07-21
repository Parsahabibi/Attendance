import {
    DataBtnPushRequest,
    DataValueRequest,
    TableRequest,
} from "../Elements.js";
import { ValidateForm } from "../Validations/Forms.js";
import CheckEmptyTable from "../Validations/Table.js";

let DataRequest = [];
const PushRequest = () => {
    for (let i = 0; i < TableRequest.length; i++) {
        TableRequest[i].innerHTML = DataRequest.map(
            (item) =>
                `
        <tr class="border-t-gray">
        <td class="my-2 c-gray-200 fs-small pe-5">${item.Type}</td>
        <td class="my-2 c-gray-200 fs-small pe-5">${item.DateStart}</td>
        <td class="my-2 c-gray-200 fs-small pe-5">${item.DateEnd}</td>
        <td class="my-2 c-gray-200 fs-small col-1 data-dropdown c-gray-dark3 px-2 me-5"
            data-btn-dropdown-operation>
            <div class="d-flex " data-dropdown>
                <p>
                    عملیات
    
                </p>
                <img src="../images/Frame 134.svg" alt="" class="pe-1" />
                <div class="dropdown dropdown-operation d-none" data-dropdown-operation>
                    <div>ویرایش</div>
                    <div delete-row>حذف</div>
                </div>
            </div>
        </td>
    </tr>`
        );
    }
};
if (DataBtnPushRequest) {
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
        } else {
        }
    };
}
