import { DataCheckEmptyTable, DataEmpltyTableMassage } from "../Elements.js";

const CheckEmptyTable = () => {
    for (let i = 0; i < DataCheckEmptyTable.length; i++) {
        if (DataCheckEmptyTable[i].innerHTML === "") {
            DataEmpltyTableMassage[i].classList.remove("d-none");
        } else {
            DataEmpltyTableMassage[i].classList.add("d-none");
        }
    }
};
CheckEmptyTable();
export default CheckEmptyTable;

