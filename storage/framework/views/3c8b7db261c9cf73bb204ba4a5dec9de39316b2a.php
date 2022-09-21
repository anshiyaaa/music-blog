<html>
<head>
    <title>Create</title>
</head>
<body>
<form method="post" action="<?php echo e(action([\App\Http\Controllers\PagesController::class,"store"])); ?>">
    <?php echo csrf_field(); ?>
    <label>Name:</label>
    <input type="text" name="name" required>
    <label>Address</label>
    <input type="text" name="address" required>
    <label>Age</label>
    <input type="number" name="age" required>
    <label>DOB</label>
    <input type="date" name="dob" required>
    <input type="submit">

</form>
</body>
</html>
<?php /**PATH C:\Users\HP\OMTBS\resources\views/create.blade.php ENDPATH**/ ?>