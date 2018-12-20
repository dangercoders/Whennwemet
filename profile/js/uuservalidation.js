 $(document).ready(function() {
 if((localStorage.getItem('uusername')==null)&&(localStorage.getItem('uapikey')==null)&&(localStorage.getItem('uuserid')==null)){
 localStorage.clear();
 localStorage.setItem('error','You Are Not Login Please Login First');
 window.location.replace('http://whennwemet.com'); 
 }
 });