<div class="row">
    <?php foreach ($termekek as $termek): ?>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title"><?php echo $termek['nev'] ?></h2>
                </div>
                <div class="card-body">
                    <p class="card-title"> <?php echo $termek['leiras'] ?></p>
                </div>
                <div class="card-footer">
                <p class="card-title"> <?php echo $termek['ar'] ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>