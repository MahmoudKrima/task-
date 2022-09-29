<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!--                   task 1           -->
    <?php
    $colors=["red","green","blue","white","black"];
    // add colors to array 
    array_push($colors,"orange");
    array_unshift($colors,"gray");
    $colors[]="yellow";
    $f=1;
    $m=1;
    ?>
    <!-- display elements in h2 with their new arrange after adding new colors to array   -->
    <h2><?php echo $colors[$f++];?></h2>
    <h2><?php echo $colors[$f++];?></h2>
    <h2><?php echo $colors[$f++];?></h2>
    <h2><?php echo $colors[$f++];?></h2>
    <h2><?php echo $colors[$f++];?></h2>

    <!-- display elements in ul with their new arrange after adding new colors to array  -->
    <ul>
        <li><?php echo $colors[$m++];?></li>
        <li><?php echo $colors[$m++];?></li>
        <li><?php echo $colors[$m++];?></li>
        <li><?php echo $colors[$m++];?></li>
        <li><?php echo $colors[$m++];?></li>
    </ul>
    <!-- display new colors added to array  -->
    <h3><?php echo $colors[0];?></h3>
    <h3><?php echo $colors[6];?></h3>
    <h3><?php echo $colors[7];?></h3>
<!-- ======================================================================================= -->

    <!--                  task 2               -->
    <?php
    $numbers=[10,20,30,40,50];
    $index=0;
    ?>
    <!-- display elements is h3  -->
    <h3><?php echo $numbers[$index++]; ?></h3>
    <h3><?php echo $numbers[$index++]; ?></h3>
    <h3><?php echo $numbers[$index++]; ?></h3>
    <h3><?php echo $numbers[$index++]; ?></h3>
    <h3><?php echo $numbers[$index++]; ?></h3>
    <!-- add +5 for the array elements -->
    <?php
    $x=5 ;
    $i=0;
    $sum_array[]=$numbers[$i++] +$x ;
    $sum_array[]=$numbers[$i++] +$x ;
    $sum_array[]=$numbers[$i++] +$x ;
    $sum_array[]=$numbers[$i++] +$x ;
    $sum_array[]=$numbers[$i++] +$x ;
    print_r($sum_array);
    ?>
        <!-- divided elements in array by 3 -->
        <?php
        $y=3;
        $l=0;
        $divid_array[]=$numbers[$l++] / $y ;
        $divid_array[]=$numbers[$l++] / $y ;
        $divid_array[]=$numbers[$l++] / $y ;
        $divid_array[]=$numbers[$l++] / $y ;
        $divid_array[]=$numbers[$l++] / $y ;
        echo"<pre>";
        print_r($divid_array);
        echo"</pre>";
        ?>
        <!-- add 3 new numbers to the array -->
        <?php
        array_push($numbers,60,70,80);
        echo"<pre>";
        print_r($numbers);
        echo"</pre>";
        ?>
<!-- ======================================================================================= -->

        <!--               task3            -->
        <?php
        $users=[
            ["mohamed ali",20],
            ["rana ahmed",19],
            ["maged khaled",25]
        ]
        ?>
        <!-- display elements in array in card -->
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php echo $users[0][0] ?></li>
                            <li class="list-group-item"><?php echo $users[0][1] ?></li>
                        </ul>
                    </div>
                        <br>
                    <div class="card" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><?php echo $users[1][0] ?></li>
                                <li class="list-group-item"><?php echo $users[1][1] ?></li>
                            </ul>
                    </div>
                        <br>
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php echo $users[2][0] ?></li>
                            <li class="list-group-item"><?php echo $users[2][1] ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       
<br>
<!-- ======================================================================================= -->
<!--              task4        -->
<?php
$employees=[
    ["mohamed ali", "mohamed@eraasoft.com","01024256993",2500],
    ["reham mohamed", "reham@eraasoft.com","01122255448",3000],
    ["maged hesham", "maged@eraasoft.com","01024213361",4000],
    ["ali mahmoud", "ali@eraasoft.com","01142547485",2000],
    ["nader elsayed", "nader@eraasoft.com","01123659854",1000]
]
?>
<!-- display data in table  -->
<div class="contariner">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th> E-mail</th>
                        <th>Phone</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo$employees[0][0];?></td>
                        <td><?php echo$employees[0][1];?></td>
                        <td><?php echo$employees[0][2];?></td>
                        <td><?php  echo$employees[0][3];?></td>
                    </tr>
                    <tr>
                        <td><?php echo$employees[1][0];?></td>
                        <td><?php echo$employees[1][1];?></td>
                        <td><?php echo$employees[1][2];?></td>
                        <td><?php  echo$employees[1][3];?></td>
                    </tr>
                    <tr>
                        <td><?php echo$employees[2][0];?></td>
                        <td><?php echo$employees[2][1];?></td>
                        <td><?php echo$employees[2][2];?></td>
                        <td><?php  echo$employees[2][3];?></td>
                    </tr>
                    <tr>
                        <td><?php echo$employees[3][0];?></td>
                        <td><?php echo$employees[3][1];?></td>
                        <td><?php echo$employees[3][2];?></td>
                        <td><?php  echo$employees[3][3];?></td>
                    </tr>
                    <tr>
                        <td><?php echo$employees[4][0];?></td>
                        <td><?php echo$employees[4][1];?></td>
                        <td><?php echo$employees[4][2];?></td>
                        <td><?php  echo$employees[4][3];?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- ======================================================================================= -->
<!--                         task5           -->
<!-- first swaping method  -->
                    <?php
                    $a=5;
                    $b=10;
                    $z=$a;
                    $a=$b;
                    $b=$z;
                    echo"b=". $b."<br>" . "a=".$a ;
                    ?>
                    <br>

<!-- second swaping method  -->
                    <?php
                    $x=234;
                    $y=345;
                    $x = $x+$y; // 579  
                    $y = $x-$y; // 234
                    $x =$x-$y; // 345
                    echo"y=". $y."<br>" ."x=".$x ;
                    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>