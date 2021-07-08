<?php
    $conn = mysqli_connect("localhost","root","111111", "writer_db");
    if(mysqli_connect_errno())
    {
        echo "DB 연결에 실패했습니다.".mysqli_connect_error();
    }
    $sql = "Select * from books";

    $result = mysqli_query($conn, $sql);


    if(isset($_GET['id']))
    {
        $sql = "select script from books where id = {$_GET['id']}";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $curId = $_GET['id'];
        $contents= htmlspecialchars($row['script']);
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
        <div id = books>
            <p class="lines">
                <a href="contents.php?id=<?php echo $curId; ?>" target ="ifra">1</a>
                <a href="contents.php?id=<?php echo $curId + 1; ?>" target ="ifra">2</a>
                <a href="contents.php?id=<?php echo $curId + 2; ?>" target ="ifra">3</a>
                <br><br>
                <?php
                    echo $contents;
                ?>
            </p><br>
            <form action = "submit.php" method = "POST">
                <div id = "textarea">
                    <textarea name="notes" wrap= hard class="notes_text"><?php echo $input; ?></textarea>
                </div>
                <input type="reset" value="다시쓰기" class="btn_reset" onclick="clearForm()"/>
                <input type="submit" name = "btnSubmit" value="저장하기" class="btn_submit"/>
                <input type = "hidden" name = "book_id" value = "<?php echo $_GET['id']; ?>"/>
                <input type = "hidden" name = "script" value = "<?php echo $contents; ?>"/>
            </form>
        </div>
    </body>
</html>