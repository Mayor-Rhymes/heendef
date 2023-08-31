<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Carousel Slides</h5>
              <?php if (!empty($_GET['del']=="success" )) {?>
                <div id="tbl" class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                &#10004; Successful  
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php }elseif($_GET['del']=="failure"){ ?>
              <div id="tbl" class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                 &#10060; Unsuccessful 
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php } ?>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
               
                    <th scope="col">Image</th>
                    <th scope="col">Active</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $cnt=1; $qls = mysqli_query($conn,"SELECT * FROM carousel ORDER BY id DESC");
                  while ($row=mysqli_fetch_array($qls)) {
                    $status = $row['active'];
                   ?>
                  <tr>
                    <th scope="row"><?php echo $cnt; ?></th>
                    <td><?php echo htmlentities($row['title']); ?></td>
                   
                    <td><img style="max-height:100px; min-height: 100px;" src="<?php echo htmlentities($row['image_path']); ?>"></td>
                    <td>
              <?php if ($status==1): ?>
                       &#10004;
              <?php else: ?>
                        &#10060;
              <?php endif ?>
                    </td>
            
                    <td>
                      <button onclick="window.location.href='edit-carousel?id=<?php echo htmlentities($row['id']); ?>'" class="btn btn-primary"><i class="bi bi-pencil"></i></button>
                      <button onclick="window.location.href='del-carousel?id=<?php echo htmlentities($row['id']); ?>';" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </td>
                  </tr>
                <?php $cnt=$cnt+1;} ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>