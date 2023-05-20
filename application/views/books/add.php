<?php $this->load->view('templates/header'); ?>

<h2>Add Book</h2>

<form method="post" action="<?php echo site_url('books/store'); ?>">
    <div class="form-group">
        <label>Title:</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Author:</label>
        <input type="text" name="author" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Description:</label>
        <textarea name="description" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label>Price:</label>
        <input type="number" name="price" step="0.01" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Book</button>
</form>


</body>
</html>
