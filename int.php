<!DOCTYPE html>
<html>
<head>
    <title>Marvel Heroes</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        .container1,
        .container2,
        .container3{
            display:flex;
            align-items:center;
            justify-content:space-between;
            padding:30px;
            margin:20px;
            border:2px solid black;
        }

        .image img{
            width:250px;
            height:250px;
            border-radius:10px;
        }

        .content{
            width:60%;
            padding:20px;
        }

        h2{
            margin-bottom:10px;
        }
    </style>
</head>
<body>

    <!-- Section 1 -->
    <div class="container1">
        <div class="image">
            <img src="https://www.facebook.com/BestofDisneyArt/posts/-princess-rapunzel-/1181451450770956/" alt="princess">
        </div>

        <div class="content">
            <h2><?php echo "princess"; ?></h2>
            <p>
                <?php
                echo "she is a disney princess,spread love and care among the people.
                the she love to travel the world and help the people who need helps";
                ?>
            </p>
        </div>
    </div>

    <!-- Section 2 -->
    <div class="container2">
        <div class="content">
            <h2><?php echo "dora"; ?></h2>
            <p>
                <?php
                echo "                dora  the expolorer created by chris gifford ,valerie walsh valdes ,eric weiner at the year of 2000.";
                ?>
            </p>
        </div>

        <div class="image">
            <img src="https://i.pinimg.com/736x/52/00/54/520054e34bdb0540e9d74829a861c39a.jpg" alt="dora">
        </div>
    </div>

    <!-- Section 3 -->
    <div class="container3">
        <div class="image">
            <img src="images/captain.jpg" alt="Captain America">
        </div>

        <div class="content">
            <h2><?php echo "Captain America"; ?></h2>
            <p>
                <?php
                echo "Captain America is a super soldier and leader of the Avengers.
                He carries a vibranium shield.";
                ?>
            </p>
        </div>
    </div>

</body>
</html>