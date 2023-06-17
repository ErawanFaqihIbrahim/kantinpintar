<!-- resources/views/dashboard-form.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Input Pembeli ID</title>
</head>
<body>
    <form action="{{ url('/berirating1') }}" method="get">
        @csrf
        <label for="akunPembeliID">ID Pembeli</label>
        <input type="text" id="akunPembeliID" name="akunPembeliID"> <br>
        <br>
        <label for="menuID">ID Menu</label>
        <input type="text" id="menuID" name="menuID"> <br>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
