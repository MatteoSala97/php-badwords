<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badwords</title>

    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="./style.css">

</head>
<body>
   <div class="container text-center text-success ">
    <h1>Hello World!</h1>
   </div>


    <div class="container ">
        <form action="landing.php" method="POST">
            <div class="mb-3">
                <label for="" class="form-label">TEXT GOES HERE</label>
                <input
                    type="text"
                    class="form-control"
                    name="paragraph"
                    id=""
                    aria-describedby=""
                    placeholder="Type something..."
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">BADWORD >:C</label>
                <input
                    type="text"
                    class="form-control"
                    name="badword" 
                    id=""
                    aria-describedby=""
                    placeholder="Type something..."
                />
            </div>
            <button
                type="submit"
                class="btn btn-primary"
            >
                Check
            </button>
            
        </form>
        
    </div>
</body>
</html>