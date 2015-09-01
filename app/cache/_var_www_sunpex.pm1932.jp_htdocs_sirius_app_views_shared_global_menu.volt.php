<?php 			$filename =  $_SERVER["REQUEST_URI"];
				if($filename == '/sirius/') {
					$index = "<li class=\"active\"><a href=\"\" title=\"ホーム\">ホーム <span class=\"glyphicon glyphicon-home\"></span></a></li>";
				} else {
					$index = "<li ><a href=\"\" title=\"ホーム\">ホーム <span class=\"glyphicon glyphicon-home\"></span></a></li>";
				}

				if($filename == '/import/') {
					$imports = "<li class=\"active\"><a href=\"import.html\" title=\"CSV取込\">CSV取込</a></li>";
				} else {
					$imports = "<li ><a href=\"import.html\" title=\"CSV取込\">CSV取込</a></li>";
				}

				if($filename == '/history/'||
				$filename == '/history_pre/'||
				$filename == '/delivery/'||
				$filename == '/delivery_pre/'||
				$filename == '/unreturn/'||
				$filename == '/unreturn_pre/'||
				$filename == '/unreturned/'||
				$filename == '/unreturned_pre/'||
				$filename == '/lend/'||
				$filename == '/lend_pre/'||
				$filename == '/stock/'||
				$filename == '/stock_pre/') {
					$dropdown = "<li class=\"dropdown active\">";
				} else {
					$dropdown = "<li class=\"dropdown\">";
				}

				if($filename == 'receive'||$filename == 'receive_pre') {
					$receive = "<li class=\"active\"><a href=\"receive_pre.html\" title=\"受領確認\">受領確認</a></li>";
				} else {
					$receive = "<li ><a href=\"receive_pre.html\" title=\"受領確認\">受領確認</a></li>";
				}
				if($filename == 'admin'||$filename == 'info') {
					$admin = "<li  class=\"dropdown active\">";
				} else {
					$admin = "<li class=\"dropdown\">";
				}
				?>
		<nav class="row navbar navbar-default">
			<div class="navbar-header">
				<div class="navbar-brand">SIRIUS</div>
				<button class="navbar-toggle" data-toggle="collapse" data-target="#mainNav">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="mainNav">
				<ul class="nav navbar-nav">
				<?php echo 
				 $index
				.$imports
				.$dropdown ?>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" title="検索・照会">検索・照会 <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="history_pre.html" title="発注状況照会">発注状況照会</a></li>
						<li><a href="delivery_pre.html" title="納品実績照会">納品実績照会</a></li>
						<li><a href="unreturn_pre.html" title="返却状況照会">返却状況照会</a></li>
						<li><a href="unreturned_pre.html" title="返却実績照会">返却実績照会</a></li>
						<li><a href="lend_pre.html" title="貸与リスト">貸与リスト</a></li>
						<li><a href="stock_pre.html" title="在庫照会">在庫照会</a></li>
					</ul>
				<?php echo 
				$receive
				.$admin
				?>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" title="管理">管理 <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="admin.html" title="アカウント管理">アカウント管理</a></li>
						<li><a href="info.html" title="おしらせ管理">おしらせ管理</a></li>
					</ul>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						 <a href="#" class="dropdown-toggle" data-toggle="dropdown">こんにちは、
						 	<?php // セッションデータの呼び出し
							if ($this->session->has("auth")) {
								echo $this->session->get("auth")['name'];
							} else {
								echo 'name';
							}
						?> さん <span class="glyphicon glyphicon-user"></span> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="login.html">ログアウト</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>