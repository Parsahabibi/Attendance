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

    // day = "12";
    // week = "پنجشنبه";
    // month = "مرداد";
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
                        ItemNumWeek: NumWeek,
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
                        ItemNumWeek: NumWeek,
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
                                ItemNumWeek: NumWeek,
                                ItemWeek: ArrWeek[NumWeek++],
                                ItemYear: NumYear,
                                ItemMonth: NumMonth,
                                ItemDay: NumDay++,
                            });
                            // break;
                        } else {
                            ThisYear.push({
                                ItemNumWeek: NumWeek,
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
                            ItemNumWeek: NumWeek,
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
                            ItemNumWeek: NumWeek,
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
                            ItemNumWeek: NumWeek,
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
                        ItemNumWeek: NumWeekBefore,
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
                        ItemNumWeek: NumWeekBefore,
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
                        ItemNumWeek: NumWeekBefore,
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
                        ItemNumWeek: NumWeekBefore,
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

    let ArrFarvardin = FinallThisYear.slice(0, 31);
    let ArrOrdibehesht = FinallThisYear.slice(31, 62);
    let ArrKhordad = FinallThisYear.slice(62, 93);
    let ArrTir = FinallThisYear.slice(93, 124);
    let ArrMordad = FinallThisYear.slice(124, 155);
    let ArrShahrivar = FinallThisYear.slice(155, 186);
    let ArrMehr = FinallThisYear.slice(186, 216);
    let ArrAban = FinallThisYear.slice(216, 246);
    let ArrAzar = FinallThisYear.slice(246, 276);
    let ArrDey = FinallThisYear.slice(276, 306);
    let ArrBahman = FinallThisYear.slice(306, 336);
    let ArrEsfand = FinallThisYear.slice(336, 368);

    let Table = document.querySelector("#demo>tbody>tr");
    let count = 0;

    if (NumNewMonth >= 6) {
        FinallThisYear.pop();
    }

    return [
        {
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
            FinallThisYear,
            NumMonthToday,
            WeekToday,
            NumDayToday,
            NumYearToday,
        },
    ];
};

const ShamsiDate = ShowDate()[0];
console.log(ShamsiDate);
export default ShamsiDate;
