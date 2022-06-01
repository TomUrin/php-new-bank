<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/firstPage.css">
    <title>Main</title>
</head>
<body>
    <div class="navi">
<div class="navigation">
        <ul>
            <li class="list active">
                <a href="http://localhost/php-new-bank/main/accountsList/accountsList.php">
                    <span class="icon"><ion-icon name="list-circle-outline"></ion-icon></span>
                    <span class="title">Accounts list</span>
                </a>
            </li>
            <li class="list">
                <a href="http://localhost/php-new-bank/main/addNewAccount/addNewAccount.php">
                    <span class="icon"><ion-icon name="person-add-outline"></ion-icon></span>
                    <span class="title">Add new account</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <span class="icon"><ion-icon name="add-circle-outline"></ion-icon></span>
                    <span class="title">Add funds</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <span class="icon"><ion-icon name="remove-circle-outline"></ion-icon></span>
                    <span class="title">Deduct funds</span>
                </a>
            </li>
        </ul>
    </div>
    <h1 class="welcome">Welcome to <span class="bankName">LitBank</span></h1>
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