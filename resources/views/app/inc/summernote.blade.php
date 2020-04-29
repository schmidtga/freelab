<script src="/js/modal.summernote.plugin.js"></script>
<script src="/js/summernote-image-attributes.js"></script>

<script>
    
    var QuoteButton = function (context) {
        var ui = $.summernote.ui;
        var button = ui.button({
            contents: '<i class="fas fa-quote-left"/> Citação',
            tooltip: 'Citação',
            click: function () {
                var blockquote = "<br><div class='blockquote'><div class='row quoteText'><div class='col-xs-12 col-sm-2 quote'><span></span></div><div class='col-xs-12 col-sm-10 text'><p>Exemplo de Citação para apagar e preencher novamente.</p></div></div><div class='author'>Autor Nome Sobrenome</div></div><br>";
                context.invoke('editor.pasteHTML', blockquote);
            }
        });
        return button.render();
    }

    var HRButton = function (context) {
        var ui = $.summernote.ui;
        var button = ui.button({
            contents: '<i class="fas fa-grip-lines"></i> Linha Azul',
            tooltip: 'Linha Azul',
            click: function () {
                var HR = "<hr>";
                context.invoke('editor.pasteHTML', HR);
            }
        });
        return button.render();
    }

    var Col2Button = function (context) {
        var ui = $.summernote.ui;
        var button = ui.button({
            contents: '<i class="fas fa-columns"/> 2 Colunas',
            tooltip: '2 Colunas',
            click: function () {
                var col2 = "<br><div class='row col2'><div class='col-xs-12 col-sm-6'></div><div class='col-xs-12 col-sm-6'></div></div><br>";
                context.invoke('editor.pasteHTML', col2);
            }
        });
        return button.render();
    }

    var Col2ImgTxtButton = function (context) {
        var ui = $.summernote.ui;
        var button = ui.button({
            contents: '<i class="fas fa-columns"/> 2 Img/Txt',
            tooltip: 'Imagem Texto',
            click: function () {
                var col2ImgTxt = "<br><div class='row col2ImgTxt'><div class='col-xs-12 col-sm-4'></div><div class='col-xs-12 col-sm-8'></div></div><br>";
                context.invoke('editor.pasteHTML', col2ImgTxt);
            }
        });
        return button.render();
    }

    var Col2TxtImgButton = function (context) {
        var ui = $.summernote.ui;
        var button = ui.button({
            contents: '<i class="fas fa-columns"/> 2 Txt/Img',
            tooltip: 'Texto Imagem',
            click: function () {
                var col2TxtImg = "<br><div class='row col2TxtImg'><div class='col-xs-12 col-sm-8'></div><div class='col-xs-12 col-sm-4'></div></div><br>";
                context.invoke('editor.pasteHTML', col2TxtImg);
            }
        });
        return button.render();
    }

    var Col3Button = function (context) {
        var ui = $.summernote.ui;
        var button = ui.button({
            contents: '<i class="fas fa-columns"/> 3 Colunas',
            tooltip: '3 Colunas',
            click: function () {
                var col3 = "<br><div class='row col3'><div class='col-xs-12 col-sm-4'></div><div class='col-xs-12 col-sm-4'></div><div class='col-xs-12 col-sm-4'></div></div><br>";
                context.invoke('editor.pasteHTML', col3);
            }
        });
        return button.render();
    }

    var CustomBtnButton = function (context) {
        var ui = $.summernote.ui;
        var button = ui.button({
            contents: '<i class="fas fa-circle"/> Botão',
            tooltip: 'Botão',
            click: function () {
                var customBtn = "<a href='#' class='button blue'>teste</a>";
                context.invoke('editor.pasteHTML', customBtn);
            }
        });
        return button.render();
    }
    
    // Define function to open filemanager window
    var lfm = function(options, cb) {
        var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
        window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
        window.SetUrl = cb;
        };

        // Define LFM summernote button
        var LFMButton = function(context) {
        var ui = $.summernote.ui;
        var button = ui.button({
            contents: '<i class="note-icon-picture"></i> ',
            tooltip: 'Insert image with filemanager',
            click: function() {

            lfm({type: 'image', prefix: '/laravel-filemanager'}, function(lfmItems, path) {
                lfmItems.forEach(function (lfmItem) {
                context.invoke('insertImage', lfmItem.url);
                });
            });

            }
        });
        return button.render();
    };

    $('.summernote').summernote({
        tabsize: 4,
        height: 350,
        dialogsInBody: true,
        toolbar: [
            ['style', ['style', 'bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
            ['fontname', ['fontname']],
            ['table', ['table']],
            ['insert', ['link', 'video']],
            ['popovers', ['lfm']],
            ['view', ['fullscreen', 'codeview', 'help']],
            ['custom', ['accordionSliderPlugin', 'quote', 'HR', 'customBtn', 'col2', 'Col2ImgTxt', 'Col2TxtImg', 'col3']],
        ],
        popover: {
            image: [
                ['custom', ['imageAttributes']],
                ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
                ['float', ['floatLeft', 'floatRight', 'floatNone']],
                ['remove', ['removeMedia']]
            ],
        },
        lang: 'en-US',
        imageAttributes:{
            icon:'<i class="fas fa-link"/>',
            removeEmpty:false,
            disableUpload: false
        },
        buttons: {
            quote: QuoteButton,
            HR: HRButton,
            customBtn: CustomBtnButton,
            col2: Col2Button,
            col3: Col3Button,
            Col2ImgTxt: Col2ImgTxtButton,
            Col2TxtImg: Col2TxtImgButton,
            lfm: LFMButton,
        },
    });

</script>