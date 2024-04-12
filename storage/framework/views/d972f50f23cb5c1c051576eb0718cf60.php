<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reminder Drinking Schedule</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #4F8890;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #4F8890;
        }
        td {
            background-color: #fff;
        }
        .signature {
            margin-top: 20px;
            text-align: center;
        }
        .signature input[type="file"] {
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 200px;
        }
        .signature button {
            padding: 8px 20px;
            border: none;
            background-color: #4F8890;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Pengingat Minum TTD</h2>
    <table>
        <thead>
            <tr>
                <th>Week</th>
                <th>Date</th>
                <th>Upload Foto Dokumen</th>
            </tr>
        </thead>
        <tbody>
            <!-- Generate rows for 52 weeks -->
            <!-- You can use a loop in your server-side code to generate these rows -->
            <!-- For example, in PHP, you can use a loop to generate these rows -->
            <?php for ($i = 1; $i <= 52; $i++) { ?>
                <tr>
                    <td>Week <?php echo $i; ?></td>
                    <td><input type="date" name="week<?php echo $i; ?>_date"></td>
                    <td><input type="file" name="week<?php echo $i; ?>_document" accept="image/*"></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <div class="signature">
        <label for="signature">Signature:</label>
        <input type="text" id="signature" name="signature" placeholder="Your Signature">
        <button type="submit">Submit</button>
    </div>
</body>
</html>
<?php /**PATH D:\magang\ikipesat\resources\views/ttd.blade.php ENDPATH**/ ?>