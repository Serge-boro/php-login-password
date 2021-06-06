// document.querySelector('.js-register').addEventListener('submit', (e) => {
//   e.preventDefault()
//   let error = document.querySelector('.js-error')
//   let data = {
//     email: document.querySelector('#form-stacke-text').value,
//     password: document.querySelector('#form-stacked-text').value,
//   }
//   const { email: em, password: p } = data
//   if (em.length < 6) {
//     error.style.display = 'block'
//     error.textContent = 'Please enter a valid email adress'
//   } else if (p.length < 8) {
//     error.style.display = 'block'
//     error.textContent =
//       'Please enter a password that is at least 8 characters long'
//   } else {
//     error.style.display = 'none'
//   }
// })

$(document).on('submit', 'form.js-register', function (event) {
  event.preventDefault()
  let form = $(this)
  let error = $('.js-error', form)
  let dataObj = {
    email: $("input[type='email']", form).val(),
    password: $("input[type='password']", form).val(),
  }
  if (dataObj.email.length < 6) {
    error.text('Please enter a valid email adress').show()
  } else if (dataObj.password.length < 8) {
    error
      .text('Please enter a password that is at least 8 characters long')
      .show()
  } else {
    error.hide()
  }

  $.ajax({
    type: 'POST',
    url: './ajax/register.php',
    data: dataObj,
    dataType: 'json',
    async: true,
  })
    .done(function ajaxDone(data) {
      console.log(data)
      if (data.redirect !== undefined) {
        // window.location = data.redirect
      }
      console.log(data.name)
    })
    .fail(function ajaxFailed(e) {
      console.log(e)
    })
    .always(function ajaxAlwaysDoThis(data) {
      console.log('Always')
    })

  return false
})
