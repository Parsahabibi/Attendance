import {
    BodyTable,
    BtnSearch,
    BtnSearchPersonel,
    BtnSearchProject,
    CompanyCity,
    ComponyName,
    DataBtnPushRequest,
    DataValueRequest,
    InputSerch,
    InputSerchProject,
    TablePersonel,
    TableProject,
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
    <td class="my-2 c-gray-200 fs-small pe-5 py-2">${item.Type}</td>
    <td class="my-2 c-gray-200 fs-small pe-5 py-2">${item.DateStart}</td>
    <td class="my-2 c-gray-200 fs-small pe-5 py-2">${item.DateEnd}</td>
    <td class="my-2 c-gray-200 fs-small col-1  c-gray-dark3 px-2 me-5 py-2" data-btn-dropdown-operation="">
        <div class="d-flex btn-data-dropdown" data-dropdown="">
            <p>
                عملیات

            </p>
            <img src="../images/Frame 134.svg" alt="" class="pe-1">
            <div class="dropdown dropdown-operation d-none" data-dropdown-operation="">
                <div>ویرایش</div>
                <div delete-row="">حذف</div>
            </div>
        </div>
    </td>
</tr>`
        );
    }
};
const Data = [
    {
        id: "1",
        name: "ناهیرا",
        city: "قزوین",
        location: "قزوین، رستوران آرمان",
    },
    {
        id: "2",
        name: "ناهیرا",
        city: "تهران",
        location: "تهران، رستوران آرمان",
    },
    {
        id: "5",
        name: "ناهیرا",
        city: "شیراز",
        location: "شیراز، رستوران آرمان",
    },
    {
        id: "3",
        name: "ناهیرا",
        city: "مشهد",
        location: "مشهد، رستوران آرمان",
    },
    {
        id: "4",
        name: "ناهیرا",
        city: "شیراز",
        location: "شیراز، رستوران آرمان",
    },
    {
        id: "5",
        name: "ناهیرا",
        city: "شیراز",
        location: "شیراز، رستوران آرمان",
    },
];

// Request
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
        } else {
        }
    };
}
//***********************************************************************************************************

// Location
if (BodyTable !== null) {
    Data.map(
        (item) =>
            (BodyTable.innerHTML += `
        <tr class="border-t-gray">
          <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${item.id}</td>
          <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${item.name}</td>
          <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${item.city}</td>
          <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${item.location}</td>
          <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2 data-dropdown">
            <div class="" data-dropdown>
              عملیات
              <img src="../../images/Frame 134.svg" alt="" />
              <div class="dropdown">
                <div>ویرایش</div>
                <div delete-row>حذف</div>
              </div>
            </div>
          </td>
        </tr>
      `)
    );
}
if (BtnSearch !== null) {
    BtnSearch.addEventListener("click", (e) => {
        e.preventDefault();
        BodyTable.innerHTML = "";
        let name, city;
        for (let i = 0; i < Data.length; i++) {
            city = Data[i].city.includes(CompanyCity.value.trim());
            name = Data[i].name.includes(ComponyName.value.trim());

            // console.log(name,city);
            if (name === true && city === true) {
                const array = Data.filter((item) => {
                    return (
                        item.city.includes(CompanyCity.value.trim()) &&
                        item.name.includes(ComponyName.value.trim())
                    );
                });
                // console.log(array);
                BodyTable.innerHTML = "";

                //   console.log(name, city);
                array.map((item) => {
                    BodyTable.innerHTML += `
              <tr class="border-t-gray">
                <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${item.id}</td>
                <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${item.name}</td>
                <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${item.city}</td>
                <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${item.location}</td>
                <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2 data-dropdown">
                  <div class="" data-dropdown>
                    عملیات
                    <img src="../../images/Frame 134.svg" alt="" />
                    <div class="dropdown">
                      <div>ویرایش</div>
                      <div delete-row>حذف</div>
                    </div>
                  </div>
                </td>
              </tr>
              `;
                });
                break;
            } else if (name === true || city === true) {
                BodyTable.innerHTML += `
              <tr class="border-t-gray">
                <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${Data[i].id}</td>
                <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${Data[i].name}</td>
                <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${Data[i].city}</td>
                <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${Data[i].location}</td>
      
                <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2 data-dropdown">
                  <div class="" data-dropdown>
                    عملیات
                    <img src="../../images/Frame 134.svg" alt="" />
                    <div class="dropdown">
                      <div>ویرایش</div>
                      <div delete-row>حذف</div>
                    </div>
                  </div>
                </td>
              </tr>
              `;
                // break;
            }
        }
        CheckEmptyTable();
    });
}
//***********************************************************************************************************


// Personel

const DataPersonel = [
    {
        id: "۱",
        img: "Frame 127.svg",
        code: "۱۲۳۴۵۶۷۸۹",
        name: "امیررضا",
        family: "کاشی پزها",
        shift: "ساعتی",
    },
    {
        id: "۲",
        img: "Frame 127.svg",
        code: "۱۲۳۴۵۶۷۸۹",
        name: "پارسا",
        family: "حبیبی",
        shift: "ساعتی",
    },
    {
        id: "۳",
        img: "Frame 127.svg",
        code: "۱۲۳۴۵۶۷۸۹",
        name: "پژمان",
        family: "لطیفی",
        shift: "ساعتی",
    },
    {
        id: "۴",
        img: "Frame 127.svg",
        code: "۱۲۳۴۵۶۷۸۹",
        name: "امین",
        family: "غلامی",
        shift: "ساعتی",
    },
    {
        id: "۵",
        img: "Frame 127.svg",
        code: "۱۲۳۴۵۶۷۸۹",
        name: "هانیه",
        family: "ضرغامی",
        shift: "ساعتی",
    },
];
if (TablePersonel !== null) {
    DataPersonel.map(
        (item) =>
            (TablePersonel.innerHTML += `
    <tr class="border-t-gray">
    <td class="c-gray-dark3 py-3 px-2 table-personel">
        <div class="d-flex align-items-center">
            <p class="ps-5">${item.id}</p>
        <img src="../../images/${item.img}" alt="" />
        </div>

    </td>
    <td class="fs-small-100 text-center c-gray-dark3 px-2">${item.code}</td>
    <td class="fs-small-100 text-center c-gray-dark3 px-2">${item.name}</td>
    <td class="fs-small-100 text-center c-gray-dark3 px-2">${item.family}</td>
    <td class="fs-small-100 text-center c-gray-dark3 px-2">${item.shift}</td>
    <td class="fs-small-100 text-center data-dropdown c-gray-dark3 px-2">
      <div class="" data-dropdown>
        عملیات
        <img src="../../images/Frame 134.svg" alt="" />
        <div class="dropdown dropdown-operation">
          <div>ویرایش</div>
          <div delete-row>حذف</div>
        </div>
      </div>
    </td>
    <td class="fs-small-100 text-center data-dropdown c-gray-dark3 px-2">
      <div class="text-nowrap" data-dropdown-state>
        <p>وضعیت</p>
        <img src="../../images/Frame 134.svg" alt="" />
        <div class="dropdown dropdown-state">
          <div item-dropdown-state>فعال</div>
          <div delete-row2 class="text-nowrap" item-dropdown-state>غیر فعال</div>
        </div>
      </div>
    </td>
</tr>
           

        `)
    );
}
let SearchPersonel = [];
if (BtnSearchPersonel !== null &&TablePersonel!==null) {
    BtnSearchPersonel.addEventListener("click", (e) => {
        e.preventDefault();
        let SearchPersonel = [];
        TablePersonel.innerHTML = "";
        DataPersonel.forEach((item) => {
            if (item.name.includes(InputSerch.value)) {
                SearchPersonel.push(item);
            }
        });

        SearchPersonel.map((item) => {
            TablePersonel.innerHTML += `
    <tr class="border-t-gray">
    <td class="c-gray-dark3 py-3 px-2 table-personel">
        <div class="d-flex align-items-center">
            <p class="ps-5">${item.id}</p>
        <img src="../../images/${item.img}" alt="" />
        </div>

    </td>
    <td class="fs-small-100 text-center c-gray-dark3 px-2">${item.code}</td>
    <td class="fs-small-100 text-center c-gray-dark3 px-2">${item.name}</td>
    <td class="fs-small-100 text-center c-gray-dark3 px-2">${item.family}</td>
    <td class="fs-small-100 text-center c-gray-dark3 px-2">${item.shift}</td>
    <td class="fs-small-100 text-center data-dropdown c-gray-dark3 px-2">
      <div class="" data-dropdown>
        عملیات
        <img src="../../images/Frame 134.svg" alt="" />
        <div class="dropdown dropdown-operation">
          <div>ویرایش</div>
          <div delete-row>حذف</div>
        </div>
      </div>
    </td>
    <td class="fs-small-100 text-center data-dropdown c-gray-dark3 px-2">
      <div class="text-nowrap" data-dropdown-state>
        <p>وضعیت</p>
        <img src="../../images/Frame 134.svg" alt="" />
        <div class="dropdown dropdown-state">
          <div item-dropdown-state>فعال</div>
          <div delete-row2 class="text-nowrap" item-dropdown-state>غیر فعال</div>
        </div>
      </div>
    </td>
</tr>
           
`;
        });
        CheckEmptyTable();
    });
}
//***********************************************************************************************************


// project

const DataProject = [
    {
        id: "1",
        name: "نیار",
        company:'پژمان'
    },
    {
        id: "2",
        name: "فینتو",
        company:'امیررضا'
    },
    {
        id: "3",
        name: "آهنا",
        company:'پارسا'
    },
    {
        id: "4",
        name: "آقای ملک",
        company:'پژمان'
    },
    
];
if (TableProject !== null) {
    DataProject.map(
        (item) =>
            (TableProject.innerHTML += `
            <tr class="border-t-gray">
            <td class=" fs-small-100 text-end c-gray-dark3 px-2">${item.id}</td>
            <td class=" fs-small-100 c-gray-dark3 px-2">${item.name}</td>
            <td class=" fs-small-100 text-end c-gray-dark3 px-2">${item.company}</td>
            <td class=" fs-small-100 text-center data-dropdown c-gray-dark3 px-2">
              <div class="" data-dropdown>
                عملیات
                <img src="../../images/Frame 134.svg" alt="" />
                <div class="dropdown dropdown-operation">
                  <div>ویرایش</div>
                  <div delete-row>حذف</div>
                </div>
              </div>
            </td>
            <td class="fs-small-100 text-center data-dropdown c-gray-dark3 px-2">
              <div class="text-nowrap" data-dropdown-state>
                <p>وضعیت</p>
                <img src="../../images/Frame 134.svg" alt="" />
                <div class="dropdown dropdown-state">
                  <div item-dropdown-state>فعال</div>
                  <div delete-row2 class="text-nowrap" item-dropdown-state>غیر فعال</div>
                </div>
              </div>
            </td>
        </tr>
           

        `)
    );
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
            <td class=" fs-small-100 text-end c-gray-dark3 px-2">${item.id}</td>
            <td class=" fs-small-100 c-gray-dark3 px-2">${item.name}</td>
            <td class=" fs-small-100 text-end c-gray-dark3 px-2">${item.company}</td>
            <td class=" fs-small-100 text-center data-dropdown c-gray-dark3 px-2">
              <div class="" data-dropdown>
                عملیات
                <img src="../../images/Frame 134.svg" alt="" />
                <div class="dropdown dropdown-operation">
                  <div>ویرایش</div>
                  <div delete-row>حذف</div>
                </div>
              </div>
            </td>
            <td class="fs-small-100 text-center data-dropdown c-gray-dark3 px-2">
              <div class="text-nowrap" data-dropdown-state>
                <p>وضعیت</p>
                <img src="../../images/Frame 134.svg" alt="" />
                <div class="dropdown dropdown-state">
                  <div item-dropdown-state>فعال</div>
                  <div delete-row2 class="text-nowrap" item-dropdown-state>غیر فعال</div>
                </div>
              </div>
            </td>
        </tr>
           
`;
        });
        CheckEmptyTable();
    });
}
//***********************************************************************************************************
