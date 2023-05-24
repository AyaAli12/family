<center>
<a href="/darrebni/task/?action=logout">Log Out</a>
<h1>Users</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>password</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['password'] ?></td>
                <td>
                    <form method="post" action="/darrebni/task?action=edit&id=<?= $user['id'] ?>">
                        <button>Edit</button>
                    </form>
                    <form method="post" action="/darrebni/task/?action=delete&id=<?= $user['id'] ?>">
                        
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
        </center>