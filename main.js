var shadowroot

function myFunction() {
    document.getElementById('test').style.backgroundColor = "MediumSeaGreen";
    let shadow = c.getContext("2d")
    //shadow.shadowColor = "lightgreen";
    document.getElementById('test').shadowColor = "MediumSeaGreen"
}

function changeText() {
    document.getElementById('changeText').style.fontSize = 10; 
    document.getElementById('changeText').innerHTML = "Speichern Erfolgreich"
}

function changeBorder() {
    if (document.getElementById("Border").value === ' ') {
        document.getElementById("Border").style.borderColor = 'red';
    }
}