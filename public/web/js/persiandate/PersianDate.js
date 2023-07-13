import { DateShamsi, TimeShamsi } from "../Elements.js";
const date = new Date();
const option = {
    weekday: "long",
    year: "numeric",
    month: "long",
    day: "numeric",
};
DateShamsi.innerHTML = date.toLocaleDateString("fa-IR", option);

const SecoundShamsi = date.getSeconds().toLocaleString("fa-IR", option),
    MinutesShamsi = date.getMinutes().toLocaleString("fa-IR", option),
    HourShamsi = (date.getHours() + 1).toLocaleString("fa-IR", option);
TimeShamsi.innerHTML = `${HourShamsi}:${MinutesShamsi}:${SecoundShamsi}`;
