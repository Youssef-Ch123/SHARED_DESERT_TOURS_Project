
<!DOCTYPE html>
<html class="no-js js-menubar" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Image Cropping | Remark Admin Template</title>

  {{-- <link rel="apple-touch-icon" href="https://getbootstrapadmin.com/remark/base/assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="https://getbootstrapadmin.com/remark/base/assets/images/favicon.ico"> --}}

  <!-- Stylesheets -->
  <link rel="stylesheet" href="/assets/cropper/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/cropper/bootstrap-extend.min.css">
  {{-- <link rel="stylesheet" href="/assets/cropper/site.min.css"> --}}

  <!-- Skin tools (demo site only) -->
  {{-- <link rel="stylesheet" href="/assets/cropper/skintools.min.css"> --}}
  {{-- <script async="" src="/assets/cropper/analytics.js.téléchargement"></script><script src="/assets/cropper/skintools.min.js.téléchargement"></script> --}}

  <!-- Plugins -->
  {{-- <link rel="stylesheet" href="/assets/cropper/animsition.min.css"> --}}
  {{-- <link rel="stylesheet" href="/assets/cropper/asScrollable.min.css"> --}}
  {{-- <link rel="stylesheet" href="/assets/cropper/switchery.min.css"> --}}
  {{-- <link rel="stylesheet" href="/assets/cropper/introjs.min.css"> --}}
  {{-- <link rel="stylesheet" href="/assets/cropper/slidePanel.min.css"> --}}
  {{-- <link rel="stylesheet" href="/assets/cropper/flag-icon.min.css"> --}}

  <!-- Plugins For This Page -->
  <link rel="stylesheet" href="/assets/cropper/cropper.min.css">

  <!-- Page -->
  <link rel="stylesheet" href="/assets/cropper/image-cropping.min.css">

  <!-- Fonts -->
  {{-- <link rel="stylesheet" href="/assets/cropper/web-icons.min.css"> --}}
  {{-- <link rel="stylesheet" href="/assets/cropper/brand-icons.min.css"> --}}
  <link rel="stylesheet" href="/assets/cropper/css">




  <script src="/assets/cropper/breakpoints.min.js.téléchargement"></script>
  <script>
    Breakpoints();
  </script>


  <style>

.carousel {
    margin-top: 20px;
}
.item .thumb {
	width: 25%;
	cursor: pointer;
	float: left;
}
.item .thumb canvas {
	width: 100%;
	margin: 2px;
}
.item canvas {
	width: 100%;
}
  </style>
</head>
<body class="animsition site-menubar-unfold" style="animation-duration: 800ms; opacity: 1;">

  <div class="page-content">
        <!-- Panel Full Demo -->
        <div class="panel" style="padd">
          <div class="panel-heading">
          </div>
          <div class="panel-body container-fluid">
              <div class="row" id="Image1">
                    <div data-target="#carousel" data-slide-to="0" class="thumb col" id="1"></div>
              </div>
            <div class="row" id="cropper1">
              <div class="col-lg-6">
                <div class="cropper text-center" id="exampleFullCropper">
                  <img src="" alt="..." class="cropper-hidden">
                </div>
                <div class="cropper-toolbar text-center">
                  <div class="btn-group mb-20">
                    <button type="button" class="btn btn-primary" data-cropper-method="zoom" data-option="0.1" data-toggle="tooltip" data-container="body" title="" data-original-title="Zoom In">
                      <span class="cropper-tooltip" title="zoom in">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-zoom-in" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                  <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
                                  <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                      </span>
                    </button>
                    <button type="button" class="btn btn-primary" data-cropper-method="zoom" data-option="-0.1" data-toggle="tooltip" data-container="body" title="" data-original-title="Zoom Out">
                      <span class="cropper-tooltip" title="zoom out">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-zoom-out" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                  <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
                                  <path fill-rule="evenodd" d="M3 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                      </span>
                    </button>
                    <button type="button" class="btn btn-primary" data-cropper-method="rotate" data-option="-90" data-toggle="tooltip" data-container="body" title="" data-original-title="Turn Left">
                      <span class="cropper-tooltip" title="rotate left 90°">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                </svg>
                      </span>
                    </button>
                    <button type="button" class="btn btn-primary" data-cropper-method="rotate" data-option="90" data-toggle="tooltip" data-container="body" title="" data-original-title="Turn Right">
                      <span class="cropper-tooltip" title="rotate right 90°">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                      </span>
                    </button>
                    <button type="button" class="btn btn-primary" data-cropper-method="rotate" data-option="-5" data-toggle="tooltip" data-container="body" title="" data-original-title="Rotate Left">
                      <span class="cropper-tooltip" title="rotate left 90°">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
                                  <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
                                </svg>
                      </span>
                    </button>
                    <button type="button" class="btn btn-primary" data-cropper-method="rotate" data-option="5" data-toggle="tooltip" data-container="body" title="" data-original-title="Rotate Right">
                      <span class="cropper-tooltip" title="rotate right 90°">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                                  <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                                </svg>
                      </span>
                    </button>
                  </div>

                  <div class="btn-group mb-20">
                    <button type="button" class="btn btn-primary" data-cropper-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }" data-toggle="tooltip" data-container="body" title="" data-original-title="Get Image">
                      <span class="cropper-tooltip" title="Get Image">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                                  <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                  <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
                                </svg>
                      </span>
                    </button>
                    <button type="button" class="btn btn-primary" data-cropper-method="clear" data-toggle="tooltip" data-container="body" title="" data-original-title="Clear">
                      <span class="cropper-tooltip" title="clear">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                      </span>
                    </button>
                    <label class="btn btn-primary mb-0" data-toggle="tooltip" for="inputImage" data-container="body" title="" data-original-title="Upload File" aria-describedby="tooltip107951">
                      <input type="file" class="hidden-xs-up" id="inputImage" name="file" accept="image/*">
                      <span class="cropper-tooltip" title="Import image with FileReader">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                  <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                </svg>
                      </span>
                    </label>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade docs-cropped" id="getDataURLModal" aria-hidden="true" aria-labelledby="getDataURLTitle" role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-simple">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                          <h4 class="modal-title" id="getDataURLTitle">Cropped</h4>
                        </div>
                        <div class="modal-body" id="div1">
                        </div>
                        <div class="modal-footer">
                                <input type="button" class="btn btn-primary" value="save" onclick="myfunction();"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Modal -->
                </div>
                <br>
                <div class="row" style="width: 100%;">
                    {{-- <table>
                        <tr>
                            <td><div style="width: 173px; height: 115px;background-color: gray" id="1"></div></td>
                            <td rowspan="4"><div style="width: 400px; height: 300px;background-color: red" id="0"></div></td>
                        </tr>

                        <tr>
                            <td><div style="width: 173px; height: 115px;background-color: gray" id="2"></div></td>
                        </tr>
                        <tr>
                            <td><div style="width: 173px; height: 115px;background-color: gray" id="3"></div></td>
                        </tr>
                        <tr>
                            <td><div style="width: 173px; height: 115px;background-color: gray" id="4"></div></td>
                        </tr>

                    </table> --}}
                  </div>
              </div>
              <div class="col-lg-6">
                <div class="cropper-preview clearfix" id="exampleFullCropperPreview">
                  <div class="img-preview preview-lg" style="width: 263px; height: 147.938px;"><img src="/assets/cropper/people-7-960x640.webp" style="display: block; width: 328.173px; height: 219.167px; min-width: 0px !important; min-height: 0px !important; max-width: none !important; max-height: none !important; transform: translateX(-14.8843px) translateY(-7.33107px);"></div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <!-- End Panel Full Demo -->

        <!-- Panel Simple Demo -->

        <!-- End Panel Simple Demo -->
      </div>
  <!-- End Page -->



  <!-- Core  -->
   <script src="/assets/cropper/babel-external-helpers.js.téléchargement"></script>
  {{-- <script src="/assets/cropper/jquery.min.js.téléchargement"></script> --}}
   <script src="/assets/cropper/popper.min.js.téléchargement"></script>
  <script src="/assets/cropper/bootstrap.min.js.téléchargement"></script>
   {{-- <script src="/assets/cropper/animsition.min.js.téléchargement"></script> --}}
   {{-- <script src="/assets/cropper/jquery.mousewheel.js.téléchargement"></script> --}}
  {{-- <script src="/assets/cropper/jquery-asScrollbar.min.js.téléchargement"></script> --}}
  {{-- <script src="/assets/cropper/jquery-asScrollable.min.js.téléchargement"></script> --}}
  {{-- <script src="/assets/cropper/jquery-asHoverScroll.min.js.téléchargement"></script> --}}

  <!-- Plugins -->
  {{-- <script src="/assets/cropper/switchery.min.js.téléchargement"></script> --}}
  {{-- <script src="/assets/cropper/intro.min.js.téléchargement"></script> --}}
  {{-- <script src="/assets/cropper/screenfull.js.téléchargement"></script> --}}
  {{-- <script src="/assets/cropper/jquery-slidePanel.min.js.téléchargement"></script> --}}

  <!-- Plugins For This Page -->
  <script src="/assets/cropper/cropper.min.js.téléchargement"></script>

  <!-- Scripts -->
  <script src="/assets/cropper/Component.min.js.téléchargement"></script>
  {{-- <script src="/assets/cropper/Plugin.min.js.téléchargement"></script> --}}
  {{-- <script src="/assets/cropper/Base.min.js.téléchargement"></script> --}}
  {{-- <script src="/assets/cropper/Config.min.js.téléchargement"></script> --}}

  {{-- <script src="/assets/cropper/Menubar.min.js.téléchargement"></script> --}}
  {{-- <script src="/assets/cropper/GridMenu.min.js.téléchargement"></script> --}}
  {{-- <script src="/assets/cropper/Sidebar.min.js.téléchargement"></script> --}}
  {{-- <script src="/assets/cropper/PageAside.min.js.téléchargement"></script> --}}
  {{-- <script src="/assets/cropper/menu.min.js.téléchargement"></script> --}}

  <!-- Config -->
{{--   <script src="/assets/cropper/colors.min.js.téléchargement"></script>
  <script src="/assets/cropper/tour.min.js.téléchargement"></script> --}}


  <!-- Page -->
  {{-- <script src="/assets/cropper/Site.min.js.téléchargement"></script> --}}
  {{-- <script src="/assets/cropper/asscrollable.min.js.téléchargement"></script> --}}
  {{-- <script src="/assets/cropper/slidepanel.min.js.téléchargement"></script> --}}
  {{-- <script src="/assets/cropper/switchery.min.js(1).téléchargement"></script> --}}
  <script src="/assets/cropper/image-cropping.min.js.téléchargement"></script>


  <!-- Google Analytics -->
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js',
      'ga');

    ga('create', 'UA-65522665-1', 'auto');
    ga('send', 'pageview');
var cpt=2;
document.getElementById("Image1").style="display:none";
document.getElementById("cropper2").style="display:none";
    function myfunction()
    {
            var image = new Image();
            image.id = "pic1";
            image.name= "pic1";
            image.src = document.getElementById('div1').childNodes[0].toDataURL();
            document.getElementById("Image1").appendChild(image);
            document.getElementsByName("pic1")[1].value=image.src;
            
            document.getElementById("Image1").style="display:block";
            document.getElementById("cropper1").style="display:none";
            document.getElementById("cropper2").style="display:block";

            document.getElementsByClassName("modal-backdrop fade show")[0].remove();
        
    }
    function myfunction2(){
        var image = new Image();
            image.id = "pic"+cpt;
            image.name= "pic"+cpt;
            image.src = document.getElementById('div1').childNodes[0].toDataURL();
            document.getElementById(cpt).appendChild(image);

            document.getElementsByName("pic"+cpt)[1].value=image.src;
            cpt++;
    }
  </script>
    </body>
</html>
