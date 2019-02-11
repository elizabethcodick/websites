function chgColor(color) {
    document.body.style.backgroundColor = color;
}

function info(){
    document.getElementById("greeting").textContent = "Hello " + document.getElementById("name").value + "!";

    
    document.body.style.backgroundColor = document.getElementById("favColor").value;
}