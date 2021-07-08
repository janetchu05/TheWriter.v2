<?php
    $conn = mysqli_connect("localhost","root","111111", "writer_db");
    if(mysqli_connect_errno())
    {
        echo "DB 연결에 실패했습니다.".mysqli_connect_error();
    }
    $sql = "Select * from books";

    $result = mysqli_query($conn, $sql);

    $update_link = '';

    if(isset($_GET['id']))
    {
        $sql = "select script from books where id = {$_GET['id']}";
        $result = mysqli_query($conn, $sql);
        //$row = mysqli_fetch_array($result);
        //$contents['script'] = htmlspecialchars($result['script']);
    }
?>

<html>
    <head>
        <meta charset = "utf-8"/>
        <title>The Writer</title>
        <link rel = "stylesheet" type="text/css" href="stylesheet.css">
        <script type="text/javascript" src="writer.js"></script>
        
    </head>
    <body>
        <div id = "main">
            <div class = "mainLeft">
                <image src="comp_icon.png" height=50px></image><p>내 컴퓨터</p>
                <image src="bin_icon.png" height=50px><p>휴지통</p></image><p></p>
                <a href = "Board.php" target = "ifra"><image src="folder_icon.png" height=50px><p>문서</p></image> <p></p></a>
                </image>
            </div>
            <div class = "mainRight">
            <div id = "library">
                <div class = "library_filename" align= center>
                    &nbsp The Writer
                    <a href="index.php"><image class="icon" src="delete_icon.JPG" align=right></image></a>
                </div>
                <div class = "filemanage">
                    &nbsp파일(<u>F</u>)
                    &nbsp&nbsp&nbsp편집(<u>E</u>)
                    &nbsp&nbsp&nbsp보기(<u>V</u>)
                    &nbsp&nbsp&nbsp도움말(<u>H</u>)
                </div>
                <div class="library_left">
                    <ul>
                        <h3>토픽 추천</h3>
                        <a href="contents.php?id=1" target ="ifra">
                            <image src="folder_icon.png" height=50px><br>이방인</image>
                        </a><p></p>
                        <a href="contents.php?id=4" target ="ifra">
                            <image src="folder_icon.png" height=50px><br>모순</image>
                        </a><p></p>
                        <a href="contents.php?id=7" target ="ifra">
                            <image src="folder_icon.png" height=50px><br>아몬드</image>
                        </a><p></p>
                        <a href="contents.php?id=10" target ="ifra">
                            <image src="folder_icon.png" height=50px><br>멋진신세계</image>
                        </a>
                    </ul>
                </div>
                <div class="library_right">
                    <iframe src = "" name = "ifra" id = "ifra" width= 99.7% height=99%></iframe>
                </div>
            </div>
            </div>
        </div>
        <div class = "bottom">
            <a href="Books.php"><image id = "startBtn" src="start_button..JPG"></image></a>
            <div id = "CurrentTime"></div>
        </div>
    </body>
</html>