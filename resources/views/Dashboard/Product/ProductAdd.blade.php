@extends('Dashboard.layouts.Navbar')
@section('content')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="body-wrapper">
            <div class="container p-4 d-flex gap-4 flex-column">
                <div class="row bg-white rounded p-4">
                    <h2 class="p-0">General Information</h2>
                    <div class="row d-flex justify-content-end flex-row gap-3 postion-custom-button">
                        <button class="btn-custom btn-status" data-bs-toggle="modal"
                            data-bs-target="#ActiveModal">Status</button>
                        <button class="btn-custom bg-btn-delete" data-bs-toggle="modal"
                            data-bs-target="#DeleteModal">Delete</button>
                    </div>
                </div>
                <form action="" class="d-flex flex-column gap-4">
                    <div
                        class="row d-flex flex-column gap-4 bg-white rounded d-flex flex-column justify-content-center align-items-center">
                        <div class="row p-0 m-0">
                            <div class="col-md-6 col-lg-6 col-xl-6 col-12 bg-white p-4 rounded-l">
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
                            <div class="col-md-6 col-lg-6 col-xl-6 col-12 bg-white p-4 rounded-r">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="number" class="form-control" id="price" name="price">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Short Description</label>
                                    <textarea class="form-control" id="description" name="description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class=" row p-4 d-flex flex-column gap-4 bg-white rounded d-flex flex-column justify-content-center align-items-center">
                        <label for="description" class="form-label">Product Description</label>
                        <div class="editor-container">
                            <textarea name="description" id="editor"
                                data-upload-url="{{ route('image.upload', ['_token' => csrf_token()]) }}">
                                                                                                                                                                                                                                                                                                                                                                                                </textarea>
                        </div>
                    </div>
                    <div
                        class="row p-4 d-flex flex-column gap-4 bg-white rounded d-flex flex-column justify-content-center align-items-center">
                        <p class="form-label">Feature Images</p>

                        <input type="file" id="feature_image" class="d-none" accept="image/*" multiple>

                        <label for="feature_image" class="dropzone-box text-center d-block" id="dropzone">
                            <div class="mb-3">
                                <i class="bi bi-cloud-arrow-up upload-icon"></i>
                            </div>

                            <p class="upload-text mb-1">
                                <span>Click to upload</span> or drag and drop
                            </p>

                            <p class="file-size-limit mb-4">Max. File Size: 30MB</p>

                            <span class="btn btn-primary btn-extra-small">Select Files</span>

                            <div id="file-name-preview" class="mt-3 small text-info"></div>
                        </label>
                    </div>
                    <div
                        class="row p-4 d-flex flex-column gap-4 bg-white rounded d-flex flex-column justify-content-center align-items-center">
                        <div class="row p-0">
                            <p class="form-label">Product Images</p>
                            <div class="col-md-3 col-lg-3 col-xl-3 col-12">


                                <input type="file" id="feature_image" class="d-none" accept="image/*" multiple>

                                <label for="feature_image" class="dropzone-box text-center d-block" id="dropzone">
                                    <div class="mb-3">
                                        <i class="bi bi-cloud-arrow-up upload-icon"></i>
                                    </div>

                                    <p class="upload-text mb-1">
                                        <span>Click to upload</span> or drag and drop
                                    </p>

                                    <p class="file-size-limit mb-4">Max. File Size: 30MB</p>

                                    <span class="btn btn-primary btn-extra-small">Select Files</span>

                                    <div id="file-name-preview" class="mt-3 small text-info"></div>
                                </label>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3 col-12">

                                <input type="file" id="feature_image" class="d-none" accept="image/*" multiple>

                                <label for="feature_image" class="dropzone-box text-center d-block" id="dropzone">
                                    <div class="mb-3">
                                        <i class="bi bi-cloud-arrow-up upload-icon"></i>
                                    </div>

                                    <p class="upload-text mb-1">
                                        <span>Click to upload</span> or drag and drop
                                    </p>

                                    <p class="file-size-limit mb-4">Max. File Size: 30MB</p>

                                    <span class="btn btn-primary btn-extra-small">Select Files</span>

                                    <div id="file-name-preview" class="mt-3 small text-info"></div>
                                </label>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3 col-12">

                                <input type="file" id="feature_image" class="d-none" accept="image/*" multiple>

                                <label for="feature_image" class="dropzone-box text-center d-block" id="dropzone">
                                    <div class="mb-3">
                                        <i class="bi bi-cloud-arrow-up upload-icon"></i>
                                    </div>

                                    <p class="upload-text mb-1">
                                        <span>Click to upload</span> or drag and drop
                                    </p>

                                    <p class="file-size-limit mb-4">Max. File Size: 30MB</p>

                                    <span class="btn btn-primary btn-extra-small">Select Files</span>

                                    <div id="file-name-preview" class="mt-3 small text-info"></div>
                                </label>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3 col-12">

                                <input type="file" id="feature_image" class="d-none" accept="image/*" multiple>

                                <label for="feature_image" class="dropzone-box text-center d-block" id="dropzone">
                                    <div class="mb-3">
                                        <i class="bi bi-cloud-arrow-up upload-icon"></i>
                                    </div>

                                    <p class="upload-text mb-1">
                                        <span>Click to upload</span> or drag and drop
                                    </p>

                                    <p class="file-size-limit mb-4">Max. File Size: 30MB</p>

                                    <span class="btn btn-primary btn-extra-small">Select Files</span>

                                    <div id="file-name-preview" class="mt-3 small text-info"></div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-25">Submit</button>

            </div>
            </form>
        </div>
    </div>
    </div>
    @include('Dashboard.Modals.deleteModal')
    @include('Dashboard.Modals.active')
@endsection