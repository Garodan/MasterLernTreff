$( document ).ready(function() {
  'use strict';

  // UPLOAD CLASS DEFINITION
  // ======================

  var dropZone = document.getElementById('drop-zone');
  var uploadForm = document.getElementById('js-upload-form');

  var startUpload = function(files) {
    var gewaehlteDatei = files;
    var output = [];

    var fd = new FormData();

    for (var i = 0, f; f=gewaehlteDatei[i]; i++){
      fd.append("file" + i, f);
    }


    $.ajax({
      url: "php/upload.php",
      type: "POST",
      data: fd,
      processData: false,
      contentType: false,
      success: function(res) {
        document.getElementById('list').innerHTML= res;
      },
      error: function(res) {
        alert("Ein Fehler ist aufgetreten!  ¯\\_(ツ)_/¯");
      }
    });
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
