<?php
	function randomChalls($numberOfChalls) {
		$challs = file('inc/txt/challs.txt');
		if ($numberOfChalls > count($challs)) {
			echo 'fail!';
		}
		$rand_keys = array_rand($challs, $numberOfChalls);
		shuffle($rand_keys);
		foreach ($rand_keys as $key) {
			$chall = trim($challs[$key]);
			echo '<a href="#" title="'.$chall.'">'.$chall.'</a>'." ";
		}
	}
?>
<section>
	<article>
		<p>
			The game is simple. Follow one rule each month; the loser has to pay for lunch.
		</p>
		<table>
			<thead>
				<tr>
					<th>Month</th>
					<th>Henry</th>
					<th>Robin</th>
					<th>Anton</th>
					<th>Emil</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>April</td>
					<td class="success"><a href="#" title="Anime/Manga free">Anime/Manga free</a></td>
					<td class="success"><a href="#" title="Reddit free">Reddit free</a></td>
					<td class="fail"><a href="#" title="Draw 1h every day">Draw 1h every day</a></td>
					<td class="fail"><a href="#" title="Bike to work">Bike to work</a></td>
				</tr>
				<tr>
					<td><a title="May">May</a></td>
                    <td class="success"><a href="#" title="Vegan">Vegan</a></td>
					<td class="inactive">Inactive</td>
					<td class="inactive">Inactive</td>
					<td class="inactive">Inactive</td>
				</tr>
				<tr class="pending unselectable">
					<td>June</td>
					<td>Pending</td>
					<td>Pending</td>
					<td>Pending</td>
					<td>Pending</td>
				</tr>
				<tr class="pending unselectable">
					<td>July</td>
					<td>Pending</td>
					<td>Pending</td>
					<td>Pending</td>
					<td>Pending</td>
				</tr>
			</tbody>
		</table>
<!-- 		<p>
			Want a challenge? How about these?<br><?php randomChalls(13); ?>
		</p> -->
	</article>
</section>
