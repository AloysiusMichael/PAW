<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post" action ="proses.php">
        Nilai Pertama <input type = "text" name = "nilai1">
        <br><br>
        Nilai Kedua <input type = "text" name = "nilai2"><br><br>

        <select name = "attributes[]" multiple>
            <option value = "pil1">Pilihan 1 </option>
            <option value = "pil2">Pilihan 2 </option>
            <option value = "pil3">Pilihan 3 </option>

        </select>


        <input type = "submit" value = "kirim">
        <input type = "reset" value = "Kosongkan">

    </form>
</body>
</html>