<?php
include('includes/functions.inc.php');
include('includes/dbconnect.inc.php');
include('templates/header.php');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </head>

<body>



          <div class="container">
            <h2>Aktiviteter idag</h2>
            <p></p>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Tid</th>
                  <th>Aktivitet</th>
                  <th>Beskrivelse</th>
                  <th>Piktogram</th>
                  <th>Udført</th>
                </tr>
              </thead>
              <tbody>
                <?php $db_events_data = performQuery("SELECT * FROM events");
                  while ($events = mysqli_fetch_assoc($db_events_data)) { ?>
                    <tr>
                      <td><?php echo $events['time'] ?></td>
                      <td><?php echo $events['name'] ?></td>
                      <td><?php echo $events['description'] ?></td>
                      <td> <img src="<?php echo $events['picture'] ?>" width="140" height="62.5"> </td>
                      <td> <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" >
                            </div>
                      </td>




                    </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>

          </body>
