<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>トップメニュー | SIRIUS</title>
    <!-- Bootstrap -->
    <!-- <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet"> -->
    <link href="css/bootstrap/bootstrap-theme.min.css" rel="stylesheet">
    <!-- カスタムCSS読込 -->
    <link href="css/sirius/sirius_common.css" rel="stylesheet">
    <link href="css/sirius/sirius_index.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
  </head>
  <body class="text-center">
  	<div class="container text-left">
	<!-- start 共通ヘッダ -->
    <div id="global_menu">
    <?php $this->partial("shared/global_menu"); ?>
    </div>
  	<!-- end 共通ヘッダ -->
  	<!-- start 本文エリア -->
		<div class="row" class="index-body">
			<h1>トップメニュー</h1>
			<!-- <div class="alert alert-info text_center" style="margin-bottom:0px;">
			メッセージ表示列
			</div> -->
			<div class="topmargin pull-left dspilb border_radius" style="overflow:auto; width:950px; height:300px; border:1.8px solid #999999;">
				<div class="head_1">
					<br />
					■お知らせ
					<br />
				</div>
				<div class="text_1">
					<br />
					<?php 
					foreach ($infoMsg as $info) {
						echo $info->message, "<br /><br />";
					}
					?>
					<br />
					<br />
					<br />
				</div>
			</div>
		</div>
  	<!-- end 本文エリア -->
  	
  	<!-- start フッターエリア -->
    <?php $this->partial("shared/footer"); ?>
  	<!-- end フッターエリア -->
	</div>
  </body>
</html>