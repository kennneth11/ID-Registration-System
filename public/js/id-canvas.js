const or_number = document.getElementById("or_number");
const id_number = document.getElementById("id_number");
const first_middle_name = document.getElementById("first_middle_name");
const last_name = document.getElementById("last_name");
const blood_type = document.getElementById("blood_type");
const gender = document.getElementById("gender");
const date_of_birth = document.getElementById("date_of_birth");
const mobile_Number = document.getElementById("mobile_Number");
const address = document.getElementById("address");
const course = document.getElementById("course");
const college = document.getElementById("college");
const emergency_contact = document.getElementById("emergency_contact");
const emergency_mobileNo = document.getElementById("emergency_mobileNo");
const emergency_address = document.getElementById("emergency_address");





var d = document.getElementById("getDate_Released").innerHTML;
var td = new Date(d);
var newD = (td.getMonth()+1)+'/'+td.getDate()+'/'+td.getFullYear();



 


    const canvas1 = document.getElementById("canvas_front");
    canvas1.height = (canvas1.width * 1.544615384615385);

    const canvas2 = document.getElementById("canvas_back");
    canvas2.height = (canvas1.width * 1.544615384615385);


    // const ctx = canvas1.getContext("2d");

    // var id_pic = document.getElementById("id_pic");
    // ctx.drawImage(id_pic, 100, 100,50,50);

    // ctx.fillStyle = "#fff";
    // ctx.textAlign = "center";
    // ctx.font = "20px Lato";
    // ctx.fillText(first_middle_name.innerHTML.toUpperCase(), 150, 320);
    // ctx.font = "30px Lato ";
    // ctx.fillText(last_name.innerHTML.toUpperCase(), 150, 350);
    // ctx.font = "14px Lato black";
    // ctx.fillText(course.innerHTML.replace("Bachelor of Science in", "BS").toUpperCase(), 150, 375);
    // ctx.font = "10px Lato";
    // ctx.fillText(college.innerHTML.toUpperCase(), 150, 388);

    // ctx.fillStyle = "#000";
    // ctx.textAlign = "right";
    // ctx.font = "15px Lato";
    // ctx.fillText(id_number.innerHTML.toUpperCase(), 220, 447);



    // const ctx2 = canvas2.getContext("2d");
    // ctx2.fillStyle = "#000";
    // ctx2.textAlign = "center";
    // ctx2.font = " 10px Lato Black";
    // ctx2.fillText(emergency_contact.innerHTML.toUpperCase(), 150, 50);
    // ctx2.font = " 9px Lato";
    // ctx2.fillText(emergency_address.innerHTML.toUpperCase(), 150, 68);

    // ctx2.textAlign = "start";
    // ctx2.fillText(emergency_mobileNo.innerHTML.toUpperCase(), -38, 89);
    // ctx2.fillText(date_of_birth.innerHTML.toUpperCase(), -8, 121);
    // ctx2.fillText(blood_type.innerHTML.toUpperCase(), 145, 121);
    // ctx2.fillText(address.innerHTML.toUpperCase(), -8, 140);

    // var d = document.getElementById("getDate_Released").innerHTML;
    // var td = new Date(d);
    // var newD = (td.getMonth()+1)+'/'+td.getDate()+'/'+td.getFullYear();

    // ctx2.fillStyle = "#fff";
    // ctx2.fillText(newD, 185, 443);


  $("#setToID").bind("click", function() {
    loadID();
  });

  $("#modal_idSet").bind("click", function() {
    loadID();
  });

  function loadID(){

    const canvas1 = document.getElementById("canvas_front");
    canvas1.height = (canvas1.width * 1.544615384615385);

    const canvas2 = document.getElementById("canvas_back");
    canvas2.height = (canvas1.width * 1.544615384615385);

    


    const ctx = canvas1.getContext("2d");

    var id_pic = document.getElementById("id_pic");
    ctx.drawImage(id_pic, 91, 96,124,159);

    var id_sign = document.getElementById("id_sign");
    ctx.drawImage(id_sign, 103, 258,100,40);

    ctx.fillStyle = "#fff";
    ctx.textAlign = "center";
    ctx.font = "20px Lato Black";
    ctx.fillText(first_middle_name.innerHTML.toUpperCase(), 150, 320);
    ctx.font = "30px Lato Black";
    ctx.fillText(last_name.innerHTML.toUpperCase(), 150, 350);
    ctx.font = "14px Lato black";
    ctx.fillText(course.innerHTML.replace("Bachelor of Science in", "BS").toUpperCase(), 150, 375);
    ctx.font = "10px Lato";
    ctx.fillText(college.innerHTML.toUpperCase(), 150, 388);

    ctx.fillStyle = "#000";
    ctx.textAlign = "right";
    ctx.font = "13px Lato black";
    ctx.fillText(id_number.innerHTML.toUpperCase(), 193, 447);



    const ctx2 = canvas2.getContext("2d");

    ctx2.fillStyle = "#000";
    ctx2.textAlign = "center";
    ctx2.font = " 10px Lato Black";
    ctx2.fillText(emergency_contact.innerHTML.toUpperCase(), 150, 50);
    ctx2.font = " 9px Lato";
    ctx2.fillText(emergency_address.innerHTML.toUpperCase(), 150, 68);

    ctx2.textAlign = "start";
    ctx2.fillText(emergency_mobileNo.innerHTML.toUpperCase(), -38, 89);
    ctx2.fillText(date_of_birth.innerHTML.toUpperCase(), -8, 121);
    ctx2.fillText(blood_type.innerHTML.toUpperCase(), 145, 121);
    ctx2.fillText(address.innerHTML.toUpperCase(), -8, 140);

    var d = document.getElementById("getDate_Released").innerHTML;
    var td = new Date(d);
    var newD = (td.getMonth()+1)+'/'+td.getDate()+'/'+td.getFullYear();

    ctx2.fillStyle = "#fff";
    ctx2.fillText(newD, 185, 443);
  }

function getPDF(){

		var HTML_Width = $(".canvas_div_pdf").width();
		var HTML_Height = $(".canvas_div_pdf").height();
		var top_left_margin = 0;
		var PDF_Width = HTML_Width;
		var PDF_Height = HTML_Height;
		var canvas_image_width = HTML_Width;
		var canvas_image_height = HTML_Height;
		
		var totalPDFPages = Math.ceil(HTML_Height/PDF_Height)-1;
		

		html2canvas($(".canvas_div_pdf")[0],{allowTaint:true}).then(function(canvas) {
			canvas.getContext('2d');
			
			console.log(canvas.height+"  "+canvas.width);
			
			
			var imgData = canvas.toDataURL("image/jpeg", 1.0);
			var pdf = new jsPDF('p', 'pt',  [PDF_Width, PDF_Height]);
		    pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin,canvas_image_width,canvas_image_height);
			
			
			for (var i = 1; i <= totalPDFPages; i++) { 
				pdf.addPage(PDF_Width, PDF_Height);
				pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
			}
			
		    pdf.save("HTML-Document.pdf");
        // let objFra = document.getElementById('myFrame');
        // objFra.contentWindow.focus();
        // objFra.contentWindow.print();
    });
	}


  function samp(){
    var HTML_Width = $(".canvas_div_pdf").width();
		var HTML_Height = $(".canvas_div_pdf").height();
		var top_left_margin = 0;
		var PDF_Width = HTML_Width;
		var PDF_Height = HTML_Height;
		var canvas_image_width = HTML_Width;
		var canvas_image_height = HTML_Height;
		
		var totalPDFPages = Math.ceil(HTML_Height/PDF_Height)-1;
		

		html2canvas($(".canvas_div_pdf")[0],{allowTaint:true}).then(function(canvas) {
			canvas.getContext('2d');
			
			console.log(canvas.height+"  "+canvas.width);
			
			
			var imgData = canvas.toDataURL("image/jpeg", 1.0);
			var pdf = new jsPDF('p', 'pt',  [PDF_Width, PDF_Height]);
		    pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin,canvas_image_width,canvas_image_height);
			
			
			for (var i = 1; i <= totalPDFPages; i++) { 
				pdf.addPage(PDF_Width, PDF_Height);
				pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
			}
			
		    pdf.save("HTML-Document.pdf");

    });
  }



  
