import WindowCheck from "../../../component/Window.js";

window.onload = function () {
    //Reference the DropDownList.
    var ddlYears = document.getElementById("ddlYears");

    //Determine the Current Year.
    var currentYear = new Date().toLocaleDateString("fa-IR");

    const date = currentYear.split("/");

    const year = date[0];

    const p2e = (s) => s.replace(/[۰-۹]/g, (d) => "۰۱۲۳۴۵۶۷۸۹".indexOf(d));

    const years = p2e(year);

    console.log(years);

    //Loop and add the Year values to DropDownList.
    for (var i = 1390; i <= years; i++) {
        var option = document.createElement("OPTION");
        option.innerHTML = i;
        option.value = i;
        ddlYears.appendChild(option);
    }
};
window.onclick = (e) => {
    WindowCheck(e);
};
