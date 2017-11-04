<!doctype html>
<html>
<head>
<title>Javvadhi New Year Countdown</title>
<style>
.green{color:green;}
 
h1{
font-size:3em;
font-weight:bold;
font-family:Arial, Helvetica, sans-serif;
}
 
</style>
</head>
<?php
$date = mktime(0,0,0,01,01,2017);
$remaining = $date - time();
$days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);
?>
<font color="purple">
<marquee><h1> NEW YEAR COUNTDOWN!! </h1> </marquee> 
<h1>There are <span class="red"> <?php echo $days_remaining?></span> days and <span class="red"> <?php echo $hours_remaining?></span> hours left</h1>
<marquee><h3>HEHEHEAHHAHAHAHH!!</h3></marquee>
</font>
<script>
            var timerData = [];

            function secondPassed(row) {
                var seconds = timerData[row].remaining;
                var minutes = Math.round((seconds - 30) / 60);
                var remainingSeconds = seconds % 60;
            // var time=clearInterval(timerData[row].timerId);alert(time);
                if (remainingSeconds < 10) {
                    remainingSeconds = "0" + remainingSeconds;
                }

                document.getElementById('countdown' + row).innerHTML = minutes + ":" + remainingSeconds;
                if (seconds == 0) {
                    clearInterval(timerData[row].timerId);
                    document.getElementById('countdown' + row).innerHTML = "Buzz Buzz";
                            //$("#product_"+row).hide();
                            $("#add_"+row).show();
                            $("#1add_"+row).show();
                            $("#added_"+row).hide();
                            $("#block_"+row).hide();
                        $("#sale_"+row).show();
                             $("#1sale_"+row).show();
                            $.ajax({
                    type: "GET",
                    url: 'unblock.php',
                    data: { id:row },
                            success:function(data){ 
                            $("#cart-item").html(data);
                            $("#amount-top").html($("#total").val());
                            $("#item-total").html($("#carttotal").val());
                            }
                });
                } else {
                    seconds--;
                }
                timerData[row].remaining = seconds;
            }

            function timer(row, min) {
                    timerData[row] = {
                    remaining:min,
                    timerId: setInterval(function () { secondPassed(row); }, 1000)
                };
                    var sec=timerData[row].timerId;
            }
    <?php
    $itemid = array();
    foreach ($_SESSION["cart_item"] as $item) {

        $old = strtotime(date("m/d/Y h:i:s ", time()));
        $new = strtotime($item['time']);
        $time = $new - $old;
        ?>

                timer(<?php echo $item['id']; ?>,<?php echo $time; ?>);

    <?php } ?>

            </script>
</body>
</html>
