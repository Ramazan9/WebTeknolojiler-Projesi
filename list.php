<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the index page if not logged in
    header('Location: login.html');
    exit;
}

$servername = "localhost";
$username = "vacsom98_somalia";
$password = "somalia_12345";
$dbname = "vacsom98_somalia";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT name, email, subject, message FROM contact_form";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Contacts</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            border-bottom: 2px solid #333;
            margin-bottom: 20px;
            padding-bottom: 10px;
        }

        /* Responsive table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px 20px;
        }

        tr {
            transition: all 0.3s ease;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        th {
            background-color: #009879;
            color: white;
        }

        @media screen and (max-width: 600px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }
            thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }
            tr { margin: 0.5rem 0; }
            td {
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
            }
            td:before {
                position: absolute;
                top: 0;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                content: attr(data-label);
            }
        }
    </style>
</head>
<body>
    <h1>User Contacts</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td data-label='Name'>" . $row["name"] . "</td>";
                    echo "<td data-label='Email'>" . $row["email"] . "</td>";
                    echo "<td data-label='Subject'>" . $row["subject"] . "</td>";
                    echo "<td data-label='Message'>" . $row["message"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No records found.</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
