<h2>Recent Posts</h2>
<?php foreach ($posts as $post): ?>
    <h3><?php echo Html::anchor('blog/view/' . $post->slug, $post->title); ?></h3>
    <p><strong>Posted:</strong> <?php echo date('nS F, Y', $post->created_at); ?> (<?php echo Date::time_ago($post->created_at) ?>)</p>
    <p><?php echo $post->summary; ?></p>
<?php endforeach; ?>
