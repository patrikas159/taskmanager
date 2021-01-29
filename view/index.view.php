<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">
    <title>PHP Todo List</title>
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <link rel="stylesheet" href="./view/style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
</head>

<body>
<div class="container">
    <h1 class="mt-3 text-center">Organize it all with to-do list</h1>
    <div class="row justify-content-center">
        <div class="col-md-10 mt-3">
            <form method="post">
                <div class="form-group rounded formBack">
                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" class="form-control" id="subject" name="subject">
                    </div>
                    <div class="form-group">
                        <label for="priority">Priority:</label>
                        <select class="form-control" id="priority" name="priority">
                            <option class="selected disabled col">--Choose--</option>
                            <?php foreach ($priority as $item):?>
                                <option class="col"><?= ucfirst($item) ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dueDate">Due date:</label>
                        <input type="date" class="form-control" id="duedate" name="duedate">
                    </div>
                                        <div class="form-group">
                                            <label for="status">Status:</label>
                                            <select class="form-control" id="status">
                                                <option class="selected disabled col">--Choose--</option>
                                                <?php foreach ($status as $item):?>
                                                    <option class="col"><?= ucfirst($item) ?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="percent">Percent completed:</label>
                                            <select class="form-control" id="percent">
                                                <option class="selected disabled col">--Choose--</option>
                                                <?php foreach ($percent as $item):?>
                                                    <option class="col"><?= ucfirst($item) ?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                </div>
                <div class="form-group d-flex justify-content-center">
                    <button type="submit" name="send" id="send" class="mt-3 col-md-4 btn-lg rounded">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3 justify-content-center">
        <table class="table mx-auto text-center">
            <thead id="thead">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Subject</th>
                <th scope="col">Priority</th>
                <th scope="col">Due date</th>
                <th scope="col">Status</th>
                <th scope="col">Percent completed</th>
                <th scope="col">Modified on</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>