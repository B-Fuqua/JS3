<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HeeHaw2</title>
</head>
<body>
    <H1>Number of Steps to Hee Haw</H1>
    <form onsubmit="heeHaw()">
        <label for="NumHeeHaw">Enter a number</label>
        <input type="text" id="NumHeeHaw">
        <span style="color=darkred, display=none" id="err-haw">
            Positive integer is required
        </span>
    </form>
    <script>
        function heeHaw() {
            let amount = document.getElementById("NumHeeHaw").value;
            if (amount < 1) {
                document.getElementById("err-haw").style.display = "inline";
            }
            else {
                for (let i = 1; i <= amount; i++) {
                    if (i % 3 === 0 && i % 5 === 0) {
                        heeHaw.innerText += ("Hee Haw!\r\n");
                    } else if (i % 3 === 0) {
                        heeHaw.innerText += ("Hee!\r\n");
                    } else if (i % 5 === 0) {
                        heeHaw.innerText += ("Haw!\r\n");
                    } else {
                        heeHaw.innerText += (i + "\r\n");
                    }
                }
            }
        }

    </script>
</body>
</html>