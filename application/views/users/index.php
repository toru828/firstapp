<main role="main" class="flex-shrink-0">
  <div class="container">
      <h1>List of User</h1>
      <?php echo validation_errors(); ?>
      <?php echo form_open('users/delete_multi'); ?>
      <table class="table table-striped table-hover">
          <thead>
              <tr>
              <th scope="col"><input type="checkbox" name="select-all" id="select-all" onclick=checkAll()></th>
              <th scope="col">#</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Action</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($users as $user): ?>
                  <tr>
                  <th scope="row"><input type="checkbox" name="ids[]" value="<?php echo $user['id']; ?>"></th>
                  <th scope="row"><?php echo $user["id"]; ?></th>
                  <td><?php echo $user["first_name"]; ?></td>
                  <td><?php echo $user["last_name"]; ?></td>
                  <td>
                      <a href="<?php echo site_url("users/detail/$user[id]"); ?>"><span class="btn btn-primary btn-sm">View</span></a>
                      <a href="<?php echo site_url("users/update/$user[id]"); ?>"><span class="btn btn-outline-primary btn-sm">Edit</span></a>
                      <a onclick="return confirm('Are you sure to delete this user?')" href="<?php echo site_url("users/delete/$user[id]"); ?>"><span class="btn btn-sm">Delete</span></a>
                  </td>
                  </tr>
              <?php endforeach; ?>
          </tbody>
      </table>
      <button type="submit" class="btn btn-danger">Delete</button>
      <?php echo form_close(); ?>
  </div>
</main>
