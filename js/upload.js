$( document ).ready(function() {
    'use strict';

    // UPLOAD CLASS DEFINITION
    // ======================

    var dropZone = document.getElementById('drop-zone');
    var uploadForm = document.getElementById('js-upload-form');

    var startUpload = function(files) {
      var gewaehlteDatei = files;
      var output = [];
      for (var i = 0, f; f=gewaehlteDatei[i]; i++){
          output.push('<a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>', escape(f.name), '</a>');
        }
        document.getElementById('list').innerHTML=output.join('');
        console.log(files)
    }

    uploadForm.addEventListener('submit', function(e) {
        var uploadFiles = document.getElementById('js-upload-files').files;

        e.preventDefault()
        startUpload(uploadFiles)
    })

    dropZone.ondrop = function(e) {
        e.preventDefault();
        this.className = 'upload-drop-zone';

        startUpload(e.dataTransfer.files)
    }

    dropZone.ondragover = function() {
        this.className = 'upload-drop-zone drop';
        return false;
    }

    dropZone.ondragleave = function() {
        this.className = 'upload-drop-zone';
        return false;
    }

});
