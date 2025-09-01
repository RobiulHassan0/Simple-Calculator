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
        }
        .container{
            max-width: 400px;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <section class="container mt-5 p-">
        <h3 class="text-center mb-4">🧮 Simple Calculator</h3>
        <form method="POST">
            <div class="mb-3">
                <input class="form-control" type="number" step="any" name="num1" placeholder="Enter your first number" required>
            </div>
            
            <div class="mb-3">
                <input class="form-control" type="number" step="any" name="num2" placeholder="Enter your second number" required>
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
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>