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
            width:200px ;
            height:200px ;
            border-radius: 5px; 
        }

        .card-text {
            flex: 1; 
        }
    </style>
</head>

<h5> Eco-Friendly means of transportations :</h5>

    <aside>
        <div class="card">
            <div class="card-text">
                <h3>Electric Taxis</h3>
                <p>Egypt has recently launched its first fleet of electric taxis in the New Administrative Capital. </p>
            </div>
        </div>

        <div class="card">
            <div class="card-text">
                <h3>E-Bikes</h3>
                <p> EGIKE offers e-bikes, which are becoming a popular sustainable transportation option in Egypt.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-text">
                <h3>Cairo Bike</h3>
                <p>he Cairo Bike project, in collaboration with the UN-Habitat, has introduced a bike-sharing program in downtown Cairo.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-text">
                <h3>El Gouna Transportation:</h3>
                <p>In El Gouna, a resort town on the Red Sea, several eco-friendly transportation options are available, including electric buses and boats.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-text">
                <h3>Underground Metro</h3>
                <p>Cairo's underground metro system is offering a sustainable and efficient mode of transport.</p>
            </div>
        </div>
    </aside>

<?php include '../shared/footer.php'; ?>

