<fieldset>
    <div class="form-group">
        <label for="name">Product Name *</label>
          <input type="text" name="name" value="<?php echo $edit ? $product['name'] : ''; ?>" placeholder="Product Name" class="form-control" required="required" id = "name" >
    </div> 

    <div class="form-group">
        <label for="code">Product Code *</label>
        <input type="text" name="code" value="<?php echo $edit ? $product['code'] : ''; ?>" placeholder="Product Code" class="form-control" required="required" id="code">
    </div> 

    <div class="form-group">
        <label>Company * </label>
        <label class="radio-inline">
            <input type="radio" name="Company" value="CP_Plus" <?php echo ($edit &&$product['Company'] =='CP_Plus') ? "checked": "" ; ?> required="required"/> CP_Plus
        </label>
        <label class="radio-inline">
            <input type="radio" name="Company" value="Dahua" <?php echo ($edit && $product['Company'] =='Dahua')? "checked": "" ; ?> required="required" id="Dahua"/> Dahua
        </label>
    </div>

    <div class="form-group">
        <label for="address">Image URL</label>
          <textarea name="image" placeholder="Image URL" class="form-control" id="address"><?php echo ($edit)? $product['image'] : ''; ?></textarea>
    </div> 
    
    <div class="form-group">
        <label>Product Link</label>
        <textarea name="product_link" placeholder="Product Link" class="form-control" id="product_link"><?php echo ($edit)? $product['product_link'] : ''; ?></textarea>
    </div>  

    <div class="form-group">
        <label for="email">Category</label>
            <input  type="text" name="category" value="<?php echo $edit ? $product['category'] : ''; ?>" placeholder="Category" class="form-control" id="email">
    </div>

    <div class="form-group">
        <label for="phone">Sub category</label>
            <input name="sub_type" value="<?php echo $edit ? $product['sub_type'] : ''; ?>" placeholder="Sub category" class="form-control"  type="text" id="phone">
    </div> 



    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>