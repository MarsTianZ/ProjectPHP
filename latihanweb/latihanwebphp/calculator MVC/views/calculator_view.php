<!DOCTYPE html>
<html>

<head>
    <title>Calculator</title>
</head>

<body>
    <h1>Calculator</h1>
    <form method="POST" action="index.php">
        <input type="number" name="operand1" required>
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>
        <input type="number" name="operand2" required>
        <input type="submit" value="Calculate">
    </form>
    <?php if (isset($result)) : ?>
        <h2>Result: <?php echo $result; ?></h2>
    <?php endif; ?>
</body>

</html>