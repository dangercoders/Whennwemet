 $(document).ready(function() {
						jQuery.validator.addMethod("lettersonly", function(
								value, element) {
							return this.optional(element)
									|| /^[a-z]+$/i.test(value);
						}, "Please enter only alphabets");

						jQuery.validator.addMethod("nospace", function(value,
								element) {
							return this.optional(element)
									|| /^\S*$/i.test(value);
						}, "Whitespace not allowed");

						jQuery.validator
								.addMethod(
										"pwdregex1",
										function(value, element) {
											return this.optional(element)
													|| /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,20}$/i
															.test(value);
										},
										"Should contain atleast one digit & one special character(! @ # $ % ^ & *)");

						jQuery.validator.addMethod("pwdregex2", function(value,
								element) {
							return this.optional(element)
									|| /^[a-z].{8,20}$/i.test(value);
						}, "Should contain atleast one lowercase letter");

						jQuery.validator.addMethod("letterspacessonly",
								function(value, element) {
									return this.optional(element)
											|| /^[a-zA-Z\s]+$/i.test(value);
								}, "Please enter only alphabets");

						jQuery.validator.addMethod("digitsonly", function(
								value, element) {
							return this.optional(element)
									|| /^[0-9]+$/i.test(value);
						}, "Please enter only digits");

						$("#registerform")
								.validate(
										{
											rules : {
											signupusername: {
													required : true,
													minlength : 1,
													maxlength : 100,
													letterspacessonly : true

												},
												signupemailid: {
													required : true,
													minlength : 6,
													maxlength : 100,
													email : true,
													remote : {
														url : 'http://whennwemet.com/whennwemet/v1/CheckUser',
														type : 'POST',
														data : {
															emailid : function() {
																return $(
																		"#signupemail")
																		.val();
															},
														},
														
													}

												},

												signuppassword: {
													required : true,
													minlength : 8,
													maxlength : 20,
													pwdregex1 : true

												},
												
												signupmobile : {
													digitsonly : true,
													minlength : 4,
													maxlength : 13
												}

												

											},
											messages : {
											signupusername: {
											
													required : "Please enter your Full Name",
													maxlength : "Name should be less than 100",
													minlength : "too small"
												},

												signupemailid: {
													remote : "This email ID is already registered",
													maxlength : "EmailID should be less than 100",
													minlength : "too small"
												},
												
												signuppassword: {
													required : "Please enter password",
													minlength : "Password should be greater than 7 characters",
													maxlength : "Password should be less than 21 characters"
												},
												
												signupmobile : {
													minlength : "Min length is 4",
													maxlength : "Entered number should be less than 14 digits"
												}

												
											}
										});

						window.history.forward();

					});


function register(){
   		var name= document.getElementById("signupusername").value;
   		var emailid = document.getElementById("signupemail").value;
   		var password = document.getElementById("signuppassword").value;
   		var mobile = document.getElementById("signupmobile").value;
   		var array=emailid.split('@');
   		var username= array[0];
   		$.ajax({
    url: 'http://whennwemet.com/whennwemet/v1/CreateUser',
    type: 'POST',
    data: { name: name, username: username,emailid: emailid,password: password,phone: mobile} ,
    contentType: "application/x-www-form-urlencoded",
    dataType: "html",
    beforeSend: function() {
          
       },
    success: function () {
    localStorage.setItem('username', username);
    alert("1");
       window.location.replace('profile/index.php');
    },
    error: function () {
        //$("#loader").show();
        //alert(response);
    }
    }); 
    return false;		

}


function login(){

   		var emailid = document.getElementById("signinemail").value;
   		var password = document.getElementById("signinpassword").value;
   		
   		var array=emailid.split('@');
   		var username= array[0];
   		$.ajax({
    url: 'http://whennwemet.com/whennwemet/v1/UserLogin',
    type: 'POST',
    data: {emailid: emailid,password: password} ,
    contentType: "application/x-www-form-urlencoded",
    dataType: "html",
    beforeSend: function() {
          
       },
    success: function (response) {
    localStorage.setItem('username', username);
    alert(response.error);
       window.location.replace('profile');
    },
    error: function () {
        //$("#loader").show();
        //alert(response);
    }
    }); 
    return false;		
}


function googlelogin(){

   		$.ajax({
    url: 'http://whennwemet.com/googlelogin/google_login.php',
    type: 'POST', 
    contentType: "application/x-www-form-urlencoded",
    dataType: "html",
    beforeSend: function() {
          
       },
    success: function (response) {
    localStorage.setItem('username', username);
    alert(response.error);
       window.location.replace('profile');
    },
    error: function () {
        //$("#loader").show();
        //alert(response);
    }
    }); 
    return false;		
}


