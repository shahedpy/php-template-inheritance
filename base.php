<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?? 'Default Title'; ?></title>
</head>
<body>
    <header>
        <h1>Site Header</h1>
    </header>
    <main>
        <?php echo $content ?? ''; ?>
    </main>
    <footer>
        <p>Site Footer</p>
    </footer>
</body>
</html>
