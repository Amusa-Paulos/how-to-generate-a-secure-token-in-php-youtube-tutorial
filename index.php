<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to generate a secured token in php</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="lesson-title">
        <div class="lesson-title-inner">
            <h3>How to generate a Secured token in PHP</h3>
        </div>
    </div>
    <?php
        $generated_token = uniqid('paulos_ab');
        // $converted_token = bin2hex($generated_token);

        $getRandomString = function($string, $len){
            $randString = '';
            for ($i=0; $i < $len; $i++) { 
                $randString .= $string[rand(0, $len - 1)];
            }

            return $randString;
        }

    ?>
    <div class="lesson-body">
        <div class="lesson-inner">
            <div class="lesson-left">Full Token</div>
            <div class="lesson-right"><?php echo $generated_token; ?></div>
        </div>
        <div class="lesson-inner">
            <div class="lesson-left">Token (10 Random Chars)</div>
            <div class="lesson-right"><?php echo $getRandomString($generated_token, 10); ?></div>
        </div>
        <div class="lesson-inner">
            <div class="lesson-left">is Secured</div>
        </div>
    </div>
</body>
</html>