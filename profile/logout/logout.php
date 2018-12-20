<?php
session_start();
if(session_destroy())
{?>
<script>
localStorage.clear();
</script>
<?php
header("location: ../../");
}
?>
