<?php
$sum = "";
if (isset($_POST['f_number'])){
    $sum = "";
    $f_number = $_POST['f_number'];
    $l_number = $_POST['l_number'];
    $operator = $_POST['operator'];

    if ( $f_number && $l_number){
        switch ($operator) {
            case '+':
                $sum = $f_number + $l_number;
                break;
            case '-':
                $sum = $f_number - $l_number;
                break;
            case '*':
                $sum = $f_number * $l_number;
                break;
            case '/':
                $sum = $f_number / $l_number;
                break;
            case '%':
                $sum = $f_number % $l_number;
                break;
        }
    }else{
        $sum = "f-number & l_number cannot be empty";
    }

}
?>

<div class="col-8 card mx-auto" style="background-color: bisque">
    <div class="card-body text-center">
        <div class="row mx-auto" >
        <div ><h3>Basic Calculator Using php</h3></div>
        <div >
            <?php
            date_default_timezone_set("Asia/Dhaka");
            echo date("d.m.y");
            echo "<br>";
            echo date("h.i.sa");
        ?>
        </div>
        </div>
        <div class="card-body">
            <h3>Result Is[
                <?php
                if ($sum == ''){
                    echo "Result Is Not Calculate";
                }else{
                    echo $sum ;
                }
                ?>]
            </h3>
            <form action="" method="post">
                <div class="form-outline col-6 mx-auto">
                    <input type="number" class="form-control" placeholder="First Number" name="f_number" >
                </div>
                <div class="form-outline col-6 mx-auto">
                 <input type="number" class="form-control" placeholder="Last Number" name="l_number" >
                </div>
                <select class="select" name="operator">
                    <option>---Choose---</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                    <option value="%">%</option>
                </select>
                <div class="card-footer ">
                    <button type="submit" class="btn btn-info">Calculate</button>
                </div>
            </form>
        </div>
    </div>
</div>
