<?php
if(isset($_GET["url"])){
$username=$_GET["url"];
?><script>
localStorage.setItem("username",<?php echo json_encode($username); ?>);

</script>

<?php
require_once dirname(__FILE__) . '/user.html';
}else{
require_once dirname(__FILE__) . '/home.html';
}
?>
