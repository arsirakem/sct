<?php require_once __DIR__ . '/../extra/auth.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Website</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>
        My Simple Website
        <?php if (Auth::check()): ?>
            <a href="logout" class="btn btn-default pull-right">Logout</a>
        <?php else: ?>
            <a href="#" class="btn btn-primary pull-right">Login</a>
        <?php endif; ?>
    </h1>

    <br>

    <div class="well">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur debitis distinctio dolore
        eligendi enim fugit ipsa nemo odio odit quam quibusdam sapiente, voluptatum? Asperiores quis, rerum? Aperiam
        iusto nostrum repellat?
    </div>

    <?php if (Auth::check()): ?>
        <h4>Random List</h4>
        <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
    <?php endif; ?>
</div>

</body>
</html>