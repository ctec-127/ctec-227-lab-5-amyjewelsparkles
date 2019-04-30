<?php // lab 5 php file 
    include_once 'inc/ctec_functions.php';
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>CTEC-227 - Lab 5</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="text-info center">CTEC 227 - PHPII</h1>
            <h2>Lab 5/6 - Test Functions - Amina Khan</h2>
        </div>
        <div class="container">
            <h2 class="text-info mt-3"><strong>Function 1 :</strong> is_post_request() & <strong>Function 2 :</strong> is_get_request()</h2>
                <?php 
                    if(is_post_request()){
                        echo '<p class="px-4">YES! This is a POST request</p>';
                    }else if(is_get_request()){
                        echo '<p class="px-4">Hey! This is a GET request. If you want to change it to a POST, please submit the form below.</p>';
                    }
                ?>

            <form class="px-4" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <label for="post">"Post Request"</label>
                <input type="radio" name="post" id="post" checked="checked">       
                <input type="submit" value="Post" class="btn btn-primary">
            </form>

            <?php 

                echo '<h2 class="text-info mt-3"><strong>Function 3 :</strong> h($string="")</h2>';
                echo '<h1 class="px-4">' . h($string="This is a Heading. It is typed between <h1> & </h1> tags.") . '</h1>';

                echo '<h2 class="text-info mt-3"><strong>Function 4 :</strong> u($string="") - urlencode </h2>';
                echo '<p class="px-4">This function is convenient when encoding a string to be <strong>used in a query part of a URL,</strong> as a convenient way to pass variables to the next page. <br> u($string="Hello World") will return: ' . u($string="Hello World") . '</p>';

                echo '<h2 class="text-info"><strong>Function 5 :</strong> raw_u($string="")</h2>';
                echo '<p class="px-4">Returns a string in which all non-alphanumeric characters except -_.~ have been<strong> replaced with a percent (%) sign</strong> followed by two hex digits. <br>raw_u($sting="Hello World") will return: ' . raw_u($string="Hello World") . '</p>';

                echo '<h2 class="text-info"><strong>Function 6 :</strong> is_blank($value)</h2>';
                echo '<p class="px-4">This function <strong>validates data presence</strong> <br>is_blank("hello world") will return: ' . is_blank('hello world') . '</p>';
                
                echo '<h2 class="text-info"><strong>Function 7 :</strong> has_presence($value)</h2>';
                echo '<p class="px-4">This function also <strong>validates data presence</strong>, opposite of is_blank()<br>has_presence("hello world") will return: ' . has_presence('hello world') . '</p>';
                
                echo '<h2 class="text-info"><strong>Function 8 :</strong> has_length_greater_than($value, $min)</h2>';
                echo '<p class="px-4">This function <strong>validates string length</strong> including spaces. It accepts two parameters, a string and <strong>minimum</strong> int value for comparison. Will return true (1) or false (0) <br>has_length_greater_than("hello", 3) will return: ' . has_length_greater_than('hello', 3) . '</p>';

                echo '<h2 class="text-info"><strong>Function 9 :</strong> has_length_less_than($value, $max)</h2>';
                echo '<p class="px-4">This function <strong>validates string length</strong> including spaces. It accepts two parameters, a string and <strong>maximum</strong> int value for comparison. Will return true (1) or false (0) <br>has_length_less_than("hi", 5) will return: ' . has_length_less_than('hi', 5) . '</p>';
                
                echo '<h2 class="text-info"><strong>Function 10 :</strong> has_length_exactly($value, $exact)</h2>';
                echo '<p class="px-4">This function <strong>validates string length</strong> including spaces. It accepts two parameters, a string and <strong>exact string length</strong> int value for comparison. It will return true (1) or false (0) <br>has_length_exactly("hello", 5) will return: ' . has_length_exactly('hello', 5) . '</p>';
               
                echo '<h2 class="text-info"><strong>Function 11 :</strong> has_length($value, $options)</h2>';
                echo '<p class="px-4">This function <strong>validates string length combining functions: _greater_than, _less_than, _exactly </strong>.<br>for example: has_length("abcd", ["min" => 3, "max" => 5]). It will return true (1) or false (0) <br> has_length("hello", ["min" => 3, "max" => 5]) will return: ' . has_length('hello', ['min' => 3, 'max' => 5]) . '</p>';

                echo '<h2 class="text-info"><strong>Function 12 :</strong> has_inclusion_of($value, $set)</h2>';
                echo '<p class="px-4">This function <strong>validates inclusion in a set</strong>. It accepts a value/variable and a set or array to check if it is present. It will return 1 or 0<br> has_inclusion_of(5, [1,2,3,5,7,9]) will return: ' . has_inclusion_of(5, [1,2,3,5,7,9]) . '<br>has_inclusion_of(6, [1,2,3,5,7,9]) will return: ' . has_inclusion_of(6, [1,2,3,5,7,9]) . '</p>';

                echo '<h2 class="text-info"><strong>Function 13 :</strong> has_exclusion_of($value, $set)</h2>';
                echo '<p class="px-4">This function <strong>validates exclusion in a set</strong>. It accepts a value/variable and a set or array to check if it is present. It will return 1 or 0<br> has_exclusion_of(5, [1,2,3,5,7,9]) will return: ' . has_exclusion_of(5, [1,2,3,5,7,9]) . '<br>has_exclusion_of(6, [1,2,3,5,7,9]) will return: ' . has_exclusion_of(6, [1,2,3,5,7,9]) . '</p>';

                echo '<h2 class="text-info"><strong>Function 14 :</strong> has_string($value, $required_string)</h2>';
                echo '<p class="px-4">This function <strong>validates inclusion of character(s) in a string</strong>. It accepts a string and character(s)<br> has_string("nobody@nowhere.com", ".com") will return: ' . has_string('nobody@nowhere.com', '.com') . '<br>has_string("nobody@nowhere.com", "hello") will return: ' . has_string('nobody@nowhere.com', 'hello') . '</p>';

                echo '<h2 class="text-info"><strong>Function 15 :</strong> has_valid_email_format($value)</h2>';
                echo '<p class="px-4">This function <strong>validates correct format for email addresses</strong>. It will return true (1) or false (0) <br>has_valid_email_format("nobody@nowhere.com") will return: ' . has_valid_email_format("nobody@nowhere.com") . '<br>has_valid_email_format("nob-ody@no.wh@ere.com") will return: ' . has_valid_email_format('nob-ody@no.wh@ere.com') . '</p>';
                
                $errors = ["invalid name", "invalid field", "invalid item"];
                
                echo '<h2 class="text-info"><strong>Function 16 :</strong> display_errors($errors=array)</h2>';
                echo '<p class="px-4">This function <strong>displays errors collected in an array</strong>. It will return and unordered list of erros.<br>for example: if $errors = ["invalid name","invalid field", "invalid item"]. then, display_errors($errors=array()) will return: ' . display_errors($errors) . '</p>';
                

            ?>
        </div>
    </div>        
    
</body>
</html>