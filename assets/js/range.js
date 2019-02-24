var $body = $('body'),  
  $range = $('.range'),
  prefs = ['webkit-slider-runnable-track', 'moz-range-track', 'ms-track'];

var getTrackStyle = function (el, index) {  
  var curVal = el.value,
      val = (curVal - 1) * 12.5,
      style = '',
      $parent = $(el).parent();

  // Set active label
  $parent.find('.range-labels li').removeClass('active selected');

  var curLabel = $parent.find('.range-labels').find('li:nth-child(' + curVal + ')');

  curLabel.addClass('active selected');
  curLabel.prevAll().addClass('selected');

  // Change background gradient
  for (var i = 0; i < prefs.length; i++) {
    style += '.range-' + index + ' {background: linear-gradient(to right, #37adbf 0%, #37adbf ' + val + '%, #fff ' + val + '%, #fff 100%)}';
    style += '.range-' + index + ' input::-' + prefs[i] + '{background: linear-gradient(to right, #37adbf 0%, #37adbf ' + val + '%, #b2b2b2 ' + val + '%, #b2b2b2 100%)}';
  }

  return style;
}

$range.each(function (index, val) {
	var rangeClass = 'range-' + index;

	$(this).addClass(rangeClass);

	var sheet = document.createElement('style');

	$(sheet).addClass('range-style-' + index);

	document.body.appendChild(sheet);

	var $rangeInput = $('.'+rangeClass).find('input');

	$rangeInput.on('input', function () {
	  	$('style.range-style-' + index).html(getTrackStyle(this, index));
	});

	$('.'+rangeClass).parent().find('.range-labels li').on('click', function () {
	  var lbIndex = $(this).index();

	  $rangeInput.val(lbIndex + 1).trigger('input');
	});
});