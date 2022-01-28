
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <style>
        #student {
            background-color: lightblue;
            color: #fff;
            font-size: 1.5em;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="page-header">
    <div class="well well-lg" id="output"></div>
    </div>
    <div class="jumbotron text-center">


    </div>
</div>
<script>
     let output = document.getElementById("output");
     getText(url)
    async function getText(url) {
        try {
            let res = await fetch(url, {
                method: 'POST',
                headers: {
                    "Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
                },
                credentials: 'include'
              
            });
            output.innerHTML = (await res.text());
        } catch (error) {
            console.log(error);
        }
    }
</script>
</body>
</html>