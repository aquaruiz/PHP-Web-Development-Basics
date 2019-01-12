<h1>Edit game</h1>
<p><?=$_SESSION['error']??null;?></p>
<div>
    <label>
        Title: <input type="text" value="" name="title" />
    </label>
</div>
<div>
    <label>
        Publisher: <input type="text" value="" name="publisher" />
    </label>
</div>
<div>
    <label>
        Release Date: <input type="date" value="" name="release_date" />
    </label>
</div>
<div>
    <label>Controller Schema:
        <select name="controller_schema">
            <option>Choose an option...</option>
        </select>
    </label>
</div>
<div>
    <label>
        Last Played: <input type="date" value="" name="last_played" />
    </label>
</div>
<div>
    <label>
        Playtime: <input type="time" value="" name="playtime" />
    </label>
</div>
<div>
    <input type="submit" name="edit" value="Save" />
</div>
<a href="games.php">List</a>