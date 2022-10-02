

$(window).on('load', function() {
  $('#privacyNotice1').modal('show');

  $('#Alert-box').modal('show');
});





function updateDate(){
  var today1 = document.getElementById("date_released").value;
  document.getElementById("getDate_Released").innerHTML = today1;
}







window.setInterval('refresh()', 1);
function refresh() {
  if( document.getElementById("id-signature").files.length == !0 ){
    document.getElementById("btn-signature").style.display = "none";
    document.getElementById("id-signature").style.display = "block";
  }

  if( document.getElementById("id-picture").files.length == !0 ){
    document.getElementById("btn-picture").style.display = "none";
    document.getElementById("id-picture").style.display = "block";
  }
}







function closeOpen(open, close){
  $(close).modal('hide');
  $(open).modal('show');
}

function closeThisModal(close){
  $(close).modal('hide');
}

function openUpload(close){
  if('#guideline-signature4' == close){
    $(close).modal('hide');
    document.getElementById('id-signature').click()
  }

  else if('#guideline-idpicture6' == close){
  $(close).modal('hide');
  document.getElementById('id-picture').click()
  }
}




function sendid(id, name, email) {
  document.getElementById("id").innerHTML = id;
  document.getElementById("name").innerHTML = name;
  document.getElementById("email").innerHTML = email;
}

function sendTransationID(or_number, id_number, first_name, miidle_name, last_name, course, college, blood_type, date_of_birth, present_address,permanent_address, contact_person_name, contact_person_number, status, active) {
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

function OpenModalTran(or_number, id_number, first_name, miidle_name, last_name, blood_type, gender, date_of_birth, mobile_Number, address, course, college, emergency_contact, emergency_mobileNo, emergency_address, file_picture, file_signature){
  document.getElementById("first_name_modal").innerHTML = first_name;
  document.getElementById("miidle_name_modal").innerHTML = miidle_name;
  document.getElementById("last_name_modal").innerHTML = last_name;
  document.getElementById("birthDate_modal").innerHTML = date_of_birth;
  document.getElementById("bloodType_modal").innerHTML = blood_type;
  document.getElementById("gender_modal").innerHTML = gender;
  document.getElementById("mobileNum_modal").innerHTML = mobile_Number;
  document.getElementById("permanentAddress_modal").innerHTML = address;
  document.getElementById("college_modal").innerHTML = college;
  document.getElementById("course_modal").innerHTML = course;
  document.getElementById("contactPersonName_modal").innerHTML = emergency_contact;
  document.getElementById("contactPersonNumber_modal").innerHTML = emergency_mobileNo;
  document.getElementById("contactPersonAddress_modal").innerHTML = emergency_address;

  var pic = document.getElementById(or_number+"table_pic").src; 
  document.getElementById("picture_content").src= pic; 

  var sign = document.getElementById(or_number+"table_sign").src; 
  document.getElementById("signature_content").src= sign; 
}



function OpenModalTranActive(or_number, id_number, first_name, miidle_name, last_name, blood_type, gender, date_of_birth, mobile_Number, address, course, college, emergency_contact, emergency_mobileNo, emergency_address, file_picture, file_signature){
  document.getElementById("first_name_modal").innerHTML = first_name;
  document.getElementById("miidle_name_modal").innerHTML = miidle_name;
  document.getElementById("last_name_modal").innerHTML = last_name;
  document.getElementById("birthDate_modal").innerHTML = date_of_birth;
  document.getElementById("bloodType_modal").innerHTML = blood_type;
  document.getElementById("gender_modal_dashboard_student").innerHTML = gender;
  document.getElementById("mobileNum_modal").innerHTML = mobile_Number;
  document.getElementById("permanentAddress_modal").innerHTML = address;
  document.getElementById("college_modal").innerHTML = college;
  document.getElementById("course_modal").innerHTML = course;
  document.getElementById("contactPersonName_modal").innerHTML = emergency_contact;
  document.getElementById("contactPersonNumber_modal").innerHTML = emergency_mobileNo;
  document.getElementById("contactPersonAddress_modal").innerHTML = emergency_address;

  var pic = document.getElementById(or_number+"table_pic").src; 
  document.getElementById("picture_content_active").src= pic; 

  var sign = document.getElementById(or_number+"table_sign").src; 
  document.getElementById("signature_content_active").src= sign; 
}

function EditActive(or_number, id_number, first_name, miidle_name, last_name, blood_type, gender, date_of_birth, mobile_Number, address, course, college, emergency_contact, emergency_mobileNo, emergency_address, file_picture, file_signature){
  document.getElementById("or_number_editModal").value = or_number;
  document.getElementById("studentnumber_editModal").value = id_number;
  document.getElementById("first_name_editModal").value = first_name;
  document.getElementById("middle_name_editModal").value = miidle_name;
  document.getElementById("last_name_editModal").value = last_name;
  document.getElementById("blood_type_editModal").value = blood_type;
  document.getElementById("gender_modal_editModal").value = gender;
  document.getElementById("modal_datebirth_editModal").value = date_of_birth;
  document.getElementById("mobile_number_editModal").value = mobile_Number;
  document.getElementById("address_editModal").value = address;
  document.getElementById("program_editModal").value = course;
  document.getElementById("college_editModal").value = college;
  document.getElementById("contact_person_name_editModal").value = emergency_contact;
  document.getElementById("contact_person_number_editModal").value = emergency_mobileNo;
  document.getElementById("contact_person_address_editModal").value = emergency_address;

  var pic = document.getElementById(or_number+"table_pic").src; 
  document.getElementById("picture_content_editModal").src= pic; 

  var sign = document.getElementById(or_number+"table_sign").src; 
  document.getElementById("signature_content_editModal").src= sign; 
}

function EditData(){
  var firstname = document.getElementById("firstname").value;
  var middlename = document.getElementById("middlename").value;
  var lastname = document.getElementById("lastname").value;
  var bloodtype = document.getElementById("bloodtype").value;
  var gender = document.getElementById("gender").value;
  var date_birth = document.getElementById("date_birth").value;
  var mobileNumber = document.getElementById("mobileNumber").value;
  var perm_address = document.getElementById("perm_address").value;
  var prog_name = document.getElementById("prog_name").value;
  var collegeName = document.getElementById("collegeName").value;
  var emergency_contact = document.getElementById("emergency_contact").value;
  var emergency_mobileNo = document.getElementById("emergency_mobileNo").value;
  var emergency_address = document.getElementById("emergency_address").value;


  document.getElementById("first_name").value = firstname;
  document.getElementById("middle_name").value = middlename;
  document.getElementById("last_name").value = lastname;
  document.getElementById("blood_type").value = bloodtype;
  document.getElementById("gender_modal").value = gender;
  document.getElementById("modal_datebirth").value = date_birth;
  document.getElementById("mobile_number").value = mobileNumber;
  document.getElementById("address").value = perm_address;
  document.getElementById("program").value = prog_name;
  document.getElementById("college").value = collegeName;
  document.getElementById("contact_person_name").value = emergency_contact;
  document.getElementById("contact_person_number").value = emergency_mobileNo;
  document.getElementById("contact_person_address").value = emergency_address;
}



function passData(){
  var blood_type = document.getElementById("blood_type").value;
  var mobile_number = document.getElementById("mobile_number").value;
  var address = document.getElementById("address").value;
  var contact_person_name = document.getElementById("contact_person_name").value;
  var contact_person_number = document.getElementById("contact_person_number").value;
  var contact_person_address = document.getElementById("contact_person_address").value;


  document.getElementById("bloodtype").value = blood_type;
  document.getElementById("mobileNumber").value = mobile_number;
  document.getElementById("perm_address").value = address;
  document.getElementById("emergency_contact").value = contact_person_name;
  document.getElementById("emergency_mobileNo").value = contact_person_number;
  document.getElementById("emergency_address").value = contact_person_address;
}

// function printDiv() 
// {

//   var divToPrint=document.getElementById('id_card_front');
//   var newWin=window.open('','Print-Window');
//   newWin.document.open();
//   newWin.document.write('<html><body style="width:100px;" onload="window.print()">'+divToPrint.innerHTML+'</body></html>');
//   newWin.document.close();
//   setTimeout(function(){newWin.close();},10);

// }


var today = new Date();
if((today.getMonth()+1) < 10){
  var date = today.getFullYear()+'-0'+(today.getMonth()+1)+'-'+today.getDate();
}
else if(today.getDate() < 10){
  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-0'+today.getDate();
}
else if(today.getDate() < 10 && ((today.getMonth()+1)) < 10){
  var date = today.getFullYear()+'-0'+(today.getMonth()+1)+'-0'+today.getDate();
}
else
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();


function printCanvas()  
{  
    var dataUrl = document.getElementById('anycanvas').toDataURL(); //attempt to save base64 string to server using this var  
    var windowContent = '<!DOCTYPE html>';
    windowContent += '<html>'
    windowContent += '<head><title>Print canvas</title></head>';
    windowContent += '<body>'
    windowContent += '<img src="' + dataUrl + '">';
    windowContent += '</body>';
    windowContent += '</html>';
    var printWin = window.open('','','width=340,height=260');
    printWin.document.open();
    printWin.document.write(windowContent);
    printWin.document.close();
    printWin.focus();
    printWin.print();
    printWin.close();
}

document.getElementById("date_released").value = date;
document.getElementById("getDate_Released").innerHTML = date;


  

  


  
