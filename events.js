let events = [];

fetch("events.json")
    .then(response => response.json())
    .then(data => {
        events = data;
        displayevents(events);
    });

function displayevents(data) {

    let eventlist = document.getElementById("eventlist");

    eventlist.innerHTML = "";

    data.forEach(function(event) {

        eventlist.innerHTML += `
            <div class="event-card">

                <h3>${event.name}</h3>

                <p><b>Department:</b> ${event.department}</p>

                <p><b>Date:</b> ${event.date}</p>

                <p><b>Venue:</b> ${event.venue}</p>

                <p>${event.description}</p>

            </div>
        `;
    });
}


document.getElementById("search").addEventListener("input", filterevents);

document.getElementById("department").addEventListener("change", filterevents);


function filterevents() {

    let searchvalue = document.getElementById("search").value.toLowerCase();

    let departmentvalue = document.getElementById("department").value;

    let filtered = events.filter(function(event) {

        let matchessearch =
            event.name.toLowerCase().includes(searchvalue);

        let matchesdepartment =
            departmentvalue === "all" ||
            event.department === departmentvalue;

        return matchessearch && matchesdepartment;
    });

    displayevents(filtered);
}