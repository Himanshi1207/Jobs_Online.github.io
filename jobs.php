<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Find Jobs Online</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/styles_home.css" />
        <link rel="stylesheet" href="css/style-jobs.css" />
    </head>
    <body>
        <style>
            *{
    box-sizing: border-box;
}

.icon {
    color: white;
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
        }

        .hcb1 {
            width: 25%;
        }

        .hcb1 img {
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
            padding:0 10px;
            margin: 13px;
        }
        .hnavbarlink1 a:hover {
            background-color: rgb(255,255,255,0.1);
            border-radius: 5px;
            transition: 0.3s;
            cursor: pointer;
        }

        .hcb3 {
            width: 25%;
            justify-content: center;
            align-items: center;
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
            color: rgb(240,84,84);
            font-size: 25px;
            text-align: center;
            width: 100%;
            padding:10px;
        }
        
.input-icons{
    display: inline-block;
    padding: 2% 0%;
}

#search-input-box{
    border-radius: 5%;
    border: none;
    padding: 7% 0%;
}

.search-box{
    padding: 10%;
    background-color: rgb(18,65,67);
}

.filters-box, .recent{
    display: inline-block;
    width: 25%;
    margin: auto;
}

h3{
    padding: 4%;
}

.heading-div{
    font-size: larger;
    font-weight: bolder;
    padding-top: 20%;
    padding-bottom: 20%;
}

.greyC{
    color: gray;
    padding-top: 2%;
}

.results{
    display: inline-block;
    width: 40%;
    margin: auto;
}

.filters-box div{
    padding: 1%;
}

@media (max-width: 483px) {
    .filters-box{
        display: none;
    }

    .recent{
        display: none;
    }

    .results{
        width: 100%;
    }
}

@media only screen and (min-width: 484px) and (max-width: 767px){
    .recent{
        display: none;
    }

    .results{
        width: 70%;
    }
}

@media only screen and (min-width: 768px) and (max-width: 1101px){
}

@media only screen and (min-width: 1102px) and (max-width: 1336px){
}

@media only screen and (min-width: 1337px){ 
}
            </style>
        <!-- <nav>
            <ul id="navbar-list">
                <li id="logo">Logo</li>
                <span>
                    <li>Home</li>
                    <li>About</li>
                    <li>Jobs</li>
                    <li>Contact Us</li>
                </span>
                <li id="account-icon"><i class="fa fa-user icon"></i></li>
            </ul>
        </nav> -->
        <div class="hc">
        <div class="hcb1">
            <img src="./images/OneShotJob.svg" alt="">
        </div>
        <div class="hcb2">
            <ul class="hnavbar">
                <li class="hnavbarlink1"><a href="index.html">Home</a></li>
                <li class="hnavbarlink1"><a href="#">About Us</a></li>
                <li class="hnavbarlink1"><a href="jobs.php">Jobs</a></li>
                <li class="hnavbarlink1"><a href="#">Blog</a></li>
                <li class="hnavbarlink1"><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="hcb3">
            <div class="huser">
                <a href="#" class="fa fa-user links-items" ></a>
            </div>
        </div>
    </div>
        <div class="search-box">
            <form>
                <div class="input-icons">
                    <i class="fa fa-search icon"></i>
                    <input type="text" id="SearchbyTitleorKeyword" name="SearchbyTitleorKeyword" value="Search by Title or Keyword" onfocus="this.value = ''" onblur="this.value = 'Search by Title or Keyword'">
                </div>
                <div class="input-icons">
                    <i class="fa fa-location-arrow icon"></i>
                    <input type="text" id="SearchLocation" name="SearchLocation" value="Search Location" onfocus="this.value = ''" onblur="this.value = 'Search Location'">
                </div>
                <div class="input-icons">
                    <input type="submit" id="search-input-box" value="Search">
                </div>
            </form>
        </div>

        <div style="display: flex;">
            <div class="filters-box">
                <div class="heading-div">Filters</div>
                <form>
                    <input type="radio" id="filters" name="filters" value="All Offers"><label for="AllOffers"></label>All Offers</label><br>
                    <input type="radio" id="filters" name="filters" value="Most Relevant"><label for="Most Relevant">Most Relevant</label><br>
                    <input type="radio" id="filters" name="filters" value="Recommend"><label for="Recommend">Recommend</label><br>
                    <input type="radio" id="filters" name="filters" value="Most Recent"><label for="Most Recent">Most Recent</label><br>
                </form>
                <div class="heading-div">Location</div>
                <form>
                    <input list="locations">
                    <datalist id="locations">
                        <option value="Delhi">
                        <option value="Bangalore">
                        <option value="Mumbai">
                        <option value="Chennai">
                        <option value="Hyderabad">
                    </datalist>
                </form>
                <div class="heading-div">Type of Work</div>
                <form>
                    <input list="workType">
                    <datalist id="workType">
                        <option value="Delhi">
                        <option value="Bangalore">
                        <option value="Mumbai">
                        <option value="Chennai">
                        <option value="Hyderabad">
                    </datalist>
                </form>
                <div class="heading-div">Industries</div>
                <form>
                    <input list="industries">
                    <datalist id="industries">
                        <option value="Delhi">
                        <option value="Bangalore">
                        <option value="Mumbai">
                        <option value="Chennai">
                        <option value="Hyderabad">
                    </datalist>
                </form>
            </div>
            <div class="results" style="background-color: rgb(228, 228, 228);">
                <div style="text-align: left; margin: 1%;">
                    <img>
                    <h2 style="text-align: left;">XyZ Factory</h3>
                    <h1 style="text-align: left;">UI/UX Designer</h1>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime debitis repellat minus voluptatum aut nostrum autem adipisci in libero ducimus quos voluptates nihil laborum doloremque corporis, dignissimos exercitationem ad expedita!
                </div>
                <hr style="background-color: gray; width: 80%; height: 1%;">
                <div style="text-align: left; margin: 1%;">
                    <img>
                    <h2 style="text-align: left;">XyZ Factory</h3>
                    <h1 style="text-align: left;">UI/UX Designer</h1>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime debitis repellat minus voluptatum aut nostrum autem adipisci in libero ducimus quos voluptates nihil laborum doloremque corporis, dignissimos exercitationem ad expedita!
                </div>
                <hr style="background-color: gray; width: 80%; height: 1%;">
                <div style="text-align: left; margin: 1%;">
                    <img>
                    <h2 style="text-align: left;">XyZ Factory</h3>
                    <h1 style="text-align: left;">UI/UX Designer</h1>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime debitis repellat minus voluptatum aut nostrum autem adipisci in libero ducimus quos voluptates nihil laborum doloremque corporis, dignissimos exercitationem ad expedita!
                </div>
                <hr style="background-color: gray; width: 80%; height: 1%;">
                <div style="text-align: left; margin: 1%;">
                    <img>
                    <h2 style="text-align: left;">XyZ Factory</h3>
                    <h1 style="text-align: left;">UI/UX Designer</h1>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime debitis repellat minus voluptatum aut nostrum autem adipisci in libero ducimus quos voluptates nihil laborum doloremque corporis, dignissimos exercitationem ad expedita!
                </div>
                <hr style="background-color: gray; width: 80%; height: 1%;">
            </div>
            <div class="recent">
                <h3>Recent View</h3>
                <div class="greyC">Template Factory</div>
                UI/UX Designer
                <div class="greyC">Agency Analytics</div>
                Frontend Developer
                <div class="greyC">CleverTech</div>
                Senior Staff Reach Developer
                <div class="greyC">Practice</div>
                UI/UX Designer
            </div>
        </div>
        <div class="hc3">
        <div class="hc3b1">
            <div class="hc3b1p1">
                <div class="image">
                    <img src="./images/OneShotJob.svg" alt="">
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
        <!-- <footer>
            <ul class="footer-list">
                <li class="table-logo">Logo</li>
            </ul>
            <ul class="footer-list">
                <li class="ul-heading">About Us</li>
                <li>Our Mission</li>
                <li>Our Vision</li>
                <li>Out Team</li>
            </ul>
            <ul class="footer-list">
                <li class="ul-heading">Contact Us</li>
                <li><a href="mailto:customer@maidonline.com">Contact email: customer@maidonline.com</a></li>
                <li>Contact No.: 180052413600</li>
            </ul>
            <ul class="footer-list">
                <li class="ul-heading">Connect with us!</li>
                <li>Link1</li>
                <li>Link2</li>
                <li>Link3</li>
            </ul>
            <div style="text-align: center; display: block; color: rgb(240,84,84); padding: 0.2%;">&copy; All rights reserved</div>
        </footer> -->
    </body>
</html>