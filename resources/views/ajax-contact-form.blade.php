<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>CURD Operation laravel without refresh page Using Jquery OR Javascript.</title>
@include('layouts.css')
<!-- google font-->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<div class="s-f-mid-sec">
<div class="container">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="s-f-inner-sec">
<div class="s-f-form-sec">
<form id="myform">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<div class="form-group">
<label>1. First Name <span>*</span></label>
<input type="text" class="form-control" name="firstname" placeholder="Enter full first name of the applicant/ student">
</div>
<!-- form-group-->
<div class="form-group">
<label>2. Last Name <span>*</span></label>
<input type="text" name="secondname" class="form-control" placeholder="Enter surname of the applicant/ student">
</div>
<div class="form-group">
<label>3. Nationality <span>*</span></label>
<select class="form-control" name="nationality">
<option value="indian">Indian</option>
</select>
</div>
<!-- form-group-->
<div class="form-group">
<label>4. Address <span>*</span></label>
<textarea class="form-control" name="address" placeholder="Enter Your address"></textarea>
</div>
<button id="btn-moreqq" class="submit_btnqq">SUBMIT</button>
<p id="display_info"></p>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
<script src="{{ asset('form/form.js')}}"></script>
<script>
$(document).ready(function() {
$(".submit_btnqq").click('#btn-moreqq',function(e){
e.preventDefault();
var _token      = $("input[name='_token']").val();
var firstname   = $("input[name='firstname']").val();
var secondname  = $("input[name='secondname']").val();
var nationality = $("select[name='nationality']").val();
var address     = $("textarea[name='address']").val();
if (firstname == "") {
alert('First Name is Required');
} else if (secondname == "") {
alert('Last Name is Required');
} else if (nationality == "") {
alert('Nationality is Required');
} else if (address == "") {
alert('Address is Required');
} else {
$.ajax({
url: "http://localhost:8001/savedata",
type:'POST',
data: {_token:_token, firstname:firstname, secondname:secondname, nationality:nationality, address:address},
success: function(data) {
$('#btn-moreqq').html("Register");
$('#display_info').html('Successfully Scholarship Form is Submitted.');
$("#myform")[0].reset(); 
}
});
}
}); 
});
</script>