<?php

    $accounts = file_get_contents('../addNewAccount/accounts.json');

    $data = json_decode($accounts, true);

    usort($data, function($a, $b){
        if ($a['surname'] < $b['surname']) {
            return -1;
        }
        if ($a['surname'] > $b['surname']) {
            return 1;
        }
        return 0;
    });

    foreach($data as $key => $account) {
        $num = $key + 1;
        $name = $account['name'];
        $surname = $account['surname'];
        $number = $account['number'];
        $id = $account['id'];
        $balance = $account['balance'];
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/accountsList.css">
    <title>Accounts list</title>
</head>
<body>
    <nav>
<div class="navigation">
        <ul>
            <li class="list active">
                <a href="http://localhost/php-new-bank/main/homePage/">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="title">Home</span>
                </a>
            </li>
            <li class="list">
                <a href="http://localhost/php-new-bank/main/addNewAccount/addNewAccount.php">
                    <span class="icon"><ion-icon name="person-add-outline"></ion-icon>
                    </span>
                    <span class="title">Add new account</span>
                </a>
            </li>
        </ul>
    </div>
    <h1 class="accounts">Accounts</h1>
</nav>
<div class="all">
        <div class="container">
        <div class="col">
                <h2>Name</h2>
                    <?php
                        foreach($data as $key => $account) {
                            $name = $account['name'];
                    ?>
                    <?php 
                        echo "<p>$name</p>";
                        }
                    ?>
            </div>
            <div class="col">
                <h2>Surname</h2>
                    <?php
                        foreach($data as $key => $account) {   
                            $surname = $account['surname'];
                    ?>
                    <?php 
                        echo "<p>$surname</p>";
                        }
                    ?>
            </div>
            <div class="col">
                <h2>Account number</h2>
                    <?php
                        foreach($data as $account) {
                            $number = $account['number'];
                    ?>
                    <?php 
                        echo "<p class='acc'>$number</p>";
                        }
                    ?>
            </div>
            <div class="col">
                <h2>ID</h2>
                    <?php
                        foreach($data as $account) {
                            $id = $account['id'];
                    ?>
                    <?php 
                        echo "<p>$id</p>";
                        }
                    ?>
            </div>
            <div class="colBalance">
                <h2 >Balance</h2>
                    <?php
                        foreach($data as $account) {
                            $balance = $account['balance'];
                    ?>
                    <?php 
                        echo "<p>$balance</p>";
                        }
                    ?>
            </div>
            <div class="colBalance">
                <h2>DELETE</h2>
                    <?php
                        foreach($data as $account) {
                    ?>
                    <?php 
                        echo "<button class='btnDel' type='submit'>Delete</button>";
                        }
                    ?>
            </div>
        </div>
    </div>
    <div class="list">
        <button class="btnAdd" type="submit">
            <a class="link" href="http://localhost/php-bankas/bankas/add-funds/add-funds.php#">Add funds</a>
        </button>
        <button class="btnDed" type="submit">
            <a class="link" href="http://localhost/php-bankas/bankas/deduct-funds/deduct-funds.php#">Deduct funds</a>
        </button>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        const list = document.querySelectorAll('.list');
        function activeLink () {
            list.forEach((item) =>
            item.classList.remove('active'));
            this.classList.add('active');
        }

        list.forEach((item) =>
        item.addEventListener('click', activeLink));
    </script>
</body>
</html>