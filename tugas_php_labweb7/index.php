<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <h2>Form Input Data</h2>
    <form action="process.php" method="POST">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="dob">Tanggal Lahir:</label><br>
        <input type="date" id="dob" name="dob" required><br><br>

        <label for="job">Pekerjaan:</label><br>
        <select name="job" id="job" required>
            <option value="developer">Developer (Rp. 8,000,000)</option>
            <option value="designer">Designer (Rp. 6,000,000)</option>
            <option value="manager">Manager (Rp. 10,000,000)</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
