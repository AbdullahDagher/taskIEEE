<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i|Quicksand:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <title>Task</title>
</head>
<body>

<div class='box'>
    <div class='box-form'>
        <div class='box-tab'>
            <div>
                <i class="fas fa-sign-in-alt"></i><h2>REGISTER</h2>
            </div>
        </div>
        <div class='box-register'>
            <form action="register.php" method="post">
                <div class="input-animate">
                    <input name="title" type="text" class="input" placeholder="test" id="title" required>
                    <label for="title">Title</label>
                </div>
                <div class="input-animate">
                    <input name="fullName" type="text" class="input" placeholder="test" id="fullName" required>
                    <label for="fullName">full name</label>
                </div>
                <div class="input-animate">
                    <input name="position" type="text" class="input" placeholder="test" id="position" required>
                    <label for="position">position</label>
                </div>
                <div class="input-animate">
                    <input name="company" type="text" class="input" placeholder="test" id="company" required>
                    <label for="company">company</label>
                </div>
                <div class="input-animate">
                    <input name="email" type="email" class="input" placeholder="test" id="email" required>
                    <label for="email">email</label>
                </div>
                <div class="input-animate">
                    <input name="streetAddress" type="text" class="input" placeholder="test" id="streetAddress" required>
                    <label for="streetAddress">street address</label>
                </div>
                <div class="half-input">
                    <div class="county">
                        <select name="country" required>
                            <option value="test1">test1</option>
                            <option value="test2">test2</option>
                            <option value="test3">test3</option>
                            <option value="test4">test4</option>
                        </select>
                    </div>
                    <div class="city">
                        <div class="input-animate">
                            <input name="city" type="text" class="input" placeholder="test" id="city" required>
                            <label for="city">city</label>
                        </div>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                <div class="half-input">
                    <div class="col">
                        <div class="input-animate">
                            <input name="state" type="text" class="input" placeholder="test" id="state" required>
                            <label for="state">state</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-animate">
                            <input name="postalCode" type="text" class="input" placeholder="test" id="postalCode" required>
                            <label for="postalCode">postal code</label>
                        </div>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                <div class="input-animate">
                    <input name="phone" type="text" class="input" placeholder="test" id="phone" required>
                    <label for="phone">phone</label>
                </div>
                <button type="submit" name="submit">submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>