<form action="?c=Post&m=update" method="post">
    <input type="hidden" name="id" value="<?php echo $post->id; ?>">

    <label> Title: <input type="text" name="title" value="<?php echo $post->title; ?>" required>
    </label> <br>
    <label> Content:
        <textarea name="content" cols="30" rows="10" required><?php echo $post->content; ?></textarea>
    </label> <br>
    <input type="submit" value="Post">
</form>