$( document ).ready(function() {
    'use strict';

    // UPLOAD CLASS DEFINITION
    // ======================

    var dropZone = document.getElementById('drop-zone');
    var uploadForm = document.getElementById('js-upload-form');

    var startUpload = function(files) {
        console.log(files)
        var gewaehlteDatei = files;
        var output = [];
        for (var i = 0, f; f=gewaehlteDatei[i]; i++){
            output.push('<li><strong>', escape(f.name), '</strong> (', f.type || 'n/a',
            ') - ', f.size, ' bytes, last modified: ', f.lastModifiedDate.toLocaleDateString(),
            '</li>');
          }
          document.getElementById('list').innerHTML='<ul>' + output.join('') + '</ul>';
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
