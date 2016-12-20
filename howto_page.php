<?php session_start()?>
<!DOCTYPE html>
<html>

<head>
    <?php include_once('Includes/head.php');?>
</head>

<body>
    <?php include_once('Includes/menu.php');?>
        
    <div id="main">
        
        <h1>How to Use the Application</h1>
        
        <h2>1. On Startup:</h2>
        <p>On first startup the user will be brought to the home window. In order to select sites the user should press 'Open List' button.</p>
        <img src="img/figure1_1.png" alt="Figure 1.1">
        
        <h2>2. Viewing Sites:</h2>
        <p>Once the user has pressed 'Open List' they will be taken to the list window and provided with a search box, a long list of accessible site names and a 'Favourites' checkbox.</p>
        <img src="img/figure2_1.png" alt="Figure 2.1">
        
        <h2>3. Selecting Favourites:</h2>
        <p>In order for the user to select a favourite they must check the box next to the station they desire. The selected station will be placed into the current list of favourites and become accessible from the home window.</p>
        <img src="img/figure3_1.png" alt="Figure 3.1">
        <img src="img/figure3_2.png" alt="Figure 3.2">
        
        <h2>4. Viewing Information:</h2>
        <p>In order to view site data the user must return to the home screen and press the button named after the desired station, this will open the associated data window which contains both a table and chart containing data.</p>
        <img src="img/figure4_1.png" alt="Figure 4.1">
        <img src="img/figure4_2.png" alt="Figure 4.2">
        
        <h2>5. Reading Site Data:</h2>
        <p>The tables show</p> 
        <img src="img/Figure5_1.png" alt="Figure 5.1">
        <img src="img/Figure5_2.png" alt="Figure 5.2">
        
        <h2>6. Reading Charts:</h2>
        <p>The chart in the data window displays the minimum, maximum, 9:00am and 3:00pm temperatures over the dates that the program has recorded data. The vertical axis represents the temperature in degrees celsius and the horizontal axis represents the dates.</p>
        <img src="img/Figure6_1.png" alt="Figure 6.1">
        
        <h2>7. Removing Favourites:</h2>
        <p>There are two ways to do this:</p>
        <p>Firstly the user can remove favourites directly from the home screen by home window by pressing the button marked 'X' to the right of the station which they would like to remove.</p>
        <img src="img/Figure7_1.png" alt="Figure 7.1">
        <img src="img/Figure7_2.png" alt="Figure 7.2">
        <p>Secondly the user can open up the list window, navigate to the site that they wish to remove and uncheck the box to the right of it.</p>
        <img src="img/Figure7_3.png" alt="Figure 7.3">
        <img src="img/Figure7_4.png" alt="Figure 7.4">
        
        <h2>8. Saving Favourites:</h2>
        <p>This is done automatically every time a change to the favourites list is made.</p>
        
        <h2>9. Closing the Windows/Program:</h2>
        <p>The list and data windows can be closed at any time by pressing the 'X' in the top corner of the window, furthermore they will appear in the same position when they are reopened. Closing all windows including the home screen will exit the program.</p>
    
    </div>
        
</body>

</html>