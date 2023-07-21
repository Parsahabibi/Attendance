import { BtnExcel } from "../Elements.js";

if (BtnExcel !== null) {
    BtnExcel.addEventListener("click", () => {
        var table = document.getElementById("myTable");
        var rows = table.rows;
        var header = table.createTHead();
        var headerRow = header.insertRow(0);
        var fileName = "table.xlsx";
        var wb = XLSX.utils.table_to_book(table, { sheet: "Sheet1" });
        XLSX.writeFile(wb, fileName);
    });
}
