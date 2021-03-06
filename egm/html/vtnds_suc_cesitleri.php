<?php

include "../baglan.php";

$sucsor=$db->prepare("SELECT * FROM suc_cesitleri");
$sucsor->execute();

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Emniyet Genel Müdürlüğü Bilgi Sistemi">
    <meta name="keywords" content="Polis, Emniyet, Sabıka, Ehliyet durumu, Özel harekat, Terör, Asayiş, trafik, narkotik, interpol, suç, hırsızlık, kapkaç, dolandırıcılık, ruhsat, ceza, ihbar, suçlu, güvenlik, göçmen, kaçakçılık, ">
    <meta name="authors" content="Ertuğrul Samet Bişkin-Mustafa Murat Tepe">

    <title>T.C. İçişleri Bakanlığı Emniyet Genel Müdürlüğü</title>
    <link rel="shortcut icon" href="../images/egm_favicon.ico" type="image/png">
    <style>
        #analogo{
            width: 208px;
            height: 156px;
            background-image: url(../images/egm_logo_ana.png);
            background-repeat: no-repeat;
            margin-left: auto;
            margin-right: auto;
            margin-top: 2%;
		}
        
        h1{
            text-align: center;
            font-family: Verdana;
            font-size: larger;
            color: white;
        }
        p{
            text-align: center;
            font-family: sans-serif;
            font-size: medium;
            color: white;
        }

        #geri{
            margin-top: 5%;
            margin-left: 70%;
        }
        .geri {
          display: inline-block;
          border-radius: 4px;
          background-color: rgb(1, 14, 61);
          border: none;
          color: #FFFFFF;
          text-align: center;
          font-size: 20px;
          padding: 10px;
          width: 130px;
          transition: all 0.5s;
          cursor: pointer;
        }
        .geri span {
          cursor: pointer;
          display: inline-block;
          position: relative;
          transition: 0.5s;
        }
        .geri span:after {
          content: '\00ab';
          position: absolute;
          opacity: 0;
          top: 0;
          right: -20px;
          transition: 0.5s;
        }
        .geri:hover span {
          padding-right: 25px;
        }
        .geri:hover span:after {
          opacity: 1;
          right: 0;
        } 

        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        color: white;
        }

        tr:nth-child(even) {
        background-color: #8d8c8c;
        }

    </style>
</head>
<body style="background-color:#0b1e60ff">

    <div id="analogo"></div>
    <H1>Suç Çeşitleri</H1>

    <table>
        <tr>
          <th>Suç Çeşidi</th>
          <th>Cezası</th>
        </tr>
    <?php
    while($succek=$sucsor->fetch(PDO::FETCH_ASSOC)) {?>
        <tr>
          <td><?php echo $succek['konusu'] ?></td>
          <td><?php echo $succek['cezasi'] ?></td>
        </tr>
        <?php } ?>
      </table>
    
    <div id="geri">
    <a href="vatandas_menü.php?tc_kimlik_no=<?php echo $_GET['tc_kimlik_no'] ?>"><button class="geri" style="vertical-align:middle" ><span>Geri </span></button></a> 

</body>
</html>