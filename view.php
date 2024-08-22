<!DOCTYPE html>
<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head> 
  <body>
    <div class="container mt-5 w-25 bg-warning p-2 rounded">
      <h1>Form - Field dependency</h1>
      <form action="" method="post" class="form-group"> 
        <label for="state">State</label>
        <select name="state" onchange="showCustomer(this.value)" class="form-control">
          <option value="">--Select state--</option>
          <option value="0">West Bengal</option>
          <option value="1">Gujarat</option>
          <option value="2">Maharashtra</option>
        </select>
        <div id="txtHint">
          <!-- <label for="city">City</label>
          <select name="city" class="form-control">
            <option value="">Select city:</option>
          </select> -->
        </div>
        <div class="text-center mt-2">
          <input type="submit" value="Save" class="btn btn-primary">
        </div>
      </form>
     
    </div>
    

    <script>
    function showCustomer(str) {
      var xhttp;    
      if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
      }
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "getData.php?q="+str, true);
      xhttp.send();
    }
    </script>

  </body>
</html>