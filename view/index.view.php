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
                        <input type="text" class="form-control" id="subject">
                    </div>
                    <div class="form-group">
                        <label for="priority">Priority:</label>
                        <select class="form-control" id="priority">
                            <option class="selected disabled col">--Choose--</option>
                            <?php foreach ($priority as $item):?>
                            <option class="col"><?= ucfirst($item) ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date">Due date:</label>
                        <input type="date" class="form-control" id="date">
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


</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

</body>
</html>