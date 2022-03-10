<?php
// Include the function file
include 'functions.php';
session_start();
// Connect to MySQL
$pdo = pdo_connect_mysql();
// MySQL query that retrieves all the polls and poll answers
$stmt = $pdo->query('SELECT p.*, pa.answers FROM polls p OUTER APPLY
        (   SELECT STRING_AGG(pa.title, \', \') WITHIN GROUP (ORDER BY pa.id) AS answers FROM
                poll_answers pa
            WHERE
                pa.poll_id = p.id
        ) pa;');

$polls = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('Polls')?>

<div class="content home">
	<h2>Polls</h2>
	<p>Welcome to the home page! You can view the list of polls below.</p>
	<a href="create.php" class="create-poll">Create Poll</a>
	<table>
        <thead>
            <tr>
                <td>#</td>
                <td>Title</td>
				<td>Answers</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($polls as $poll): ?>
            <tr>
                <td><?=$poll['id']?></td>
                <td><?=$poll['title']?></td>
				<td><?=$poll['answers']?></td>
                <td class="actions">
					<a href="vote.php?id=<?=$poll['id']?>" class="view" title="View Poll"><i class="fas fa-eye fa-xs"></i></a>
                    <a href="delete.php?id=<?=$poll['id']?>" class="trash" title="Delete Poll"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?=template_footer()?>
