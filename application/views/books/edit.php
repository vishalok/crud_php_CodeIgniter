<?php $this->load->view('templates/header'); ?>

<h2>Edit Book</h2>

<form method="post" action="<?php echo site_url('books/update/'.$book['id']); ?>">
    <div class="form-group">
        <label>Title:</label>
        <input type="text" name="title" class="form-control" value="<?php echo $book['title']; ?>" required>
    </div>
    <div class="form-group">
        <label>Author:</label>
        <input type="text" name="author" class="form-control" value="<?php echo $book['author']; ?>" required>
    </div>
    <div class="form-group">
        <label>Description:</label>
        <textarea name="description" class="form-control" required><?php echo $book['description']; ?></textarea>
    </div>
    <div class="form-group">
        <label>Price:</label>
        <input type="number" name="price" step="0.01" class="form-control" value="<?php echo $book['price']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update Book</button>
</form>

<?php $this->load->view('templates/footer'); ?>
