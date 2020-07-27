<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" href="form-style.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <a class="home-link" href="/">Home</a>
    <form action="mail.php" method="post"> 
     
    <input  id="mail-name" type="text" name="name" placeholder = "Full name">
    <input  id="mail-email" type="text" name="email"  placeholder = "E-mail">
    <select  id="mail-gender" name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <br>
    <textarea  id="mail-massage" name="massage" placeholder = "Massage"   cols="30" rows="10"></textarea>
    <br>
    <button id="mail-submit" type="submit"  name="submit" > Send e-mail</button>
    <p class="form-message"></p>
    
    </form>

    <script>
    $(document).ready(() => {
        $("form").submit((event) => {
            event.preventDefault();
            let name = $("#mail-name").val(); 
            let email = $("#mail-email").val(); 
            let gender = $("#mail-gender").val(); 
            let massage = $("#mail-massage").val(); 
            let submit = $("#mail-submit").val();  
            $(".form-message").load("mail.php",{
                name: name,
                email: email,
                gender: gender,
                massage: massage,
                submit: submit
            });
        });
    });
    </script>    
</body>
</html>