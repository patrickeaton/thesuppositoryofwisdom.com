<?php
 		$conn = NULL;
 		$quote;
 		$image;

        try{
			
            $conn = new PDO("mysql:host=localhost;dbname=suppository;", "root", "");

			$stmt = $conn->prepare('SELECT * FROM quotes WHERE approved = "y" ORDER BY RAND() LIMIT 1');
			if(isset($_GET['qid'])){
				$stmt = $conn->prepare('SELECT * FROM quotes WHERE ID = '.$_GET['qid']);
			}
            
            $stmt->execute();
            $quote  =  $stmt->fetch();
			
           	$stmt = $conn->prepare('SELECT * FROM images ORDER BY RAND() LIMIT 1');
			if(isset($_GET['iid'])){
				$stmt = $conn->prepare('SELECT * FROM images WHERE ID = '.$_GET['iid']);
			}
            $stmt->execute();
            $image  =  $stmt->fetch();

            } catch(PDOException $e){
 				$quote = array('QUOTE'=> 'No one. However smart, however well-educated, however experienced is the suppository of all wisdom', 'REF' => 'http://edition.cnn.com/2013/08/12/world/asia/australia-abbott-suppository-gaffe/');
 				$image = array('HREF' => 'resources/images/abbott1.jpg', 'POSITION' => '0 0');
            }          
?>
<!DOCTYPE html>
<html>
  <head>
    <link href='http://fonts.googleapis.com/css?family=News+Cycle' rel='stylesheet' type='text/css'>
    <link rel="image_src" type="image/jpeg" href="resources/images/abbott1.jpg" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" ></script>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	
	<script src="resources/jquery.prettySocial.js"></script>
	
	<link href='resources/style.css' rel='stylesheet' type='text/css'>
    <title>Tony Abbott: The suppository of all wisdom</title>
    <link rel="shortcut icon" type="image/ico" href="resources/favicon.ico" />
    <meta property="og:image" content="http://thesuppositoryofwisdom.com/resources/images/abbott1.jpg" />  
</head>
  <body>
  <div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<script type="text/javascript">
$(document).ready(function(){
    $("#add_form").submit(function(event) {
        event.preventDefault();
        var formData = $("#add_form").serialize();
		console.log(formData);
		
		if($("#quote").val() !== "" && $("#reference").val() !== ""){
			$.ajax({
				type: "POST",
				url: "submit.php",
				data: formData,
				success: function(data) {
					$('#myModal').modal('hide');
					$("#quote").val("");
					$("#reference").val("");
				}
			});
		}else{
			alert("Please make sure all fields are completed");
		}
    });
});
</script>
    <div class='main'>
      <div class= 'image' style="background-image: url(<?php echo $image['HREF'] ?>); background-position:<?php echo $image['POSITION'] ?>;"> </div>
      <div class='quotemark'>"</div>
	  <div class='quote'><?php echo $quote['QUOTE']; ?> <br/><br/>
	  <div class="links">
			<a href="#" data-type="twitter" data-url="http://thesuppositoryofwisdom.com?<?php echo "qid=".$quote['ID']."&iid=".$image['ID']; ?>" data-via = "TonyAbbottMHR" data-description="<?php echo $quote['QUOTE']; ?>" class="prettySocial fa fa-twitter"></a>
			<a href="#" data-type="facebook" data-url="http://thesuppositoryofwisdom.com?<?php echo "qid=".$quote['ID']."&iid=".$image['ID']; ?>" data-title="The Suppository of Wisdom" data-description="<?php echo $quote['QUOTE']; ?>" data-media="http://thesuppositoryofwisdom.com/resources/images/abbott1.jpg" class="prettySocial fa fa-facebook"></a>
			<a href="#" data-type="googleplus" data-url="http://thesuppositoryofwisdom.com?<?php echo "qid=".$quote['ID']."&iid=".$image['ID']; ?>" data-description="<?php echo $quote['QUOTE']; ?>" class="prettySocial fa fa-google-plus"></a>
		</div>
		  <a href='<?php echo $quote['REF']; ?>' target='blank' class='refer'>Reference</a>&nbsp;
		  <a href='http://thesuppositoryofwisdom.com?<?php echo "qid=".$quote['ID']."&iid=".$image['ID']; ?>' target='blank' class='refer'>Direct Link</a>&nbsp;
		  <div class="social-container">
		
		<script type="text/javascript" class="source">
			$('.prettySocial').prettySocial();
		</script>
	</div>
	  </div>
      <div class='quotemark'>"</div>
      <a href='http://thesuppositoryofwisdom.com' class='button'>More Wisdom</a>
	  <div style="text-align:center;margin-left: 275px;width: 200px;color:#ffffff">
	        <br/>
			<p>or</p>
			<a href="#myModal" role="button" data-toggle="modal" class="add_new">Submit New Wisdom</a>	  
    </div>
	</div>
	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1"role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog"  style="width:400px" >
    <form class="modal-content" id="add_form">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add New Quote</h4>
      </div>
      <div class="modal-body">
        <textarea placeholder="Quote" class="form-control" name="quote" id="quote" style="height:200px;"></textarea>
		<input type="text" placeholder="Reference" class="form-control" id="reference" name="reference" style="margin-top:20px;">
		<br/>
		<p><b>Note:</b> All quotes must be approved before they will appear, to be approved they must be accurate and have a reference.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="submit">Save changes</button>
      </div>
    </form>
  </div>
</div>
    <footer>
		<form style="display:inline;" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
			<input type="image" style="width:55px;margin-bottom:-3px;" src="https://www.paypalobjects.com/en_AU/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal — The safer, easier way to pay online.">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
		</form>
		<div class="fb-like" data-href="https://www.facebook.com/thesuppositoryofwisdom" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
</footer>
  </body>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51936221-1', 'thesuppositoryofwisdom.com');
  ga('send', 'pageview');

</script>

</html>
