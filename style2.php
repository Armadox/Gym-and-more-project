<?php 
    header('Content-type: text/css; charset:UTF-8;');
    $nav_text_color="white";
    $nav_text_active_color="white";
?>

#logo
{
    
    display:block;
    padding: 0px;
    width:15%;
    height: 90%;
    margin-left: auto;
    margin-right: auto;
    
}

.navbar-dark .navbar-nav .nav-link.active
{
    color: <?php echo $nav_text_active_color; ?>;
    font-size:larger;
    font-weight:bold;
}

.navbar-dark .navbar-nav .nav-link
{
    color: <?php echo $nav_text_color; ?>;
    font-weight: 600;
}


footer
{
    background-color: rgb(226, 226, 226);
    color: rgb(0, 0, 0);
}

.btn-customCanvas
{
    color: whitesmoke;
    background-color: rgba(0, 0, 0, 0.568);
    border-color: rgba(61, 61, 61, 0.562);
    border-width: 5px;
}