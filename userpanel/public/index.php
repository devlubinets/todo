<?php

use userpanel\engine\dB;

require_once "vendor/autoload.php";

const HOST = 'localhost'; //сервер
const USER = 'root'; //пользователь
const PASS = '12345678Ee!!'; //пароль
const DBNAME = 'db_user'; //база

$test = Db::getInstance();
$test->read('users_1', 'name');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <script src="https://kit.fontawesome.com/c036e58277.js" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
      <div class="row">
          <div class="col-12">
              <button class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#create"><i class="fas fa-plus-square"></i></button>
              <table class="table table-striped table-hover mt-2">
                  <thead class="thead-dark">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Action</th>
                  </thead>
                  <tbody>
                  <tr>
                      <td>венов</td>
                      <td>венов</td>
                      <td>венов</td>
                      <td>
                          <a href="" class="btn btn-success"><i class="fa fa-edit"> </i></a>
                          <a href="" class="btn btn-danger"><i class="fa fa-trash-alt"> </i></a>
                      </td>
                  </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>

  <!-- Modal create window -->
  <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Добавить запись</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="" method="post">
                      <div class="form-group">
                          <small>Имя</small>
                          <input type="text" class="form-control" name="name">
                      </div>
                      <div class="form-group">
                          <small>Email</small>
                          <input type="text" class="form-control" name="email">
                      </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                  <button type="submit" class="btn btn-primary" name="add">Сохранить</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <!-- Modal create window -->

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
  </body>
</html>
