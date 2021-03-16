
		var dispatchMask = IMask(document.getElementById('dispatch-mask'), {
    mask: [
      {
        mask: '+0 (000) 000-00-00',
        startsWith: '7',
        lazy: false,
      }
    ],
    
    dispatch: function (appended, dynamicMasked) {
      var number = (dynamicMasked.value + appended).replace(/\D/g,'');

      return dynamicMasked.compiledMasks.find(function (m) {
        return number.indexOf(m.startsWith) === 0;
      });
    }
  }
)
