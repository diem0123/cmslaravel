/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:	 
	config.filebrowserBrowseUrl = '../../backend/ckfinder/ckfinder.html';
   config.filebrowserImageBrowseUrl = '../../backend/ckfinder/ckfinder.html?type=Images';
   config.filebrowserFlashBrowseUrl = '../../backend/ckfinder/ckfinder.html?type=Flash';
   config.filebrowserUploadUrl = '../../backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
   config.filebrowserImageUploadUrl = '../../backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
   config.filebrowserFlashUploadUrl = '../../backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
	 config.allowedContent = true;
	 config.removeFormatAttributes = '';	 
	 config.language = 'vi';
	// config.uiColor = '#AADC6E';
	config.width = '800px';
	config.height = '350px';	
	config.toolbar = [	

{ name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },

{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote',
                               '-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock' ] },
							   
{ name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },		

{ name: 'styles', items : [ 'Format','Font','FontSize' ] },
 
{ name: 'colors', items : [ 'TextColor','BGColor' ] },

{ name: 'links', items : [ 'Link','Unlink','Anchor' ] },

{ name: 'insert', items : [ 'Image','Table','HorizontalRule','SpecialChar','Iframe' ] },

'/',					   

{ name: 'document', items : [ 'NewPage','DocProps','Preview','Print','-','Templates' ] },
 
{ name: 'editing', items : [ 'Find','Replace','-','SelectAll' ] },  
 
{ name: 'tools', items : [ 'Maximize', 'ShowBlocks', 'Source' ] } 
	    
	];
};
