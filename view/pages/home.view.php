<?php include 'view/partials/header.php' ?>

    <h1 class="mt-3 text-center">Organize it all with to-do list</h1>

    <div class="form-group d-flex justify-content-center mt-5 mb-5">
        <button class="col-md-4 btn-lg rounded"><a href="new-task" class="text-light">Add new task</a></button>
    </div>

<?php if (isset($_SESSION['todo_list/new-task'])): ?>
    <div class="alert-dark mt-3 text-light rounded">
        New task created: <?= ucfirst($_SESSION['todo_list/new-task'][0]);
        unset($_SESSION['todo_list/new-task']); ?>
    </div>
<?php endif; ?>

    <div class="row mt-3 justify-content-center">
        <table class="table mx-auto text-center">
            <thead id="thead">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Subject</th>
                <th scope="col">Priority</th>
                <th scope="col">Due date</th>
                <th scope="col">Status</th>
                <!--                <th scope="col">Percent completed</th>-->
                <th scope="col">Modified on</th>
                <th>#</th>
                <th>#</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($tasks->allTasks() as $task): ?>
                <?php if ($task['status'] == 1): ?>
                    <tr class="line">
                        <td><img src="./view/img/list.png" height="25px"></td>
                        <td><?= ucfirst($task['subject']); ?></td>
                        <td><p class="text-center border rounded-pill bg-secondary text-light"><?= ucfirst($task['priority']); ?></p></td>
                        <td><?= $task['dueDate']; ?></td>
                        <td>
                            <div class="progress-bar bg-secondary rounded">Completed</div>
                        </td>
                        <td><?= $task['modified']; ?></td>
                        <td><a href="complete-task/id/<?= $task['id']; ?>" class="btn btn-secondary">Done</a></td>
                        <td><a href="delete-task/id/<?= $task['id']; ?>" class="btn btn-secondary"
                               name="delete">Delete</a>
                        </td>
                    </tr>
                <?php else: ?>
                    <tr>
                        <td><img src="./view/img/list.png" height="25px"></td>
                        <td><?= ucfirst($task['subject']); ?></td>
                        <?php if ($task['priority'] == "low"): ?>
                            <td>
                                <p class="text-center border rounded-pill bg-success text-light"><?= ucfirst($task['priority']); ?></p>
                            </td>
                        <?php elseif ($task['priority'] == "normal"): ?>
                            <td>
                                <p class="text-center border rounded-pill bg-primary text-light"><?= ucfirst($task['priority']); ?></p>
                            </td>
                        <?php elseif ($task['priority'] == "high"): ?>
                            <td>
                                <p class="text-center border rounded-pill bg-danger text-light"><?= ucfirst($task['priority']); ?></p>
                            </td>
                        <?php endif; ?>


                        <td><?= $task['dueDate']; ?></td>
                        <td>
                            <div class="progress-bar progress-bar-striped rounded">In progress</div>
                        </td>
                        <td><?= $task['modified']; ?></td>
                        <td><a href="complete-task/id/<?= $task['id']; ?>" class="btn btn-success">Done</a></td>
                        <td><a href="delete-task/id/<?= $task['id']; ?>" class="btn btn-danger" name="delete">Delete</a>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php include 'view/partials/bottom.php' ?>