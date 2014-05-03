<div class="container">
  <div class="row">
    <h1>My Stocks</h1>
    <div class="col-md-12">
      <table class="table table-hover">
        <thead>
          <th>Symbol</th>
          <th>Name</th>
          <th>Last</th>
        </thead>
        <tbody>
          <?php foreach($stocks as $stock): ?>
            <tr>
              <td><?php echo $mystock['symbol']; ?></td>
              <td><?php echo $mystock['name']; ?></td>
              <td><?php echo $mystock['last']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>