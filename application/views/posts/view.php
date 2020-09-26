<br>
<div class="card border-primary mb-3">
    <div class="card-body">
        <h4 class="card-header"> <?php echo $post['title']; ?> </h4>
        <br>
        <p class="card-text"> <?php echo $post['body']; ?> </p>   
        <small >Posted on: <?php echo $post['created_at']; ?></small>

        <br><br>
        <?php echo form_open('posts/delete/'.$post['id']); ?>
            <input type="submit" value="Delete post" class="btn btn-danger"  >
        </form>
    </div>
</div>