<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Taskmg</title>
        <style>
            .task{
                border: 1px #999 solid;
                margin: 0 auto;
                width: 800px;
            }
            .task h1{
                color: #777;
                margin: 5px 10px;
                font-family: sans-serif;
                font-size: 21px;
            }
            .due, .owerdue{
                float: right;
                width: 75px;
                border-radius: 0 0 0 10px;
                padding: 5px 10px;
                font-weight: bold;
                color: #fff;
            }
            .due{
                background: #f90;
            }
            .owerdue{
                background: #F00;
            }
            .progress{
                height: 20px;
                background: #eee;
                clear: both;
            }
            .new {
                background: #009;
            }

            .accepted {
                background: #09f;
            }

            .rejected {
                background: #777;
            }

            .started {
                background: #9f9;
            }

            .paused {
                background: #696;
            }

            .finished {
                background: #fff;
            }

            .due {
                background: #f90;
            }

            .overdue {
                background: #f00;
            }
            .overdue,.due,.finished,.paused,.started,.rejected,.accepted,.new{
                height: 20px;
            }
            .new{
                width: 200px;
            }
            .rejected,.accepted{
                width: 400px;
            }
            .paused,.started{
                width: 600px;
            }
            
        </style>
    </head>
    <body>
        <?php
        echo '<b>Loged in</b> ' . $this->session->userdata('uname');
        echo "<br> <a href='" . base_url('/app/logoff') . "'>Log Off</a><br><br>";
        ?>

        <?php foreach ($tasks as $t): ?>
            <div class="task">
                <div class="<?= $t->owerdue ? 'owerdue' : 'due' ?>"><?= $t->owerdue ? 'owerdue' : 'due' ?></div>
                <h1><?= $t->title ?></h1>               
                <div class="progress">
                    <div class="<?= $t->status_name ?>"><?= $t->status_name ?></div>
                </div>
                <p><?= $t->description ?></p>
            </div>
        <?php endforeach; ?>





<!--<form action="<?= base_url('main/newTask') ?>" method="post">
    <input type="text" name="title" maxlength="64" placeholder="task"/>
    <textarea name="description"  placeholder=""></textarea>
    
    <select name="assignee">
        <option></option>
    </select>
</form>-->

    </body>
</html>
