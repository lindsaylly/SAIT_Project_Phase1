<!--
Author: Lindsay Li
Created:2018-06-01
Last Modified: 2018-06-08
-->



<form action="packages.php" method="POST">  
  <div class='jumbotron' style='background-color:skyblue'>
    <div class='row'>
        <div class='col-sm-2'></div>
        <div class='col-sm-7'>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Search:</span>
            </div>
            <input type="text" class="form-control" placeholder="destination, product, etc." name='searchField'>
          </div>
        </div>
        <div class='col-sm-3'>
          <button type="submit"  name='searchButton' class="btn btn-success">Search</button>
        </div>
    </div>
  </div>
  </form>