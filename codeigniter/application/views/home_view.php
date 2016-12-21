<!DOCTYPE html>
<html>
<head>
    <title>Marc Nares</title>
</head>
<body>
<table border="2">
    <tr>
        <th>Full Name</th>
        <th>Nickname</th>
        <th>Email Address</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Phone No.</th>
        <th>Comment</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($user as $usr) : ?>
        <tr>
            <td><?=  $usr->fullname ?></td>
            <td><?=  $usr->nickname ?></td>
            <td><?=  $usr->email ?></td>
            <td><?=  $usr->address ?></td>
            <td><?=  $usr->gender ?></td>
            <td><?=  $usr->phoneNum ?></td>
            <td><?=  $usr->comment ?></td>
            <td><?=  anchor('Users/edit/'.$usr->user_id,'Edit',['role'=>'button']) ?></td>
            <td><?=  anchor('Users/delete/'.$usr->user_id,'Delete',['role'=>'button','onclick'=>'return confirm(\'Are you sure? \')']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<br/>
<?=  anchor('Users/index/','Create new user',['role'=>'button']) ?>
<br/>



</body>
</html>