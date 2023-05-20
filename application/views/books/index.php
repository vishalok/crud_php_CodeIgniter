<?php $this->load->view('templates/header'); ?>

<h2>Book List</h2>
<a href="<?php echo site_url('books/add'); ?>" class="btn btn-primary mb-3">Add Book</a>

<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Description</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($books as $book) : ?>
            <tr>
                <td><?php echo $book['title']; ?></td>
                <td><?php echo $book['author']; ?></td>
                <td><?php echo $book['description']; ?></td>
                <td><?php echo $book['price']; ?></td>
                <td>
                    <a href="<?php echo site_url('books/edit/'.$book['id']); ?>" class="btn btn-sm btn-info">Edit</a>
                    <a href="<?php echo site_url('books/delete/'.$book['id']); ?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php $this->load->view('templates/footer'); ?>
