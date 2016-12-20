<?php session_start()?>
<!DOCTYPE html>
<html>

<head>
    <?php include_once('Includes/head.php');?>
</head>

<body>
    <?php include_once('Includes/menu.php');?>
        
    <div id="main">
        
        <h1>Release Notes:</h1>
        
        <h2>Version 0.9.0:</h2>
        <p>- Current temp not showing on favourite buttons.</p>
        <p>- Some sites that no longer have data available on BOM are still listed on BOM and therefore are automatically added to the sites list window. If the user attempts to open the station data window nothing will happen.</p>
        <p>- CSS not functioning on all devices.</p>
        <p>- Closing main window does not close any open data windows or the site window.</p>
        <p>- Some sites have different fields. Handling this is incomplete and undefined behaviour such as no chart, no data table, exceptions may occur.</p>
        <p>- The number of data points displayed on the chart is restricted to 30 as scrolling of the chart window has not been implemented. Note that all data should be displayed in the table however.</p>
        <p>- If favourites are deleted, the relevant data file is not deleted from disk. This could be see as a resource leak.</p>
        <p>- Site list is only updated if the sites.txt file is missing.</p>
        <p>- 'search' text in the search field does not automatically clear when the user attempts to perform a search.</p>
        <p>- Long delay on first run while retrieving site list with no feedback advising the user what is happening.</p>
    
        <h2>Version 0.9.1 (PLANNED):</h2>
        <p>- Return temperature indicators to favourite buttons on the home screen.</p>
        
        <h2>Version 0.9.2 (PLANNED):</h2>
        <p>- Achieve full CSS functionality.</p>
        
    </div>
        
</body>

</html>