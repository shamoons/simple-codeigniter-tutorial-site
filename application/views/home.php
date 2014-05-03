<div class="container">
  <div class="row">
    <h1>My Stocks</h1>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <form method="POST" action="/">
        <div class="input-group">
          <input type="text" class="form-control" name="symbols" placeholder="Enter Symbols separated by a comma: GOOG, MSFT, APPL, etc" autocomplete="off">
          <span class="input-group-btn">
            <button class="btn btn-default btn-primary" type="submit">Search</button>
          </span>
        </div><!-- /input-group -->
      </form>
    </div><!-- /.col-lg-6 -->
  </div><!-- /.row -->
  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover table-striped">
        <thead>
          <th>Symbol</th>
          <th>Name</th>
          <th>Last</th>
        </thead>
        <tbody>
          <?php foreach($stocks as $stock): ?>
            <tr>
              <td><?php echo $stock[0]; ?></td>
              <td><?php echo $stock[1]; ?></td>
              <td><?php echo $stock[2]; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>