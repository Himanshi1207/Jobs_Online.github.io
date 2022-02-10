<html>

<head>
    <script src="https://kit.fontawesome.com/00cf8b631d.js" crossorigin="anonymous"></script>
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        .hc {
            position: fixed;
        }

        .hc,
        .hnavbar,
        .hcb3 {
            display: flex;
        }

        .hc {
            justify-content: space-around;
        height: 10vh;
        width: 100%;
        background-color: #124143;
        align-items: center;
        }

        .hcb2 {
            width: 50%;
            /* justify-ctent: center; */
        }

        .hcb1 {
            width: 25%;
        }

        .hcb1 img {
            /* width: 25%; */
            margin-left: 55px;
            height: 60px;
            width: 60px;
        }

        .image img {
            height: 60px;
            width: 60px;
        }

        .hnavbar {
            list-style: none;
            justify-content: center;
        }

        .hnavbarlink1 a {
            text-decoration: none;
            color: #f5f5f5;
            font-size: 25px;
            padding: 10px;
            margin: 13px;
        }

        .hnavbarlink1 a:hover {
            /* color: #124143; */
            background-color: rgb(255,255,255,0.1);
            /* border:2px solid white; */
            border-radius: 5px;
            transition: 0.3s;
            cursor: pointer;
            /* box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset; */
        }

        .hcb3 {
            width: 25%;
            justify-content: center;
            align-items: center;
        }

        .hbtn {
            cursor: pointer;
            padding: 10px 15px;
            margin:0 33px;
            border-radius: 5px;
            background-color: #f5f5f5;
            border:2px solid #124143;
            font-size: 20px;
            transition:0.3s;
        }
        .hbtn:hover{
            background:#124143;
            color:white;
        }
        .heplogin,
        .huser {
            color: white;
        }

        .links-items {
            padding: 15px;
            font-size: 25px;
            color: white;
        }

        .hc2 {
            padding-top: 10vh;
            /* position:static; */
        }

        .hc2 img {
            width: 100%;
            height: 45vh;
        }

        .hc3 {
            display:flex;
            /* height: 45vh; */
            background-color: #124143;
            border-radius: 10px 10px 0 0;
            flex-direction:column;
            flex-wrap:wrap;
            overflow:hidden;
        }

        .hc3b1 {
            display: flex;
            text-align: center;
            color: #f5f5f5;
            font-size: 20px;
            padding:0 40px;
        }
        .hc3b1p1{
            width: 25%;
            padding-top: 20px;
            width:100%;
        }
        .p1ctent{
            font-size: 18px;
            padding: 35px;
            text-align: justify;
        }
        .hc3b1p1-list{
            padding:10px 0 10px 90px;
            list-style:none;
            text-align:left;
        }
        .p1head{
            font-size:30px;
        }
        .link-item{
            padding: 10px;
            font-size: 25px;
            color: white;
            text-decoration:none;
        }
        .hcopyright{
            font-size: 25px;
            text-align: center;
            width: 100%;
            padding:10px;
        }
        .hc4,.hc5{
            padding:0px 0 20px 0;
            display:flex;
            /* width:80%; */
            justify-content:center;
            /* border:2px solid black; */
        }
        .hc4box1{
            width:20%;
            padding:20px;
        }
        .hc4box2{
            display:flex;
            flex-direction:column;
            width:60%;
        }
        .hc4box1 img{
            height:300px;
            width:300px;
        }
        .hc4box2heading{
            font-size:40px;
            padding:30px;
            /* font-weight:500; */
        }
        .hc4box2boxes{
            justify-content: flex-start;
            display:flex;
            padding:0 30px;
        }
        .hstatus{
            padding:10px;
            margin:20px;
            display: flex;
            border: 1px solid black;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height:140px;
            width:140px;
            border-radius:50%;
        }
        .hstatus-icon img{
            height:60px;
            width:60px;
        }
        .hstatus-title{
            font-size:25px;
        }
        .hstatus-number{
            font-weight:bold;
            font-size:25px;
        }
        .hstatus-number,.hstatus-title,.hstatus-icon{
            padding-bottom:10px;
        }
        .hc5box1{
            width:22%;
            padding:20px 0;
            background-color:#124143;
            border-radius:0 20px 20px 0;
        }
        .hc5box2{
            width:60%;
        }
        .hc5heading{
            display:flex;
            flex-direction:column;
            font-size:40px;
            margin-bottom:35px;
            padding:0 33px;
        }
        .ptitle{
            font-size:30px;
        }
        
        .hc5heading > input{
            width: 100%;
  resize: none;
  padding: 5px 0;
  font-size: 25px;
  font-weight: 300;
  color: #333;
  border: none;
  outline: none;
  border-bottom: 1px solid #777;
  font-family: "PT Serif", serif;
        }
        .hc5heading > textarea{
            width: 100%;
  resize: none;
  padding: 5px;
  font-size: 18px;
  font-weight: 300;
  color: #333;
  outline: none;
  height: 120px;
  border: 1px solid #777;
        }
        .hc5content{
            padding:0 33px;
            font-size:25px;
        }
        .hc5btn1{
            /* background-color:black; */
            padding:10px 0;
            display:flex;
            justify-content:center;
        }
        .hc5hbtn{
            width:250px;
            cursor: pointer;
            padding: 10px 15px;
            border-radius: 5px;
            background-color: #f5f5f5;
            font-size: 20px;
        }
    </style>
    <div class="hc">
        <div class="hcb1">
            <img src="./images/logo.png" alt="">
        </div>
        <div class="hcb2">
            <ul class="hnavbar">
                <li class="hnavbarlink1"><a href="#">Home</a></li>
                <li class="hnavbarlink1"><a href="#">About Us</a></li>
                <li class="hnavbarlink1"><a href="#">Jobs</a></li>
                <li class="hnavbarlink1"><a href="#">Blog</a></li>
                <li class="hnavbarlink1"><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="hcb3">
            <div class="hlogin">
                <a href="https://www.instagram.com" class="fa fa-bell links-items" target="_blank"></a>
            </div>
            <div class="huser">
                <a href="https://www.instagram.com" class="fa fa-user links-items" target="_blank"></a>
            </div>
        </div>
    </div>
    <div class="hc2">
        <img src="./images/findinghelper.jpg" alt="">
    </div>
    <div class="hc4">
        <div class="hc4box1">
            <img src="./images/facebook.png" alt="">
        </div>
        <div class="hc4box2">
            <div class="hc4box2heading">
                Post A Job
            </div>
            <div class="hc4box2boxes">
                <div class="hstatus">
                    <div class="hstatus-icon fa fa-bag">
                    </div>
                    <div class="hstatus-title">
                        <p>Basic Details</p>
                    </div>
                    <div class="hstatus-number">
                        <p>Step 1:</p>
                    </div>
                </div>
                <div class="hstatus">
                    <div class="hstatus-icon fa fa-bag">
                    </div>
                    <div class="hstatus-title">
                        <p>Review</p>
                    </div>
                    <div class="hstatus-number">
                        <p>Step 2:</p>
                    </div>
                </div>
                <div class="hstatus">
                    <div class="hstatus-icon fa fa-bag">
                    </div>
                    <div class="hstatus-title">
                        <p>Confirm</p>
                    </div>
                    <div class="hstatus-number">
                        <p>Step 3:</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hc5">
        <div class="hc5box1">
            <div class="hc5btn1">
            <button class="hc5hbtn active">
                    Dashboard
                </button>
            </div>
            <div class="hc5btn1">
            <button class="hc5hbtn active">
                    Edit Profile
                </button>
            </div>
            <div class="hc5btn1">
            <button class="hc5hbtn active">
                    All Applicants
                </button>
            </div>
            <div class="hc5btn1">
            <button class="hc5hbtn active">
                    Manage Jobs
                </button>
            </div>
            <div class="hc5btn1">
            <button class="hc5hbtn active">
                    Post a job
                </button>
            </div>
            <div class="hc5btn1">
            <button class="hc5hbtn active">
                    Saved Candidates
                </button>
            </div>
            <div class="hc5btn1">
            <button class="hc5hbtn active">
                    Change Password
                </button>
            </div>
            <div class="hc5btn1">
            <button class="hc5hbtn active">
                    Delete Account
                </button>
            </div>
            <div class="hc5btn1">
            <button class="hc5hbtn active">
                    Logout
                </button>
            </div>
        </div>
        <div class="hc5box2">
            <form>
            <div class="hc5heading">
                <label class="ptitle">Resume Title</label>
                <input name="title"></input>
            </div>
            <div class="hc5heading">
                <label class="ptitle">Educational Details</label>
                <textarea name="desc"></textarea>
            </div>
            <div class="hc5heading">
                <label class="ptitle">Skills </label>
                <input name="skills"></input>
            </div>
        <!-- <div class="twoinone">
            <div class="hc5heading">
                <label class="ptitle">Salary</label>
                <input name="salary"></input>
            </div>
            <div class="hc5heading">
                <label class="ptitle">Job Type</label>
                <input name="Job-type"></input>
            </div>
        </div>   -->
        <div class="hc5heading">
                <label class="ptitle">Relevant Links</label>
                <textarea name="desc"></textarea>
            </div>
            <div class="hc5heading">
                <label class="ptitle">Experience</label>
                <textarea name="desc"></textarea>
            </div>
        <div class="hpaj">
                <button class="hbtn">
                    Post a Resume
                </button>
            </div>
            </form>
        </div>
    </div>
    <div class="hc3">
        <div class="hc3b1">
            <div class="hc3b1p1">
                <div class="image">
                    <img src="./images/logo.png" alt="">
                </div>
                <div class="p1ctent">
                    Lorem ipsum dolor sit, amet csectetur adipisicing elit. Ex veniam impedit repellendus neque magni accusamus beatae cumque, natus nostrum molestias quia facere atque tenetur! Corrupti inventore recusandae quam mollitia illo!
                </div>
            </div>
            <div class="hc3b1p1">
                <div class="p1head">
                    About Us
                </div>
                <ul class="hc3b1p1">
                    <li class="hc3b1p1-list">Our Team</li>
                    <li class="hc3b1p1-list">Our Mission</li>
                    <li class="hc3b1p1-list">Our Vision</li>
                </ul>
            </div>
            <div class="hc3b1p1">
                <div class="p1head">
                    Contact Us
                </div>
                <ul class="hc3b1p1">
                    <li class="hc3b1p1-list">Our Team</li>
                    <li class="hc3b1p1-list">Our Mission</li>
                    <li class="hc3b1p1-list">Our Vision</li>
                </ul>
            </div>
            <div class="hc3b1p1">
                <div class="p1head">
                    Follow us on
                </div>
                <ul class="hc3b1p1">
                <a href="#" class="fa fa-instagram link-item"></a>
                <a href="#" class="fa fa-facebook link-item"></a>
                <a href="#" class="fa fa-twitter link-item"></a>
                <a href="#" class="fa fa-linkedin link-item"></a>
                </ul>
            </div>
        </div>
        <div class="hc3b1">
            <div class="fa fa-copyright hcopyright">All rights reserved</div>
        </div>
    </div>
</body>

</html>