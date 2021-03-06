<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" type="text/css" href="css/stranica.css"/>
    <link rel="stylesheet" type="text/css" href="css/calendar.css">
    <script src="js/dropdownMeni.js"></script>
    <script src="js/jscolor.js"></script>
</head>
<body>
    <nav id="meni">

        <ul id="meni_lista">
            <li class="meni_item">x</li>
            <li class="meni_item">x</li>
            <li class="meni_item meni_item_clickable">Calendar</li>
            <li class="meni_item meni_item_clickable">Features</li>
            <li class="meni_item meni_item_clickable">Examples</li>
            <li class="meni_item">x</li>
            <li class="meni_item">x</li>
            <li class="meni_item meni_item_clickable">Register</li>
            <li class="meni_item meni_item_clickable">Log in</li>
            <li class="meni_item">x</li>
        </ul>
    </nav>

    <div id="body">
        <div class="kolona lijeva">
            <div class="red jedan"></div>
            <div class="red dva">
                <div class="kolona jedan"></div>
                <div class="kolona dva">
                    ToolBox:
                    <div id="toolbox">
                        <ul id="toolboxLista">
                            <?php
                                if (isset($_REQUEST['groupName']) && isset($_REQUEST['groupColor'])) {
                                    $xml = new DOMDocument();
                                    $xml->load("test.xml");
                                    $root = $xml->documentElement;
                                    $group = $xml->createElement("Group");
                                    $group->appendChild($xml->createTextNode($_REQUEST['groupName']));
                                    $root->appendChild($group);
                                    $xml->save("test.xml");                                }
                            ?>
                            <li>
                                <div class="toolboxItem" onclick="dropDown(1)">
                                    New Group
                                </div>
                                <div class="toolboxExpanded" id="tb1">
                                    <form method="get" action="Calendar_Page.php">
                                        Group name: <br>
                                        <input type="text" class="input" name="groupName"> <br>
                                        Group color: <br>
                                        <input class="jscolor input" name="groupColor" value="ab2567"> <br>
                                        <button type="submit" class="toolboxButton"> Enter </button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="toolboxItem" onclick="dropDown(2)">
                                    New Task
                                </div>
                                <div class="toolboxExpanded" id="tb2">
                                    <form method="get" action="Calendar_Page.php">
                                        Task name: <br>
                                        <input type="text" name="taskName"> <br>
                                        Group: <br>
                                        <input type="text"> <br>
                                        Day of the week: <br>
                                        <input type="text"> <br>
                                        (or) Date <br>
                                        <input type="text"> <br>
                                        Hours: <br>
                                        <input type="text"> <br>
                                        <button type="submit" class="toolboxButton"> Enter </button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="kolona jedan"></div>
            </div>
            <div class="red tri">
                <button class="downloadButton"> Download CSV </button>
                <button class="downloadButton"> Download XML </button>
            </div>
        </div>
        <div class="kolona desna">

            <div class="red jedan"></div>
            <div class="red cetiri">
                <div class="kolona jedan"></div>
                <div class="kolona dva">

                </div>
                <div class="kolona jedan"></div>
            </div>
            <div class="red jedan"></div>

        </div>
    </div>

    <div id="footer">

    </div>
</body>
</html>