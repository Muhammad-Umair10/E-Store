<div class="modal fade" id="ActiveModal" tabindex="-1" aria-labelledby="ActiveModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ActiveModal">Product Status</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="Product" class="form-label">Status</label>
                            <select name="" id="" class="form-control">
                                <option value="Active">Published</option>
                                <option value="Inactive">UnPublished</option>
                                <option value="Inactive">Drafted</option>
                            </select>
                        </div>
                        <div class="row d-flex justify-center">
                            <div class="col-md-12">
                                <p class="form-label">Active</p>
                                <label class="switch">
                                    <input type="checkbox" id="publishToggle">
                                    <span class="slider"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn-modal status">Save changes</button>
            </div>
        </div>
    </div>
</div>