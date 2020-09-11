<?php
$link=mysqli_connect("localhost","root","");
if(!$link)
{
	die("ERROR: Could not connect. ".mysqli_connect_error());
}

$sql="use dbwproj";
mysqli_query($link,$sql);

$sql = "SELECT * FROM quiz where qname!='World Capitals'&& qname!='CEOs'";

if($result = mysqli_query($link, $sql))
{
if(mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_array($result);
    $qn=$row["qname"];
		$name=$row["Name"];
		$q1=$row["q1"];
		$a1=$row['a1'];
		$q2=$row['q2'];
		$a2=$row['a2'];
		$q3=$row['q3'];
		$a3=$row['a3'];
		$q4=$row['q4'];
		$a4=$row['a4'];
		$q5=$row['q5'];
		$a5=$row['a5'];

}

else
    echo "<p align='center'><font color='black' >No Such Quiz Exists!<font></p>";

}
else{
  echo"failed to get values";
}
?>
<html>
    <title>Your Quiz</title>
    <head>

            <link rel="stylesheet" href="cards.css">
    </head>
<body>
<img src="bg.jpg" id="bg" alt="">
        <div class="topnav">
                <a href="homepagein.html" class="flashbox">FlashBox</a>
                <a href="categories.html">Category</a>
                <a href="categories.html">Popular</a>
                <a href="AddNew.html">Make Your Own</a>
                <a href="blog.html">Blog</a>
                <a href="#blog" id="abcd2"></a>

                 <ul class="middle"></ul>

            </div>

<h1 class="hea"><?php echo $qn.'             Contributed By:'.$name;?></h1>
<br><br><br><br><br><br><br>
<div class="cards-container">

        <div class="card-container">
          <div class="card">
            <div class="front">
            <?php echo $q1?>
            </div>
            <div class="back">
                  <?php echo $a1?>
            </div>
          </div>
        </div>

        <div class="card-container">
                <div class="card">
                  <div class="front">
                 <?php echo $q2?>
                  </div>
                  <div class="back">
                        <?php echo $a2?>
                  </div>
                </div>
              </div><div class="card-container">
                    <div class="card">
                      <div class="front">
                      <?php echo $q3?>
                      </div>
                      <div class="back">
                            <?php echo $a3?>
                      </div>
                    </div>
                  </div><div class="card-container">
                        <div class="card">
                          <div class="front">
                          <?php echo $q4?>
                          </div>
                          <div class="back">
                                <?php echo $a4?>
                          </div>
                        </div>
                      </div><div class="card-container">
                            <div class="card">
                              <div class="front">
                              <?php echo $q5?>
                              </div>
                              <div class="back">
                                    <?php echo $a5?>
                              </div>
                            </div>
                          </div>
      </body>
      </html>
