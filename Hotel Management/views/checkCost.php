<head>
    <meta charset="utf-8" />
    <title>Semantic UI CDN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
</head>
<style type="text/css">
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
      Cash Memo
  </h4>

  <table class="ui red table">
    <thead>
      <tr>
        <th colspan="4"><center>Detailed Breakage of the stay</center></th>
      </tr>
    </thead>
    
    <tbody>
      <tr>
        <td><b>Customer ID:</b></td>
        <td><?=$data['customerId']?></td>
        <td><b>Name:</b></td>
        <td><?=$data['name']?></td>
      </tr>
      
      <tr>
        <td><b>Phone:</b></td>
        <td><?=$data['phone']?></td>
        <td><b>Email:</b></td>
        <td><?=$data['email']?></td>
      </tr>

      <tr>
        <td><b>Adhar:</b></td>
        <td><?=$data['adhar']?></td>
        <td><b>Cost:</b></td>
        <td><?=$data['cost']?></td>
      </tr>
      <tr>
        <td colspan="3">
          <a href="../../booking">
            <button class="ui blue left labeled icon button">
              <i class="left arrow icon"></i>Back
            </button>
          </a>
        </td>

        <td colspan="1">
          <a href="../../booking/checkOutARomm/<?=$data['roomId']?>">
            <button class="ui green right labeled icon button">
              <i class="right arrow icon"></i>Check OUT
            </button>
          </a>
        </td>

      </tr>

    </tbody>
  </table>
</body>
