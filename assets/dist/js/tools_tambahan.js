$(document).on("click", ".show-delete", function(e) {
  
  let url = $(this).data('link');

  bootbox.confirm({
    title: "Warning!",
    message: "Are you sure to delete this data?",
    callback: function(result) {
      if(result == true){
        //Jika tombol OK
        window.location.href = url;
      }
      else{
        bootbox.hideAll();
      }
    }

  })
});