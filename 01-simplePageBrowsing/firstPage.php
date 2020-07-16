<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="height:100vh;">

    <div 
        style="
            display:flex;
            align-items:center;
            text-align:center;
            justify-content: center;
            height: 100%;
        "
    >
        <form action="/secondPage.php" method="post"
            style="
                display: flex;
                flex-direction: column;
            "
        >
            <label for="input" style="margin:8px;">
                Type Something Here!
                <input 
                    type="text" 
                    id="input" 
                    name="myInput"
                    placeholder="I will be carried over to the next page!"
                >
            </label>

            <label for="input2" style="margin:8px;">
                Try me 2
                <input 
                    id="input2"
                    type="number" 
                    name="MySecondInput" 
                    value="0"
                >
            </label>

            <select name="MySelect" id="select" style="margin:8px;">
                <option value="value 1">option 1</option>
                <option value="value 2">option 2</option>
                <option value="value 3">option 3</option>
                <option value="value 4">option 4</option>
                <option value="value 5">option 5</option>
                <option value="value 6">option 6</option>
            </select>

            <div>
                <label for="radio1">
                    <input id="radio1" name="gender" type="radio" value="male!!!">
                    Male
                </label>
                <label for="radio2">
                    <input  id="radio2" name="gender" type="radio" value="female!!!">
                    Female
                </label>
                <label for="radio3">
                    <input id="radio3" name="gender" type="radio" value="other!?">
                    Other
                </label>
            </div>

            <button>
                Click Me
            </button>
        </form>
        
    </div>

</body>
</html>