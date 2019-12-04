function editar(id){
    var update = document.getElementById(String(id));
    var sn = update.classList.contains("hide");
    if(sn){
        update.classList.remove("hide");
    }else{
        update.classList.add("hide");
    }
}