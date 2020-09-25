</br>
<h3> <?= $title ?> </h3>

<?php foreach($posts as $post) : ?>
    </br>
    <h4> <?php echo $post['title']; ?> </h4>
    <p> <?php echo $post['body']; ?> </p>
    <a class="btn btn-primary" href="<?php echo base_url('/posts/'.$post['slug']); ?>">See full post</a>
    <small class="post-date"> <?php echo "Posted on ", $post['created_at']; ?> </small>
    </br>
<?php endforeach; ?>