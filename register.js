$("#submit").click(function() {
var name = $("#name").val();
var email = $("#email").val();
var phone = $("#phone").val();
var password = $("#password").val();
var confirm = $("#confirm").val();
if (name == '' || email == '' || phone == '' || password == '' || confirm == '') {
alert("Some Fields are Blank....!!");
} else {
// Returns successful data submission message when the entered information is stored in database.
$.post("registration.php", {
name: name,
email: email,
phone: phone,
password: password,
confirm: confirm,
}, function(data) {
 $('#success').fadeIn().html(data);
        setTimeout(function() {
          $('#success').fadeOut("slow");
        }, 4000 );
$('#registration').trigger("reset");  // To reset form fields
});
}
});
include('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js');