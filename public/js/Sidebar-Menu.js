$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $(".wrapper").toggleClass("toggled");
});



function sendid(id, name, email) {
    document.getElementById("id").innerHTML = id;
    document.getElementById("name").innerHTML = name;
    document.getElementById("email").innerHTML = email;
  }

  function sendTransationID(id, or_number, id_number, name, course, college, blood_type, date_of_birth, present_address,permanent_address, contact_person_name, contact_person_number, status, active) {
    document.getElementById("id").innerHTML = id;
    document.getElementById("orNumber").innerHTML = or_number;
    document.getElementById("idNumber").innerHTML = id_number;
    document.getElementById("Name").innerHTML = name;
    document.getElementById("course").innerHTML = course;
    document.getElementById("college").innerHTML = college;
    document.getElementById("bloodType").innerHTML = blood_type;
    document.getElementById("birthDate").innerHTML = date_of_birth;
    document.getElementById("presentAddress").innerHTML = present_address;
    document.getElementById("permanentAddress").innerHTML = permanent_address;
    document.getElementById("contactPersonName").innerHTML = contact_person_name;
    document.getElementById("contactPersonNumber").innerHTML = contact_person_number;
    document.getElementById("status").innerHTML = status;
    document.getElementById("active").innerHTML = active;
  }