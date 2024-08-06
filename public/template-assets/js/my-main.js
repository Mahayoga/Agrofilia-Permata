document.getElementById('switch1').addEventListener('click', function() {
    this.classList.toggle('switchActive');
    let text = document.getElementById('switchStatus1');
    if(text.innerText == "Hidup") {
        text.innerText = "Mati";
    } else {
        text.innerText = "Hidup";
    }
});
document.getElementById('switch2').addEventListener('click', function() {
    this.classList.toggle('switchActive');
    let text = document.getElementById('switchStatus2');
    if(text.innerText == "Hidup") {
        text.innerText = "Mati";
    } else {
        text.innerText = "Hidup";
    }
});