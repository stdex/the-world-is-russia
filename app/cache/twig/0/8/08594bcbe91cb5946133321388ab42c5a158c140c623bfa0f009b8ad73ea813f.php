<?php

/* layout.twig */
class __TwigTemplate_08594bcbe91cb5946133321388ab42c5a158c140c623bfa0f009b8ad73ea813f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
    <meta charset=\"windows-1251\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>The World Is Russia</title>

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"/media/css/jquery.fileupload.css\">

    <style type=\"text/css\">
        #upload-form {
            padding: 20px;
            background: #F7F7F7;
            border: 1px solid #CCC;
        }

        #upload-form input[type=file] {
            padding: 15px 0px;
        }
    </style>

</head>
<body>


<div id=\"fb-root\"></div>

<nav class=\"navbar navbar-default navbar-static-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"#\">The World Is Russia</a>
        </div>
    </div>
</nav>

<div class=\"container\">

        <div class=\"row\">
            <div class=\"col-xs-6 col-sm-3\"><strong>��:</strong><br><img src=\"/media/images/before.jpg\"
                                                                            class=\"img-responsive\"/></div>
            <div class=\"col-xs-6 col-sm-3\"><strong>�����:</strong><br><img src=\"/media/images/after.jpg\"
                                                                           class=\"img-responsive\"/></div>
        </div>


        <h3>���������!</h3>

        <button type=\"button\" class=\"btn btn-primary\" id=\"login-button\" >��������� ���� �� <i class=\"fa fa-vk\"></i> ���������</button>

        
        <form action=\"\" id=\"facebook-form\" method=\"post\">
            <input type=\"hidden\" name=\"url\" id=\"url\">
            <input type=\"hidden\" name=\"fbid\" id=\"fbid\">
        </form>

        <br>
        <p>��� ��������� � ����������:</p>

        <div id=\"upload-form\">

            <div class=\"form-group\">

                <span class=\"btn btn-success fileinput-button\">
                    <i class=\"glyphicon glyphicon-plus\"></i>
                    <span>�������� ����...</span>
                    <!-- The file input field used as target for the file upload widget -->
                    <input id=\"fileupload\" type=\"file\" name=\"files[]\" multiple>
                </span>
            </div>
            
            <!-- The global progress bar -->
            <div id=\"progress\" class=\"progress\">
                <div class=\"progress-bar progress-bar-success\"></div>
            </div>
            <!-- The container for the uploaded files -->
            <div id=\"files\" class=\"files\"></div>

        </div>

        <br>
        <br>
        <br>

    <!--
    <h4>Provided by:</h4>

    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-4\">
            <a target=\"_blank\" href=\"#\" id=\"ivacation-button\">
                <img src=\"/media/images/r_1.jpg\" class=\"img-reponsive\"/>
            </a>
            <br>
            <br>
        </div>
        <div class=\"col-xs-12 col-sm-4\">
            <a target=\"_blank\" href=\"#\" id=\"ivacation-button\">
                <img src=\"/media/images/r_1.jpg\" class=\"img-reponsive\"/>
            </a>
            <br>
            <br>
        </div>
    </div>
    -->

    <div class=\"recent-uploads\" style=\"display: none\">
        <h4>������� �����������</h4>
        <!-- http://tutorialzine.com/2011/04/jquery-webcam-photobooth/ -->
        <div class=\"recent-uploads-pics\"></div>

    </div>

</div>
        <script src=\"http://vkontakte.ru/js/api/openapi.js\" type=\"text/javascript\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src=\"/media/js/vendor/jquery.ui.widget.js\"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src=\"//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js\"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src=\"//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js\"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src=\"/media/js/jquery.iframe-transport.js\"></script>
<!-- The basic File Upload plugin -->
<script src=\"/media/js/jquery.fileupload.js\"></script>
<!-- The File Upload processing plugin -->
<script src=\"/media/js/jquery.fileupload-process.js\"></script>
<!-- The File Upload image preview & resize plugin -->
<script src=\"/media/js/jquery.fileupload-image.js\"></script>
<!-- The File Upload audio preview plugin -->
<script src=\"/media/js/jquery.fileupload-audio.js\"></script>
<!-- The File Upload video preview plugin -->
<script src=\"/media/js/jquery.fileupload-video.js\"></script>
<!-- The File Upload validation plugin -->
<script src=\"/media/js/jquery.fileupload-validate.js\"></script>

<script>
/*jslint unparam: true, regexp: true */
/*global window, \$ */
\$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = '/upload/',
        uploadButton = \$('<button/>')
            .addClass('btn btn-primary')
            .prop('disabled', true)
            .text('Processing...')
            .on('click', function () {
                var \$this = \$(this),
                    data = \$this.data();
                \$this
                    .off('click')
                    .text('Abort')
                    .on('click', function () {
                        \$this.remove();
                        data.abort();
                    });
                data.submit().always(function () {
                    \$this.remove();
                });
            });
    \$('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: false,
        acceptFileTypes: /(\\.|\\/)(gif|jpe?g|png)\$/i,
        maxFileSize: 999000,
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: true
    }).on('fileuploadadd', function (e, data) {
        data.context = \$('<div/>').appendTo('#files');
        \$.each(data.files, function (index, file) {
            var node = \$('<p/>')
                    .append(\$('<span/>').text(file.name));
            if (!index) {
                node
                    .append('<br>')
                    .append(uploadButton.clone(true).data(data));
            }
            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = \$(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append(\$('<span class=\"text-danger\"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('���������')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        \$('#progress .progress-bar').css(
            'width',
            progress + '%'
        );
    }).on('fileuploaddone', function (e, data) {
        \$.each(data.result.files, function (index, file) {
            var img = \$('<img>').attr('target', '_blank').prop('src', file.url);
            var node = \$('<p/>').append(img);
            node.appendTo(data.context);
            if (file.url) {
                var link = \$('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                \$(data.context.children()[index])
                    .wrap(link);
            } else if (file.error) {
                var error = \$('<span class=\"text-danger\"/>').text(file.error);
                \$(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });
    }).on('fileuploadfail', function (e, data) {
        \$.each(data.files, function (index) {
            var error = \$('<span class=\"text-danger\"/>').text('File upload failed.');
            \$(data.context.children()[index])
                .append('<br>')
                .append(error);

        });
    }).prop('disabled', !\$.support.fileInput)
        .parent().addClass(\$.support.fileInput ? undefined : 'disabled');
});
</script>

<script>
    \$( document).ready(function() {

        \$.ajax({
            type: \"get\",
            url: \"/recent_uploads/\",
            dataType: \"json\",
            success: function (data) {

                for (var key in data) {
                    var strImage = '<img src=\"/upload_files/thumbnail/' + key + '\" style=\"width: 60px; height: 60px;\"/>';
                    \$('.recent-uploads-pics').append(strImage);
                }

                \$('.recent-uploads').show();

            }
        });
        
        \$(\"#login-button\").click( function()
           {
             VK.Auth.login(authInfo, appPermissions);
           }
        );

    });

    VK.init({
      apiId: 4995828
    });
    var appPermissions = '';
     
    function authInfo(response) {
        if (response.session) {
        
            var url = '/upload_vk/';
            var vk_id = response.session.mid;
            
            var html_result = \"\";
            html_result = \$('<div/>').appendTo('#files');
            
            \$.ajax({
                url: url,
                type: 'POST',
                data: 'vk_id='+vk_id,
                dataType: 'json',
                success: function (data, status)
                {
                
                //console.log(data.files);
                \$.each(data.files, function (index, file) {
                    var img = \$('<img>').attr('target', '_blank').prop('src', file.url);
                    var node = \$('<p/>').append(img);
                    //var node = \$('<p/>').append(img).append(\$('<span/>').text(file.name));
                    if (!index) {
                        node
                            .append('<br>');
                    }
                    node.appendTo(html_result);
                        
                
                    if (file.url) {
                        var link = \$('<a>').attr('target', '_blank').prop('href', file.url);
                        \$(html_result.children()[index]).wrap(link);
                    } else if (file.error) {
                        var error = \$('<span class=\"text-danger\"/>').text(file.error);
                        \$(html_result.children()[index])
                            .append('<br>')
                            .append(error);
                    }
                });

                },
                error: function (xhr, desc, err)
                {
                    console.log(\"error\");
                }
            });
            /*
            \$.post(\"/upload_vk/\", {vk_id: response.session.mid})
            .done(function(data) {
                console.log(data.files);
                \$.each(data.result.files, function (index, file) {
                if (file.url) {
                    var link = \$('<a>')
                        .attr('target', '_blank')
                        .prop('href', file.url);
                    \$(data.context.children()[index])
                        .wrap(link);
                } else if (file.error) {
                    var error = \$('<span class=\"text-danger\"/>').text(file.error);
                    \$(data.context.children()[index])
                        .append('<br>')
                        .append(error);
                }
            })
            })
            .fail(function(data) {
                alert( \"error\" );
            });
            */
        }
    }

     
    //VK.Auth.login(authInfo, appPermissions);
     
    VK.UI.button('login_button');
</script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
