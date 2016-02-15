<?php
	require_once "create.logic.php";
	include "../common/header.php";

	$sql = "select * from species";
	$result = $db->query($sql);
	$species = $result->fetch_all(MYSQLI_ASSOC);

	$sql = "select * from clients";
	$result = $db->query($sql);
	$clients = $result->fetch_all(MYSQLI_ASSOC);
?>
	<h1>New patiënt</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="name">Gender:</label>
			<br><label style="margin-left: 25px;" for="name">male:</label>
			<input type="radio" id="gender" name="gender" value="male">
			<br><label style="margin-left: 25px;" for="name">female:</label>
			<input type="radio" id="gender" name="gender" value="female">
		</div>
		<div>
			<label for="name">Species:</label>
			<select name="species">
				<?php foreach ($species as $spec): ?>
					<option value="<?=$spec['species']?>"><?=$spec['species']?></option>
				<?php endforeach ?>
			</select>
		</div>
		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="status"></textarea>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>