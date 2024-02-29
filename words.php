<?php
session_start();
require_once "functions.php";
$_user_id = $_SESSION['id']??0;
if(!$_user_id){
    header('Location: index.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Vocabulary</title>
</head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<body>
<div class="container">
   <div class="row">
       <div class="col-lg-4">
           <div class="float-left">
               <ul class="menu list-group">
                <li class="text-info mt-5 list-group-item border border-info">Menu</li>
                <li class="list-group-item text-info border border-info"><a href="words.php" class="menu-item text-info"  data-target="words">All Words</a></li>
                <li class="list-group-item text-info border border-info"><a href="#" class="menu-item text-info" data-target="wordform" class="text-info">Add New Word</a></li>
                <li class="list-group-item text-info border border-info"><a href="logout.php" class="text-info">Logout</a></li>
             </ul>
           </div>
       </div>

       <div class="col-lg-8">
        <div class="card-header border border-info mt-5 text-center">
                <h4 class="text-info">MY VUCABULARY</h4>
                <span class="text-light bg-info badge badge-light">A</span>
                <span class="text-light bg-info badge badge-light">ক</span>
                <span class="text-light bg-info badge badge-light">ㅀ</span>
        </div>
         <div class="wordsc helement" id="words">
            <div class="row">
                <div class="col-lg-6 card-body">
                    <div class="alphabets">
                        <select id="alphabets" class="custom-select border border-info">
                            <option value="all" class="text-info">All Words</option>
                            <option value="A" class="text-info">A#</option>
                            <option value="B" class="text-info">B#</option>
                            <option value="C" class="text-info">C#</option>
                            <option value="D" class="text-info">D#</option>
                            <option value="E" class="text-info">E#</option>
                            <option value="F" class="text-info">F#</option>
                            <option value="G" class="text-info">G#</option>
                            <option value="H" class="text-info">H#</option>
                            <option value="I" class="text-info">I#</option>
                            <option value="J" class="text-info">J#</option>
                            <option value="K" class="text-info">K#</option>
                            <option value="L" class="text-info">L#</option>
                            <option value="M" class="text-info">M#</option>
                            <option value="N" class="text-info">N#</option>
                            <option value="O" class="text-info">O#</option>
                            <option value="P" class="text-info">P#</option>
                            <option value="Q" class="text-info">Q#</option>
                            <option value="R" class="text-info">R#</option>
                            <option value="S" class="text-info">S#</option>
                            <option value="T" class="text-info">T#</option>
                            <option value="U" class="text-info">U#</option>
                            <option value="V" class="text-info">V#</option>
                            <option value="W" class="text-info">W#</option>
                            <option value="X" class="text-info">X#</option>
                            <option value="Y" class="text-info">Y#</option>
                            <option value="Z" class="text-info">Z#</option>
                        </select>
                    </div>
                </div> 
                <div class="col-lg-6">
                   <form action="" method="POST" class="form">
                        <button class="float-right btn btn-info mt-3" name="submit" value="submit">Search</button>
                        <input type="text" name="search" class="float-right form-control mt-3" style="width: 50%; margin-right:20px;" placeholder="Search">
                   </form>   
                </div>
            </div>
             <table class="words table table-bordered border border-info">
                <thead class="thead">
                <tr>
                    <th scope="row" class="w-75 p-3 text-info border border-info">Word</th>
                    <th scope="row" class="text-info border border-info">Meaning</th>
                </tr>
                </thead>
                 <tbody>
                    <?php
                        if(isset($_POST['submit'])){
                            $serachedText = $_POST['search'];
                            $words = getWords($_user_id, $serachedText);
                        }else{
                            $words = getWords($_user_id);
                        }


                        if(count($words)>0) {
                            $length = count($words);
                            for ( $i = 0; $i < $length; $i ++ ) {
                                ?>
                                <tr>
                                    <td class="border border-info"><?php echo $words[$i]['word']; ?></td>
                                    <td class="border border-info"><?php echo $words[$i]['meaning']; ?></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                 </tbody>
            </table>
         </div>
          <div class="formc helement" id="wordform" style="display: none;">
            <form action="tasks.php" method="POST" class="form">
                <h4 class="text-info text-center">Add New Word</h4>
                <fieldset>
                    <label for="word" class="text-info">Word</label>
                    <input type="text" name="word" placeholder="Word" id="word" class="form-control border border-info">
                    <label for="Meaning" class="text-info">Meaning</label>
                    <textarea name="meaning" placeholder="Meaning" id="Meaning" rows="10" class="form-control border border-info"></textarea>
                    <input type="hidden" name="action" value="addword" class="form-control border border-info">
                    <input class="text-dark mt-2 btn btn-info" type="submit" value="Add Word" class="form-control">
                </fieldset>
            </form>
          </div>
       </div>
       <!-- This is total row end div-->
   </div>
<!------- Form Add New Word ---------->
<!-- This is total container end div-->
</div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
</html>