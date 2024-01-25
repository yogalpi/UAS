<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS-A</title>

    <!-- BULMA CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/css/bulma.min.css') ?>">

    <style>
        /* ONLINE BULMA CSS */
        @import "https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css";

        @import url('https://fonts.googleapis.com/css2?family=Manrope&display=swap');

        html, * {
            margin: 0;
            padding: 0;
            font-family: 'Manrope', sans-serif;
        }
        nav{
            background-color: #EEF5FF;
            height: 12svh;
            display: flex;
            align-items: center;
        }

        ul{
            display: flex;
            align-items: center;
            width: 50svw;
            height: 100%;
            justify-content: space-evenly;
        }

        li{
            list-style: none;
        }

        li > a{
            text-decoration: none;
            color: black;
            border-radius: 3em;
            padding: .7em 1em;
            transition: .8s;
        }
        
        li > a:hover{
            border-radius: .8em;
            background-color: #176B87;
            color: #F0ECE5;
        }

        p{
            font-size: 1.3em;
            font-weight: bold;
        }

        main{
            height: 100svh;
        }

        /* CSS MAHASISWALIST */

        .container{
            padding-top: 5svh;
            width: 75svw;
        }

        /* CSS FOOTER */

        footer{
            background-color: black;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .footer{
            font-weight: lighter;
            background-color: black;
            color: white;
            text-align: center;
            font-size: .8em;
            margin: 0;
            padding: 1.3em 1.3em;
        }

    </style>
</head>
<body>
    <nav>
        <ul>
            <li><p>UAS-A</p></li>
            <li><a href="/">List Mahasiswa</a></li>
        </ul>
    </nav>
    <main>
        <?= $this->renderSection('content'); ?>
    </main>
    <footer>
        <p class="footer">
            22.230.0002 - Yoga Sugiono
            <br>
            Sistem Informasi
        </p>
    </footer>
</body>
</html>