const GenereateDeleteRow = (BtnDelete, Modal, OkDelete, RowTable,ItemDropdownState,MatnItemFropDownState) => {
    for (let i = 0; i < BtnDelete.length; i++) {
        BtnDelete[i].onclick = () => {
            Modal.classList.remove("hide");
            OkDelete.onclick = () => {
                Modal.classList.remove("show");
                Modal.classList.add("hide");
                RowTable[i].remove();
            };
        };
    }
};

export { GenereateDeleteRow };
