function addLand() {
    var id = document.getElementById("farmerContent")

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            id.innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", ".././Dashboard/landlordAdd.php", true);
    xhttp.send();
}