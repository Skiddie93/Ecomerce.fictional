let toggle = document.getElementById("check")
let additem = document.getElementById("additem")
let removeitem = document.getElementById("removeitem")
let clickChange = document.getElementById("switch")


function toggler() {

  if (toggle.checked == true){
    removeitem.style.display = "contents";
    additem.style.display = "none";
    } else {
      additem.style.display = "contents";
      removeitem.style.display = "none";
    }
}

clickChange.addEventListener('click', toggler);
