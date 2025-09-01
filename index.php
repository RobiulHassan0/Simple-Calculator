<?php
session_start();

$result = "";

// POST সাবমিট হ্যান্ডল
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = (float) $_POST['number1'];
    $num2 = (float) $_POST['number2'];
    $operation = $_POST['operation'];

    $compute = new Calculator();
    $result = $compute->calculate($num1, $num2, $operation);

    // রেজাল্ট SESSION এ সেভ করো (তুমি ডাটা রাখবে না বললে বাদ দিতে পারো)
    $_SESSION['result'] = $result;

    // রিডাইরেক্ট দাও পেজে (GET রিকোয়েস্ট হবে)
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// GET রিকোয়েস্টে SESSION থেকে রেজাল্ট নাও
if (isset($_SESSION['result'])) {
    $result = $_SESSION['result'];
    unset($_SESSION['result']); // রেজাল্ট একবার দেখানোর পর মুছে ফেলো
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Caluclator with PHP OOP</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <style>
        body{
            background-color: #f4f6f8;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .container{
            max-width: 400px;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        input.form-control, select.form-select, .result-box{
            border-radius: 4px;
        }
        .result-box {
            color: white;
            height: 50px;
        }
        .result-box p{
            color: white;
            padding: 0 16px;
            display: flex;
            align-items: center;
            border-radius: 4px 0 0 4px;
        }
    </style>
</head>
<body>
    <section class="container mt-5 p-">
        <h3 class="text-center mb-4">🧮 Simple Calculator</h3>
        <form method="POST">
            <div class="mb-3">
                <input class="form-control" type="number" step="any" name="number1" placeholder="Enter first number" required>
            </div>
            
            <div class="mb-3">
                <input class="form-control" type="number" step="any" name="number2" placeholder="Enter second number" required>
            </div>

            <div class="mb-3">
                <select class="form-select" name="operation" required>
                    <option value="add"> Add (+)</option>
                    <option value="subtract"> Subtract (-)</option>
                    <option value="multiply"> Multiply (×)</option>
                    <option value="divide"> Divide (÷)</option>
                </select>
            </div>

            <button class="btn btn-primary w-100" type="submit">Calculate</button>
        </form>

        <?php if($result !== ""): ?>
            <div class="result-box bg-info bg-gradient mt-4 d-flex align-items-center justify-content-between">
                
                
                <p class="bg-primary bg-gradient fw-bold m-0 h-100">Result : </p>
                
             
                <h5 class="fw-bold m-0 pe-3 primary"> <?= htmlspecialchars($result) ?></h5>
            </div>
        <?php endif; ?>   

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>