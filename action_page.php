<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .wrapper {overflow: auto;}

        #main {margin-left: 4px;}

        #leftsidebar {
            float: none;
            width: auto;
        }

        #menulist {
            margin: 0;
            padding: 0;
        }

        .menuitem {
            background: #CDF0F6;
            border: 1px solid #d4d4d4;
            border-radius: 4px;
            list-style-type: none;
            margin: 4px;
            padding: 2px;
        }

        @media screen and (min-width: 480px) {
            #leftsidebar {width: 200px; float: left;}
            #main {margin-left: 216px;}
        }
    </style>
</head>
<body>

<div class="wrapper">
    <div id="leftsidebar">
        <ul id="menulist">
            <li class="menuitem">Menu-item 1</li>
            <li class="menuitem">Menu-item 2</li>
            <li class="menuitem">Menu-item 3</li>
            <li class="menuitem">Menu-item 4</li>
            <li class="menuitem">Menu-item 5</li>
        </ul>
    </div>

    <div id="main">
        <h1>Resize the browser window to see the effect!</h1>
        <p>This example shows a menu that will float to the left of the page if the viewport is 480 pixels wide or wider. If the viewport is less than 480 pixels, the menu will be on top of the content.</p>
    </div>
</div>

</body>
</html>

