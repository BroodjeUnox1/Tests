<?php

$users = ["steven", "bram", "gijs", "dylan", "erik", "gustav", "jorijn", "julia", "luc", "rick", "rorik", "tyra", "yannik", "amyra", "angiee", "britt", "imagen", "isa", "lizy", "niels", "sem", "sjors", "tycho", "youri", "yvet"];

$group_max_size = 4;
$total_groups = ceil(count($users) / $group_max_size);

$groups = [];

for($i=0;$i<$total_groups;$i++){
    
    for($b=0;$b<$group_max_size;$b++){

        // Check if we can fill a complete group
        // If not skip the second for till done
        if(count($users) == 0){
            continue;
        }

        // Set the key of the user to later delete it on array[key] value
        $random_user_key = array_rand($users);

        // Grab the random user
        $random_user = $users[$random_user_key];

        // Check if the group already exists if not create it
        if(!isset($groups[$i])){
            $groups[$i] = [];
        }

        // Store user in it's own group
        array_push($groups[$i], $random_user);

        // Remove user from main array so it cannot be picked twice
        unset($users[$random_user_key]);
    }
}

echo '<pre>' . var_export($groups, true) . '</pre>';

for($z=0;$z < count($groups); $z++) {
    $html = '<h1>';
    $html .= 'groep' . ($z + 1) . ': ';
    foreach($groups[$z] as $key) {
         $html .= "$key, ";
    }
    $html .= '</h1>';
    echo $html;
}

exit();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Page title -->
        <title>George | Homepage</title>
        <!-- meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--  link & cdn's || bootstrap css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- style.css -->
        <link rel="stylesheet" type="text/css" href="homepage.css">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- fontawsome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Baskervville&display=swap" rel="stylesheet">
    </head>
    <body>


        <!-- link js scripts -->
      <!--   <script src="main.js"></script> -->
        <script type="text/javascript">


            </script>
    </body>
</html> 