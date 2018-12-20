$(document).ready(function () {

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

						$("#accountSetForm")
								.validate(
										{
											rules : {
											newPassword: {
													required : true,
													minlength : 8,
													maxlength : 20,
													pwdregex1 : true

												},
												confirmPassword: {
													equalTo : "#newPassword"
													
												}

												
											},
											messages : {
											
												newPassword: {
													required : "Please enter password",
													minlength : "Password should be greater than 7 characters",
													maxlength : "Password should be less than 21 characters"
												}
												
											}
										});

						window.history.forward();
						

						});


