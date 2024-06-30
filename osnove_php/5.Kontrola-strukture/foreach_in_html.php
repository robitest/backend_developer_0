<?php


$users = [
    [
        'id' => '1',
        'name' => 'Robi',
        'email' => 'robi@gmail.com',
        'age' => '35',
    ],
    [
        'id' => '2',
        'name' => 'Marko',
        'email' => 'marko@gmail.com',
        'age' => '32',
    ],
    [
        'id' => '3',
        'name' => 'Sanja',
        'email' => 'sanja@gmail.com',
        'age' => '27',
    ],
    [
        'id' => '4',
        'name' => 'Iva',
        'email' => 'iva@gmail.com',
        'age' => '42',
    ],
    [
        'id' => '5',
        'name' => 'Alex',
        'email' => 'alex@gmail.com',
        'age' => '49',
    ],
];

asort($users);

?>
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
                <th>Id</th>
                <th>name</th>
                <th>Email</th>
                <th>Godime</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user) : ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['age'] ?></td>
                </tr>
            <?php endforeach; ?>
            
        </tbody>
        
    </table>
    <?='test';?>
</body>
</html>