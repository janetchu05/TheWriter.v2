<?php
    $conn = mysqli_connect("localhost","root","111111", "writer_db");
    if(mysqli_connect_errno())
    {
        echo "DB 연결에 실패했습니다.".mysqli_connect_error();
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
                <image src="folder_icon.png" height=50px><p>문서</p></image> <p></p>
                </image>
            </div>
            <div class = "mainRight">
                <image class="bob" src="bob_bubble.png"></image>
                <div id = "filebox">
                    <div class = "filename">
                        &nbsp당신의 이야기를 만들어보세요.
                        <image class="icon" src="delete_icon.JPG" align=right></image>
                    </div>
                    <div class = "fileview">
                        <p>...</p>
                        <p>아무도 읽지 않는다는 이유로 장문의 글을 </p>
                        <p>쓰지 않다보면, 어느 새벽, 당신은 읽는 이가</p>
                        <p>기다린대도 긴 글을 쓸 수 없게 됐음을 깨닫게 된다.</p>
                        <p>...</p>
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