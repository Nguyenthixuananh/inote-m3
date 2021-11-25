<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" value="{{$category->name}}">
    <input type="text" name="description" value="{{$category->description}}">
    <input type="file" name="file">
    <button type="submit">Save</button>
</form>
