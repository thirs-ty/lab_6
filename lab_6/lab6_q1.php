<!DOCTYPE html>
<html lang="en">
<head>
    <title>Personal Information</title>
</head>
<body>
    <?php
    $fullName = "Aus Sapri";
    $studentID = "DI220154";
    $program = "Bachelor in Information Technology";
    $studyYear = "2";
    $homeAddress = "No 32A, Jalan Tps 2/3, Taman Pelangi Semenyih, Semenyih, Selanghor 43500";
    ?>
    <table border="1">
        <tr>
            <th>Name</th>
            <td><?php echo $fullName; ?></td>
        </tr>
        <tr>
            <th>Matric Number</th>
            <td><?php echo $studentID; ?></td>
        </tr>
        <tr>
            <th>Course</th>
            <td><?php echo $program; ?></td>
        </tr>
        <tr>
            <th>Year of Study</th>
            <td><?php echo $studyYear; ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo $homeAddress; ?></td>
        </tr>
    </table>
</body>
</html>
