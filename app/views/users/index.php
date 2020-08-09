<div class="text-center">
    <h1>GrizzHacks 5 is here!</h1>
    <p class="lead">GrizzHacks 5 is going virtual! Get ready for an incredible weekend full of learning, building and innovating on September 18th-20th.</p>
    <button type="button" class="cbutton hue" data-toggle="modal" data-target="#signin-or-up" >Application Open Now!</button>
</div>

<?php foreach($viewmodel as $item) : ?>

    <div class="card" style="width: 18rem;">
        <div class="card-header">
            <small><?php echo $item['username']; ?></small>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">        <p><?php echo $item['id']; ?></p></li>
            <li class="list-group-item">        <p><?php echo $item['email']; ?></p></li>
            <li class="list-group-item">        <p><?php echo $item['password']; ?></p></li>
            <li class="list-group-item">        <p><?php echo $item['reg_date']; ?></p></li>
        </ul>
    </div>
<?php endforeach; ?>
