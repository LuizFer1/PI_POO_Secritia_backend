<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secritia</title>
</head>
<body>
<h1>
    hello World
</h1>
<?php if(session()->has("user")): ?>
<?php echo session()->get("user")->nome_usuario; ?>
<?php endif ?>
</body>
</html>