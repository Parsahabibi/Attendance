import {
    BodyTable,
    BtnSearch,
    CompanyCity,
    ComponyName,
    OkDeleteRowLocation,
} from "../../../Elements.js";
import CheckEmptyTable from "../../../Validations/Table.js";
import { GenereateDeleteRow } from "../../../component/PushData.js";
import WindowCheck from "../../../component/Window.js";

try {
    (function Location() {
        const GenerateBtnDropDownLocation = () => {
            setTimeout(() => {
                BtnDropDown = document.querySelectorAll("[data-dropdown]");
                DropDown = document.querySelectorAll(
                    "[data-dropdown-operation-location]"
                );
                TextDropDown = document.querySelectorAll("[data-dropdown]>p");
                ImgDropDown = document.querySelectorAll("[data-dropdown]>img");
                for (let i = 0; i < BtnDropDown.length; i++) {
                    BtnDropDown[i].addEventListener("click", () => {
                        DropDown[i].style.display = "inline";
                    });
                }
                window.onclick = (e) => {
                    for (let i = 0; i < BtnDropDown.length; i++) {
                        if (
                            e.target !== BtnDropDown[i] &&
                            e.target !== TextDropDown[i] &&
                            e.target !== ImgDropDown[i]
                        ) {
                            DropDown[i].style.display = "none";
                        }
                    }
                    WindowCheck(e);
                };
            }, 500);
        };
        const GenerateDeleteRowLocation = () => {
            setTimeout(() => {
                let ModalDeleteLocation = document.querySelector(
                    "[modal-delete-location]"
                );
                let DeleteRowLocation = document.querySelectorAll(
                    "[delete-row-location]"
                );
                let RowTableLocation = document.querySelectorAll(
                    "[table-location]>tr"
                );
                GenereateDeleteRow(
                    DeleteRowLocation,
                    ModalDeleteLocation,
                    OkDeleteRowLocation,
                    RowTableLocation
                );
            }, 500);
        };
        const GenerateEditRowLocation = () => {
            setTimeout(() => {
                let EditRowLocation = document.querySelectorAll(
                    "[edit-row-location]"
                );
                let RowTableLocation = document.querySelectorAll(
                    "[table-location]>tr"
                );
                let NameWorkplace =
                    document.querySelectorAll(".name-workplace");
                let CityWorkplace =
                    document.querySelectorAll(".city-workplace");
                let LocationWorkplace = document.querySelectorAll(
                    ".location-workplace"
                );
                    
                for (let i = 0; i < EditRowLocation.length; i++) {
                    EditRowLocation[i].onclick = () => {
                        localStorage.setItem('ItemName',NameWorkplace[i].innerHTML)
                        localStorage.setItem('ItemCity', CityWorkplace[i].innerHTML)
                        localStorage.setItem('ItemLocation',LocationWorkplace[i].innerHTML)
                    };
                }
            }, 500);
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
                id: "3",
                name: "ناهیرا",
                city: "شیراز",
                location: "شیراز، رستوران آرمان",
            },
            {
                id: "4",
                name: "ناهیرا",
                city: "مشهد",
                location: "مشهد، رستوران آرمان",
            },
            {
                id: "5",
                name: "ناهیرا",
                city: "شیراز",
                location: "شیراز، رستوران آرمان",
            },
            {
                id: "6",
                name: "ناهیرا",
                city: "شیراز",
                location: "شیراز، رستوران آرمان",
            },
        ];
        if (BodyTable !== null) {
            Data.map(
                (item) =>
                    (BodyTable.innerHTML += `
    <tr class="border-t-gray">
      <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2">${item.id}</td>
      <td class="fs-small-100 p-3 text-nowrap name-workplace c-gray-dark3 col-2">${item.name}</td>
      <td class="fs-small-100 p-3 text-nowrap city-workplace c-gray-dark3 col-2">${item.city}</td>
      <td class="fs-small-100 p-3 text-nowrap location-workplace c-gray-dark3 col-2">${item.location}</td>
      <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2 data-dropdown"">
        <div class="" data-dropdown>
         <p> عملیات</p>
          <img src="../../images/Frame 134.svg" alt="" />
          <div class="dropdown" data-dropdown-operation-location>
            <div edit-row-location>
                <a href="./EditWorkPlace">
                ویرایش
                </a>
            </div>
            <div delete-row-location>حذف</div>
          </div>
        </div>
      </td>
    </tr>
  `)
            );
            GenerateBtnDropDownLocation();
            GenerateDeleteRowLocation();
            GenerateEditRowLocation();
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
            <td class="fs-small-100 p-3 text-nowrap name-workplace c-gray-dark3 col-2">${item.name}</td>
            <td class="fs-small-100 p-3 text-nowrap city-workplace c-gray-dark3 col-2">${item.city}</td>
            <td class="fs-small-100 p-3 text-nowrap location-workplace c-gray-dark3 col-2">${item.location}</td>
            <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2 data-dropdown">
              <div class="" data-dropdown>
                عملیات
                <img src="../../images/Frame 134.svg" alt="" />
                <div class="dropdown"data-dropdown-operation-location>
                <div edit-row-location>
                <a href="./EditWorkPlace">

                    ویرایش
                    </a>
                    </div>
                  <div delete-row-location>حذف</div>
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
            <td class="fs-small-100 p-3 text-nowrap  name-workplace c-gray-dark3 col-2">${Data[i].name}</td>
            <td class="fs-small-100 p-3 text-nowrap  city-workplace c-gray-dark3 col-2">${Data[i].city}</td>
            <td class="fs-small-100 p-3 text-nowrap  location-workplace c-gray-dark3 col-2">${Data[i].location}</td>
  
            <td class="fs-small-100 p-3 text-nowrap  c-gray-dark3 col-2 data-dropdown">
              <div class="" data-dropdown>
                عملیات
                <img src="../../images/Frame 134.svg" alt="" />
                <div class="dropdown"data-dropdown-operation-location>
                <div edit-row-location>
                <a href="./EditWorkPlace">

                    ویرایش
                    </a>
                    </div>
                  <div delete-row-location>حذف</div>
                </div>
              </div>
            </td>
          </tr>
          `;
                        // break;
                    }
                    // else if (name === false || city === false) {
                    //     BodyTable.innerHTML = "";
                    //     CheckEmptyTable();
                    // }
                }
                CheckEmptyTable();
                GenerateBtnDropDownLocation();
                GenerateDeleteRowLocation();
                GenerateEditRowLocation();
            });
        }
    })();
} catch (error) {}

