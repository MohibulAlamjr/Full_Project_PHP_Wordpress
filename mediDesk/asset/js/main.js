

	$(document).ready(function(){

$('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("medicinesearch.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result td", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });









$("#submit").click(function(){
var nameid =$("#gid").val();
 var name =$("#val").val();
 name=name+","+nameid;

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1='+ name;

if(name=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "test.php",
data: dataString,
cache: false,
success: function(result){

$('#show').html(result);

}
});
}
return false;
});




$("#submit1").click(function(){
var nameid =$("#gid").val();
 var name =$("#val2").val();
 name=name+","+nameid;

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1='+ name;

if(name=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "test1.php",
data: dataString,
cache: false,
success: function(result){

$('#show1').html(result);

}
});
}
return false;
});







$("#submit2").click(function(){

 var name =$("#pid").val();
 

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1='+ name;

if(name=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "test2.php",
data: dataString,
cache: false,
success: function(result){

$('#show2').html(result);

}
});
}
return false;
});



// stat





$("#submit4").click(function(){

 var name =$("#ccod").val();
 

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1='+ name;

if(name=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "companystat.php",
data: dataString,
cache: false,
success: function(result){

$('#show2').html(result);

}
});
}
return false;
});











});







