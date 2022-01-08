<?php
require '../admin/functions.php';

$keyword = $_GET["keyword"];

$query = 
"SELECT * FROM faq
WHERE title LIKE '%$keyword%'";

$faqs = query($query);
?>

<table id="pertanyaan">
    <tr>
        <th>Topik</th>
        <th></th>
    </tr>
    <?php foreach ($faqs as $faq) : ?>
        <tr>
            <td><?= $faq['title'] ?></td>
            <td><a href="#">Detail</a></td>
        </tr>
    <?php endforeach; ?>
</table>