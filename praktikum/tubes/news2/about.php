<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    }

    html {
    box-sizing: border-box;
    }

    *, *:before, *:after {
    box-sizing: inherit;
    }

    .column {
    float: left;
    width: 25%;
    margin-bottom: 16px;
    padding: 0 8px;
    }

    .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    margin: 8px;
    }

    .about-section {
    padding: 50px;
    text-align: center;
    background-color: #474e5d;
    color: white;
    }

    .container {
    padding: 0 16px;
    }

    .container::after, .row::after {
    content: "";
    clear: both;
    display: table;
    }

    .title {
    color: grey;
    }

    .button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    }

    .button:hover {
    background-color: #555;
    }

    @media screen and (max-width: 650px) {
    .column {
        width: 100%;
        display: block;
    }
    }
    </style>
    </head>
    <body>

    <div class="about-section">
    <h1>About Us</h1>
    <p>Ujian Akhir Semester</p>
    <p>Desain Pemrograman Web</p>
    </div>

    <h2 style="text-align:center">Our Team</h2>
    <div class="row">
    <div class="column">
        <div class="card">
        <img src="asset/img/unnamed (1).png" alt="Jane" style="width:100%">
        <div class="container">
            <h2>Arlin Satriaji</h2>
            <p class="title">Front End</p>
            <p>+62 82 3360 7980</p>
            <p>19103026@ittlkom-pwt.ac.id</p>
            <p><button class="button">Contact</button></p>
        </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
        <img src="asset/img/unnamed (1).png" alt="Mike" style="width:100%">
        <div class="container">
            <h2>Fiqih Tri Eko F.</h2>
            <p class="title">Front End</p>
            <p>+62 82 3360 7980</p>
            <p>19103033@ittlkom-pwt.ac.id</p>
            <p><button class="button">Contact</button></p>
        </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
        <img src="asset/img/unnamed (1).png" alt="Mike" style="width:100%">
        <div class="container">
            <h2>Diki Irfandi Rosyid</h2>
            <p class="title">Back End</p>
            <p>+62 823 4025 7825</p>
            <p>19103138@ittlkom-pwt.ac.id</p>
            <p><button class="button">Contact</button></p>
        </div>
        </div>
    </div>
    
    <div class="column">
        <div class="card">
        <img src="asset/img/unnamed (1).png" alt="John" style="width:100%">
        <div class="container">
            <h2>Firsto Allewin N.</h2>
            <p class="title">Back End</p>
            <p>+62 822 2708 7422</p>
            <p>19103046@ittlkom-pwt.ac.id</p>
            <p><button class="button">Contact</button></p>
        </div>
        </div>
    </div>
    </div>

</body>
</html>
