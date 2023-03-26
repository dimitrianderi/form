const wrapperModal = document.getElementById('wrapper-modal');

const modalTitle = document.querySelector('#modal-title');
const modalMessage = document.querySelector('#modal-message');
const modalName = document.querySelector('#modal-name');
const modalEmail = document.querySelector('#modal-email');
const modalPassword = document.querySelector('#modal-password');
const modalGender = document.querySelector('#modal-gender');
const modalCountry = document.querySelector('#modal-country');
const modalSkills = document.querySelector('#modal-skills');
const modalFile = document.querySelector('#modal-file');
const modalPath = document.querySelector('#file-path');
const modalDate = document.querySelector('#modal-date');


if (wrapperModal) {
  wrapperModal.addEventListener('click', (e) => {
    if (e.target.classList.contains('btn-modal')) {
      e.preventDefault();
      let user_id = e.target.dataset.id;

      fetch(`scripts/handlers/modal_handler.php?id=${user_id}`)
        .then(response => response.text())
        .then(res => {
          const user = JSON.parse(res);
          
          modalTitle.textContent = user['title'];
          modalMessage.textContent = user['message'];
          modalName.textContent = user['name'];
          modalEmail.textContent = user['email'];
          modalPassword.textContent = user['password'];
          modalGender.textContent = user['gender'];
          modalCountry.textContent = user['country'] ? user['country'] : 'не указана';
          modalSkills.textContent = user['skills'] ? user['skills'] : 'не указаны';
          modalDate.textContent = user['date'];

          if (user['file_path']) {
            modalFile.classList.remove('hide');
            modalPath.href = user['file_path'];
          } else {
            modalFile.classList.add('hide');
          }

        })
        .catch(error => console.error(error));
    }
  });
}
