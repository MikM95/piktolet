<?php
include('includes/functions.inc.php');
include('includes/dbconnect.inc.php');
include('templates/header.php');
 ?>
<h1>Opret ny aktivitet</h1>
       <form method="POST" enctype="multipart/form-data">
        <div class="form-row align-items-center">
          <div class="col-sm-3 my-1">
           <label >Navn på Aktivitet</label>
           <textarea name="name" for="name" class="form-control" id="name" rows="1"></textarea>
         </div>
         <div class="col-sm-3 my-1">
           <label >Vælg venligst tidspunkt for aktiviteten</label>
           <input name="time" for="time" type="datetime-local">
         </div>
         <div class="col-sm-3 my-1">
           <label >Beskrivelse</label>
           <textarea name="description" for="description" class="form-control" id="description" rows="3"></textarea>
         </div>
         <div class="col-sm-3 my-1">
           <label >Web link til billedet</label>
           <textarea name="picture" for="picture" class="form-control" id="picture" rows="3"></textarea>
         </div>
        </div>
        <button type="submit" class="btn btn-primary">Opret</button>
      </form>

      <?php
      if (isset($_POST['name'], $_POST['time'], $_POST['description'], $_POST['picture']))
          {
            echo "kage";
            $name = $_POST['name'];
            $time = $_POST['time'];
            $description = $_POST['description'];
            $picture = $_POST['picture'];

            performQuery("INSERT INTO events(name, time, description, picture) VALUES ('$name', '$time', '$description', '$picture')");
          }
       ?>
