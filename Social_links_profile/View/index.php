<!doctype html><html lang="en"><head>    <meta charset="UTF-8">    <meta name="viewport"          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">    <meta http-equiv="X-UA-Compatible" content="ie=edge">    <script src="https://kit.fontawesome.com/d4532539ca.js" crossorigin="anonymous"></script>    <link rel="stylesheet" href="../css/bootstrap.min.css">    <link rel="stylesheet" href="../app.css">    <script src="../js/bootstrap.bundle.min.js"></script>    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>    <title>Todo_list</title></head><body><header class="container-fluid p-3 text-light d-flex justify-content-between align-items-center">    <h1 class="fw-bold">TODO-APP</h1>    <button style="background-color:#635fc3" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn fw-bold text-light">Add New TODO</button></header><main class="container-fluid  row d-flex justify-content-center align-items-center mt-5   p-3"><div id="todo_container" class="d-flex col-lg-3 flex-column gap-2 p-1">    <div class="d-flex justify-content-between">       <div class="d-flex gap-1">           <div class="circle1"></div>           <?php           include "../Models/config.php";           global $conn;           $Query = "SELECT COUNT(*) as counted FROM todo_app_tb WHERE status = 'TODO';";           $Query_run = mysqli_query($conn,$Query);           $row =  mysqli_fetch_assoc($Query_run);           $count = $row['counted'];           ?>           <h6>TODO (<?php echo $count ?>)</h6>       </div>    </div>    <?php    include "../Models/config.php";    global $conn;    $Query = "Select * from todo_app_tb";    $result = mysqli_query($conn,$Query);    if(mysqli_num_rows($result) > 0){        while ($row = mysqli_fetch_assoc($result)){            $ID = $row['ID'];            $todo_title= $row['todo_title'];            $todo = $row['todo'];            $status = $row['status'];            if($status  === "TODO"){                ?>                <div id="con_todo" class="d-flex justify-content-between rounded-3 p-2">                    <div>                        <h5><?php echo$todo_title ?></h5>                        <p>10/33/2024</p>                    </div>                    <i id="menu_icon" class="fa-solid fa-ellipsis-vertical"></i>                    <div  id="menu" class="menu">                        <ul>                            <li>                                <button id="details" value="<?php echo$ID ?>" class="text-light btn">                                    <i class="fa-regular fa-eye"></i>                                    View                                </button>                            </li>                            <li>                                <button id="view" value="<?php echo$ID ?>" class="btn text-light">                                    <i class="fa-regular fa-pen-to-square"></i>                                    Edit                                </button>                            </li>                            <li>                                <button id="delete_btn" class="btn text-light" value="<?php echo$ID ?>" >                                    <i class="fa-solid fa-trash-can"></i>                                    Delete                                </button>                            </li>                        </ul>                    </div>                </div>                <?php            }        }    }    ?><!--1-->    </div>    <!--2-->    <div  class="d-flex flex-column gap-2 col-lg-3 p-1">          <div class="d-flex gap-1">              <div class="circle2"></div>              <?php              include "../Models/config.php";              global $conn;              $Query = "SELECT COUNT(*) as counted FROM todo_app_tb WHERE status = 'DONE';";              $Query_run = mysqli_query($conn,$Query);              $row =  mysqli_fetch_assoc($Query_run);              $count = $row['counted'];              ?>              <h6>DONE (<?php echo $count ?>)</h6>          </div>        <?php        include "../Models/config.php";        global $conn;        $Query = "Select * from todo_app_tb";        $result = mysqli_query($conn,$Query);        if(mysqli_num_rows($result) > 0){            while ($row = mysqli_fetch_assoc($result)){                $todo_title= $row['todo_title'];                $todo = $row['todo'];                $status = $row['status'];                $ID = $row['ID'];                if($status  == "DONE"){                    ?>                    <div id="con_todo" class="d-flex justify-content-between rounded-3 p-2">                        <div>                            <h5><?php echo$todo_title ?></h5>                            <p>10/33/2024</p>                        </div>                        <i id="menu_icon" class="fa-solid fa-ellipsis-vertical"></i>                        <div  id="menu" class="menu">                            <ul>                                <li>                                    <button id="details" value="<?php echo$ID ?>" class="text-light btn" >                                        <i class="fa-regular fa-eye"></i>                                        View                                    </button>                                </li>                                <li>                                    <button id="view" value="<?php echo$ID ?>" class="text-light btn">                                        <i class="fa-regular fa-pen-to-square"></i>                                        Edit                                    </button>                                </li>                                <li>                                    <button  id="delete_btn" value="<?php echo$ID ?>" class="text-light btn">                                        <i class="fa-solid fa-trash-can"></i>                                        Delete                                    </button>                                </li>                            </ul>                        </div>                    </div>                    <?php                }            }        }        ?>    </div>    <div class="d-flex flex-column gap-2 col-lg-3">        <div class="d-flex gap-1">            <div class="circle3"></div>            <?php           include "../Models/config.php";          global $conn;         $Query = "SELECT COUNT(*) as counted FROM todo_app_tb WHERE status = 'DOING';";        $Query_run = mysqli_query($conn,$Query);       $row =  mysqli_fetch_assoc($Query_run);        $count = $row['counted'];        ?>            <h6>DOING (<?php echo $count?>)</h6>        </div><!--        card-->        <?php         include "../Models/config.php";        global $conn;        $Query = "Select * from todo_app_tb";        $result = mysqli_query($conn,$Query);        if(mysqli_num_rows($result) > 0){            while ($row = mysqli_fetch_assoc($result)){                $todo_title= $row['todo_title'];                $todo = $row['todo'];                $status = $row['status'];                $ID = $row['ID'];                if($status  == "DOING"){                    ?>                    <div id="con_todo" class="d-flex justify-content-between rounded-3 p-2">                        <div>                            <h5><?php echo$todo_title ?></h5>                            <p>10/33/2024</p>                        </div>                        <i id="menu_icon" class="fa-solid fa-ellipsis-vertical"></i>                        <div id="menu" class="menu">                            <ul>                                <li>                                    <button id="details" value="<?php echo$ID ?>" class="text-light btn">                                        <i class="fa-regular fa-eye"></i>                                        View                                    </button>                                </li>                                <li>                                    <button id="view" value="<?php echo$ID ?>" class="text-light btn">                                        <i class="fa-regular fa-pen-to-square"></i>                                        Edit                                    </button>                                </li>                                <li>                                    <button  id="delete_btn" value="<?php echo$ID ?>" class="text-light btn">                                        <i class="fa-solid fa-trash-can"></i>                                        Delete                                    </button>                                </li>                            </ul>                        </div>                    </div>        <?php                }            }        }        ?>    </div></main><!--MODAL for adding todo --><div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">    <div class="modal-dialog modal-dialog-centered">        <div class="modal-content">            <div class="modal-header rounded-0 p-3" style="  background-color: #2c2c38;">                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Todo</h1>                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>            </div>            <div class="modal-body d-flex flex-column gap-2">                <div>                    <label for="todo_title">TODO TITLE</label>                    <input class="form-control" type="text" id="todo_title" placeholder="Enter Todo Title..">                </div>            <div>                <label for="todo">TODO</label>                <input class="form-control" type="text" id="todo" placeholder="Enter Todo..">            </div>                <select id="status" class="form-select" aria-label="Default select example">                    <option selected>STATUS</option>                    <option value="TODO">TODO</option>                    <option value="DOING">DOING</option>                    <option value="DONE">DONE</option>                </select>                <div class="form-floating">                    <textarea  class="form-control" placeholder="Description" id="floatingTextarea2" style="height: 100px"></textarea>                    <label for="floatingTextarea2">Todo Description</label>                </div>            </div>            <div class="modal-footer" >                <button id="create_todo" type="button"  style="background-color:#635fc3" class="btn text-light fw-bold">Create New Todo</button>            </div>        </div>    </div></div><div id="data_con"></div><script src="../app.js"></script></body></html>