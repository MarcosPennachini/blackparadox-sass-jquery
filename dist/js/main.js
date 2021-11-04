// console.log('HOla');
// $('#portfolioLink').click(function (e) {
//   e.preventDefault;
//   $('#render').load('portfolio.php');
// });
const step = document.getElementsByClassName('step');
let stepCount = step.length;
let current_step = 0;

$(document).ready(function () {
  $('#slippry').slippry({
    captions: false,
    pager: false,
  });
  $('#btn1').on('click', function () {
    console.log('clicked');
    $('.badge').remove();
    $('#title').append('<span class="badge bg-primary id="badge1">Btn1</span>');
    $('#rowButtons').hide();

    $('#stepsDraw').show();
    $('#divTablas').show();
    $('#formButtons').show();
    $(step[current_step]).show();
    // if (current_step == 0) {
    //   $('#anterior').on('click', function () {
    //     $('.badge').remove();
    //     $('#rowButtons').show();
    //     $('#divTablas').hide();
    //     $('#formButtons').hide();
    //     $('#stepsDraw').hide();
    //   });
    // }
  });
  $('#siguiente').on('click', function () {
    current_step++;
    let prev_step = current_step - 1;
    if (current_step > 0 && current_step <= stepCount) {
      $(step[current_step]).show();
      $(step[prev_step]).hide();
      console.log(current_step);
      $(`#s${current_step + 1}`)
        .removeClass('bg-secondary')
        .css('background-color', 'aquamarine');

      if (current_step == stepCount) {
        $('#siguiente').text('Guardar');
        $('#siguiente').removeClass('btn-info').addClass('btn-success');
      }
    } else if (current_step > stepCount) {
      //do something
    }
  });

  $('#anterior').on('click', function () {
    if (current_step > 0) {
      $(`#s${current_step + 1}`)
        .css('background-color', 'none')
        .addClass('bg-secondary');
      current_step--;
      let prev_step = current_step;
      $(step[current_step + 1]).hide();
      $(step[prev_step]).show();

      if (current_step < stepCount) {
        $('#siguiente').text('Siguiente');
        $('#siguiente').removeClass('btn-success').addClass('btn-info');
      }
    } else if (current_step == 0) {
      $('.badge').remove();
      $('#rowButtons').show();
      $('#divTablas').hide();
      $('#formButtons').hide();
      $('#stepsDraw').hide();
    }
  });
});
