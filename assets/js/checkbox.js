function checkAll() {
    const checkbox = document.getElementsByName("ids[]");
    const selectAll = document.getElementById("select-all");
    if (selectAll.checked) {
        for(i = 0; i < checkbox.length; i++) {
            checkbox[i].checked = true;
        }
    }

    if (selectAll.checked === false) {
        for(i = 0; i < checkbox.length; i++) {
            checkbox[i].checked = false;
        }
    }
}