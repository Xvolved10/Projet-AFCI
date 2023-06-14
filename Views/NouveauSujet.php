

<body class="body">
    <div style="border: 2px solid black;margin-top:10%;margin-inline:25%; text-align: center; font-size: x-large; background-color:lightpink; ">
        <form action="" method="post">
        <h1>Creez un nouveau sujet</h1>
        <?php
            if (isset($error["Titre_sujet"])) { ?>
                <p><?php echo $error["Titre_sujet"]; ?></p>
            <?php } ?>
        <textarea name="Titre_sujet" value="" style="background-color:lightblue ; color:darkorchid; width:75%; height:150px"></textarea>
        <br><br>
        <button type="submit" name="Valider" style="background-color: blue; color:white;margin-bottom:3% ; height:50px ;padding-left:1%; padding-right:1%">Valider</button>
        </form>
    </div>    
    
