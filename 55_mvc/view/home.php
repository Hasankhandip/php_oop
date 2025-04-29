<?php include "inc/header.php"; ?>

<table class="tblone">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Department</th>
        <th>Age</th>
        <th>Action</th>
    </tr>

    <?php
        $i = 0;
        foreach ($user as $value) {
            $i++;
        ?>

    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $value['name']; ?></td>
        <td><?php echo $value['dep']; ?></td>
        <td><?php echo $value['age']; ?></td>
        <td>
          <?php echo "<a href='teacher.php?action=update&id=" . $value['id'] . "'>Edit</a>"; ?> ||
          <?php echo "<a href='teacher.php?action=delete&id=" . $value['id'] . "' onClick='return confirm(\"Are you sure to delete this\")'>Delete</a>"; ?>
        </td>
    </tr>

    <?php
        }
    ?>

  </table>

<?php include "inc/footer.php"; ?>