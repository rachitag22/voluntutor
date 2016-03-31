console.log('modal');

$('.card-existing').find('.interaction-card').find('.edit-request').on('click', function(event) {
  event.preventDefault();
  console.log('hello');

  var editClass = event.target.parentNode.parentNode.childNodes[1].childNodes[1].textContent;
  console.log(editClass);
  var editTeacher = event.target.parentNode.parentNode.childNodes[2].childNodes[1].textContent;
  console.log(editTeacher);
  var editDetails = event.target.parentNode.parentNode.childNodes[1].childNodes[2].textContent;
  console.log(editDetails);
  $('#edit-modal').modal();
});
