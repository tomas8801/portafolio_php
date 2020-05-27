<div class="col-md-12 " >
    <div class="card" style="height: 600px; display: flex; justify-content: center;">

    <p class="text-center text-muted">* Only for admin</p>
    <form style="width: 400px;" class="form mx-auto" method="POST" action="<?=url_base?>admin/login">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="admin" name="name" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="password" name="password" required>
        </div>
        <input type="submit" name="submit" class="btn btn-block text-center btn-primary" value="enter">
    </form>
    
    </div>
</div>