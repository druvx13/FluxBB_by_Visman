<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<pun_language>" lang="<pun_language>" dir="<pun_content_direction>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<pun_head>
</head>

<body>
<div class="container mt-3">

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><?php echo defined('PUN_CONFIG_LOADED') ? pun_htmlspecialchars($pun_config['o_board_title']) : 'ForumTitle'; ?> - Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbarCollapseAdmin" aria-controls="mainNavbarCollapseAdmin" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbarCollapseAdmin">
            <pun_bootstrap_nav_items> <!-- This uses the same placeholder as main.tpl -->
        </div>
    </div>
</nav>

<div id="punadmin" class="pun">
<div class="top-box"></div>
<div class="punwrap">

<div id="brdheader" class="block">
	<div class="box">
		<div id="brdtitle" class="inbox">
			<pun_title>
			<pun_desc>
		</div>
		<!-- <pun_navlinks> --> <!-- Original navlinks commented out -->
		<pun_status>
	</div>
</div>

<pun_announcement>

<div id="brdmain">
    <div class="row">
        <div class="col-12">
            <pun_main>
        </div>
    </div>
</div>

<div class="text-center p-3 mt-4 border-top">
    <pun_footer>
</div>

</div> <!-- closing punwrap -->
<div class="end-box"></div>
</div> <!-- closing punadmin -->

</div> <!-- closing container -->
<!-- forum_javascript -->
</body>
</html>
