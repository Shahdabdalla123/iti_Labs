<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
    <link rel="stylesheet" href="table.css">
</head>
<body>
    <h2>Student Records</h2>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Country</th>
                <th>Gender</th>
                <th>Skills</th>
                <th>Username</th>
                <th>Department</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $file = fopen('customer.txt', 'r');
            while (!feof($file)) 
            {
                $line = fgets($file);
                if ($line)
                 {
                    $first_name = trim(str_replace('First Name:', '', $line));
                    $last_name = trim(str_replace('Last Name:', '', fgets($file)));
                    $address = trim(str_replace('Address:', '', fgets($file)));
                    $country = trim(str_replace('Country:', '', fgets($file)));
                    $gender = trim(str_replace('Gender:', '', fgets($file)));
                    $skills = trim(str_replace('Skills:', '', fgets($file)));
                    $username = trim(str_replace('Username:', '', fgets($file)));
                    $department = trim(str_replace('Department:', '', fgets($file)));

                    echo "<tr>";
                    echo "<td>$first_name</td>";
                    echo "<td>$last_name</td>";
                    echo "<td>$address</td>";
                    echo "<td>$country</td>";
                    echo "<td>$gender</td>";
                    echo "<td>$skills</td>";
                    echo "<td>$username</td>";
                    echo "<td>$department</td>";
                    echo "<td><a href='edit.php?username=$username'><button class='ebutton'>Edit</button></a></td>";
                    echo "<td><a href='deleted.php?username=$username'><button class='rbutton'>Delete</button></a></td>";
                    echo "</tr>";
                }
            }
            fclose($file);
            ?>
        </tbody>
    </table>
</body>
</html>