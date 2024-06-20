<?php
include '../shared/nav.php';
?>


    <style>
       
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .about {
            width: 100%;
            background: url(/grad.proj/images/greenpulsehouse.png) no-repeat left;
            background-size: 55%;
            overflow: hidden;
            padding: 10px 0;
        }
        .inner-section {
            width: 55%;
            float: right;
            padding: 110px;
            box-shadow: 10px 10px 8px rgba(0,0,0,0.3);
        }
        .inner-section h1 {
            margin-bottom: 30px;
            font-size: 30px;
            font-weight: 900;
        }
        .text {
            font-size: 15px;
            line-height: 30px;
            text-align: justify;
            margin-bottom: 40px;
        }
       
        @media screen and (max-width:1200px) {
            .inner-section {
                padding: 80px;
            }
        }
        @media screen and (max-width:1000px) {
            .about {
                background-size: 100%;
                padding: 100px 40px;
            }
            .inner-section {
                width: 100%;
            }
        }
        @media screen and (max-width:600px) {
            .about {
                padding: 0;
            }
            .inner-section {
                padding: 60px;
            }
           
        }
        .card {
            height: 500px; 
        }
        .card img {
            height: 400px; 
            object-fit: cover; }
        
    </style>
</head>
<body>
    <div class="about">
        <div class="inner-section">
            <h1 style="color:#0e6800;">About Us</h1>
            <p class="text">
                GreenPulseHub idea is generated as a result of statistics issued by global warming
                problems, as it a profit organization that try to help people having a healthy 
                lifestyle as we face a lot of environmental issues that affects our health in a bad way.
                We know we could do better by providing an online portal that facilitate reaching their needs.
            </p>
            <div class="skills">
                <a href="#owners">Find more about the owners</a>           
            </div>
        </div>
    </div>
<hr>
    <div class="container mt-5" id="owners">
        <h1 class="text-center" style="color:#0e6800;">The Owners</h1>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <img src="/grad.proj/images/yomna.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Yomna Abdelfattah</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="/grad.proj/images/ganna.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Ganna Seif</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="/grad.proj/images/donia.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Donia Hany</h5>
                    </div>
                </div>
            </div>
        </div>
<hr>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="/grad.proj/images/alaa.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Mohamed Alaa</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="/grad.proj/images/figo.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Mohamed Ahmed</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="/grad.proj/images/khalil.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Mohamed Khalil</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
include '../shared/footer.php';
?>