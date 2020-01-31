$('document').ready(
    autoFill({'fnme':"q"})
);


function autoFill(Data){
    for(var $key in Data) {
        $val = Data[$key];
        alert(getElelementById($val));
    }
    
}