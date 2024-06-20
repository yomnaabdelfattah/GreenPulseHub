<?php include '../shared/nav.php'; ?>

    <style>
        
        aside {
            display: flex;
            flex-wrap: wrap;
            gap: 20px; 
            max-width: 800px; 
            padding: 20px; 
            background-color: #ffffff; 
        }

        .card {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 10px; 
            width: 100%; 
            height: 200px;
            border: 1px solid #ddd; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            padding: 10px; 
            background-color: #fff; 
            border-radius: 5px; 
        }

        .card img {
            padding: 5px;
            width:200px ;
            height:200px ;
            border-radius: 5px; 
        }

        .card-text {
            flex: 1; 
        }
    </style>
</head>

<h5> Hotels That implement sustainability :</h5>

    <aside>
        <div class="card">
            <img src="../images/h1.jpg" alt="Image 1">
            <div class="card-text">
                <h2>The Nile Ritz-Carlton</h2>
                <h4>Cairo</h4>
            </div>
        </div>

        <div class="card">
            <img src="../images/h2.jpg" alt="Image 2">
            <div class="card-text">
                <h2>Solaris Pharaoh</h2>
                <h4>Dahab</h4>
            </div>
        </div>

        <div class="card">
            <img src="../images/h3.jpg" alt="Image 3">
            <div class="card-text">
                <h2>Kempinski Nile Hotel</h2>
                <h4>Cairo</h4>
            </div>
        </div>

        <div class="card">
            <img src="../images/h4.jpg" alt="Image 4">
            <div class="card-text">
                <h2>Baron Palace Sahl Hasheesh</h2>
                <h4>Hurghada</h4>
            </div>
        </div>

        <div class="card">
            <img src="../images/h5.jpg" alt="Image 5">
            <div class="card-text">
                <h2>Cairo Pyramids Hotel</h2>
                <h4>Giza</h4>
            </div>
        </div>
    </aside>

<?php include '../shared/footer.php'; ?>

