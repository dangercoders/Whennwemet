<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt"%>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description"
	content="TCS CodeVita, a programming contest, is TCS' way of attracting young impressionable college students to adopt this culture and experience joy of programming.">
<meta name="keywords"
	content="Algorithm, Programming Contest, TCS CodeVita, CV, CV15">
<meta name="author" content="TCS CodeVita Team">
<title>TCS: CodeVita - Register</title>
<link rel="stylesheet"
	href="/CodevitaV6/css/registration/registration.css" type="text/css" />
<link rel="stylesheet" href="/CodevitaV6/css/registration/style.css"
	type="text/css" />
<link rel="stylesheet" href="/CodevitaV6/css/registration/structure.css"
	type="text/css" />
<link rel="stylesheet" href="/CodevitaV6/css/registration/form.css"
	type="text/css" />
<script src="/CodevitaV6/JS/registration/jquery1.9.js"></script>
<script type="text/javascript"
	src="/CodevitaV6/JS/registration/jquery.validate.js"></script>
<SCRIPT type="text/javascript">
	window.history.forward();
	function noBack() {
		window.history.forward();
	}
</SCRIPT>

<style>
.gradientbg {
	background: linear-gradient(white, #c1e9f4);
	min-height: 970px;
	width: 978px;
}

.firstdiv {
	height: 100%;
	width: 60%;
	float: left;
}

.seconddiv {
	height: 100%;
	float: right;
	width: 40%;
	position: relative;
	background:
		url(/CodevitaV6/images/CodeVita-Forgot-Password-Screen-Code.png);
}

label.error {
	color: red;
	font-size: 10px;
	font-style: normal;
	display: block;
}

input {
	border-radius: 3px;
}

input[type=button] {
	background:
		url(/CodevitaV6/images/CodeVita-Registration-Form-Back-Button.png);
	border: 0;
	height: 52px;
	width: 100px;
	background-repeat: no-repeat;
	cursor: pointer;
	background-position-y: 9px;
	background-position-x: 20px;
}

.errortandc {
	font-size: 20px;
	text-align: center;
	color: red;
	margin: 20px;
}
</style>
</head>

<body onload="noBack();">
	<table border="0" style="margin: 0 auto; height: 500px;">
		<tr>
			<td height="1px"></td>
		</tr>
		<tr>
			<td>
				<div>
					<div class="links">

						<table class="innerlinks" border="0">
							<tr>

								<td><a
									class="upperlinks" href="http://www.careers.tcs.com"
									target="_blank">TCS Careers</a>&nbsp&nbsp&nbsp <a
									class="upperlinks" href="http://www.tcs.com/Pages/default.aspx"
									target="_blank">www.tcs.com</a>&nbsp&nbsp&nbsp<br></td>
							</tr>
						</table>
					</div>
					<div class="tcsclip">
						<img border="0" src="/CodevitaV6/images/header.jpg" width="978px"
							height="115px">
					</div>

					<div class="gradientbg">
						<div class="firstdiv" style="height: 900px">
							<div id="formdiv2"
								style="width: 90%; height: 85%; margin-left: 30px; margin-top: 30px; background-color: white; padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 30px;">
								<p
									style="font-family: Rockwell; font-size: 18px; color: #960000; line-height: 14px;">Registration
									Form</p>
								<form id="registerform" action="/CodevitaV6/CreateUserServlet"
									method="post">

									<table width=100%
										style="padding-top: 0px; font-size: 12px; line-height: 20px;"
										cellspacing="10">
										<tr>
											<td style="height: 20px; width: 40%"><label for="name"
												id="labelcolor" style="font-size: 12px;">Full Name <font
													color="red">*</font> :
											</label></td>

											<td style="height: 20px; width: 60%"><input
												style="width: 100%;" id="name" name="name"
												placeholder="First name Last name" required="" type="text"
												onpaste="return false" autocomplete="off"></td>
										</tr>

										<tr>
											<td style="height: 20px;"><label for="name"
												id="labelcolor" style="font-size: 12px;">Email<font
													color="red">*</font> :
											</label></td>

											<td style="height: 20px;"><input style="width: 100%;"
												id="email" name="email"
												placeholder="firstname.lastname@institute.org" required=""
												type="email" onpaste="return false" autocomplete="off"></td>
										</tr>
										<tr>
											<td style="height: 20px;"><label for="name"
												id="labelcolor" style="font-size: 12px;">Create a
													password<font color="red">*</font> :
											</label></td>

											<td style="height: 20px;"><input style="width: 100%;"
												type="password" id="password" name="password"
												onpaste="return false" autocomplete="off"></td>
										</tr>
										<tr>
											<td colspan="2"><em
												style="color: grey; font-size: 10px;">Advised to have -
													1-Upper, 1-Lower, 1-Special(! @ # $ % ^ & *) and 1-Digit.
													Min. length - 8 Characters, Max. length - 20 Characters</em></td>
										</tr>
										<tr>
											<td style="height: 20px;"><label for="name"
												id="labelcolor" style="font-size: 12px;">Confirm
													your password<font color="red">*</font> :
											</label></td>

											<td style="height: 20px;"><input style="width: 100%;"
												type="password" id="repassword" name="repassword"
												onpaste="return false" autocomplete="off"></td>
										</tr>
										<tr>
											<td style="height: 20px;"><label for="name"
												id="labelcolor" style="font-size: 12px;"
												data-toggle="tooltip" data-placement="right"
												title="Country of Educational Institute">Country<font
													color="red">*</font> :
											</label></td>

											<td style="height: 20px;"><select name="countrycode"
												id="countrycode" data-toggle="tooltip"
												data-placement="right"
												title="Country of Educational Institute"
												onchange="changeTandC()">

													<option value="">Select</option>
													<option value="213-Algeria">Algeria</option>
													<option value="376-Andorra">Andorra</option>
													<option value="244-Angola">Angola</option>
													<option value="1264-Anguilla">Anguilla</option>
													<option value="1268-Antigua & Barbuda">Antigua &
														Barbuda</option>
													<option value="54-Argentina">Argentina</option>
													<option value="374-Armenia">Armenia</option>
													<option value="297-Aruba">Aruba</option>
													<option value="61-Australia">Australia</option>
													<option value="43-Austria">Austria</option>
													<option value="994-Azerbaijan">Azerbaijan</option>
													<option value="1242-Bahamas">Bahamas</option>
													<!-- <option value="973-Bahrain">Bahrain</option> -->
													<option value="880-Bangladesh">Bangladesh</option>
													<option value="1246-Barbados">Barbados</option>
													<option value="375-Belarus">Belarus</option>
													<option value="32-Belgium">Belgium</option>
													<option value="501-Belize">Belize</option>
													<option value="229-Benin">Benin</option>
													<option value="1441-Bermuda">Bermuda</option>
													<option value="975-Bhutan">Bhutan</option>
													<option value="591-Bolivia">Bolivia</option>
													<option value="387-Bosnia Herzegovina">Bosnia
														Herzegovina</option>
													<option value="267-Botswana">Botswana</option>
													<option value="55-Brazil">Brazil</option>
													<option value="673-Brunei">Brunei</option>
													<option value="359-Bulgaria">Bulgaria</option>
													<option value="226-Burkina Faso">Burkina Faso</option>
													<option value="257-Burundi">Burundi</option>
													<option value="855-Cambodia">Cambodia</option>
													<option value="237-Cameroon">Cameroon</option>
													<!-- <option value="1-Canada">Canada</option> -->
													<option value="238-Cape Verde Islands">Cape Verde
														Islands</option>
													<option value="1345-Cayman Islands">Cayman Islands</option>
													<option value="236-Central African Republic">Central
														African Republic</option>
													<option value="56-Chile">Chile</option>
													<option value="86-China">China</option>
													<option value="57-Colombia">Colombia</option>
													<option value="269-Comoros">Comoros</option>
													<option value="242-Congo">Congo</option>
													<option value="682-Cook Islands">Cook Islands</option>
													<option value="506-Costa Rica">Costa Rica</option>
													<option value="385-Croatia">Croatia</option>
													<option value="53-Cuba">Cuba</option>
													<option value="90392-Cyprus North">Cyprus North</option>
													<option value="357-Cyprus South">Cyprus South</option>
													<option value="42-Czech Republic">Czech Republic</option>
													<option value="45-Denmark">Denmark</option>
													<option value="253-Djibouti">Djibouti</option>
													<option value="1809-Dominica">Dominica</option>
													<option value="1809-Dominican Republic">Dominican
														Republic</option>
													<option value="593-Ecuador">Ecuador</option>
													<option value="20-Egypt">Egypt</option>
													<option value="503-El Salvador">El Salvador</option>
													<option value="240-Equatorial Guinea">Equatorial
														Guinea</option>
													<option value="291-Eritrea">Eritrea</option>
													<option value="372-Estonia">Estonia</option>
													<option value="251-Ethiopia">Ethiopia</option>
													<option value="500-Falkland Islands">Falkland
														Islands</option>
													<option value="298-Faroe Islands">Faroe Islands</option>
													<option value="679-Fiji">Fiji</option>
													<option value="358-Finland">Finland</option>
													<option value="33-France">France</option>
													<option value="594-French Guiana">French Guiana</option>
													<option value="689-French Polynesia">French
														Polynesia</option>
													<option value="241-Gabon">Gabon</option>
													<option value="220-Gambia">Gambia</option>
													<option value="7880-Georgia">Georgia</option>
													<option value="49-Germany">Germany</option>
													<option value="233-Ghana">Ghana</option>
													<option value="350-Gibraltar">Gibraltar</option>
													<option value="30-Greece">Greece</option>
													<option value="299-Greenland">Greenland</option>
													<option value="1473-Grenada">Grenada</option>
													<option value="590-Guadeloupe">Guadeloupe</option>
													<option value="671-Guam">Guam</option>
													<option value="502-Guatemala">Guatemala</option>
													<option value="224-Guinea">Guinea</option>
													<option value="245-Guinea - Bissau">Guinea -
														Bissau</option>
													<option value="592-Guyana">Guyana</option>
													<option value="509-Haiti">Haiti</option>
													<option value="504-Honduras">Honduras</option>
													<option value="852-Hong Kong">Hong Kong</option>
													<option value="36-Hungary">Hungary</option>
													<option value="354-Iceland">Iceland</option>
													<option value="62-Indonesia">Indonesia</option>
													<option value="98-Iran">Iran</option>
													<option value="964-Iraq">Iraq</option>
													<option value="353-Ireland">Ireland</option>
													<!-- <option value="972-Israel">Israel</option> -->
													<option value="39-Italy">Italy</option>
													<option value="1876-Jamaica">Jamaica</option>
													<option value="81-Japan">Japan</option>
													<option value="962-Jordan">Jordan</option>
													<option value="7-Kazakhstan">Kazakhstan</option>
													<option value="254-Kenya">Kenya</option>
													<option value="686-Kiribati">Kiribati</option>
													<option value="850-Korea North">Korea North</option>
													<option value="82-Korea South">Korea South</option>
													<!-- <option value="965-Kuwait">Kuwait</option> -->
													<option value="996-Kyrgyzstan">Kyrgyzstan</option>
													<option value="856-Laos">Laos</option>
													<option value="371-Latvia">Latvia</option>
													<option value="961-Lebanon">Lebanon</option>
													<option value="266-Lesotho">Lesotho</option>
													<option value="231-Liberia">Liberia</option>
													<option value="218-Libya">Libya</option>
													<option value="417-Liechtenstein">Liechtenstein</option>
													<option value="370-Lithuania">Lithuania</option>
													<option value="352-Luxembourg">Luxembourg</option>
													<option value="853-Macao">Macao</option>
													<option value="389-Macedonia">Macedonia</option>
													<option value="261-Madagascar">Madagascar</option>
													<option value="265-Malawi">Malawi</option>
													<option value="60-Malaysia">Malaysia</option>
													<option value="960-Maldives">Maldives</option>
													<option value="223-Mali">Mali</option>
													<option value="356-Malta">Malta</option>
													<option value="692-Marshall Islands">Marshall
														Islands</option>
													<option value="596-Martinique">Martinique</option>
													<option value="222-Mauritania">Mauritania</option>
													<option value="269-Mayotte">Mayotte</option>
													<option value="52-Mexico">Mexico</option>
													<option value="691-Micronesia">Micronesia</option>
													<option value="373-Moldova">Moldova</option>
													<option value="377-Monaco">Monaco</option>
													<option value="976-Mongolia">Mongolia</option>
													<option value="1664-Montserrat">Montserrat</option>
													<option value="212-Morocco">Morocco</option>
													<option value="258-Mozambique">Mozambique</option>
													<option value="95-Myanmar">Myanmar</option>
													<option value="264-Namibia">Namibia</option>
													<option value="674-Nauru">Nauru</option>
													<option value="977-Nepal">Nepal</option>
													<option value="31-Netherlands">Netherlands</option>
													<option value="687-New Caledonia">New Caledonia</option>
													<option value="64-New Zealand">New Zealand</option>
													<option value="505-Nicaragua">Nicaragua</option>
													<option value="227-Niger">Niger</option>
													<option value="234-Nigeria">Nigeria</option>
													<option value="683-Niue">Niue</option>
													<option value="672-Norfolk Islands">Norfolk
														Islands</option>
													<option value="670-Northern Marianas">Northern
														Marianas</option>
													<option value="47-Norway">Norway</option>
													<!-- <option value="968-Oman">Oman</option> -->
													<option value="680-Palau">Palau</option>
													<option value="507-Panama">Panama</option>
													<option value="675-Papua New Guinea">Papua New
														Guinea</option>
													<option value="595-Paraguay">Paraguay</option>
													<option value="51-Peru">Peru</option>
													<option value="63-Philippines">Philippines</option>
													<option value="48-Poland">Poland</option>
													<option value="351-Portugal">Portugal</option>
													<option value="1787-Puerto Rico">Puerto Rico</option>
													<!-- <option value="974-Qatar">Qatar</option> -->
													<option value="262-Reunion">Reunion</option>
													<option value="40-Romania">Romania</option>
													<option value="7-Russia">Russia</option>
													<option value="250-Rwanda">Rwanda</option>
													<option value="378-San Marino">San Marino</option>
													<option value="239-Sao Tome &amp; Principe">Sao
														Tome &amp; Principe</option>
													<!-- <option value="966-Saudi Arabia">Saudi Arabia</option> -->
													<option value="221-Senegal">Senegal</option>
													<option value="381-Serbia">Serbia</option>
													<option value="248-Seychelles">Seychelles</option>
													<option value="232-Sierra Leone">Sierra Leone</option>
													<option value="65-Singapore">Singapore</option>
													<option value="421-Slovak Republic">Slovak
														Republic</option>
													<option value="386-Slovenia">Slovenia</option>
													<option value="677-Solomon Islands">Solomon
														Islands</option>
													<option value="252-Somalia">Somalia</option>
													<option value="27-South Africa">South Africa</option>
													<option value="34-Spain">Spain</option>
													<option value="94-Sri Lanka">Sri Lanka</option>
													<option value="290-St. Helena">St. Helena</option>
													<option value="1869-St. Kitts">St. Kitts</option>
													<option value="1758-St. Lucia">St. Lucia</option>
													<option value="249-Sudan">Sudan</option>
													<option value="597-Suriname">Suriname</option>
													<option value="268-Swaziland">Swaziland</option>
													<option value="46-Sweden">Sweden</option>
													<option value="41-Switzerland">Switzerland</option>
													<option value="963-Syria">Syria</option>
													<option value="886-Taiwan">Taiwan</option>
													<option value="7-Tajikstan">Tajikstan</option>
													<option value="66-Thailand">Thailand</option>
													<option value="228-Togo">Togo</option>
													<option value="676-Tonga">Tonga</option>
													<option value="1868-Trinidad &amp; Tobago">Trinidad
														&amp; Tobago</option>
													<option value="216-Tunisia">Tunisia</option>
													<option value="90-Turkey">Turkey</option>
													<option value="7-Turkmenistan">Turkmenistan</option>
													<option value="993-Turkmenistan">Turkmenistan</option>
													<option value="1649-Turks &amp; Caicos Islands">Turks
														&amp; Caicos Islands</option>
													<option value="688-Tuvalu">Tuvalu</option>
													<option value="256-Uganda">Uganda</option>
													<!-- <option value="44-UK">UK</option> -->
													<option value="380-Ukraine">Ukraine</option>
													<!-- <option value="971-United Arab Emirates">United
														Arab Emirates</option> -->
													<option value="598-Uruguay">Uruguay</option>
													<!-- <option value="1-USA">USA</option> -->
													<option value="7-Uzbekistan">Uzbekistan</option>
													<option value="678-Vanuatu">Vanuatu</option>
													<option value="379-Vatican City">Vatican City</option>
													<option value="58-Venezuela">Venezuela</option>
													<option value="84-Vietnam">Vietnam</option>
													<option value="84-Virgin Islands - British">Virgin
														Islands - British</option>
													<option value="84-Virgin Islands - US">Virgin
														Islands - US</option>
													<option value="681-Wallis & Futuna">Wallis &
														Futuna</option>
													<option value="969-Yemen North">Yemen North</option>
													<option value="967-Yemen South">Yemen South</option>
													<option value="260-Zambia">Zambia</option>
													<option value="263-Zimbabwe">Zimbabwe</option>

											</select></td>
										</tr>
										<tr>
											<td style="height: 20px;"><label for="name"
												id="labelcolor" style="font-size: 12px;">Educational
													Institute<font color="red">*</font> :
											</label></td>

											<td style="height: 20px;"><input style="width: 100%;"
												id="college" name="college" required="" type="text"
												autocomplete="off"></td>
										</tr>

										<tr>
											<td style="height: 20px;"><label for="name"
												id="labelcolor" style="font-size: 12px;">Contact
													Number : </label></td>

											<td style="height: 20px;"><input style="width: 100%;"
												id="contactnumber" name="contactnumber" type="text"
												autocomplete="off"></td>
										</tr>
										<tr>
											<td colspan="2"><em
												style="color: grey; font-size: 10px;">By providing
													contact number you agree to being contacted by TCS in case
													you advance to the next round.</em></td>
										</tr>
										<tr>
											<td style="height: 20px;"><label for="name"
												id="labelcolor" style="font-size: 12px;">Captcha<font
													color="red">*</font> : <br> <em
													style="color: grey; font-size: 10px;">Click on image
														to refresh captcha.</em>
											</label></td>

											<td style="height: 20px;"><br> <a
												href="javascript:refreshKaptcha()" data-toggle="tooltip"
												data-placement="right" title="Refresh Captcha"><img
													src="kaptcha.jpg" height="100" width=100% id="kapchaImage"
													name="kapchaImage"></a></td>
										</tr>
										<tr>
											<td style="height: 20px;"></td>

											<td style="height: 20px;"><input style="width: 100%;"
												type="text" name="kaptcha" id="kaptcha" autocomplete="off"
												placeholder="Enter captcha here"></td>
										</tr>


										<tr>
											<td style="height: 20px;"></td>

											<td style="height: 20px;"><input type="checkbox"
												id="agreetandc" name="agreetandc"><a href="#"
												id="myBtn">Read Terms and Conditions</a> <em
												style="color: grey; font-size: 10px;">(Click here to
													read terms & condition)</em></td>
										</tr>
										<tr>
											<td style="height: 20px;"></td>

											<td style="height: 20px;">
												<table>
													<tr>
														<td><button name="submit"
																style="border: 0; padding: 0px; cursor: pointer;"
																id="submit" value="Register">
																<img
																	src="/CodevitaV6/images/CodeVita-Registration-Form-Register-Button.png">
															</button></td>
														<td><input type="button" name="backbutton"
															id="backbutton"
															onclick="window.location='/CodevitaV6/index.jsp';"></td>
													</tr>
												</table>


											</td>
										</tr>
									</table>

								</form>
							</div>
							<img border="0" style="width: 97%; margin-left: 30px;"
								src="/CodevitaV6/images/CodeVita-Registration-Form-Shadow.png">
							<div style="width: 90%; height: 80%; margin-left: 30px;">
								<!-- <img border="0" width=100%
									src="/CodevitaV6/images/CodeVita-Registration-Form-Shadow.png"> -->
							</div>
						</div>
						<div class="seconddiv">
							<div class="mascotdiv" style="margin-left: 30px;">

								<img id="hel" src="/CodevitaV6/images/Mascot.png"
									style="position: relative; top: 200px; right: 70px;"> <img
									id="hel2"
									src="/CodevitaV6/images/CodeVita-Registration-Form-CodeVita-Logo.png"
									style="position: absolute; left: 80px; top: 100px;">
							</div>
						</div>

					</div>

					<!-- <div id="google_translate_element" style="float: right;"></div> -->
					<div class="lower">
						<table border="0"
							style="position: relative; border-collapse: collapse;"
							align="center" width="932px">
							<tr>
								<td height="20px"></td>
							</tr>
							<tr>
								<td><a class="footer">&copy; 2017 Tata Consultancy
										Services Limited. All Rights Reserved.&nbsp;&nbsp;&nbsp</a></td>
								<td><a class="footer">In Association with</a></td>
								<td><img border="0"
									src="/CodevitaV6/images/CodeVita-Registration-Footer-CCLogo.png"></td>
								<td><a class="footer">|</a><a class="footer"
									href="/CodevitaV6/privacypolicy.jsp" target="_blank style="text-decoration:none; color:white;"><font
										color=white>&nbsp;Privacy Policy &nbsp;&nbsp;</font></a></td>
								<td>
									<!-- <a href="/CodevitaV6/redirectToTwitter.jsp" target="_blank"><img border="0" src="/CodevitaV6/images/twitter-icn.jpg"></a>
				<a href="/CodevitaV6/redirectToLinkedIN.jsp" target="_blank"><img border="0" src="/CodevitaV6/images/linked-in-icn.jpg"></a>
				<a href="/CodevitaV6/redirectToFacebook.jsp" target="_blank"><img border="0" src="/CodevitaV6/images/Facebook-icn.jpg"></a> -->
									<a href="https://twitter.com/TCS_News" target="_blank"><img
										border="0"
										src="/CodevitaV6/images/CodeVita-Registration-Footer-TWLogo.png"></a>
									<a
									href="http://www.linkedin.com/company/tata-consultancy-services/careers?trk=top_nav_careers"
									target="_blank"><img border="0"
										src="/CodevitaV6/images/CodeVita-Registration-Footer-LinkedeInLogo.png"></a>
									<a href="http://www.facebook.com/TataConsultancyServices"
									target="_blank"><img border="0"
										src="/CodevitaV6/images/CodeVita-Registration-Footer-FBLogo.png"></a>
								</td>
								<td align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
									border="0"
									src="/CodevitaV6/images/CodeVita-Registration-Footer-TATALogo.png"></td>
							</tr>
						</table>
					</div>
				</div>
			</td>
		</tr>
	</table>

	<div id="myModal" class="modal">

		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
				<span class="close">x</span>
				<h2>Global CodeVita 2017 - TCS Coding Contest - Terms and
					Conditions</h2>
			</div>
			<div id="modal-content">
				<div class="modal-body">
					<div >
						 
						<div id="texthere">
						
						</div>
						<div >
							<img alt="" src="" id="imagehere" style="width:100%"> 
						</div>
						<div id="tandcbuttons">
						<p>
							<label><input type="checkbox" name="tandc" id="tandc"
								value="t"> <font color=blue>I have read the Terms
									and Conditions</font></label>
						</p>
						<div class="empty"></div>
						<div class="empty"></div>
							<a href="#">
								<button type="button" class="btn btn-primary" id="tandcbutton"
									style="border: 0; padding: 0px" disabled>
									<img
										src="/CodevitaV6/images/CodeVita-Registration-Form-Terms-and-Condition-Agree-Button.png">
								</button>
							</a> <a href="/CodevitaV6/register.jsp"><button type="button"
									style="border: 0; padding: 0px" class="btn btn-primary">
									<img
										src="/CodevitaV6/images/CodeVita-Registration-Form-Terms-and-Condition-Disagree-Button.png">
								</button></a>
						</div>
						<div class="empty"></div>
						<div class="empty"></div>
						<div class="empty"></div>
					</div>
				</div>
			</div>
			<!-- <div id="google_translate_element" style="float: right;"></div> -->
			<div class="lower">
				<table border="0"
					style="position: relative; border-collapse: collapse;"
					align="center" width="932px">
					<tr>
						<td height="20px"></td>
					</tr>
					<tr>
						<td><a class="footer">&copy; 2017 Tata Consultancy
								Services Limited. All Rights Reserved.&nbsp;&nbsp;&nbsp</a></td>
						<td><a class="footer">In Association with</a></td>
						<td><img border="0"
							src="/CodevitaV6/images/CodeVita-Registration-Footer-CCLogo.png"></td>
						<td><a class="footer">|</a><a class="footer"
							href="/CodevitaV6/privacypolicy.jsp" target="_blank style="text-decoration:none; color:white;"><font
								color=white>&nbsp;Privacy Policy &nbsp;&nbsp;</font></a></td>
						<td>
							<!-- <a href="/CodevitaV6/redirectToTwitter.jsp" target="_blank"><img border="0" src="/CodevitaV6/images/twitter-icn.jpg"></a>
				<a href="/CodevitaV6/redirectToLinkedIN.jsp" target="_blank"><img border="0" src="/CodevitaV6/images/linked-in-icn.jpg"></a>
				<a href="/CodevitaV6/redirectToFacebook.jsp" target="_blank"><img border="0" src="/CodevitaV6/images/Facebook-icn.jpg"></a> -->
							<a href="https://twitter.com/TCS_News" target="_blank"><img
								border="0"
								src="/CodevitaV6/images/CodeVita-Registration-Footer-TWLogo.png"></a>
							<a
							href="http://www.linkedin.com/company/tata-consultancy-services/careers?trk=top_nav_careers"
							target="_blank"><img border="0"
								src="/CodevitaV6/images/CodeVita-Registration-Footer-LinkedeInLogo.png"></a>
							<a href="http://www.facebook.com/TataConsultancyServices"
							target="_blank"><img border="0"
								src="/CodevitaV6/images/CodeVita-Registration-Footer-FBLogo.png"></a>
						</td>
						<td align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
							border="0"
							src="/CodevitaV6/images/CodeVita-Registration-Footer-TATALogo.png"></td>
					</tr>
				</table>
			</div>

		</div>

	</div>


	<div id="errorModal" class="modal">

		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-Errorheader">
				<span class="close">x</span>
				<h2>${errors}</h2>
			</div>
		</div>
	</div>

	<div id="successModal" class="modal">

		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-Successheader">
				<span class="close">x</span>
				<h2>${success}</h2>
			</div>
		</div>
	</div>



</body>
<script type="text/javascript"
	src="/CodevitaV6/JS/registration/gen_validatorv4.js">
	
</script>

<script type="text/javascript">
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var close1 = document.getElementsByClassName("close")[0];
var close2 = document.getElementsByClassName("btn-primary")[0];
var closeError = document.getElementsByClassName("close")[1];
var closeSuccess = document.getElementsByClassName("close")[2];

// When the user clicks the button, open the modal 
btn.onclick = function() {
	modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
close1.onclick = function() {
	modal.style.display = "none";
}

close2.onclick = function() {
	modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}

var statusError = '${errors}';

if (statusError.length > 0) {

	document.getElementById('errorModal').style.display = "block";
}

closeError.onclick = function() {
	document.getElementById('errorModal').style.display = "none";
	window.location.href = "${pageContext.request.contextPath}/register.jsp";
}

var statusSuccess = '${success}';

if (statusSuccess.length > 0) {

	document.getElementById('successModal').style.display = "block";
}

closeSuccess.onclick = function() {
	document.getElementById('successModal').style.display = "none";
	window.location.href = "${pageContext.request.contextPath}/index.jsp";
}
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var close1 = document.getElementsByClassName("close")[0];
var close2 = document.getElementsByClassName("btn-primary")[0];
var closeError = document.getElementsByClassName("close")[1];
var closeSuccess = document.getElementsByClassName("close")[2];

// When the user clicks the button, open the modal 
btn.onclick = function() {
	modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
close1.onclick = function() {
	modal.style.display = "none";
}

close2.onclick = function() {
	modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}

var statusError = '${errors}';

if (statusError.length > 0) {

	document.getElementById('errorModal').style.display = "block";
}

closeError.onclick = function() {
	document.getElementById('errorModal').style.display = "none";
	window.location.href = "${pageContext.request.contextPath}/register.jsp";
}

var statusSuccess = '${success}';

if (statusSuccess.length > 0) {

	document.getElementById('successModal').style.display = "block";
}

closeSuccess.onclick = function() {
	document.getElementById('successModal').style.display = "none";
	window.location.href = "${pageContext.request.contextPath}/index.jsp";
}


	$(document)
			.ready(

					function() {

						$('#submit').prop('disabled', true);
						
						$("#imagehere").attr("src", "/CodevitaV6/images/empty.png");
						$("#tandcbuttons").hide();
						
						$('#agreetandc').attr("disabled", true);
						
						$("#tandc").click(function() {
							if ($("#tandc").is(':checked')) {
								$('#agreetandc').attr("disabled", false);
								$('#submit').prop('disabled', false);
								$('#tandcbutton').prop('disabled', false);
							} else {
								$('#agreetandc').attr('checked', false);
								$('#agreetandc').attr("disabled", true);
								$('#tandcbutton').prop('disabled', true);
								$('#submit').prop('disabled', true);
							}

						});

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
												name : {
													required : true,
													minlength : 1,
													maxlength : 100,
													letterspacessonly : true

												},
												email : {
													required : true,
													minlength : 6,
													maxlength : 100,
													email : true,
													remote : {
														url : 'CheckEmailServlet',
														type : 'POST',
														data : {
															email : function() {
																return $(
																		"#email")
																		.val();
															},
														},
														dataType : 'json'
													}

												},

												password : {
													required : true,
													minlength : 8,
													maxlength : 20,
													pwdregex1 : true

												},
												repassword : {
													equalTo : "#password",
													nospace : true
												},

												region : {
													required : true
												},
												tandc : {
													required : true
												},
												agreetandc : {
													required : true
												},

												college : {
													required : true,
													minlength : 1,
													maxlength : 500,
												},
												countrycode : {
													required : true,
													remote : {
														url : 'CheckCountryServlet',
														type : 'POST',
														data : {
															country : function() {
																return $(
																		"#countrycode")
																		.val();
															},
														},
														dataType : 'json'
													}
												},
												contactnumber : {
													digitsonly : true,
													minlength : 4,
													maxlength : 13
												},

												kaptcha : {
													required : true,
													remote : {
														url : 'CaptchaCheckServlet',
														type : 'POST',
														dataType : 'json',
														complete : function(
																data) {
														}
													}
												}

											},
											messages : {
												name : {
													required : "Please enter your Full Name",
													maxlength : "Name should be less than 100",
													minlength : "too small"
												},

												email : {
													remote : "This email ID is already registered",
													maxlength : "EmailID should be less than 100",
													minlength : "too small"
												},
												tandc : {
													required : "Select check box"
												},
												agreetandc : {
													required : "Your agreement with Terms and Conditions is necessary."
												},

												region : {
													required : "Please select your region",
													maxlength : "It should be less than 50 characters"
												},

												college : {
													required : "Please provide your organization / college name",
													minlength : "too small",
													maxlength : "It should be less than 500"
												},

												password : {
													required : "Please enter password",
													minlength : "Password should be greater than 7 characters",
													maxlength : "Password should be less than 21 characters"
												},
												repassword : {
													required : true,
													equalTo : "Passwords do not match"
												},
												countrycode : {
													remote : "Registration for selected country is over.",
													required : "Please select your country"
												},
												contactnumber : {
													minlength : "Min length is 4",
													maxlength : "Entered number should be less than 14 digits"
												},

												kaptcha : {
													remote : "Invalid Captcha"
												}
											}
										});

						window.history.forward();

					});

	function refreshKaptcha() {
		$("#kapchaImage").attr('src',
				'kaptcha.jpg?' + Math.floor(Math.random() * 100)).fadeIn();
	}

	function submitButton() {
		$("#submit").attr("disabled", false);
	}

	function changeTandC() {
		var country = $('#countrycode').val();
		if (country !== "") {
			$("#imagehere").hide();	
			$("#texthere").empty();	
			var apac = [ '52-Mexico','54-Argentina','55-Brazil' ,'56-Chile','57-Colombia','593-Ecuador','51-Peru','598-Uruguay','58-Venezuela'];
			if(apac.indexOf(country) != -1){
				$("#texthere").load("${pageContext.request.contextPath}/TandC/LatamTAndC.html");
			}else if(country === "86-China"){
				$("#texthere").load("${pageContext.request.contextPath}/TandC/ChinaTAndC.html");
			}else if(country === "61-Australia"){
				$("#texthere").load("${pageContext.request.contextPath}/TandC/AustraliaTAndC.html");
			}else if(country === "852-Hong Kong"){
				$("#texthere").load("${pageContext.request.contextPath}/TandC/HongkongTAndC.html");
			}else if(country === "62-Indonesia"){
				$("#texthere").load("${pageContext.request.contextPath}/TandC/IndonesiaTAndC.html");
			}else if(country === "853-Macao"){
				$("#texthere").load("${pageContext.request.contextPath}/TandC/MacaoTAndC.html");
			}else if(country === "60-Malaysia"){
				$("#texthere").load("${pageContext.request.contextPath}/TandC/MalaysiaTAndC.html");
			}else if(country === "64-New Zealand"){
				$("#texthere").load("${pageContext.request.contextPath}/TandC/NZTAndC.html");
			}else if(country === "63-Philippines"){
				$("#texthere").load("${pageContext.request.contextPath}/TandC/PhilippinesTAndC.html");
			}else if(country === "82-Korea South"){
				$("#texthere").load("${pageContext.request.contextPath}/TandC/SouthKoreaTAndC.html");
			}else if(country === "65-Singapore"){
				$("#texthere").load("${pageContext.request.contextPath}/TandC/SingaporeTAndC.html");
			}else if(country === "886-Taiwan"){
				$("#texthere").load("${pageContext.request.contextPath}/TandC/TaiwanTAndC.html");
			}else if(country === "66-Thailand"){
				$("#texthere").load("${pageContext.request.contextPath}/TandC/ThailandTAndC.html");
			}else if(country === "1-USA"){
				//$("#texthere").load("${pageContext.request.contextPath}/TandC/ThailandTAndC.html");
			}else if(country === "1-Canada"){
				//$("#texthere").load("${pageContext.request.contextPath}/TandC/ThailandTAndC.html");
			}else if(country === "44-UK"){
				//$("#texthere").load("${pageContext.request.contextPath}/TandC/ThailandTAndC.html");
			}else if(country === "27-South Africa"){
				//$("#texthere").load("${pageContext.request.contextPath}/TandC/ThailandTAndC.html");
			}else if((country === "972-Israel")||(country === "974-Qatar")||(country === "973-Bahrain")||(country === "965-Kuwait")||(country === "971-United Arab Emirates")||(country === "968-Oman")||(country === "966-Saudi Arabia")){
				//$("#texthere").load("${pageContext.request.contextPath}/TandC/ThailandTAndC.html");
			}else{
				$("#texthere").load("${pageContext.request.contextPath}/TandC/GeneralTAndC.html");
			}
			
			
			$("#tandcbuttons").show();
			
		}else{
			$("#tandcbuttons").hide();
			$("#imagehere").show();
			$("#texthere").hide();
			$("#imagehere").attr("src", "/CodevitaV6/images/empty.png");
		}
	}

</script>
</html>
