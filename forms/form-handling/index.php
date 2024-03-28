<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>

    <!-- Welcome <?php echo $_POST["firstName"]; ?><br> -->
    <form style="margin: 0;">
        <div style="display: flex;justify-content: center;align-items: center;margin: 0;background-color: #d6d1d130;height: 100%;overflow: hidden;">
            <div style="width:50%;border: 1px solid lightgray;padding: 10px;border-radius: 5px;background-color:white;">
                <div class="form-group mt-4">
                    <label for="exampleInputEmail1" style="font-weight: 700;font-family: cursive;">First Name</label>
                    <input style="background-color: #f1f0f0;" type="text" class="form-control mt-2" id="first_name" value="<?php echo $_POST["firstName"]; ?>" readonly>
                </div>

                <div class="form-group mt-4">
                    <label for="exampleInputEmail1" style="font-weight: 700;font-family: cursive;">Last Name </label>
                    <input style="background-color: #f1f0f0;" type="text" class="form-control mt-2" id="lastName" value="<?php echo $_POST["lastName"]; ?>" readonly>
                </div>

                <div class="form-group mt-4">
                    <label for="exampleInputEmail1" style="font-weight: 700;font-family: cursive;">Email </label>
                    <input style="background-color: #f1f0f0;" type="email" class="form-control mt-2" id="Email" value="<?php echo $_POST["email"]; ?>" readonly>
                </div>

                <div class="form-group mt-4">
                    <label for="exampleInputEmail1" style="font-weight: 700;font-family: cursive;">Password </label>
                    <input style="background-color: #f1f0f0;" type="text" class="form-control mt-2" id="password" value="<?php echo $_POST["password"]; ?>" readonly>
                </div>

            </div>
        </div>
    </form>
</body>

</html>