jalaliDatepicker.startWatch();

let button = document.getElementById("SearchButtonFunction");

let row = document.querySelector("[body-table-function]");

let inputTo = document.getElementById("dateTo");

let inputFrom = document.getElementById("dateFrom");

const data = [
    {
        date: "۱۴۰۲/۲/۲۰",
        day: "دوشنبه",
        clock: "۰۱:۴۴",
        id: 1,
    },
    {
        date: "۱۴۰۲/۲/۲۱",
        day: "سه شنبه",
        clock: "۰۱:۴۴",
        id: 2,
    },
    {
        date: "۱۴۰۲/۲/۲۱",
        day: "چهارشنبه",
        clock: "۰۱:۴۴",
        id: 3,
    },
    {
        date: "۱۴۰۲/۲/۲۲",
        day: "چهارشنبه",
        clock: "۰۱:۴۴",
        id: 3,
    },
    {
        date: "۱۴۰۲/۲/۲۲",
        day: "چهارشنبه",
        clock: "۰۱:۴۴",
        id: 3,
    },
];

data.map(
    (item) =>
        (row.innerHTML += `
        <tr class="border-b-gray d-flex align-items-center justify-content-between borderTable">
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.date}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.day}</td>
                        <td
                            class="py-2 w-100 text-center border-0 d-flex align-items-center justify-content-center gap-3">
                            <div class="d-flex flex-column align-items-center justify-content-center gap-1">
                                <h6 class="enter">ورود</h6>
                                <p class="clockEnter fs-small-100 c-gray-dark3 ">${item.clock}</p>
                            </div>
                            <div class="d-flex flex-column align-items-center justify-content-center gap-1">
                                <h6 class="enter">خروج</h6>
                                <p class="clockEnter fs-small-100 c-gray-dark3 ">${item.clock}</p>
                            </div>
                        </td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                    </tr>
        `)
);

button.onclick = () => {
    let ConditionDate = [];
    // console.log(toString(inputTo.value))

    //   let PersianDateStart = e2a(inputFrom.value)
    //   let PersianDateEnd = e2a(inputTo.value)
    const p2e = (s) => s.replace(/[۰-۹]/g, (d) => "۰۱۲۳۴۵۶۷۸۹".indexOf(d));

    let DateStart = inputFrom.value;
    let DateEnd = inputTo.value;
    //   console.log(DateStart, DateEnd);
    console.log(DateStart);
    // console.log(data[0].date)
    let DayStart = +DateStart.split("/")[2];
    let MonthStart = +DateStart.split("/")[1];
    let YearStart = +DateStart.split("/")[0];

    let DayEnd = +DateEnd.split("/")[2];
    let MonthEnd = +DateEnd.split("/")[1];
    let YearEnd = +DateEnd.split("/")[0];

    let ConditionMonthEnd;
    if (MonthEnd > 7) {
        ConditionMonthEnd = 30;
    } else {
        ConditionMonthEnd = 31;
    }

    let ConditionMonthStart;
    if (MonthStart > 7) {
        ConditionMonthStart = 30;
    } else {
        ConditionMonthStart = 31;
    }

    let limit = 0;

    if (MonthEnd > 7) {
        limit =
            (MonthEnd - 7) * 30 +
            6 * 31 +
            DayEnd -
            ((MonthStart - 7) * 30 + 6 * 31 + DayStart);
    } else {
        limit =
            (MonthEnd - 1) * 31 + DayEnd - ((MonthStart - 1) * 31 + DayStart);
    }

    let arr = [];

    for (let z = 0; z <= limit; z++) {
        if (MonthStart > 6) {
            arr.push(`${YearStart}/${MonthStart}/${DayStart}`);
            DayStart++;
            if (DayStart > 31) {
                MonthStart++;
                DayStart = 1;
            }
        } else {
            arr.push(`${YearStart}/${MonthStart}/${DayStart}`);
            DayStart++;
            if (DayStart > 31) {
                MonthStart++;
                DayStart = 1;
            }
        }
    }
    console.log(data);
    let da = [];
    data.map((item, ...a) => {
        da.push({
            date: p2e(item.date),
            day: item.day,
            clock: item.clock,
            id: item.id,
        });
    });

    let check = [];
    da.map((item) => {
        console.log(arr, "arr");
        if (arr.includes(item.date)) {
            check.push(item);
        }
    });

    for (let f = 0; f < check.length; f++) {
        console.log(da, "da");
        console.log(check, "check");
        let filter = da.filter((item) => item.date === check[f].date);
        console.log(filter, "جون مادرت کار کن");
    }
    row.innerHTML = "";
    check.map(
        (item) =>
            (row.innerHTML += `
                        <tr class="border-b-gray d-flex align-items-center justify-content-between borderTable">
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.date}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.day}</td>
                        <td
                            class="py-2 w-100 text-center border-0 d-flex align-items-center justify-content-center gap-3">
                            <div class="d-flex flex-column align-items-center justify-content-center gap-1">
                                <h6 class="enter">ورود</h6>
                                <p class="clockEnter fs-small-100 c-gray-dark3 ">${item.clock}</p>
                            </div>
                            <div class="d-flex flex-column align-items-center justify-content-center gap-1">
                                <h6 class="enter">خروج</h6>
                                <p class="clockEnter fs-small-100 c-gray-dark3 ">${item.clock}</p>
                            </div>
                        </td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                        <td class="fs-small-100 c-gray-dark3 py-2 w-100 text-center border-0">${item.clock}</td>
                    </tr>
        `)
    );
    console.log(check, "gf");
   
};
