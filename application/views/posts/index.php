</br>
<h3> <?= $title ?> </h3>

<?php foreach($posts as $post) : ?>
    <div class="card border-primary mb-3">
        <div class="card-body">
            <h4> <?php echo $post['title']; ?> </h4>
            <small>Posted on <?php echo $post['created_at']; ?> in <strong><?php echo $post['name']; ?></strong> </small>
            <p> <?php echo word_limiter($post['body'], 82); ?> </p>
            <a class="btn btn-primary" href="<?php echo base_url('posts/view/'.$post['slug']); ?>">See full post</a>
        </div>
    </div>
<?php endforeach; ?>