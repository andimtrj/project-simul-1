<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
  <thead>
    <tr>
      <th>Title</th>
      <th>Desc</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($ver as $ver): ?>
      <tr>
        <td>{{$ver->created_at}}</td>
        <td>{{$ver->description}}</td>
        <td>{{$ver->file}}</td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>