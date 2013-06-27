<h2>Listing <span class='muted'>Comments</span></h2>
<br>
<?php if ($comments): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Website</th>
			<th>Message</th>
			<th>Post id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($comments as $comment): ?>		<tr>

			<td><?php echo $comment->name; ?></td>
			<td><?php echo $comment->email; ?></td>
			<td><?php echo $comment->website; ?></td>
			<td><?php echo $comment->message; ?></td>
			<td><?php echo $comment->post_id; ?></td>
			<td>
				<?php echo Html::anchor('comments/view/'.$comment->id, '<i class="icon-eye-open" title="View"></i>'); ?> |
				<?php echo Html::anchor('comments/edit/'.$comment->id, '<i class="icon-wrench" title="Edit"></i>'); ?> |
				<?php echo Html::anchor('comments/delete/'.$comment->id, '<i class="icon-trash" title="Delete"></i>', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Comments.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('comments/create', 'Add new Comment', array('class' => 'btn btn-success')); ?>

</p>
