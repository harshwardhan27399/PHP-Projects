
<?php
session_start();
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <script  src="markj.js"></script>
        <script  src="mark.js"></script>
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script>
            $(function () {

                // the input field
                var $input = $("input[type='search']"),
                        // clear button
                        $clearBtn = $("button[data-search='clear']"),
                        // prev button
                        $prevBtn = $("button[data-search='prev']"),
                        // next button
                        $nextBtn = $("button[data-search='next']"),
                        // the context where to search
                        $content = $(".content"),
                        // jQuery object to save <mark> elements
                        $results,
                        // the class that will be appended to the current
                        // focused element
                        currentClass = "current",
                        // top offset for the jump (the search bar)
                        offsetTop = 50,
                        // the current index of the focused element
                        currentIndex = 0;

                /**
                 * Jumps to the element matching the currentIndex
                 */
                function jumpTo() {
                    if ($results.length) {
                        var position,
                                $current = $results.eq(currentIndex);
                        $results.removeClass(currentClass);
                        if ($current.length) {
                            $current.addClass(currentClass);
                            position = $current.offset().top - offsetTop;
                            window.scrollTo(0, position);
                        }
                    }
                }

                /**
                 * Searches for the entered keyword in the
                 * specified context on input
                 */
                $input.on("input", function () {
                    var searchVal = this.value;
                    $content.unmark({
                        done: function () {
                            $content.mark(searchVal, {
                                separateWordSearch: true,
                                done: function () {
                                    $results = $content.find("mark");
                                    currentIndex = 0;
                                    jumpTo();
                                }
                            });
                        }
                    });
                });

                /**
                 * Clears the search
                 */
                $clearBtn.on("click", function () {
                    $content.unmark();
                    $input.val("").focus();
                });

                /**
                 * Next and previous search jump to
                 */
                $nextBtn.add($prevBtn).on("click", function () {
                    if ($results.length) {
                        currentIndex += $(this).is($prevBtn) ? -1 : 1;
                        if (currentIndex < 0) {
                            currentIndex = $results.length - 1;
                        }
                        if (currentIndex > $results.length - 1) {
                            currentIndex = 0;
                        }
                        jumpTo();
                    }
                });
            });
        </script>


        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            mark {
                background: yellow;
            }

            mark.current {
                background: orange;
            }

            .header {
                padding: 10px;
                width: 100%;
                background: #eee;
                position: fixed;
                top: 0;
                left: 0;
            }

            .content {
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
        <div class="container text-center">
            <div class="jumbotron">
                <div class="header">
                    Search:
                    <input type="search" placeholder="Search">
                    <button data-search="next">&darr;</button>
                    <button data-search="prev">&uarr;</button>
                    <button data-search="clear">✖</button>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="content" style="border: 1px solid black; padding: 25px 25px 25px 25px;background-color: lightskyblue;min-height: 100px; width: 100%; margin-top: 50px">
                <?php
				
				
 include_once 'database.php';
		
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  $m1=$_POST["name"];
$sql = "SELECT fname FROM uploadsfile WHERE filenm='$m1'"; 
if($res = mysqli_query($conn, $sql)){ 
    if(mysqli_num_rows($res) > 0){ 
        while($row = mysqli_fetch_array($res)){ 
		$file = $row['fname'];

                $fn = fopen($file,"r");
  
                while(! feof($fn))  {
                	$result = fgets($fn);
                     echo $result;
                     echo "<br>";
                 }

                fclose($fn);
            
        } 
      
        mysqli_free_result($res); 
    } else{ 
        echo "No Matching records are found."; 
    } 
} else{ 
    echo "ERROR: Could not able to execute $sql. ". mysqli_error($conn); 
} 
  
mysqli_close($conn);
				
                
                ?>

                </div>
            </div>
        </div>

    </body>

</html> 

