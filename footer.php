<footer>
  <div class="container">
      <div class="footer-box">
	  <?php 
	        date_default_timezone_set('Asia/Kolkata');
	           $date = date("Y-m-d");
               $newDate = date("d-m-Y", strtotime($date));
      ?>			   
               
        <p>Created By Abhishek Bhat &copy; <?php echo date("Y"); ?> </p>
		</div>
  </div>
</footer>
</body>
</html>