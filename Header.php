<div id="header">
    <?php
        echo "<h1 class='title'>The safest travel agency worldwide!</h1>";
        if(isset($_POST)) {
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $users = simplexml_load_file("Data/users.xml");
            foreach ($users->children() as $_user) {
                if ($_user->email == $user && $_user->password == $pass) {
                    echo "<h2 style='text-align: right'>Greetings, ".$_user->name ." !</h2>";
                }
            }
        }
?>
</div>