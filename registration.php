<?php
include("includes/dbcon.php");
$allMonth = $dbCon->query("select month from registration");
// session_start();

// if(isset($_POST['next']))
$allCampus = $dbCon->query("select * from campus");

$allEducation = $dbCon->query("select * from educations");

$allTopics = $dbCon->query("select * from topics");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="description" content="float">
    <meta name="viewpoint" content="width=device-width, initial-scale-1">
    <title>Registering</title>
    <link rel="stylesheet" type="text/css" href="app.css">
    <link rel="stylesheet" type="text/css" href="registration.css">
</head>

  <body>
<?php include('nav.php'); ?>

    <div id="content">
        <?php
        if($_GET['s'] === 'registration'){
            ?>
                <div id="modalBox">
                    <h1>WUHUUUU</h1>
                </div>
            <?php
        }
        ?>
        <form action="doCodes/doRegister.php" method="POST">
        <div id="registry1">
            <section id="section1">
                
                <div class="month">
                    <h2>Måned</h2>

                    <select class="drop_down" name="month">
                        <option value="januar">Januar</option>
                        <option value="febuar">Februar</option>
                        <option value="marts">Marts</option>
                        <option value="april">April</option>
                        <option value="maj">Maj</option>
                        <option value="juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="august">August</option>
                        <option value="september">September</option>
                        <option value="oktober">Oktober</option>
                        <option value="november">November</option>
                        <option selected value="december">December</option>
                    </select>
                </div>

                <div class="year">
                    <h2>År</h2>
                    
                    <select class="drop_down" name="year">
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option selected value="2022">2022</option>
                        <option value="2023">2023</option>
                    </select>
                </div>

                <div class="campus">
                    <h2>Campus</h2>
                    <select class="drop_down" name="campus">
                    <?php
                    while($row = $allCampus->fetch_assoc()){
                    ?>
                    <option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?> <?php echo $row["city"]; ?></option>
                    <?php
                    }
                    ?>
                    </select>

                </div>
            </section>

            <section id="section2">

                <h2>Uddannelse</h2> 
                <input class="drop_down" id="education_container_search" onkeyup="searchbar('#education_container')" type="text" placeholder="Uddannelse" name="search">
                <div class="flex_box" id="education_container">
                <?php
                    while($row = $allEducation->fetch_assoc()){
                    ?>
                    <div class="grid_item">
                        <input type="radio" id="<?php echo $row["name"]; ?>" name="education" value="<?php echo $row["id"]; ?>">
                        <label for="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></label>
                    </div>
                    
                    <?php
                    }
                    ?>
</div>
                
                <button id="next_button" type="button">Næste</button>
            </section>
        </div>
        
         <div id="registry2" style="display: none;">

            <section id="section3">
                <div class="gender">
                    <h2>Køn</h2>

                    <select class="drop_down" name="gender">
                        <option value="1">Mand</option>
                        <option value="2">Kvinde</option>
                        <option value="3">Gruppe</option>
                    </select>
                </div>

                <div class="inquiry">
                    <h2>Hendvendelse</h2>
                    
                    <select class="drop_down" name="inquiry">
                        <option value="1">Online</option>
                        <option value="2">Fysisk</option>
                        <option value="3">Telefon</option>
                    </select>
                </div>

                <div class="conversation_time">
                    <h2>Samtaletid</h2>

                    <select class="drop_down" name="time">
                        <option value="1-15 min">1-15min</option>
                        <option selected value="16-30 min">16-30min</option>
                        <option value="31-45 min">31-45min</option>
                        <option value="46-60 min">46-60min</option>
                        <option value="over 60 min">Over 60min</option>
                    </select>
                </div>
            </section>

            <section id="section2">
                <h2>Emne</h2> 
                <input class="search" id="topic_container_search" onkeyup="searchbar('#topic_container')" type="text" placeholder="Emne" name="search">
                <div class="flex_box" id="topic_container">
                <?php
                    while($row = $allTopics->fetch_assoc()){
                    ?>
                    <div class="grid_item">
                        <input type="checkbox" id="<?php echo $row["title"]; ?>" name="topics[]" value="<?php echo $row["id"]; ?>">
                        <label for="<?php echo $row["title"]; ?>"><?php echo $row["title"]; ?></label>
                        <?php
                        if($row['description'] !== ""){
                            ?>
                            <img src="img/info_icon.png" alt="info" title="<?php echo $row["description"]; ?>">
                            <?php
                        }
                        ?>
                    </div>
                    
                    <?php
                    }
                    ?>
                   </div>
            

                <div class="buttons_box">
                    <div class="buttons">
                        <button id="back_button" type="button">Tilbage</button>

                        <input type="submit" id="registrate" name="submit" value="Registrer">
                    </div>
                </div>
            </section>
        </div> 
        </form>
    </div>
    
    <script src="registration.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="search.js"></script>
  </body>
</html>
