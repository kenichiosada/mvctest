<?php echo $dataSet['header']; ?>

			<h2>Home</h2>
			<table class="table">
				<tr>
					<th>ID</th>
					<th>Name</th>
				</tr>
			<?php foreach($dataSet['contents'] as $data) : ?>
				<tr>
					<td><?php echo $data['id']; ?></td>
					<td><a href="/post/<?php echo $data['id']; ?>"><?php echo $data['name']; ?></a></td>
				</tr>
			<?php endforeach; ?>
			</table>

<?php echo $dataSet['footer']; ?>
