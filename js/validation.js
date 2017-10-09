$(document).ready(function(){
  $("#myForm").on("submit",function(){
	var val_fname=/^[^&]{3,30}$/;
    var val_lname=/^[^&]{1,30}$/;
    var val_pcode=/^[0-9]{5,6}$/;
	var val_phone= /^[0-9]{9,12}$/;
    var val_userid= /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
    var val_pword= /^[^&]{6,30}$/;
    
	$firstname= $('#first_name').val();
    $lastname= $('#last_name').val();
    $pincode= $('#pincode').val();
    $phone= $('#mobile').val();
    $userid= $('#userid').val();
    $password =$("#password").val();

    if (!val_fname.test($firstname)) {
      $("#first_name").focus();
      alert("enter firstname");
      return false;
	}
	 else if (!val_lname.test($lastname)) {
      $("#last_name").focus();
      alert("enter lastname");
      return false;
	 }
	 else if (!val_pcode.test($pincode)) {
      $("#pincode").focus();
      alert("invalid pincode");
      return false;
    }
	else if (!val_phone.test($phone)) {
      $("#mobile").focus();
      alert("enter 10 numbers");
      return false;
    }
	else if(!val_userid.test($userid)){
      $("#userid").focus();
      alert("invalid userid");
      return false;
    }
    else if (!val_pword.test($password)) {
      $("#password").focus();
      alert("invalid password");
      return false;
    }
    else{
      return true;
    }
  });
})
