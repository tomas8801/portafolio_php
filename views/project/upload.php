<div class="col-lg-12">
    <h3>Subir projecto</h3>

    <form action="<?=url_base?>project/save" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            Name <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-check form-check-inline">
            HTML &nbsp <input class="form-check-input" type="checkbox" name="languages[]" value="html" >
        </div>
        <div class="form-check form-check-inline">
            CSS &nbsp <input class="form-check-input" type="checkbox" name="languages[]" value="css">
        </div>
        <div class="form-check form-check-inline">
            BOOTSTRAP &nbsp <input class="form-check-input" type="checkbox" name="languages[]" value="bootstrap">
        </div>
        <div class="form-check form-check-inline">
            JAVASCRIPT &nbsp <input class="form-check-input" type="checkbox" name="languages[]" value="javascript">
        </div>
        <div class="form-check form-check-inline">
            PHP &nbsp <input class="form-check-input" type="checkbox" name="languages[]" value="php">
        </div>
        <div class="form-check form-check-inline">
            MYSQL &nbsp <input class="form-check-input" type="checkbox" name="languages[]" value="mysql">
        </div>

        <div class="form-group">
            Description <textarea class="form-control" name="description" rows="3" required></textarea>
        </div>


        <div class="form-group">
            Main Image <input type="file" class="form-control-file" name="image" required>
        </div>

        <div class="form-group">
            Others Images <input type="file" multiple="true" class="form-control-file" name="images[]">
        </div>


        <div class="form-group">
            Github <input type="text" name="github" class="form-control">
        </div>


        
        <input type="submit" value="Upload" name="submit">
    </form>

</div>