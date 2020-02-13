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
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Star</th>
        </thead>
        <tbody>
        <?php foreach($products as $pro):?>
            <tr>
                <td><?php echo $pro->id ?></td>
                <td><?php echo $pro->name ?></td>
                <td><?php echo $pro->price ?></td>
                <td><?php echo $pro->star ?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>