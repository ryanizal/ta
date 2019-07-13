$(document).ready(function () {
	$('.fileuploader-area').fileuploader({
		extensions: ['jpg', 'jpeg', 'png'],
		fileMaxSize: 2,
		limit: 3,
		changeInput: ' ',
		theme: 'thumbnails',
		enableApi: true,
		addMore: true,
		thumbnails: {
		  box: '<div class="fileuploader-items">' +
		    '<ul class="fileuploader-items-list">' +
		    '<li class="fileuploader-thumbnails-input"><div class="fileuploader-thumbnails-input-inner"><i>+</i></div></li>' +
		    '</ul>' +
		    '</div>',
		  item: '<li class="fileuploader-item">' +
		    '<div class="fileuploader-item-inner">' +
		    '<div class="type-holder">${extension}</div>' +
		    '<div class="actions-holder">' +
		    '<a class="fileuploader-action fileuploader-action-remove" title="${captions.remove}"><i></i></a>' +
		    '</div>' +
		    '<div class="thumbnail-holder">' +
		    '${image}' +
		    '<span class="fileuploader-action-popup"></span>' +
		    '</div>' +
		    '<div class="content-holder"><h5>${name}</h5><span>${size2}</span></div>' +
		    '<div class="progress-holder">${progressBar}</div>' +
		    '</div>' +
		    '</li>',
		  item2: '<li class="fileuploader-item">' +
		    '<div class="fileuploader-item-inner">' +
		    '<div class="type-holder">${extension}</div>' +
		    '<div class="actions-holder">' +
		    '<a href="${file}" class="fileuploader-action fileuploader-action-download" title="${captions.download}" download><i></i></a>' +
		    '<a class="fileuploader-action fileuploader-action-remove" title="${captions.remove}"><i></i></a>' +
		    '</div>' +
		    '<div class="thumbnail-holder">' +
		    '${image}' +
		    '<span class="fileuploader-action-popup"></span>' +
		    '</div>' +
		    '<div class="content-holder"><h5>${name}</h5><span>${size2}</span></div>' +
		    '<div class="progress-holder">${progressBar}</div>' +
		    '</div>' +
		    '</li>',
		  startImageRenderer: true,
		  canvasImage: false,
		  _selectors: {
		    list: '.fileuploader-items-list',
		    item: '.fileuploader-item',
		    start: '.fileuploader-action-start',
		    retry: '.fileuploader-action-retry',
		    remove: '.fileuploader-action-remove'
		  },
		  onItemShow: function(item, listEl, parentEl, newInputEl, inputEl) {
		    var plusInput = listEl.find('.fileuploader-thumbnails-input'),
		      api = $.fileuploader.getInstance(inputEl.get(0));

		    var count = api.getAppendedFiles().length + api.getChoosedFiles().length;

		    plusInput.insertAfter(item.html)[api.getOptions().limit && count >= api.getOptions().limit ? 'hide' : 'show']();

		    var selectedName = 'selected-' + api.inputName + '[]',
		    	selectedId = item.data.source_id;

		    if (selectedId !== undefined) {
		    	api.context.parent().append('<input type="hidden" class="selected-'+ api.inputName + '-' + selectedId +'" name="'+ selectedName +'" value="'+ selectedId +'">');
		    }

		    if (item.format == 'image') {
		      item.html.find('.fileuploader-item-icon').hide();
		    }
		  }
		},
		dragDrop: {
		  container: '.fileuploader-thumbnails-input'
		},
		beforeRender: function(parentEl, inputEl) {
		  var api = $.fileuploader.getInstance(inputEl.get(0)),
		    context = parentEl.find('.fileuploader-area');

		  api.context = context
		  api.inputName = context.attr('name').replace('[]', '');
		},
		afterRender: function(listEl, parentEl, newInputEl, inputEl) {
		  var plusInput = listEl.find('.fileuploader-thumbnails-input'),
		    api = $.fileuploader.getInstance(inputEl.get(0))

		  plusInput.on('click', function() {
		    api.open();
		  });
		},
		onRemove: function(item, listEl, parentEl, newInputEl, inputEl) {
		  var plusInput = listEl.find('.fileuploader-thumbnails-input'),
		    api = $.fileuploader.getInstance(inputEl.get(0)),
		    selectedId = item.data.source_id;

	      var selectedEl = api.context.parent().find('.selected-' + api.inputName + '-' + selectedId);

	      if (selectedId !== undefined && selectedEl) {
	      	selectedEl.remove();
	      }

		  if (api.getOptions().limit && api.getChoosedFiles().length - 1 < api.getOptions().limit)
		    plusInput.show();
		},
	});
});