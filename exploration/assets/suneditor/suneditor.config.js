SUNEDITOR.create('editor', {
  // plugins to load
  plugins: [
    font,
    fontSize,
    formatBlock,
    fontColor,
    hiliteColor,
    align,
    lineHeight,
    horizontalRule,
    list,
    table,
    link,
    image,
    video,
    template,
    textStyle,
    blockquote,
    paragraphStyle,
    math, // You must add the 'katex' library at options to use the 'math' plugin.
    imageGallery
  ],
  // set the initial value
  value: 'Hello',
  // default tag name of the editor.
  defaultTag: 'p',
  // When recording the history stack, this is the delay time(miliseconds) since the last input
  historyStackDelayTime: 400,
  // Add tags to the default tags whitelist of editor.
  // _defaultTagsWhitelist : 'br|p|div|pre|blockquote|h[1-6]|ol|ul|li|hr|figure|figcaption|img|iframe|audio|video|table|thead|tbody|tr|th|td|a|b|strong|var|i|em|u|ins|s|span|strike|del|sub|sup'
  addTagsWhitelist: '',
  // blacklist
  tagsBlacklist: null,
  pasteTagsBlacklist: null,
  // Whitelist of tags when pasting. 
  // _editorTagsWhitelist  : _defaultTagsWhitelist + addTagsWhitelist
  // ex) 'p|h[1-6]'
  pasteTagsWhitelist: _editorTagsWhitelist,
  // Blacklist of the editor default tags. 
  // e.g. 'h1|h2' 
  tagsBlacklist: null,
  //  Blacklist of tags when pasting. 
  // e.g. 'h1|h2' 
  pasteTagsBlacklist: null,

  // Add attributes whitelist of tags that should be kept undeleted from the editor.
  // -- Fixed whitelist --
  // Native attributes: 'contenteditable|colspan|rowspan|target|href|src|class|type'
  // Editor attributes: 'data-format|data-size|data-file-size|data-file-name|data-origin|data-align|data-image-link|data-rotate|data-proportion|data-percentage|origin-size'
  // ex) {
  //  'all': 'style', // Apply to all tags
  //  'input': 'checked' // Apply to input tag
  // }              
  attributesWhitelist: null,
  // blacklist
  attributesBlacklist: null,
  // language object
  lang: lang['en'],
  // change the tag of the default text button. 
  textTags: { bold: 'STRONG', underline: 'U', italic: 'EM', strike: 'DEL' },
  // change default formatBlock array.
  formats: ['p', 'div', 'blockquote', 'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
  // show the number of characters in the editor.   
  charCounter: false,
  // null || 'char' || 'byte' || 'byte-html'
  charCounterType: 'char',
  // text to be displayed in the "charCounter" area of the bottom bar
  charCounterLabel: null,
  // the maximum number of characters allowed to be inserted into the editor.
  maxCharCount: null,
  // the min-width size of the editor.
  minWidth: null,
  // the max-width size of the editor.
  maxWidth: null,
  // the size of the total uploadable images (in bytes).
  imageUploadSizeLimit: null,
  // if true, multiple images can be selected.
  imageMultipleFile: false,
  // allowed extensions like '.jpg, .png ..'
  imageAccept: "*",
  // The url of the image gallery, if you use the image gallery.
  // When "imageUrlInput" is true, an image gallery button is created in the image modal.
  // You can also use it by adding 'imageGallery' to the button list.
  imageGalleryUrl: null,
  // Http Header when get image gallery. 
  imageGalleryHeader: null,
  // 'classic', 'inline', 'balloon', 'balloon-always'
  mode: 'classic',
  // if true, the editor is set to RTL(Right To Left) mode.
  rtl: false,
  // deletes other attributes except for the property set at the time of line break.
  lineAttrReset: '',
  // toolbar width
  toolbarWidth: 'max-content',
  // 'cell', 'top'
  tableCellControllerPosition: 'cell',
  // if true, disables the interaction of the editor and tab key.
  tabDisable: false,
  // You can disable shortcuts.
  // e.g. ['bold', 'strike', 'underline', 'italic', 'undo', 'indent']
  shortcutsDisable: [],
                    
  // If false, hide the shortcuts hint.
  shortcutsHint: true,
  // A custom HTML selector placing the toolbar inside.
  toolbarContainer: null,
  // Sets to -1 or false or null to turn off
  // Sticky Toolbar
  // Default: 0px (offset)
  stickyToolbar: 0,
  // The toolbar is rendered hidden
  hideToolbar: false,
  // top offset value of "full Screen"
  fullScreenOffset: '',
  // the position property of suneditor.   
  position: null,
  // places content in the iframe
  iframe : false,
  // allows the usage of HTML, HEAD, BODY tags and DOCTYPE declaration.
  fullPage: false,
  // Attributes of the iframe
  iframeAttributes: null,
  // CSS file to apply inside the iframe
  iframeCSSFileName: 'suneditor',
  // e.g. <h1>Preview Template</h1> {{contents}} <div>_Footer_</div>
  previewTemplate: null,
  // A template of the "print".
  // The {{contents}} part in the HTML string is replaced with the contents of the editor.
  // e.g. "<div style='width:auto; max-width:1080px; margin:auto;'><h1>Print Template</h1> {{contents}} <div>_Footer_</div></div>"
  printTemplate: null,
  // CodeMirror option object
  codeMirror: null,
  // katex options
  // https://github.com/KaTeX/KaTeX
  katex: null,
  // Math plugin font size list.
  mathFontSize: [
    {text: '1', value: '1em', default: true},
    {text: '1.5', value: '1.5em'},
    {text: '2', value: '2em'},
    {text: '2.5', value: '2.5em'}
  ],
  // Shows the bottom resizing bar.
  resizingBar: true,
  // Font Family array
  font: ['Arial', 'Comic Sans MS', 'Courier New', 'Impact', 'Georgia','tahoma', 'Trebuchet MS', 'Verdana'],
  // Font Size array
  fontSize: [8, 9, 10, 11, 12, 14, 16, 18, 20, 22, 24, 26, 28, 36, 48, 72],
  // Font size unit
  fontSizeUnit: 'px',
  // A list of drop-down options for the 'align' plugin
  alignItems: ['right', 'center', 'left', 'justify'],
  // Enables video resizing
  videoResizing: true,
  // width/height of the video
  videoWidth: 560,
  videoHeight: '56.25%',
  // If true, video size can only be scaled by percentage.
  videoSizeOnlyPercentage: false,
  // Choose whether to video rotation buttons display.
  videoRotation: false,
  // The default aspect ratio of the video.
  videoRatio: 0.5625,
  // Video ratio selection options.
  videoRatioList:  [ {name: 'Classic Film 3:2', value: 0.6666}, {name: 'HD', value: 0.5625} ],
  // Choose whether the video height input is visible.
  videoHeightShow: true,
  // Choose whether the video align radio buttons are visible
  videoAlignShow: true,
  // Choose whether the video ratio options is visible.
  videoRatioShow: true,
  // the query string of a YouTube embedded URL. 
  youtubeQuery: '',
  // whether to create a file input tag in the video upload window.
  videoFileInput: false,
  // whether to create a video url input tag in the video upload window.
  // if the value of videoFileInput is false, it will be unconditionally.
  videoUrlInput: true,
  // Http Header when uploading videos.  
  videoUploadHeader: null,
  // the video upload to server mapping address.
  videoUploadUrl: null,
  // the size of the total uploadable videos (in bytes).
  videoUploadSizeLimit:  null,
  // if true, multiple videos can be selected. 
  videoMultipleFile:  false,
  // define "Attributes" of the video tag.
  videoTagAttrs: null,
  // define "Attributes" of the iframe tag
  videoIframeAttrs: null,
  // allowed extensions like '.mp4, .avi ..'
  videoAccept: "*",
  // default width of the audio frame.  
  audioWidth: '300px',
  // default height of the audio frame. 
  audioHeight: '300px',
  // whether to create a file input tag in the audio upload window
  audioFileInput: false,
  // whether to create a audio url input tag in the audio upload window.
  audioUrlInput: true,
  // Http Header when uploading audios. 
  audioUploadHeader: null,
  // upload url
  audioUploadUrl: null,
  // the size of the total uploadable audios (in bytes).
  // invokes the "onAudioUploadError" method.
  audioUploadSizeLimit: null,
  // if true, multiple audios can be selected.
  audioMultipleFile: false,
  // define "Attributes" of the audio tag.  
  audioTagAttrs: null,
  // allowed extensions like '.mp3, .wav ..'
  audioAccept: "*",
  // default protocol for the links. ('link', 'image', 'video', 'audio')
  linkProtocol: null,
  // default checked value of the "Open in new window" checkbox
  linkTargetNewWindow: false,
  // the placeholder text.  
  placeholder: null,
  // Activate the media[image, video, audio] selection status immediately after inserting the media tag.
  mediaAutoSelect: true,
  // custom icons
  // {
  //   bold: 'B',
  //   table: '',
  //   insert_row_above: ''
  // }
  icons: null,
  // defines "rel" attribute list of anchor tag
  // e.g. ['author', 'external', 'nofollow']
  linkRel: [],
  // defines default "rel" attributes of anchor tag.
  // e.g.
  // {
  //   default: 'nofollow', // Default rel
  //   check_new_window: 'noreferrer noopener', // When "open new window" is checked 
  //   check_bookmark: 'bookmark' // When "bookmark" is checked 
  // },
  linkRelDefault: {},
  // If true, disables the automatic prefixing of the host URL to the value of the link
  linkNoPrefix: false,
  // Defines the hr items.
  hrItems: [
    {name: lang.toolbar.hr_solid, class: '__se__solid'},
    {name: lang.toolbar.hr_dashed, class: '__se__dashed'},
    {name: lang.toolbar.hr_dotted, class: '__se__dotted'}
  ],
  // Choose whether the image height input is visible.
  imageHeightShow: true,
  // Choose whether the image align radio buttons are visible.
  imageAlignShow: true,
  // enables image resizing
  imageResizing: true,
  // image width/height
  imageWidth: 'auto',
  imageHeight: 'auto',
  // If true, image size can only be scaled by percentage
  imageSizeOnlyPercentage: true,
  // Shows image rotation buttons
  imageRotation: false,
  // image file input
  imageFileInput: true,
  // image url input
  imageUrlInput: true,
  // image upload url
  imageUploadUrl: null,
  // Http Header when uploading images
  imageUploadHeader: null,
  // height/width of the editor
  height: '',
  width: '',
  // min height/width of the editor
  minHeight: null,
  minWidth: null,
  // color array of color picker
  // e.g. [['#ccc', '#dedede', 'OrangeRed', 'Orange', 'RoyalBlue', 'SaddleBrown'], ['SlateGray', 'BurlyWood', 'DeepPink', 'FireBrick', 'Gold', 'SeaGreen']]
  colorList: null,
  // line-height array
  lineHeights: [
    {text: '1', value: 1},
    {text: '1.15', value: 1.15},
    {text: '1.5', value: 1.5},
    {text: '2', value: 2}
  ],
  // Displays the current node structure to resizingBar
  showPathLabel: true,
  // Enable/disable resize function of bottom resizing bar
  resizeEnable: true,
  // A custom HTML selector placing the resizing bar inside
  resizingBarContainer: null,
  // Size of background area when activating dialog window
  popupDisplay: '',
  // CSS display property
  display: 'block',
  // show/hide toolbar icons
  buttonList: [
    ['undo', 'redo'],
    ['font', 'fontSize', 'formatBlock'],
    ['paragraphStyle', 'blockquote'],
    ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'],
    ['fontColor', 'hiliteColor', 'textStyle'],
    ['removeFormat'],
    '/', // Line break
    ['outdent', 'indent'],
    ['align', 'horizontalRule', 'list', 'lineHeight'],
    ['table', 'link', 'image', 'video', 'audio' /** ,'math' */], // You must add the 'katex' library at options to use the 'math' plugin.
    /** ['imageGallery'] */ // You must add the "imageGalleryUrl".
    ['fullScreen', 'showBlocks', 'codeView'],
    ['preview', 'print'],
    ['save', 'template']
  ]
  // execute a function when the save button is clicked.
  // callBackSave: function(){}
  
})
// API methods:

var suneditor = SUNEDITOR.create('Editor');
// Copies the contents of the suneditor into a [textarea]
suneditor.save();
// Updates options
suneditor.setOptions(OPTIONS);
// Gets the suneditor's context object. Contains settings, plugins, and cached element objects
suneditor.getContext();
// Gets the contents of the suneditor
suneditor.getContents();
// Changes the contents of the suneditor
editor.setContents('set contents');
// Inserts an HTML element or HTML string or plain string at the current cursor position
suneditor.insertHTML('<img src="https://suneditor.com/sample/img/sunset.jpg">');
// Change the contents of the suneditor
suneditor.setContents('set contents');
// Switch to or off "ReadOnly" mode
suneditor.appendContents('append contents');
// readOnly(value)
suneditor.readOnly(value);
// Upload images using image plugin
editor.insertImage(FileList);
// Disable the suneditor
suneditor.disabled();
// Enabled the suneditor
suneditor.enabled();
// Hide the suneditor
suneditor.hide();
// Show the suneditor
suneditor.show();
    
// Destroy the suneditor
suneditor.destroy();
// Open a notice area
suneditor.noticeOpen('test notice');
// Close a notice area
suneditor.noticeClose();
// Gets a list of images uploaded to the editor
/** 
 * {
 *  src: imgage src
 *  index: data index
 *  name: file name
 *  size: file size
 *  select: select function
 *  delete: delete function
 * }
 **/
suneditor.getImagesInfo();


editor.onload = function (core, reload) {
    console.log('onload-core', core)
    console.log('onload-reload', reload)    
}
suneditor.onScroll = function (e) { console.log('onScroll', e) }
editor.onMouseDown = function (e, core) { console.log('onMouseDown', e) }
suneditor.onClick = function (e) { console.log('onClick', e) }
editor.onInput = function (e, core) { console.log('onInput', e) }
suneditor.onKeyDown = function (e) { console.log('onKeyDown', e) }
suneditor.onKeyUp = function (e) { console.log('onKeyUp', e) }
suneditor.onDrop = function (e) { console.log('onDrop', e) }
editor.onSave = function (contents, core) {console.log(contents) }
suneditor.onChange = function (contents) { console.log('onChange', contents) }
editor.onFocus = function (e, core) { console.log('onFocus', e) }
editor.onBlur = function (e, core) { console.log('onBlur', e) }
editor.onPaste = function (e, cleanData, maxCharCount) { console.log('onPaste', e, cleanData, maxCharCount) }
editor.onCopy = function (e, clipboardData, core) { console.log('onCopy', e) }
editor.onCut = function (e, clipboardData, core) { console.log('onCut', e) }
// Called before the image is uploaded
// If false is returned, no image upload is performed.
/**
 * files: Files array
 * info: Input information
 * core: Core object
 * return {Boolean}
 */
editor.onImageUploadBefore: function (files, info, core) {
    console.log('files', files);
    console.log('info', info);
    return Boolean
}
// Called before the video is uploaded
// If true is returned, the internal upload process runs normally.
// If false is returned, no video(iframe, video) upload is performed.
// If new fileList are returned,  replaced the previous fileList
// If undefined is returned, it waits until "uploadHandler" is executed.
/** 
 * files: Files array
 * info: {
 * - inputWidth: Value of width input
 * - inputHeight: Value of height input
 * - align: Align Check Value
 * - isUpdate: Update video if true, create video if false
 * - element: If isUpdate is true, the currently selected video.
 * }
 * core: Core object,
 * uploadHandler: If undefined is returned, it waits until "uploadHandler" is executed.
 *                "uploadHandler" is an upload function with "core" and "info" bound. (plugin.upload.bind(core, info))
 *                [upload files] : uploadHandler(files or [new File(...),])
 *                [error]        : uploadHandler("Error message")
 *                [Just finish]  : uploadHandler()
 *                [directly register] : uploadHandler(response) // Same format as "videoUploadUrl" response
 *                                   ex) {
 *                                      // "errorMessage": "insert error message",
 *                                      "result": [ { "url": "...", "name": "...", "size": "999" }, ]
 *                                   }
 * return {Boolean|Array|undefined}
 */
// Called before the audio is uploaded
// If true is returned, the internal upload process runs normally.
// If false is returned, no audio upload is performed.
// If new fileList are returned,  replaced the previous fileList
// If undefined is returned, it waits until "uploadHandler" is executed.
/** 
 * files: Files array
 * info: {
 * - isUpdate: Update audio if true, create audio if false
 * - currentaudio: If isUpdate is true, the currently selected audio.
 * }
 * core: Core object,
 * uploadHandler: If undefined is returned, it waits until "uploadHandler" is executed.
 *                "uploadHandler" is an upload function with "core" and "info" bound. (plugin.upload.bind(core, info))
 *                [upload files] : uploadHandler(files or [new File(...),])
 *                [error]        : uploadHandler("Error message")
 *                [Just finish]  : uploadHandler()
 *                [directly register] : uploadHandler(response) // Same format as "audioUploadUrl" response
 *                                   ex) {
 *                                      // "errorMessage": "insert error message",
 *                                      "result": [ { "url": "...", "name": "...", "size": "999" }, ]
 *                                   }
 * return {Boolean|Array|undefined}
 */
// Called when the audio is is uploaded, updated, deleted
// -- arguments is same "onImageUpload" --
editor.onAudioUpload = function (targetElement, index, state, info, remainingFilesCount, core) {
  console.log(`targetElement:${targetElement}, index:${index}, state('create', 'update', 'delete'):${state}`)
  console.log(`info:${info}, remainingFilesCount:${remainingFilesCount}`)
}
// Called when the video(iframe, video) upload failed
// -- arguments is same "onImageUploadError" --
editor.onVideoUploadError = function (errorMessage, result, core) {
  alert(errorMessage)
  return Boolean
}
// Called when the audio upload failed
// -- arguments is same "onImageUploadError" --
editor.onAudioUploadError = function (errorMessage, result, core) {
  alert(errorMessage)
  return Boolean
}
// Called when the editor is resized using the bottom bar
// height, prevHeight are number
editor.onResizeEditor = function (height, prevHeight, core) {
  console.log(`height: ${height}, prevHeight: ${prevHeight}`)
}
// Called after the "setToolbarButtons" invocation
// Can be used to tweak buttons properties (useful for custom buttons)
/**
 * buttonList: buttonList array 
 * core: Core object
 */
editor.onSetToolbarButtons = function (buttonList, core) {
  console.log(`buttonList: ${buttonList}`)
}
//**
* @description It replaces the default callback function of the video upload
* xmlHttp: xmlHttpRequest object
* info: Input information
* - inputWidth: Value of width input
* - inputHeight: Value of height input
* - align: Align Check Value
* - isUpdate: Update video if true, create video if false
* - element: If isUpdate is true, the currently selected video.
* core: Core object
*/
editor.videoUploadHandler = function (xmlHttp, info, core) {
  // Editor code
  const response = JSON.parse(xmlHttp.responseText);
  if (response.errorMessage) {
      this.plugins.video.error.call(this, response.errorMessage, response);
  } else {
      this.plugins.video.register.call(this, info, response);
  }
}
/**
* @description It replaces the default callback function of the audio upload
* xmlHttp xmlHttpRequest object
* info Input information
* - isUpdate: Update audio if true, create audio if false
* - element: If isUpdate is true, the currently selected audio.
* core Core object
*/
editor.audioUploadHandler = function (xmlHttp, info, core) {
  // Editor code
  const response = JSON.parse(xmlHttp.responseText);
  if (response.errorMessage) {
      this.plugins.audio.error.call(this, response.errorMessage, response);
  } else {
      this.plugins.audio.register.call(this, info, response);
  }
}
// Called just after the controller is positioned and displayed on the screen.
// controller - editing elements displayed on the screen [image resizing, table editor, link editor..]]
/**
* name: The name of the plugin that called the controller
* controllers: Array of Controller elements
* core: Core object
*/
editor.showController = function (name, controllers, core) {
  console.log('plugin name', name);
  console.log('controller elements', controllers);
}
// It replaces the default callback function of the image upload
/**
 * response: Response object
 * info (Input information): {
 * - linkValue: Link url value
 * - linkNewWindow: Open in new window Check Value
 * - inputWidth: Value of width input
 * - inputHeight: Value of height input
 * - align: Align Check Value
 * - isUpdate: Update image if true, create image if false
 * - currentImage: If isUpdate is true, the currently selected image.
 * }
 * core: Core object
 */
editor.imageUploadHandler = function (response, info, core) {
    // Example of upload method
    const res = JSON.parse(response.responseText);
    
    // Error
    if (res.errorMessage) {
        if (typeof editor.onImageUploadError === 'function') {
            if (core.onImageUploadError(res.errorMessage, res.result)) {
                core.notice.open.call(core, res.errorMessage);
            }
        } else {
            core.notice.open.call(core, res.errorMessage);
        }
        /** 
         * You can do the same thing using the core private function.
         * The core._imageUploadError function returns false when "editor.onImageUploadError" function is not defined.
        */
        // if (core._imageUploadError(res.errorMessage, res.result)) {
        //     core.notice.open.call(core, res.errorMessage);
        // }
    }
    // Success
    else {
        const fileList = res.result;
        const imagePlugin = core.plugins.image;
        for (let i = 0, len = fileList.length, file; i < len; i++) {
            // The file object must have name and size attributes.
            file = {name: fileList[i].name, size: fileList[i].size};
            // For existing image updates, the "info" attributes are predefined in the element.
            // The "imagePlugin.update_src" function is only changes the "src" attribute of an image.
            if (info.isUpdate) imagePlugin.update_src.call(core, fileList[i].url, info.currentImage, file);
            // The image is created and a format element(p, div..) is added below it.
            else imagePlugin.create_image.call(core, fileList[i].url, info.linkValue, info.linkNewWindow, info.inputWidth, info.inputHeight, info.align, file);
        }
    }
}
// An event when toggling between code view and wysiwyg view.
/**
 * isCodeView: Whether the current code view mode
 * core: Core object
 */
editor.toggleCodeView = function (isCodeView, core) {
  console.log('isCodeView', isCodeView);
}
// An event when toggling full screen.
/**
 * isFullScreen: Whether the current full screen mode
 * core: Core object
 */
editor.toggleFullScreen = function (isFullScreen, core) {
  console.log('isFullScreen', isFullScreen);
}
// Called when the video(iframe) is is uploaded, updated, deleted
/**
* targetElement: Current iframe element
* index: Uploaded index
* state: Upload status ('create', 'update', 'delete')
* videoInfo: {
* - index: data index
* - select: select function
* - delete: delete function
* - element: iframe element
* - src: src attribute of iframe tag
* }
* remainingFilesCount: Count of remaining files to upload (0 when added as a url)
* core: Core object
*/
editor.onVideoUpload = function (targetElement, index, state, videoInfo, remainingFilesCount, core) {
  console.log(`targetElement:${targetElement}, index:${index}, state('create', 'update', 'delete'):${state}`)
  console.log(`videoInfo:${videoInfo}, remainingFilesCount:${remainingFilesCount}`)
}
// Called before the editor's default event action
editor.showInline = function (toolbar, context) {
  console.log('toolbar', toolbar);
  console.log('context', context);
}
// Called when the image is uploaded or the uploaded image is deleted.
suneditor.onImageUpload = function (targetImgElement, index, isDelete, imageInfo) {
  console.log('targetImgElement :' + targetImgElement + ', index : ' + index + ', isDelete : ' + isDelete)
  console.log(imageInfo)
}
// Called when the image is upload failed.
// If you return false, the default notices are not called.
suneditor.onImageUploadError = function (errorMessage, result) {
  alert(errorMessage)
}