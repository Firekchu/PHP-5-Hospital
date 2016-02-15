<?php
	require_once "edit.logic.php";
	include "../common/header.php";

	$sql = "select * from species";
	$result = $db->query($sql);
	$species = $result->fetch_all(MYSQLI_ASSOC);

	$sql = "select * from clients";
	$result = $db->query($sql);
	$clients = $result->fetch_all(MYSQLI_ASSOC);
?>
	<h1>Edit patiënt</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$patient['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$patient['name']?>">
		</div>
		<div>
			<label for="name">Gender:</label>
			<br><label style="margin-left: 25px;" for="name">male:</label>
			<input type="radio" id="gender" name="gender" value="male" <?php if ($patient['gender'] == "male"){echo "checked";} ?>>
			<br><label style="margin-left: 25px;" for="name">female:</label>
			<input type="radio" id="gender" name="gender" value="female" <?php if ($patient['gender'] == "female"){echo "checked";} ?>>
		</div>
		<div>
			<label for="name">Species:</label>
			<select name="species">
				<?php foreach ($species as $spec): ?>
					<option value="<?=$spec['species']?>" <?php if($spec['species']==$patient['species']){echo"selected";}?>><?=$spec['species']?></option>
				<?php endforeach ?>
			</select>
		</div>
		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="status"><?=$patient['status']?></textarea>
		</div>
		<div>
			<label for="name">Client:</label>
			<select name="client">
				<?php foreach ($clients as $client): ?>
					<option value="<?=$client['client']?>" <?php if($client['client']==$patient['client']){echo"selected";}?>><?=$client['client']?></option>
				<?php endforeach ?>
			</select>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>