<section class="container">
    <div>
        <h1 class="page-title">TASYNGUYEN3894 | Project</h1>
    </div>
    <div class="demo-list">
        <table  class="table-responsive">
            <thead>
                <th>Project Name</th>
                <th>Type</th>
                <th>Use</th>
                <th>Github</th>
            </thead>
            <tbody>
            <?php
                foreach ($data as $key => $value) 
                {
            ?>
                <tr>
                    <td data-title="Project Name"><a href="demo/yipshop"><?php echo $value['name'] ?></a></td>
                    <td data-title="Type"><?php echo $value['type_name'] ?></td>
                    <td data-title="Use"><?php echo $value['use'] ?></td>
                    <td data-title="Github"><a href="<?php echo $value['github'] ?>" target="_blank"><?php echo $value['name'] ?></a></td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</section>