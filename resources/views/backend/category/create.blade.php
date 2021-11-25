<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name">
    <input type="text" name="description">
    <input type="file" name="file">
    <button type="submit">Add category</button>
</form>
