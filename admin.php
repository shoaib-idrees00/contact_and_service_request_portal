<?php

require_once "config/database.php";

$sql = "SELECT * FROM service_requests
        ORDER BY created_at DESC";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin - Service Requests</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<header class="header">

    <div class="container nav-container">

        <h1 class="logo">Admin Panel</h1>

        <nav>
            <a href="index.php">Home</a>
        </nav>

    </div>

</header>


<main>

<section class="admin-section">

<div class="container">

<h2>Service Requests</h2>


<div class="table-container">

<table>

<thead>

<tr>

    <th>Name</th>
    <th>Email</th>
    <th>Service</th>
    <th>Budget</th>
    <th>Contact</th>
    <th>Date</th>
    <th>Action</th>

</tr>

</thead>


<tbody>

<?php

if ($result->num_rows > 0):

    while ($row = $result->fetch_assoc()):

?>

<tr>


    <td>
        <?php echo htmlspecialchars($row["full_name"]); ?>
    </td>

    <td>
        <?php echo htmlspecialchars($row["email"]); ?>
    </td>


    <td>
        <?php echo htmlspecialchars($row["service"]); ?>
    </td>

    <td>
        <?php echo htmlspecialchars($row["budget"]); ?>
    </td>


    <td>
        <?php echo htmlspecialchars($row["contact_method"]); ?>
    </td>

    <td>
        <?php echo htmlspecialchars($row["created_at"]); ?>
    </td>

    <td>

        <a
            href="delete.php?id=<?php echo $row["id"]; ?>"
            onclick="return confirm('Are you sure you want to delete this request?');"
        >
            Delete
        </a>

    </td>

</tr>

<?php

    endwhile;

else:

?>

<tr>

    <td colspan="7">
        No service requests found.
    </td>

</tr>

<?php endif; ?>

</tbody>

</table>

</div>

</div>

</section>

</main>


</body>

</html>