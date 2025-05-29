# php Template Inheritance
PHP does not have built-in template inheritance, we can simulate it using `include`, `require`, and **output buffering**.
## 🔹 Step 1: Create base.php (your "base.html")
```php
<!-- base.php -->
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?? 'Default Title'; ?></title>
</head>
<body>
    <header><h1>Site Header</h1></header>
    <main><?php echo $content ?? ''; ?></main>
    <footer><p>Site Footer</p></footer>
</body>
</html>
```
## 🔹 Step 2: Create a child template like home.php
```php
<!-- home.php -->
<?php
$title = "Home Page";

ob_start();
?>
    <h2>Welcome to the Home Page!</h2>
    <p>This content comes from the child template.</p>
<?php
$content = ob_get_clean();

include 'base.php';
```
## 🔹 How It Works:
- `ob_start()` starts output buffering (captures HTML).
- `$content` holds the main content block.
- `base.php` then injects that content in the appropriate place.

## 🔁 Optional - Define Reusable Functions (for DRYness)
If we want to simulate `{% block %}` and `{% endblock %}` more cleanly, you could define functions or use a mini templating system like Plates, Twig, or even Blade (Laravel).
