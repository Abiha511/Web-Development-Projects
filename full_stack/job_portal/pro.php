<?php
ini_set('session.cookie.domain','welcome.php');
session_start();

/*if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) 
{
    header("location: login.php");
}*/


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">>
    <title>Document</title>
</head>
<style>
    body{
        background-color: rgb(14, 14, 14);
    }
    .job {
        border: 7px solid turquoise;
        margin-bottom: 10px;
        display: flex;
        flex-direction: row;
    }

    .job1 {
        border: 7px solid teal;
        margin-bottom: 10px;
        display: flex;
    }

    .job2 {
        border: 7px solid teal;
        margin-bottom: 10px;
        display: flex;
        flex-direction: row;
    }

    .job3 {
        border: 7px solid teal;
        margin-bottom: 10px;
        display: flex;
        flex-direction: row;
    }

    .job4 {
        border: 7px solid teal;
        margin-bottom: 10px;
        display: flex;
        flex-direction: row;
    }

    .apply {
        justify-content: center;
        align-items: center;
        height: 256.812px;
        margin-left: 5vw;
        display: flex;
    }

    button {
        margin-top: 0.6vh;
        width: fit-content;
        padding : 10px 20px;
        margin-left : 81vw;
        background: none;
        border: 3px solid white;
        font-size: 20px;
        font-family: 'IBM Plex Serif', serif;
        font-weight: 1000;
        color: white;
        cursor: pointer;
        transition: 0.8s;
        border-radius: 25px;
        z-index: 3;
        position: absolute;
    }

    .textend {
        margin-top: 3vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Georgia',serif;
        font-size: 4rem;
        color: cornsilk;
    }


    button:hover{
        color:#00E4FF;
        background-color: white;
        box-shadow: 0 0 25px #00E4FF,
                    0 0 50px #00E4FF;
        transform: scale(1.2);
    }

    .framework {
        width: 25vw;
        padding-top: 15px;
        padding-bottom: 15px;
        padding-left: 20px;
        font-family: 'Acme', sans-serif;
        color: white

    }

    h1{
        color: whitesmoke;
    }
</style>

<body>
    <h1>List of Current Available Jobs</h1>
    <div class="job">
        <div class="framework">
            <h2>International Business Mechanism</h2>
            Requirements:
            <ul>
                <li>8 year Work Expirience </li>
            </ul>
           <p> CTC : 12 LPA</p>
            <p>Work Hours : Flexible (T&C)</p>
           <p>Contact : XXXXXXXXX</p> 
        </div>
        <div class="apply"><button onclick="apply()">Apply Now</button>
            <script>
                function apply() {
                    alert("Your Application for the JOB has been sent Successfully");
                }
            </script>
        </div>
    </div>
    <div class="job1">
        <div class="framework">
            <h2>Mapple</h2>
            Requirements:
            <ul>
                <li>10 year Work Expirience</li>
                <li>PhD on Artificial Intelligence</li>
                <li>Software Development Core</li>
            </ul>
            <p>CTC :20 LPA</p>
            <p> Work Hours : 09:00-18:00</p>
            Contact : XXXXXXXXX
        </div>
        <div class="apply"><button onclick="apply()">Apply Now</button>
            <script>
                function apply() {
                    alert("Your Application for Job approval has been sent Successfully");
                }
            </script>
        </div>
    </div>
    <div class="job2">
        <div class="framework">
            <h2>SackSpace</h2>
            Requirements:
            <ul>
                <li>3 year Work Expirience</li>
                <ol>Languages Req.
                    <li>Python</li>
                    <li>Django framework</li>
                    <li>Web Dev</li>
                </ol>
            </ul>
            <p>CTC : 18 LPA</p>
            <p> Work Hours : 07:00-16:00</p>
            Contact : XXXXXXXXX
        </div>
        <div class="apply"><button onclick="apply()">Apply Now</button>
            <script>
                function apply() {
                    alert("Your Application for Job approval has been sent Successfully");
                }
            </script>
        </div>
    </div>


    <div class="job3">
        <div class="framework">
            <h2>NanoSoft</h2>
            Requirements:
            <ul>
                <li>No Work Experience</li>
                <li>OS Development</li>
                <li>Skilled in C++</li>
            </ul>
            <p>CTC : 12 LPA</p>
            <p> Work Hours : 07:00-16:00</p>
            Contact : XXXXXXXXX
        </div>
        <div class="apply"><button name="submit4" onclick="apply()">Apply Now</button>
        <?php
          $conn=mysqli_connect("localhost","root","","login");
          if(isset($_POST['submit4']))
          {
              //$name = trim($_POST['iname']);
              //$email = trim($_POST['email']);
              //$content = trim($_POST['message']);
             $name = $_SESSION['name'];
             $email = $_SESSION['username'];
             $company = 'Nanosoft';
              
              //$sql = "insert into textarea_value (textarea_content) values ('".$textareaValue."')";
              $sql = "insert into company1 (name,email,company) values('$name','$email','$company')";
              mysqli_query($conn, $sql);
              $affectedRows = mysqli_affected_rows($conn);
              
              if($affectedRows == 1)
              {
                  $successMsg = "Record has been saved successfully";
              }
              
          }
          mysqli_close($conn);
        ?>
            <script>
                function apply() {
                    alert("Your Application for Job approval has been sent Successfully");
                }
            </script>

        </div>
    </div>

    <div class="job4">
        <div class="framework">
            <h2>Ramazon</h2>
            Requirements:
            <ul>
                <li>4 year Work Expirience </li>
                <li>Skilled in C++</li>
                <li>Skilled in App Deveopment</li>
                <li>Web Developer</li>
                <li>Data Scientist</li>
            </ul>
            CTC : 25 LPA
            Work Hours : Flexible (T&C)
            Contact : XXXXXXXXX
        </div>
        <div class="apply"><button onclick="apply()">Apply Now</button>
            <script>
                function apply() {
                    alert("Your Application for Job approval has been sent Successfully");
                }
            </script>
        </div>
    </div>    
    
    <div class="textend">
         Stay  Connnected  to  get  more  job  offers !!
    </div>
</body>

</html>