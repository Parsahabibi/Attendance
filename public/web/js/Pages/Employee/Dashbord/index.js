let variable = document.querySelector('.boxDrop');
let drop = document.querySelector('.positionCostume');
let text = document.querySelector('.textDrop');
variable.onclick = () => {
    if (drop.style.display === 'block') {
        drop.style.display = 'none'
    } else {
        drop.style.display = 'block'
    }
}
window.onclick = (e) => {
    if (e.target !== variable && e.target !== text) {
        drop.style.display = 'none'
    }
}