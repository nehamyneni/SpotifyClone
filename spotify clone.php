<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Dashboard Design | By Code Info</title>
<link rel="stylesheet" href="style.css" />
<!-- Font Awesome Cdn link -->
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
/>
</head>
<body>
<div class="sidebar">
<div class="logo"></div>
<ul class="menu">
    <li class="active">
        <a href="#">
            <i class="fas fa-tachometer-alt"></i>
            <span> All</span>
        </a>
    </li>
    <li>
        <a href="#">
            <i class="fas fa-user"></i>
            <span> Podcasts</span>
        </a>
    </li>
    <li>
        <a href="#">
            <i class="fas fa-question-circle"></i>
            <span> Wrapped</span>
        </a>
    </li>
    <li>
        <a href="#">
            <i class="fas fa-cog"></i>
            <span> Settings</span>
        </a>
    </li>
    <li class="logout">
        <a href="#">
            <i class="fas fa-sign-out-alt"></i>
            <span> Logout</span>
        </a>
    </li>
</ul>
</div>

<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <span><img src="http://tous-logos.com/wp-content/uploads/2018/05/Logo-Spotify.png"><h1>SPOTIFY</h1></span>
            <h2>Listen to your Favourite sons</h2>
</div>
<div class="user--info">
    <div class="search--box">
        <i class="fa-solid fa-search"></i>
        <input type="text" placeholder="Search" />
    </div>
    <img src="" alt="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  position: relative;
  width: 100%;
  max-width: 400px;
}

.container img {
  width: 100%;
  height: auto;
}

.container .btn {
  width: 200px;
  height: 250px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: transparent;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

</style>
</head>
<body>

<h2>Sahoo</h2>

<div class="container">
  <img src="http://onlookersmedia.in/wp-content/uploads/2019/05/new-action-packed-poster-of-prabhas-starrer-saaho.jpg" alt="Snow" style="width:100%">
  <button class="btn">Button</button>
  <img id ="bannerImage"/><br/>
  <button onclick="changeImage('https://c.saavncdn.com/821/Bad-Boy-From-Saaho--Hindi-2019-20190819075014-500x500.jpg')">Badboy Song</button>
<button onclick="changeImage('https://akm-img-a-in.tosshub.com/indiatoday/images/story/201908/saaho-newsong.jpeg?VersionId=RsJv_QxpkqX9GTbI9iNnikTEqkRPBQdY')">EnniSoni</button>
<button onclick="changeImage('https://akm-img-a-in.tosshub.com/businesstoday/images/story/201908/saaho_660_082919070044.jpg?size=948:533')">Sayyan Psycho</button>
<button onclick="changeImage('')>Quantity</button>
<script>


function changeImage(fileName)
{
let img = document.querySelector("#bannerImage");
img.setAttribute("src", fileName);
}

</script>
</div>
</div>
</div>
</body>
</html>