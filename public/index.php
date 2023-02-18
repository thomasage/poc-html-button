<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HTML Button</title>
</head>
<body>
<form method="get" action="/" id="my_form">
    <p>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <button type="submit" name="source" value="inside">Inside button (GET)</button>
    </p>
</form>
<p>
    <button type="submit" name="source" value="outside" form="my_form" formmethod="post">Outside button (POST)</button>
</p>
<hr>
<h3>Method</h3>
<pre><?php echo $_SERVER['REQUEST_METHOD']; ?></pre>
<h3>Name</h3>
<pre><?php var_dump($_REQUEST['name'] ?? null); ?></pre>
<h3>Source</h3>
<pre><?php var_dump($_REQUEST['source'] ?? null); ?></pre>
</body>
</html>
