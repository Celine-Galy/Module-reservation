const flightData =document.getElementById('flightData')
const input =document.getElementById('input')


var data = null;
 go()
function go(){

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Typical action to be performed when the document is ready:
            getsVol(JSON.parse(this.responseText))  
        }
    };
    xhttp.open("GET",  "europ.json", true);
    xhttp.send();


function getsVol(vol){
    
    for(let x of vol){
       
        //get the character
        const flights =document.createElement("div");
        flights.classList.add('item')
        flights.innerText= x.city
        flightData.appendChild(flights);  
    }  
}



  input.addEventListener('keyup', () => {
       search();
    });    
function  search(){
    var  filter= input.value.toUpperCase();
 
    var searchDisplay;

    userClass = document.querySelectorAll(".item");
    for (i = 0; i < userClass.length; i++) {
        user = userClass[i];
        searchDisplay =  user.innerText;
        if (searchDisplay.toUpperCase().indexOf(filter) > -1) {
            userClass[i].style.display = "";
        } else {
            userClass[i].style.display = "none";
        }
    }
}};