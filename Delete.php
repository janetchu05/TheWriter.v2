<?php
    $conn = mysqli_connect("localhost","root","111111", "writer_db");
    if(mysqli_connect_errno())
    {
        echo "DB 연결에 실패했습니다.".mysqli_connect_error();
    }
    $sql = "select books.title, books.script, inputs.input, inputs.date from books, inputs where inputs.book_id = books.id";
    
    $result = mysqli_query($conn, $sql);
    $list = '';
    $idx = 1;

    while(($row = mysqli_fetch_array($result)) == TRUE)
    {
        $row_script = mb_strimwidth($row['script'], 0, 30, '...', "utf-8");
        $row_input = mb_strimwidth($row['input'], 0, 30, '...', "utf-8");
        $date_format = date("Y-m-d", strtotime($row['date']));
        $list = $list."<tr>
        <td>{$idx}</td>
        <td>{$row['title']}</td>
        <td>{$row_script}</td>
        <td>{$row_input}</a></td>
        <td>{$date_format}</td>
        <td><input type = 'button' value = '수정'/></td>
        <td><input type = 'button' value = '삭제'/></td>
        </tr>";
        $idx++;
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
        <div id = Board>
            <input type = "button" value = "새로운 글 작성하기" id = "WriteNew"
            onClick = "window.top.location.href = 'Books.php'">
            <h1>>>---글 작성 목록---<<</h1>
            <div id = BoardTable>
                <table>
                    <thread>
                        <tr>
                            <th class = "idx">번호</th>
                            <th class = "Btitle">제목</th>
                            <th class = "Pscript">기존 스크립트</th>
                            <th class = "Wcontents">작성글</th>
                            <th class = "Wdate">작성일자</th>
                            <th class = "Update">수정</th>
                            <th class = "Delete">삭제</th>
                        </tr>
                    </thread>
                    <tbody>
                        <?php
                            echo $list;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>