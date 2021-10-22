<?php
include('includes/functions.inc.php');
include('includes/dbconnect.inc.php');
include('templates/header.php');
 ?>
<h1>Opret ny aktivitet</h1>
       <form method="POST" enctype="multipart/form-data">
        <div class="form-row align-items-center">
          <div class="col-sm-3 my-1">
           <label for="name">Navn på Aktivitet</label>
           <textarea class="form-control" id="name" rows="1"></textarea>
         </div>
         <div class="col-sm-3 my-1">
           <label for="time">Vælg venligst tidspunkt for aktiviteten</label>
           <input type="datetime-local" name="time">
         </div>
         <div class="col-sm-3 my-1">
           <label for="description">Beskrivelse</label>
           <textarea class="form-control" id="description" rows="3"></textarea>
         </div>
        </div>
        <div class="col-sm-3 my-1">
          <input type="file" name="picture"/>
        </div>
        <button type="submit" class="btn btn-primary">Opret</button>
      </form>

      <?php
      if (isset($_POST['name'], $_POST['time'], $_POST['description'], $_POST['picture'],))
          {
            $name = $_POST['name'];
            $time = $_POST['time'];
            $description = $_POST['description'];
            $picture = $_POST['picture'];


$db_data= performQuery("SELECT * FROM events");
        while ($row = mysqli_fetch_assoc($db_data)) {
          $id = $row['id'];
          performQuery("INSERT INTO events('name', 'time', 'description', 'picture') VALUES ('$name', '$time', '$description', '$picture')");
}
}
       ?>
