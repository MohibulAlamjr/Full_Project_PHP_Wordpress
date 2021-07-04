<?php 

 $name = $_GET['name'];
$email= $_GET['email'];
$id= $_GET['id'];




 ?>

 <div class="firstq">
                   <div class="caption">Basic Question</div>

                   
                <p class="qq">How Did You know about Stamford University?</p>
               <form id="mainForm" name="mainForm" class="fst" >
             <input style="display: none;" id="stdid" type="" value="<?php echo $id ; ?>" name="">


                  <div class="inputGroup">
                    <input  id="radio1" name="rads" value="1" type="radio"/>
                    <label for="radio1">Web Site</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio2" name="rads" value="2" type="radio"/>
                    <label for="radio2">Social Medai</label>
                  </div>
                  <div class="inputGroup">
                    <input  id="radio3" name="rads" value="3" type="radio"/>
                    <label for="radio3">Realtive</label>
                  </div>
                  <input style="margin-top: 26%;" id="submit" onclick="myFun2()" type="button" class="btn btn-success" value="Submit">
                 
                </form>
                </div>