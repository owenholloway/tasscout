<?php
//Internet explorer 10 and below are broken
if(preg_match('/MSIE/',$_SERVER['HTTP_USER_AGENT']))
{
	header("Location: /core/iepage.html");
	die();
}
?>
<body onload="settingload()">
<?php 
include $_SERVER['DOCUMENT_ROOT']."/core/frontend/styles.php";
include $_SERVER['DOCUMENT_ROOT']."/core/frontend/nav.php";
include $_SERVER['DOCUMENT_ROOT']."/core/frontend/scripts.php";
?>
<script>
<?php
if(!isMobile()) {
	echo "$(\"#logo-container\").append(\" - Settings\");";
}
?>

function settingload() {
	<?php
	if (getSetting("joeys")) {
	echo "$(\"#Joeys\").prop(\"checked\", true);";
	}
	if (getSetting("cubs")) {
	echo "$(\"#Cubs\").prop(\"checked\", true);";
	}
	if (getSetting("scouts")) {
	echo "$(\"#Scouts\").prop(\"checked\", true);";
	}
	if (getSetting("venturers")) {
	echo "$(\"#Venturers\").prop(\"checked\", true);";
	}
	if (getSetting("rovers")) {
	echo "$(\"#Rovers\").prop(\"checked\", true);";
	}
	?>
}
</script>
<div class="row">
    <div class="col s12 l8 push-l2">
        <div class="card">
			<div class="card-content">
				<h5>Available Sections</h5>
				<p>
				<input type="checkbox" id="Joeys" />
				<label for="Joeys">Joeys</label>
				</p>
				<p>
				<input type="checkbox" id="Cubs" />
				<label for="Cubs">Cubs</label>
				</p>
				<p>
				<input type="checkbox" id="Scouts" />
				<label for="Scouts">Scouts</label>
				</p>
				<p>
				<input type="checkbox" id="Venturers" />
				<label for="Venturers">Venturers</label>
				</p>
				<p>
				<input type="checkbox" id="Rovers" />
				<label for="Rovers">Rovers</label>
				</p>
			</div>
		</div>
	</div>
</div>
</body>