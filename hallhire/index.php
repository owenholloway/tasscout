<?php
//Internet explorer 10 and below are broken
if(preg_match('/MSIE/',$_SERVER['HTTP_USER_AGENT']))
{
	header("Location: /core/iepage.html");
	die();
}
?>
<body>
<script>
var pagename = 'hallhire'
</script>
<?php 
include $_SERVER['DOCUMENT_ROOT']."/core/frontend/styles.php";
include $_SERVER['DOCUMENT_ROOT']."/core/frontend/nav.php";
include $_SERVER['DOCUMENT_ROOT']."/core/frontend/scripts.php";
include $_SERVER['DOCUMENT_ROOT']."/core/backend/pagecontent.php";
?>
<script>
<?php
if(!isMobile()) {
	echo "$(\"#logo-container\").append(\" - Hall Hire\");";
} else {
	echo "$(\"#logo-container\").text(\"Hall Hire\");";
}
?>

</script>

<div class="row">
    <div class="col s12 l8 push-l2">
        <div class="card">
			<div class="card-content">
				<div class="editable">
				<?php
				echo getContent("hallhire");
				?>
				</div>
			</div>
			<div class="card-action">
				<a onclick="edit();" class="editbutton">Edit</a>
        	</div>
		</div>
	</div>
</div>

</body>