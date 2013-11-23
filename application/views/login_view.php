
<!doctype html>
<title>Log in</title>

<style>
	form {
		position: fixed;
		top: 50%;
		left: 50%;
		
		width: 238px;
		height: 150px;
		padding: 20px;
		border: 1px solid #585;
		border-radius: 20px;
		
		margin-top: -71px;
		margin-left: -140px;
		
		box-shadow: 5px 5px 10px rgba(0, 0, 0, .3);
	}
	
	label {
		display: inline-block;
		width: 75px;
	}
	
	form div {
		padding: 5px 0;
	}
	
	form div:last-child {
		text-align: right;
	}
</style>

<form name="login" action="<?= base_url('/login/'); ?>" method="POST">
	<div>
		<label for="username">User name</label>
		<input type="text" name="login" placeholder="User name" id="username">
	</div>
	<div>
		<label for="userpass">Password</label>
		<input type="password" name="password" placeholder="password" id="userpass">
	</div>
	<div>
		<button>Log in</button>
	</div>
</form>