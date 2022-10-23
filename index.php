<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login system</title>
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <h1>use the form to be signed in the system</h1>
    <div>
        <form action="signup.php" method="POST">
            <input type="text" name="username" placeholder="username"><br><br>
            <input type="email" name="email" placeholder="email"><br><br>
            <input type="password" name="pwd" placeholder="password"><br><br>
            <button type="submit" name="submit">signup</button><br><br>
        </form>
    </div>

    <div class="login">
        <h1>login form</h1>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="username"><br><br>
            <input type="password" name="pwd" placeholder="password"><br><br>
            <button type="submit" name="submit_login">login</button><br><br>
        </form>
    </div>

    <p id="pLeft">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt possimus delectus, ad soluta libero maxime quam esse. Molestias dolorem, provident assumenda unde dolores similique nesciunt beatae tempore quam quos eum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate, suscipit. Eius, maiores officiis deleniti quo est voluptas explicabo voluptate, blanditiis consequuntur dolores error reprehenderit possimus distinctio aspernatur. Nobis omnis, ea possimus recusandae culpa quidem necessitatibus voluptate libero! Nostrum vel, praesentium, id distinctio magnam cupiditate, labore sequi ex doloremque suscipit perspiciatis?</p>

    <p id="pRight">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi excepturi ducimus cupiditate nihil tempora saepe repudiandae minima, dolorum, atque accusantium architecto quas molestias. Magni cupiditate asperiores explicabo, ipsum voluptate esse dolore accusamus. Corrupti nobis, temporibus tempore, delectus eveniet neque minima exercitationem ipsum molestiae commodi illum repellat excepturi necessitatibus minus sequi alias cum odio qui dolore. Incidunt, assumenda praesentium! Quos ipsa adipisci odio esse mollitia eveniet ut nam quasi fugiat nihil possimus minima culpa exercitationem atque delectus, doloremque blanditiis numquam ratione labore quas animi? Nemo, veritatis sunt. Dolores perferendis, laboriosam unde, quae accusamus eos praesentium pariatur eaque necessitatibus incidunt eius officiis.</p>
</body>

</html>