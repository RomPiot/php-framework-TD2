<h1></h1>

<form method="POST" action="#">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="string" name="name" class="form-control" id="name" aria-describedby="name" placeholder="" value="<?= $game ? $game->getName() : null;?>">
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="string" name="image" class="form-control" id="image" aria-describedby="image" placeholder="" value="<?= $game ? $game->getImage() : null;?>">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Save</button>


</form>