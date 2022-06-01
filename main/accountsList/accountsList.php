<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/accounts.css">
    <title>Accounts list</title>
</head>
<body>
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
                    <span class="icon"><ion-icon name="person-outline"></ion-icon>
                    </span>
                    <span class="title">Add new account</span>
                </a>
            </li>
        </ul>
    </div>
    
<h1 class="accounts">Accounts</h1>

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