
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
        <div class="col-md-12">
                        <div class="mb-3">
                            <label for="Product" class="form-label">Product</label>
                            <input type="text" class="form-control" id="Product" name="Product">
                        </div>
                        <div class="row d-flex justify-center">
                            <div class="mb-3 col-6">
                                <label for="Brand" class="form-label">Price</label>
                                <input type="text" class="form-control" id="Brand" name="Brand">
                            </div>
                            <div class="mb-3 col-6">
                                <label for="price" class="form-label">Discount</label>
                                <input type="number" class="form-control" id="price" name="price">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <Select class="form-control">
                                <option value="Sport" class="form-control">Sport</option>
                                <option value="Boots">Boots</option>
                                <option value="Sandlas">Sandlas</option>
                                <option value="Dress Shoes">Dress Shoes</option>
                            </Select>
                        </div>
                    </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>