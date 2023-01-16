<?php

if(isset($_GET['action']))
{
    $action = $_GET['action'];

    switch($action)
    {
        case "deleteborrow":
            {
                $id = $_GET['id'];
                $sql = "DELETE FROM tbl_borrower WHERE id = '$id'";
                break;
            }
    }
}

$sql = "SELECT * FROM tbl_borrower";
$result = mysqli_query($connect,$sql);

?>

<div class="container-fluid pt-4 px-4">

    <div class="bg-light text-center rounded p-4 mt-5">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Borrower</h6>
        </div>
        <div class="table-responsive">

            <?php
                if(mysqli_num_rows($result) > 0)
                {
            ?>
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">Nº</th>
                        <th scope="col">Username</th>
                        <th scope="col">Book Title</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i=1;
                        while($row = mysqli_fetch_array($result))
                        {
                    ?>
                    <tr>
                        <td><?=$i?></td>
                        <td><?=$row['username']?></td>
                        <td><?=$row['title']?></td>
                        <td><?=$row['date']?></td>
                        <td><?=$row['time']?></td>
                        <td>
                            <a href="index.php?p=feedback.php&id=<?=$row['id']?>&action=deleteborrow">
                                <span class="fa fa-trash"></span>
                            </a>
                        </td>
                    </tr>
                    <?php
                        $i++;
                        }
                    ?>
                </tbody>
            </table>
            <?php
                }else{
            ?>
            <h2>No Table</h2>
            <?php
                }
            ?>
        </div>
    </div>

</div>