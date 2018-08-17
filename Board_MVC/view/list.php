<thml>
    <head><title>list</title></head>
    <body>
    <table>
        <tr style="text-align: center">
            <td style="width: 100px;">글번호</td>
            <td style="width: 100px;">제목</td>
            <td style="width: 100px;">작성자</td>
            <td style="width: 100px;">작성날짜</td>
            <td style="width: 100px;">조회수</td>
        </tr>

        <?php
        for($i=0;$i<10;$i++){
         while($row = mysqli_fetch_array($result)){

        echo "<tr>";
        echo "<td style='text-align: center;'>$row[0]</td>";
        echo "<td style='text-align: center;'><a href='../controller/con_view.php?board_id=$row[board_id]'>$row[3]</a></td>";
        echo "<td style='text-align: center;'>$row[2]</td>";
        echo "<td style='text-align: center;'>$row[5]</td>";
        echo "<td style='text-align: center;'>$row[4]</td>";
        echo "</tr>";
}
        }
        ?>
        <tr>
            <td colspan="5">
            <a href = 'http://localhost/new_board/controller/con_page'><button><</button></a>
            </td>
             <a href="http://localhost/new_board/controller/con_page>"<button>></button></a></td>
            </td>
        </tr>
    </table>
    </body>
</thml>