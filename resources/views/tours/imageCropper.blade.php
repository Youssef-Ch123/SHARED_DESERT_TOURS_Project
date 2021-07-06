<div class="row">
    <div class="col-lg-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Cropper.js
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <div class="row">
                    <div class="col-md-9">
                        <div class="mb-3">
                            <img id="image" src="assets/media/blog/blog3.jpg" alt="">
                        </div>
                        <div id="cropper-buttons">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary mb-3" data-method="setDragMode" data-option="move" title="Move">
                                    <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.setDragMode(&quot;move&quot;)">
                                        <span class="fa fa-arrows-alt"></span>
                                    </span>
                                </button>
                                <button type="button" class="btn btn-primary mb-3" data-method="setDragMode" data-option="crop" title="Crop">
                                    <span class="" data-toggle="kt-tooltip" title="" aria-describedby="tooltip15929" data-original-title="cropper.setDragMode(&quot;crop&quot;)">
                                        <span class="fa fa-crop-alt"></span>
                                    </span>
                                </button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary mb-3" data-method="zoom" data-option="0.1" title="Zoom In">
                                    <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.zoom(0.1)">
                                        <span class="fa fa-search-plus"></span>
                                    </span>
                                </button>
                                <button type="button" class="btn btn-primary mb-3" data-method="zoom" data-option="-0.1" title="Zoom Out">
                                    <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.zoom(-0.1)">
                                        <span class="fa fa-search-minus"></span>
                                    </span>
                                </button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary mb-3" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
                                    <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.move(-10, 0)">
                                        <span class="fa fa-arrow-left"></span>
                                    </span>
                                </button>
                                <button type="button" class="btn btn-primary mb-3" data-method="move" data-option="10" data-second-option="0" title="Move Right">
                                    <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.move(10, 0)">
                                        <span class="fa fa-arrow-right"></span>
                                    </span>
                                </button>
                                <button type="button" class="btn btn-primary mb-3" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
                                    <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.move(0, -10)">
                                        <span class="fa fa-arrow-up"></span>
                                    </span>
                                </button>
                                <button type="button" class="btn btn-primary mb-3" data-method="move" data-option="0" data-second-option="10" title="Move Down">
                                    <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.move(0, 10)">
                                        <span class="fa fa-arrow-down"></span>
                                    </span>
                                </button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary mb-3" data-method="rotate" data-option="-45" title="Rotate Left">
                                    <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.rotate(-45)">
                                        <span class="fa fa-undo-alt"></span>
                                    </span>
                                </button>
                                <button type="button" class="btn btn-primary mb-3" data-method="rotate" data-option="45" title="Rotate Right">
                                    <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.rotate(45)">
                                        <span class="fa fa-redo-alt"></span>
                                    </span>
                                </button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary mb-3" data-method="scaleX" data-option="-1" title="Flip Horizontal">
                                    <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.scaleX(-1)">
                                        <span class="fa fa-arrows-alt-h"></span>
                                    </span>
                                </button>
                                <button type="button" class="btn btn-primary mb-3" data-method="scaleY" data-option="-1" title="Flip Vertical">
                                    <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.scaleY(-1)">
                                        <span class="fa fa-arrows-alt-v"></span>
                                    </span>
                                </button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary mb-3" data-method="crop" title="Crop">
                                    <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.crop()">
                                        <span class="fa fa-check"></span>
                                    </span>
                                </button>
                                <button type="button" class="btn btn-primary mb-3" data-method="clear" title="Clear">
                                    <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.clear()">
                                        <span class="fa fa-times"></span>
                                    </span>
                                </button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary mb-3" data-method="disable" title="Disable">
                                    <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.disable()">
                                        <span class="fa fa-lock"></span>
                                    </span>
                                </button>
                                <button type="button" class="btn btn-primary mb-3" data-method="enable" title="Enable">
                                    <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.enable()">
                                        <span class="fa fa-unlock"></span>
                                    </span>
                                </button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary mb-3" data-method="reset" title="Reset">
                                    <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.reset()">
                                        <span class="fa fa-sync-alt"></span>
                                    </span>
                                </button>
                                <button class="btn btn-primary btn-upload mb-3" title="Upload image file">
                                    <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
                                    <span class=" kt-tooltip" data-toggle="kt-tooltip" title="" data-original-title="Import image with Blob URLs">
                                        <span class="fa fa-upload"></span>
                                    </span>
                                </button>
                                <button type="button" class="btn btn-primary mb-3" data-method="destroy" title="Destroy">
                                    <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.destroy()">
                                        <span class="fa fa-power-off"></span>
                                    </span>
                                </button>
                            </div>
                            <div class="btn-group btn-group-crop">
                                <button type="button" data-toggle="modal" data-target="#getCroppedCanvasModal" class="btn btn-success mb-3" data-method="getCroppedCanvas" data-option="{ &quot;maxWidth&quot;: 540, &quot;maxHeight&quot;: 260 }">
                                    <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.getCroppedCanvas({ maxWidth: 540, maxHeight: 260 })">
                                        Get Cropped Canvas
                                    </span>
                                </button>
                                <button type="button" data-toggle="modal" data-target="#getCroppedCanvasModal" class="btn btn-success mb-3" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
                                    <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.getCroppedCanvas({ width: 160, height: 90 })">
                                        160×90
                                    </span>
                                </button>
                                <button type="button" data-toggle="modal" data-target="#getCroppedCanvasModal" class="btn btn-success mb-3" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
                                    <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.getCroppedCanvas({ width: 320, height: 180 })">
                                        320×180
                                    </span>
                                </button>
                            </div>

                            <!-- Show the cropped image in modal -->
                            <div class="modal fade cropper-cropped" id="getCroppedCanvasModal" role="dialog" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="getCroppedCanvasTitle">Cropped</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- /.modal -->
                            <button type="button" class="btn btn-secondary mb-3" data-method="getData" data-option="" data-target="#putData">
                                <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.getData()">
                                    Get Data
                                </span>
                            </button>
                            <button type="button" class="btn btn-secondary mb-3" data-method="setData" data-target="#putData">
                                <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.setData(data)">
                                    Set Data
                                </span>
                            </button>
                            <button type="button" class="btn btn-secondary mb-3" data-method="getContainerData" data-option="" data-target="#putData">
                                <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.getContainerData()">
                                    Get Container Data
                                </span>
                            </button>
                            <button type="button" class="btn btn-secondary mb-3" data-method="getImageData" data-option="" data-target="#putData">
                                <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.getImageData()">
                                    Get Image Data
                                </span>
                            </button>
                            <button type="button" class="btn btn-secondary mb-3" data-method="getCanvasData" data-option="" data-target="#putData">
                                <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.getCanvasData()">
                                    Get Canvas Data
                                </span>
                            </button>
                            <button type="button" class="btn btn-secondary mb-3" data-method="setCanvasData" data-target="#putData">
                                <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.setCanvasData(data)">
                                    Set Canvas Data
                                </span>
                            </button>
                            <button type="button" class="btn btn-secondary mb-3" data-method="getCropBoxData" data-option="" data-target="#putData">
                                <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.getCropBoxData()">
                                    Get Crop Box Data
                                </span>
                            </button>
                            <button type="button" class="btn btn-secondary mb-3" data-method="setCropBoxData" data-target="#putData">
                                <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.setCropBoxData(data)">
                                    Set Crop Box Data
                                </span>
                            </button>
                            <button type="button" class="btn btn-secondary mb-3" data-method="moveTo" data-option="0">
                                <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.moveTo(0)">
                                    Move to [0,0]
                                </span>
                            </button>
                            <button type="button" class="btn btn-secondary mb-3" data-method="zoomTo" data-option="1">
                                <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.zoomTo(1)">
                                    Zoom to 100%
                                </span>
                            </button>
                            <button type="button" class="btn btn-secondary mb-3" data-method="rotateTo" data-option="180">
                                <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.rotateTo(180)">
                                    Rotate 180°
                                </span>
                            </button>
                            <button type="button" class="btn btn-secondary mb-3" data-method="scale" data-option="-2" data-second-option="-1">
                                <span class="" data-toggle="kt-tooltip" title="" data-original-title="cropper.scale(-2, -1)">
                                    Scale (-2, -1)
                                </span>
                            </button>
                            <textarea class="form-control" id="putData" placeholder="Get data to here or set data with this value"></textarea>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="cropper-preview clearfix mb-3">
                            <div id="cropper-preview-lg" class="img-preview preview-lg img-fluid mb-3" style="width: 256px; height: 160px; overflow: hidden; background-color: #f7f7f7;"></div>
                            <div id="cropper-preview-md" class="img-preview preview-md float-left" style="width: 128px; height: 80px; overflow: hidden; background-color: #f7f7f7;"></div>
                            <div id="cropper-preview-sm" class="img-preview preview-sm float-left ml-3" style="width: 64px; height: 40px; overflow: hidden; background-color: #f7f7f7;"></div>
                            <div id="cropper-preview-xs" class="img-preview preview-xs float-left ml-3" style="width: 32px; height: 20px; overflow: hidden; background-color: #f7f7f7;"></div>
                        </div>

                        <!-- <h3>Data:</h3> -->
                        <div id="cropper-data">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="dataX">X</label>
                                    </div>
                                    <input type="text" class="form-control" id="dataX" placeholder="x">
                                    <div class="input-group-append">
                                        <span class="input-group-text">px</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="dataY">Y</label>
                                    </div>
                                    <input type="text" class="form-control" id="dataY" placeholder="y">
                                    <div class="input-group-append">
                                        <span class="input-group-text">px</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="dataWidth">Width</label>
                                    </div>
                                    <input type="text" class="form-control" id="dataWidth" placeholder="width">
                                    <div class="input-group-append">
                                        <span class="input-group-text">px</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="dataHeight">Height</label>
                                    </div>
                                    <input type="text" class="form-control" id="dataHeight" placeholder="height">
                                    <div class="input-group-append">
                                        <span class="input-group-text">px</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="dataRotate">Rotate</label>
                                    </div>
                                    <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
                                    <div class="input-group-append">
                                        <span class="input-group-text">deg</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="dataScaleX">ScaleX</label>
                                    </div>
                                    <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="dataScaleY">ScaleY</label>
                                    </div>
                                    <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
                                </div>
                            </div>
                        </div>
                        <div class="btn-group d-flex flex-nowrap" data-toggle="buttons" id="setAspectRatio">
                            <label class="btn btn-primary">
                                <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.7777777777777777">
                                <span class="docs-tooltip" data-toggle="kt-tooltip" title="" data-original-title="aspectRatio: 16 / 9">
                                    16:9
                                </span>
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1.3333333333333333">
                                <span class="docs-tooltip" data-toggle="kt-tooltip" title="" data-original-title="aspectRatio: 4 / 3">
                                    4:3
                                </span>
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="1">
                                <span class="docs-tooltip" data-toggle="kt-tooltip" title="" data-original-title="aspectRatio: 1 / 1">
                                    1:1
                                </span>
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="0.6666666666666666">
                                <span class="docs-tooltip" data-toggle="kt-tooltip" title="" data-original-title="aspectRatio: 2 / 3">
                                    2:3
                                </span>
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" class="sr-only" id="aspectRatio5" name="aspectRatio" value="NaN">
                                <span class="docs-tooltip" data-toggle="kt-tooltip" title="" data-original-title="aspectRatio: NaN">
                                    Free
                                </span>
                            </label>
                        </div>
                        <div class="btn-group d-flex flex-nowrap" data-toggle="buttons" id="viewMode">
                            <label class="btn btn-primary active">
                                <input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0" checked="">
                                <span class="docs-tooltip" data-toggle="kt-tooltip" title="" data-original-title="View Mode 0">
                                    VM0
                                </span>
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" class="sr-only" id="viewMode1" name="viewMode" value="1">
                                <span class="docs-tooltip" data-toggle="kt-tooltip" title="" data-original-title="View Mode 1">
                                    VM1
                                </span>
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
                                <span class="docs-tooltip" data-toggle="kt-tooltip" title="" data-original-title="View Mode 2">
                                    VM2
                                </span>
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
                                <span class="docs-tooltip" data-toggle="kt-tooltip" title="" data-original-title="View Mode 3">
                                    VM3
                                </span>
                            </label>
                        </div>
                        <div class="btn-group d-flex flex-nowrap" id="toggleOptionButtons">
                            <div class="dropdown" style="width: 100%;">
                                <button class="btn btn-brand dropdown-toggle" style="width: 100%;" type="button" id="toggleOption" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Toggle options
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="toggleOption" style="">
                                    <li class="dropdown-item">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="responsive" checked=""> responsive
                                            <span></span>
                                        </label>
                                    </li>
                                    <li class="dropdown-item">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="restore" checked=""> restore
                                            <span></span>
                                        </label>
                                    </li>
                                    <li class="dropdown-item">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="checkCrossOrigin" checked=""> checkCrossOrigin
                                            <span></span>
                                        </label>
                                    </li>
                                    <li class="dropdown-item">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="checkOrientation" checked=""> checkOrientation
                                            <span></span>
                                        </label>
                                    </li>
                                    <li class="dropdown-item">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="modal" checked=""> modal
                                            <span></span>
                                        </label>
                                    </li>
                                    <li class="dropdown-item">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="guides" checked=""> guides
                                            <span></span>
                                        </label>
                                    </li>
                                    <li class="dropdown-item">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="center" checked=""> center
                                            <span></span>
                                        </label>
                                    </li>
                                    <li class="dropdown-item">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="highlight" checked=""> highlight
                                            <span></span>
                                        </label>
                                    </li>
                                    <li class="dropdown-item">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="background" checked=""> background
                                            <span></span>
                                        </label>
                                    </li>
                                    <li class="dropdown-item">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="autoCrop" checked=""> autoCrop
                                            <span></span>
                                        </label>
                                    </li>
                                    <li class="dropdown-item">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="movable" checked=""> movable
                                            <span></span>
                                        </label>
                                    </li>
                                    <li class="dropdown-item">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="rotatable" checked=""> rotatable
                                            <span></span>
                                        </label>
                                    </li>
                                    <li class="dropdown-item">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="scalable" checked=""> scalable
                                            <span></span>
                                        </label>
                                    </li>
                                    <li class="dropdown-item">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="zoomable" checked=""> zoomable
                                            <span></span>
                                        </label>
                                    </li>
                                    <li class="dropdown-item">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="zoomOnTouch" checked=""> zoomOnTouch
                                            <span></span>
                                        </label>
                                    </li>
                                    <li class="dropdown-item">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="zoomOnWheel" checked=""> zoomOnWheel
                                            <span></span>
                                        </label>
                                    </li>
                                    <li class="dropdown-item">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="cropBoxMovable" checked=""> cropBoxMovable
                                            <span></span>
                                        </label>
                                    </li>
                                    <li class="dropdown-item">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="cropBoxResizable" checked=""> cropBoxResizable
                                            <span></span>
                                        </label>
                                    </li>
                                    <li class="dropdown-item">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="toggleDragModeOnDblclick" checked=""> toggleDragModeOnDblclick
                                            <span></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="assets/cropper/cropper.min.js.téléchargement" type="text/javascript"></script>