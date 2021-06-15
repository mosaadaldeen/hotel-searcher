<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Hotel Search</title>
  </head>
  <body>

  <form action="search.php" method="POST" class="col-md-4 offset-md-4 mt-5 pt-3">
      <div class="input-group mb-3">
          <input type='search' name="search"  id="search"  class="form-control" placeholder="Search for hotels ......">
          <div class="input-group-append">
          </div>
        </div>
    </form>

  <div id="result"></div>

    <?php
      $json = json_decode(file_get_contents('hotels.json'), true);

                foreach ($json as $key => $value) {
                  echo "
                  <ul style='width: 300px;'' class='list-group mx-auto'>
                    <li class='list-group-item text-white bg-dark'>{$value['code']}</li>
                    <li class='list-group-item'  style='cursor:pointer;'>{$value['hotel']}</li>
                    <li class='list-group-item'>{$value['postCode']}</li>
                    <li class='list-group-item'>{$value['straat']}</li>
                    <li class='list-group-item'>{$value['regio']}</li>
                    <li class='list-group-item'>{$value['provinsie']}</li>
                    <li class='list-group-item'>{$value['nummer']}</li>
                    <li class='list-group-item'>{$value['email']}</li>
                  </ul>
                  <br />";
              }
      ?>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="./main.js"></script>
</body>
</html>
