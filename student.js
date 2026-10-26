let students = [];

fetch("student.json")
    .then(response => response.json())
    .then(data => {
        let studentList = document.getElementById("studentList");

        data.forEach(function(student) {
            studentList.innerHTML += `
                <p>
                    Name: ${student.name}<br>
                    Course: ${student.course}
                </p>
                <hr>
            `;
        });
    })
    .catch(error => console.log(error));

    

    function displaystudent(data) {
        let studentlist = document.getElementById("studentlist");
        studentlist.innerHTML = "";

        data.forEach(function(student){
            studentlist.innerHTML += `
            <p>
                Name : ${student.name}<br>
                Course :${student.course}
            </p>
            <hr>
            `;
        });
    }
    let search = document.getElementById("search");

    search.addEventListener("input",function() {
        let value = search.value.toLowerCase();

        let filterstudents = students.filter(function(student){
            return student.name.toLowerCase().includes(value);
        });
        console.log(filterstudents);
    });