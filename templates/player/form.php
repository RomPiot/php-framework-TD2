<h1></h1>

<form method="POST" action="#">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="string" class="form-control" id="username" name="username" aria-describedby="username" placeholder="" value="<?= $player ? $player->getUsername() : null;?>">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="string" class="form-control" id="email" aria-describedby="email" name="email" placeholder="" value="<?= $player ? $player->getEmail() : null;?>">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Save</button>


</form>