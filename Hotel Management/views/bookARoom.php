<head>
    <meta charset="utf-8" />
    <title>Semantic UI CDN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
</head>
<style type="text/css">
	table,td
	{
		border: 			1px solid black;
	}
	table
	{
		margin-top: 		10%;
		margin-left: 		30%;
	}
	td
	{
		text-align: 		center;
	}

  body
  {
    width:                70%;
    margin:               4em auto;
    text-align:           justify;
    height:               100vh;
    background-color:     #ffffff;
  }
</style>

<body>
  <h4 class="ui horizontal divider header">
    <i class="bar chart icon"></i>
      Booking Menu
  </h4>
  <div class="ui attached message">
    <div class="header">
      Book a Room: <?=$data?>
    </div>
  </div>

  <br>
  <form class="ui form" action="../../booking/insertRoomValues/<?=$data?>" method="post">

    <div class="field">
      <label>First Name</label>
      <input type="text"  name="name" placeholder="Enter the name" required>
    </div>
    
    <div class="field">
      <label>Phone Number</label>
      <input type="text" name="phone" placeholder="Enter the Phone Number" required>
    </div>

    <div class="field">
      <label>Email ID</label>
      <input type="email" name="email" placeholder="Enter the Email ID" required>
    </div>
    
    <div class="field">
      <label>Adhar Number</label>
      <input type="text" name="adhar" placeholder="Enter the Adhar Number" required>
    </div>

    <input class="ui button" type="submit"  name="submit"   value="SUBMIT"/>
    <input class="ui button" type="reset"   name="reset"    value="RESET"/>
  </form>
  
  <a href="../../">
    <button class="ui left labeled icon button">
      <i class="left arrow icon"></i>Back
    </button>
  </a>

</body>
