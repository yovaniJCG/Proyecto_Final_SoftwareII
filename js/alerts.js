
    /**Alert de eliminar***/

$('.btn_del').on('click', function(e){
  e.preventDefault();
  const href = $(this).attr('href');

  Swal.fire({
  title: 'Seguro que quieres eliminar?',
  text: "No volveras a ver este registro",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, Eliminar!'
}).then((result) => {
  if (result.value) {
    document.location.href = href;
  }
})
});

const flashdata = $('.flash-data').data('flashdata');
if(flashdata) {
  Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})
}
/*************END ALERT ELIMINAR******************/