<?php



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orisaverse | Feed </title>
    <!-- mobile css theme begins -->
    <link rel="stylesheet" href="themes/mobileDefault.css">
    <!-- mobile css theme ends -->
     <!-- web css theme begins -->
    <link rel="stylesheet" href="themes/webDefault.css">
     <!-- web css theme ends -->
      <!-- fonts -->
    <link rel="stylesheet" href="icons/css/all.css">
    <link rel="stylesheet" href="icons/css/all.min.css">
   
</head>
<body>
    <!-- mobile UI begins -->
    <div id="mobileContainer">
        <!-- top bar session begins -->
         <?php
            include('navigations/mtopnav.php');
         ?>
        <!-- top bar session ends -->
        <?php
          include('mobile-index.php');
        ?>
         <!-- footer session begins -->
        <?php
            include('navigations/mfooternav.php');
        ?>
         <!-- footer session ends -->
       
    </div>
    <!-- mobile UI ends -->
     <!-- web UI design begins -->
    <div id="webversion">
        <!-- left bar begins -->
        <session class="wleftbar">
            <!-- logo session bgins -->
                <div class="wlogobar">
                    <a href="index.php"><img src="logos/default.png" alt=""></a>
                    <button class="btn-hide" onclick="optionopen()"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                </div>
                
            <!-- logo session ends -->
             <!-- searchbar begins -->
                <div class="wsearchbar">
                    <form action="" method="POST">
                        <i class="fa fa-search"></i>
                        <input type="text" name="search" placeholder="search">
                    </form>
                </div>
             <!-- searchbar ends -->
              <!-- menu bar begins -->
               <?php
                  include('web-sidebar.php');
               ?>
              <!-- menu bar ends -->

        </session>
        <!-- left bar ends -->
         <!-- main bar begins -->
        <session class="wmainbar">
          <!-- web post session begins -->
            <?php
              include('web-post.php');
            ?>
          <!-- Web post session ends -->
        </session>
        <!-- main bar ends -->
         <!-- right bar begins -->
        <session class="wrightbar">
          <div class="wrightbar-nav">
            <!-- Navigation begins -->
             <div onclick="dropdown()" id="accnt">
              <!-- foptawesome begins -->
                <i class="fa-regular fa-user"></i>
                <!-- fontawesome ends -->
                <!-- text begnins -->
                  <p>Hi, Henry</p>
                 <!-- text ends -->
                  <!-- arrow-down begins -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293z"/>
                  </svg>
                  <!-- arrow-down ends -->
             </div>
             <div id="help" onclick="help()">
                <!-- fontawesome begins -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-question" viewBox="0 0 16 16">
                    <path d="M8.05 9.6c.336 0 .504-.24.554-.627.04-.534.198-.815.847-1.26.673-.475 1.049-1.09 1.049-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.7 1.7 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745"/>
                    <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911z"/>
                    <path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0"/>
                  </svg>
                <!-- fontawesome ends -->
                 <!-- text begnins -->
                  <p>Help</p>
                 <!-- text ends -->
                  <!-- arrow-down begins -->
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293z"/>
                  </svg>
                  <!-- arrow-down ends -->
             </div>
             <div>
              <!-- foptawesome begins -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                </svg>
                <span class="cart-highlight">
                  50
                </span>
              <!-- fontawesome ends -->
               <!-- text begnins -->
                <p>Cart</p>
                 <!-- text ends -->
                  <!-- arrow-down begins -->
                     <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M108l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293z"/>
                    </svg>
                  <!-- arrow-down ends -->

             </div>

            <!-- Navigation ends -->
          </div>
          <div class="wrightbarmain">
            <!-- Drop down session begins-->
            <div class="web-account-drop-down" id="dropdown">
              <span><button class="btn-hide btn-cancel" onclick="dropdownclose()"><i class="fa-solid fa-x"></i></button></span>
              <div class="web-account-drop-down-main">
                <br>
                <!-- Menu begins -->
                <div class="web-account-drop-down-list-box">
                 <div class="web-account-drop-down-list-box-icon">
                    <a href=""><i class="fa-regular fa-user"></i></a>
                 </div>
                 <div class="web-account-drop-down-list-box-main">
                    <a href="">My Account</a>
                 </div>
                </div>
                <!-- menu Ends -->
                 <!-- Menu begins -->
                <div class="web-account-drop-down-list-box">
                 <div class="web-account-drop-down-list-box-icon">
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                      </svg>
                    </a>
                 </div>
                 <div class="web-account-drop-down-list-box-main">
                    <a href="">Orders</a>
                 </div>
                </div>
                <!-- menu Ends -->
                 <!-- Menu begins -->
                <div class="web-account-drop-down-list-box">
                  <div class="web-account-drop-down-list-box-icon">
                    <a href=""><i class="fa fa-inbox"></i></a>
                  </div>
                  <div class="web-account-drop-down-list-box-main">
                    <a href="">Inbox</a>
                  </div>
                </div>
                <!-- menu Ends -->
                 <!-- Menu begins -->
               
                <!-- menu Ends -->
              
                 <br>
                  <!-- Menu begins -->
                <div class="web-account-drop-down-list-box">
                 <div class="web-account-drop-down-list-box-icon">
                    <a href=""><i class="fa fa-power-off"></i></a>
                 </div>
                 <div class="web-account-drop-down-list-box-main">
                    <a href="">Logout</a>
                 </div>
                </div>
                <!-- menu Ends -->
              </div>
            </div>
            <div class="web-help-drop-down" id="helpmain">
              <span><button class="btn-hide btn-cancel" onclick="helpclose()"><i class="fa-solid fa-x"></i></button></span>
              <div class="web-help-drop-down-main">
                <div><a href="">Help Center</a></div>
                <div><a href="">Place an Order</a></div>
                <div><a href="">Wallet Settings</a></div>
                <div><a href="">Track an Order</a></div>
                <div><a href="">Cancel an Order</a></div>
                <div><a href="">Returns & Refunds</a></div>
                <div><a href="">Live Chat</a></div>
              </div>
            </div>
          <!-- Drop down session ends -->
          </div>
          
        </session>
        <!-- right bar ends -->
    </div>
    <!-- web UI design ends -->


     <script src="plugins/sidebar.js"></script>
     <script src="plugins/autoplay.js"></script>
</body>

</html>

<!-- 08134876011 -->