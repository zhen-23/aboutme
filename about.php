<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>蔡純珍簡介</title>
    <style type="text/css">
        * { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
        h1 {color:blue; font-size:60px;}
        h2 {color:#33ff33; font-size:40px;}
    </style>
    <script>
        function change1() {
            document.getElementById("pic").src = "mountain.jpg";
            document.getElementById("h2text").innerText = "靜宜資管";
        }
        function change2() {
            document.getElementById("pic").src = "cliff.jpg";
            document.getElementById("h2text").innerText = "Tsai-Chun Zhen";
        }
    </script>
</head>
<body>
    <table width="70%">
        <tr>
            <td width="50%">
                <img src="cliff.jpg" width="100%" id="pic" onmouseover="change1()" onmouseout="change2()">
            </td>
            <td>
                <h1>蔡純珍</h1>
                <h2 id="h2text">Tsai-Chun Zhen</h2>
            </td>
        </tr>
    </table>

    <table width="70%" border="1">
        <tr>
            <td>
                IG：<a href="https://www.instagram.com/1023.c__?igsh=OXowb3J2MjY5cGxo&utm_source=qr">IG 連結</a><br>
                FB：<a href="https://www.facebook.com/share/1NEqpCPBp2/?mibextid=wwXlFr" target="_blank">FB 連結</a><br>
                G-Mail：<a href="mailto:a0923930343@gmail.com">a0923930343@gmail.com</a>
            </td>
            <td>
                大象席地而坐電影配樂<br>
                <audio controls><source src="elephant.mp3" type="audio/mp3"></audio>
            </td>
            <td>
                不要去臺灣<br>
                <iframe width="300" height="200" src="https://www.youtube.com/embed/pW88QFpHXa8" allowfullscreen></iframe>
            </td>
        </tr>
    </table>

    <?php echo date("Y-m-d") ?>

</body>
</html>