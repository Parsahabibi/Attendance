const ShowDate = () => {
    const date = new Date();
    const option = {
        weekday: "long",
        year: "numeric",
        month: "long",
        day: "numeric",
    };
    let day, week, month, year;
    day = date.toLocaleDateString("fa-IR", option).split(" ")[2].split(",")[0];
    week = date.toLocaleDateString("fa-IR", option).split(" ")[3];
    month = date.toLocaleDateString("fa-IR", option).split(" ")[1];
    year = date.toLocaleDateString("fa-IR", option).split(" ")[0];

    // day = "29";
    // week = "سه‌شنبه";
    // month = "اسفند";
    // year = "1402";

    const ArrMonth = [
        "فروردین",
        "اردیبهشت",
        "خرداد",
        "تیر",
        "مرداد",
        "شهریور",
        "مهر",
        "آبان",
        "آذر",
        "دی",
        "بهمن",
        "اسفند",
    ];

    const ArrWeek = [
        "شنبه",
        "یکشنبه",
        "دوشنبه",
        "سه‌شنبه",
        "چهارشنبه",
        "پنجشنبه",
        "جمعه",
    ];
    const ArrKabise = [
        1403, 1408, 1412, 1416, 1420, 1424, 1428, 1432, 1436, 1441, 1445, 1449,
        1453, 1457, 1461, 1465, 1469, 1474, 1478, 1482, 1486, 1490, 1494, 1498,
    ];
    let ThisYear = [];

    var pn = ["۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹"];
    var en = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];

    for (var i = 0; i < 10; i++) {
        var regex_fa = new RegExp(pn[i], "g");
        day = day.replace(regex_fa, en[i]);
    }

    var NumDay = +day;

    const DayToday = NumDay;

    for (var i = 0; i < 10; i++) {
        var regex_fa = new RegExp(pn[i], "g");
        year = year.replace(regex_fa, en[i]);
    }
    var NumYear = +year;
    // NumYear=1408

    let NumMonth, NumNewMonth;
    for (let i = 0; i < ArrMonth.length; i++) {
        if (ArrMonth[i].includes(month)) {
            NumMonth = i + 1;
            NumNewMonth = i + 1;
        }
    }

    let NumWeek;

    for (let i = 0; i < ArrWeek.length; i++) {
        if (ArrWeek[i] === week) {
            NumWeek = i;
        }
    }

    console.log(`${NumYear}/${NumMonth}/${NumDay}/${week}`);

    let NumMonthToday = NumMonth;
    let NumDayToday = NumDay;
    let WeekToday = week;
    let NumYearToday = NumYear;

    let NumMonthBefore = NumMonth,
        NumDayBefore = NumDay,
        NumYearBefore = NumYear,
        NumWeekBefore = NumWeek;
    let limit = 0;
    if (NumMonth <= 6) {
        limit = (NumMonth - 1) * 31 + NumDay; // در اوردن تعداد روز های قبل از تاریخ امروز
    } else {
        limit = (NumMonth - 1) * 30 + NumDay; // برای دراوردن تعداد روزهای بعد از تاریخ امروز
    }
    let Kabise = 365;

    let KabiseConditional = 30;

    if (ArrKabise.includes(NumYear)) {
        //برای تشخیص سال کبیسه
        Kabise += 1;
        KabiseConditional = 31;
        console.log("object");
    }
    let finallimit;
    if (NumMonth <= 6) {
        finallimit = limit;
    } else {
        finallimit = limit + 6;
    }

    for (let i = 0; i <= Kabise - limit; i++) {
        if (NumMonth <= 12) {
            if (NumMonth <= 6) {
                if (NumDay <= 31) {
                    ThisYear.push({
                        ItemWeek: ArrWeek[NumWeek],
                        ItemYear: NumYear,
                        ItemMonth: NumMonth,
                        ItemDay: NumDay++,
                    });
                    if (NumWeek < 6) {
                        NumWeek++;
                    } else {
                        NumWeek = 0;
                    }
                } else {
                    NumDay = 1;
                    NumMonth++;
                    ThisYear.push({
                        ItemWeek: ArrWeek[NumWeek],
                        ItemYear: NumYear,
                        ItemMonth: NumMonth,
                        ItemDay: NumDay++,
                    });
                    if (NumWeek < 6) {
                        NumWeek++;
                    } else {
                        NumWeek = 0;
                    }
                }
            } else {
                if (NumMonth === 12) {
                    if (NumDay < KabiseConditional) {
                        if (NumDay === 29) {
                            ThisYear.push({
                                ItemWeek: ArrWeek[NumWeek++],
                                ItemYear: NumYear,
                                ItemMonth: NumMonth,
                                ItemDay: NumDay++,
                            });
                            // break;
                        } else {
                            ThisYear.push({
                                ItemWeek: ArrWeek[NumWeek],
                                ItemYear: NumYear,
                                ItemMonth: NumMonth,
                                ItemDay: NumDay++,
                            });
                            if (NumWeek < 6) {
                                NumWeek++;
                            } else {
                                NumWeek = 0;
                            }
                        }
                    } else {
                        NumDay = 1;
                        NumMonth++;
                        ThisYear.push({
                            ItemWeek: ArrWeek[NumWeek],
                            ItemYear: NumYear,
                            ItemMonth: NumMonth,
                            ItemDay: NumDay++,
                        });
                        if (NumWeek < 6) {
                            NumWeek++;
                        } else {
                            NumWeek = 0;
                        }
                    }
                } else {
                    if (NumDay <= 30) {
                        ThisYear.push({
                            ItemWeek: ArrWeek[NumWeek],
                            ItemYear: NumYear,
                            ItemMonth: NumMonth,
                            ItemDay: NumDay++,
                        });
                        if (NumWeek < 6) {
                            NumWeek++;
                        } else {
                            NumWeek = 0;
                        }
                    } else {
                        NumDay = 1;
                        NumMonth++;
                        ThisYear.push({
                            ItemWeek: ArrWeek[NumWeek],
                            ItemYear: NumYear,
                            ItemMonth: NumMonth,
                            ItemDay: NumDay++,
                        });
                        if (NumWeek < 6) {
                            NumWeek++;
                        } else {
                            NumWeek = 0;
                        }
                    }
                }
            }
        }
    }

    for (let i = 0; i < finallimit; i++) {
        if (NumMonthBefore <= 12) {
            if (NumMonthBefore <= 7) {
                if (NumDayBefore >= 1) {
                    ThisYear.unshift({
                        ItemWeek: ArrWeek[NumWeekBefore],
                        ItemYear: NumYearBefore,
                        ItemMonth: NumMonthBefore,
                        ItemDay: NumDayBefore--,
                    });
                    if (NumWeekBefore > 0) {
                        NumWeekBefore--;
                    } else {
                        NumWeekBefore = 6;
                    }
                } else {
                    //               if (NumMonthBefore <= 6) {
                    //                 NumDayBefore = 30;
                    // console.log('object');
                    //               } else {
                    //                 NumDayBefore = 31;

                    //               }
                    NumDayBefore = 31;
                    NumMonthBefore--;
                    ThisYear.unshift({
                        ItemWeek: ArrWeek[NumWeekBefore],
                        ItemYear: NumYearBefore,
                        ItemMonth: NumMonthBefore,
                        ItemDay: NumDayBefore--,
                    });
                    if (NumWeekBefore > 0) {
                        NumWeekBefore--;
                    } else {
                        NumWeekBefore = 6;
                    }
                }
            } else {
                if (NumDayBefore >= 1) {
                    ThisYear.unshift({
                        ItemWeek: ArrWeek[NumWeekBefore],
                        ItemYear: NumYearBefore,
                        ItemMonth: NumMonthBefore,
                        ItemDay: NumDayBefore--,
                    });
                    if (NumWeekBefore > 0) {
                        NumWeekBefore--;
                    } else {
                        NumWeekBefore = 6;
                    }
                } else {
                    NumDayBefore = 30;
                    NumMonthBefore--;
                    ThisYear.unshift({
                        ItemWeek: ArrWeek[NumWeekBefore],
                        ItemYear: NumYearBefore,
                        ItemMonth: NumMonthBefore,
                        ItemDay: NumDayBefore--,
                    });
                    if (NumWeekBefore > 0) {
                        NumWeekBefore--;
                    } else {
                        NumWeekBefore = 6;
                    }
                }
            }
        }
    }

    let FinallThisYear = Array.from(new Set(ThisYear.map(JSON.stringify))).map(
        JSON.parse
    );

    let ArrFarvardin = ThisYear.slice(0, 31);
    let ArrOrdibehesht = ThisYear.slice(31, 62);
    let ArrKhordad = ThisYear.slice(62, 93);
    let ArrTir = ThisYear.slice(93, 125);
    let ArrMordad = ThisYear.slice(125, 156);
    let ArrShahrivar = ThisYear.slice(156, 187);
    let ArrMehr = ThisYear.slice(187, 217);
    let ArrAban = ThisYear.slice(217, 247);
    let ArrAzar = ThisYear.slice(247, 277);
    let ArrDey = ThisYear.slice(277, 307);
    let ArrBahman = ThisYear.slice(307, 337);
    let ArrEsfand = ThisYear.slice(337, 366);

    let Table = document.querySelector("#demo>tbody>tr");
    let count = 0;

    if (NumNewMonth >= 6) {
        FinallThisYear.pop();
    }

    return [
        {
            Year: FinallThisYear,
            Months: [
                ArrFarvardin,
                ArrOrdibehesht,
                ArrKhordad,
                ArrTir,
                ArrMordad,
                ArrShahrivar,
                ArrMehr,
                ArrAban,
                ArrAzar,
                ArrDey,
                ArrBahman,
                ArrEsfand,
            ],
            NumMonthToday,
            WeekToday,
            NumDayToday,
            NumYearToday,
        },
    ];
};

const ShamsiDate = ShowDate()[0];

const MonthEn = [
    "farvardin",
    "ordibehesht",
    "khordad",
    "tir",
    "mordad",
    "shahrivar",
    "mehr",
    "aban",
    "azar",
    "dey",
    "bahman",
    "esfand",
];
const DateYourShift = [];
for (let i = 0; i < MonthEn.length; i++) {
    DateYourShift.push([
        (MonthEn[i] = ShamsiDate.Months[i].slice(0, 7)),
        ShamsiDate.Months[i].slice(7, 14),
        ShamsiDate.Months[i].slice(14, 21),
        ShamsiDate.Months[i].slice(21, 31),
    ]);
}

const TableYourshift = document.querySelector("[table-yourshift]");

//------------------------------------------------------------------------------------------------------

const weeks = ["هفته اول", "هفته دوم", "هفته سوم", "هفته چهارم"];

const ValueWeek = document.querySelector("[data-value-week]");
let NumWeek = 0;
ValueWeek.innerHTML = weeks[NumWeek];

const month = [
    "فروردین",
    "اردیبهشت",
    "خرداد",
    "تیر",
    "مرداد",
    "شهریور",
    "مهر",
    "آبان",
    "آذر",
    "دی",
    "بهمن",
    "اسفند",
];
const ValueMonth = document.querySelector("[data-value-month]");
let NumMonth = ShamsiDate.NumMonthToday - 1;
ValueMonth.innerHTML = month[NumMonth];

const FillTable = () => {
    DateYourShift[NumMonth][0].map((item) => {
        TableYourshift.innerHTML += `
            <tr class="border-t-gray w-100 d-flex justify-content-between  px-3 px-lg-4 ">
                        <td class="col-1 py-3 text-nowrap">
                            <span class="ps-2 c-gray-dark3">${item.ItemWeek}</span class="c-gray-dark3"> <span>${item.ItemYear}/${item.ItemMonth}/${item.ItemDay}</span>
                        </td>
                        <td class="pe-5 py-3 d-flex text-nowrap">
                            <span class="c-gray-dark3 text-nowrap">قسمت اول روز:</span>
                            <span class="d-flex pe-3 text-nowrap">
                                از <p class="me-1">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3 text-nowrap">
                                تا <p class="me-1">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2 py-3 d-flex"> <span class="c-gray-dark3 text-nowrap">قسمت دوم روز:</span>
                            <span class="d-flex pe-3">
                                از <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3">
                                تا <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">شناوری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">سقف اضافه کاری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>


                    </tr>
        `;
    });
};
FillTable();

document
    .querySelector("[data-btn-forward-month]")
    .addEventListener("click", () => {
        TableYourshift.innerHTML = "";
        if (NumMonth < 11) {
            ValueMonth.innerHTML = month[(NumMonth += 1)];
        } else {
            NumMonth = 0;
            ValueMonth.innerHTML = month[NumMonth];
        }

        DateYourShift[NumMonth][0].map((item) => {
            TableYourshift.innerHTML += `
        <tr class="border-t-gray w-100 d-flex justify-content-between  px-3 px-lg-4 ">
                        <td class="col-1 py-3 text-nowrap">
                            <span class="ps-2 c-gray-dark3">${item.ItemWeek}</span class="c-gray-dark3"> <span>${item.ItemYear}/${item.ItemMonth}/${item.ItemDay}</span>
                        </td>
                        <td class="pe-5 py-3 d-flex text-nowrap">
                            <span class="c-gray-dark3 text-nowrap">قسمت اول روز:</span>
                            <span class="d-flex pe-3 text-nowrap">
                                از <p class="me-1">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3 text-nowrap">
                                تا <p class="me-1">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2 py-3 d-flex"> <span class="c-gray-dark3 text-nowrap">قسمت دوم روز:</span>
                            <span class="d-flex pe-3">
                                از <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3">
                                تا <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">شناوری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">سقف اضافه کاری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>


                    </tr>
        `;
        });
    });

document
    .querySelector("[data-btn-backward-month]")
    .addEventListener("click", () => {
        TableYourshift.innerHTML = "";

        if (NumMonth > 0) {
            ValueMonth.innerHTML = month[(NumMonth -= 1)];
        } else {
            NumMonth = 11;
            ValueMonth.innerHTML = month[NumMonth];
        }

        DateYourShift[NumMonth][0].map((item) => {
            TableYourshift.innerHTML += `
        <tr class="border-t-gray w-100 d-flex justify-content-between  px-3 px-lg-4 ">
                        <td class="col-1 py-3 text-nowrap">
                            <span class="ps-2 c-gray-dark3">${item.ItemWeek}</span class="c-gray-dark3"> <span>${item.ItemYear}/${item.ItemMonth}/${item.ItemDay}</span>
                        </td>
                        <td class="pe-5 py-3 d-flex text-nowrap">
                            <span class="c-gray-dark3 text-nowrap">قسمت اول روز:</span>
                            <span class="d-flex pe-3 text-nowrap">
                                از <p class="me-1">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3 text-nowrap">
                                تا <p class="me-1">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2 py-3 d-flex"> <span class="c-gray-dark3 text-nowrap">قسمت دوم روز:</span>
                            <span class="d-flex pe-3">
                                از <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3">
                                تا <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">شناوری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">سقف اضافه کاری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>


                    </tr>
            `;
        });
    });

document
    .querySelector("[data-btn-forward-week]")
    .addEventListener("click", () => {
        TableYourshift.innerHTML = "";

        if (NumWeek < 3) {
            ValueWeek.innerHTML = weeks[(NumWeek += 1)];
        } else {
            NumWeek = 0;
            ValueWeek.innerHTML = weeks[NumWeek];
        }
        DateYourShift[NumMonth][NumWeek].map((item) => {
            TableYourshift.innerHTML += `
        <tr class="border-t-gray w-100 d-flex justify-content-between  px-3 px-lg-4 ">
                        <td class="col-1 py-3 text-nowrap">
                            <span class="ps-2 c-gray-dark3">${item.ItemWeek}</span class="c-gray-dark3"> <span>${item.ItemYear}/${item.ItemMonth}/${item.ItemDay}</span>
                        </td>
                        <td class="pe-5 py-3 d-flex text-nowrap">
                            <span class="c-gray-dark3 text-nowrap">قسمت اول روز:</span>
                            <span class="d-flex pe-3 text-nowrap">
                                از <p class="me-1">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3 text-nowrap">
                                تا <p class="me-1">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2 py-3 d-flex"> <span class="c-gray-dark3 text-nowrap">قسمت دوم روز:</span>
                            <span class="d-flex pe-3">
                                از <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3">
                                تا <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">شناوری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">سقف اضافه کاری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>


                    </tr>
            `;
        });
    });
document
    .querySelector("[data-btn-backward-week]")
    .addEventListener("click", () => {
        TableYourshift.innerHTML = "";

        if (NumWeek > 0) {
            ValueWeek.innerHTML = weeks[(NumWeek -= 1)];
        } else {
            NumWeek = 3;
            ValueWeek.innerHTML = weeks[NumWeek];
        }
        DateYourShift[NumMonth][NumWeek].map((item) => {
            TableYourshift.innerHTML += `
        <tr class="border-t-gray w-100 d-flex justify-content-between  px-3 px-lg-4 ">
                        <td class="col-1 py-3 text-nowrap">
                            <span class="ps-2 c-gray-dark3">${item.ItemWeek}</span class="c-gray-dark3"> <span>${item.ItemYear}/${item.ItemMonth}/${item.ItemDay}</span>
                        </td>
                        <td class="pe-5 py-3 d-flex text-nowrap">
                            <span class="c-gray-dark3 text-nowrap">قسمت اول روز:</span>
                            <span class="d-flex pe-3 text-nowrap">
                                از <p class="me-1">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3 text-nowrap">
                                تا <p class="me-1">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2 py-3 d-flex"> <span class="c-gray-dark3 text-nowrap">قسمت دوم روز:</span>
                            <span class="d-flex pe-3">
                                از <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                            <span class="d-flex pe-3">
                                تا <p class="me-1 text-nowrap">--</p> : <p>--</p>
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">شناوری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>
                        <td class="pe-2  py-3 d-flex">
                            <span class="ps-2 c-gray-dark3 text-nowrap">سقف اضافه کاری:</span>
                            <span class="d-flex text-nowrap">
                                <p class="ms-1">ـ ـ‌</p> دقیقه
                            </span>
                        </td>


                    </tr>
            `;
        });
    });
