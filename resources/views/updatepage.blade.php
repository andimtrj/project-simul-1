<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('updatefile', $docs->file_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label class="form-label">Description</label>
        <input name="description" type="text">
        <br>
        <label class="form-label">File</label>
        <input name="file" type="file" class="form-control">
        <br>
        <button type="submit">Submit</button>
    </form>

    
</body>
</html>