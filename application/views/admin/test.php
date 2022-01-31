<a href="#" nama="nama aja" class="btn-hapus">hapus</a>

<button class="first">Title Only</button>
<button class="second">Title and Text</button>
<button class="third">Title, Text and Icon</button>

<Script type="text/javascript">
    
    document.querySelector(".first").addEventListener('click', function(){
        Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
});

document.querySelector(".second").addEventListener('click', function(){
  Swal.fire("Our First Alert", "With some body text!");
});

document.querySelector(".third").addEventListener('click', function(){
  Swal.fire("Our First Alert", "With some body text and success icon!", "success");
});
</Script>