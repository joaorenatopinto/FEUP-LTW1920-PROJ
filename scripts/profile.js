document.addEventListener('DOMContentLoaded', function() {
    let properties = document.getElementsByClassName('property-card-container');
    let reservations = document.getElementsByClassName('reservation-card-container');

    for(let i = 0; i < properties.length; i++) {
        //properties[i].style.visibility = "hidden";
        properties[i].style.display = "none";
    }
    
    for(let i = 0; i < reservations.length; i++) {
        //reservations[i].style.visibility = "hidden";
        reservations[i].style.display = "none";
    }
});


function profile_show_actions(event) {
    let button = event.target;
    let properties = document.getElementsByClassName('property-card-container');
    let reservations = document.getElementsByClassName('reservation-card-container');

    console.log(properties);
    console.log(reservations);

    if(button.value == "Properties") {
        for(let i = 0; i < properties.length; i++) {
            //properties[i].style.visibility = "visible";
            properties[i].style.display = "inline";
        }
        
        for(let i = 0; i < reservations.length; i++) {
            //reservations[i].style.visibility = "hidden";
            reservations[i].style.display = "none";
        }
    }
    else if(button.value == "Reservations") {
        for(let i = 0; i < properties.length; i++) {
            //properties[i].style.visibility = "hidden";
            properties[i].style.display = "none";
        }
        
        for(let i = 0; i < reservations.length; i++) {
            //reservations[i].style.visibility = "visible";
            reservations[i].style.display = "inline";
        }
    }
}