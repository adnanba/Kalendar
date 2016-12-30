/**
 * Created by Adnan on 12/30/2016.
 */
function dropDown(foo) {
    var tb1 = document.getElementById("tb1");
    var tb2 = document.getElementById("tb2");

    if(foo == 1) {
        if(tb1.style.display == "none") {
            tb1.style.display = "block";
            tb2.style.display = "none";
        }
        else {
            tb1.style.display = "none";
            tb2.style.display = "none";
        }
    }
    else {
        if(tb2.style.display == "none") {
            tb2.style.display = "block";
            tb1.style.display = "none";
        }
        else {
            tb2.style.display = "none";
            tb1.style.display = "none";
        }
    }
}