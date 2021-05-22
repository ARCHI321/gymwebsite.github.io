<?php
include("header.php");
?>
    <div class="container">
        <h1>Join The best gym of Kolkata</h1>
        <form action="submit.php">
            <div class="form-group">
                <input type="text name="" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <input type="text name="" placeholder="Enter your age">
            </div>
            <div class="form-group">
                <input type="text name="" placeholder="Enter your gender">
            </div>
            <div class="form-group">
                <input type="text name="" placeholder="Enter your locality">
            </div>
            <button class="btn"><a href="submit.php">Submit</a></button>
        </form>
    </div>

 <?php
	include("footer.php");
	?>