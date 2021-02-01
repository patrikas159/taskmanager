<?php include 'view/partials/header.php' ?>

<h1 class="mt-3 text-center">Organize it all with to-do list</h1>

<div class="form-group d-flex justify-content-center mt-5 mb-5">
    <button class="col-md-4 btn-lg rounded"><a href="new-task" class="text-light">Add new task</a></button>
</div

<div class="row mt-3 justify-content-center">
    <table class="table mx-auto text-center">
        <thead id="thead">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Subject</th>
            <th scope="col">Priority</th>
            <th scope="col">Due date</th>
<!--            <th scope="col">Status</th>-->
            <!--                <th scope="col">Percent completed</th>-->
<!--            <th scope="col">Modified on</th>-->
            <th>#</th>
            <th>#</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($tasks->allTasks() as $task): ?>
        <?php if ($task['status'] == 1):?>
            <tr class="line">
                <td><?= $task['id']; ?></td>
                <td><?= ucfirst($task['subject']); ?></td>
                <td><?= ucfirst($task['priority']); ?></td>
                <td><?= $task['dueDate']; ?></td>
<!--                <td></td>-->
<!--                <td></td>-->
                <td><a href="complete-task/id/<?= $task['id']; ?>" class="btn btn-dark">Done</a></td>
                <td><a href="delete-task/id/<?= $task['id']; ?>" class="btn btn-dark" name="delete">Delete</a></td>
            </tr>
    <?php else:?>
        <tr>
            <td><?= $task['id']; ?></td>
            <td><?= ucfirst($task['subject']); ?></td>
            <td><?= ucfirst($task['priority']); ?></td>
            <td><?= $task['dueDate']; ?></td>
            <!--                <td></td>-->
            <!--                <td></td>-->
            <td><a href="complete-task/id/<?= $task['id']; ?>" class="btn btn-dark">Done</a></td>
            <td><a href="delete-task/id/<?= $task['id']; ?>" class="btn btn-dark" name="delete">Delete</a></td>
        </tr>
    <?php endif;?>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include 'view/partials/bottom.php'?>