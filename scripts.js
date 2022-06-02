function FindNext () {
    var str = document.getElementById ("input").value;
    if (str == "") {
        alert ("Introduceti textul dorit in casuta search");
        return;
    }
    
    if (window.find) {        // Firefox, Google Chrome, Safari
        var found = window.find (str);
        if (!found) {
            alert ("Nu sa putut gasi nici un rezutat dupa :\n" + str);
        }
    }
    else {
        alert ("Browserul nu suporta cautarea!");
    }
}



