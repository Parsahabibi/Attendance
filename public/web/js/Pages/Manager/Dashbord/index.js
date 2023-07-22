
let numrotate = 0;
const rotate = () => {
    numrotate += 360;
    const ImgRotate = document.querySelectorAll(".img-refresh>img")[0];
    ImgRotate.style.transition = `all 0.7s ease-in-out`;
    ImgRotate.style.transform = `rotate(${numrotate}deg)`;
    setTimeout(() => {
        numrotate = 0;
        ImgRotate.style.transform = `rotate(${numrotate}deg)`;
        ImgRotate.style.transition = `none`;
    }, 700);
};
let numrotate2 = 0;
const rotate2 = () => {
    numrotate2 += 360;
    const ImgRotate2 = document.querySelectorAll(".img-refresh>img")[1];
    ImgRotate2.style.transition = `all 0.7s ease-in-out`;
    ImgRotate2.style.transform = `rotate(${numrotate2}deg)`;
    setTimeout(() => {
        numrotate2 = 0;
        ImgRotate2.style.transform = `rotate(${numrotate2}deg)`;
        ImgRotate2.style.transition = `none`;
    }, 700);
};
