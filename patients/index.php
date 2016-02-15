<?php
	require_once "index.logic.php";
	include "../common/header.php";

	if (!isset($_GET['sort'])) {
		header('location:index.php?sort=name-asc');
	}
?>
	<h1>Patiënts</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th><a href=<?php
				if (isset($_GET['sort'])) {
					if ($_GET['sort'] == "name-asc") {
						echo "index.php?sort=name-desc";
					} else {
						echo "index.php?sort=name-asc";
					}
				} else {
					echo "index.php?sort=name-asc";
				}?>>Name</a></th>
				<th><a href=<?php
				if (isset($_GET['sort'])) {
					if ($_GET['sort'] == "gender-asc") {
						echo "index.php?sort=gender-desc";
					} else {
						echo "index.php?sort=gender-asc";
					}
				} else {
					echo "index.php?sort=gender-asc";
				}?>>Gender</a></th>
				<th><a href=<?php
				if (isset($_GET['sort'])) {
					if ($_GET['sort'] == "species-asc") {
						echo "index.php?sort=species-desc";
					} else {
						echo "index.php?sort=species-asc";
					}
				} else {
					echo "index.php?sort=species-asc";
				}?>>Species</a></th>
				<th>Status</th>
				<th><a href=<?php
				if (isset($_GET['sort'])) {
					if ($_GET['sort'] == "client-asc") {
						echo "index.php?sort=client-desc";
					} else {
						echo "index.php?sort=client-asc";
					}
				} else {
					echo "index.php?sort=client-asc";
				}?>>Client</a></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($patients as $patient):
?>
			<tr>
				<td><?=$patient['name']?></td>
				<td><?=$patient['gender']?></td>
				<td><?=$patient['species']?></td>
				<td><?=$patient['status']?></td>
				<td><?=$patient['client']?></td>
				<td class="center"><a href="edit.php?id=<?=$patient['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$patient['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>