<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="dashboard.css">

</head>
<body>
    <nav>
        <ul id="navbar">
            <li class="navbar_link"><a href="#">Registration</a></li>
            <li class="navbar_link"><a href="#">Dashboard</a></li>
            <li class="navbar_link"><a href="#">Admin</a></li>
            <li class="profil"><a href="#">Navn</a></li>
        </ul>
    </nav>

    <div id="content"> 
        <div class="dashSidebar">
            <div class="dashPad">
                <h2>Vejleder</h2>
                <select class="drop_down" name="drop_down">
                    <option value="vejleder">Vejleder</option>
                    <option value="dorthe">Dorthe</option>
                    <option value="susanne">susanne</option>
                </select>

                <h2>Periode</h2>
                <p>Fra</p>
                <select class="drop_down" name="drop_down">
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select>
                <br>
                <p>Til</p>
                <select class="drop_down" name="drop_down">
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select>

                <h2>Diagram</h2>
                <select class="drop_down" name="drop_down">
                    <option value="cirkel">Cirkel diagram</option>
                    <option value="pinde">Pinde diagram</option>
                    <option value="soejle">Søjle diagram</option>
                </select>

                <h2>Vælg</h2>
                <form>  
                <div class="education_grid_item_1">                 
                        <input type="checkbox" name="uddannelse" value="Uddannelse">
                            <label>Uddannelse</label>
                </div>
                <div class="education_grid_item_1">                 
                        <input type="checkbox" name="emner" value="Emner">
                            <label>Emner</label>
                </div>
                <div class="education_grid_item_1">                 
                        <input type="checkbox" name="måned" value="Måned">
                            <label>Måned</label>
                </div>
                <div class="education_grid_item_1">                 
                        <input type="checkbox" name="køn" value="Køn">
                            <label>Køn</label>
                </div>
                <div class="education_grid_item_1">                 
                        <input type="checkbox" name="henvendelser" value="Henvendelser">
                            <label>Henvendelser</label>
                </div>
                <div class="education_grid_item_1">                 
                        <input type="checkbox" name="samtale_tid" value="Samtale tid">
                            <label>Samtale tid</label>
                </div>
                </form>
            </div>

        </div>
            
    </div>
</body>
</html>