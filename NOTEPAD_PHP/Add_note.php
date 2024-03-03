

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create NewNote</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body{
            background-color: #7583ff;
            color: #fff;
        }

        .active{
            display: flex;
        }

    </style>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['btn_Add_note'])) {
        $Note = $_POST['notes'];
        $Title = $_POST['title'];
        $conn = mysqli_connect('localhost', 'root', '', 'notepad');
    if (!$conn) {
        die("<h1>Connection Problem!</h1>");
    } else {

        ?>

                    <?php
                    $Query =  "INSERT INTO note_db(Title,Note) VALUES('$Title','$Note'); ";
                    if (mysqli_query($conn, $Query)) {
                    ?>
                    <script>
                        window.alert("Success Adding NEW NOTE");
                        window.location.href = "index.php";
                    </script>

                    <?php
                    } else {
                    ?>
                     <script>
                         alert("Error Adding NEW NOTE" );
                     </script>
                    <?php
                    }
                    }
                    ?>


        <?php


    }
    ?>


</head>

<body class="d-flex flex-column justify-content-center align-items-center">

<div id="container" class="container mt-3">
    <h2 class="fw-bold" >Create New  Note</h2>
    <form method="post">
        <input class="form-control" name="title" type="text" placeholder="Title.." required>
        <br>
        <div class="form-floating">
            <textarea name="notes" class="form-control " placeholder="New Note" id="floatingTextarea2" style="height: 130px" required></textarea>
            <label for="floatingTextarea2">Note</label>
        </div>
        <br>
        <button id="btn_add" name="btn_Add_note" type="submit" class="btn btn-dark">Add Note</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>