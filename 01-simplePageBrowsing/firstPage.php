<!-- Project done by:
    Gustavo Diniz da Corte (gustavodacorte@gmail.com)
    VS code has been used and html5 templating has been auto generated.
 -->

<!DOCTYPE html> <!-- This defines the type of the document. 
Please note that even though the document is a .php file, it is correctly interpreted as HTML by the server.-->

<html lang="en">

<!-- Header of document. 

This part defines the meta data, which is used by whatsapp, google 
and other companies when screening the contents of the site and creating a miniview
-->
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Assignment</title>
</head>
<!-- Body of document.
THis is where our code will go into. 
 -->
<body style="height:100vh;">

    <!-- div is a container element.  Imagine it is a box that might hold a lot of things inside, even other boxes! -->
    <div 
        style="
            display:flex;
            align-items:center;
            text-align:center;
            justify-content: center;
            height: 100%;
        "
    >   
        <!-- Forms define a field where interaction with the user will be done. 
        Here comes all the elements that will hold some data.
        When a button is present inside a form, its "onclick" event will automatically submit the form to the file specified in "action"
        using the desired "method". Upon submission, all data inside the form is stored and sent to the targeted file.
         -->
        <form action="/secondPage.php" method="post"
            style="
                display: flex;
                flex-direction: column;
            "
        >   
            <!-- Example of an input inside a label element (basically makes it so a click anywhere in this element will redirect to the input) -->
            <label for="input" style="margin:8px;">
                Type Something Here!
                <input 
                    type="text" 
                    id="input" 
                    name="myInput"
                    placeholder="I will be carried over to the next page!"
                >
            </label>

            <!-- Another box -->
            <div style="margin:8px;">
                Try me 2
                <input 
                    id="input2"
                    type="number" 
                    name="MySecondInput" 
                    value="0"
                >
            </div>

            <!-- Example of a basic dropdown 
            (only the selected value is sent over) -->
            <select name="MySelect" id="select" style="margin:8px;">
                <option value="value 1">option 1</option>
                <option value="value 2">option 2</option>
                <option value="value 3">option 3</option>
                <option value="value 4">option 4</option>
                <option value="value 5">option 5</option>
                <option value="value 6">option 6</option>
            </select>

            <!-- THis box is just for organization purposes. it is holding a group of radio buttons 
            (only the selected value is sent over). THe labels wrapped inside the html 
            have the same effect as the previous label. It was used just to make user experience a little better! -->
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

            <!-- Button that submits the data -->
            <button>
                Click Me
            </button>
        </form>
        
    </div>

</body>
</html>