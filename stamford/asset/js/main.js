// function myFunction() {
// var name = document.getElementById("name").value;
// var email = document.getElementById("email").value;
// var password = document.getElementById("password").value;
// var contact = document.getElementById("contact").value;
// // Returns successful data submission message when the entered information is stored in database.
// var dataString = 'name1=' + name + '&email1=' + email + '&password1=' + password + '&contact1=' + contact;
// if (name == '' || email == '' || password == '' || contact == '') {
// alert("Please Fill All Fields");
// } else {
// // AJAX code to submit form.
// $.ajax({
// type: "POST",
// url: "ajax.php",
// data: dataString,
// cache: false,
// success: function(html) {
// alert(html);
// }
// });
// }
// return false;
// }

function myFunction() {







	
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","signup.php", true);
  xhttp.send();
}



function signUp() {


var name = document.getElementById("name").value;
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;



	
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question1.php?name=" + name + "&email=" + email + "&id=" + password, true);
  xhttp.send();
}






function myFun2() {




var u = document.mainForm.rads.value;
var id = document.getElementById("stdid").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question2.php?q=" + u + "&id=" + id, true);
  xhttp.send();
}






function myFun3() {



var u = document.mainForm.rads.value;
var id = document.getElementById("stdid").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question3.php?q=" + u + "&id=" + id, true);
  xhttp.send();
}





function myFun4() {



var u = document.mainForm.rads.value;
var id = document.getElementById("stdid").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question4.php?q=" + u + "&id=" + id, true);
  xhttp.send();
}


function myFun5() {



var u = document.mainForm.rads.value;
var id = document.getElementById("stdid").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question5.php?q=" + u + "&id=" + id, true);
  xhttp.send();
}




function myFun6() {



var u = document.mainForm.rads.value;
var id = document.getElementById("stdid").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question6.php?q=" + u + "&id=" + id, true);
  xhttp.send();
}




function myFun7() {



var u = document.mainForm.rads.value;
var id = document.getElementById("stdid").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question7.php?q=" + u + "&id=" + id, true);
  xhttp.send();
}



function myFun8() {



var u = document.getElementById("sel").value;
var id = document.getElementById("stdid").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question8.php?q=" + u + "&id=" + id, true);
  xhttp.send();
}










// choice sector





function myFun9() {



var u = document.mainForm.rads.value;
var id = document.getElementById("stdid").value;

              if (u==1) {

                      var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question9.php?q=" + u + "&id=" + id, true);
  xhttp.send();
                        


              }else if(u==2){


   var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question14.php?q=" + u + "&id=" + id, true);
  xhttp.send();

                
              }else if(u==3){


   var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question15.php?q=" + u + "&id=" + id, true);
  xhttp.send();

                
              }
              else if(u==4){


   var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question16.php?q=" + u + "&id=" + id, true);
  xhttp.send();

                
              }



}


// software dev


function myFun10() {



var u = document.mainForm.rads.value;
var id = document.getElementById("stdid").value;

              if (u==1) {

                      var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question10.php?q=" + u + "&id=" + id, true);
  xhttp.send();
                        


              }
              else if(u==2){

                var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question11.php?q=" + u + "&id=" + id, true);
  xhttp.send();
                  
              }




              else if(u==3){

                var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question12.php?q=" + u + "&id=" + id, true);
  xhttp.send();
                  
              }
  
  else if(u==4){

 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question13.php?q=" + u + "&id=" + id, true);
  xhttp.send();
               


  }
  
}




function myFun11() {



var u = document.mainForm.rads.value;
var id = document.getElementById("stdid").value;

              if (u==1) {

                      var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question17.php?q=" + u + "&id=" + id, true);
  xhttp.send();
                        


              }
              else if(u==2){

                var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question18.php?q=" + u + "&id=" + id, true);
  xhttp.send();
                  
              }
          
  

}

  
  


function myFun12() {



var u = document.mainForm.rads.value;
var id = document.getElementById("stdid").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question19.php?q=" + u + "&id=" + id, true);
  xhttp.send();
}




function myFun13() {



var u = document.mainForm.rads.value;
var id = document.getElementById("stdid").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question191.php?q=" + u + "&id=" + id, true);
  xhttp.send();
}

function myFun14() {



var u = document.mainForm.rads.value;
var id = document.getElementById("stdid").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question192.php?q=" + u + "&id=" + id, true);
  xhttp.send();
}

function myFun15() {



var u = document.mainForm.rads.value;
var id = document.getElementById("stdid").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question193.php?q=" + u + "&id=" + id, true);
  xhttp.send();
}

function myFun16() {



var u = document.mainForm.rads.value;
var id = document.getElementById("stdid").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question194.php?q=" + u + "&id=" + id, true);
  xhttp.send();
}

function myFun17() {



var u = document.mainForm.rads.value;
var id = document.getElementById("stdid").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question195.php?q=" + u + "&id=" + id, true);
  xhttp.send();
}


function myFun18() {



var u = document.mainForm.rads.value;
var id = document.getElementById("stdid").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question196.php?q=" + u + "&id=" + id, true);
  xhttp.send();
}

function myFun19() {



var u = document.mainForm.rads.value;
var id = document.getElementById("stdid").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question197.php?q=" + u + "&id=" + id, true);
  xhttp.send();
}


function myFun100() {



var u = document.mainForm.rads.value;
var id = document.getElementById("stdid").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question20.php?q=" + u + "&id=" + id, true);
  xhttp.send();
}





function myFun20() {



var u = document.mainForm.rads.value;
var id = document.getElementById("stdid").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question21.php?q=" + u + "&id=" + id, true);
  xhttp.send();
}



function myFun21() {



var u = document.mainForm.rads.value;
var id = document.getElementById("stdid").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question22.php?q=" + u + "&id=" + id, true);
  xhttp.send();
}


function myFun22() {



var u = document.mainForm.rads.value;
var id = document.getElementById("stdid").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question23.php?q=" + u + "&id=" + id, true);
  xhttp.send();
}


function myFun23() {



var u = document.getElementById("myTextarea").value;
var id = document.getElementById("stdid").value;
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("question").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","question24.php?q=" + u + "&id=" + id, true);
  xhttp.send();
}
