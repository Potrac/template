<?php
class Session {
	
	public function __construct(){
		session_start();
	}

	public function setMsg($m){
		$_SESSION['msg'] = $m;
	}

	public function msg(){
		if(isset($_SESSION['msg'])){
			?>
			<p id="alert" class="success">
				<?= $_SESSION['msg'] ?>
			</p>

			<?php
			unset($_SESSION['msg']);
		}
	}
}
?>